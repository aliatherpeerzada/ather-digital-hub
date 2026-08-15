<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Static Pages -->
    <url>
        <loc>{{ url("/") }}</loc>
        <lastmod>{{ now()->tz("UTC")->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url("/blog") }}</loc>
        <lastmod>{{ now()->tz("UTC")->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <!-- Dynamic Blogs -->
    @foreach($blogs as $blog)
    <url>
        <loc>{{ route('blog.show', $blog->slug) }}</loc>
        <lastmod>{{ $blog->updated_at->tz("UTC")->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach
</urlset>
