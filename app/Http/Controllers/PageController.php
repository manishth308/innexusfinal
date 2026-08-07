<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Page;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
        $viewPath = resource_path("views/{$page->blade_file}.blade.php");

        if (! File::exists($viewPath)) {
            abort(404);
        }

        return view($page->blade_file, compact('page'));
    }

    public function submitContact(Request $request): RedirectResponse
    {
        // Honeypot - a hidden field real users never fill in, bots often do.
        if (filled($request->input('website'))) {
            return back()->with('status', 'Thanks! We will be in touch soon.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:5000'],
        ]);

        Lead::create([
            ...$validated,
            'source' => 'contact_form',
            'status' => 'new',
        ]);

        return back()->with('status', 'Thanks! We will be in touch soon.');
    }
}
