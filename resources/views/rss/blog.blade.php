<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
<channel>
    <title>{{ config('app.name', 'IntechNexus') }} Blog</title>
    <link>{{ route('blog.index') }}</link>
    <description>Insights, updates, and ideas from the IntechNexus team.</description>
    <language>en-us</language>
    <atom:link href="{{ route('blog.feed') }}" rel="self" type="application/rss+xml" />
@foreach ($blogs as $blog)
    <item>
        <title>{{ $blog->seoTitle() }}</title>
        <link>{{ route('blog.show', $blog->slug) }}</link>
        <guid isPermaLink="true">{{ route('blog.show', $blog->slug) }}</guid>
        <description>{{ $blog->seoDescription() }}</description>
        @if ($blog->published_at)
        <pubDate>{{ $blog->published_at->toRfc2822String() }}</pubDate>
        @endif
        @if ($blog->user)
        <dc:creator>{{ $blog->user->name }}</dc:creator>
        @endif
    </item>
@endforeach
</channel>
</rss>
