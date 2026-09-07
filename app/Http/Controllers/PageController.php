<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        try {
            $testimonials = Testimonial::active()->get();
        } catch (\Throwable $e) {
            Log::error('Failed to load testimonials for the homepage.', ['error' => $e->getMessage()]);
            $testimonials = collect();
        }

        return view('pages.home', compact('testimonials'));
    }

    
    public function show(string $slug): View|RedirectResponse
    {
        // The catch-all route also matches "/home", but the real home page
        // is served (with testimonials) at "/" via home() above. Redirect
        // rather than render the seeded 'home' Page record here, which
        // would 500 on the missing $testimonials variable and duplicates
        // the root URL as a second indexable page.
        if ($slug === 'home') {
            return redirect()->route('home', [], 301);
        }

        $page = Page::where('slug', $slug)
            ->with('activeFaqs')
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