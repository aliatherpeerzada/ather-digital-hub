<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    /**
     * Display the dynamically generated sitemap directly in the browser
     */
    public function index()
    {
        $blogs = Blog::published()->latest()->get();
        $sitemapContent = view("sitemap", compact("blogs"))->render();
        
        return Response::make($sitemapContent, 200, [
            "Content-Type" => "text/xml"
        ]);
    }

    /**
     * Download the sitemap as an XML file (for the Admin Panel)
     */
    public function download()
    {
        $blogs = Blog::published()->latest()->get();
        $sitemapContent = view("sitemap", compact("blogs"))->render();
        
        return Response::make($sitemapContent, 200, [
            "Content-Type" => "text/xml",
            'Content-Disposition' => 'attachment; filename="sitemap.xml"',
        ]);
    }
}
