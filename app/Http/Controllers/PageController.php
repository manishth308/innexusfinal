<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Testimonial;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $testimonials = Testimonial::active()->get();

        return view('pages.home', compact('testimonials'));
    }

    public function show(string $slug): View
    {
        $page = Page::where('slug', $slug)
            ->with(['faqs' => fn ($query) => $query->where('is_active', true)->orderBy('sort_order')])
            ->firstOrFail();

        // Never resolve an unchecked DB string directly into view() - the
        // Filament form already limits blade_file to a dropdown of real
        // files, but a record could still go stale if a template gets
        // renamed/deleted on disk after the Page was saved.
        $relativePath = str_replace('.', '/', $page->blade_file);
        $viewPath = resource_path("views/{$relativePath}.blade.php");

        if (! File::exists($viewPath)) {
            abort(404);
        }

        return view($page->blade_file, compact('page'));
    }
}