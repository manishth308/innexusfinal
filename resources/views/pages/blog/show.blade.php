@extends('layouts.app')
@section('title', $blog->meta_title ?? $blog->title)

@section('content')
<article class="py-24 bg-[#0b0c10] min-h-screen">
    <div class="max-w-3xl mx-auto px-6 sm:px-12">
        @if($blog->category)
            <span class="text-xs uppercase tracking-wide text-purple-400 font-semibold">{{ $blog->category->name }}</span>
        @endif
        <h1 class="text-3xl md:text-5xl font-bold text-white mt-3 mb-4">{{ $blog->title }}</h1>
        <p class="text-gray-500 text-sm mb-10">
            {{ $blog->published_at?->format('F j, Y') }}
            @if($blog->user) &middot; {{ $blog->user->name }} @endif
        </p>

        @if($blog->featured_image)
            <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}" class="w-full rounded-2xl mb-10">
        @endif

        <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed">
            {!! $blog->body !!}
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