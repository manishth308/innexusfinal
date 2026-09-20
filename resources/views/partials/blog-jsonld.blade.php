@php
    // BlogPosting schema for the current $blog - only meaningful on the
    // show page (a single article), so this partial is only ever included
    // from pages/blog/show.blade.php, never the homepage or category
    // listings.
    $jsonLd = [
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'headline' => $blog->seoTitle(),
        'description' => $blog->seoDescription(),
        'image' => $blog->seoImageUrl() ?? asset('images/intech-logo.png'),
        'datePublished' => $blog->published_at?->toAtomString(),
        'dateModified' => ($blog->updated_at ?? $blog->published_at)?->toAtomString(),
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => route('blog.show', $blog->slug),
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => config('app.name', 'IntechNexus'),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('images/intech-logo.png'),
            ],
        ],
    ];

    if ($blog->user) {
        // array_filter drops 'url' entirely when social_url isn't set,
        // rather than emitting a null/empty value into the JSON.
        $jsonLd['author'] = array_filter([
            '@type' => 'Person',
            'name' => $blog->user->name,
            'url' => $blog->user->social_url,
        ]);
    }
@endphp
<script type="application/ld+json">{!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
