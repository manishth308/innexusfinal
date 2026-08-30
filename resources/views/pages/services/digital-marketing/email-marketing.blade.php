@extends('layouts.app')
@section('title', 'Email Marketing Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .dm-page{
    --navy-deep:#0B1B3D;
    --navy-darker:#071227;
    --blue-accent:#3D6BFF;
    --blue-bright:#5A8CFF;
    --bg-soft:#F3F5FA;
    --text-muted:#6B7280;
    --line:#E3E7F0;
    font-family:'Inter',system-ui,sans-serif;
  }
  .dm-page h1, .dm-page h2, .dm-page h3, .dm-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .dm-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  .dm-hero{
    background:
      radial-gradient(ellipse 800px 480px at 15% 10%, rgba(61,107,255,0.30), transparent 60%),
      radial-gradient(ellipse 700px 500px at 85% 90%, rgba(90,140,255,0.18), transparent 55%),
      var(--navy-deep);
  }
  .dm-hero .vector-lines{
    position:absolute; inset:0; pointer-events:none; opacity:0.5;
  }

  .cap-card{
    border:1px solid var(--line);
    background:#fff;
    cursor:pointer;
    transition:border-color .25s ease, transform .25s ease, box-shadow .25s ease;
  }
  .cap-card:hover, .cap-card.is-open{
    border-color:var(--blue-accent);
    transform:translateY(-2px);
    box-shadow:0 8px 25px rgba(61,107,255,0.12);
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
  .cap-card .cap-chevron{ transition:transform .25s ease; }
  .cap-card.is-open .cap-chevron{ transform:rotate(45deg); }

  .marquee-track{
    display:flex;
    width:max-content;
    animation:dm-marquee 26s linear infinite;
  }
  @keyframes dm-marquee{
    from{ transform:translateX(0); }
    to{ transform:translateX(-50%); }
  }

  .fade-up{
    opacity:0;
    transform:translateY(24px);
    transition:opacity .6s ease, transform .6s ease;
  }
  .fade-up.visible{
    opacity:1;
    transform:translateY(0);
  }

  .pulse-dot{
    display:inline-block;
    width:8px; height:8px;
    border-radius:50%;
    background:var(--blue-accent);
    animation:pulse 2s ease-in-out infinite;
  }
  @keyframes pulse{
    0%, 100%{ box-shadow:0 0 0 0 rgba(61,107,255,0.6); }
    50%{ box-shadow:0 0 0 8px rgba(61,107,255,0); }
  }

  .stat-value{
    background:linear-gradient(90deg, var(--blue-bright) 0%, #fff 50%, var(--blue-bright) 100%);
    background-size:200% 100%;
    -webkit-background-clip:text;
    background-clip:text;
    color:transparent;
    animation:shimmer 3s ease-in-out infinite;
  }
  @keyframes shimmer{
    0%{ background-position:200% 0; }
    100%{ background-position:-200% 0; }
  }

  .float-graphic{
    animation:float 6s ease-in-out infinite;
  }
  @keyframes float{
    0%, 100%{ transform:translateY(0); }
    50%{ transform:translateY(-10px); }
  }

  .chart-bar{
    transform-origin: bottom;
    animation:grow-bar 1s ease-out forwards;
  }
  @keyframes grow-bar{
    from{ transform: scaleY(0); }
    to{ transform: scaleY(1); }
  }

  .chart-line{
    stroke-dasharray: 1000;
    stroke-dashoffset: 1000;
    animation:draw-line 2s ease-out forwards;
  }
  @keyframes draw-line{
    to{ stroke-dashoffset: 0; }
  }

  @media (prefers-reduced-motion: reduce){
    .dm-page *{ animation:none!important; transition:none!important; }
    .marquee-track{ animation:none!important; }
    .fade-up{ opacity:1!important; transform:none!important; }
  }
</style>
@endpush

@section('content')
<div class="dm-page bg-white">

  <!-- ===== Hero ===== -->
  <header class="dm-hero relative overflow-hidden text-white">
    <svg class="vector-lines" viewBox="0 0 1200 500" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0 420 L260 300 L520 380 L780 220 L1040 300 L1200 140" stroke="#5A8CFF" stroke-width="1.5" fill="none" opacity="0.4"/>
      <path d="M0 480 L300 380 L560 440 L860 280 L1200 360" stroke="#3D6BFF" stroke-width="1.5" fill="none" opacity="0.3"/>
      <circle cx="260" cy="300" r="4" fill="#5A8CFF"/>
      <circle cx="780" cy="220" r="4" fill="#5A8CFF"/>
      <circle cx="1040" cy="300" r="4" fill="#3D6BFF"/>
    </svg>

    <!-- Floating Email Marketing graphic -->
    <div class="absolute right-10 top-1/2 -translate-y-1/2 hidden lg:block float-graphic" aria-hidden="true">
      <svg width="280" height="280" viewBox="0 0 280 280" fill="none">
        <rect x="60" y="70" width="160" height="110" rx="12" stroke="rgba(255,255,255,0.2)" stroke-width="1.5" fill="rgba(255,255,255,0.03)"/>
        <path d="M60 82 L140 130 L220 82" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" fill="none"/>
        <circle cx="140" cy="190" r="22" stroke="rgba(255,255,255,0.2)" stroke-width="1.5" fill="rgba(255,255,255,0.05)"/>
        <path d="M140 168 L140 212" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
        <path d="M118 190 L162 190" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
        <line x1="140" y1="130" x2="140" y2="168" stroke="rgba(255,255,255,0.12)" stroke-width="1" stroke-dasharray="4 3"/>
        <circle cx="140" cy="125" r="3" fill="#5A8CFF" opacity="0.9"/>
        <circle cx="140" cy="190" r="4" fill="#3D6BFF" opacity="0.8"/>
        <circle cx="110" cy="100" r="2.5" fill="#fff" opacity="0.5"/>
        <circle cx="170" cy="105" r="2.5" fill="#fff" opacity="0.5"/>
        <text x="140" y="95" text-anchor="middle" fill="rgba(255,255,255,0.9)" font-family="IBM Plex Mono, monospace" font-size="11" font-weight="600">Email</text>
        <text x="140" y="193" text-anchor="middle" fill="rgba(255,255,255,0.8)" font-family="IBM Plex Mono, monospace" font-size="9" font-weight="600">AUTO</text>
      </svg>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-14 pb-24 lg:pt-16 lg:pb-28">
      <!-- Breadcrumb -->
      <nav class="flex flex-wrap items-center gap-2 text-sm font-medium mb-8" style="color:var(--blue-bright);" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-white transition-colors">Main Navigation</a>
        <span class="text-white/30">/</span>
        <a href="{{ url('/services') }}" class="hover:text-white transition-colors">Services</a>
        <span class="text-white/30">/</span>
        <a href="{{ url('/services/digital-marketing') }}" class="hover:text-white transition-colors">Digital Marketing</a>
        <span class="text-white/30">/</span>
        <span class="text-white/70">Email Marketing</span>
      </nav>

      <div class="max-w-3xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">
          Email Marketing Services
        </span>
        <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
          Email Marketing Services That Turn Your List Into Repeat Business
        </h1>
        <p class="text-lg text-white/70 leading-relaxed mb-4 max-w-2xl">
          Email marketing services for businesses that want to turn their email list into a steady source of repeat business.
        </p>
        <p class="text-base text-white/60 leading-relaxed mb-10 max-w-2xl">
          As part of our wider Digital Marketing practice, we treat email as a channel with real revenue potential, not just a newsletter, setting up automated flows and segmentation that work in the background to bring in results without a manual send every time.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-7 py-3.5 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5" style="background:var(--blue-accent);">
            Get a Free Quote
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
          </a>
          <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-7 py-3.5 font-mono text-xs font-semibold uppercase tracking-wider text-white border border-white/30 rounded-full hover:border-white hover:bg-white/5 transition-all">
            Book a Call
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- ===== Who This Is For & Problems We Solve ===== -->
  <section class="py-20 border-t fade-up" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-2 h-2 rounded-full" style="background:var(--blue-accent);"></span>
            Who This Is For
          </h2>
          <p class="leading-relaxed text-base" style="color:var(--text-muted);">
            Businesses with an email list that is underused, or without a clear email strategy in place.
          </p>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-2 h-2 rounded-full" style="background:var(--blue-accent);"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>The email list is rarely used, or used inconsistently.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>Emails are not personalized or timed around customer behavior.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>There is no automated flow in place for welcome, abandoned cart, or follow up emails.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== What We Offer ===== -->
  <section class="py-20 border-t fade-up" style="border-color:var(--line); background:var(--bg-soft);" x-data="{ openCap: null }">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">What We Offer</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">
          We plan and manage email marketing built around your customer journey
        </h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ([
          ['t' => 'Email Campaign Management from Strategy Through to Send', 'd' => 'Email campaign management covering strategy, copy, design, and send, with each campaign tied to a clear goal.'],
          ['t' => 'Automated Email Marketing Flows for Key Customer Moments', 'd' => 'Automated email marketing flows for key customer moments, working in the background without manual sends.'],
          ['t' => 'Ecommerce Email Marketing, Including Abandoned Cart Flows', 'd' => 'Ecommerce email marketing, including abandoned cart flows, welcome series, and post purchase follow ups.'],
          ['t' => 'Lifecycle Email Marketing from Welcome Through to Retention', 'd' => 'Lifecycle email marketing from welcome through to retention, keeping customers engaged at every stage.'],
          ['t' => 'List Segmentation for More Relevant, Targeted Emails', 'd' => 'List segmentation for more relevant, targeted emails, so the right message reaches the right customer at the right time.'],
        ] as $i => $offer)
          <div class="cap-card rounded-xl p-6" :class="{ 'is-open': openCap === {{ $i }} }" @click="openCap = openCap === {{ $i }} ? null : {{ $i }}">
            <div class="flex items-start justify-between gap-3">
              <p class="font-semibold text-lg" style="color:var(--navy-deep);">{{ $offer['t'] }}</p>
              <span class="cap-chevron font-mono text-lg flex-shrink-0" style="color:var(--blue-accent);">+</span>
            </div>
            <div class="cap-detail text-sm leading-relaxed" style="color:var(--text-muted);">
              {{ $offer['d'] }}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Performance Charts ===== -->
  <section class="py-24 border-t fade-up" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Performance</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Revenue and Engagement Visualized</h2>
        <p class="mt-3 text-base" style="color:var(--text-muted);">A look at how our email marketing campaigns typically perform across metrics and over time.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Bar Chart: Email Metrics -->
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-2" style="color:var(--navy-deep);">Campaign Metrics</h3>
          <p class="text-sm mb-8" style="color:var(--text-muted);">Average email marketing performance across campaigns</p>

          <div class="flex items-end justify-between gap-4 h-64">
            <!-- Open Rate Bar -->
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 75%; border: 1px solid var(--line); border-bottom: none;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold" style="color:var(--blue-accent);">28%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Open Rate</span>
            </div>

            <!-- Click Rate Bar -->
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 60%; border: 1px solid var(--line); border-bottom: none; animation-delay: 0.15s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold" style="color:var(--blue-accent);">3.6%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Click Rate</span>
            </div>

            <!-- Conversion Bar -->
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 70%; border: 1px solid var(--line); border-bottom: none; animation-delay: 0.3s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold" style="color:var(--blue-accent);">4.2%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Conversion</span>
            </div>

            <!-- Revenue Bar -->
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full rounded-t-lg relative chart-bar" style="height: 95%; border: 1px solid var(--line); border-bottom: none; background: linear-gradient(to top, var(--blue-accent), var(--blue-bright)); animation-delay: 0.45s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold text-white">6.8%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Revenue</span>
            </div>
          </div>
        </div>

        <!-- Line Chart: Revenue Growth -->
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-2" style="color:var(--navy-deep);">Revenue Growth Over Time</h3>
          <p class="text-sm mb-8" style="color:var(--text-muted);">Email driven revenue growth through automation and segmentation</p>

          <svg viewBox="0 0 500 250" class="w-full h-64">
            <!-- Grid lines -->
            <line x1="40" y1="30" x2="480" y2="30" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="80" x2="480" y2="80" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="130" x2="480" y2="130" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="180" x2="480" y2="180" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="230" x2="480" y2="230" stroke="var(--line)" stroke-width="1"/>

            <!-- Y-axis labels -->
            <text x="30" y="35" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">$50k</text>
            <text x="30" y="85" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">$40k</text>
            <text x="30" y="135" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">$30k</text>
            <text x="30" y="185" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">$20k</text>
            <text x="30" y="235" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">$10k</text>

            <!-- Area under curve -->
            <path d="M 80 190 L 140 170 L 200 150 L 260 130 L 320 100 L 380 80 L 440 55 L 440 230 L 80 230 Z" fill="url(#chartGradient)" opacity="0.3"/>

            <!-- Line -->
            <path d="M 80 190 L 140 170 L 200 150 L 260 130 L 320 100 L 380 80 L 440 55" fill="none" stroke="var(--blue-accent)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="chart-line"/>

            <!-- Data points -->
            <circle cx="80" cy="190" r="5" fill="var(--blue-accent)"/>
            <circle cx="140" cy="170" r="5" fill="var(--blue-accent)"/>
            <circle cx="200" cy="150" r="5" fill="var(--blue-accent)"/>
            <circle cx="260" cy="130" r="5" fill="var(--blue-accent)"/>
            <circle cx="320" cy="100" r="5" fill="var(--blue-accent)"/>
            <circle cx="380" cy="80" r="5" fill="var(--blue-accent)"/>
            <circle cx="440" cy="55" r="6" fill="var(--blue-bright)" stroke="#fff" stroke-width="2"/>

            <!-- X-axis labels -->
            <text x="80" y="250" text-anchor="middle" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Month 1</text>
            <text x="260" y="250" text-anchor="middle" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Month 3</text>
            <text x="440" y="250" text-anchor="middle" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Month 6</text>

            <defs>
              <linearGradient id="chartGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" stop-color="var(--blue-accent)" stop-opacity="0.4"/>
                <stop offset="100%" stop-color="var(--blue-accent)" stop-opacity="0"/>
              </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Our Service Capabilities ===== -->
  <section class="py-20 border-t fade-up" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Capabilities</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Our Service Capabilities</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">What We Deliver</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Automated email flows for key customer moments</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Segmented lists for more relevant messaging</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Email copy and design for each campaign</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Performance tracking tied to opens, clicks, and revenue</span></li>
          </ul>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">Key Skill Areas</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Email marketing strategy and automation</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>List segmentation</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Email copywriting and design</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Lifecycle and retention marketing</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Our Process ===== -->
  <section class="py-24 border-t fade-up" style="border-color:var(--line); background:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-16 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">Our Process</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3 text-white">From Complexity to Clarity</h2>
      </div>

      <div class="space-y-5">
        @foreach ([
          ['n' => '01', 't' => 'Audit & Strategy', 'd' => 'We review your current performance and set clear goals.'],
          ['n' => '02', 't' => 'Setup & Implementation', 'd' => 'We set up campaigns, tracking, and technical foundations.'],
          ['n' => '03', 't' => 'Execution', 'd' => 'We launch and run campaigns or content on a consistent schedule.'],
          ['n' => '04', 't' => 'Monitoring & Optimization', 'd' => 'We track performance and adjust based on real data.'],
          ['n' => '05', 't' => 'Reporting', 'd' => 'We report results clearly, tied back to your original goals.'],
        ] as $step)
          <div class="flex flex-col sm:flex-row sm:items-center gap-6 p-6 rounded-xl border border-white/10 bg-white/[0.03]">
            <div class="font-mono text-3xl font-bold flex-shrink-0" style="color:var(--blue-bright);">{{ $step['n'] }}</div>
            <div>
              <h3 class="text-lg font-bold text-white mb-1">{{ $step['t'] }}</h3>
              <p class="text-sm text-white/60">{{ $step['d'] }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-3xl">
        @foreach ([
          'Automated email flows for key customer moments',
          'Segmented lists for more relevant messaging',
          'Email copy and design for each campaign',
          'Performance tracking tied to opens, clicks, and revenue',
        ] as $outcome)
          <div class="flex items-start gap-3">
            <span class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold" style="background:var(--blue-accent); color:#fff;">✓</span>
            <span class="text-sm text-white/70">{{ $outcome }}</span>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Tools & Technologies ===== -->
  <section class="py-20 border-t fade-up" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-10 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Stack</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Tools / Technologies</h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="p-6 border" style="border-color:var(--line); background:var(--bg-soft);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">SEO</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Ahrefs · SEMrush · Google Search Console</p>
        </div>
        <div class="p-6 border" style="border-color:var(--line); background:var(--bg-soft);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">Paid Ads</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Google Ads · Meta Ads Manager</p>
        </div>
        <div class="p-6 border" style="border-color:var(--line); background:var(--bg-soft);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">Analytics</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Google Analytics · Looker Studio</p>
        </div>
        <div class="p-6 border" style="border-color:var(--line); background:var(--bg-soft);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">Email</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Mailchimp · Klaviyo</p>
        </div>
        <div class="p-6 border" style="border-color:var(--line); background:var(--bg-soft);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">CRO</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Hotjar · Testing Tools</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Enablers We Work With (marquee ticker) ===== -->
  <section class="py-14 border-t overflow-hidden fade-up" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 mb-8">
      <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Enablers We Work With</span>
    </div>
    <div class="relative">
      <div class="marquee-track">
        @for ($rep = 0; $rep < 2; $rep++)
          @foreach ([
            'Ahrefs', 'SEMrush', 'Google Search Console', 'Google Ads', 'Meta Ads Manager', 'Google Analytics', 'Looker Studio', 'Mailchimp', 'Klaviyo', 'Hotjar',
          ] as $tag)
            <span class="font-mono text-sm font-semibold whitespace-nowrap mx-4 px-6 py-3 rounded-full border" style="border-color:var(--line); color:var(--navy-deep); background:#fff;">
              {{ $tag }}
            </span>
          @endforeach
        @endfor
      </div>
    </div>
  </section>

  <!-- ===== Why Choose InTech Nexus ===== -->
  <section class="py-24 border-t fade-up" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 items-center overflow-hidden" style="border-radius:2px;">
        <div class="p-10 md:p-16 text-white h-full flex flex-col justify-center" style="background:var(--navy-deep);">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">Why InTech Nexus</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">We treat email as a channel with real revenue potential</h2>
          <p class="text-white/70 leading-relaxed max-w-md">
            We treat email as a channel with real revenue potential, not just a newsletter. Automated flows and segmentation are set up to work in the background, bringing in results without needing a manual send every time.
          </p>
        </div>
        <div class="h-full min-h-[320px]" style="background-image:url('https://images.unsplash.com/photo-1596526131083-e8c633c948d2?q=80&w=1200&auto=format&fit=crop'); background-size:cover; background-position:center;"></div>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section class="py-24 border-t fade-up" style="border-color:var(--line); background:var(--bg-soft);" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <div class="text-center mb-14">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">FAQ</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Frequently Asked Questions</h2>
      </div>

      <div class="space-y-4">
        @foreach ([
          ['q' => 'Do you write the email content as well as manage the campaigns?', 'a' => 'Yes. Email copy and design are part of our email marketing service, alongside strategy and automation setup.'],
          ['q' => 'Can you set up automated flows like abandoned cart emails?', 'a' => 'Yes. Automated flows, including welcome series and abandoned cart emails, are a core part of our email marketing work.'],
          ['q' => 'Which email platforms do you work with?', 'a' => 'We work with platforms like Mailchimp and Klaviyo, selecting the right one based on your stack, goals, and team.'],
          ['q' => 'How do you measure email marketing success?', 'a' => 'We track metrics tied to revenue, including open rate, click through rate, conversion rate, and revenue per email sent.'],
        ] as $i => $faq)
          <div class="bg-white border overflow-hidden" style="border-color:var(--line);">
            <button @click="openFaq = openFaq === {{ $i }} ? null : {{ $i }}" class="w-full text-left p-6 font-semibold text-lg flex justify-between items-center focus:outline-none" style="color:var(--navy-deep);">
              <span>{{ $faq['q'] }}</span>
              <span class="text-2xl font-bold ml-4" style="color:var(--blue-accent);" x-text="openFaq === {{ $i }} ? '−' : '+'"></span>
            </button>
            <div x-show="openFaq === {{ $i }}" x-collapse class="px-6 pb-6 leading-relaxed" style="color:var(--text-muted);">
              {{ $faq['a'] }}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Bottom CTA Banner ===== -->
  <section class="py-24 border-t fade-up" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
      <div class="p-10 md:p-16 text-white" style="background:var(--navy-deep); border-radius:2px;">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to turn your list into a real revenue channel?</h2>
        <p class="text-white/70 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
          Book a call, request a proposal, or get a free quote to begin.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5" style="background:var(--blue-accent);">
            Get a Free Quote
          </a>
          <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white border border-white/30 rounded-full hover:border-white hover:bg-white/5 transition-all">
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

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
  });
</script>
@endsection