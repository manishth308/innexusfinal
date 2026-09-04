@extends('layouts.app')
@section('title', 'Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
  .csd-page {
    font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
  }
  .csd-page h1, .csd-page h2, .csd-page h3, .csd-page .font-display {
    font-family: 'Plus Jakarta Sans', sans-serif;
    letter-spacing: -0.01em;
  }

  /* --- Hero Background Animations --- */
  @keyframes glowPulse {
    0%, 100% {
      opacity: 0.45;
      transform: scale(1) translate(0, 0);
    }
    50% {
      opacity: 0.75;
      transform: scale(1.1) translate(-10px, 15px);
    }
  }
  .animate-glow-pulse {
    animation: glowPulse 8s ease-in-out infinite;
  }

  @keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
  .animate-gradient-flow {
    background-size: 200% 200%;
    animation: gradientShift 12s ease infinite;
  }

  @keyframes gridPan {
    0% { transform: translateY(0); }
    100% { transform: translateY(-40px); }
  }
  .animate-grid-pan {
    animation: gridPan 20s linear infinite;
  }

  @keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .animate-scroll {
    animation: scroll 35s linear infinite;
  }

  @media (prefers-reduced-motion: reduce) {
    .csd-page * { animation: none!important; transition: none!important; }
  }

  /* --- Arrow Shapes --- */
  .arrow-shape-large {
    width: 420px;
    height: 520px;
    background: linear-gradient(165deg, #00b3a7 0%, #8b5cf6 100%);
    transform: rotate(-25deg);
    filter: blur(40px);
    opacity: 0.55;
    position: absolute;
    z-index: 0;
  }
  .arrow-shape-small {
    width: 280px;
    height: 320px;
    background: linear-gradient(165deg, #00b3a7 0%, #8b5cf6 100%);
    transform: rotate(-15deg);
    filter: blur(40px);
    opacity: 0.45;
    position: absolute;
    z-index: 0;
  }
</style>
@endpush

@section('content')

<div class="csd-page">

<!-- Hero / Banner Section -->
<section class="relative bg-black text-white pt-8 pb-12 lg:pt-12 lg:pb-16 overflow-hidden min-h-[620px] flex flex-col justify-between" x-data="{ activeTab: 0 }">

  <!-- Animated Background Overlay Layer -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <!-- Pulsing Radial Glow -->
    <div class="absolute top-[-10%] right-[-5%] w-[80%] lg:w-[60%] h-[120%] rounded-full opacity-60 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-purple-700/60 via-indigo-900/30 to-transparent blur-3xl animate-glow-pulse"></div>

    <!-- Flowing Diagonal Container -->
    <div class="absolute top-0 right-0 w-[55%] h-full hidden lg:block opacity-30 [clip-path:polygon(25%_0%,100%_0%,100%_100%,0%_100%)] bg-gradient-to-br from-purple-600 via-purple-900 to-black animate-gradient-flow"></div>

    <!-- Floating Grid Lines -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:3.5rem_3.5rem] opacity-40 animate-grid-pan"></div>

    <!-- Bottom Vignette -->
    <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
  </div>

  <!-- Hero Content -->
  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full flex-1 flex flex-col justify-center">
    <div class="max-w-3xl py-12">
      
      <!-- Breadcrumbs -->
      <nav class="flex items-center gap-2 text-sm font-medium text-purple-400 mb-6" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-purple-300 transition-colors">Home</a>
        <span class="text-gray-500">/</span>
        <span class="text-purple-400">Services</span>
      </nav>

      <!-- Main Headline -->
      <h1 class="text-4xl sm:text-6xl lg:text-[62px] font-extrabold text-white leading-[1.1] tracking-tight mb-8">
        Full-Service Digital Solutions <br/>
        <span class="text-purple-400 font-extrabold">Built for Growth</span>
        <span class="block text-white/90">at the core</span>
      </h1>

      <p class="text-lg sm:text-xl text-gray-300 leading-relaxed font-normal mb-10 max-w-2xl">
        From software engineering and mobile apps to design and growth marketing, we deliver end-to-end digital solutions that help your enterprise launch, scale, and transform.
      </p>

      <!-- Action Buttons -->
      <div class="flex flex-wrap items-center gap-4">
        <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center gap-3 px-8 py-3.5 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all group">
          <span>Get a Free Quote</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
        <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center gap-3 px-8 py-3.5 rounded-full border border-white/80 text-white font-bold hover:bg-white hover:text-black transition-all">
          Book a Call
        </a>
      </div>

    </div>
  </div>

  <!-- Hero Bottom Interactive Slider / Tabs -->
  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full border-t border-white/10 pt-6">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

      <button @click="activeTab = 0" class="text-left focus:outline-none group">
        <div class="h-[2px] w-full mb-3 transition-all duration-300" :class="activeTab === 0 ? 'bg-purple-500 shadow-[0_0_10px_#a855f7]' : 'bg-white/20 group-hover:bg-white/40'"></div>
        <span class="text-xs md:text-sm font-medium tracking-wide transition-colors duration-300" :class="activeTab === 0 ? 'text-white' : 'text-gray-400 group-hover:text-gray-200'">
          Software Engineering
        </span>
      </button>

      <button @click="activeTab = 1" class="text-left focus:outline-none group">
        <div class="h-[2px] w-full mb-3 transition-all duration-300" :class="activeTab === 1 ? 'bg-purple-500 shadow-[0_0_10px_#a855f7]' : 'bg-white/20 group-hover:bg-white/40'"></div>
        <span class="text-xs md:text-sm font-medium tracking-wide transition-colors duration-300" :class="activeTab === 1 ? 'text-white' : 'text-gray-400 group-hover:text-gray-200'">
          Mobile & App Modernization
        </span>
      </button>

      <button @click="activeTab = 2" class="text-left focus:outline-none group">
        <div class="h-[2px] w-full mb-3 transition-all duration-300" :class="activeTab === 2 ? 'bg-purple-500 shadow-[0_0_10px_#a855f7]' : 'bg-white/20 group-hover:bg-white/40'"></div>
        <span class="text-xs md:text-sm font-medium tracking-wide transition-colors duration-300" :class="activeTab === 2 ? 'text-white' : 'text-gray-400 group-hover:text-gray-200'">
          UI/UX & Visual Systems
        </span>
      </button>

      <button @click="activeTab = 3" class="text-left focus:outline-none group">
        <div class="h-[2px] w-full mb-3 transition-all duration-300" :class="activeTab === 3 ? 'bg-purple-500 shadow-[0_0_10px_#a855f7]' : 'bg-white/20 group-hover:bg-white/40'"></div>
        <span class="text-xs md:text-sm font-medium tracking-wide transition-colors duration-300" :class="activeTab === 3 ? 'text-white' : 'text-gray-400 group-hover:text-gray-200'">
          Growth & Digital Strategy
        </span>
      </button>

    </div>
  </div>

</section>

<!-- Service Categories Grid Section -->
<section class="py-24 bg-[#0b0c10] text-white border-t border-white/10">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-16 max-w-3xl">
      <h2 class="text-3xl md:text-5xl font-bold text-white tracking-tight mb-4">What We Do</h2>
      <p class="text-gray-400 text-lg leading-relaxed">
        Eight core service areas, each backed by experienced teams and a structured delivery process.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <a href="{{ route('page.show', 'software-development') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Software Development</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Custom software, SaaS, CRM, ERP, and MVP development tailored to your business needs.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'mobile-app-development') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Mobile App Development</h3>
          <p class="text-gray-400 text-sm leading-relaxed">iOS, Android, and cross-platform mobile applications built for performance and scale.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'web-development') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Web Development</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Custom websites, ecommerce platforms, CMS, and web applications that convert visitors.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'ui-ux-design') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">UI UX Design</h3>
          <p class="text-gray-400 text-sm leading-relaxed">User-centric interface and experience design for web, mobile, and SaaS products.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'graphic-design') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Graphic Design</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Logo design, social media creatives, ad designs, and motion graphics for every channel.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'digital-marketing') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Digital Marketing</h3>
          <p class="text-gray-400 text-sm leading-relaxed">SEO, PPC, social media, content, and email marketing that drives qualified traffic.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'branding') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Branding</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Brand strategy and identity development that makes your business stand out and stay memorable.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ route('page.show', 'qa-testing') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
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

<!-- Who This Is For & Problems We Solve -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5 text-white">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <div class="p-8 bg-white/[0.03] border border-white/10 flex flex-col justify-between">
        <div>
          <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
            Who This Is For
          </h2>
          <p class="text-gray-300 leading-relaxed text-base">
            Businesses and product teams that need a reliable partner to build software, design products, and grow their digital presence under one roof.
          </p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 flex flex-col justify-between">
        <div>
          <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Managing separate vendors for development, design, and marketing creates gaps and delays.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Products are launched without proper QA, branding, or go-to-market support.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Technical debt and poor user experience slow down growth after launch.</span>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- What We Offer -->
<section class="py-20 bg-[#0b0c10] text-white border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Offer</h2>
      <p class="text-gray-400 text-lg">One partner for the full digital journey, from idea to launch and beyond.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">End-to-End Delivery</h3>
        <p class="text-gray-300 text-sm leading-relaxed">We handle planning, design, engineering, QA, and launch as one connected process.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">Cross-Functional Teams</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Engineers, designers, marketers, and QA specialists working together from day one.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">Scalable Architecture</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Systems and products built to grow with your user base, traffic, and business goals.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">Ongoing Support</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Post-launch maintenance, optimization, and feature development as your product evolves.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 md:col-span-2 lg:col-span-2">
        <h3 class="text-xl font-bold text-white mb-3">Transparent Communication</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Regular updates, clear milestones, and direct access to the team building your product. No handoffs, no surprises.</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Process -->
<section class="py-24 bg-[#0b0c10] text-white border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">From Complexity to Clarity</h2>
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

<!-- Tools / Technologies Continuous Ticker -->
<section class="py-16 bg-[#0b0c10] border-t border-white/5 overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 mb-8">
    <h2 class="text-3xl md:text-4xl font-bold text-white">Tools / Technologies</h2>
  </div>

  <div class="flex whitespace-nowrap animate-scroll">
    <div class="flex items-center gap-12 px-6 text-gray-400 font-semibold text-base tracking-wider uppercase">
      <span>Python</span> • <span>JavaScript</span> • <span>PHP</span> • <span>React</span> • <span>Node.js</span> • <span>Laravel</span> • <span>Django</span> • <span>Flutter</span> • <span>Swift</span> • <span>Kotlin</span> • <span>PostgreSQL</span> • <span>MySQL</span> • <span>MongoDB</span> • <span>AWS</span> • <span>Azure</span> • <span>Google Cloud</span> • <span>Figma</span> •
    </div>
    <div class="flex items-center gap-12 px-6 text-gray-400 font-semibold text-base tracking-wider uppercase">
      <span>Python</span> • <span>JavaScript</span> • <span>PHP</span> • <span>React</span> • <span>Node.js</span> • <span>Laravel</span> • <span>Django</span> • <span>Flutter</span> • <span>Swift</span> • <span>Kotlin</span> • <span>PostgreSQL</span> • <span>MySQL</span> • <span>MongoDB</span> • <span>AWS</span> • <span>Azure</span> • <span>Google Cloud</span> • <span>Figma</span> •
    </div>
  </div>
</section>

<!-- Why Choose InTech Nexus -->
<section class="py-24 border-t border-white/10 bg-[#0b0c10] text-white">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why Choose InTech Nexus</span>
      <h2 class="text-3xl md:text-5xl font-bold text-white mt-2">One team. One process. Every stage of the digital journey.</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold mb-3">One Team for the Full Journey</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Build, design, and grow all work together, so nothing gets lost between vendors. A single coordinated team owns the process.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold mb-3">Real Industry Knowledge</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Not generic delivery. Our teams bring deep sector-specific insight that shapes every technical and product decision.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold mb-3">A Clear Process on Every Project</h3>
        <p class="text-gray-300 text-sm leading-relaxed">From discovery to launch, we follow a transparent, milestone-driven workflow with clear checkpoints.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold mb-3">Global Reach, Local Nuance</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Combining international delivery capabilities with regional expertise in compliance, culture, and market strategy.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5 text-white" x-data="{ openFaq: null }">
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

<!-- Call to Action Footer Section -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5 text-white">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)] transition-all duration-300 hover:shadow-[0_0_90px_rgba(168,85,247,0.55)] hover:border-purple-400/70 hover:bg-white/[0.05]">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
        Ready to start your next project?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Tell us what you are building and we will put together the right team and plan.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
          Get a Free Quote
        </a>
        <a href="{{ route('page.show', 'contact-us') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
          Book a Call
        </a>
      </div>
    </div>
  </div>
</section>

</div>

@endsection
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
