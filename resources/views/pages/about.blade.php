@extends('layouts.app')
@section('title', 'About Us - InTech Nexus')

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

<!-- Hero Section -->
<section class="relative overflow-hidden bg-[#0b0c10] pt-20 pb-16 min-h-[550px] flex flex-col justify-center">
  <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-40">
    <source src="{{ asset('images/home/about-banner.mp4') }}" type="video/mp4">
  </video>
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-1 bg-gradient-to-r from-transparent via-purple-500 to-transparent opacity-60"></div>
  <div class="absolute top-20 left-20 w-72 h-72 bg-purple-500/10 rounded-full blur-[100px]"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight">
      One Team. <span class="text-green-400">Every Stage</span> of the Digital Journey.
    </h1>
    <p class="mt-6 text-lg sm:text-xl text-gray-100 max-w-3xl mx-auto leading-relaxed">
      InTech Nexus exists because businesses were tired of managing three separate companies. A dev shop, a design studio, and a marketing agency that rarely talk to each other. We built one team that does.
    </p>
  </div>

  <!-- Client Ticker Banner -->
  <div class="relative z-10 mt-16 overflow-hidden border-t border-b border-white/5 py-6">
    <div class="flex whitespace-nowrap animate-scroll">
      <div class="flex items-center gap-16 px-8 text-gray-400 text-lg font-bold tracking-wide">
        <span>HEALTHCARE</span>
        <span>MANUFACTURING</span>
        <span>FINANCE & BANKING</span>
        <span>E-COMMERCE</span>
        <span>BUILD</span>
        <span>DESIGN</span>
        <span>GROW</span>
      </div>
      <div class="flex items-center gap-16 px-8 text-gray-400 text-lg font-bold tracking-wide">
        <span>HEALTHCARE</span>
        <span>MANUFACTURING</span>
        <span>FINANCE & BANKING</span>
        <span>E-COMMERCE</span>
        <span>BUILD</span>
        <span>DESIGN</span>
        <span>GROW</span>
      </div>
    </div>
  </div>
</section>

<!-- Who We Are Section -->
<section class="py-24 bg-[#0b0c10]">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Who We Are</h2>
      <p class="text-gray-400 text-lg leading-relaxed">
        We are a global digital and IT company. We believe the best digital products come from a team that understands the full journey, not just one part of it.
      </p>
      <p class="text-gray-400 text-lg leading-relaxed mt-4">
        That is why our business has three connected parts: <strong class="text-purple-400">Build, Design, and Grow</strong>. We do not treat software, design, and marketing as separate businesses under one roof.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Build Card -->
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300">
        <h3 class="text-2xl font-bold text-white mb-3">Build</h3>
        <p class="text-gray-400 leading-relaxed">Software development engineered for long-term scalability, stability, and high performance from day one.</p>
      </div>

      <!-- Design Card -->
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300">
        <h3 class="text-2xl font-bold text-white mb-3">Design</h3>
        <p class="text-gray-400 leading-relaxed">User-centric design studios creating intuitive digital interfaces aligned directly with technical execution.</p>
      </div>

      <!-- Grow Card -->
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300">
        <h3 class="text-2xl font-bold text-white mb-3">Grow</h3>
        <p class="text-gray-400 leading-relaxed">Data-driven digital marketing campaigns built on deep platform knowledge to accelerate real-world reach.</p>
      </div>
    </div>
  </div>
</section>

<!-- What We Believe Section -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="p-8 md:p-12 rounded-3xl bg-white/[0.03] border border-purple-500/40 shadow-[0_0_30px_rgba(168,85,247,0.15)]">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">What We Believe</h2>
      <p class="text-xl text-purple-400 font-semibold mb-6">
        We design, build, and grow digital businesses. This is not just a tagline. It is how we work.
      </p>
      <p class="text-gray-300 text-lg leading-relaxed">
        A <a href="/software-development" class="text-amber-300">software development </a> project does not get handed off to a design team that was not part of the plan. A <a href="digital-marketing" class="text-amber-300">digital marketing </a>campaign is not guessing at a brand it never helped shape. Every team works from the same brief, inside the same process.
      </p>
    </div>
  </div>
</section>

<!-- How We're Different Section (Accordion / Interactive Step Layout) -->
<section class="py-24 bg-[#0b0c10] relative">
  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">How We're Different</h2>
      <p class="text-gray-400 text-lg leading-relaxed">Experience a modern model built around unified delivery and real industry expertise.</p>
    </div>

    <div x-data="{ activeStep: 1 }" class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      <!-- Left Step Selector -->
      <div class="lg:col-span-5 flex flex-col gap-4">
        <template x-for="step in [
          { id: 1, num: '01', title: 'Full Journey Support' },
          { id: 2, num: '02', title: 'Real Industry Knowledge' },
          { id: 3, num: '03', title: 'One Team You Can Reach' },
          { id: 4, num: '04', title: 'Global Reach, Local Understanding' }
        ]" :key="step.id">
          <button 
            @click="activeStep = step.id"
            :class="activeStep === step.id ? 'bg-white/10 border-purple-400 shadow-[0_0_15px_rgba(168,85,247,0.3)]' : 'bg-white/[0.03] border-white/10 hover:bg-white/[0.06]'"
            class="w-full text-left p-6 rounded-2xl border transition-all duration-300 flex items-center gap-4"
          >
            <span class="text-2xl font-bold text-purple-400" x-text="step.num"></span>
            <span class="text-lg font-bold text-white" x-text="step.title"></span>
          </button>
        </template>
      </div>

      <!-- Right Step Details Card -->
      <div class="lg:col-span-7">
        <div class="h-full rounded-3xl bg-white/[0.03] border border-purple-500/30 p-8 md:p-12 flex flex-col justify-center min-h-[350px] shadow-[0_0_25px_rgba(168,85,247,0.1)]">
          <div x-show="activeStep === 1" x-transition.opacity class="space-y-4">
            <span class="text-purple-400 font-bold text-xl">01</span>
            <h3 class="text-2xl md:text-3xl font-bold text-white">Full Journey Support</h3>
            <p class="text-gray-300 text-lg leading-relaxed">
              From your first working build to a fully grown platform, we stay with you as the project grows.
            </p>
          </div>
          
          <div x-show="activeStep === 2" x-transition.opacity class="space-y-4">
            <span class="text-purple-400 font-bold text-xl">02</span>
            <h3 class="text-2xl md:text-3xl font-bold text-white">Real Industry Knowledge</h3>
            <p class="text-gray-300 text-lg leading-relaxed">
              Deep expertise in healthcare, manufacturing, finance and banking, and ecommerce. Not generic delivery.
            </p>
          </div>
          
          <div x-show="activeStep === 3" x-transition.opacity class="space-y-4">
            <span class="text-purple-400 font-bold text-xl">03</span>
            <h3 class="text-2xl md:text-3xl font-bold text-white">One Team You Can Reach</h3>
            <p class="text-gray-300 text-lg leading-relaxed">
              One point of contact across design, development, and growth. Nothing gets lost between vendors.
            </p>
          </div>
          
          <div x-show="activeStep === 4" x-transition.opacity class="space-y-4">
            <span class="text-purple-400 font-bold text-xl">04</span>
            <h3 class="text-2xl md:text-3xl font-bold text-white">Global Reach, Local Understanding</h3>
            <p class="text-gray-300 text-lg leading-relaxed">
              Global reach with local understanding, wherever you are building.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call To Action Section (Work With Us) -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.03] border border-purple-500/40 rounded-3xl p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)]">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Work With Us</h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Ready to work with a team that owns the full result? Get a free quote to get started.
      </p>
      <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
        Get a Free Quote
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </div>
</section>

@include('partials.faq-accordion', ['faqs' => $page->activeFaqs])

<!-- Footer -->
<footer class="bg-[#07080a] text-gray-400 pt-16 pb-12 border-t border-white/10">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 flex flex-col md:flex-row items-center justify-between gap-6">
    <div class="text-xl font-bold text-white">InTech Nexus</div>
    <div class="text-sm text-gray-500">© 2026 InTech Nexus. All Rights Reserved.</div>
  </div>
</footer>

@endsection