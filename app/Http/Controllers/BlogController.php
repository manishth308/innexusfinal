<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $blogs = Blog::published()
            ->with(['category', 'user'])
            ->orderByDesc('published_at')
            ->paginate(9);

        $categories = Category::has('blogs')->get();

        return view('pages.blog.index', compact('blogs', 'categories'));
    }

    public function show(string $slug): View
    {
        $blog = Blog::published()
            ->where('slug', $slug)
            ->with(['category', 'user'])
            ->firstOrFail();

        $related = Blog::published()
            ->where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();

        return view('pages.blog.show', compact('blog', 'related'));
    }
}