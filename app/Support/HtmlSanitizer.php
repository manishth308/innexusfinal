<?php

namespace App\Support;

use Mews\Purifier\Facades\Purifier;

/**
 * Single choke point for sanitizing any rich-editor HTML before it is
 * persisted or rendered. Never render RichEditor output (e.g. Blog::body)
 * without passing through here first - the editor's limited toolbar is not
 * a guarantee against a compromised writer account or a stored-XSS payload
 * pasted directly into the editor's HTML source mode.
 */
class HtmlSanitizer
{
    public static function clean(string $html): string
    {
        return Purifier::clean($html, 'blog_body');
    }
}
