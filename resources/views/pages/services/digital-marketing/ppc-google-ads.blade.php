@extends('layouts.app')
@section('title', 'PPC / Google Ads Services - InTech Nexus')

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

  /* Hero geometric overlay */
  .dm-hero{
    background:
      radial-gradient(ellipse 800px 480px at 15% 10%, rgba(61,107,255,0.30), transparent 60%),
      radial-gradient(ellipse 700px 500px at 85% 90%, rgba(90,140,255,0.18), transparent 55%),
      var(--navy-deep);
  }
  .dm-hero .vector-lines{
    position:absolute; inset:0; pointer-events:none; opacity:0.5;
  }

  /* Capability cards */
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

  /* Marquee ticker */
  .marquee-track{
    display:flex;
    width:max-content;
    animation:dm-marquee 26s linear infinite;
  }
  @keyframes dm-marquee{
    from{ transform:translateX(0); }
    to{ transform:translateX(-50%); }
  }

  /* Fade-in on scroll */
  .fade-up{
    opacity:0;
    transform:translateY(24px);
    transition:opacity .6s ease, transform .6s ease;
  }
  .fade-up.visible{
    opacity:1;
    transform:translateY(0);
  }

  /* Pulse dot */
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

  /* Stat counter shimmer */
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

  /* Floating animation for hero graphic */
  .float-graphic{
    animation:float 6s ease-in-out infinite;
  }
  @keyframes float{
    0%, 100%{ transform:translateY(0); }
    50%{ transform:translateY(-10px); }
  }

  /* Cursor glow animation */
  .glow-ring{
    position:absolute;
    border-radius:50%;
    border:1px solid rgba(90,140,255,0.3);
    pointer-events:none;
    animation:glowPulse 4s ease-in-out infinite;
  }
  .glow-ring:nth-child(2){
    width:120px; height:120px; top:20%; right:15%;
    animation-delay:1s;
  }
  .glow-ring:nth-child(3){
    width:80px; height:80px; bottom:25%; right:25%;
    animation-delay:2s;
  }
  @keyframes glowPulse{
    0%, 100%{ transform:scale(1); opacity:0.4; }
    50%{ transform:scale(1.15); opacity:0.8; }
  }

  /* Slide in from right */
  .slide-in-right{
    opacity:0;
    transform:translateX(40px);
    transition:opacity .7s ease, transform .7s ease;
  }
  .slide-in-right.visible{
    opacity:1;
    transform:translateX(0);
  }

  /* Counter animation base */
  .counter-num{
    display:inline-block;
    transition:transform .3s ease;
  }

  @media (prefers-reduced-motion: reduce){
    .dm-page *{ animation:none!important; transition:none!important; }
    .marquee-track{ animation:none!important; }
    .fade-up{ opacity:1!important; transform:none!important; }
    .slide-in-right{ opacity:1!important; transform:none!important; }
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

    <!-- Cursor glow rings -->
    <div class="glow-ring" style="width:160px;height:160px;top:15%;right:12%;"></div>
    <div class="glow-ring"></div>
    <div class="glow-ring"></div>

    <!-- Floating PPC graphic -->
    <div class="absolute right-10 top-1/2 -translate-y-1/2 hidden lg:block float-graphic" aria-hidden="true">
      <svg width="280" height="280" viewBox="0 0 280 280" fill="none">
        <circle cx="140" cy="140" r="120" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
        <circle cx="140" cy="140" r="80" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
        <circle cx="140" cy="140" r="40" stroke="rgba(255,255,255,0.2)" stroke-width="1"/>
        <path d="M140 20 L140 260" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
        <path d="M20 140 L260 140" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
        <circle cx="140" cy="40" r="6" fill="#5A8CFF" opacity="0.8"/>
        <circle cx="200" cy="100" r="4" fill="#3D6BFF" opacity="0.6"/>
        <circle cx="80" cy="180" r="5" fill="#5A8CFF" opacity="0.7"/>
        <circle cx="180" cy="200" r="3" fill="#fff" opacity="0.4"/>
        <text x="140" y="145" text-anchor="middle" fill="rgba(255,255,255,0.9)" font-family="IBM Plex Mono, monospace" font-size="14" font-weight="600">PPC</text>
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
        <span class="text-white/70">PPC / Google Ads</span>
      </nav>

      <div class="max-w-3xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">
          Google Ads Services
        </span>
        <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
          Google Ads Services Built Around Measurable Results, Not Just Clicks
        </h1>
        <p class="text-lg text-white/70 leading-relaxed mb-4 max-w-2xl">
          Google Ads services for businesses that want paid search traffic that actually converts, not just clicks.
        </p>
        <p class="text-base text-white/60 leading-relaxed mb-10 max-w-2xl">
          As part of our wider Digital Marketing practice, we manage paid search alongside the landing pages the ads point to, so traffic lands somewhere actually built to convert, rather than a generic page that wastes the click.
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
            Businesses running Google Ads that are not seeing a clear return, or starting paid search for the first time.
          </p>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-2 h-2 rounded-full" style="background:var(--blue-accent);"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>Ad spend is going up without a clear increase in leads or sales.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>Campaigns are targeting the wrong keywords or audience.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>There is no clear tracking in place to know what is actually working.</span></li>
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
          We plan and manage Google Ads campaigns built around measurable results
        </h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ([
          ['t' => 'PPC Management Services from Setup Through to Ongoing Optimization', 'd' => 'PPC management services from setup through to ongoing optimization, keeping campaigns aligned with your goals.'],
          ['t' => 'Google Ads Agency Experience Across Industries', 'd' => 'Google Ads agency experience across industries, with strategies adapted to your market and competition.'],
          ['t' => 'Paid Search Marketing Built Around Keyword and Intent Research', 'd' => 'Paid search marketing built around keyword and intent research, so budget goes toward searches most likely to convert.'],
          ['t' => 'Search Ads Management with Clear Performance Tracking', 'd' => 'Search ads management with clear performance tracking, so you can see what is working and where spend is going.'],
          ['t' => 'Google PPC Services Including Landing Page Alignment', 'd' => 'Google PPC services including landing page alignment, making sure traffic lands on pages built to convert.'],
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

  <!-- ===== Animated Stats ===== -->
  <section class="py-20 border-t fade-up" style="border-color:var(--line); background:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        @foreach ([
          ['v' => '100%', 'l' => 'Transparent reporting'],
          ['v' => '2x', 'l' => 'Average ROI improvement'],
          ['v' => '50+', 'l' => 'Campaigns managed'],
          ['v' => '24/7', 'l' => 'Bid and budget optimization'],
        ] as $stat)
          <div class="p-6">
            <div class="text-4xl md:text-5xl font-bold font-mono stat-value mb-2">{{ $stat['v'] }}</div>
            <p class="text-sm text-white/60">{{ $stat['l'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Our Service Capabilities ===== -->
  <section class="py-20 border-t fade-up" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Capabilities</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Our Service Capabilities</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">What We Deliver</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Fully managed Google Ads campaigns</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Keyword targeting built around buyer intent</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Landing pages aligned with each campaign</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Clear reporting on cost, leads, and return</span></li>
          </ul>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">Key Skill Areas</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Google Ads campaign management</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Keyword and search intent research</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Conversion tracking setup</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Bid strategy and budget optimization</span></li>
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
          'Fully managed Google Ads campaigns',
          'Keyword targeting built around buyer intent',
          'Landing pages aligned with each campaign',
          'Clear reporting on cost, leads, and return',
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
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">We manage paid search alongside the landing pages the ads point to</h2>
          <p class="text-white/70 leading-relaxed max-w-md">
            We manage paid search alongside the landing pages the ads point to, so traffic lands somewhere actually built to convert, not just a generic page.
          </p>
        </div>
        <div class="h-full min-h-[320px]" style="background-image:url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop'); background-size:cover; background-position:center;"></div>
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
          ['q' => 'Do you manage the ad budget directly?', 'a' => 'Yes. We manage campaigns end to end, including budget allocation, keyword targeting, and ongoing optimization.'],
          ['q' => 'How is success measured?', 'a' => 'We track results against clear goals, such as leads, sales, or cost per acquisition, agreed with you before the campaign starts.'],
          ['q' => 'Do you manage the ad budget directly?', 'a' => 'Yes. We manage campaigns end to end, including budget allocation, keyword targeting, and ongoing optimization.'],
          ['q' => 'How is success measured?', 'a' => 'We track results against clear goals, such as leads, sales, or cost per acquisition, agreed with you before the campaign starts.'],
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
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready for paid search that actually converts?</h2>
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
