@extends('layouts.app')
@section('title', 'Manufacturing Industry Solutions - InTech Nexus')

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

  /* Connected-nodes hero graphic */
  .hc-flow-line{
    stroke:var(--teal-accent); stroke-width:2; stroke-dasharray:7 7;
    animation:hc-dash 1.2s linear infinite;
  }
  @keyframes hc-dash{ to{ stroke-dashoffset:-14; } }
  .hc-pulse-ring{ fill:none; stroke:var(--teal-accent); animation:hc-ring 2.6s ease-out infinite; transform-origin:center; }
  @keyframes hc-ring{ 0%{ transform:scale(.6); opacity:.55; } 100%{ transform:scale(1.6); opacity:0; } }

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
      <!-- <source src="/videos/manufacturing-hero.mp4" type="video/mp4"> -->
    </video>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-14 pb-24 lg:pt-16 lg:pb-28">
      <nav class="flex flex-wrap items-center gap-2 text-sm font-medium mb-8" style="color:var(--teal-bright);" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
        <span class="text-white/30">/</span>
        <a href="{{ url('/industries') }}" class="hover:text-white transition-colors">Industries</a>
        <span class="text-white/30">/</span>
        <span class="text-white/70">Manufacturing</span>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 max-w-3xl">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-bright);">
            Manufacturing
          </span>
          <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
            Manufacturing businesses need digital systems that connect operations, sales, and customers.
          </h1>
          <p class="text-lg text-white/75 leading-relaxed mb-10 max-w-2xl">
            Not just a website that describes what the business does.
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

        <!-- Animated connected-nodes "video" graphic -->
        <div class="lg:col-span-5 hidden lg:block hc-float" aria-hidden="true">
          <div class="relative rounded-2xl border border-white/10 p-6" style="background:rgba(255,255,255,0.04);">
            <svg viewBox="0 0 600 240" class="w-full h-56">
              <defs>
                <linearGradient id="mnNode" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" stop-color="#0D9488"/>
                  <stop offset="100%" stop-color="#0B1B3D"/>
                </linearGradient>
              </defs>

              <!-- connectors -->
              <line class="hc-flow-line" x1="135" y1="180" x2="300" y2="60"/>
              <line class="hc-flow-line" x1="300" y1="60" x2="465" y2="180"/>
              <line class="hc-flow-line" x1="135" y1="180" x2="465" y2="180"/>

              <!-- pulses -->
              <circle r="5" fill="#2DD4BF"><animateMotion dur="2.6s" repeatCount="indefinite" path="M135 180 L300 60"/></circle>
              <circle r="3" fill="#fff"><animateMotion dur="2.6s" repeatCount="indefinite" path="M135 180 L300 60" begin="0.4s"/></circle>
              <circle r="5" fill="#2DD4BF"><animateMotion dur="2.6s" repeatCount="indefinite" path="M300 60 L465 180" begin="0.9s"/></circle>
              <circle r="3" fill="#fff"><animateMotion dur="2.6s" repeatCount="indefinite" path="M300 60 L465 180" begin="1.3s"/></circle>
              <circle r="5" fill="#2DD4BF"><animateMotion dur="3s" repeatCount="indefinite" path="M135 180 L465 180" begin="0.6s"/></circle>

              <!-- nodes -->
              <rect x="60" y="150" width="150" height="60" rx="14" fill="url(#mnNode)"/>
              <text x="135" y="178" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="14" font-weight="600">Operations</text>
              <rect x="225" y="30" width="150" height="60" rx="14" fill="url(#mnNode)"/>
              <text x="300" y="58" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="14" font-weight="600">Sales</text>
              <rect x="390" y="150" width="150" height="60" rx="14" fill="url(#mnNode)"/>
              <text x="465" y="178" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="14" font-weight="600">Customers</text>

              <text x="300" y="124" text-anchor="middle" fill="var(--teal-bright)" font-family="IBM Plex Mono, monospace" font-size="11">connected</text>
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
        Buyers researching industrial equipment, parts, or manufacturing services now do most of that research online, long before they ever pick up the phone. If your website reads like a brochure instead of demonstrating real technical capability, you lose serious buyers to competitors who look more credible online, even if your actual work is better. At the same time, many manufacturers are still running core operations, inventory, and customer data across systems that were never built to talk to each other.
      </p>
      <p class="text-base leading-relaxed max-w-3xl" style="color:var(--text-muted);">
        We work with manufacturing businesses that need both sides of this solved together, digital systems that connect operations and data internally, and a customer facing presence that reflects the real technical skill behind the business.
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
          'Sales and operations data live in systems that do not talk to each other. Teams end up re-entering the same information across spreadsheets, order systems, and inventory tools.',
          'The website undersells what the business can actually do to buyers doing early research. A generic template site does not build the confidence a technical buyer needs before reaching out.',
          'Lead generation for manufacturing sales cycles looks different from consumer marketing. Long, considered B2B buying cycles need a different approach than a typical ecommerce funnel.',
          'Legacy operations software can be difficult to extend, forcing teams to work around limitations instead of the system supporting the actual workflow.',
          'Customer and supplier communication is often still manual, when a connected portal could remove a large share of the back and forth.',
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

  <!-- ===== Why Manufacturing Needs a Different Approach ===== -->
  <section class="py-24 border-t" style="border-color:var(--line); background:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
        <div class="hc-fade-up">
          <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Why Manufacturing Needs a Different Approach</h2>
          <span class="hc-rule"></span>
          <p class="text-white/70 leading-relaxed mt-6">
            Manufacturing buyers are usually technical, deliberate, and comparing multiple suppliers before ever reaching out. A generic marketing approach built for consumer products does not build the kind of confidence this audience needs. At the same time, manufacturing operations depend on systems that actually reflect how production, inventory, and fulfillment work day to day, not a simplified version built by a team that has never worked with a manufacturing business. We bring both kinds of understanding into every manufacturing project.
          </p>
        </div>

        <!-- Animated production / inventory / fulfillment flow -->
        <div class="hc-fade-up relative" aria-hidden="true">
          <svg viewBox="0 0 600 200" class="w-full h-52">
            <defs>
              <linearGradient id="mnFlow" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#0D9488"/>
                <stop offset="100%" stop-color="#0B1B3D"/>
              </linearGradient>
            </defs>

            <line class="hc-flow-line" x1="190" y1="100" x2="220" y2="100"/>
            <line class="hc-flow-line" x1="380" y1="100" x2="410" y2="100"/>

            <circle r="5" fill="#2DD4BF"><animateMotion dur="2.4s" repeatCount="indefinite" path="M110 100 L300 100"/></circle>
            <circle r="5" fill="#2DD4BF"><animateMotion dur="2.4s" repeatCount="indefinite" path="M300 100 L490 100" begin="0.7s"/></circle>

            <rect x="30" y="70" width="160" height="60" rx="14" fill="url(#mnFlow)"/>
            <text x="110" y="98" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="13" font-weight="600">Production</text>
            <rect x="220" y="70" width="160" height="60" rx="14" fill="url(#mnFlow)"/>
            <text x="300" y="98" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="13" font-weight="600">Inventory</text>
            <rect x="410" y="70" width="160" height="60" rx="14" fill="url(#mnFlow)"/>
            <text x="490" y="98" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="13" font-weight="600">Fulfillment</text>

            <text x="300" y="160" text-anchor="middle" fill="var(--teal-bright)" font-family="IBM Plex Mono, monospace" font-size="11">how the work actually runs</text>
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
          ['t' => 'Software Development', 'd' => 'Software Development for custom business systems, connecting operations, inventory, and sales data instead of leaving them isolated.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l-3 3 3 3M16 9l3 3-3 3M13 6l-2 12"/></svg>'],
          ['t' => 'ERP & CRM Development', 'd' => 'ERP and CRM development, tailored to the specific processes running your production and sales floor, not a generic manufacturing template.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><ellipse cx="12" cy="6" rx="8" ry="3"/><path d="M4 6v12c0 1.7 3.6 3 8 3s8-1.3 8-3V6"/><path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/></svg>'],
          ['t' => 'B2B Web Development', 'd' => 'B2B Web Development, built to demonstrate technical capability to buyers doing serious research, not just describe services in general terms.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M7 6.5h.01M10 6.5h.01"/></svg>'],
          ['t' => 'Digital Marketing', 'd' => 'Digital Marketing for SEO and lead generation, built around how manufacturing buyers actually search and evaluate suppliers.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11l13-5v12L3 13z"/><path d="M16 8a4 4 0 0 1 0 8M3 13v-2"/></svg>'],
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

      <div class="hc-stagger grid grid-cols-1 md:grid-cols-2 gap-5">
        @foreach ([
          ['t' => 'Production & Inventory Management', 'd' => 'Production and inventory management systems that give real time visibility into stock, orders, and production status across the business.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 7l9-4 9 4-9 4z"/><path d="M3 7v10l9 4 9-4V7"/><path d="M12 11v10"/></svg>'],
          ['t' => 'Supplier & Customer Portals', 'd' => 'Supplier and customer portals that reduce manual back and forth by giving partners direct access to the information they need.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="8" r="3"/><path d="M3 20a6 6 0 0 1 12 0M16 11a3 3 0 0 0 0-6M21 20a6 6 0 0 0-5-5.9"/></svg>'],
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
        <p class="text-base leading-relaxed max-w-3xl" style="color:var(--text-muted);">
          We build digital systems and websites that show the real skill behind manufacturing businesses, and connect customer facing content to how sales actually happens. That means building both the internal systems that keep operations running smoothly, and the outward facing presence that helps serious buyers take your business seriously from the first visit.
        </p>
      </div>
    </div>
  </section>

  <!-- ===== Frequently Asked Questions ===== -->
  <section class="py-24 border-t" style="border-color:var(--line);" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <div class="hc-fade-up text-center mb-14">
        <h2 class="text-3xl md:text-4xl font-bold" style="color:var(--navy-deep);">Frequently Asked Questions</h2>
        <span class="hc-rule" style="margin-left:auto; margin-right:auto;"></span>
      </div>

      <div class="hc-fade-up space-y-4">
        @foreach ([
          ['q' => 'Do you have experience working with manufacturing or industrial businesses specifically?', 'a' => 'Yes. We understand the difference between a manufacturing sales cycle and a typical consumer buying journey, and we build systems and content that reflect that.'],
          ['q' => 'Can you connect our website to our internal operations or inventory systems?', 'a' => 'In many cases, yes. We review your existing systems during discovery and plan integrations that fit around them wherever practical.'],
          ['q' => 'Will a new website actually help us generate more qualified leads?', 'a' => 'A website built around how manufacturing buyers actually research and compare suppliers, combined with the right SEO and content strategy, is one of the most direct ways to improve lead quality.'],
          ['q' => 'Can you build custom portals for our suppliers or customers?', 'a' => 'Yes. Supplier and customer portals are one of the most common systems we build for manufacturing businesses, and we scope them around the specific information each side actually needs.'],
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
          If lead generation is the main goal, see Digital Marketing. For connecting internal systems, see Software Development. If you are not sure where to start, reach out through our Contact page and we will help you find the right first step.
        </p>

        <div class="flex flex-wrap gap-4">
          <a href="{{ url('/digital-marketing') }}" class="hc-card inline-flex items-center gap-2 px-6 py-3.5 rounded-full text-sm font-semibold" style="color:var(--navy-deep);">
            Digital Marketing
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
          </a>
          <a href="{{ url('/software-development') }}" class="hc-card inline-flex items-center gap-2 px-6 py-3.5 rounded-full text-sm font-semibold" style="color:var(--navy-deep);">
            Software Development
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
