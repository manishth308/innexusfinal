<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Placeholder: integrate with your mail/notification system here.
        // For now we just redirect back with a success message.
        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for reaching out. We will get back to you within one business day.');
    }
}
