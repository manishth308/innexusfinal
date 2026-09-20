<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Support\TableOfContents;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Magazine-style homepage: a hero block (1 large + 2 small, the most
     * recent posts overall) followed by one row per top category, each
     * linking to that category's full plain-grid listing via category().
     * Deliberately NOT paginated - this is a curated landing page, not the
     * "browse everything" view (that's what /blog/category/{slug} is for).
     */
    public function index(): View
    {
        $hero = Blog::published()
            ->with(['category', 'user'])
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();

        // Fetch every category's published-post count, then filter/sort in
        // PHP rather than SQL. withCount() builds the count as a
        // correlated subquery, not a real GROUP BY aggregate - SQLite
        // rejects a HAVING clause against that ("HAVING clause on a
        // non-aggregate query"), so doing this in the DB layer isn't
        // portable across drivers.
        $categorySections = Category::query()
            ->withCount(['blogs' => fn ($query) => $query->published()])
            ->get()
            ->filter(fn (Category $category) => $category->blogs_count > 0)
            ->sortBy([
                ['blogs_count', 'desc'],
                ['name', 'asc'],
            ])
            ->take(4)
            ->map(fn (Category $category) => [
                'category' => $category,
                'posts' => Blog::published()
                    ->where('category_id', $category->id)
                    ->with(['category', 'user'])
                    ->orderByDesc('published_at')
                    ->limit(3)
                    ->get(),
            ]);

        return view('pages.blog.index', [
            'hero' => $hero,
            'categorySections' => $categorySections,
        ]);
    }

    /**
     * The plain paginated listing, filtered to one category - this is the
     * "View All" destination linked from every homepage category section.
     * Route-model-bound on slug, so an unknown category slug 404s before
     * this method even runs; a category that exists but has zero
     * published posts still renders normally, just with an empty state.
     */
    public function category(Category $category): View
    {
        $blogs = Blog::published()
            ->where('category_id', $category->id)
            ->with(['category', 'user'])
            ->orderByDesc('published_at')
            ->paginate(9);

        $categories = Category::has('blogs')->get();

        return view('pages.blog.category', [
            'blogs' => $blogs,
            'categories' => $categories,
            'activeCategory' => $category,
        ]);
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

        // Anchors can't be persisted on Blog::body itself (see
        // TableOfContents' docblock), so both the outline and the
        // anchor-bearing copy of the body are built fresh on every
        // request here and handed to the view.
        $toc = TableOfContents::extract($blog->body);

        return view('pages.blog.show', [
            'blog' => $blog,
            'related' => $related,
            'tocItems' => $toc['items'],
            'bodyHtml' => $toc['html'],
            'metaTitle' => $blog->seoTitle(),
            'metaDescription' => $blog->seoDescription(),
            'ogImage' => $blog->seoImageUrl() ?? asset('images/intech-logo.png'),
            'canonicalUrl' => route('blog.show', $blog->slug),
            'ogType' => 'article',
        ]);
    }
}
