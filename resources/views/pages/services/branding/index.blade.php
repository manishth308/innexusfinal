@extends('layouts.app')
@section('title', 'Branding Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .branding-page{
    font-family:'Inter',system-ui,sans-serif;
  }
  .branding-page h1, .branding-page h2, .branding-page h3, .branding-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .branding-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  .cap-card{
    border:1px solid rgba(168,85,247,0.30);
    background:rgba(255,255,255,0.03);
    color:#fff;
    cursor:pointer;
    transition:border-color .25s ease, transform .25s ease, background-color .25s ease;
  }
  .cap-card:hover, .cap-card.is-open{
    border-color:#c084fc;
    background:rgba(255,255,255,0.06);
    transform:translateY(-2px);
  }
  .cap-card .cap-detail{
    max-height:0;
    overflow:hidden;
    transition:max-height .3s ease, opacity .3s ease, margin-top .3s ease;
    opacity:0;
  }
  .cap-card.is-open .cap-detail{
    max-height:200px;
    opacity:1;
    margin-top:.75rem;
  }
  .cap-card .cap-chevron{ transition:transform .25s ease; color:#c084fc; }
  .cap-card.is-open .cap-chevron{ transform:rotate(45deg); }

  @media (prefers-reduced-motion: reduce){
    .branding-page *{ animation:none!important; transition:none!important; }
  }
</style>
@endpush

@section('content')

<div class="branding-page">

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
          <a href="{{ url('/services') }}" class="hover:text-purple-300 transition-colors">Services</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">Branding</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Branding Services That Build a Business People <span class="text-purple-400">Recognize and Trust</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          A brand identity that holds up everywhere. Not just a logo, but a full system that makes a business easy to recognize and easy to trust.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          Our branding services bring strategy and visual identity together as one process, so the way your business looks is grounded in a clear position, not just colors and fonts chosen for their own sake. This makes branding the right starting point for businesses launching for the first time or rebuilding an identity that no longer fits.
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
            src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?q=80&w=1000&auto=format&fit=crop" 
            alt="Branding - InTech Nexus" 
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
      <div class="p-8 bg-white/[0.03] border border-white/10 flex flex-col justify-between">
        <div>
          <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
            Who This Is For
          </h2>
          <p class="text-gray-300 leading-relaxed text-base">
            Businesses launching for the first time, rebranding after growth, or dealing with a brand that looks different on every channel.
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
              <span>The current brand looks outdated or changes from platform to platform.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>There is no real brand system, just a logo and guesswork everywhere else.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>The brand does not match where the business is now.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- What We Offer (accordion) -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5" x-data="{ openCap: null }">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">What We Offer</span>
      <h2 class="text-3xl md:text-5xl font-bold text-white mt-3 mb-4">We build full brand systems, not just single pieces</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      @foreach ([
        ['t' => 'Brand Strategy and Positioning', 'd' => 'Brand strategy and positioning that defines how your business is understood in the market and what makes it distinct.'],
        ['t' => 'Logo Design', 'd' => 'Logo design that works across every channel, from business cards to billboards, without losing clarity or impact.'],
        ['t' => 'Visual Identity, Including Color, Type, and Imagery', 'd' => 'Visual identity, including color, type, and imagery, tied together as a coherent system rather than separate pieces.'],
        ['t' => 'Brand Guideline Documents', 'd' => 'Brand guideline documents your team and partners can follow to keep the brand consistent as it grows.'],
        ['t' => 'Naming and Messaging Support', 'd' => 'Naming and messaging support to make sure the brand voice and language match the visual identity.'],
      ] as $i => $offer)
        <div class="cap-card rounded-xl p-6" :class="{ 'is-open': openCap === {{ $i }} }" @click="openCap = openCap === {{ $i }} ? null : {{ $i }}">
          <div class="flex items-start justify-between gap-3">
            <p class="font-semibold text-lg text-white">{{ $offer['t'] }}</p>
            <span class="cap-chevron font-mono text-lg flex-shrink-0">+</span>
          </div>
          <div class="cap-detail text-sm leading-relaxed text-gray-400">
            {{ $offer['d'] }}
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Service Capabilities -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Capabilities</span>
      <h2 class="text-3xl md:text-5xl font-bold text-white mt-3 mb-4">Our Service Capabilities</h2>
      <p class="text-gray-400 text-lg">What we deliver and where we excel.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">What We Deliver</h3>
        <ul class="space-y-3 text-sm text-gray-300">
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>A complete brand identity system</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Brand strategy and positioning documentation</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Full visual identity, including logo, color, and type</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Brand guidelines your team can apply consistently</span></li>
        </ul>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-sm text-gray-300">
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Brand strategy and positioning</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Visual identity design</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Logo design</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Brand guideline documentation</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Our Process (with outcomes grid) -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Our Process</span>
      <h2 class="text-3xl md:text-5xl font-bold text-white mt-3 mb-4">From Complexity to Clarity</h2>
      <p class="text-gray-400 text-lg leading-relaxed">Our structured process for brand strategy and identity.</p>
    </div>

    <div class="space-y-6">
      @foreach ([
        ['n' => '01', 't' => 'Discovery & Research', 'd' => 'We learn your business, audience, and competitors.'],
        ['n' => '02', 't' => 'Positioning & Strategy', 'd' => 'We define how your brand should be positioned and understood.'],
        ['n' => '03', 't' => 'Visual Identity Design', 'd' => 'We design the logo, color, type, and wider visual system.'],
        ['n' => '04', 't' => 'Guidelines Development', 'd' => 'We document the system in clear, usable brand guidelines.'],
        ['n' => '05', 't' => 'Rollout Support', 'd' => 'We support the identity as it rolls out across channels.'],
      ] as $step)
        <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
          <span class="text-3xl font-extrabold text-purple-400">{{ $step['n'] }}</span>
          <div>
            <h3 class="text-2xl font-bold text-white mb-2">{{ $step['t'] }}</h3>
            <p class="text-gray-300">{{ $step['d'] }}</p>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-3xl">
      @foreach ([
        'A complete brand identity system',
        'Brand strategy and positioning documentation',
        'Full visual identity, including logo, color, and type',
        'Brand guidelines your team can apply consistently',
      ] as $outcome)
        <div class="flex items-start gap-3">
          <span class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold bg-purple-600 text-white">✓</span>
          <span class="text-sm text-gray-300">{{ $outcome }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Tools / Technologies Section -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Tools & Technologies</span>
      <h2 class="text-3xl md:text-5xl font-bold text-white mt-3 mb-4">The tools and platforms we use</h2>
      <p class="text-gray-400 text-lg">The platforms and tools that support our branding process.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="p-6 bg-white/[0.03] border border-white/10">
        <p class="font-mono text-xs uppercase tracking-wider mb-3 text-purple-400">Design</p>
        <p class="text-sm font-medium text-gray-300">Adobe Illustrator · Adobe InDesign · Adobe Photoshop · Figma</p>
      </div>
      <div class="p-6 bg-white/[0.03] border border-white/10">
        <p class="font-mono text-xs uppercase tracking-wider mb-3 text-purple-400">Strategy</p>
        <p class="text-sm font-medium text-gray-300">Brand Workshops · Competitor Audits</p>
      </div>
      <div class="p-6 bg-white/[0.03] border border-white/10">
        <p class="font-mono text-xs uppercase tracking-wider mb-3 text-purple-400">Documentation</p>
        <p class="text-sm font-medium text-gray-300">Brand Guideline Templates · Notion · Miro</p>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose InTech Nexus -->
<section class="relative py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
  <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-stretch">
      <div class="p-10 md:p-16 text-white flex flex-col justify-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Strategy and design as one process, not separate steps</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          We treat strategy and design as one process, not two separate steps. That means the visual identity is grounded in a clear position, not just a set of colors and fonts chosen for their own sake.
        </p>
      </div>
      <div class="min-h-[320px] bg-[url('https://images.unsplash.com/photo-1558655146-9f40138edfeb?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center"></div>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Frequently Asked Questions</h2>
    
    <div class="space-y-4">
      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Do you handle both strategy and design, or just one?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Both. Brand strategy and visual identity are handled together in our process, since one should inform the other.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Will we receive brand guidelines we can share with our team?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. A brand guideline document is part of our standard deliverable, so your team and any future partners can apply the identity consistently.
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
        Ready to build a brand people remember?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Book a call, request a proposal, or get a free quote to begin.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
          Get a Free Quote
        </a>
        <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
          Book a Call
        </a>
      </div>
    </div>
  </div>
</section>

</div>

@endsection