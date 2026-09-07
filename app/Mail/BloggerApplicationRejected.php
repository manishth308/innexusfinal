<?php

namespace App\Mail;

use App\Models\BloggerApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BloggerApplicationRejected extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public BloggerApplication $application)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Update on your InTech Nexus blogger application',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.blogger-application-rejected',
        );
    }
}
