@extends('layouts.app')
@section('title', 'Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .csd-page{
    font-family:'Inter',system-ui,sans-serif;
  }
  .csd-page h1, .csd-page h2, .csd-page h3, .csd-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .csd-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  @keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .animate-scroll {
    animation: scroll 35s linear infinite;
  }
  .no-scrollbar::-webkit-scrollbar { display: none; }
  .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>
@endpush

@section('content')

<div class="csd-page">
<!-- Hero / Banner Section -->
<section class="relative overflow-hidden bg-[#0b0c10] pt-12 pb-20 lg:pt-16 lg:pb-24 min-h-[580px] flex items-center border-b border-white/10">

  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute top-0 right-0 w-full lg:w-[65%] h-full bg-gradient-to-br from-purple-900/60 via-purple-800/30 to-purple-950/10 [clip-path:polygon(75%_0%,100%_0%,100%_100%,0%_100%)] opacity-90" style="filter: drop-shadow(0 0 8px rgba(168, 85, 247, 0.6));"></div>
    <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
      
      <div class="lg:col-span-7 flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-sm font-medium text-purple-400 mb-6" aria-label="Breadcrumb">
          <a href="{{ url('/') }}" class="hover:text-purple-300 transition-colors">Home</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">Services</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Full-Service Digital Solutions <span class="text-purple-400">Built for Growth</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed font-normal mb-4">
          From software engineering and mobile apps to design and growth marketing, we deliver end-to-end digital solutions that help your enterprise launch, scale, and transform.
        </p>
        <p class="text-base text-gray-400 leading-relaxed font-normal mb-8">
          Eight core service areas, each backed by experienced teams and a structured delivery process. We work as one partner from idea through launch and ongoing growth.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
            Get a Free Quote
          </a>
          <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
            Book a Call
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
        <div class="relative w-full max-w-[520px] aspect-[4/3] lg:aspect-square">
          <img 
            src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1000&auto=format&fit=crop" 
            alt="Full-Service Digital Solutions - InTech Nexus" 
            class="w-full h-full object-cover object-center relative z-10 border border-white/10 shadow-2xl"
          />
          <div class="absolute inset-0 z-20 bg-gradient-to-r from-[#0b0c10] via-transparent to-transparent opacity-90 pointer-events-none"></div>
          <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent opacity-40 pointer-events-none"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- What We Do -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-16 max-w-3xl">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Do</h2>
      <p class="text-gray-400 text-lg leading-relaxed">Eight core service areas, each backed by experienced teams and a structured delivery process.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <a href="{{ route('page.show', 'software-development') }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Software Development</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Custom software, SaaS, CRM, ERP, and MVP development tailored to your business needs.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'mobile-app-development') }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Mobile App Development</h3>
          <p class="text-gray-400 text-sm leading-relaxed">iOS, Android, and cross-platform mobile applications built for performance and scale.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'web-development') }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Web Development</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Custom websites, ecommerce platforms, CMS, and web applications that convert visitors.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'ui-ux-design') }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">UI UX Design</h3>
          <p class="text-gray-400 text-sm leading-relaxed">User-centric interface and experience design for web, mobile, and SaaS products.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'graphic-design') }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Graphic Design</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Logo design, social media creatives, ad designs, and motion graphics for every channel.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'digital-marketing') }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Digital Marketing</h3>
          <p class="text-gray-400 text-sm leading-relaxed">SEO, PPC, social media, content, and email marketing that drives qualified traffic.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'branding') }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Branding</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Brand strategy and identity development that makes your business stand out and stay memorable.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'qa-testing') }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">QA & Testing</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Mobile app testing, web testing, and QA outsourcing to ensure quality at every release.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

    </div>
  </div>
</section>

<!-- Why Choose InTech Nexus -->
<section class="relative py-24 bg-[#0b0c10] border-t border-white/5 why-choose-section">
  <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
  <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
      <div class="p-10 md:p-16 text-white flex flex-col justify-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">One Partner for the Full Digital Journey</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          Eight service areas under one roof. The same team that plans your software also designs the interface and supports it after launch, so nothing gets lost between departments.
        </p>
      </div>
      <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1200&auto=format&fit=crop" alt="Why Choose InTech Nexus" class="why-choose-image">
      </div>
    </div>
  </div>
</section>

<!-- Our Process -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Our Process</h2>
      <p class="text-gray-400 text-lg leading-relaxed">A structured, transparent approach to delivering digital products and campaigns.</p>
    </div>

    <div class="space-y-6">
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Discovery & Requirements</h3>
          <p class="text-gray-300">We map your goals, audience, and technical needs before any planning begins.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Planning & Architecture</h3>
          <p class="text-gray-300">We design the roadmap, choose the right tech stack, and align on success metrics.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Design</h3>
          <p class="text-gray-300">We plan interfaces, brand identity, and creative assets alongside the technical build.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Development</h3>
          <p class="text-gray-300">We build the product, site, or campaign in structured, reviewable stages.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Testing, Launch & Growth</h3>
          <p class="text-gray-300">We test thoroughly, launch with confidence, and continue supporting growth through marketing and optimization.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tools / Technologies Section -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
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

@push('scripts')
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

<!-- Frequently Asked Questions -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Frequently Asked Questions</h2>
    
    <div class="space-y-4">
      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you handle multiple services in one project?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We regularly run projects that combine software development, design, marketing, and QA under one coordinated team.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Do you work with startups and enterprise clients?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We scale our teams and workflows to match the stage and size of your business, from early-stage startups to large enterprises.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>How do you price a full-service engagement?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Pricing depends on scope, timeline, and the mix of services required. We provide a detailed proposal after discovery, so you know exactly what you are getting.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>What happens after a project launches?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          We offer ongoing support, maintenance, and growth services so your product continues to improve after launch.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Banner -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)] hover:shadow-[0_0_60px_rgba(168,85,247,0.35)] transition-all duration-300">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
        Ready to get started?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Book a call, request a proposal, or get a free quote to begin.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
          Get a Free Quote
        </a>
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
          Book a Call
        </a>
      </div>
    </div>
  </div>
</section>

</div>

<!-- Floating Chat Button Widget -->
<a href="{{ url('/contact') }}" class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-purple-600 text-white flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.5)] hover:bg-purple-700 transition-all">
  <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
</a>

@endsection
