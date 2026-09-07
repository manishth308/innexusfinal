<?php

namespace App\Http\Controllers;

use App\Enums\BloggerApplicationStatus;
use App\Models\BloggerApplication;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BloggerApplicationController extends Controller
{
    public function show(): View
    {
        return view('pages.blog.apply');
    }

    public function store(Request $request): RedirectResponse
    {
        // Honeypot - same pattern as the /contact form.
        if (filled($request->input('website'))) {
            return redirect()
                ->route('blogs.apply')
                ->with('success', "Thanks! We'll review your application and email you.");
        }

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'profession' => 'required|string|max:255',
        ]);

        if ($blocked = $this->blockingReason($validated['email'])) {
            return redirect()
                ->route('blogs.apply')
                ->withInput()
                ->withErrors(['email' => $blocked]);
        }

        BloggerApplication::create([
            ...$validated,
            'status' => BloggerApplicationStatus::Pending,
        ]);

        return redirect()
            ->route('blogs.apply')
            ->with('success', "Thanks! We'll review your application and email you.");
    }

    /**
     * Returns a user-facing message if this email can't apply right now,
     * or null if it's clear to submit.
     */
    private function blockingReason(string $email): ?string
    {
        if (User::where('email', $email)->exists()) {
            return 'An account already exists for this email. Please log in instead.';
        }

        if (BloggerApplication::where('email', $email)->where('status', BloggerApplicationStatus::Pending)->exists()) {
            return 'You already have an application under review for this email.';
        }

        $recentRejection = BloggerApplication::where('email', $email)
            ->where('status', BloggerApplicationStatus::Rejected)
            ->where('rejected_at', '>', now()->subDays(2))
            ->first();

        if ($recentRejection) {
            $retryAt = $recentRejection->rejected_at->addDays(2)->format('M j, Y g:i A');

            return "Your previous application wasn't approved. You can reapply after {$retryAt}.";
        }

        return null;
    }
}
