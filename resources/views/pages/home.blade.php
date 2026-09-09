@extends('layouts.app')

@section('title', 'Intech Nexus')

@push('styles')
    @vite(['resources/css/home.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
    <style>
      .home-page{
        font-family:'Inter',system-ui,sans-serif;
      }
      .home-page h1, .home-page h2, .home-page h3, .home-page .font-display{
        font-family:'Space Grotesk',sans-serif;
        letter-spacing:-0.01em;
      }
      .home-page .font-mono{
        font-family:'IBM Plex Mono',monospace;
      }
    </style>
@endpush

@section('content')
<div class="home-page">
    <!-----------Hero section ---->
    <section class="relative overflow-hidden bg-[#0b0c10] pt-12 pb-20 lg:pt-16 lg:pb-24 min-h-[580px] flex items-center border-b border-white/10">

        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute top-0 right-0 w-full lg:w-[65%] h-full bg-gradient-to-br from-purple-900/60 via-purple-800/30 to-purple-950/10 [clip-path:polygon(75%_0%,100%_0%,100%_100%,0%_100%)] opacity-90" style="filter: drop-shadow(0 0 8px rgba(168, 85, 247, 0.6));"></div>
            <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                <div class="lg:col-span-7 flex flex-col justify-center">
                    <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
                        Transforming Bold Ideas into <span class="text-purple-400">Digital Reality</span>
                    </h1>

                    <p class="text-lg sm:text-xl text-gray-300 leading-relaxed font-normal mb-4">
                        You have the idea. We bring the team that builds it, designs it, and grows it. You do not need to hire three different companies for this.
                    </p>
                    <p class="text-base text-gray-400 leading-relaxed font-normal mb-8">
                        InTech Nexus is a global digital partner. We take businesses from idea to product to market, with one team of engineers, designers, and growth experts.
                    </p>

                    <div class="flex flex-wrap items-center gap-4">
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
                            Get a Free Quote
                        </a>
                        <a href="{{ route('page.show', 'services')}}"
                           class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
                            See Our Work
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
                    <div class="relative w-full max-w-[520px] aspect-[4/3] lg:aspect-square">
                        <img
                            src="{{ asset('images/home/home-hero-left-image.png') }}"
                            alt="Digital transformation illustration"
                            class="w-full h-full object-cover object-center relative z-10 border border-white/10 shadow-2xl"
                        />
                        <div class="absolute inset-0 z-20 bg-gradient-to-r from-[#0b0c10] via-transparent to-transparent opacity-90 pointer-events-none"></div>
                        <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent opacity-40 pointer-events-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!----- AboutUs Section -->
    <section class="relative py-24 bg-[#0b0c10] border-t border-white/5 why-choose-section">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
        <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
                <div class="p-10 md:p-16 text-white flex flex-col justify-center">
                    <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Discover Our Story</span>
                    <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">A Digital Partner Businesses Rely On</h2>
                    <p class="text-gray-300 leading-relaxed max-w-md">
                        We work with founders, product teams, and companies in healthcare, manufacturing, finance and banking, and ecommerce. Across every project, we act as a long term partner, not a one time vendor.
                    </p>
                    <a href="{{ route('page.show', 'about-us') }}"
                       class="mt-8 inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
                        Discover More
                    </a>
                </div>
                <div class="why-choose-image-frame">
                    <img src="{{ asset('images/home/home-hero-left-image.png') }}" alt="Our team collaborating" class="why-choose-image">
                </div>
            </div>
        </div>
    </section>

<!---- What We Do Section ---->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
        <div class="mb-16 max-w-3xl">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Do</h2>
            <p class="text-gray-400 text-lg leading-relaxed">We build, design, and grow your digital products as one coordinated team.</p>
        </div>

        <div class="grid md:grid-cols-[3fr_auto_2fr] gap-8 md:gap-12">

            <div class="relative h-[480px] rounded-xl md:sticky md:top-24">
                <img src="{{ asset('images/home/home-hero-left-image.png') }}" alt="What we do" class="w-full h-full object-cover rounded-xl border border-white/10">
            </div>

            <div class="hidden md:flex flex-col items-center relative" id="wwd-stepper">
                <div class="wwd-dot flex items-center justify-center w-10 h-10 rounded-full border-2 border-purple-500/30 bg-purple-600/20 text-purple-400 text-sm font-semibold transition-colors duration-300" data-step="0">1</div>
                <div class="w-px flex-1 border-l-2 border-dashed border-white/15 my-1"></div>
                <div class="wwd-dot flex items-center justify-center w-10 h-10 rounded-full border-2 border-white/15 text-white/40 text-sm font-semibold transition-colors duration-300" data-step="1">2</div>
                <div class="w-px flex-1 border-l-2 border-dashed border-white/15 my-1"></div>
                <div class="wwd-dot flex items-center justify-center w-10 h-10 rounded-full border-2 border-white/15 text-white/40 text-sm font-semibold transition-colors duration-300" data-step="2">3</div>
            </div>

            <div class="wwd-scroll h-[480px] overflow-y-auto pr-2 space-y-4 scroll-smooth" id="wwd-scroll">
                <div class="wwd-card border border-purple-500/30 bg-white/[0.03] rounded-xl p-6" data-step="0">
                    <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-purple-400">Build</h3>
                    <p class="text-base text-gray-300 leading-relaxed">This covers software development, mobile app development, and web development. We build products that work well and can grow with your business. This also includes application development for ecommerce, MVPs, and more.</p>
                </div>
                <div class="wwd-card border border-purple-500/30 bg-white/[0.03] rounded-xl p-6" data-step="1">
                    <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-purple-400">Design</h3>
                    <p class="text-base text-gray-300 leading-relaxed">A good product needs more than good code. Our UI/UX design and branding teams create products and identities that people enjoy using. Our graphic and creative design team then carries that identity across every channel.</p>
                </div>
                <div class="wwd-card border border-purple-500/30 bg-white/[0.03] rounded-xl p-6" data-step="2">
                    <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-purple-400">Grow</h3>
                    <p class="text-base text-gray-300 leading-relaxed">A launch is just the start. Our digital marketing team turns traffic into real leads through SEO, paid ads, and conversion work. Every step is checked by our QA and testing team before it reaches your users.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!--- Services section -->
<section class="bg-[#0b0c10] text-white min-h-screen flex flex-col justify-start relative border-t border-white/5">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04] pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-16 pb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-center mb-0 text-white leading-[1.1] tracking-tight px-10">
           Not Sure Which <span class="text-purple-400">Service</span> Fits Your Situation?<br> Start With the Result You Want Instead.
        </h2>
    </div>

    <div class="max-w-7xl mx-auto w-full pb-0 relative z-10 px-6 sm:px-12">

        @php
            $homeServices = [
                ['title' => 'Software Development', 'description' => 'Need a working product built from scratch?', 'image' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=2000&q=80', 'url' => route('page.show', '/software-development')],
                ['title' => 'Mobile App Development', 'description' => 'Need a mobile app for your business?', 'image' => 'https://images.unsplash.com/photo-1526498460520-4c246339dccb?auto=format&fit=crop&w=2000&q=80', 'url' => route('page.show', '/mobile-app-development')],
                ['title' => 'Web Development', 'description' => 'Website not performing the way it should?', 'image' => 'https://images.unsplash.com/photo-1507721999472-8ed4421c4af2?auto=format&fit=crop&w=2000&q=80', 'url' => route('page.show', '/web-development')],
                ['title' => 'UI/UX Design', 'description' => 'Product feels hard to use or outdated?', 'image' => 'https://images.unsplash.com/photo-1586717791821-3f44a5638d0f?auto=format&fit=crop&w=2000&q=80', 'url' => route('page.show', '/ui-ux-design')],
                ['title' => 'Graphic & Creative Design', 'description' => 'Need ongoing content and creative support?', 'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=2000&q=80', 'url' => route('page.show', '/graphic-design')],
                ['title' => 'Digital Marketing', 'description' => 'Traffic not turning into leads or sales?', 'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=2000&q=80', 'url' => route('page.show', '/digital-marketing')],
                ['title' => 'Branding', 'description' => 'Brand feels inconsistent or outdated?', 'image' => 'https://images.unsplash.com/photo-1558655146-9f40138edfeb?auto=format&fit=crop&w=2000&q=80', 'url' => route('page.show', '/branding')],
            ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 border-t border-white/10">
            @foreach ($homeServices as $service)
                <a href="{{ $service['url'] }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]" data-image="{{ $service['image'] }}">
                    <div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">{{ $service['title'] }}</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">{{ $service['description'] }}</p>
                    </div>
                    <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
                </a>
            @endforeach
        </div>

    </div>
</section>

<!---- Industries Section -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-5xl mx-auto px-6 sm:px-12 slide-up">

        <h2 class="text-3xl md:text-5xl font-bold text-center mb-12 leading-[1.1] tracking-tight text-white">
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
                <div class="slide-up relative h-64 rounded-lg overflow-hidden border border-white/10 group">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-[#0b0c10]/70 group-hover:bg-[#0b0c10]/50 transition-colors duration-300"></div>
                    <div class="relative h-full flex flex-col justify-center items-center text-center p-6">
                        <h3 class="text-2xl font-bold text-white">{{ $project['title'] }}</h3>
                        <p class="mt-2 text-base text-white leading-relaxed">{{ $project['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12 slide-up">
            <p class="text-lg md:text-xl font-bold text-white/80 max-w-3xl mx-auto leading-relaxed">
                In each of these fields, we bring real understanding of the business, not just technical skill.
            </p>
        </div>

    </div>
</section>

<!---- Why Choose Us --->
<section class="bg-[#F5F5F9]">
    <div class="mx-auto max-w-[1300px] px-6 py-16 lg:px-[90px]">

        <h2 class="max-w-[650px] text-[36px] md:text-[42px] lg:text-[50px] font-bold leading-[1.1] tracking-tight text-[#111111] mb-[60px]">
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
                        <h3 class="text-[27px] md:text-[31px] font-bold leading-[1.25] text-[#111111]">{{ $feature['title'] }}</h3>
                        <p class="mt-[22px] md:mt-[25px] text-[18px] md:text-[20px] font-normal leading-[1.6] text-[#607594] max-w-[780px]">
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
<section class="px-8 py-20 overflow-hidden bg-[#061a3b] text-white">
    <div class="max-w-6xl mx-auto">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-bold text-white leading-[1.1] tracking-tight">What Our Clients Say</h2>
            <p class="mt-3 text-base md:text-lg text-white/70 leading-relaxed">
                Client testimonials showcasing our work and impact
            </p>
        </div>

        @if ($testimonials->isEmpty())
            <p class="text-center text-white/60">No testimonials yet.</p>
        @else
            <div class="relative">
                <div class="flex gap-6 testimonial-track">
                    @foreach ($testimonials->concat($testimonials) as $testimonial)
                        <div class="shrink-0 w-80 relative bg-white/5 border-t-2 border-t-brand-red border border-white/10 rounded-lg p-6">

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
                                    <p class="font-semibold text-white">{{ $testimonial->client_name }}</p>
                                    @if ($testimonial->client_title)
                                        <p class="text-sm text-white/70 leading-relaxed">{{ $testimonial->client_title }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="mt-3 flex gap-0.5">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 {{ $i <= $testimonial->rating ? 'text-brand-red-hover' : 'text-white/20' }}"
                                         fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 1l2.9 6.3 6.9.9-5 4.9 1.2 6.9-6-3.2-6 3.2 1.2-6.9-5-4.9 6.9-.9z" />
                                    </svg>
                                @endfor
                            </div>

                            <p class="mt-4 text-white/80 text-sm leading-relaxed">{{ $testimonial->quote }}</p>

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
<section class="bg-[#0b0c10]">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 py-20">

        <div class="mb-12">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Tools / Technologies</h2>
            <p class="text-gray-400 text-lg">What we deliver and where we excel.</p>
        </div>

        <div class="tech-split-grid">

            <div>
                @php
                    $techStack = [
                        [
                            'name' => 'Languages',
                            'technologies' => [
                                ['name' => 'Python', 'image' => asset('images/tech-logo/Python.png')],
                                ['name' => 'JavaScript', 'image' => asset('images/tech-logo/js.png')],
                                ['name' => 'PHP', 'image' => asset('images/tech-logo/PHP.png')],
                            ],
                        ],
                        [
                            'name' => 'Frameworks',
                            'technologies' => [
                                ['name' => 'React', 'image' => asset('images/tech-logo/React.png')],
                                ['name' => 'Node.js', 'image' => asset('images/tech-logo/Node.js.png')],
                                ['name' => 'Laravel', 'image' => asset('images/tech-logo/Laravel.png')],
                                ['name' => 'Django', 'image' => asset('images/tech-logo/Django.png')],
                            ],
                        ],
                        [
                            'name' => 'Databases',
                            'technologies' => [
                                ['name' => 'PostgreSQL', 'image' => asset('images/tech-logo/PostgresSQL.png')],
                                ['name' => 'MySQL', 'image' => asset('images/tech-logo/MySQL.png')],
                                ['name' => 'MongoDB', 'image' => asset('images/tech-logo/MongoDB.png')],
                            ],
                        ],
                        [
                            'name' => 'Cloud and infrastructure',
                            'technologies' => [
                                ['name' => 'AWS', 'image' => asset('images/tech-logo/AWS.png')],
                                ['name' => 'Azure', 'image' => asset('images/tech-logo/Azure.png')],
                                ['name' => 'Google Cloud', 'image' => asset('images/tech-logo/Google Cloud.png')],
                            ],
                        ],
                        [
                            'name' => 'Project and QA tools',
                            'technologies' => [
                                ['name' => 'Jira', 'image' => asset('images/tech-logo/Jira.png')],
                                ['name' => 'GitHub', 'image' => asset('images/tech-logo/github-white.png')],
                                ['name' => 'Postman', 'image' => asset('images/tech-logo/Postman.png')],
                            ],
                        ],
                    ];
                @endphp

                <div class="flex flex-col gap-8">
                    @foreach ($techStack as $index => $category)
                        <div class="tech-category flex items-center gap-3 cursor-pointer" data-index="{{ $index }}">
                            <span class="tech-indicator block w-12 h-[3px] bg-purple-400 shrink-0 opacity-0 transition-opacity duration-300"></span>
                            <span class="tech-name text-lg md:text-xl font-semibold text-white transition-colors duration-300">
                                {{ $category['name'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div id="tech-right" class="relative lg:pr-16">
                <h3 class="text-2xl md:text-3xl font-bold text-white leading-[1.2] mb-[30px]">
                    {{ $techStack[0]['name'] }}
                </h3>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-5" id="tech-grid">
                    @php
                        $firstCategory = $techStack[0]['technologies'];
                    @endphp

                    @foreach ($firstCategory as $tech)
                        <div class="group tech-card">
                            <div class="tech-card-icon-frame">
                                <img src="{{ $tech['image'] }}" alt="{{ $tech['name'] }}" class="tech-card-icon">
                            </div>

                            <span class="text-xs text-gray-300 group-hover:text-purple-400 transition-colors">{{ $tech['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Closing CTA section -->
<section class="px-8 py-16 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="bg-gray-50 border border-black/10 rounded-2xl px-10 py-12">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">

                <div>
                    <h2 class="text-3xl md:text-4xl font-bold leading-[1.1] tracking-tight text-brand-blue">
                        Have an Idea Worth Building?
                    </h2>
                    <p class="mt-4 text-base md:text-lg text-black/70 leading-relaxed max-w-2xl">
                        Tell us where you are starting from. We will tell you the fastest, safest way to get where you want to go. That could be a new product, a full rebuild, or a growth plan for something you already launched.
                    </p>
                </div>

                <div class="shrink-0 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-brand-red hover:bg-brand-red-hover text-white font-bold transition">
                        Get a Free Quote
                        <span>&raquo;</span>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 px-8 py-4 rounded-full border border-black/30 text-brand-blue hover:bg-black/5 font-bold transition">
                        Talk to Our Team
                        <span>&raquo;</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
</div>
@endsection

@push('scripts')
    @vite(['resources/js/home.js'])
    <script>
        window.techStackData = @json($techStack);
    </script>
    <script>
        (function () {
            const categories = document.querySelectorAll('.tech-category');
            const rightHeading = document.querySelector('#tech-right h3');
            const techGrid = document.getElementById('tech-grid');
            const data = window.techStackData;

            if (!categories.length || !rightHeading || !techGrid || !data) return;

            function setActive(index) {
                categories.forEach((cat, idx) => {
                    const isActive = Number(cat.getAttribute('data-index')) === index;
                    const indicator = cat.querySelector('.tech-indicator');
                    const name = cat.querySelector('.tech-name');

                    if (isActive) {
                        indicator.classList.remove('opacity-0');
                        indicator.classList.add('opacity-100');
                        name.classList.remove('text-white', 'font-normal');
                        name.classList.add('text-purple-400', 'font-medium');
                    } else {
                        indicator.classList.remove('opacity-100');
                        indicator.classList.add('opacity-0');
                        name.classList.remove('text-purple-400', 'font-medium');
                        name.classList.add('text-white', 'font-normal');
                    }
                });

                const selected = data[index];
                if (!selected) return;

                rightHeading.textContent = selected.name;

                techGrid.innerHTML = selected.technologies
                    .map(
                        (tech) => `
                            <div class="group tech-card">
                                <div class="tech-card-icon-frame">
                                    <img src="${tech.image}" alt="${tech.name}" class="tech-card-icon">
                                </div>

                                <span class="text-xs text-gray-300 group-hover:text-purple-400 transition-colors">${tech.name}</span>
                            </div>
                        `
                    )
                    .join('');
            }

            categories.forEach((cat) => {
                cat.addEventListener('click', function () {
                    const index = Number(this.getAttribute('data-index'));
                    setActive(index);
                });
            });

            setActive(0);
        })();
    </script>
@endpush