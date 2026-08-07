@extends('layouts.app')

@section('title', 'Intech Nexus')

@push('styles')
    @vite(['resources/css/home.css'])
@endpush

@section('content')
    <!-----------Hero section ---->
    <section class="px-8 py-20 relative">
        <img src="{{ asset('images/home/background.png') }}" alt="Hero background" style="position: absolute !important; inset: 0 !important; width: 100% !important; height: 100% !important; object-fit: cover !important; z-index: -10 !important;">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

            {{-- Left column: text content --}}
            <div class="hero-slide-left text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight text-black">
                    Transforming Bold Ideas into Digital Reality
                </h1>
                <p class="mt-4 text-black max-w-md mx-auto md:mx-0">
                    You have the idea. We bring the team that builds it, designs it, and grows it. You do not need to hire three different companies for this.
                </p>
                <p class="mt-4 text-black/80">
                    InTech Nexus is a global digital partner. We take businesses from idea to product to market, with one team of engineers, designers, and growth experts.
                </p>

                <div class="mt-6 flex gap-4 justify-center md:justify-start">
                    <a href="{{ url('/contact') }}"
                       class="px-6 py-3 rounded-md bg-brand-red hover:bg-brand-red-hover text-white font-medium transition">
                        Get a Free Quote
                    </a>
                    <a href="{{ url('/services')}}"
                       class="px-6 py-3 rounded-md border border-black/30 text-black hover:bg-black/5 font-medium transition">
                        See Our Work
                    </a>
                </div>

            </div>

            {{-- Right column: image --}}
            <div class="hero-slide-right lg:mr-20">
                <img src="{{ asset('images/home/home-hero-left-image.png') }}" alt="Digital transformation illustration" class="w-full">
            </div>

        </div>
    </section>

    <!----- AboutUs Section -->
    <section class="px-8 py-20 relative bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

        {{-- Left column: text content --}}
        <div class="hero-slide-left text-center md:text-left">
            <p class="text-sm font-semibold uppercase tracking-wide text-brand-red">
                Discover Our Story
            </p>

            <h2 class="mt-2 text-3xl md:text-4xl font-bold leading-tight text-brand-blue">
                A Digital Partner Businesses Rely On
            </h2>

            <p class="mt-4 text-black/80">
                We work with founders, product teams, and companies in <a href="{{ url('/industries/healthcare') }}" class="text-brand-blue hover:text-brand-red-hover font-semibold transition-colors">healthcare</a>, <a href="{{ url('/industries/manufacturing') }}" class="text-brand-blue hover:text-brand-red-hover font-semibold transition-colors">manufacturing</a>, <a href="{{ url('/industries/finance-banking') }}" class="text-brand-blue hover:text-brand-red-hover font-semibold transition-colors">finance and banking</a>, and <a href="{{ url('/industries/ecommerce') }}" class="text-brand-blue hover:text-brand-red-hover font-semibold transition-colors">ecommerce</a>. Across every project, we act as a long-term partner, not a one-time vendor.
            </p>

            <ul class="mt-6 space-y-3">
                <li class="flex items-start gap-3">
                    <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-brand-red text-white text-xs">✓</span>
                    <span class="text-black">Excepteur sint occaecat cupidatat non proident.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-brand-red text-white text-xs">✓</span>
                    <span class="text-black">Nemo enim ipsam voluptatem quia voluptat sit.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-brand-red text-white text-xs">✓</span>
                    <span class="text-black">Duis aute irure dolor in reprehenderit in voluptate velit.</span>
                </li>
            </ul>

            <a href="{{ url('/about') }}"
               class="mt-8 inline-block px-6 py-3 rounded-md bg-brand-red hover:bg-brand-red-hover text-white font-medium transition">
                Discover More
            </a>
        </div>

        {{-- Right column: overlapping images + floating stats card --}}
            <div class="hero-slide-right relative">
            <img src="{{ asset('images/home/home-hero-left-image.png') }}" alt="Our team collaborating" class="w-full rounded-lg">

            <img src="{{ asset('images/home/background.png') }}" alt="Team celebrating success"
                 class="absolute -bottom-8 -left-8 w-1/2 rounded-lg border-4 border-brand-blue shadow-xl">

            <div class="absolute -top-6 right-6 bg-brand-blue-light border border-black/10 rounded-lg px-6 py-4 flex gap-6 shadow-xl">
                <div>
                    <p class="text-xl font-bold text-white">10+</p>
                    <p class="text-xs text-white">Years of Expertise</p>
                </div>
                <div>
                    <p class="text-xl font-bold text-white">50+</p>
                    <p class="text-xs text-white">Happy Clients</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!---- What We Do Section ---->
<section class="px-8 py-20 bg-white text-black">
    <div class="max-w-6xl mx-auto">

        <p class="text-sm font-semibold uppercase tracking-wide text-brand-red mb-8 text-center md:text-left">What We Do</p>

        <div class="grid md:grid-cols-[3fr_auto_2fr] gap-8 md:gap-12">

            <div class="relative h-[480px]  rounded-xl md:sticky md:top-24">
                <img src="{{ asset('images/home/home-hero-left-image.png') }}" alt="What we do" class="w-full h-full object-cover rounded-xl">
                <img src="{{ asset('images/home/background.png') }}" alt="Overlapping image"
                     class="absolute -bottom-8 -left-8 w-1/2 rounded-lg ">
            </div>

            <div class="hidden md:flex flex-col items-center relative" id="wwd-stepper">
                <div class="wwd-dot flex items-center justify-center w-10 h-10 rounded-full border-2 border-black/15 text-black/40 text-sm font-semibold transition-colors duration-300" data-step="0">1</div>
                <div class="w-px flex-1 border-l-2 border-dashed border-black/15 my-1"></div>
                <div class="wwd-dot flex items-center justify-center w-10 h-10 rounded-full border-2 border-black/15 text-black/40 text-sm font-semibold transition-colors duration-300" data-step="1">2</div>
                <div class="w-px flex-1 border-l-2 border-dashed border-black/15 my-1"></div>
                <div class="wwd-dot flex items-center justify-center w-10 h-10 rounded-full border-2 border-black/15 text-black/40 text-sm font-semibold transition-colors duration-300" data-step="2">3</div>
            </div>

            <div class="wwd-scroll h-[480px] overflow-y-auto pr-2 space-y-4 scroll-smooth" id="wwd-scroll">
                <div class="wwd-card border-2 border-black/10 rounded-xl p-6" data-step="0">
                    <h3 class="text-xl font-semibold text-brand-blue mb-2">Build</h3>
                    <p class="text-base text-black/70">This covers software development, mobile app development, and web development. We build products that work well and can grow with your business. This also includes application development for ecommerce, MVPs, and more.</p>
                </div>
                <div class="wwd-card border-2 border-black/10 rounded-xl p-6" data-step="1">
                    <h3 class="text-xl font-semibold text-brand-blue mb-2">Design</h3>
                    <p class="text-base text-black/70">A good product needs more than good code. Our UI/UX design and branding teams create products and identities that people enjoy using. Our graphic and creative design team then carries that identity across every channel.</p>
                </div>
                <div class="wwd-card border-2 border-black/10 rounded-xl p-6" data-step="2">
                    <h3 class="text-xl font-semibold text-brand-blue mb-2">Grow</h3>
                    <p class="text-base text-black/70">A launch is just the start. Our digital marketing team turns traffic into real leads through SEO, paid ads, and conversion work. Every step is checked by our QA and testing team before it reaches your users.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!--- Services section -->
<section class="px-8 py-20 bg-white text-black">
    <div class="max-w-4xl mx-auto">

        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-brand-blue">
           Not Sure Which <span class="text-red-800">Service</span> Fits Your Situation? Start With the Result You Want Instead.
        </h2>

        @php
            $homeServices = [
                ['number' => '01', 'title' => 'Software Development', 'description' => 'Need a working product built from scratch?'],
                ['number' => '02', 'title' => 'Mobile App Development', 'description' => 'Need a mobile app for your business?'],
                ['number' => '03', 'title' => 'Web Development', 'description' => 'Website not performing the way it should?'],
                ['number' => '04', 'title' => 'Application Development', 'description' => 'Building something more complex than a simple app or site?'],
                ['number' => '05', 'title' => 'UI/UX Design', 'description' => 'Product feels hard to use or outdated?'],
                ['number' => '06', 'title' => 'Branding', 'description' => 'Brand feels inconsistent or forgettable?'],
                ['number' => '07', 'title' => 'Graphic & Creative Design', 'description' => 'Need ongoing content and creative support?'],
                ['number' => '08', 'title' => 'Digital Marketing', 'description' => 'Traffic not turning into leads or sales?'],
            ];
        @endphp

        @foreach ($homeServices as $service)
            <div class="service-card flex items-center gap-6 py-6 border-b-2 border-brand-red/30">

                <div class="shrink-0 w-12 h-12 rounded-full border border-brand-red/30 flex items-center justify-center text-brand-blue font-semibold">
                    {{ $service['number'] }}
                </div>

                <div class="flex-1">
                    <p class="text-base text-black/80">{{ $service['description'] }}</p>
                    <h3 class="text-xl font-semibold text-brand-red">{{ $service['title'] }}</h3>
                </div>

                <div class="shrink-0 w-32 h-20 rounded-md bg-brand-blue border border-black/10 hidden md:block"></div>

                <div class="shrink-0 text-black/70">
                    →
                </div>

            </div>
        @endforeach

    </div>
</section>

<!---- Industries Section -->
<section class="px-8 py-20 relative bg-white">
    <div class="max-w-5xl mx-auto slide-up">

        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-brand-blue">
            Our Successful Projects
        </h2>

        @php
            $projects = [
                ['badge' => 'Branding', 'title' => 'EcoBrand - Green Initiative', 'description' => 'Crafted a fresh brand identity and a responsive e-commerce platform for EcoBrand.'],
                ['badge' => 'App Development', 'title' => 'UrbanFit - Fitness on the Go', 'description' => 'Developed a user-friendly mobile app for UrbanFit that empowers users to track their fitness journey.'],
                ['badge' => 'App Development', 'title' => 'TechFlow - Innovative Solutions', 'description' => 'Implemented cutting-edge web development and digital marketing strategies for TechFlow.'],
                ['badge' => 'Branding', 'title' => 'TechAI - A Digital Transformation', 'description' => "We elevated TechAI's online presence through a seamless responsive website redesign."],
            ];
        @endphp

        <div class="grid md:grid-cols-2 gap-8">
            @foreach ($projects as $project)
                <div class="slide-up">
                    <div class="w-full h-56 rounded-lg bg-brand-blue-light border border-black/10"></div>

                    <span class="inline-block mt-4 px-3 py-1 rounded-full text-xs font-medium bg-black/5 text-brand-blue">
                        {{ $project['badge'] }}
                    </span>

                    <h3 class="mt-2 text-lg font-semibold text-brand-blue">{{ $project['title'] }}</h3>
                    <p class="mt-1 text-sm text-black/70">{{ $project['description'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12 slide-up">
            <a href="#"
               class="inline-block px-6 py-3 rounded-full bg-brand-red hover:bg-brand-red-hover text-white font-medium transition">
                View All Projects
            </a>
        </div>

    </div>
</section>

<!---- why us --->
<section class="px-8 py-20 relative bg-white">
    <div class="max-w-5xl mx-auto">

        {{-- Heading --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-blue">Why Us</h2>
            <p class="mt-2 text-black/70">
                Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit
            </p>
        </div>

        {{-- Three feature cards --}}
        @php
            $features = [
                ['icon' => '🎨', 'title' => 'Creative Excellence', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.', 'stat' => '95', 'label' => '% Client Satisfaction'],
                ['icon' => '📈', 'title' => 'Proven Results', 'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit.', 'stat' => '200', 'label' => '% ROI Increase'],
                ['icon' => '🏅', 'title' => 'Expert Team', 'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde omnis.', 'stat' => '50', 'label' => '+ Awards Won'],
            ];
        @endphp

        <div class="grid md:grid-cols-3 gap-6 mb-20">
            @foreach ($features as $feature)
                <div class="bg-gray-50 border border-black/10 rounded-lg p-6 text-center">
                    <div class="w-12 h-12 mx-auto rounded-lg bg-brand-red flex items-center justify-center text-2xl text-white">
                        {{ $feature['icon'] }}
                    </div>
                    <h3 class="mt-4 font-semibold text-brand-blue">{{ $feature['title'] }}</h3>
                    <p class="mt-2 text-sm text-black/70">{{ $feature['description'] }}</p>

                    <div class="mt-6 pt-6 border-t border-black/10">
                        <p class="text-2xl font-bold text-brand-blue">{{ $feature['stat'] }}</p>
                        <p class="text-xs text-black/60">{{ $feature['label'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- "Why Leading Brands Choose Us" --}}
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div class="w-full h-80 rounded-lg bg-gray-50 border border-black/10"></div>

            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-brand-blue">Why Leading Brands Choose Us</h2>
                <p class="mt-4 text-black/70">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.
                </p>

                @php
                    $reasons = [
                        ['title' => 'Strategic Thinking', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.'],
                        ['title' => 'Data-Driven Approach', 'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullam laboris nisi ut aliquip ex ea.'],
                        ['title' => '24/7 Support', 'description' => 'Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.'],
                    ];
                @endphp

                <ul class="mt-6 space-y-4">
                    @foreach ($reasons as $reason)
                        <li class="flex items-start gap-3">
                            <span class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-red text-white text-xs">✓</span>
                            <div>
                                <p class="font-semibold text-brand-blue">{{ $reason['title'] }}</p>
                                <p class="text-sm text-black/70">{{ $reason['description'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-8 flex gap-4">
                    <a href="{{ url('/contact') }}"
                       class="px-6 py-3 rounded-md bg-brand-red hover:bg-brand-red-hover text-white font-medium transition">
                        Start Your Project
                    </a>
                    <a href="#"
                       class="px-6 py-3 rounded-md border border-black/30 text-brand-blue hover:bg-black/5 font-medium transition">
                        View Portfolio
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Testimonials section -->
<section class="px-8 py-20 overflow-hidden bg-white">
    <div class="max-w-6xl mx-auto">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-blue">What Our Clients Say</h2>
            <p class="mt-2 text-black/60">
                Client testimonials showcasing our work and impact
            </p>
        </div>

        @if ($testimonials->isEmpty())
            <p class="text-center text-black/50">No testimonials yet.</p>
        @else
            <div class="relative">
                <div class="flex gap-6 testimonial-track">
                    @foreach ($testimonials->concat($testimonials) as $testimonial)
                        <div class="shrink-0 w-80 relative bg-gray-50 border-t-2 border-t-brand-red border border-black/10 rounded-lg p-6">

                            <div class="flex items-center gap-3">
                                @if ($testimonial->client_photo)
                                    <img src="{{ asset('storage/' . $testimonial->client_photo) }}" alt="{{ $testimonial->client_name }}"
                                         class="w-12 h-12 rounded-full object-cover">
                                @else
                                    <div class="w-12 h-12 rounded-full bg-brand-red flex items-center justify-center text-white font-semibold">
                                        {{ strtoupper(substr($testimonial->client_name, 0, 1)) }}
                                    </div>
                                @endif

                                <div>
                                    <p class="font-semibold text-brand-blue">{{ $testimonial->client_name }}</p>
                                    @if ($testimonial->client_title)
                                        <p class="text-sm text-black/60">{{ $testimonial->client_title }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="mt-3 flex gap-0.5">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 {{ $i <= $testimonial->rating ? 'text-brand-red-hover' : 'text-black/20' }}"
                                         fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 1l2.9 6.3 6.9.9-5 4.9 1.2 6.9-6-3.2-6 3.2 1.2-6.9-5-4.9 6.9-.9z" />
                                    </svg>
                                @endfor
                            </div>

                            <p class="mt-4 text-black/70 text-sm">{{ $testimonial->quote }}</p>

                            <div class="absolute top-6 right-6 w-9 h-9 rounded-full bg-brand-red flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 4h8v6H7l-3 3V4zM10 8h6v6h-3l-3 3V8z" />
                                </svg>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section>

<!-- Closing CTA section -->
<section class="px-8 py-16 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="bg-gray-50 border border-black/10 rounded-2xl px-10 py-12">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">

                <div>
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight text-brand-blue">
                        Ready to Elevate<br>Your Brand?
                    </h2>
                    <p class="mt-4 text-black/70">
                        Partner with IntechNexus and take the first step towards transforming your digital presence.
                    </p>
                </div>

                <div class="shrink-0">
                    <a href="{{ url('/contact') }}"
                       class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-brand-red hover:bg-brand-red-hover text-white font-semibold transition">
                        Book Free Consultation
                        <span>&raquo;</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    @vite(['resources/js/home.js'])
@endpush
