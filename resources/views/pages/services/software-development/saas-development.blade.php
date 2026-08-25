@extends('layouts.app')
@section('title', 'SaaS Development Services - InTech Nexus')

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

<!-- Hero / Banner Section with Asymmetric Diagonal Background & Overlapping Elements -->
<section class="relative overflow-hidden bg-[#01183D] pt-16 pb-28 min-h-[620px] flex items-center border-b border-white/10">

  <!-- Asymmetric Background Overlay Pattern -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute -top-10 -right-10 w-full lg:w-[60%] h-[120%] bg-gradient-to-br from-[#01183D] via-[#01183D]/80 to-[#0a0f1f]/40 [clip-path:polygon(20%_0%,100%_0%,100%_100%,0%_100%)] opacity-95"></div>
    <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-[#CC0309]/50 to-transparent"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
      
      <!-- Content Container -->
      <div class="lg:col-span-7 flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-sm font-semibold tracking-wider text-[#CC0309] mb-6 uppercase" aria-label="Breadcrumb">
          <a href="{{ url('/services') }}" class="hover:text-white transition-colors">Services</a>
          <span class="text-slate-400">/</span>
          <span class="text-[#CC0309]">SaaS Development</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-bold text-white leading-[1.15] tracking-tight mb-6">
          SaaS Development Services Built to <span class="text-[#CC0309]">Scale From Day One</span>
        </h1>

        <p class="text-lg sm:text-xl text-slate-200 leading-relaxed max-w-2xl font-normal mb-4">
          SaaS development services for founders and businesses building a subscription based software product, from first version to a platform ready to scale.
        </p>
        <p class="text-base text-slate-300 leading-relaxed max-w-2xl font-normal mb-8">
          We handle SaaS development end to end, from early product planning through to a platform ready for real subscribers. As part of our Software Development practice, every SaaS build is planned with billing, account management, and future growth in mind, not added on as an afterthought.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-[#CC0309] text-white font-bold tracking-wider uppercase hover:bg-[#F12B2B] shadow-[0_0_20px_rgba(204,3,9,0.4)] transition-all">
            Get a Free Quote
          </a>
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 border border-white/20 text-white font-bold tracking-wider uppercase hover:bg-white/20 transition-all">
            Book a Call
          </a>
        </div>
      </div>

      <!-- Asymmetric Floating Image Block -->
      <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
        <div class="relative w-full max-w-[480px] aspect-square">
          <img 
            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop" 
            alt="SaaS Development - InTech Nexus" 
            class="w-full h-full object-cover relative z-10 border border-white/10 shadow-2xl lg:translate-y-6"
          />
          <div class="absolute -top-6 -left-6 w-full h-full border-2 border-[#CC0309]/30 z-0 pointer-events-none"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 3-Column Overlapping Floating Grid (Edge Computing / ML / AI Style Grid) -->
<section class="relative z-20 -mt-16 max-w-7xl mx-auto px-6 sm:px-12">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <div class="p-8 bg-white border border-slate-200 shadow-xl flex flex-col justify-between transform hover:-translate-y-1 transition-all text-center">
      <div>
        <h2 class="text-2xl font-bold text-[#01183D] mb-4 flex items-center justify-center gap-3">
          <span class="w-3 h-3 bg-[#CC0309]"></span>
          Who This Is For
        </h2>
        <p class="text-slate-600 leading-relaxed text-base">
          Founders and product teams building a SaaS product, or looking to modernize an existing one.
        </p>
      </div>
    </div>

    <div class="p-8 bg-white border border-slate-200 shadow-xl flex flex-col justify-between transform hover:-translate-y-1 transition-all text-center">
      <div>
        <h2 class="text-2xl font-bold text-[#01183D] mb-4 flex items-center justify-center gap-3">
          <span class="w-3 h-3 bg-[#CC0309]"></span>
          Problems We Solve
        </h2>
        <ul class="space-y-3 text-slate-600 inline-block text-left">
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">•</span>
            <span>Turning an idea into a working SaaS product involves more than just writing code.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">•</span>
            <span>Subscription billing, user accounts, and multi tenant architecture all need to be planned properly.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">•</span>
            <span>Cloud software development needs to be built to scale from day one.</span>
          </li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- What We Offer - Grid System -->
<section class="py-24 bg-[#F5F5F9] text-[#01183D]">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-[#01183D] tracking-tight mb-4">What We Offer</h2>
      <p class="text-slate-600 text-lg">We handle custom SaaS development from architecture through to launch.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="group p-8 bg-white border border-slate-200 hover:border-[#CC0309] shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px] text-center">
        <div>
          <h3 class="text-2xl font-bold text-[#01183D] mb-3 group-hover:text-[#CC0309] transition-colors">SaaS Product Development</h3>
          <p class="text-slate-600 leading-relaxed text-sm">From idea to launch, we build complete SaaS products.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-[#CC0309] shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px] text-center">
        <div>
          <h3 class="text-2xl font-bold text-[#01183D] mb-3 group-hover:text-[#CC0309] transition-colors">Subscription Billing & Account Management</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Robust billing systems and user account management built in from the start.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-[#CC0309] shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px] text-center">
        <div>
          <h3 class="text-2xl font-bold text-[#01183D] mb-3 group-hover:text-[#CC0309] transition-colors">Cloud Software Development</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Scalable cloud infrastructure designed for growth from day one.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-[#CC0309] shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px] text-center">
        <div>
          <h3 class="text-2xl font-bold text-[#01183D] mb-3 group-hover:text-[#CC0309] transition-colors">SaaS Application Development</h3>
          <p class="text-slate-600 leading-relaxed text-sm">Web and mobile applications built for subscription based businesses.</p>
        </div>
      </div>

      <div class="group p-8 bg-white border border-slate-200 hover:border-[#CC0309] shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px] md:col-span-2 text-center">
        <div>
          <h3 class="text-2xl font-bold text-[#01183D] mb-3 group-hover:text-[#CC0309] transition-colors">Onboarding Flows Built to Reduce Churn</h3>
          <p class="text-slate-600 leading-relaxed text-sm">User onboarding experiences designed to increase adoption and reduce early churn.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service Capabilities -->
<section class="py-20 bg-white text-[#01183D]">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-[#01183D] tracking-tight mb-4">Service Capabilities</h2>
      <p class="text-slate-600 text-lg">What we deliver and where we excel.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 bg-slate-50 border border-slate-200 text-center">
        <h3 class="text-xl font-bold text-[#01183D] mb-4">What We Deliver</h3>
        <ul class="space-y-3 text-slate-600">
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">◦</span>
            <span>A fully built SaaS platform ready for real users</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">◦</span>
            <span>Subscription billing and account management systems</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">◦</span>
            <span>Multi tenant architecture built to scale</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">◦</span>
            <span>Onboarding flows designed to reduce early churn</span>
          </li>
        </ul>
      </div>

      <div class="p-8 bg-slate-50 border border-slate-200 text-center">
        <h3 class="text-xl font-bold text-[#01183D] mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-slate-600">
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">◦</span>
            <span>Cloud native architecture and infrastructure planning</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">◦</span>
            <span>Subscription and billing system integration</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">◦</span>
            <span>Multi tenant data design</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#CC0309] font-bold">◦</span>
            <span>Product analytics and usage tracking setup</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Our Process (Numbered Sequential Cards Grid like 01 / 02 / 03 / 04 demo blocks) -->
<section class="py-24 bg-[#01183D] text-white">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white tracking-tight mb-4">Our Process</h2>
      <p class="text-slate-300 text-lg leading-relaxed">
        A structured, transparent approach to building SaaS products that scale.
      </p>
    </div>

    <!-- 2-Column Grid of Sequential Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-[#CC0309] transition-all duration-300 flex flex-col justify-between min-h-[220px] text-center">
        <span class="text-5xl font-black text-[#CC0309] mb-4 block">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Discovery & Requirements</h3>
          <p class="text-slate-300">We map your goals, workflows, and technical needs before any planning begins.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-[#CC0309] transition-all duration-300 flex flex-col justify-between min-h-[220px] text-center">
        <span class="text-5xl font-black text-[#CC0309] mb-4 block">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Planning & Architecture</h3>
          <p class="text-slate-300">We design the system architecture and choose the right technical approach.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-[#CC0309] transition-all duration-300 flex flex-col justify-between min-h-[220px] text-center">
        <span class="text-5xl font-black text-[#CC0309] mb-4 block">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Design</h3>
          <p class="text-slate-300">We plan the interface and user experience alongside the technical build.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-[#CC0309] transition-all duration-300 flex flex-col justify-between min-h-[220px] text-center">
        <span class="text-5xl font-black text-[#CC0309] mb-4 block">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Development</h3>
          <p class="text-slate-300">We build the software in structured, reviewable stages.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.05] border border-white/10 hover:border-[#CC0309] transition-all duration-300 flex flex-col justify-between min-h-[220px] md:col-span-2 text-center">
        <span class="text-5xl font-black text-[#CC0309] mb-4 block">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Testing & Launch</h3>
          <p class="text-slate-300">We test thoroughly, then launch with ongoing support.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Tools / Technologies Ticker Section -->
<section class="py-16 bg-[#F5F5F9] text-[#01183D] overflow-hidden border-t border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 mb-8">
    <h2 class="text-3xl md:text-4xl font-bold text-[#01183D] tracking-tight">Tools / Technologies</h2>
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
<section class="py-24 bg-[#01183D] text-white relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 relative z-10">
    <div class="p-10 md:p-16 bg-gradient-to-br from-[#01183D]/80 to-[#0a0f1f]/80 border border-[#CC0309]/30 shadow-2xl">
      <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight mb-6">Why Choose InTech Nexus</h2>
      <p class="text-slate-200 text-lg leading-relaxed max-w-4xl">
        As a SaaS development company, we build customer relationship management software around how your team already sells, instead of asking them to change their process to fit the tool.
      </p>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-24 bg-white text-[#01183D]" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl md:text-5xl font-bold text-[#01183D] tracking-tight mb-12 text-center">Frequently Asked Questions</h2>
    
    <div class="space-y-4">
      <div class="bg-slate-50 border border-slate-200 overflow-hidden text-center">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-6 font-semibold text-[#01183D] text-lg flex justify-between items-center focus:outline-none">
          <span>What makes SaaS development different from regular software development?</span>
          <span class="text-[#CC0309] text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          SaaS development requires planning for multi-tenancy, subscription billing, user account management, and scalability from the start. These are not afterthoughts but core architectural decisions that shape the entire platform.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-200 overflow-hidden text-center">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-[#01183D] text-lg flex justify-between items-center focus:outline-none">
          <span>Do you handle subscription billing and payments?</span>
          <span class="text-[#CC0309] text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          Yes. We integrate with leading payment processors and build custom subscription billing logic, including tiered pricing, trial periods, and automated invoicing.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-200 overflow-hidden text-center">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-[#01183D] text-lg flex justify-between items-center focus:outline-none">
          <span>Can you scale an existing SaaS product?</span>
          <span class="text-[#CC0309] text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          Absolutely. We work with existing SaaS platforms to optimize architecture, improve performance, and add new features without disrupting current users.
        </div>
      </div>

      <div class="bg-slate-50 border border-slate-200 overflow-hidden text-center">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-6 font-semibold text-[#01183D] text-lg flex justify-between items-center focus:outline-none">
          <span>What cloud platforms do you use for SaaS hosting?</span>
          <span class="text-[#CC0309] text-2xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-6 pb-6 text-slate-600 leading-relaxed">
          We primarily work with AWS, Azure, and Google Cloud, choosing the best fit for your product's needs, team expertise, and long-term cost considerations.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Banner -->
<section class="py-24 bg-[#01183D] text-white">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-gradient-to-br from-[#01183D]/80 to-[#0a0f1f]/80 border border-[#CC0309]/30 p-10 md:p-16 shadow-xl">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight mb-6">
        Ready to build or scale your SaaS product?
      </h2>
      <p class="text-slate-200 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Book a call, request a proposal, or get a free quote to start the conversation.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-[#CC0309] text-white font-bold tracking-wider uppercase hover:bg-[#F12B2B] shadow-[0_0_20px_rgba(204,3,9,0.4)] transition-all">
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
<a href="{{ url('/contact') }}" class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#CC0309] text-white flex items-center justify-center shadow-[0_0_20px_rgba(204,3,9,0.5)] hover:bg-[#F12B2B] transition-all">
  <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
</a>

@endsection
