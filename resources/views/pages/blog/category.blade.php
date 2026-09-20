@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
@endphp
@extends('layouts.app')
@section('title', $activeCategory->name.' - Blog - IntechNexus')

@section('content')
<section class="py-24 bg-[#0b0c10] min-h-screen">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
        <nav class="flex items-center gap-2 text-sm font-medium text-purple-400 mb-6" aria-label="Breadcrumb">
            <a href="{{ url('/') }}" class="hover:text-purple-300 transition-colors">Home</a>
            <span class="text-gray-500">/</span>
            <a href="{{ route('blog.index') }}" class="hover:text-purple-300 transition-colors">Blog</a>
            <span class="text-gray-500">/</span>
            <span class="text-purple-400">{{ $activeCategory->name }}</span>
        </nav>

        <div class="max-w-3xl mb-10 flex flex-wrap items-end justify-between gap-6">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $activeCategory->name }}</h1>
                <p class="text-gray-400 text-lg leading-relaxed">Posts filed under {{ $activeCategory->name }}.</p>
            </div>
            <div class="flex items-center gap-4 text-sm font-mono uppercase tracking-wide">
                <a href="{{ route('filament.blogs.auth.login') }}" class="text-purple-400 hover:text-purple-300 transition-colors">Write for Us</a>
            </div>
        </div>

        @if($categories->isNotEmpty())
            <div class="flex flex-wrap gap-3 mb-16">
                <a
                    href="{{ route('blog.index') }}"
                    class="px-4 py-1.5 rounded-full text-xs font-mono uppercase tracking-wide border border-white/10 text-gray-400 hover:text-white hover:border-white/30 transition-colors"
                >
                    All
                </a>
                @foreach($categories as $category)
                    <a
                        href="{{ route('blog.category', $category->slug) }}"
                        class="px-4 py-1.5 rounded-full text-xs font-mono uppercase tracking-wide border transition-colors {{ $activeCategory->id === $category->id ? 'border-purple-400 text-purple-300 bg-purple-500/10' : 'border-white/10 text-gray-400 hover:text-white hover:border-white/30' }}"
                    >
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        @endif

        @if($blogs->isEmpty())
            <p class="text-gray-400">No posts in this category yet — check back soon.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($blogs as $blog)
                    <a href="{{ route('blog.show', $blog->slug) }}" class="group block rounded-2xl bg-white/[0.03] border border-purple-500/20 hover:border-purple-400 overflow-hidden transition-all duration-300">
                        @if($blog->featured_image)
                            <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}" loading="lazy" width="600" height="192" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-6">
                            @if($blog->category)
                                <span class="text-xs uppercase tracking-wide text-purple-400 font-semibold">{{ $blog->category->name }}</span>
                            @endif
                            <h2 class="text-xl font-bold text-white mt-2 mb-3 group-hover:text-purple-300 transition-colors">{{ $blog->title }}</h2>
                            @if($blog->excerpt)
                                <p class="text-gray-400 text-sm leading-relaxed">{{ Str::limit($blog->excerpt, 120) }}</p>
                            @endif
                            <p class="text-gray-500 text-xs mt-4">{{ $blog->published_at?->format('M j, Y') }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $blogs->links() }}
            </div>
        @endif
    </div>
</section>
@endsection
