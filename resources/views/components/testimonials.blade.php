@props(['testimonials'])

@if ($testimonials->isNotEmpty())
<section class="bg-gray-50 py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center font-heading text-3xl font-bold text-brand-blue">
            What Our Clients Say
        </h2>

        <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($testimonials as $testimonial)
                <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-100">
                    <div class="flex items-center gap-1 text-brand-red" aria-label="{{ $testimonial->rating }} out of 5 stars">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg class="h-4 w-4 {{ $i <= $testimonial->rating ? 'fill-current' : 'fill-gray-200' }}" viewBox="0 0 20 20">
                                <path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2-5.6-3.3-5.6 3.3 1.4-6.2L1 7.5l6.4-.6z" />
                            </svg>
                        @endfor
                    </div>

                    <blockquote class="mt-4 text-sm leading-relaxed text-ink">
                        &ldquo;{{ $testimonial->quote }}&rdquo;
                    </blockquote>

                    <div class="mt-4 flex items-center gap-3">
                        @if ($testimonial->client_photo)
                            <img src="{{ asset('storage/'.$testimonial->client_photo) }}" alt="" class="h-10 w-10 rounded-full object-cover">
                        @endif
                        <div>
                            <p class="text-sm font-semibold text-ink">{{ $testimonial->client_name }}</p>
                            @if ($testimonial->client_title)
                                <p class="text-xs text-gray-500">{{ $testimonial->client_title }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif