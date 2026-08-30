@extends('layouts.app')
@section('title', 'Finance & Banking Industry Solutions - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .hc-page{
    --navy-deep:#0B1B3D;
    --navy-darker:#071227;
    --teal-accent:#0D9488;
    --teal-bright:#2DD4BF;
    --bg-soft:#F1F7F6;
    --text-muted:#6B7280;
    --line:#E1EAE8;
    font-family:'Inter',system-ui,sans-serif;
  }
  .hc-page h1, .hc-page h2, .hc-page h3, .hc-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .hc-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  /* Animated mesh-gradient hero */
  .hc-hero{
    background:
      radial-gradient(circle at 18% 20%, rgba(13,148,136,0.32), transparent 55%),
      radial-gradient(circle at 82% 80%, rgba(45,212,191,0.20), transparent 50%),
      linear-gradient(120deg, var(--navy-deep), var(--navy-darker));
    background-size:200% 200%, 200% 200%, 100% 100%;
    animation:hc-mesh 14s ease-in-out infinite;
  }
  @keyframes hc-mesh{
    0%,100%{ background-position:0% 0%, 100% 100%, 0 0; }
    50%{ background-position:100% 50%, 0% 50%, 0 0; }
  }

  /* Optional hosted video layer (drop a <source> in to enable) */
  .hc-hero-video{
    position:absolute; inset:0; width:100%; height:100%;
    object-fit:cover; opacity:.28; mix-blend-mode:luminosity;
    pointer-events:none;
  }

  /* Flow connectors + pulses */
  .hc-flow-line{
    stroke:var(--teal-accent); stroke-width:2; stroke-dasharray:7 7;
    animation:hc-dash 1.2s linear infinite;
  }
  @keyframes hc-dash{ to{ stroke-dashoffset:-14; } }
  .hc-pulse-ring{ fill:none; stroke:var(--teal-accent); animation:hc-ring 2.6s ease-out infinite; transform-origin:center; }
  @keyframes hc-ring{ 0%{ transform:scale(.6); opacity:.55; } 100%{ transform:scale(1.7); opacity:0; } }

  /* Floating + reveal */
  .hc-float{ animation:hc-float 6s ease-in-out infinite; }
  @keyframes hc-float{ 0%,100%{ transform:translateY(0); } 50%{ transform:translateY(-12px); } }

  .hc-fade-up{ opacity:0; transform:translateY(26px); transition:opacity .6s ease, transform .6s ease; }
  .hc-fade-up.visible{ opacity:1; transform:translateY(0); }

  /* Animated heading rule */
  .hc-rule{
    display:block; width:56px; height:3px; margin-top:1rem; border-radius:2px;
    background:var(--teal-accent);
    transform:scaleX(0); transform-origin:left;
    transition:transform .7s ease;
  }
  .hc-fade-up.visible .hc-rule{ transform:scaleX(1); }

  /* Feature cards + staggered reveal */
  .hc-card{
    border:1px solid var(--line); background:#fff;
    transition:border-color .25s ease, transform .4s ease, box-shadow .25s ease;
  }
  .hc-card:hover{
    border-color:var(--teal-accent); transform:translateY(-4px);
    box-shadow:0 12px 30px rgba(13,148,136,0.16);
  }
  .hc-card .hc-icon{ transition:transform .3s ease; }
  .hc-card:hover .hc-icon{ transform:scale(1.08); }

  .hc-stagger > *{ opacity:0; transform:translateY(24px); transition:opacity .55s ease, transform .55s ease; }
  .hc-stagger.visible > *{ opacity:1; transform:translateY(0); }
  .hc-stagger.visible > *:nth-child(1){ transition-delay:0s; }
  .hc-stagger.visible > *:nth-child(2){ transition-delay:.07s; }
  .hc-stagger.visible > *:nth-child(3){ transition-delay:.14s; }
  .hc-stagger.visible > *:nth-child(4){ transition-delay:.21s; }
  .hc-stagger.visible > *:nth-child(5){ transition-delay:.28s; }
  .hc-stagger.visible > *:nth-child(6){ transition-delay:.35s; }
  .hc-stagger > *:hover{ transition-delay:0s; }

  /* CTA shimmer */
  .hc-shimmer{ position:relative; overflow:hidden; }
  .hc-shimmer::after{
    content:''; position:absolute; top:0; left:0; width:55%; height:100%;
    background:linear-gradient(120deg, transparent, rgba(255,255,255,.35), transparent);
    transform:translateX(-160%);
    animation:hc-shimmer 3.6s ease-in-out infinite;
  }
  @keyframes hc-shimmer{ 0%{ transform:translateX(-160%); } 55%,100%{ transform:translateX(260%); } }

  @media (prefers-reduced-motion: reduce){
    .hc-page *{ animation:none!important; transition:none!important; }
    .hc-fade-up{ opacity:1!important; transform:none!important; }
    .hc-stagger > *{ opacity:1!important; transform:none!important; }
    .hc-rule{ transform:none!important; }
    .hc-shimmer::after{ display:none!important; }
  }
</style>
@endpush

@section('content')
<div class="hc-page bg-white">

  <!-- ===== Hero ===== -->
  <header class="hc-hero relative overflow-hidden text-white">
    <video class="hc-hero-video" autoplay muted loop playsinline poster="">
      <!-- <source src="/videos/finance-hero.mp4" type="video/mp4"> -->
    </video>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-14 pb-24 lg:pt-16 lg:pb-28">
      <nav class="flex flex-wrap items-center gap-2 text-sm font-medium mb-8" style="color:var(--teal-bright);" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
        <span class="text-white/30">/</span>
        <a href="{{ url('/industries') }}" class="hover:text-white transition-colors">Industries</a>
        <span class="text-white/30">/</span>
        <span class="text-white/70">Finance & Banking</span>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 max-w-3xl">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-bright);">
            Finance & Banking
          </span>
          <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
            In finance and banking, trust matters as much as the service itself.
          </h1>
          <p class="text-lg text-white/75 leading-relaxed mb-10 max-w-2xl">
            Every digital touchpoint needs to feel safe, honest, and built to a high standard, because a single confusing or unreliable moment can be enough to make a customer question whether their money is actually secure.
          </p>

          <div class="flex flex-wrap items-center gap-4">
            <a href="{{ url('/contact') }}" class="hc-shimmer inline-flex items-center gap-2 px-7 py-3.5 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5" style="background:var(--teal-accent);">
              Get a Free Quote
              <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
            </a>
            <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-7 py-3.5 font-mono text-xs font-semibold uppercase tracking-wider text-white border border-white/30 rounded-full hover:border-white hover:bg-white/5 transition-all">
              Book a Call
              <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
            </a>
          </div>
        </div>

        <!-- Animated security-first hub graphic -->
        <div class="lg:col-span-5 hidden lg:block hc-float" aria-hidden="true">
          <div class="relative rounded-2xl border border-white/10 p-6" style="background:rgba(255,255,255,0.04);">
            <svg viewBox="0 0 600 280" class="w-full h-64">
              <defs>
                <linearGradient id="finShield" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" stop-color="#0D9488"/>
                  <stop offset="100%" stop-color="#0B1B3D"/>
                </linearGradient>
              </defs>

              <!-- connectors -->
              <line class="hc-flow-line" x1="300" y1="130" x2="115" y2="67"/>
              <line class="hc-flow-line" x1="300" y1="130" x2="485" y2="67"/>
              <line class="hc-flow-line" x1="300" y1="130" x2="300" y2="239"/>

              <!-- pulses -->
              <circle r="5" fill="#2DD4BF"><animateMotion dur="2.6s" repeatCount="indefinite" path="M300 130 L115 67"/></circle>
              <circle r="3" fill="#fff"><animateMotion dur="2.6s" repeatCount="indefinite" path="M300 130 L115 67" begin="0.5s"/></circle>
              <circle r="5" fill="#2DD4BF"><animateMotion dur="2.6s" repeatCount="indefinite" path="M300 130 L485 67" begin="0.8s"/></circle>
              <circle r="3" fill="#fff"><animateMotion dur="2.6s" repeatCount="indefinite" path="M300 130 L485 67" begin="1.3s"/></circle>
              <circle r="5" fill="#2DD4BF"><animateMotion dur="2.8s" repeatCount="indefinite" path="M300 130 L300 239" begin="0.4s"/></circle>

              <!-- pulse rings -->
              <circle class="hc-pulse-ring" cx="300" cy="130" r="55"/>
              <circle class="hc-pulse-ring" cx="300" cy="130" r="55" style="animation-delay:1.3s;"/>

              <!-- shield -->
              <path d="M300 90 L345 105 L345 140 Q345 175 300 186 Q255 175 255 140 L255 105 Z" fill="url(#finShield)"/>
              <path d="M280 138 L295 153 L322 124" fill="none" stroke="#fff" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>

              <!-- satellite nodes -->
              <rect x="40" y="40" width="150" height="54" rx="14" fill="url(#finShield)"/>
              <text x="115" y="72" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="14" font-weight="600">Regulators</text>
              <rect x="410" y="40" width="150" height="54" rx="14" fill="url(#finShield)"/>
              <text x="485" y="72" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="14" font-weight="600">Customers</text>
              <rect x="225" y="212" width="150" height="54" rx="14" fill="url(#finShield)"/>
              <text x="300" y="244" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="14" font-weight="600">Risk Teams</text>

              <text x="300" y="205" text-anchor="middle" fill="var(--teal-bright)" font-family="IBM Plex Mono, monospace" font-size="11">security first</text>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ===== Intro ===== -->
  <section class="py-20 border-t hc-fade-up" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <p class="text-lg leading-relaxed mb-5 max-w-3xl" style="color:var(--navy-deep);">
        This makes finance one of the least forgiving industries for cutting corners on either security or user experience.
      </p>
      <p class="text-base leading-relaxed max-w-3xl" style="color:var(--text-muted);">
        We work with finance and banking businesses that need technology built to hold up under scrutiny, from regulators, from customers, and from their own internal risk teams. That means every project starts from a security first mindset, then builds outward toward an experience that still feels simple and trustworthy to the people using it.
      </p>
    </div>
  </section>

  <!-- ===== Common Challenges ===== -->
  <section class="py-20 border-t" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="hc-fade-up mb-12 max-w-xl">
        <h2 class="text-3xl md:text-4xl font-bold" style="color:var(--navy-deep);">Common Challenges</h2>
        <span class="hc-rule"></span>
      </div>

      <div class="hc-stagger grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ([
          'Security and compliance rules shape most technical decisions, which can slow down projects that are not planned with those constraints in mind from the start.',
          'Customer trust depends a lot on how safe and professional the digital experience feels, not just on what is happening behind the scenes.',
          'Older systems can make change slow and risky, especially when core banking or transaction systems are involved.',
          'Fraud prevention and identity verification need to be built in without making the experience feel hostile to legitimate customers.',
          'Reporting and audit requirements that demand accurate, well organized data across multiple systems.',
          'Competing against fintech challengers who often move faster on digital experience, even without the same institutional trust.',
        ] as $challenge)
          <div class="hc-card rounded-xl p-6">
            <span class="inline-flex w-9 h-9 items-center justify-center rounded-lg mb-4" style="background:var(--bg-soft); color:var(--teal-accent);">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/></svg>
            </span>
            <p class="leading-relaxed text-sm" style="color:var(--text-muted);">{{ $challenge }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Why Finance and Banking Businesses Choose InTech Nexus ===== -->
  <section class="py-24 border-t" style="border-color:var(--line); background:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
        <div class="hc-fade-up">
          <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Why Finance and Banking Businesses Choose InTech Nexus</h2>
          <span class="hc-rule"></span>
          <p class="text-white/70 leading-relaxed mt-6">
            Financial platforms cannot treat security as something to review at the end of a project. Our Software Development and QA & Testing teams build with security and compliance requirements defined upfront, then test against them throughout development rather than as a final gate before launch. This reduces the risk of expensive rework late in a project, and it gives you a clearer picture of where the platform stands at every stage, not just at the end.
          </p>
        </div>

        <!-- Animated secure development lifecycle flow -->
        <div class="hc-fade-up relative" aria-hidden="true">
          <svg viewBox="0 0 600 200" class="w-full h-52">
            <defs>
              <linearGradient id="finFlow" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#0D9488"/>
                <stop offset="100%" stop-color="#0B1B3D"/>
              </linearGradient>
            </defs>

            <line class="hc-flow-line" x1="140" y1="100" x2="170" y2="100"/>
            <line class="hc-flow-line" x1="290" y1="100" x2="320" y2="100"/>
            <line class="hc-flow-line" x1="440" y1="100" x2="470" y2="100"/>

            <circle r="5" fill="#2DD4BF"><animateMotion dur="2.4s" repeatCount="indefinite" path="M80 100 L230 100"/></circle>
            <circle r="5" fill="#2DD4BF"><animateMotion dur="2.4s" repeatCount="indefinite" path="M230 100 L380 100" begin="0.6s"/></circle>
            <circle r="5" fill="#2DD4BF"><animateMotion dur="2.4s" repeatCount="indefinite" path="M380 100 L525 100" begin="1.2s"/></circle>

            <rect x="20" y="70" width="120" height="60" rx="14" fill="url(#finFlow)"/>
            <text x="80" y="98" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="13" font-weight="600">Plan</text>
            <rect x="170" y="70" width="120" height="60" rx="14" fill="url(#finFlow)"/>
            <text x="230" y="98" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="13" font-weight="600">Build</text>
            <rect x="320" y="70" width="120" height="60" rx="14" fill="url(#finFlow)"/>
            <text x="380" y="98" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="13" font-weight="600">Test</text>
            <rect x="470" y="70" width="110" height="60" rx="14" fill="url(#finFlow)"/>
            <text x="525" y="98" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="13" font-weight="600">Release</text>

            <text x="300" y="160" text-anchor="middle" fill="var(--teal-bright)" font-family="IBM Plex Mono, monospace" font-size="11">security built in, not bolted on</text>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Services We Provide ===== -->
  <section class="py-20 border-t" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="hc-fade-up mb-12 max-w-xl">
        <h2 class="text-3xl md:text-4xl font-bold" style="color:var(--navy-deep);">Services We Provide</h2>
        <span class="hc-rule"></span>
      </div>

      <div class="hc-stagger grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach ([
          ['t' => 'Secure Software Development', 'd' => 'Secure Software Development for financial platforms, including account systems, transaction processing, and reporting tools.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3l7 3v5c0 4-3 7-7 9-4-2-7-5-7-9V6z"/><path d="M9 12l2 2 4-4"/></svg>'],
          ['t' => 'UI/UX Design', 'd' => 'UI/UX Design for financial products, designed to feel trustworthy and simple even when the underlying logic is complex.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>'],
          ['t' => 'Legacy System Modernization', 'd' => 'Legacy system modernization, planned carefully to reduce risk during migration from older core systems.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 12a8 8 0 0 1 14-5l2 2M20 12a8 8 0 0 1-14 5l-2-2"/><path d="M20 4v5h-5M4 20v-5h5"/></svg>'],
          ['t' => 'QA & Testing', 'd' => 'QA & Testing for security and performance, including load testing for systems that need to handle high transaction volumes reliably.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M8 12l3 3 5-6"/></svg>'],
        ] as $s)
          <div class="hc-card rounded-xl p-6">
            <div class="inline-flex w-11 h-11 items-center justify-center rounded-xl mb-5" style="background:#fff; color:var(--teal-accent);">
              {!! $s['i'] !!}
            </div>
            <h3 class="text-lg font-semibold mb-2" style="color:var(--navy-deep);">{{ $s['t'] }}</h3>
            <p class="text-sm leading-relaxed" style="color:var(--text-muted);">{{ $s['d'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Solutions We Offer ===== -->
  <section class="py-20 border-t" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="hc-fade-up mb-12 max-w-xl">
        <h2 class="text-3xl md:text-4xl font-bold" style="color:var(--navy-deep);">Solutions We Offer</h2>
        <span class="hc-rule"></span>
      </div>

      <div class="hc-stagger grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ([
          ['t' => 'Digital Banking & Fintech', 'd' => 'Digital banking and fintech platforms built for both security and everyday usability.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18M5 21V10M19 21V10M3 10l9-6 9 6M9 21v-6h6v6"/></svg>'],
          ['t' => 'Loan & Insurance Management', 'd' => 'Loan and insurance management systems that bring application, underwriting, and servicing into one connected workflow.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M7 3h7l5 5v13H7z"/><path d="M14 3v5h5M10 13h4M10 17h4"/></svg>'],
          ['t' => 'Payment Integrations', 'd' => 'Payment system integrations connecting your platform to the payment processors and banking rails your business relies on.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg>'],
          ['t' => 'Reporting Dashboards', 'd' => 'Financial reporting dashboards that give your team and your regulators a clear, accurate view of performance and compliance.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/></svg>'],
          ['t' => 'Identity & Fraud Prevention', 'd' => 'Identity verification and fraud prevention workflows designed to protect the business without adding unnecessary friction for customers.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 4a8 8 0 0 0-8 8M20 12a8 8 0 0 0-4-7M8 12a4 4 0 0 1 8 0v4a4 4 0 0 1-4 4M12 12v4"/></svg>'],
        ] as $sol)
          <div class="hc-card rounded-xl p-6">
            <div class="inline-flex w-11 h-11 items-center justify-center rounded-xl mb-5" style="background:var(--bg-soft); color:var(--teal-accent);">
              {!! $sol['i'] !!}
            </div>
            <h3 class="text-lg font-semibold mb-2" style="color:var(--navy-deep);">{{ $sol['t'] }}</h3>
            <p class="text-sm leading-relaxed" style="color:var(--text-muted);">{{ $sol['d'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== How We Help ===== -->
  <section class="py-20 border-t" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <div class="hc-fade-up mb-8 max-w-xl">
        <h2 class="text-3xl md:text-4xl font-bold" style="color:var(--navy-deep);">How We Help</h2>
        <span class="hc-rule"></span>
      </div>
      <div class="hc-fade-up">
        <p class="text-base leading-relaxed mb-4 max-w-3xl" style="color:var(--text-muted);">
          We build safe, trust first digital platforms and websites for regulated finance businesses, with security and compliance built into the plan from day one. This includes how data is stored, how access is controlled, and how the system behaves under real world load, not just how it performs in a demo environment.
        </p>
        <p class="text-base leading-relaxed max-w-3xl" style="color:var(--text-muted);">
          We also know that trust is not only a technical property. It comes through in how the product looks, how clearly it communicates, and how confidently a customer can complete a task without wondering if something went wrong. Our design and development teams work together on both sides of that problem at once.
        </p>
      </div>
    </div>
  </section>

  <!-- ===== Common Questions ===== -->
  <section class="py-24 border-t" style="border-color:var(--line);" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <div class="hc-fade-up text-center mb-14">
        <h2 class="text-3xl md:text-4xl font-bold" style="color:var(--navy-deep);">Common Questions</h2>
        <span class="hc-rule" style="margin-left:auto; margin-right:auto;"></span>
      </div>

      <div class="hc-fade-up space-y-4">
        @foreach ([
          ['q' => 'Can you work within our existing compliance and security requirements?', 'a' => 'Yes. We plan every finance project around the specific regulatory and security requirements relevant to your business and region, and we build with those constraints in mind from the start rather than adjusting for them later.'],
          ['q' => 'Do you have experience modernizing legacy banking systems?', 'a' => 'Yes. We approach legacy modernization carefully, often running new systems alongside old ones during a transition period to reduce risk.'],
        ] as $i => $faq)
          <div class="bg-white border overflow-hidden hc-card" style="border-color:var(--line);">
            <button @click="openFaq = openFaq === {{ $i }} ? null : {{ $i }}" class="w-full text-left p-6 font-semibold text-lg flex justify-between items-center focus:outline-none" style="color:var(--navy-deep);">
              <span>{{ $faq['q'] }}</span>
              <span class="text-2xl font-bold ml-4" style="color:var(--teal-accent);" x-text="openFaq === {{ $i }} ? '−' : '+'"></span>
            </button>
            <div x-show="openFaq === {{ $i }}" x-collapse class="px-6 pb-6 leading-relaxed" style="color:var(--text-muted);">
              {{ $faq['a'] }}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Get Started ===== -->
  <section class="py-20 border-t" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <div class="hc-fade-up mb-8 max-w-xl">
        <h2 class="text-3xl md:text-4xl font-bold" style="color:var(--navy-deep);">Get Started</h2>
        <span class="hc-rule"></span>
      </div>

      <div class="hc-fade-up">
        <p class="text-base leading-relaxed mb-8 max-w-3xl" style="color:var(--text-muted);">
          For upgrading an existing platform, see Software Development. For a stronger digital presence, see Branding. Ready to talk through your finance or banking project? Get a free quote or book a call with our team.
        </p>

        <div class="flex flex-wrap gap-4">
          <a href="{{ url('/software-development') }}" class="hc-card inline-flex items-center gap-2 px-6 py-3.5 rounded-full text-sm font-semibold" style="color:var(--navy-deep);">
            Software Development
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
          </a>
          <a href="{{ url('/branding') }}" class="hc-card inline-flex items-center gap-2 px-6 py-3.5 rounded-full text-sm font-semibold" style="color:var(--navy-deep);">
            Branding
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
          </a>
          <a href="{{ url('/contact') }}" class="hc-shimmer inline-flex items-center gap-2 px-7 py-3.5 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5" style="background:var(--teal-accent);">
            Get a Free Quote
          </a>
          <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-7 py-3.5 font-mono text-xs font-semibold uppercase tracking-wider text-white border rounded-full hover:border-white transition-all" style="border-color:var(--line);">
            Book a Call
          </a>
        </div>
      </div>
    </div>
  </section>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function(){
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.hc-fade-up, .hc-stagger').forEach(el => observer.observe(el));
  });
</script>
@endsection
