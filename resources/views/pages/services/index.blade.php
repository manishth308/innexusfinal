@extends('layouts.app')
@section('title', 'Services - InTech Nexus')

@push('styles')
<style>
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

<!-- Hero / Services Header -->
<section class="relative bg-[#0b102b] pt-16 pb-32 overflow-hidden border-b border-white/10">
  
  <!-- Background Image -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center mix-blend-screen opacity-30"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b102b]/40 via-[#0b102b]/70 to-[#0b102b]"></div>
  </div>

  <div class="relative z-10 max-w-5xl mx-auto px-6 sm:px-12 text-center">
    
    <!-- Top Navigation Links -->
    <nav class="flex items-center justify-center gap-3 text-xs sm:text-sm font-semibold tracking-widest text-slate-300 mb-8 uppercase" aria-label="Breadcrumb">
      <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
      <span class="text-slate-600">|</span>
      <span class="text-brand-red">Services</span>
    </nav>

    <!-- Main Hero Heading -->
    <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-tight tracking-tight mb-6 max-w-4xl mx-auto">
      Full-Service Digital Solutions <span class="text-brand-red">Built for Growth</span>
    </h1>

    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-3xl mx-auto font-normal mb-8">
      From software and mobile apps to design and marketing, we deliver end-to-end services that help businesses launch, scale, and succeed in the digital world.
    </p>

    <!-- Call to Action Buttons -->
    <div class="flex flex-wrap justify-center items-center gap-4 mb-4">
      <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center justify-center border-2 border-white text-white font-bold tracking-widest text-xs sm:text-sm uppercase px-8 py-3.5 hover:bg-white hover:text-[#0b102b] transition-all duration-300">
        Get a Free Quote
      </a>
      <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center justify-center bg-brand-red border-2 border-brand-red text-white font-bold tracking-widest text-xs sm:text-sm uppercase px-8 py-3.5 hover:bg-brand-red-hover hover:border-brand-red-hover transition-all duration-300">
        Book a Call
      </a>
    </div>

  </div>
</section>

<!-- Service Categories Grid -->
<section class="py-24 bg-[#f4f5f8] text-[#0b102b]">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-[#0b102b] tracking-tight mb-4">What We Do</h2>
      <p class="text-slate-600 text-lg leading-relaxed">
        Eight core service areas, each backed by experienced teams and a structured delivery process.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <a href="{{ route('page.show', 'software-development') }}" class="group p-8 bg-white border border-slate-200 hover:border-brand-red shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          </div>
          <h3 class="text-xl font-bold text-[#0b102b] mb-2 group-hover:text-brand-red transition-colors">Software Development</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Custom software, SaaS, CRM, ERP, and MVP development tailored to your business needs.</p>
        </div>
        <span class="text-brand-red font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'mobile-app-development') }}" class="group p-8 bg-white border border-slate-200 hover:border-brand-red shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-[#0b102b] mb-2 group-hover:text-brand-red transition-colors">Mobile App Development</h3>
          <p class="text-slate-600 text-sm leading-relaxed">iOS, Android, and cross-platform mobile applications built for performance and scale.</p>
        </div>
        <span class="text-brand-red font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'web-development') }}" class="group p-8 bg-white border border-slate-200 hover:border-brand-red shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
          </div>
          <h3 class="text-xl font-bold text-[#0b102b] mb-2 group-hover:text-brand-red transition-colors">Web Development</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Custom websites, ecommerce platforms, CMS, and web applications that convert visitors.</p>
        </div>
        <span class="text-brand-red font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'ui-ux-design') }}" class="group p-8 bg-white border border-slate-200 hover:border-brand-red shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
          </div>
          <h3 class="text-xl font-bold text-[#0b102b] mb-2 group-hover:text-brand-red transition-colors">UI UX Design</h3>
          <p class="text-slate-600 text-sm leading-relaxed">User-centric interface and experience design for web, mobile, and SaaS products.</p>
        </div>
        <span class="text-brand-red font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'graphic-design') }}" class="group p-8 bg-white border border-slate-200 hover:border-brand-red shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-[#0b102b] mb-2 group-hover:text-brand-red transition-colors">Graphic Design</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Logo design, social media creatives, ad designs, and motion graphics for every channel.</p>
        </div>
        <span class="text-brand-red font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'digital-marketing') }}" class="group p-8 bg-white border border-slate-200 hover:border-brand-red shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </div>
          <h3 class="text-xl font-bold text-[#0b102b] mb-2 group-hover:text-brand-red transition-colors">Digital Marketing</h3>
          <p class="text-slate-600 text-sm leading-relaxed">SEO, PPC, social media, content, and email marketing that drives qualified traffic.</p>
        </div>
        <span class="text-brand-red font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'branding') }}" class="group p-8 bg-white border border-slate-200 hover:border-brand-red shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-[#0b102b] mb-2 group-hover:text-brand-red transition-colors">Branding</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Brand strategy and identity development that makes your business stand out and stay memorable.</p>
        </div>
        <span class="text-brand-red font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'qa-testing') }}" class="group p-8 bg-white border border-slate-200 hover:border-brand-red shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-[#0b102b] mb-2 group-hover:text-brand-red transition-colors">QA & Testing</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Mobile app testing, web testing, and QA outsourcing to ensure quality at every release.</p>
        </div>
        <span class="text-brand-red font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

    </div>
  </div>
</section>

<!-- Who This Is For & Problems We Solve -->
<section class="py-20 bg-white text-[#0b102b]">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <div class="p-8 bg-slate-50 border border-slate-300 flex flex-col justify-between">
        <div>
          <h2 class="text-xl font-bold mb-4 flex items-center gap-3">
            <span class="w-3 h-3 bg-brand-red"></span>
            Who This Is For
          </h2>
          <p class="text-slate-600 leading-relaxed text-sm">
            Businesses and product teams that need a reliable partner to build software, design products, and grow their digital presence under one roof.
          </p>
        </div>
      </div>

      <div class="p-8 bg-slate-50 border border-slate-300 flex flex-col justify-between">
        <div>
          <h2 class="text-xl font-bold mb-4 flex items-center gap-3">
            <span class="w-3 h-3 bg-brand-red"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3 text-slate-600 text-sm">
            <li class="flex items-start gap-2">
              <span class="text-brand-red font-bold">•</span>
              <span>Managing separate vendors for development, design, and marketing creates gaps and delays.</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-brand-red font-bold">•</span>
              <span>Products are launched without proper QA, branding, or go-to-market support.</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-brand-red font-bold">•</span>
              <span>Technical debt and poor user experience slow down growth after launch.</span>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- What We Offer -->
<section class="py-20 bg-[#f4f5f8] text-[#0b102b] border-t border-slate-200">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <h2 class="text-3xl font-bold tracking-tight mb-3">What We Offer</h2>
      <p class="text-slate-600 text-base">One partner for the full digital journey, from idea to launch and beyond.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between">
        <div>
          <h3 class="text-lg font-bold mb-2">End-to-End Delivery</h3>
          <p class="text-slate-600 text-sm leading-relaxed">We handle planning, design, engineering, QA, and launch as one connected process.</p>
        </div>
      </div>

      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between">
        <div>
          <h3 class="text-lg font-bold mb-2">Cross-Functional Teams</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Engineers, designers, marketers, and QA specialists working together from day one.</p>
        </div>
      </div>

      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between">
        <div>
          <h3 class="text-lg font-bold mb-2">Scalable Architecture</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Systems and products built to grow with your user base, traffic, and business goals.</p>
        </div>
      </div>

      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between">
        <div>
          <h3 class="text-lg font-bold mb-2">Ongoing Support</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Post-launch maintenance, optimization, and feature development as your product evolves.</p>
        </div>
      </div>

      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between md:col-span-2 lg:col-span-2">
        <div>
          <h3 class="text-lg font-bold mb-2">Transparent Communication</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Regular updates, clear milestones, and direct access to the team building your product. No handoffs, no surprises.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Process -->
<section class="py-20 bg-[#0b102b] text-white">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <div class="max-w-2xl mb-12">
      <h2 class="text-3xl font-bold tracking-tight mb-3">Our Process</h2>
      <p class="text-slate-300 text-base leading-relaxed">
        A structured, transparent approach to delivering digital products and campaigns.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <div class="p-6 bg-white/[0.05] border border-white/10">
        <span class="text-4xl font-black text-brand-red mb-2 block">01</span>
        <h3 class="text-xl font-bold mb-2">Discovery & Requirements</h3>
        <p class="text-slate-300 text-sm">We map your goals, audience, and technical needs before any planning begins.</p>
      </div>

      <div class="p-6 bg-white/[0.05] border border-white/10">
        <span class="text-4xl font-black text-brand-red mb-2 block">02</span>
        <h3 class="text-xl font-bold mb-2">Planning & Architecture</h3>
        <p class="text-slate-300 text-sm">We design the roadmap, choose the right tech stack, and align on success metrics.</p>
      </div>

      <div class="p-6 bg-white/[0.05] border border-white/10">
        <span class="text-4xl font-black text-brand-red mb-2 block">03</span>
        <h3 class="text-xl font-bold mb-2">Design</h3>
        <p class="text-slate-300 text-sm">We plan interfaces, brand identity, and creative assets alongside the technical build.</p>
      </div>

      <div class="p-6 bg-white/[0.05] border border-white/10">
        <span class="text-4xl font-black text-brand-red mb-2 block">04</span>
        <h3 class="text-xl font-bold mb-2">Development</h3>
        <p class="text-slate-300 text-sm">We build the product, site, or campaign in structured, reviewable stages.</p>
      </div>

      <div class="p-6 bg-white/[0.05] border border-white/10 md:col-span-2">
        <span class="text-4xl font-black text-brand-red mb-2 block">05</span>
        <h3 class="text-xl font-bold mb-2">Testing, Launch & Growth</h3>
        <p class="text-slate-300 text-sm">We test thoroughly, launch with confidence, and continue supporting growth through marketing and optimization.</p>
      </div>

    </div>
  </div>
</section>

<!-- Tools / Technologies Continuous Ticker -->
<section class="py-12 bg-[#f4f5f8] text-[#0b102b] overflow-hidden border-t border-b border-slate-200">
  <div class="max-w-5xl mx-auto px-6 sm:px-12 mb-6">
    <h2 class="text-2xl font-bold tracking-tight">Tools / Technologies</h2>
  </div>

  <div class="flex whitespace-nowrap animate-scroll">
    <div class="flex items-center gap-10 px-6 text-slate-500 font-semibold text-sm tracking-wider uppercase">
      <span>Python</span> • <span>JavaScript</span> • <span>PHP</span> • <span>React</span> • <span>Node.js</span> • <span>Laravel</span> • <span>Django</span> • <span>Flutter</span> • <span>Swift</span> • <span>Kotlin</span> • <span>PostgreSQL</span> • <span>MySQL</span> • <span>MongoDB</span> • <span>AWS</span> • <span>Azure</span> • <span>Google Cloud</span> • <span>Jira</span> • <span>GitHub</span> • <span>Postman</span> • <span>Figma</span> • <span>Adobe CC</span> • <span>Google Ads</span> • <span>Meta Business</span> •
    </div>
    <div class="flex items-center gap-10 px-6 text-slate-500 font-semibold text-sm tracking-wider uppercase">
      <span>Python</span> • <span>JavaScript</span> • <span>PHP</span> • <span>React</span> • <span>Node.js</span> • <span>Laravel</span> • <span>Django</span> • <span>Flutter</span> • <span>Swift</span> • <span>Kotlin</span> • <span>PostgreSQL</span> • <span>MySQL</span> • <span>MongoDB</span> • <span>AWS</span> • <span>Azure</span> • <span>Google Cloud</span> • <span>Jira</span> • <span>GitHub</span> • <span>Postman</span> • <span>Figma</span> • <span>Adobe CC</span> • <span>Google Ads</span> • <span>Meta Business</span> •
    </div>
  </div>
</section>

<!-- Why Choose InTech Nexus -->
<section class="py-20 bg-white text-[#0b102b]">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <div class="text-center max-w-3xl mx-auto mb-14">
      <h2 class="text-3xl font-bold tracking-tight mb-3">Why Choose InTech Nexus</h2>
      <p class="text-slate-600 text-base">One team. One process. Every stage of the digital journey.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 bg-slate-50 border border-slate-300">
        <h3 class="text-lg font-bold mb-3">One Team for the Full Journey</h3>
        <p class="text-slate-600 text-sm leading-relaxed">Build, design, and grow all work together, so nothing gets lost between vendors. From initial concept through post-launch growth, a single coordinated team owns the entire process.</p>
      </div>

      <div class="p-8 bg-slate-50 border border-slate-300">
        <h3 class="text-lg font-bold mb-3">Real Industry Knowledge</h3>
        <p class="text-slate-600 text-sm leading-relaxed">Not generic delivery. Our teams bring deep sector-specific insight that shapes every recommendation, design choice, and technical decision.</p>
      </div>

      <div class="p-8 bg-slate-50 border border-slate-300">
        <h3 class="text-lg font-bold mb-3">A Clear Process on Every Project</h3>
        <p class="text-slate-600 text-sm leading-relaxed">From discovery to launch, we follow a transparent, milestone-driven workflow with regular checkpoints and measurable progress reviews.</p>
      </div>

      <div class="p-8 bg-slate-50 border border-slate-300">
        <h3 class="text-lg font-bold mb-3">Global Reach, Local Nuance</h3>
        <p class="text-slate-600 text-sm leading-relaxed">With teams who understand local markets, we combine international delivery capabilities with regional expertise in pricing, compliance, culture, and user behavior.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-[#f4f5f8] text-[#0b102b]" x-data="{ openFaq: null }">
  <div class="max-w-4xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl font-bold tracking-tight mb-10 text-center">Frequently Asked Questions</h2>
    
    <div class="space-y-3">
      <div class="bg-white border border-slate-300 overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-5 font-semibold text-[#0b102b] text-base flex justify-between items-center focus:outline-none">
          <span>Can you handle multiple services in one project?</span>
          <span class="text-brand-red text-xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
          Yes. We regularly run projects that combine software development, design, marketing, and QA under one coordinated team.
        </div>
      </div>

      <div class="bg-white border border-slate-300 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-5 font-semibold text-[#0b102b] text-base flex justify-between items-center focus:outline-none">
          <span>Do you work with startups and enterprise clients?</span>
          <span class="text-brand-red text-xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
          Yes. We scale our teams and workflows to match the stage and size of your business, from early-stage startups to large enterprises.
        </div>
      </div>

      <div class="bg-white border border-slate-300 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-5 font-semibold text-[#0b102b] text-base flex justify-between items-center focus:outline-none">
          <span>How do you price a full-service engagement?</span>
          <span class="text-brand-red text-xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
          Pricing depends on scope, timeline, and the mix of services required. We provide a detailed proposal after discovery, so you know exactly what you are getting.
        </div>
      </div>

      <div class="bg-white border border-slate-300 overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-5 font-semibold text-[#0b102b] text-base flex justify-between items-center focus:outline-none">
          <span>What happens after a project launches?</span>
          <span class="text-brand-red text-xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
          We offer ongoing support, maintenance, and growth services so your product continues to improve after launch.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Footer Section -->
<section class="py-20 bg-[#0b102b] text-white">
  <div class="max-w-5xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-[#14193d] border border-brand-red/30 p-10 shadow-2xl">
      <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Ready to start your next project?
      </h2>
      <p class="text-slate-300 text-base max-w-xl mx-auto mb-8 leading-relaxed">
        Tell us what you are building and we will put together the right team and plan.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center justify-center bg-brand-red text-white font-bold tracking-widest text-xs uppercase px-8 py-3.5 hover:bg-brand-red-hover transition-all">
          Get a Free Quote
        </a>
        <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center justify-center border-2 border-white text-white font-bold tracking-widest text-xs uppercase px-8 py-3.5 hover:bg-white hover:text-[#0b102b] transition-all">
          Book a Call
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
