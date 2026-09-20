<?php

namespace App\Support;

use DOMDocument;
use DOMXPath;
use Illuminate\Support\Str;

/**
 * Builds an "On this page" outline from a Blog's already-sanitized body
 * HTML, and returns that body HTML again with id="..." anchors added to
 * its headings so the outline can link to them.
 *
 * IDs are injected here, at render time, rather than persisted: the
 * `blog_body` HTMLPurifier config (see config/purifier.php) doesn't allow
 * an id attribute on any element, so anything written into the stored
 * body would just be stripped back out on the next save anyway. This
 * keeps Blog::body itself untouched - only the copy handed to the view
 * gets IDs.
 */
class TableOfContents
{
    /**
     * @return array{html: string, items: array<int, array{id: string, text: string, level: int}>}
     */
    public static function extract(string $html): array
    {
        if (trim($html) === '') {
            return ['html' => $html, 'items' => []];
        }

        $dom = new DOMDocument();

        // The body is a fragment (no <html>/<body> wrapper), and may
        // contain characters libxml would otherwise warn about - both are
        // expected here, not errors worth surfacing.
        libxml_use_internal_errors(true);
        $dom->loadHTML(
            '<?xml encoding="utf-8" ?><div>'.$html.'</div>',
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );
        libxml_clear_errors();

        $xpath = new DOMXPath($dom);
        $headings = $xpath->query('//h2 | //h3 | //h4');

        $items = [];
        $seenIds = [];

        foreach ($headings as $heading) {
            $text = trim($heading->textContent);

            if ($text === '') {
                continue;
            }

            $baseId = Str::slug($text) ?: 'section';
            $id = $baseId;
            $suffix = 2;

            // Guard against two headings slugging to the same id (e.g. two
            // "Overview" sections) - anchors must be unique on the page.
            while (in_array($id, $seenIds, true)) {
                $id = $baseId.'-'.$suffix;
                $suffix++;
            }

            $seenIds[] = $id;
            $heading->setAttribute('id', $id);

            $items[] = [
                'id' => $id,
                'text' => $text,
                'level' => (int) substr($heading->nodeName, 1),
            ];
        }

        $wrapper = $dom->getElementsByTagName('div')->item(0);
        $innerHtml = '';

        foreach ($wrapper->childNodes as $child) {
            $innerHtml .= $dom->saveHTML($child);
        }

        return ['html' => $innerHtml, 'items' => $items];
    }
}
