@php
    // $__env->yieldContent('title') picks up whatever any page already set
    // via @section('title', ...) - which is every page in the app today -
    // so this works without touching a single one of them. $metaTitle is
    // only for pages (like the blog show page) that want a title distinct
    // from what they put in the <title> section.
    $__title = trim($__env->yieldContent('title')) ?: ($metaTitle ?? config('app.name', 'IntechNexus'));
    $__description = $metaDescription ?? 'IntechNexus builds web, mobile, and cloud products for growing businesses.';
    $__image = $ogImage ?? asset('images/intech-logo.png');
    $__canonical = $canonicalUrl ?? url()->current();
@endphp
<title>{{ $__title }}</title>
<meta name="description" content="{{ $__description }}">
<link rel="canonical" href="{{ $__canonical }}">

<meta property="og:type" content="{{ $ogType ?? 'website' }}">
<meta property="og:site_name" content="{{ config('app.name', 'IntechNexus') }}">
<meta property="og:title" content="{{ $__title }}">
<meta property="og:description" content="{{ $__description }}">
<meta property="og:image" content="{{ $__image }}">
<meta property="og:url" content="{{ $__canonical }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $__title }}">
<meta name="twitter:description" content="{{ $__description }}">
<meta name="twitter:image" content="{{ $__image }}">

<link rel="alternate" type="application/rss+xml" title="{{ config('app.name', 'IntechNexus') }} Blog" href="{{ route('blog.feed') }}">
{{-- JSON-LD structured data: see partials/blog-jsonld.blade.php, included directly on the blog show page only --}}

