@extends('layouts.app')
@section('title', 'Ecommerce Industry Solutions - InTech Nexus')

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
      <!-- <source src="/videos/ecommerce-hero.mp4" type="video/mp4"> -->
    </video>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-14 pb-24 lg:pt-16 lg:pb-28">
      <nav class="flex flex-wrap items-center gap-2 text-sm font-medium mb-8" style="color:var(--teal-bright);" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
        <span class="text-white/30">/</span>
        <a href="{{ url('/industries') }}" class="hover:text-white transition-colors">Industries</a>
        <span class="text-white/30">/</span>
        <span class="text-white/70">Ecommerce</span>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 max-w-3xl">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-bright);">
            Ecommerce
          </span>
          <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
            Ecommerce success comes down to two things working together.
          </h1>
          <p class="text-lg text-white/75 leading-relaxed mb-10 max-w-2xl">
            A storefront that converts, and marketing that keeps bringing the right traffic to it.
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

        <!-- Animated storefront + marketing flow graphic -->
        <div class="lg:col-span-5 hidden lg:block hc-float" aria-hidden="true">
          <div class="relative rounded-2xl border border-white/10 p-6" style="background:rgba(255,255,255,0.04);">
            <svg viewBox="0 0 600 260" class="w-full h-60">
              <defs>
                <linearGradient id="ecNode" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" stop-color="#0D9488"/>
                  <stop offset="100%" stop-color="#0B1B3D"/>
                </linearGradient>
              </defs>

              <line class="hc-flow-line" x1="250" y1="135" x2="350" y2="135"/>
              <circle r="5" fill="#2DD4BF"><animateMotion dur="2.6s" repeatCount="indefinite" path="M145 135 L455 135"/></circle>
              <circle r="3" fill="#fff"><animateMotion dur="2.6s" repeatCount="indefinite" path="M145 135 L455 135" begin="0.6s"/></circle>
              <circle r="5" fill="#2DD4BF"><animateMotion dur="2.6s" repeatCount="indefinite" path="M455 135 L145 135" begin="1.0s"/></circle>

              <circle class="hc-pulse-ring" cx="145" cy="135" r="48"/>
              <circle class="hc-pulse-ring" cx="455" cy="135" r="48" style="animation-delay:1.3s;"/>

              <rect x="40" y="95" width="210" height="80" rx="16" fill="url(#ecNode)"/>
              <text x="145" y="125" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="16" font-weight="600">Storefront</text>
              <text x="145" y="148" text-anchor="middle" fill="rgba(255,255,255,0.7)" font-family="IBM Plex Mono, monospace" font-size="11">built to convert</text>

              <rect x="350" y="95" width="210" height="80" rx="16" fill="url(#ecNode)"/>
              <text x="455" y="125" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="16" font-weight="600">Marketing</text>
              <text x="455" y="148" text-anchor="middle" fill="rgba(255,255,255,0.7)" font-family="IBM Plex Mono, monospace" font-size="11">brings traffic</text>

              <text x="300" y="235" text-anchor="middle" fill="var(--teal-bright)" font-family="IBM Plex Mono, monospace" font-size="11">design + marketing as one system</text>
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
        Too often, businesses treat these as separate projects handled by separate vendors, which is exactly where things start to break down. A beautifully designed store with no traffic will not sell. A flood of traffic landing on a storefront that is slow or confusing will not convert either.
      </p>
      <p class="text-base leading-relaxed max-w-3xl" style="color:var(--text-muted);">
        We work with ecommerce businesses at every stage, from a first store launch to a full platform rebuild for a business that has outgrown its current setup. Whether you sell a handful of products or manage a catalog with thousands of items, our approach stays the same: build a storefront that works, then build the marketing engine that fills it.
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
          'Storefronts that look good but do not convert well. A polished design does not always translate into a smooth path to checkout.',
          'Paid and organic marketing running apart from the on site experience, so traffic arrives at pages that were never built with that campaign in mind.',
          'Platform limits that make it hard to grow product catalogs or checkout flows as the business scales.',
          'Cart abandonment that goes unaddressed, with no automated follow up to recover lost sales.',
          'Inventory, pricing, or fulfillment systems that do not talk to the storefront, creating manual work and errors.',
          'Search visibility that lags behind competitors, so potential customers never find the store in the first place.',
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

  <!-- ===== Why Ecommerce Businesses Choose InTech Nexus ===== -->
  <section class="py-24 border-t" style="border-color:var(--line); background:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
        <div class="hc-fade-up">
          <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Why Ecommerce Businesses Choose InTech Nexus</h2>
          <span class="hc-rule"></span>
          <p class="text-white/70 leading-relaxed mt-6">
            Ecommerce is one of the few areas where design, development, and marketing genuinely need to work as one system. A product page redesign affects conversion tracking. A new marketing campaign needs a landing experience built to match it. Because our Application Development, UI/UX Design, and Digital Marketing teams work together on every ecommerce project, changes on one side are always planned with the other in mind. This keeps the storefront and the campaigns driving traffic to it aligned, instead of drifting apart as separate initiatives with separate priorities.
          </p>
        </div>

        <!-- Animated three-team "one system" graphic -->
        <div class="hc-fade-up relative" aria-hidden="true">
          <svg viewBox="0 0 600 240" class="w-full h-56">
            <defs>
              <linearGradient id="ecFlow" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#0D9488"/>
                <stop offset="100%" stop-color="#0B1B3D"/>
              </linearGradient>
            </defs>

            <line class="hc-flow-line" x1="140" y1="180" x2="300" y2="60"/>
            <line class="hc-flow-line" x1="300" y1="60" x2="460" y2="180"/>
            <line class="hc-flow-line" x1="140" y1="180" x2="460" y2="180"/>

            <circle r="5" fill="#2DD4BF"><animateMotion dur="2.6s" repeatCount="indefinite" path="M140 180 L300 60"/></circle>
            <circle r="3" fill="#fff"><animateMotion dur="2.6s" repeatCount="indefinite" path="M140 180 L300 60" begin="0.5s"/></circle>
            <circle r="5" fill="#2DD4BF"><animateMotion dur="2.6s" repeatCount="indefinite" path="M300 60 L460 180" begin="0.9s"/></circle>
            <circle r="3" fill="#fff"><animateMotion dur="2.6s" repeatCount="indefinite" path="M300 60 L460 180" begin="1.3s"/></circle>
            <circle r="5" fill="#2DD4BF"><animateMotion dur="3s" repeatCount="indefinite" path="M140 180 L460 180" begin="0.6s"/></circle>

            <rect x="60" y="150" width="160" height="60" rx="14" fill="url(#ecFlow)"/>
            <text x="140" y="178" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="14" font-weight="600">App Development</text>
            <rect x="220" y="30" width="160" height="60" rx="14" fill="url(#ecFlow)"/>
            <text x="300" y="58" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="14" font-weight="600">UI/UX Design</text>
            <rect x="380" y="150" width="160" height="60" rx="14" fill="url(#ecFlow)"/>
            <text x="460" y="178" text-anchor="middle" fill="#fff" font-family="Space Grotesk, sans-serif" font-size="14" font-weight="600">Digital Marketing</text>

            <text x="300" y="232" text-anchor="middle" fill="var(--teal-bright)" font-family="IBM Plex Mono, monospace" font-size="11">design, development, marketing as one system</text>
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

      <div class="hc-stagger grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ([
          ['t' => 'Application Development', 'd' => 'Application Development for custom ecommerce websites and apps, built to handle real product complexity and growth.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 4h2l2 12h11l2-9H6"/><circle cx="9" cy="20" r="1.4"/><circle cx="17" cy="20" r="1.4"/></svg>'],
          ['t' => 'UI/UX & CRO', 'd' => 'UI/UX Design and conversion rate work, focused on removing friction between browsing and checkout.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M9 21V9"/></svg>'],
          ['t' => 'Payment & Platform Integrations', 'd' => 'Payment and platform integrations, connecting your storefront to the payment gateways, inventory systems, and fulfillment tools you already use.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 7H7a4 4 0 0 0 0 8h2M15 7h2a4 4 0 0 1 0 8h-2M8 12h8"/></svg>'],
          ['t' => 'Digital Marketing', 'd' => 'Digital Marketing for SEO and paid ads, built to bring in the right kind of traffic, not just more of it.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11l13-5v12L3 13z"/><path d="M16 8a4 4 0 0 1 0 8M3 13v-2"/></svg>'],
          ['t' => 'QA & Testing', 'd' => 'QA & Testing across devices and browsers, so checkout works reliably no matter how a customer arrives at your store.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M8 12l3 3 5-6"/></svg>'],
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
          ['t' => 'Custom Online Stores', 'd' => 'Custom online stores built around your specific catalog and brand, not a generic theme stretched to fit.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 9l1-4h14l1 4M5 9v11h14V9M9 20v-6h6v6"/></svg>'],
          ['t' => 'Multi-Vendor Marketplaces', 'd' => 'Multi-vendor marketplaces for businesses connecting multiple sellers or suppliers under one platform.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="7" cy="7" r="2.5"/><circle cx="17" cy="7" r="2.5"/><circle cx="12" cy="17" r="2.5"/><path d="M7 9.5L12 14.5M17 9.5L12 14.5"/></svg>'],
          ['t' => 'Inventory & Order Management', 'd' => 'Inventory and order management systems that keep your storefront, warehouse, and fulfillment process in sync.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 7l9-4 9 4-9 4z"/><path d="M3 7v10l9 4 9-4V7"/><path d="M12 11v10"/></svg>'],
          ['t' => 'Loyalty & Subscriptions', 'd' => 'Customer loyalty and subscription systems built to increase repeat purchases and lifetime value.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21l-1.5-1.4C5 14.5 3 12.4 3 9.5 3 7.5 4.5 6 6.5 6 8 6 9.4 6.9 12 9c2.6-2.1 4-3 5.5-3C19.5 6 21 7.5 21 9.5c0 2.9-2 5-7.5 10.1z"/></svg>'],
          ['t' => 'Cart Recovery & Email Flows', 'd' => 'Abandoned cart recovery and lifecycle email flows through our Digital Marketing team, aimed at recovering sales that would otherwise be lost.', 'i' => '<svg class="hc-icon w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>'],
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
          We build and grow ecommerce businesses together. Storefronts built to convert, backed by marketing built to bring in the right traffic, not just visits. That means every project starts by looking at both sides of the equation: what is stopping visitors from buying, and what is stopping the right visitors from arriving in the first place.
        </p>
        <p class="text-base leading-relaxed max-w-3xl" style="color:var(--text-muted);">
          For newer ecommerce businesses, this often starts with a properly built storefront on a platform suited to your catalog and budget. For established stores, it usually means a conversion audit first, so we can prioritize fixes that will have the biggest impact before recommending a full rebuild.
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
          ['q' => 'Do you work with existing stores, or only new builds?', 'a' => 'Both. Many of our ecommerce projects start with an existing store that needs a redesign, a platform migration, or a conversion fix, rather than a build from scratch.'],
          ['q' => 'Can you help if our issue is traffic, not the store itself?', 'a' => 'Yes. If the storefront is performing well but traffic is the bottleneck, our Digital Marketing team can take on SEO, paid ads, or both, without needing to touch the store itself.'],
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
          If the storefront needs a rebuild, see Web Development. To grow traffic and sales, see Digital Marketing. Ready to talk through your ecommerce project? Get a free quote or book a call with our team.
        </p>

        <div class="flex flex-wrap gap-4">
          <a href="{{ url('/web-development') }}" class="hc-card inline-flex items-center gap-2 px-6 py-3.5 rounded-full text-sm font-semibold" style="color:var(--navy-deep);">
            Web Development
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
          </a>
          <a href="{{ url('/digital-marketing') }}" class="hc-card inline-flex items-center gap-2 px-6 py-3.5 rounded-full text-sm font-semibold" style="color:var(--navy-deep);">
            Digital Marketing
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
