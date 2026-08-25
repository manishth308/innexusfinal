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

<!-- Hero / Dark Network Header Banner -->
<section class="relative bg-[#0b102b] pt-16 pb-32 overflow-hidden border-b border-white/10">
  
  <!-- Network Background Pattern Overlay -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-30">
    <img 
      src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1920&auto=format&fit=crop" 
      alt="Network Background" 
      class="w-full h-full object-cover mix-blend-screen"
    />
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b102b]/40 via-[#0b102b]/70 to-[#0b102b]"></div>
  </div>

  <div class="relative z-10 max-w-5xl mx-auto px-6 sm:px-12 text-center">
    
    <!-- Top Navigation Links -->
    <nav class="flex items-center justify-center gap-3 text-xs sm:text-sm font-semibold tracking-widest text-slate-300 mb-8 uppercase" aria-label="Breadcrumb">
      <a href="{{ url('/services') }}" class="hover:text-white transition-colors">About Us</a>
      <span class="text-slate-600">|</span>
      <a href="#news" class="hover:text-white transition-colors">News</a>
      <span class="text-slate-500">|</span>
      <a href="#reviews" class="hover:text-white transition-colors">Reviews</a>
      <span class="text-slate-500">|</span>
      <a href="#articles" class="hover:text-white transition-colors">Articles</a>
      <span class="text-slate-500">|</span>
      <span class="text-purple-300">#Future</span>
    </nav>

    <!-- Main Hero Heading -->
    <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-tight tracking-tight mb-6 max-w-4xl mx-auto">
      ERP Development Services That <span class="text-purple-300">Connect Your Operations Into One System</span>
    </h1>

    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-3xl mx-auto font-normal mb-8">
      ERP development services for businesses that need their operations, finance, and inventory running on one connected system.
    </p>

    <!-- Call to Action Buttons -->
    <div class="flex flex-wrap justify-center items-center gap-4 mb-4">
      <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center border-2 border-white text-white font-bold tracking-widest text-xs sm:text-sm uppercase px-8 py-3.5 hover:bg-white hover:text-[#0b102b] transition-all duration-300">
        Learn More
      </a>
      <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-purple-600 border-2 border-purple-600 text-white font-bold tracking-widest text-xs sm:text-sm uppercase px-8 py-3.5 hover:bg-purple-700 hover:border-purple-700 transition-all duration-300">
        Get a Free Quote
      </a>
    </div>

    <p class="text-[11px] text-slate-400 tracking-wider">Image from Freepik</p>

  </div>
</section>

<!-- Intersecting Feature Layout (Mirrors Preview Graphic) -->
<section class="relative bg-[#f4f5f8] pt-12 pb-24 px-6 sm:px-12 text-[#0b102b]">
  <div class="max-w-5xl mx-auto relative -mt-28 z-20">
    
    <!-- Diagonal Striped Accent Background Box -->
    <div class="relative w-full p-6 sm:p-12">
      <div class="absolute inset-0 bg-[repeating-linear-gradient(45deg,#1b1c4b,#1b1c4b_8px,transparent_8px,transparent_20px)] opacity-90"></div>

      <!-- Main Visual Container -->
      <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
        
        <!-- Left Featured Image Block -->
        <div class="lg:col-span-8 relative shadow-2xl border-2 border-white">
          <img 
            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop" 
            alt="Technology Visual" 
            class="w-full h-[380px] sm:h-[480px] object-cover block"
          />
          <div class="absolute bottom-2 left-2 bg-black/60 px-3 py-1 text-[11px] text-white">
            Image from Freepik
          </div>
        </div>

        <!-- Right Overlapping 2x2 Feature Grid -->
        <div class="lg:col-span-6 lg:-ml-24 z-20 grid grid-cols-2 gap-4 mt-6 lg:mt-12">
          
          <div class="bg-white p-6 shadow-xl border border-slate-200 flex flex-col items-center text-center">
            <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-3">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
            </div>
            <h3 class="text-xs font-bold uppercase tracking-wider text-[#0b102b]">Operations</h3>
          </div>

          <div class="bg-white p-6 shadow-xl border border-slate-200 flex flex-col items-center text-center">
            <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-3">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a10 10 0 0114.142 0M1.414 8.414a15 15 0 0121.172 0"/></svg>
            </div>
            <h3 class="text-xs font-bold uppercase tracking-wider text-[#0b102b]">Inventory</h3>
          </div>

          <div class="bg-white p-6 shadow-xl border border-slate-200 flex flex-col items-center text-center">
            <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-3">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <h3 class="text-xs font-bold uppercase tracking-wider text-[#0b102b]">Finance</h3>
          </div>

          <div class="bg-white p-6 shadow-xl border border-slate-200 flex flex-col items-center text-center">
            <div class="w-12 h-12 bg-[#0b102b] text-white flex items-center justify-center mb-3">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/></svg>
            </div>
            <h3 class="text-xs font-bold uppercase tracking-wider text-[#0b102b]">Automation</h3>
          </div>

        </div>

      </div>
    </div>

    <!-- Section Title directly matching lower text header in preview -->
    <div class="text-center mt-16">
      <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-[#0b102b]">
        Technology Of The Future
      </h2>
      <p class="text-slate-600 mt-4 max-w-2xl mx-auto leading-relaxed">
        When operations, finance, and inventory all live in separate places, small inefficiencies add up fast. We build ERP systems that bring these processes into one connected platform.
      </p>
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
            <span class="w-3 h-3 bg-purple-600"></span>
            Who This Is For
          </h2>
          <p class="text-slate-600 leading-relaxed text-sm">
            Businesses managing operations, inventory, or finance across disconnected spreadsheets or outdated systems.
          </p>
        </div>
      </div>

      <div class="p-8 bg-slate-50 border border-slate-300 flex flex-col justify-between">
        <div>
          <h2 class="text-xl font-bold mb-4 flex items-center gap-3">
            <span class="w-3 h-3 bg-purple-600"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3 text-slate-600 text-sm">
            <li class="flex items-start gap-2">
              <span class="text-purple-600 font-bold">•</span>
              <span>Operations, finance, and inventory data live in separate systems that do not talk to each other.</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-purple-600 font-bold">•</span>
              <span>Manual processes are slowing the business down.</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-purple-600 font-bold">•</span>
              <span>An off the shelf ERP tool does not match how the business actually operates.</span>
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
      <p class="text-slate-600 text-base">We design and build custom ERP systems around your operations.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between">
        <div>
          <h3 class="text-lg font-bold mb-2">Custom ERP Development</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Tailored ERP solutions built specifically for operations, finance, and inventory management.</p>
        </div>
      </div>

      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between">
        <div>
          <h3 class="text-lg font-bold mb-2">Enterprise Resource Planning</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Enterprise resource planning software designed around your actual business processes.</p>
        </div>
      </div>

      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between">
        <div>
          <h3 class="text-lg font-bold mb-2">Reporting & Dashboards</h3>
          <p class="text-slate-600 text-sm leading-relaxed">ERP solution development integrated with real-time reporting and interactive dashboards.</p>
        </div>
      </div>

      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between">
        <div>
          <h3 class="text-lg font-bold mb-2">Tool & Data Integration</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Seamless integration with your existing third-party tools and data sources.</p>
        </div>
      </div>

      <div class="p-6 bg-white border border-slate-300 shadow-sm flex flex-col justify-between md:col-span-2 lg:col-span-2">
        <div>
          <h3 class="text-lg font-bold mb-2">Migration Support</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Full migration support to securely transition your data from spreadsheets or legacy systems.</p>
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
        A structured, transparent approach to building ERP systems that scale.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <div class="p-6 bg-white/[0.05] border border-white/10">
        <span class="text-4xl font-black text-purple-400 mb-2 block">01</span>
        <h3 class="text-xl font-bold mb-2">Discovery & Requirements</h3>
        <p class="text-slate-300 text-sm">We map your goals, workflows, and technical needs before any planning begins.</p>
      </div>

      <div class="p-6 bg-white/[0.05] border border-white/10">
        <span class="text-4xl font-black text-purple-400 mb-2 block">02</span>
        <h3 class="text-xl font-bold mb-2">Planning & Architecture</h3>
        <p class="text-slate-300 text-sm">We design the system architecture and choose the right technical approach.</p>
      </div>

      <div class="p-6 bg-white/[0.05] border border-white/10">
        <span class="text-4xl font-black text-purple-400 mb-2 block">03</span>
        <h3 class="text-xl font-bold mb-2">Design</h3>
        <p class="text-slate-300 text-sm">We plan the interface and user experience alongside the technical build.</p>
      </div>

      <div class="p-6 bg-white/[0.05] border border-white/10">
        <span class="text-4xl font-black text-purple-400 mb-2 block">04</span>
        <h3 class="text-xl font-bold mb-2">Development</h3>
        <p class="text-slate-300 text-sm">We build the software in structured, reviewable stages.</p>
      </div>

      <div class="p-6 bg-white/[0.05] border border-white/10 md:col-span-2">
        <span class="text-4xl font-black text-purple-400 mb-2 block">05</span>
        <h3 class="text-xl font-bold mb-2">Testing & Launch</h3>
        <p class="text-slate-300 text-sm">We test thoroughly, then launch with ongoing support.</p>
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
      <span>Python</span> • <span>JavaScript</span> • <span>PHP</span> • <span>React</span> • <span>Node.js</span> • <span>Laravel</span> • <span>Django</span> • <span>PostgreSQL</span> • <span>MySQL</span> • <span>MongoDB</span> • <span>AWS</span> • <span>Azure</span> • <span>Google Cloud</span> • <span>Jira</span> • <span>GitHub</span> • <span>Postman</span> •
    </div>
    <div class="flex items-center gap-10 px-6 text-slate-500 font-semibold text-sm tracking-wider uppercase">
      <span>Python</span> • <span>JavaScript</span> • <span>PHP</span> • <span>React</span> • <span>Node.js</span> • <span>Laravel</span> • <span>Django</span> • <span>PostgreSQL</span> • <span>MySQL</span> • <span>MongoDB</span> • <span>AWS</span> • <span>Azure</span> • <span>Google Cloud</span> • <span>Jira</span> • <span>GitHub</span> • <span>Postman</span> •
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white text-[#0b102b]" x-data="{ openFaq: null }">
  <div class="max-w-4xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl font-bold tracking-tight mb-10 text-center">Frequently Asked Questions</h2>
    
    <div class="space-y-3">
      <div class="bg-slate-50 border border-slate-300 overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-5 font-semibold text-[#0b102b] text-base flex justify-between items-center focus:outline-none">
          <span>How long does an ERP build take?</span>
          <span class="text-purple-600 text-xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
          It depends on how many departments and processes are involved. Timelines are set during discovery, once the scope is clear.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-300 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-5 font-semibold text-[#0b102b] text-base flex justify-between items-center focus:outline-none">
          <span>Can the ERP connect to our existing finance or inventory tools?</span>
          <span class="text-purple-600 text-xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
          Yes. We build ERP systems to integrate with the tools you already use, wherever possible.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-300 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-5 font-semibold text-[#0b102b] text-base flex justify-between items-center focus:outline-none">
          <span>Can the ERP grow with us as we add new departments?</span>
          <span class="text-purple-600 text-xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
          Yes. We design ERP systems with modular architecture, so new departments or processes can be added later without a full rebuild.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-300 overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-5 font-semibold text-[#0b102b] text-base flex justify-between items-center focus:outline-none">
          <span>How disruptive is the migration to a new ERP?</span>
          <span class="text-purple-600 text-xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-5 pb-5 text-slate-600 text-sm leading-relaxed">
          We plan the migration carefully and can run the new system alongside the old one during transition to minimize disruption.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Footer Section -->
<section class="py-20 bg-[#0b102b] text-white">
  <div class="max-w-5xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-[#14193d] border border-purple-400/30 p-10 shadow-2xl">
      <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Ready to bring your operations onto one system?
      </h2>
      <p class="text-slate-300 text-base max-w-xl mx-auto mb-8 leading-relaxed">
        Book a call, request a proposal, or get a free quote to begin.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-purple-600 text-white font-bold tracking-widest text-xs uppercase px-8 py-3.5 hover:bg-purple-700 transition-all">
          Get a Free Quote
        </a>
        <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center border-2 border-white text-white font-bold tracking-widest text-xs uppercase px-8 py-3.5 hover:bg-white hover:text-[#0b102b] transition-all">
          Book a Call
        </a>
      </div>
    </div>
  </div>
</section>

@endsection