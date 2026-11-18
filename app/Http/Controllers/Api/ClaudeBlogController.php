<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

/**
 * Blog API used exclusively by Claude (protected by the claude.token middleware).
 *
 * Rules:
 *  - Every blog created here is forced to status "draft" and flagged created_by_ai.
 *  - Claude can only view / edit blogs it created (created_by_ai = true).
 *  - Once an admin publishes a blog, Claude can no longer edit it.
 *  - Claude can never publish, schedule or delete a blog.
 */
class ClaudeBlogController extends Controller
{
    private const MAX_IMAGE_KB = 4096;

    /** GET /api/claude/blogs?status=draft|published */
    public function index(Request $request): JsonResponse
    {
        $request->validate(['status' => 'nullable|in:draft,published']);

        $blogs = Blog::where('created_by_ai', true)
            ->when($request->status, fn ($q, $s) => $q->where('status', $s))
            ->latest()
            ->paginate(20);

        $blogs->getCollection()->transform(fn (Blog $b) => $this->transform($b, false));

        return response()->json(['success' => true, 'data' => $blogs]);
    }

    /** GET /api/claude/blogs/{id} */
    public function show(int $id): JsonResponse
    {
        $blog = Blog::where('created_by_ai', true)->findOrFail($id);

        return response()->json(['success' => true, 'data' => $this->transform($blog)]);
    }

    /** POST /api/claude/blogs */
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate($this->rules(true));

        $imagePath = $this->resolveImage($request);
        if (! $imagePath) {
            throw ValidationException::withMessages([
                'main_image' => 'A main_image file or main_image_url is required.',
            ]);
        }

        $blog = Blog::create([
            'title'            => $data['title'],
            'slug'             => $this->uniqueSlug($data['slug'] ?? $data['title']),
            'meta_title'       => $data['meta_title'] ?? $data['title'],
            'meta_description' => $data['meta_description'],
            'canonical'        => $data['canonical'],
            'page_excerpt'     => $data['page_excerpt'],
            'main_image'       => $imagePath,
            'main_image_alt'   => $data['main_image_alt'],
            'content'          => $data['content'],
            // Enforced server-side – never taken from the request
            'status'           => 'draft',
            'published_at'     => null,
            'author_id'        => null,
            'created_by_ai'    => true,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Blog created as draft. It will be published after admin approval.',
            'data'    => $this->transform($blog),
        ], 201);
    }

    /** PUT|PATCH|POST /api/claude/blogs/{id} */
    public function update(Request $request, int $id): JsonResponse
    {
        $data = $request->validate($this->rules(false));

        return DB::transaction(function () use ($request, $data, $id) {
            // Lock the row so an admin publishing at the same moment can't be overwritten
            $blog = Blog::where('created_by_ai', true)->lockForUpdate()->findOrFail($id);

            if ($blog->status !== 'draft') {
                return response()->json([
                    'success' => false,
                    'message' => 'This blog has been published and can no longer be edited by AI.',
                ], 403);
            }

            $update = collect($data)->only([
                'title', 'meta_title', 'meta_description', 'canonical',
                'page_excerpt', 'main_image_alt', 'content',
            ])->all();

            if (isset($data['slug'])) {
                $update['slug'] = $this->uniqueSlug($data['slug'], $blog->id);
            } elseif (isset($data['title']) && $data['title'] !== $blog->title) {
                $update['slug'] = $this->uniqueSlug($data['title'], $blog->id);
            }

            if (isset($data['title']) && ! isset($data['meta_title'])) {
                $update['meta_title'] = $data['title'];
            }

            if ($newImage = $this->resolveImage($request)) {
                $old = $blog->main_image;
                $update['main_image'] = $newImage;
                if ($old && ! Str::startsWith($old, 'img/')) {
                    DB::afterCommit(fn () => Storage::disk('public')->delete($old));
                }
            }

            // Status stays draft no matter what was sent
            $update['status'] = 'draft';
            $update['published_at'] = null;

            $blog->update($update);

            return response()->json([
                'success' => true,
                'message' => 'Draft updated.',
                'data'    => $this->transform($blog->fresh()),
            ]);
        });
    }

    // ------------------------------------------------------------------

    private function rules(bool $creating): array
    {
        $req = $creating ? 'required' : 'sometimes|required';

        return [
            'title'            => "$req|string|max:255",
            'slug'             => 'nullable|string|max:255',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => "$req|string|max:255",
            'canonical'        => "$req|string|max:255",
            'page_excerpt'     => "$req|string|max:255",
            'main_image_alt'   => "$req|string|max:255",
            'content'          => "$req|string",
            'main_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:' . self::MAX_IMAGE_KB,
            'main_image_url'   => 'nullable|url:https|max:2048',
        ];
    }

    /** Store an uploaded file or download an https image URL. Returns storage path or null. */
    private function resolveImage(Request $request): ?string
    {
        if ($request->hasFile('main_image')) {
            return $request->file('main_image')->store('blog_page', 'public');
        }

        if (! $request->filled('main_image_url')) {
            return null;
        }

        $url = $request->input('main_image_url');
        $host = parse_url($url, PHP_URL_HOST);

        // Basic SSRF protection: refuse private / reserved addresses
        $ip = $host ? gethostbyname($host) : null;
        if (! $ip || ! filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
            throw ValidationException::withMessages(['main_image_url' => 'Image host is not allowed.']);
        }

        $response = Http::timeout(15)->withoutRedirecting()->get($url);

        $mimeMap = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];
        $mime = strtolower(trim(explode(';', (string) $response->header('Content-Type'))[0]));

        if (! $response->successful() || ! isset($mimeMap[$mime])) {
            throw ValidationException::withMessages(['main_image_url' => 'Could not download a valid jpg/png/webp image.']);
        }

        $body = $response->body();
        if (strlen($body) > self::MAX_IMAGE_KB * 1024 || @getimagesizefromstring($body) === false) {
            throw ValidationException::withMessages(['main_image_url' => 'Image is invalid or too large.']);
        }

        $path = 'blog_page/' . Str::random(40) . '.' . $mimeMap[$mime];
        Storage::disk('public')->put($path, $body);

        return $path;
    }

    private function uniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $base = Str::slug($value) ?: Str::random(8);
        $slug = $base;
        $i = 2;

        while (Blog::where('slug', $slug)->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }

    private function transform(Blog $blog, bool $withContent = true): array
    {
        $data = [
            'id'               => $blog->id,
            'title'            => $blog->title,
            'slug'             => $blog->slug,
            'meta_title'       => $blog->meta_title,
            'meta_description' => $blog->meta_description,
            'canonical'        => $blog->canonical,
            'page_excerpt'     => $blog->page_excerpt,
            'main_image'       => $blog->main_image ? $blog->image_url : null,
            'main_image_alt'   => $blog->main_image_alt,
            'status'           => $blog->status,
            'editable'         => $blog->status === 'draft',
            'published_at'     => optional($blog->published_at)->toIso8601String(),
            'created_at'       => optional($blog->created_at)->toIso8601String(),
            'updated_at'       => optional($blog->updated_at)->toIso8601String(),
        ];

        if ($withContent) {
            $data['content'] = $blog->content;
        }

        return $data;
    }
}
