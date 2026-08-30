@extends('layouts.app')
@section('title', 'Meta Ads Services - InTech Nexus')

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

    <!-- Floating Meta Ads graphic -->
    <div class="absolute right-10 top-1/2 -translate-y-1/2 hidden lg:block float-graphic" aria-hidden="true">
      <svg width="280" height="280" viewBox="0 0 280 280" fill="none">
        <rect x="40" y="40" width="200" height="200" rx="24" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
        <rect x="70" y="70" width="140" height="140" rx="16" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
        <rect x="100" y="100" width="80" height="80" rx="12" stroke="rgba(255,255,255,0.2)" stroke-width="1"/>
        <circle cx="140" cy="140" r="6" fill="#5A8CFF" opacity="0.9"/>
        <circle cx="100" cy="100" r="4" fill="#3D6BFF" opacity="0.7"/>
        <circle cx="180" cy="180" r="4" fill="#5A8CFF" opacity="0.7"/>
        <circle cx="180" cy="100" r="3" fill="#fff" opacity="0.5"/>
        <circle cx="100" cy="180" r="3" fill="#fff" opacity="0.5"/>
        <text x="140" y="145" text-anchor="middle" fill="rgba(255,255,255,0.9)" font-family="IBM Plex Mono, monospace" font-size="14" font-weight="600">Meta Ads</text>
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
        <span class="text-white/70">Meta Ads</span>
      </nav>

      <div class="max-w-3xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">
          Meta Ads Services
        </span>
        <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
          Meta Ads Services Built to Reach the Right Audience on Facebook and Instagram
        </h1>
        <p class="text-lg text-white/70 leading-relaxed mb-4 max-w-2xl">
          Meta ads services for businesses that want to reach the right audience on Facebook and Instagram.
        </p>
        <p class="text-base text-white/60 leading-relaxed mb-10 max-w-2xl">
          As part of our wider Digital Marketing practice, we manage Meta ads alongside the creative behind them, so targeting and visuals are planned together instead of treated as two separate jobs handed to two different teams.
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
            Businesses running or considering Facebook and Instagram ads that need better targeting or creative performance.
          </p>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-2 h-2 rounded-full" style="background:var(--blue-accent);"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>Ad spend on Facebook or Instagram is not producing a clear return.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>Creative is not performing, and it is unclear why.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>Targeting is too broad, reaching people unlikely to convert.</span></li>
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
          We plan and manage Meta ad campaigns built around your actual audience
        </h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ([
          ['t' => 'Facebook Ads Management from Setup Through to Optimization', 'd' => 'Facebook ads management covering campaign setup, audience targeting, and ongoing optimization to improve performance over time.'],
          ['t' => 'Instagram Ads Services Aligned with Your Brand and Audience', 'd' => 'Instagram ads services aligned with your brand and audience, with creative and targeting planned together for better results.'],
          ['t' => 'Paid Social Advertising Strategy and Execution', 'd' => 'Paid social advertising strategy and execution, built around your goals and tested against real performance data.'],
          ['t' => 'Meta Advertising Agency Experience Across Industries', 'd' => 'Meta advertising agency experience across industries, with approaches adapted to your market and audience.'],
          ['t' => 'Social Media Ads Management with Ongoing Performance Tracking', 'd' => 'Social media ads management with ongoing performance tracking, so you can see how spend translates into results.'],
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
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Campaign Performance Visualized</h2>
        <p class="mt-3 text-base" style="color:var(--text-muted);">A look at how our Meta ad campaigns typically perform across platforms and over time.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Bar Chart: Facebook vs Instagram -->
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-2" style="color:var(--navy-deep);">Platform Comparison</h3>
          <p class="text-sm mb-8" style="color:var(--text-muted);">Average engagement rate by platform</p>

          <div class="flex items-end justify-between gap-4 h-64">
            <!-- Facebook Bar -->
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 85%; border: 1px solid var(--line); border-bottom: none;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold" style="color:var(--blue-accent);">3.2%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Facebook</span>
            </div>

            <!-- Instagram Bar -->
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 92%; border: 1px solid var(--line); border-bottom: none; animation-delay: 0.15s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold" style="color:var(--blue-accent);">4.1%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Instagram</span>
            </div>

            <!-- Audience Bar -->
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 78%; border: 1px solid var(--line); border-bottom: none; animation-delay: 0.3s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold" style="color:var(--blue-accent);">2.8%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Audience</span>
            </div>

            <!-- Conversion Bar -->
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full rounded-t-lg relative chart-bar" style="height: 95%; border: 1px solid var(--line); border-bottom: none; background: linear-gradient(to top, var(--blue-accent), var(--blue-bright)); animation-delay: 0.45s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-2xl font-bold text-white">5.4%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Conversion</span>
            </div>
          </div>
        </div>

        <!-- Line Chart: Campaign Optimization -->
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-2" style="color:var(--navy-deep);">Optimization Over Time</h3>
          <p class="text-sm mb-8" style="color:var(--text-muted);">ROAS improvement through ongoing campaign optimization</p>

          <svg viewBox="0 0 500 250" class="w-full h-64">
            <!-- Grid lines -->
            <line x1="40" y1="30" x2="480" y2="30" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="80" x2="480" y2="80" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="130" x2="480" y2="130" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="180" x2="480" y2="180" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="230" x2="480" y2="230" stroke="var(--line)" stroke-width="1"/>

            <!-- Y-axis labels -->
            <text x="30" y="35" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">5x</text>
            <text x="30" y="85" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">4x</text>
            <text x="30" y="135" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">3x</text>
            <text x="30" y="185" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">2x</text>
            <text x="30" y="235" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">1x</text>

            <!-- Area under curve -->
            <path d="M 80 180 L 140 150 L 200 130 L 260 100 L 320 80 L 380 55 L 440 40 L 440 230 L 80 230 Z" fill="url(#chartGradient)" opacity="0.3"/>

            <!-- Line -->
            <path d="M 80 180 L 140 150 L 200 130 L 260 100 L 320 80 L 380 55 L 440 40" fill="none" stroke="var(--blue-accent)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="chart-line"/>

            <!-- Data points -->
            <circle cx="80" cy="180" r="5" fill="var(--blue-accent)"/>
            <circle cx="140" cy="150" r="5" fill="var(--blue-accent)"/>
            <circle cx="200" cy="130" r="5" fill="var(--blue-accent)"/>
            <circle cx="260" cy="100" r="5" fill="var(--blue-accent)"/>
            <circle cx="320" cy="80" r="5" fill="var(--blue-accent)"/>
            <circle cx="380" cy="55" r="5" fill="var(--blue-accent)"/>
            <circle cx="440" cy="40" r="6" fill="var(--blue-bright)" stroke="#fff" stroke-width="2"/>

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
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Fully managed Facebook and Instagram ad campaigns</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Audience targeting built around your ideal customer</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Creative planned alongside the campaign strategy</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Clear reporting on spend, reach, and results</span></li>
          </ul>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">Key Skill Areas</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Meta Ads Manager campaign setup and management</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Audience research and targeting</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Pixel and conversion tracking setup</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Creative and copy testing</span></li>
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
          'Fully managed Facebook and Instagram ad campaigns',
          'Audience targeting built around your ideal customer',
          'Creative planned alongside the campaign strategy',
          'Clear reporting on spend, reach, and results',
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
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">We manage Meta ads alongside the creative behind them</h2>
          <p class="text-white/70 leading-relaxed max-w-md">
            We manage Meta ads alongside the creative behind them, so targeting and visuals are planned together instead of treated as two separate jobs handed to two different teams.
          </p>
        </div>
        <div class="h-full min-h-[320px]" style="background-image:url('https://images.unsplash.com/photo-1611162617474-5b21e879e113?q=80&w=1200&auto=format&fit=crop'); background-size:cover; background-position:center;"></div>
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
          ['q' => 'Do you also create the ad creative?', 'a' => 'Yes. Ad creative can be produced through our Ad Creative Design service, planned together with the campaign strategy.'],
          ['q' => 'Can you run ads on both Facebook and Instagram?', 'a' => 'Yes. We manage campaigns across both platforms, since they run through the same ad system.'],
          ['q' => 'How do you measure campaign success?', 'a' => 'We track metrics aligned to your goals, such as ROAS, CPA, and conversion volume, with clear reporting on spend, reach, and results.'],
          ['q' => 'Do you handle pixel and tracking setup?', 'a' => 'Yes. We set up the Meta Pixel, conversion tracking, and event measurement needed to optimize campaigns accurately.'],
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
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to reach the right audience on Meta?</h2>
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