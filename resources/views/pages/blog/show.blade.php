@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
@endphp
@extends('layouts.app')
@section('title', $metaTitle)

@section('content')
@include('partials.blog-jsonld')
<article class="py-24 bg-[#0b0c10] min-h-screen">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
        <nav class="flex flex-wrap items-center gap-2 text-sm font-medium text-purple-400 mb-10" aria-label="Breadcrumb">
            <a href="{{ url('/') }}" class="hover:text-purple-300 transition-colors">Home</a>
            <span class="text-gray-500">/</span>
            <a href="{{ route('blog.index') }}" class="hover:text-purple-300 transition-colors">Blog</a>
            @if($blog->category)
                <span class="text-gray-500">/</span>
                <a href="{{ route('blog.category', $blog->category->slug) }}" class="hover:text-purple-300 transition-colors">{{ $blog->category->name }}</a>
            @endif
            <span class="text-gray-500">/</span>
            <span class="text-purple-400 truncate max-w-xs">{{ $blog->title }}</span>
        </nav>

        <div class="lg:grid lg:grid-cols-[1fr_260px] lg:gap-16 lg:items-start">
            {{-- Main content column --}}
            <div class="max-w-3xl">
                @if($blog->category)
                    <span class="text-xs uppercase tracking-wide text-purple-400 font-semibold">{{ $blog->category->name }}</span>
                @endif
                <h1 class="text-3xl md:text-5xl font-bold text-white mt-3 mb-4">{{ $blog->title }}</h1>
                <p class="text-gray-500 text-sm mb-10">
                    {{ $blog->published_at?->format('F j, Y') }}
                    @if($blog->user) &middot; {{ $blog->user->name }} @endif
                </p>

                @if($blog->featured_image)
                    <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}" width="768" height="432" class="w-full rounded-2xl mb-10">
                @endif

                {{-- On mobile/tablet there's no sidebar to hold the TOC, so a
                     compact non-sticky version sits inline instead. --}}
                @if(count($tocItems))
                    <nav aria-label="Table of contents" class="lg:hidden mb-10 p-5 rounded-xl bg-white/[0.03] border border-white/10">
                        <p class="text-xs uppercase tracking-wide text-gray-400 font-semibold mb-3">On this page</p>
                        <ul class="space-y-2 text-sm">
                            @foreach($tocItems as $item)
                                <li style="padding-left: {{ ($item['level'] - 2) * 12 }}px">
                                    <a href="#{{ $item['id'] }}" class="text-gray-300 hover:text-purple-300 transition-colors">{{ $item['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                @endif

                <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed">
                    {!! $bodyHtml !!}
                </div>

                {{-- Author byline --}}
                @if($blog->user)
                    <div class="mt-16 pt-10 border-t border-white/10 flex items-start gap-4">
                        @if($blog->user->getFilamentAvatarUrl())
                            <img src="{{ $blog->user->getFilamentAvatarUrl() }}" alt="{{ $blog->user->name }}" class="w-14 h-14 rounded-full object-cover flex-shrink-0">
                        @else
                            <div class="w-14 h-14 rounded-full bg-purple-500/20 text-purple-300 flex items-center justify-center font-bold text-lg flex-shrink-0">
                                {{ Str::of($blog->user->name)->explode(' ')->map(fn ($p) => Str::substr($p, 0, 1))->take(2)->join('') }}
                            </div>
                        @endif
                        <div>
                            <p class="text-white font-semibold">{{ $blog->user->name }}</p>
                            @if($blog->user->job_title)
                                <p class="text-gray-400 text-sm">{{ $blog->user->job_title }}</p>
                            @endif
                            @if($blog->user->bio)
                                <p class="text-gray-400 text-sm mt-2 leading-relaxed max-w-xl">{{ $blog->user->bio }}</p>
                            @endif
                            @if($blog->user->social_url)
                                <a href="{{ $blog->user->social_url }}" target="_blank" rel="noopener noreferrer nofollow" class="inline-block text-purple-400 hover:text-purple-300 text-sm mt-2 transition-colors">
                                    Follow &rarr;
                                </a>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            {{-- Sticky TOC sidebar (desktop only) --}}
            @if(count($tocItems))
                <aside class="hidden lg:block">
                    <nav aria-label="Table of contents" class="sticky top-24 p-5 rounded-xl bg-white/[0.03] border border-white/10">
                        <p class="text-xs uppercase tracking-wide text-gray-400 font-semibold mb-3">On this page</p>
                        <ul class="space-y-2 text-sm">
                            @foreach($tocItems as $item)
                                <li style="padding-left: {{ ($item['level'] - 2) * 12 }}px">
                                    <a href="#{{ $item['id'] }}" class="text-gray-300 hover:text-purple-300 transition-colors">{{ $item['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </aside>
            @endif
        </div>
    </div>

    @if($related->isNotEmpty())
        <div class="max-w-7xl mx-auto px-6 sm:px-12 mt-20 pt-16 border-t border-white/10">
            <h2 class="text-2xl font-bold text-white mb-8">Related Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($related as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="block rounded-2xl bg-white/[0.03] border border-purple-500/20 hover:border-purple-400 p-6 transition-all">
                        <h3 class="text-lg font-bold text-white mb-2">{{ $post->title }}</h3>
                        <p class="text-gray-500 text-xs">{{ $post->published_at?->format('M j, Y') }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</article>
@endsection
