<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    /**
     * Scoped to blog content only (index, category pages, posts) - by
     * design, not an oversight. The wider site's static/service pages
     * aren't included here.
     */
    public function index(): Response
    {
        $urls = collect();

        $urls->push([
            'loc' => route('blog.index'),
            'lastmod' => $this->parseDate(Blog::published()->max('published_at')),
        ]);

        Category::has('blogs')->get()->each(function (Category $category) use ($urls) {
            $lastPublished = $this->parseDate(
                Blog::published()->where('category_id', $category->id)->max('published_at')
            );

            // Skip categories that exist but have nothing published under
            // them yet - no point listing a page with no content.
            if ($lastPublished) {
                $urls->push([
                    'loc' => route('blog.category', $category->slug),
                    'lastmod' => $lastPublished,
                ]);
            }
        });

        Blog::published()
            ->orderByDesc('published_at')
            ->get(['slug', 'updated_at'])
            ->each(function (Blog $blog) use ($urls) {
                $urls->push([
                    'loc' => route('blog.show', $blog->slug),
                    // updated_at IS cast by Eloquent (it's a hydrated
                    // model attribute, not a raw aggregate), so this one
                    // is already a Carbon instance.
                    'lastmod' => $blog->updated_at,
                ]);
            });

        $xml = view('sitemap.blog', ['urls' => $urls])->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    /**
     * max()/min() aggregates come back as raw strings straight from the
     * DB driver, not through Eloquent's casts - so unlike a normal model
     * attribute, this needs an explicit parse before ->toAtomString() (or
     * any Carbon method) can be called on it.
     */
    private function parseDate(?string $value): ?Carbon
    {
        return $value ? Carbon::parse($value) : null;
    }
}
