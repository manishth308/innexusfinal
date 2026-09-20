<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Response;

class BlogFeedController extends Controller
{
    /**
     * RSS 2.0, excerpt-only content (drives traffic back to the site
     * rather than letting the whole post be read inside a feed reader) -
     * the 20 most recently published posts.
     */
    public function index(): Response
    {
        $blogs = Blog::published()
            ->with('user')
            ->orderByDesc('published_at')
            ->limit(20)
            ->get();

        $xml = view('rss.blog', ['blogs' => $blogs])->render();

        return response($xml, 200)->header('Content-Type', 'application/rss+xml; charset=UTF-8');
    }
}
