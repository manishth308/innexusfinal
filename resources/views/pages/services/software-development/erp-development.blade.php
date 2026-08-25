@extends('layouts.app')
@section('title', 'ERP Development Services - InTech Nexus')

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

<!-- Hero / Banner Section with Asymmetric Background -->
<section class="relative overflow-hidden bg-[#1b1c4b] pt-16 pb-28 min-h-[620px] flex items-center border-b border-white/10">

  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute -top-10 -right-10 w-full lg:w-[60%] h-[120%] bg-gradient-to-br from-[#2a2b6f] via-[#1b1c4b]/80 to-[#121338]/40 [clip-path:polygon(20%_0%,100%_0%,100%_100%,0%_100%)] opacity-95"></div>
    <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-purple-400/50 to-transparent"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
      
      <div class="lg:col-span-7 flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-sm font-semibold tracking-wider text-purple-300 mb-6 uppercase" aria-label="Breadcrumb">
          <a href="{{ url('/services') }}" class="hover:text-white transition-colors">Services</a>
          <span class="text-slate-400">/</span>
          <span class="text-purple-300">ERP Development</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-bold text-white leading-[1.15] tracking-tight mb-6">
          ERP Development Services That <span class="text-purple-300">Connect Your Operations Into One System</span>
        </h1>

        <p class="text-lg sm:text-xl text-slate-200 leading-relaxed max-w-2xl font-normal mb-4">
          ERP development services for businesses that need their operations, finance, and inventory running on one connected system.
        </p>
        <p class="text-base text-slate-300 leading-relaxed max-w-2xl font-normal mb-8">
          When operations, finance, and inventory all live in separate places, small inefficiencies add up fast. As part of our Software Development practice, we build ERP systems that bring these processes into one connected platform, planned around how your business actually operates rather than a generic template.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-purple-600 text-white font-bold tracking-wider uppercase hover:bg-purple-700 shadow-[0_0_20px_rgba(139,92,246,0.4)] transition-all">
            Get a Free Quote
          </a>
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 border border-white/20 text-white font-bold tracking-wider uppercase hover:bg-white/20 transition-all">
            Book a Call
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
        <div class="relative w-full max-w-[480px] aspect-square">
          <img 
            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop" 
            alt="ERP Development Services - InTech Nexus" 
            class="w-full h-full object-cover relative z-10 border border-white/10 shadow-2xl lg:translate-y-6"
          />
          <div class="absolute -top-6 -left-6 w-full h-full border-2 border-purple-400/30 z-0 pointer-events-none"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Who This Is For & Problems We Solve Section -->
<section class="relative z-20 -mt-16 max-w-7xl mx-auto px-6 sm:px-12">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <div class="p-8 bg-white border border-slate-200 shadow-xl flex flex-col justify-between transform hover:-translate-y-1 transition-all">
      <div>
        <h2 class="text-2xl font-bold text-[#1b1c4b] mb-4 flex items-center gap-3">
          <span class="w-3 h-3 bg-purple-600"></span>
          Who This Is For
        </h2>
        <p class="text-slate-600 leading-relaxed text-base">
          Businesses managing operations, inventory, or finance across disconnected spreadsheets or outdated systems.
        </p>
      </div>
    </div>

    <div class="p-8 bg-white border border-slate-200 shadow-xl flex flex-col justify-between transform hover:-translate-y-1 transition-all">
      <div>
        <h2 class="text-2xl font-bold text-[#1b1c4b] mb-4 flex items-center gap-3">
          <span class="w-3 h-3 bg-purple-600"></span>
          Problems We Solve
        </h2>
        <ul class="space-y-3 text-slate-600">
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">•</span>
            <span>Operations, finance, and inventory data live in separate systems that do not talk to each other.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">•</span>
            <span>Manual processes are slowing the business down.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">•</span>
            <span>An off the shelf ERP tool does not match how the business actually operates.</span>
          </li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- What We Offer -->
<section class="py-24 bg-[#f4f5f8] text-[#1b1c4b]">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-[#1b1c4b] tracking-tight mb-4">What We Offer</h2>
      <p class="text-slate-600 text-lg">We design and build custom ERP systems around your operations.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">Custom ERP Development</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Tailored ERP solutions built specifically for operations, finance, and inventory management.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">Enterprise Resource Planning</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Enterprise resource planning software designed around your actual business processes.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">Reporting & Dashboards</h3>
          <p class="text-slate-600 leading-relaxed text-sm">ERP solution development integrated with real-time reporting and interactive dashboards.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">Tool & Data Integration</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Seamless integration with your existing third-party tools and data sources.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px] md:col-span-2 lg:col-span-2">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">Migration Support</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Full migration support to securely transition your data from spreadsheets or legacy systems.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service Capabilities -->
<section class="py-20 bg-[#ffffff] text-[#1b1c4b]">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-[#1b1c4b] tracking-tight mb-4">Service Capabilities</h2>
      <p class="text-slate-600 text-lg">What we deliver and where we excel.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 bg-slate-50 border border-slate-200">
        <h3 class="text-xl font-bold text-[#1b1c4b] mb-4">What We Deliver</h3>
        <ul class="space-y-3 text-slate-600">
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>A custom ERP system connecting operations, finance, and inventory</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Reporting and dashboards across departments</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Integration with existing finance or inventory tools</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Migration support from spreadsheets or legacy systems</span>
          </li>
        </ul>
      </div>

      <div class="p-8 bg-slate-50 border border-slate-200">
        <h3 class="text-xl font-bold text-[#1b1c4b] mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-slate-600">
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Operations and process mapping</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Multi module system architecture</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Financial and inventory data modeling</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Legacy system migration</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Our Process -->
<section class="py-24 bg-[#1b1c4b] text-white">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white tracking-tight mb-4">Our Process</h2>
      <p class="text-slate-300 text-lg leading-relaxed">
        A structured, transparent approach to building ERP systems that scale.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-purple-400 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <span class="text-5xl font-black text-purple-400 mb-4 block">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Discovery & Requirements</h3>
          <p class="text-slate-300">We map your goals, workflows, and technical needs before any planning begins.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-purple-400 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <span class="text-5xl font-black text-purple-400 mb-4 block">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Planning & Architecture</h3>
          <p class="text-slate-300">We design the system architecture and choose the right technical approach.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-purple-400 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <span class="text-5xl font-black text-purple-400 mb-4 block">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Design</h3>
          <p class="text-slate-300">We plan the interface and user experience alongside the technical build.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-purple-400 transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <span class="text-5xl font-black text-purple-400 mb-4 block">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Development</h3>
          <p class="text-slate-300">We build the software in structured, reviewable stages.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-purple-400 transition-all duration-300 flex flex-col justify-between min-h-[220px] md:col-span-2">
        <span class="text-5xl font-black text-purple-400 mb-4 block">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Testing & Launch</h3>
          <p class="text-slate-300">We test thoroughly, then launch with ongoing support.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Tools / Technologies Ticker Section -->
<section class="py-16 bg-[#f4f5f8] text-[#1b1c4b] overflow-hidden border-t border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 mb-8">
    <h2 class="text-3xl md:text-4xl font-bold text-[#1b1c4b] tracking-tight">Tools / Technologies</h2>
  </div>

  <div class="flex whitespace-nowrap animate-scroll">
    <div class="flex items-center gap-12 px-6 text-slate-500 font-semibold text-base tracking-wider uppercase">
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
    <div class="flex items-center gap-12 px-6 text-slate-500 font-semibold text-base tracking-wider uppercase">
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
<section class="py-24 bg-[#1b1c4b] text-white relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 relative z-10">
    <div class="p-10 md:p-16 bg-gradient-to-br from-[#2a2b6f] to-[#121338] border border-purple-400/30 shadow-2xl">
      <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight mb-6">Why Choose InTech Nexus</h2>
      <p class="text-slate-200 text-lg leading-relaxed max-w-4xl">
        As an ERP development company, we start by mapping how your operations actually work, then build the system around that. This keeps the ERP useful day to day, not just accurate on paper.
      </p>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-24 bg-[#ffffff] text-[#1b1c4b]" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl md:text-5xl font-bold text-[#1b1c4b] tracking-tight mb-12 text-center">Frequently Asked Questions</h2>
    
    <div class="space-y-4">
      <div class="bg-slate-50 border border-slate-200 overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-6 font-semibold text-[#1b1c4b] text-lg flex justify-between items-center focus:outline-none">
          <span>How long does an ERP build take?</span>
          <span class="text-purple-600 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          It depends on how many departments and processes are involved. Timelines are set during discovery, once the scope is clear.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-200 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-[#1b1c4b] text-lg flex justify-between items-center focus:outline-none">
          <span>Can the ERP connect to our existing finance or inventory tools?</span>
          <span class="text-purple-600 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          Yes. We build ERP systems to integrate with the tools you already use, wherever possible.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-200 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-[#1b1c4b] text-lg flex justify-between items-center focus:outline-none">
          <span>Can the ERP grow with us as we add new departments?</span>
          <span class="text-purple-600 text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          Yes. We design ERP systems with modular architecture, so new departments or processes can be added later without a full rebuild.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-200 overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-6 font-semibold text-[#1b1c4b] text-lg flex justify-between items-center focus:outline-none">
          <span>How disruptive is the migration to a new ERP?</span>
          <span class="text-purple-600 text-2xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          We plan the migration carefully and can run the new system alongside the old one during transition to minimize disruption.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Banner -->
<section class="py-24 bg-[#1b1c4b] text-white">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-gradient-to-br from-[#2a2b6f]/50 to-[#121338]/50 border border-purple-400/30 p-10 md:p-16 shadow-xl">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight mb-6">
        Ready to bring your operations onto one system?
      </h2>
      <p class="text-slate-200 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Book a call, request a proposal, or get a free quote to begin.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-purple-600 text-white font-bold tracking-wider uppercase hover:bg-purple-700 shadow-[0_0_20px_rgba(139,92,246,0.4)] transition-all">
          Get a Free Quote
        </a>
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 border border-white/20 text-white font-bold tracking-wider uppercase hover:bg-white/20 transition-all">
          Book a Call
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Floating Chat Button Widget -->
<a href="{{ url('/contact') }}" class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-purple-600 text-white flex items-center justify-center shadow-[0_0_20px_rgba(139,92,246,0.5)] hover:bg-purple-700 transition-all">
  <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
</a>

@endsection