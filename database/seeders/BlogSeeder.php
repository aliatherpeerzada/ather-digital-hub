<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directory = resource_path('views/blogs');
        $files = \Illuminate\Support\Facades\File::files($directory);

        foreach ($files as $file) {
            if ($file->getExtension() !== 'php') continue;

            $content = file_get_contents($file->getPathname());
            
            // Extract Meta Title
            preg_match('/<title>(.*?)<\/title>/is', $content, $metaTitleMatch);
            $metaTitle = isset($metaTitleMatch[1]) ? trim($metaTitleMatch[1]) : 'Blog Title';

            // Extract Meta Description
            preg_match('/<meta name="description" content="(.*?)">/is', $content, $metaDescMatch);
            $metaDescription = isset($metaDescMatch[1]) ? trim($metaDescMatch[1]) : '';

            // Extract Canonical (for slug)
            preg_match('/<link rel="canonical" href="\{\{\s*url\(\'(.*?)\'\)\s*\}\}" \/>/is', $content, $canonicalMatch);
            $slug = isset($canonicalMatch[1]) ? trim($canonicalMatch[1]) : str_replace('_', '-', str_replace('.blade.php', '', $file->getFilename()));

            // Extract H1 Title
            preg_match('/<h1[^>]*>(.*?)<\/h1>/is', $content, $titleMatch);
            $title = isset($titleMatch[1]) ? trim(strip_tags($titleMatch[1])) : $metaTitle;
            
            // Extract Main Image
            preg_match('/<div class="blog-image-container">.*?<img src="(.*?)"/is', $content, $imageMatch);
            $imageRaw = isset($imageMatch[1]) ? $imageMatch[1] : '';
            // Extract path from {{ asset('img/blogs/...') }}
            preg_match('/img\/blogs\/([^\']+)/i', $imageRaw, $imgNameMatch);
            $mainImage = isset($imgNameMatch[0]) ? $imgNameMatch[0] : '';
            
            // Image alt
            preg_match('/<div class="blog-image-container">.*?alt="(.*?)"/is', $content, $altMatch);
            $mainImageAlt = isset($altMatch[1]) ? trim($altMatch[1]) : $title;

            // Extract main content
            // The content is usually within <div class="container pb-5 blog-content"> or similar
            // Specifically between <div class="row  pb-5 "> and <x-contact />
            preg_match('/<div class="row\s+pb-5\s*">(.*?)<\/div>\s*<\/div>\s*<x-contact/is', $content, $contentMatch);
            
            if (isset($contentMatch[1])) {
                $blogContent = trim($contentMatch[1]);
            } else {
                // Fallback parsing if exact tags differ
                $blogContent = '<p>Content missing or unparseable.</p>';
            }

            $pageExcerpt = substr(strip_tags($blogContent), 0, 150) . '...';

            \App\Models\Blog::updateOrCreate(
                ['slug' => $slug],
                [
                    'meta_title' => $metaTitle,
                    'meta_description' => $metaDescription,
                    'canonical' => url($slug),
                    'title' => $title,
                    'page_excerpt' => $pageExcerpt,
                    'main_image' => $mainImage,
                    'main_image_alt' => $mainImageAlt,
                    'content' => $blogContent,
                ]
            );
        }
    }
}
