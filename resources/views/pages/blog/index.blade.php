@php
use Illuminate\Support\Facades\Storage;
@endphp
@extends('layouts.app')
@section('title', 'Blog - IntechNexus')

@section('content')
<section class="bg-[#0b0c10] min-h-screen">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 pt-24 pb-10 flex flex-wrap items-end justify-between gap-6">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Blog</h1>
            <p class="text-gray-400 text-lg leading-relaxed">Insights, updates, and ideas from our team.</p>
        </div>
        <div class="flex items-center gap-4 text-sm font-mono uppercase tracking-wide">
            <a href="{{ route('filament.blogs.auth.login') }}" class="text-purple-400 hover:text-purple-300 transition-colors">Write for Us</a>
        </div>
    </div>

    @if($hero->isEmpty())
        <div class="max-w-7xl mx-auto px-6 sm:px-12 pb-24">
            <p class="text-gray-400">No blog posts yet — check back soon.</p>
        </div>
    @else
        {{-- Hero: 1 large + up to 2 stacked smaller featured posts --}}
        <div class="max-w-7xl mx-auto px-6 sm:px-12 pb-16">
            <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-6">
                @php $mainPost = $hero->first(); @endphp
                <a href="{{ route('blog.show', $mainPost->slug) }}" class="group relative block rounded-2xl overflow-hidden h-[320px] lg:h-[540px]">
                    @if($mainPost->featured_image)
                        <img src="{{ Storage::url($mainPost->featured_image) }}" alt="{{ $mainPost->title }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    @else
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-900/60 via-purple-800/30 to-purple-950/40"></div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                    @if($mainPost->category)
                        <span class="absolute top-5 left-5 px-3 py-1 rounded bg-black/60 backdrop-blur-sm text-white text-xs font-mono uppercase tracking-wide">{{ $mainPost->category->name }}</span>
                    @endif
                    <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                        <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4 leading-snug">{{ $mainPost->title }}</h2>
                        <div class="flex flex-wrap items-center gap-4 text-xs text-gray-300">
                            @if($mainPost->user)
                                <span class="flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                    {{ $mainPost->user->name }}
                                </span>
                            @endif
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm9 7H5v6h10V9z" clip-rule="evenodd" /></svg>
                                {{ $mainPost->published_at?->format('M j, Y') }}
                            </span>
                        </div>
                    </div>
                </a>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">
                    @foreach($hero->skip(1)->take(2) as $sidePost)
                        <a href="{{ route('blog.show', $sidePost->slug) }}" class="group relative block rounded-2xl overflow-hidden h-[220px] lg:h-[257px]">
                            @if($sidePost->featured_image)
                                <img src="{{ Storage::url($sidePost->featured_image) }}" alt="{{ $sidePost->title }}" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            @else
                                <div class="absolute inset-0 bg-gradient-to-br from-purple-900/60 via-purple-800/30 to-purple-950/40"></div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                            @if($sidePost->category)
                                <span class="absolute top-4 left-4 px-2.5 py-1 rounded bg-black/60 backdrop-blur-sm text-white text-[10px] font-mono uppercase tracking-wide">{{ $sidePost->category->name }}</span>
                            @endif
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h3 class="text-base font-bold text-white mb-2 leading-snug">{{ $sidePost->title }}</h3>
                                <span class="text-[11px] text-gray-300">{{ $sidePost->published_at?->format('M j, Y') }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- One row per top category, each a "View All" toward its plain-grid listing --}}
        @foreach($categorySections as $section)
            <div class="max-w-7xl mx-auto px-6 sm:px-12 py-14 border-t border-white/10">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-white">{{ $section['category']->name }}</h2>
                    <a href="{{ route('blog.category', $section['category']->slug) }}" class="text-purple-400 hover:text-purple-300 text-sm font-mono uppercase tracking-wide transition-colors">
                        View All &rarr;
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($section['posts'] as $post)
                        <a href="{{ route('blog.show', $post->slug) }}" class="group block rounded-2xl bg-white/[0.03] border border-purple-500/20 hover:border-purple-400 overflow-hidden transition-all duration-300">
                            @if($post->featured_image)
                                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" loading="lazy" width="400" height="192" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-6">
                                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-purple-300 transition-colors">{{ $post->title }}</h3>
                                <p class="text-gray-500 text-xs">{{ $post->published_at?->format('M j, Y') }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    @endif
</section>
@endsection
