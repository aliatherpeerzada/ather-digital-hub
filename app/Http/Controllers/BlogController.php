<?php

namespace App\Http\Controllers;
 
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function admin_blogs()
    {
        $blogs = Blog::with('author')->latest()->get();
        return view('admin.blogs.blogs', compact('blogs'));
    }

    public function admin_blogs_create()
    {
        return view('admin.blogs.blogs_create');
    }


    public function admin_blogs_store(Request $request)
    {


        $request->validate([

            'meta_description' => 'required',
            'canonical' => 'required',
            'title' => 'required',
            'page_excerpt' => 'required',
            'content' => 'required',
            'main_image' => 'required',
            'main_image_alt' => 'required',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        $slug = Str::slug($request->title, '-');

        $main_image = null;

        if ($request->hasFile('main_image')) {
            $main_image = $request->file('main_image')->store('blog_page', 'public');
        }

        Blog::create([
            'slug' => $slug,
            'meta_title' => $request->title,
            'meta_description' => $request->meta_description,
            'canonical' => $request->canonical,
            'title' => $request->title,
            'page_excerpt' => $request->page_excerpt,
            'main_image' => $main_image,
            'main_image_alt' => $request->main_image_alt,
            'content' => $request->content,
            'status' => $request->status,
            'published_at' => $request->published_at,
            'author_id' => \Illuminate\Support\Facades\Auth::id(),
        ]);

        return redirect()->route('blogs')->with('message', 'Blog Added Successfully');
    }

    public function admin_blogs_edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.blogs_edit', compact('blog'));
    }


    public function admin_blogs_update(Request $request, $id)
    {
        $request->validate([

            'meta_description' => 'required',
            'canonical' => 'required',
            'title' => 'required',
            'page_excerpt' => 'required',
            'content' => 'required',
            'main_image_alt' => 'required',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        $blog = Blog::findOrFail($id);
        $slug = Str::slug($request->title, '-');
        if ($request->hasFile('main_image')) {

            if ($blog->main_image) {
                Storage::disk('public')->delete($blog->main_image);
            }


            $main_image = $request->file('main_image')->store('blog_page', 'public');
        } else {
            // Keep the old image if no new image is uploaded
            $main_image = $blog->main_image;
        }


        $blog->update([
            'slug' => $slug,
            'meta_title' => $request->title,
            'meta_description' => $request->meta_description,
            'canonical' => $request->canonical,
            'title' => $request->title,
            'page_excerpt' => $request->page_excerpt,
            'main_image' => $main_image,
            'main_image_alt' => $request->main_image_alt,
            'content' => $request->content,
            'status' => $request->status,
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('blogs')->with('message', 'Blog Updated Successfully');
    }

    public function admin_blogs_delete($id)
    {
        $blog = Blog::find($id);

        if ($blog->main_image) {
            Storage::disk('public')->delete($blog->main_image);
        }

        $blog->delete();

        return redirect()->route('blogs')->with('message', 'Blog Deleted Successfully');
    }

    public function index()
    {
        $blogs = Blog::published()
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('front_end.blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::with('author')
            ->where('slug', $slug)
            ->published()
            ->firstOrFail();
            
        $blogs = Blog::published()
            ->where('id', '!=', $blog->id)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('blog_template', compact('blog','blogs'));
    }
}

