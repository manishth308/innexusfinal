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
    <section class="px-8 py-20 relative bg-[#F5F5F9]">
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
<section class="px-8 py-20 text-black">
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
<section class="bg-[#061a3b] text-white min-h-screen flex flex-col justify-start relative">
    <div id="services-bg" class="absolute inset-0 transition-all duration-500" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>

    <div class="bg-[#061a3b] pt-17 pb-14 px-8 relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-0 text-white px-10">
           Not Sure Which <span class="text-red-500">Service</span> Fits Your Situation?<p> Start With the Result You Want Instead.</p>
        </h2>
    </div>

    <div class="max-w-6xl mx-auto w-full pb-0 relative z-10 px-8">

        @php
            $homeServices = [
                ['title' => 'Software Development', 'description' => 'Need a working product built from scratch?', 'image' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=2000&q=80'],
                ['title' => 'Mobile App Development', 'description' => 'Need a mobile app for your business?', 'image' => 'https://images.unsplash.com/photo-1526498460520-4c246339dccb?auto=format&fit=crop&w=2000&q=80'],
                ['title' => 'Web Development', 'description' => 'Website not performing the way it should?', 'image' => 'https://images.unsplash.com/photo-1507721999472-8ed4421c4af2?auto=format&fit=crop&w=2000&q=80'],
                ['title' => 'Application Development', 'description' => 'Building something more complex than a simple app or site?', 'image' => 'https://images.unsplash.com/photo-1555066931-43666627e783?auto=format&fit=crop&w=2000&q=80'],
                ['title' => 'UI/UX Design', 'description' => 'Product feels hard to use or outdated?', 'image' => 'https://images.unsplash.com/photo-1586717791821-3f44a5638d0f?auto=format&fit=crop&w=2000&q=80'],
                ['title' => 'Graphic & Creative Design', 'description' => 'Need ongoing content and creative support?', 'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=2000&q=80'],
                ['title' => 'Digital Marketing', 'description' => 'Traffic not turning into leads or sales?', 'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=2000&q=80'],
            ];
        @endphp

        <div class="grid md:grid-cols-3 gap-6 border-b border-white/20 relative overflow-hidden mx-8">
            @foreach ($homeServices as $service)
                <div class="relative min-h-[160px] overflow-hidden border-b border-white/30 hover:bg-[#2699e9] hover:scale-[1.04] transition-all duration-300" data-image="{{ $service['image'] }}">
                    <div class="relative h-full flex items-center p-6">
                        <div>
                            <p class="text-sm text-white/80 mb-1">{{ $service['description'] }}</p>
                            <h3 class="text-xl font-semibold text-white">{{ $service['title'] }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

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
                ['title' => 'Healthcare', 'description' => 'Delivering secure, compliant digital solutions that streamline patient care, telemedicine, and health data management for modern healthcare providers.', 'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80'],
                ['title' => 'Manufacturing', 'description' => 'Empowering factories with smart automation, IoT integrations, and digital platforms that boost productivity and operational efficiency.', 'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80'],
                ['title' => 'Finance and Banking', 'description' => 'Building secure fintech platforms, digital banking apps, and data-driven solutions that modernize financial services for the digital era.', 'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80'],
                ['title' => 'Ecommerce', 'description' => 'Creating high-performing online stores, seamless checkout experiences, and scalable platforms that drive sales and customer engagement.', 'image' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&w=800&q=80'],
            ];
        @endphp

        <div class="grid md:grid-cols-2 gap-8">
            @foreach ($projects as $project)
                <div class="slide-up relative h-64 rounded-lg overflow-hidden border border-black/10 group">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-[#061a3b]/70 group-hover:bg-[#061a3b]/50 transition-colors duration-300"></div>
                    <div class="relative h-full flex flex-col justify-center items-center text-center p-6">
                        <h3 class="text-2xl font-semibold text-white">{{ $project['title'] }}</h3>
                        <p class="mt-2 text-base text-white">{{ $project['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12 slide-up">
            <p class="text-lg font-bold text-black/70 max-w-3xl mx-auto">
                In each of these fields, we bring real understanding of the business, not just technical skill.
            </p>
        </div>

    </div>
</section>

<!---- Why Choose Us --->
<section class="bg-[#F5F5F9]">
    <div class="mx-auto max-w-[1300px] px-6 py-16 lg:px-[90px]">

        <h2 class="max-w-[650px] text-[36px] md:text-[42px] lg:text-[50px] font-medium leading-[1.1] -tracking-[0.02em] text-[#111111] mb-[60px]">
            Why choose IntechNexus ?<br>
        </h2>

        <div>
            @php
                $features = [
                    ['title' => 'One team for the full journey', 'description' => 'Build, design, and grow all work together, so nothing gets lost between vendors. From initial concept through post-launch growth, a single coordinated team owns the entire process. This removes handoff friction, keeps decisions consistent, and ensures your product evolves with one shared vision rather than fragmented vendor relationships.'],
                    ['title' => 'Real industry knowledge', 'description' => 'Not generic delivery. Our teams bring deep sector-specific insight that shapes every recommendation, design choice, and technical decision. We study your market, users, and regulatory environment before writing a single line of code, so the solutions we build are grounded in real business context rather than one-size-fits-all templates.'],
                    ['title' => 'A clear process on every project', 'description' => 'From discovery to launch, we follow a transparent, milestone-driven workflow with regular checkpoints, documented requirements, and measurable progress reviews. Every stakeholder knows what happens next, why each decision is made, and how risks are managed before they become issues.'],
                    ['title' => 'Global reach', 'description' => 'With teams who understand local markets. We combine international delivery capabilities with regional expertise in pricing, compliance, culture, and user behavior. That means you get global engineering quality without losing the nuance that local market success demands.'],
                ];
            @endphp

            @foreach ($features as $feature)
                <div class="group border-t border-[#D9DFE8] pt-[30px] pb-[55px] min-h-[210px] relative hover:bg-white hover:text-black transition-all duration-300 px-10">
                    <div class="group-hover:scale-[0.96] group-hover:translate-x-4 transition-all duration-300">
                        <h3 class="text-[27px] md:text-[31px] font-medium leading-[1.25] text-[#111111]">{{ $feature['title'] }}</h3>
                        <p class="mt-[22px] md:mt-[25px] text-[20px] md:text-[21px] font-normal leading-[1.5] text-[#607594] max-w-[780px]">
                            {{ $feature['description'] }}
                        </p>
                    </div>

                    <svg class="absolute right-0 top-[30px] w-[50px] h-[50px] text-[#D1DDED] group-hover:text-blue-600 hidden md:block transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 17L17 7M17 7H10M17 7V14" />
                    </svg>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Testimonials section -->
<section class="px-8 py-20 overflow-hidden bg-blue-700">
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

<!---- Tech Stack ---->
<section class="bg-[#F5F5F9]">
    <div class="mx-auto max-w-[1400px] px-6 py-20 lg:px-[90px]">

        <h2 class="text-[40px] md:text-[48px] lg:text-[64px] font-medium leading-[1.1] -tracking-[0.03em] text-[#111111] mb-[60px]">
            Technologies We Work With
        </h2>

        <div class="h-px bg-[#D5DDE8] mb-5"></div>

        <div class="grid grid-cols-1 lg:grid-cols-[40%_60%] gap-8 lg:gap-16">

            <div>
                @php
                    $techStack = [
                        [
                            'name' => 'Web',
                            'technologies' => [
                                ['name' => 'WordPress', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/WordPress_blue_logo.svg/1200px-WordPress_blue_logo.svg.png'],
                                ['name' => 'React', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1200px-React-icon.svg.png'],
                                ['name' => 'Next.js', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Nextjs-logo.svg/1200px-Nextjs-logo.svg.png'],
                            ],
                        ],
                        [
                            'name' => 'Mobile',
                            'technologies' => [
                                ['name' => 'iOS', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/IOS_logo.svg/1200px-IOS_logo.svg.png'],
                                ['name' => 'Android', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Android_robot.svg/1200px-Android_robot.svg.png'],
                                ['name' => 'Flutter', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Google-flutter-logo.png/1200px-Google-flutter-logo.png'],
                                ['name' => 'React Native', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1200px-React-icon.svg.png'],
                            ],
                        ],
                        [
                            'name' => 'Backend and data',
                            'technologies' => [
                                ['name' => 'Python', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1200px-Python-logo-notext.svg.png'],
                                ['name' => 'Node.js', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/1200px-Node.js_logo.svg.png'],
                                ['name' => 'Custom databases', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/SQLite370.svg/1200px-SQLite370.svg.png'],
                            ],
                        ],
                        [
                            'name' => 'Design',
                            'technologies' => [
                                ['name' => 'Figma', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Figma-logo.svg/1200px-Figma-logo.svg.png'],
                                ['name' => 'Modern design systems', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Design_%28icon%29.svg/1200px-Design_%28icon%29.svg.png'],
                            ],
                        ],
                    ];
                @endphp

                <div class="flex flex-col gap-8">
                    @foreach ($techStack as $index => $category)
                        <div class="tech-category flex items-center gap-3 cursor-pointer" data-index="{{ $index }}">
                            <span class="tech-indicator block w-12 h-[3px] bg-[#1754B8] shrink-0 opacity-0 transition-opacity duration-300"></span>
                            <span class="tech-name text-[27px] leading-[1.3] text-[#222222] font-normal transition-colors duration-300">
                                {{ $category['name'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div id="tech-right" class="relative">
                <h3 class="text-[38px] font-medium text-[#69758A] leading-[1.2] mb-[30px]">
                    Web
                </h3>

                <div class="absolute inset-0 -z-10 opacity-10" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1200&q=80'); background-size: cover; background-position: center;"></div>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-5" id="tech-grid">
                    @php
                        $webTechnologies = $techStack[0]['technologies'];
                    @endphp

                    @foreach ($webTechnologies as $tech)
                        <div class="border border-[#D0D9E8] bg-white/80 backdrop-blur-sm h-[100px] flex items-center justify-center p-4">
                            <img src="{{ $tech['image'] }}" alt="{{ $tech['name'] }}" class="max-h-full max-w-full object-contain">
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    window.techStackData = @json($techStack);
</script>

<!-- Closing CTA section -->
<section class="px-8 py-16 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="bg-gray-50 border border-black/10 rounded-2xl px-10 py-12">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">

                <div>
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight text-brand-blue">
                        Have an Idea Worth Building?
                    </h2>
                    <p class="mt-4 text-black/70">
                        Tell us where you are starting from. We will tell you the fastest, safest way to get where you want to go. That could be a new product, a full rebuild, or a growth plan for something you already launched.
                    </p>
                </div>

                <div class="shrink-0 flex flex-wrap gap-4">
                    <a href="{{ url('/contact') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-brand-red hover:bg-brand-red-hover text-white font-semibold transition">
                        Get a Free Quote
                        <span>&raquo;</span>
                    </a>
                    <a href="{{ url('/contact') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-black/30 text-brand-blue hover:bg-black/5 font-medium transition">
                        Talk to Our Team
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
