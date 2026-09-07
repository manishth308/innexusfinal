@extends('layouts.app')
@section('title', 'Industries - InTech Nexus')

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
    <div class="absolute top-0 right-0 w-full lg:w-[65%] h-full bg-gradient-to-br from-purple-900/60 via-purple-800/30 to-purple-950/10 [clip-path:polygon(25%_0%,100%_0%,100%_100%,0%_100%)] opacity-90"></div>
    <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

      <div class="lg:col-span-7 flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-sm font-medium text-purple-400 mb-6" aria-label="Breadcrumb">
          <a href="{{ url('/') }}" class="hover:text-purple-300 transition-colors">Home</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">Industries</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Industry Expertise <span class="text-purple-400">Built for How You Actually Work</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          Every industry has its own rules, workflows, and expectations. We build digital platforms around those realities, not around generic templates.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          Explore our industry-specific capabilities below, or tell us about your sector and we will share what we have learned working in it.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
            Get a Free Quote
          </a>
          <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
            Book a Call
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
        <div class="relative w-full max-w-[520px] aspect-[4/3] lg:aspect-square">
          <img
            src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1000&auto=format&fit=crop"
            alt="Industries - InTech Nexus"
            class="w-full h-full object-cover object-center relative z-10 border border-white/10 shadow-2xl"
          />
          <div class="absolute inset-0 z-20 bg-gradient-to-r from-[#0b0c10] via-transparent to-transparent opacity-90 pointer-events-none"></div>
          <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent opacity-40 pointer-events-none"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Industry Cards Grid -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-16 max-w-3xl">
      <h2 class="text-3xl md:text-5xl font-bold text-white tracking-tight mb-4">Industries We Serve</h2>
      <p class="text-gray-400 text-lg leading-relaxed">
        Deep expertise across sectors, with platforms designed for the specific challenges and opportunities of each industry.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <a href="{{ url('/industries/ecommerce') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[280px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Ecommerce</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Storefronts and marketing engines built to convert and scale together.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ url('/industries/finance') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[280px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Finance & Banking</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Secure, compliant platforms for digital banking, fintech, and financial services.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ url('/industries/healthcare') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[280px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Healthcare</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Patient and provider platforms that balance usability with privacy and compliance.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ url('/industries/manufacturing') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[280px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Manufacturing</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Connected systems for smarter operations, supply chains, and factory floors.</p>
        </div>
        <span class="text-purple-400 font-semibold text-sm mt-4 inline-flex items-center gap-1">Explore <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
      </a>

      <a href="{{ url('/industries/marketing') }}" class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between min-h-[280px]">
        <div>
          <div class="w-12 h-12 bg-purple-600/20 text-purple-400 flex items-center justify-center mb-4 rounded-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Marketing</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Campaign platforms, analytics, and brand systems that turn attention into revenue.</p>
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
            Business and technology leaders who need partners that understand their industry's language, regulations, and workflows, and can build platforms that fit rather than forcing the business to adapt to generic software.
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
              <span>Off-the-shelf platforms that require painful workarounds to fit industry requirements.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Teams without the specialized knowledge to translate sector-specific needs into technical requirements.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Projects that stall because the technology partner does not understand compliance, workflow, or customer expectations in the sector.</span>
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
      <p class="text-gray-400 text-lg">Sector-specific capabilities backed by deep functional expertise.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">Regulated Environments</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Platforms built with compliance, data governance, and auditability at the foundation for finance, healthcare, and manufacturing.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">Customer-Facing Platforms</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Websites, apps, and portals that meet industry expectations for trust, accessibility, and conversion.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">Operational Systems</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Internal tools, dashboards, and integrations that connect people, data, and processes across complex organizations.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">Go-to-Market Enablement</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Marketing, branding, and content systems that translate technical capabilities into messages that resonate with target audiences.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">Data and Analytics</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Dashboards, reporting, and predictive models that turn operational data into clearer decisions.</p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-3">Scalable Architecture</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Systems designed to grow with your user base, transaction volume, and regulatory landscape.</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Process -->
<section class="py-24 bg-[#0b0c10] text-white border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Our Process</h2>
      <p class="text-gray-400 text-lg leading-relaxed">
        A structured approach to building industry-specific digital platforms.
      </p>
    </div>

    <div class="space-y-6">
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Industry Discovery</h3>
          <p class="text-gray-300">We map the specific workflows, regulations, and customer expectations that define success in your sector.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Domain-Driven Design</h3>
          <p class="text-gray-300">We translate industry requirements into technical architecture that reflects how your business actually operates.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Build and Integration</h3>
          <p class="text-gray-300">We develop the platform and integrate it with the tools, data sources, and workflows your team already uses.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Validation and Compliance</h3>
          <p class="text-gray-300">We test for security, accessibility, and compliance against the standards specific to your industry.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Launch and Evolution</h3>
          <p class="text-gray-300">We support the platform after launch and continue refining it as your industry, customers, and regulations evolve.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose InTech Nexus -->
<section class="relative py-24 bg-[#0b0c10] border-t border-white/5 text-white">
  <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
  <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
      <div class="p-10 md:p-16 text-white flex flex-col justify-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Industry knowledge built into every decision</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          We do not treat industries as an afterthought. Our teams study the specific regulatory, operational, and customer experience requirements of each sector before writing a single line of code. The result is platforms that feel natural to the people who use them.
        </p>
      </div>
      <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1200&auto=format&fit=crop" alt="Industry knowledge built into every decision" class="why-choose-image">
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5 text-white" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Common Questions</h2>

    <div class="space-y-4">
      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Do you have experience with regulated industries?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We work regularly with finance, healthcare, and manufacturing clients on platforms that require compliance, data governance, and security by design.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you work with our existing legacy systems?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          In most cases, yes. We assess your current systems during discovery and plan integrations that connect new tools to what you already use wherever possible.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Footer Section -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5 text-white">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)] hover:shadow-[0_0_60px_rgba(168,85,247,0.35)] transition-all duration-300">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
        Ready to build for your industry?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Tell us about your sector and we will put together the right team and plan.
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

@endsection
