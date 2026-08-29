@extends('layouts.app')
@section('title', 'Software Product Development Services - InTech Nexus')

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
          <span class="text-purple-300">Software Product Development</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-bold text-white leading-[1.15] tracking-tight mb-6">
          Software Product Development From <span class="text-purple-300">Early Idea to Market Ready Launch</span>
        </h1>

        <p class="text-lg sm:text-xl text-slate-200 leading-relaxed max-w-2xl font-normal mb-4">
          Software product development services for businesses turning an idea into a full, market ready digital product.
        </p>
        <p class="text-base text-slate-300 leading-relaxed max-w-2xl font-normal mb-8">
          Turning an idea into a real, usable product takes more than development alone. As part of our Software Development practice, we handle product planning, design, engineering, and QA together, so nothing gets lost in translation between teams working in isolation.
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
            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop" 
            alt="Software Product Development Services - InTech Nexus" 
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
          Businesses and product teams building a digital product from the ground up, not just a single internal tool.
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
            <span>Turning a product idea into something real takes more than just development.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">•</span>
            <span>Without proper product engineering, products can end up expensive to maintain.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">•</span>
            <span>You need a partner who can carry the product from concept through to launch.</span>
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
      <p class="text-slate-600 text-lg">We handle end to end product development, from planning through to launch and support.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">Software Product Development Company</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Support from idea to launch, covering planning, design, engineering, and QA.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">Digital Product Development</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Digital product development across web, mobile, and cloud platforms.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">Product Engineering Services</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Scalable product architecture and engineering for long term growth.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">Custom Product Development</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Custom product development tailored to your specific market and users.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-purple-500 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px] md:col-span-2 lg:col-span-2">
        <div>
          <h3 class="text-2xl font-bold text-[#1b1c4b] mb-3 group-hover:text-purple-600 transition-colors">End to End Product Development</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Complete product development including design, engineering, QA, and launch support.</p>
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
            <span>A market ready digital product built end to end</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Product architecture built for future growth</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>A full design system alongside the technical build</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>QA and launch support</span>
          </li>
        </ul>
      </div>

      <div class="p-8 bg-slate-50 border border-slate-200">
        <h3 class="text-xl font-bold text-[#1b1c4b] mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-slate-600">
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Product strategy and scoping</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Full stack software engineering</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Scalable product architecture</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-600 font-bold">◦</span>
            <span>Cross functional product management</span>
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
        A structured, transparent approach to building products that scale.
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
        We treat product development as one connected process, not separate stages handed off between teams. The same group that plans your product also designs it, builds it, and supports it after launch.
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
          <span>Do you handle design as part of product development?</span>
          <span class="text-purple-600 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          Yes. Product design is part of our software product development process, not a separate add on.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-200 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-[#1b1c4b] text-lg flex justify-between items-center focus:outline-none">
          <span>Can you take over a product that is already partly built?</span>
          <span class="text-purple-600 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          Yes. We regularly review existing codebases and take over projects that were started elsewhere or by another team.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-200 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-[#1b1c4b] text-lg flex justify-between items-center focus:outline-none">
          <span>Do you help decide what features to build first?</span>
          <span class="text-purple-600 text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          Yes. We help prioritize features based on what actually matters to your first users, rather than trying to build everything at once.
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
        Ready to bring your product idea to life?
      </h2>
      <p class="text-slate-200 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Book a call, request a proposal, or get a free quote to start.
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
