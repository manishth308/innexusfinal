@extends('layouts.app')
@section('title', 'Conversion Rate Optimization Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .cro-page{
    --navy-deep:#0B1B3D;
    --navy-darker:#071227;
    --blue-accent:#3D6BFF;
    --blue-bright:#5A8CFF;
    --bg-soft:#F3F5FA;
    --text-muted:#6B7280;
    --line:#E3E7F0;
    font-family:'Inter',system-ui,sans-serif;
  }
  .cro-page h1, .cro-page h2, .cro-page h3, .cro-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .cro-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  .cro-hero{
    background:
      radial-gradient(ellipse 800px 480px at 15% 10%, rgba(61,107,255,0.30), transparent 60%),
      radial-gradient(ellipse 700px 500px at 85% 90%, rgba(90,140,255,0.18), transparent 55%),
      var(--navy-deep);
  }
  .cro-hero .vector-lines{
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
    animation:cro-marquee 26s linear infinite;
  }
  @keyframes cro-marquee{
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
    .cro-page *{ animation:none!important; transition:none!important; }
    .marquee-track{ animation:none!important; }
    .fade-up{ opacity:1!important; transform:none!important; }
  }
</style>
@endpush

@section('content')
<div class="cro-page bg-white">

  <!-- ===== Hero ===== -->
  <header class="cro-hero relative overflow-hidden text-white">
    <svg class="vector-lines" viewBox="0 0 1200 500" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0 460 L260 400 L520 430 L780 340 L1040 380 L1200 260" stroke="#5A8CFF" stroke-width="1.5" fill="none" opacity="0.4"/>
      <path d="M0 490 L300 440 L560 470 L860 360 L1200 300" stroke="#3D6BFF" stroke-width="1.5" fill="none" opacity="0.3"/>
      <circle cx="260" cy="400" r="4" fill="#5A8CFF"/>
      <circle cx="780" cy="340" r="4" fill="#5A8CFF"/>
      <circle cx="1200" cy="260" r="4" fill="#3D6BFF"/>
    </svg>

    <!-- Floating CRO graphic: a funnel narrowing toward a converted point -->
    <div class="absolute right-10 top-1/2 -translate-y-1/2 hidden lg:block float-graphic" aria-hidden="true">
      <svg width="280" height="280" viewBox="0 0 280 280" fill="none">
        <rect x="40" y="40" width="200" height="200" rx="24" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
        <path d="M75 85 L205 85 L165 145 L165 205 L115 205 L115 145 Z" stroke="rgba(255,255,255,0.2)" stroke-width="1.5" fill="none"/>
        <circle cx="90" cy="95" r="3" fill="#fff" opacity="0.5"/>
        <circle cx="130" cy="95" r="3" fill="#fff" opacity="0.5"/>
        <circle cx="170" cy="95" r="3" fill="#5A8CFF" opacity="0.7"/>
        <circle cx="140" cy="150" r="3.5" fill="#5A8CFF" opacity="0.85"/>
        <circle cx="140" cy="195" r="6" fill="#5A8CFF"/>
        <text x="140" y="245" text-anchor="middle" fill="rgba(255,255,255,0.9)" font-family="IBM Plex Mono, monospace" font-size="13" font-weight="600">Conversion</text>
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
        <span class="text-white/70">Conversion Rate Optimization</span>
      </nav>

      <div class="max-w-3xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">
          Conversion Rate Optimization
        </span>
        <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
          Conversion Rate Optimization Services to Get More From the Traffic You Already Have
        </h1>
        <p class="text-lg text-white/70 leading-relaxed mb-4 max-w-2xl">
          Conversion rate optimization services for businesses that already have traffic but need more of it to convert.
        </p>
        <p class="text-base text-white/60 leading-relaxed mb-10 max-w-2xl">
          As part of our wider Digital Marketing practice, we treat conversion optimization as an ongoing, tested process rather than a one time redesign, validating changes with real data before rolling them out fully.
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
            Businesses with steady website traffic that is not converting at the rate it should.
          </p>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-2 h-2 rounded-full" style="background:var(--blue-accent);"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>Traffic is steady, but conversions are not improving.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>It is unclear which parts of the site or funnel are causing drop off.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>Changes have been made to the site without any real testing behind them.</span></li>
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
          We find and fix the points in your funnel that are losing conversions
        </h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ([
          ['t' => 'CRO Agency Experience Across Ecommerce and Lead Generation Sites', 'd' => 'CRO agency experience across ecommerce and lead generation sites, with approaches adapted to how each type of business converts.'],
          ['t' => 'Landing Page Optimization Backed by Real Data', 'd' => 'Landing page optimization backed by real data, testing changes before they go live everywhere.'],
          ['t' => 'Website Conversion Audits to Find Weak Points', 'd' => 'Website conversion audits to find weak points across your site and funnel.'],
          ['t' => 'Conversion Funnel Optimization from Click Through to Purchase', 'd' => 'Conversion funnel optimization from click through to purchase, so no stage of the journey is left unchecked.'],
          ['t' => 'A/B Testing Services to Validate Changes Before Rolling Them Out', 'd' => 'A/B testing services to validate changes before rolling them out fully, so decisions are based on evidence.'],
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
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Funnel Performance Visualized</h2>
        <p class="mt-3 text-base" style="color:var(--text-muted);">A look at how conversion rates typically shift across a funnel once testing and optimization begin.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Bar Chart: Conversion by Funnel Stage -->
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-2" style="color:var(--navy-deep);">Conversion by Funnel Stage</h3>
          <p class="text-sm mb-8" style="color:var(--text-muted);">Stage-to-stage conversion rate after optimization</p>

          <div class="flex items-end justify-between gap-4 h-64">
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 90%; border: 1px solid var(--line); border-bottom: none;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold" style="color:var(--blue-accent);">64%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Landing Page</span>
            </div>

            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 68%; border: 1px solid var(--line); border-bottom: none; animation-delay: 0.15s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold" style="color:var(--blue-accent);">41%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Product Page</span>
            </div>

            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 48%; border: 1px solid var(--line); border-bottom: none; animation-delay: 0.3s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold" style="color:var(--blue-accent);">27%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Cart</span>
            </div>

            <div class="flex-1 flex flex-col items-center">
              <div class="w-full rounded-t-lg relative chart-bar" style="height: 32%; border: 1px solid var(--line); border-bottom: none; background: linear-gradient(to top, var(--blue-accent), var(--blue-bright)); animation-delay: 0.45s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold text-white">18%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Checkout</span>
            </div>
          </div>
        </div>

        <!-- Line Chart: Conversion Rate Over Time -->
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-2" style="color:var(--navy-deep);">Conversion Rate Over Time</h3>
          <p class="text-sm mb-8" style="color:var(--text-muted);">Overall site conversion rate through ongoing testing cycles</p>

          <svg viewBox="0 0 500 250" class="w-full h-64">
            <line x1="40" y1="30" x2="480" y2="30" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="80" x2="480" y2="80" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="130" x2="480" y2="130" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="180" x2="480" y2="180" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="230" x2="480" y2="230" stroke="var(--line)" stroke-width="1"/>

            <text x="30" y="35" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">4.0%</text>
            <text x="30" y="85" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">3.0%</text>
            <text x="30" y="135" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">2.0%</text>
            <text x="30" y="185" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">1.0%</text>
            <text x="30" y="235" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">0%</text>

            <path d="M 80 190 L 140 165 L 200 145 L 260 110 L 320 85 L 380 60 L 440 42 L 440 230 L 80 230 Z" fill="url(#croChartGradient)" opacity="0.3"/>

            <path d="M 80 190 L 140 165 L 200 145 L 260 110 L 320 85 L 380 60 L 440 42" fill="none" stroke="var(--blue-accent)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="chart-line"/>

            <circle cx="80" cy="190" r="5" fill="var(--blue-accent)"/>
            <circle cx="140" cy="165" r="5" fill="var(--blue-accent)"/>
            <circle cx="200" cy="145" r="5" fill="var(--blue-accent)"/>
            <circle cx="260" cy="110" r="5" fill="var(--blue-accent)"/>
            <circle cx="320" cy="85" r="5" fill="var(--blue-accent)"/>
            <circle cx="380" cy="60" r="5" fill="var(--blue-accent)"/>
            <circle cx="440" cy="42" r="6" fill="var(--blue-bright)" stroke="#fff" stroke-width="2"/>

            <text x="80" y="250" text-anchor="middle" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Month 1</text>
            <text x="260" y="250" text-anchor="middle" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Month 3</text>
            <text x="440" y="250" text-anchor="middle" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Month 6</text>

            <defs>
              <linearGradient id="croChartGradient" x1="0%" y1="0%" x2="0%" y2="100%">
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
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>A full conversion audit of your site or funnel</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Prioritized recommendations based on impact</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>A/B tested changes before full rollout</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Ongoing optimization based on real user data</span></li>
          </ul>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">Key Skill Areas</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Conversion funnel analysis</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Landing page optimization</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>A/B and multivariate testing</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>User behavior analysis</span></li>
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
        <h2 class="text-3xl md:text-4xl font-bold mt-3 text-white">From Guesswork to Evidence</h2>
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
          'A full conversion audit of your site or funnel',
          'Prioritized recommendations based on impact',
          'A/B tested changes before full rollout',
          'Ongoing optimization based on real user data',
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
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Evidence, not guesswork</h2>
          <p class="text-white/70 leading-relaxed max-w-md">
            We treat conversion optimization as an ongoing, tested process, not a one time redesign. Changes are validated with real data before they are rolled out fully, so improvements are based on evidence, not guesswork.
          </p>
        </div>
        <div class="h-full min-h-[320px]" style="background-image:url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop'); background-size:cover; background-position:center;"></div>
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
          ['q' => 'How do you find where we are losing conversions?', 'a' => 'We review analytics, user behavior, and the funnel itself to identify where visitors are dropping off, then prioritize fixes based on impact.'],
          ['q' => 'Do you run A/B tests before making permanent changes?', 'a' => 'Yes. Where it makes sense, we test changes against the current version before rolling them out fully.'],
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
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to convert more of the traffic you already have?</h2>
        <p class="text-white/70 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
          Book a call, request a proposal, or get a free quote to start.
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