<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.company.contact');
    }

    public function submit(Request $request): RedirectResponse
    {
        // Honeypot: a field named "website" that's visually hidden from real
        // visitors (see the form partial) but that simple bots tend to fill
        // in automatically. If it's populated, silently pretend success
        // without validating, saving, or emailing anything.
        if (filled($request->input('website'))) {
            return redirect()
                ->route('contact')
                ->with('success', 'Thank you for reaching out. We will get back to you within one business day.');
        }

        // These match the fields the form in
        // resources/views/pages/company/contact.blade.php actually sends -
        // previously this validated against a "message" field the form
        // never sent, so every real submission failed validation.
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'project_type' => 'nullable|string|in:build,design,grow',
            'budget_range' => 'nullable|string|in:under-5k,5k-15k,15k-50k,50k-plus,not-sure',
            'project_details' => 'nullable|string|max:2000',
        ]);

        $lead = Lead::create([
            'name' => $validated['name'],
            'company' => $validated['company'] ?? null,
            'email' => $validated['email'],
            'message' => $validated['project_details'] ?? null,
            'project_type' => $validated['project_type'] ?? null,
            'budget_range' => $validated['budget_range'] ?? null,
            'source' => 'contact_form',
        ]);

        $this->notifyOfNewLead($lead);

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for reaching out. We will get back to you within one business day.');
    }

    /**
     * Best-effort email alert. The lead is already saved by this point, so
     * a mail failure (bad SMTP config, etc.) should never surface as an
     * error to the visitor or prevent the submission from succeeding.
     */
    private function notifyOfNewLead(Lead $lead): void
    {
        $recipient = config('mail.leads_notification_email');

        if (blank($recipient)) {
            return;
        }

        try {
            Mail::raw(
                "New lead from the contact form:\n\n"
                    ."Name: {$lead->name}\n"
                    .'Company: '.($lead->company ?? '-')."\n"
                    ."Email: {$lead->email}\n"
                    .'Project type: '.($lead->project_type ?? '-')."\n"
                    .'Budget range: '.($lead->budget_range ?? '-')."\n"
                    .'Details: '.($lead->message ?? '-')."\n",
                function ($message) use ($recipient, $lead) {
                    $message->to($recipient)->subject("New lead: {$lead->name}");
                }
            );
        } catch (\Throwable $e) {
            Log::warning('Failed to send lead notification email.', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
