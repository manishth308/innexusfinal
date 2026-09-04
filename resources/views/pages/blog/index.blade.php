@extends('layouts.app')
@section('title', 'Blog - InTech Nexus')

@section('content')
<section class="py-24 bg-[#0b0c10] min-h-screen">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
        <div class="max-w-3xl mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Blog</h1>
            <p class="text-gray-400 text-lg leading-relaxed">Insights, updates, and ideas from our team.</p>
        </div>

        @if($blogs->isEmpty())
            <p class="text-gray-400">No blog posts yet — check back soon.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($blogs as $blog)
                    <a href="{{ route('blog.show', $blog->slug) }}" class="group block rounded-2xl bg-white/[0.03] border border-purple-500/20 hover:border-purple-400 overflow-hidden transition-all duration-300">
                        @if($blog->featured_image)
                            <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover">
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