@extends('layouts.app')
@section('title', 'Custom Software Development Services - InTech Nexus')

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

<!-- Hero / Banner Section -->
<section class="relative overflow-hidden bg-[#0b0c10] pt-12 pb-20 lg:pt-16 lg:pb-24 min-h-[580px] flex items-center border-b border-white/10">

  <!-- Left Side Element: Purple Angled Geometric Backdrop Accent -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <!-- Purple Angled Polygon Shape Behind Headline & Visual -->
    <div class="absolute top-0 right-0 w-full lg:w-[65%] h-full bg-gradient-to-br from-purple-900/60 via-purple-800/30 to-purple-950/10 [clip-path:polygon(25%_0%,100%_0%,100%_100%,0%_100%)] opacity-90"></div>
    
    <!-- Top Horizontal Light Edge Line -->
    <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>
    
    <!-- Soft Ambient Lighting Grid Overlay -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
      
      <!-- Left Column: Typography & Breadcrumb -->
      <div class="lg:col-span-7 flex flex-col justify-center">
        <!-- Breadcrumb Navigation -->
        <nav class="flex items-center gap-2 text-sm font-medium text-purple-400 mb-6" aria-label="Breadcrumb">
          <a href="{{ url('/services') }}" class="hover:text-purple-300 transition-colors">Services</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">Custom Software Development</span>
        </nav>

        <!-- Main Headline -->
        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Custom Software Development Built Around Your Business, <span class="text-purple-400">Not a Template</span>
        </h1>

        <!-- Subheading Paragraphs -->
        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          Custom software built around how your business really works, not a generic tool stretched to fit. Our software development team builds systems that hold up under real, daily use.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          Our software development services cover everything from custom SaaS platforms to CRM and ERP systems, all built by one team that stays with the project from planning through to launch and support. Whether you need a focused internal tool or a full custom platform, we scope the work around what your business actually needs.
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
            Get a Free Quote
          </a>
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
            Book a Call
          </a>
        </div>
      </div>

      <!-- Right Column: Visual Element -->
      <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
        <div class="relative w-full max-w-[520px] aspect-[4/3] lg:aspect-square">
          <img 
            src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1000&auto=format&fit=crop" 
            alt="Custom Software Development - InTech Nexus" 
            class="w-full h-full object-cover object-center relative z-10 border border-white/10 shadow-2xl"
          />
          <div class="absolute inset-0 z-20 bg-gradient-to-r from-[#0b0c10] via-transparent to-transparent opacity-90 pointer-events-none"></div>
          <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent opacity-40 pointer-events-none"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Who This Is For & Problems We Solve Section -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Target Audience -->
      <div class="p-8 bg-white/[0.03] border border-white/10 flex flex-col justify-between">
        <div>
          <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
            Who This Is For
          </h2>
          <p class="text-gray-300 leading-relaxed text-base">
            Businesses that have outgrown off-the-shelf tools, or need a system built around a task that no existing product handles well. This includes internal tools and customer-facing platforms.
          </p>
        </div>
      </div>

      <!-- Problems We Solve -->
      <div class="p-8 bg-white/[0.03] border border-white/10 flex flex-col justify-between">
        <div>
          <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Off-the-shelf software makes your team work around its limits.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Older systems are slowing the business down and are hard to maintain.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>You need a SaaS, CRM, or ERP tool built for your exact process.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Core Capabilities Grid -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Offer</h2>
      <p class="text-gray-400 text-lg">We design and build custom software from scratch, or improve what you already have.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Capability 1 -->
      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Custom Software & Platforms</h3>
          <p class="text-purple-400 text-sm font-semibold mb-2">Tailored for your business workflows</p>
          <ul class="text-gray-400 leading-relaxed space-y-1 text-sm">
            <li>• Custom SaaS platforms</li>
            <li>• CRM and ERP systems</li>
            <li>• Internal tools and operations software</li>
          </ul>
        </div>
      </div>

      <!-- Capability 2 -->
      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Modernization & Integrations</h3>
          <p class="text-purple-400 text-sm font-semibold mb-2">Upgrade systems and connect data</p>
          <ul class="text-gray-400 leading-relaxed space-y-1 text-sm">
            <li>• System upgrades and legacy migration</li>
            <li>• API development and outside integrations</li>
            <li>• Custom database development</li>
          </ul>
        </div>
      </div>

      <!-- Capability 3 -->
      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Service Deliverables</h3>
          <p class="text-purple-400 text-sm font-semibold mb-2">High performance and scalability</p>
          <p class="text-gray-400 leading-relaxed text-sm">
            Custom software platforms built around your exact process, scalable internal tools, system upgrades, legacy software modernization, and reliable 3rd party integrations.
          </p>
        </div>
      </div>

      <!-- Capability 4 -->
      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Key Skill Areas</h3>
          <p class="text-purple-400 text-sm font-semibold mb-2">End-to-end technical execution</p>
          <p class="text-gray-400 leading-relaxed text-sm">
            Requirements analysis, technical scoping, backend & database architecture, secure scalable system design, and long-term software maintenance and support.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process Section: 5-Step Playbook -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Our Process</h2>
      <p class="text-gray-400 text-lg leading-relaxed">
        From scoping to deployment — our structured process ensures software is built cleanly, predictably, and to specification.
      </p>
    </div>

    <div class="space-y-6">
      <!-- Step 01 -->
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Discovery & Requirements</h3>
          <p class="text-gray-300">We map your goals, workflows, and technical needs before any planning begins.</p>
        </div>
      </div>

      <!-- Step 02 -->
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Planning & Architecture</h3>
          <p class="text-gray-300">We design the system architecture and choose the right technical approach.</p>
        </div>
      </div>

      <!-- Step 03 -->
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Design</h3>
          <p class="text-gray-300">We plan the interface and user experience alongside the technical build.</p>
        </div>
      </div>

      <!-- Step 04 -->
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Development</h3>
          <p class="text-gray-300">We build the software in structured, reviewable stages.</p>
        </div>
      </div>

      <!-- Step 05 -->
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Testing & Launch</h3>
          <p class="text-gray-300">We test thoroughly, then launch with ongoing support.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tools / Technologies Ticker Section -->
<section class="py-16 bg-[#0b0c10] border-t border-white/5 overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 mb-8">
    <h2 class="text-3xl md:text-4xl font-bold text-white">Tools & Technologies</h2>
  </div>

  <div class="flex whitespace-nowrap animate-scroll">
    <div class="flex items-center gap-12 px-6 text-gray-400 font-semibold text-base tracking-wider uppercase">
      <span>Python</span> •
      <span>JavaScript</span> •
      <span>PHP</span> •
      <span>React</span> •
      <span>Node.js</span> •
      <span>Laravel</span> •
      <span>Django</span> •
      <span>PostgreSQL</span> •
      <span>MySQL</span> •
      <span>MongoDB</span> •
      <span>AWS</span> •
      <span>Azure</span> •
      <span>Google Cloud</span> •
      <span>Jira</span> •
      <span>GitHub</span> •
      <span>Postman</span> •
    </div>
    <div class="flex items-center gap-12 px-6 text-gray-400 font-semibold text-base tracking-wider uppercase">
      <span>Python</span> •
      <span>JavaScript</span> •
      <span>PHP</span> •
      <span>React</span> •
      <span>Node.js</span> •
      <span>Laravel</span> •
      <span>Django</span> •
      <span>PostgreSQL</span> •
      <span>MySQL</span> •
      <span>MongoDB</span> •
      <span>AWS</span> •
      <span>Azure</span> •
      <span>Google Cloud</span> •
      <span>Jira</span> •
      <span>GitHub</span> •
      <span>Postman</span> •
    </div>
  </div>
</section>

<!-- Why Choose InTech Nexus -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="p-10 md:p-14 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04] border border-purple-500/30">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Why Choose InTech Nexus</h2>
      <p class="text-gray-300 text-lg leading-relaxed max-w-4xl">
        Our engineers work inside the same process as our design and growth teams. Software is never built alone, cut off from the product or the business goals behind it. If a project later needs a better interface or a growth plan, it is still the same team. If you need extra hands on an ongoing basis, we can also set up a dedicated development team for you.
      </p>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Frequently Asked Questions</h2>
    
    <div class="space-y-4">
      <!-- FAQ 1 -->
      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>How long does a software build take?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          It depends on the size of the project. A small internal tool can move in a few weeks. A full platform follows the timeline set during discovery and strategy.
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Do you work with our own technical team?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We often work next to in house teams, either adding extra hands or leading a specific part of the work.
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>What is included in a typical software development engagement?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          A typical engagement covers discovery, technical planning, design, development, QA, and launch, followed by ongoing support if you need it.
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you support us after the software is live?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. Ongoing maintenance and support are available after launch, so the software keeps running smoothly as your business changes.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Banner -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)]">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
        Ready to talk through your software project?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Book a call with our team, request a proposal, or get a free quote to see what a custom build would look like for your business.
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


@endsection