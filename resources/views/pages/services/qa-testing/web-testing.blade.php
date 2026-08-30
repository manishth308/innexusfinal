@extends('layouts.app')
@section('title', 'Web Testing Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .wt-page{
    --navy-deep:#0B1B3D;
    --navy-darker:#071227;
    --teal-accent:#0D9488;
    --teal-bright:#2DD4BF;
    --bg-soft:#F1F7F6;
    --text-muted:#6B7280;
    --line:#E1EAE8;
    font-family:'Inter',system-ui,sans-serif;
  }
  .wt-page h1, .wt-page h2, .wt-page h3, .wt-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .wt-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  .wt-hero{
    background:
      radial-gradient(ellipse 800px 480px at 15% 10%, rgba(13,148,136,0.30), transparent 60%),
      radial-gradient(ellipse 700px 500px at 85% 90%, rgba(45,212,191,0.18), transparent 55%),
      var(--navy-deep);
  }
  .wt-hero .vector-lines{ position:absolute; inset:0; pointer-events:none; opacity:0.5; }

  .cap-card{
    border:1px solid var(--line);
    background:#fff;
    cursor:pointer;
    transition:border-color .25s ease, transform .25s ease, box-shadow .25s ease;
  }
  .cap-card:hover, .cap-card.is-open{
    border-color:var(--teal-accent);
    transform:translateY(-2px);
    box-shadow:0 8px 25px rgba(13,148,136,0.14);
  }
  .cap-card .cap-detail{
    max-height:0; overflow:hidden;
    transition:max-height .3s ease, opacity .3s ease, margin-top .3s ease;
    opacity:0;
  }
  .cap-card.is-open .cap-detail{ max-height:200px; opacity:1; margin-top:.75rem; }
  .cap-card .cap-chevron{ transition:transform .25s ease; }
  .cap-card.is-open .cap-chevron{ transform:rotate(45deg); }

  .marquee-track{ display:flex; width:max-content; animation:wt-marquee 26s linear infinite; }
  @keyframes wt-marquee{ from{ transform:translateX(0); } to{ transform:translateX(-50%); } }

  .fade-up{ opacity:0; transform:translateY(24px); transition:opacity .6s ease, transform .6s ease; }
  .fade-up.visible{ opacity:1; transform:translateY(0); }

  .float-graphic{ animation:float 6s ease-in-out infinite; }
  @keyframes float{ 0%, 100%{ transform:translateY(0); } 50%{ transform:translateY(-10px); } }

  .chart-bar{ transform-origin: bottom; animation:grow-bar 1s ease-out forwards; }
  @keyframes grow-bar{ from{ transform: scaleY(0); } to{ transform: scaleY(1); } }

  .chart-line{ stroke-dasharray: 1000; stroke-dashoffset: 1000; animation:draw-line 2s ease-out forwards; }
  @keyframes draw-line{ to{ stroke-dashoffset: 0; } }

  @media (prefers-reduced-motion: reduce){
    .wt-page *{ animation:none!important; transition:none!important; }
    .marquee-track{ animation:none!important; }
    .fade-up{ opacity:1!important; transform:none!important; }
  }
</style>
@endpush

@section('content')
<div class="wt-page bg-white">

  <!-- ===== Hero ===== -->
  <header class="wt-hero relative overflow-hidden text-white">
    <svg class="vector-lines" viewBox="0 0 1200 500" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0 440 L260 360 L520 400 L780 300 L1040 340 L1200 220" stroke="#2DD4BF" stroke-width="1.5" fill="none" opacity="0.4"/>
      <path d="M0 480 L300 420 L560 450 L860 340 L1200 380" stroke="#0D9488" stroke-width="1.5" fill="none" opacity="0.3"/>
      <circle cx="260" cy="360" r="4" fill="#2DD4BF"/>
      <circle cx="780" cy="300" r="4" fill="#2DD4BF"/>
      <circle cx="1200" cy="220" r="4" fill="#0D9488"/>
    </svg>

    <!-- Floating graphic: a browser window with a pass mark -->
    <div class="absolute right-10 top-1/2 -translate-y-1/2 hidden lg:block float-graphic" aria-hidden="true">
      <svg width="280" height="280" viewBox="0 0 280 280" fill="none">
        <rect x="40" y="40" width="200" height="200" rx="24" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
        <rect x="80" y="80" width="130" height="95" rx="8" stroke="rgba(255,255,255,0.25)" stroke-width="1.5"/>
        <line x1="80" y1="98" x2="210" y2="98" stroke="rgba(255,255,255,0.25)" stroke-width="1.5"/>
        <circle cx="92" cy="89" r="2.5" fill="rgba(255,255,255,0.35)"/>
        <circle cx="101" cy="89" r="2.5" fill="rgba(255,255,255,0.35)"/>
        <circle cx="110" cy="89" r="2.5" fill="rgba(255,255,255,0.35)"/>
        <line x1="95" y1="120" x2="170" y2="120" stroke="rgba(255,255,255,0.2)" stroke-width="3" stroke-linecap="round"/>
        <line x1="95" y1="140" x2="150" y2="140" stroke="rgba(255,255,255,0.2)" stroke-width="3" stroke-linecap="round"/>
        <circle cx="185" cy="185" r="26" fill="#0D9488" opacity="0.9"/>
        <path d="M173 185 L182 194 L199 175" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <text x="140" y="248" text-anchor="middle" fill="rgba(255,255,255,0.9)" font-family="IBM Plex Mono, monospace" font-size="13" font-weight="600">Cross-Browser</text>
      </svg>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-14 pb-24 lg:pt-16 lg:pb-28">
      <!-- Breadcrumb -->
      <nav class="flex flex-wrap items-center gap-2 text-sm font-medium mb-8" style="color:var(--teal-bright);" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
        <span class="text-white/30">/</span>
        <a href="{{ url('/services') }}" class="hover:text-white transition-colors">Services</a>
        <span class="text-white/30">/</span>
        <a href="{{ url('/qa-testing') }}" class="hover:text-white transition-colors">QA & Testing</a>
        <span class="text-white/30">/</span>
        <span class="text-white/70">Web Testing</span>
      </nav>

      <div class="max-w-3xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-bright);">
          Web Testing
        </span>
        <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
          Web Testing Services That Catch Issues Across Every Browser
        </h1>
        <p class="text-lg text-white/70 leading-relaxed mb-4 max-w-2xl">
          Web testing services for businesses that need their website or web application to work reliably across every browser and device.
        </p>
        <p class="text-base text-white/60 leading-relaxed mb-10 max-w-2xl">
          As part of our wider QA & Testing practice, we test across the same browsers and devices your actual visitors use, not just the ones a development team happens to prefer, so problems do not slip through unnoticed after launch.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-7 py-3.5 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5" style="background:var(--teal-accent);">
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
            <span class="w-2 h-2 rounded-full" style="background:var(--teal-accent);"></span>
            Who This Is For
          </h2>
          <p class="leading-relaxed text-base" style="color:var(--text-muted);">
            Businesses launching a new website or web application, or dealing with bugs on an existing one.
          </p>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-2 h-2 rounded-full" style="background:var(--teal-accent);"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--teal-accent);">•</span><span>The site behaves differently across different browsers.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--teal-accent);">•</span><span>Bugs or broken layouts are showing up after launch instead of before.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--teal-accent);">•</span><span>There is no clear testing process in place before changes go live.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== What We Offer ===== -->
  <section class="py-20 border-t fade-up" style="border-color:var(--line); background:var(--bg-soft);" x-data="{ openCap: null }">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-accent);">What We Offer</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">
          We test websites and web applications across browsers, devices, and real usage conditions
        </h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ([
          ['t' => 'Website QA Testing Before and After Launch', 'd' => 'Website QA testing before and after launch, so issues are caught early and stay caught as the site evolves.'],
          ['t' => 'Web Application Testing for Complex, Logic Heavy Platforms', 'd' => 'Web application testing for complex, logic heavy platforms, where user flows and edge cases matter most.'],
          ['t' => 'Browser Compatibility Testing Across Major Browsers', 'd' => 'Browser compatibility testing across major browsers, so the experience holds up no matter what visitors use.'],
          ['t' => 'Manual Web Testing for Real World Usage Checks', 'd' => 'Manual web testing for real world usage checks that automated scripts alone tend to miss.'],
          ['t' => 'Automated Web Testing for Faster, Repeatable Checks', 'd' => 'Automated web testing for faster, repeatable checks on the parts of the site that change often.'],
        ] as $i => $offer)
          <div class="cap-card rounded-xl p-6" :class="{ 'is-open': openCap === {{ $i }} }" @click="openCap = openCap === {{ $i }} ? null : {{ $i }}">
            <div class="flex items-start justify-between gap-3">
              <p class="font-semibold text-lg" style="color:var(--navy-deep);">{{ $offer['t'] }}</p>
              <span class="cap-chevron font-mono text-lg flex-shrink-0" style="color:var(--teal-accent);">+</span>
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
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-accent);">Testing in Numbers</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Coverage Across Browsers</h2>
        <p class="mt-3 text-base" style="color:var(--text-muted);">A look at how pass rates and defect rates typically shift once cross-browser testing is in place.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Bar Chart: Cross-Browser Pass Rate -->
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-2" style="color:var(--navy-deep);">Cross-Browser Pass Rate</h3>
          <p class="text-sm mb-8" style="color:var(--text-muted);">Test pass rate by browser after a full QA pass</p>

          <div class="flex items-end justify-between gap-4 h-64">
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 96%; border: 1px solid var(--line); border-bottom: none;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-xl font-bold" style="color:var(--teal-accent);">98%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Chrome</span>
            </div>
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 90%; border: 1px solid var(--line); border-bottom: none; animation-delay: 0.15s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-xl font-bold" style="color:var(--teal-accent);">93%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Safari</span>
            </div>
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full bg-white rounded-t-lg relative chart-bar" style="height: 88%; border: 1px solid var(--line); border-bottom: none; animation-delay: 0.3s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-xl font-bold" style="color:var(--teal-accent);">91%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Firefox</span>
            </div>
            <div class="flex-1 flex flex-col items-center">
              <div class="w-full rounded-t-lg relative chart-bar" style="height: 92%; border: 1px solid var(--line); border-bottom: none; background: linear-gradient(to top, var(--teal-accent), var(--teal-bright)); animation-delay: 0.45s;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="font-mono text-xl font-bold text-white">95%</span>
                </div>
              </div>
              <span class="mt-3 font-mono text-xs font-semibold" style="color:var(--navy-deep);">Edge</span>
            </div>
          </div>
        </div>

        <!-- Line Chart: Defect Rate Trend -->
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-2" style="color:var(--navy-deep);">Defect Rate Over Releases</h3>
          <p class="text-sm mb-8" style="color:var(--text-muted);">Layout and functional defects reaching production with QA in place</p>

          <svg viewBox="0 0 500 250" class="w-full h-64">
            <line x1="40" y1="30" x2="480" y2="30" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="80" x2="480" y2="80" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="130" x2="480" y2="130" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="180" x2="480" y2="180" stroke="var(--line)" stroke-width="1"/>
            <line x1="40" y1="230" x2="480" y2="230" stroke="var(--line)" stroke-width="1"/>

            <text x="30" y="35" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">High</text>
            <text x="30" y="235" text-anchor="end" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Low</text>

            <path d="M 80 52 L 140 88 L 200 115 L 260 148 L 320 172 L 380 198 L 440 212 L 440 230 L 80 230 Z" fill="url(#wtChartGradient)" opacity="0.3"/>

            <path d="M 80 52 L 140 88 L 200 115 L 260 148 L 320 172 L 380 198 L 440 212" fill="none" stroke="var(--teal-accent)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="chart-line"/>

            <circle cx="80" cy="52" r="5" fill="var(--teal-accent)"/>
            <circle cx="140" cy="88" r="5" fill="var(--teal-accent)"/>
            <circle cx="200" cy="115" r="5" fill="var(--teal-accent)"/>
            <circle cx="260" cy="148" r="5" fill="var(--teal-accent)"/>
            <circle cx="320" cy="172" r="5" fill="var(--teal-accent)"/>
            <circle cx="380" cy="198" r="5" fill="var(--teal-accent)"/>
            <circle cx="440" cy="212" r="6" fill="var(--teal-bright)" stroke="#fff" stroke-width="2"/>

            <text x="80" y="250" text-anchor="middle" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Release 1</text>
            <text x="260" y="250" text-anchor="middle" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Release 4</text>
            <text x="440" y="250" text-anchor="middle" fill="var(--text-muted)" font-size="10" font-family="IBM Plex Mono, monospace">Release 7</text>

            <defs>
              <linearGradient id="wtChartGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" stop-color="var(--teal-accent)" stop-opacity="0.4"/>
                <stop offset="100%" stop-color="var(--teal-accent)" stop-opacity="0"/>
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
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-accent);">Capabilities</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Our Service Capabilities</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">What We Deliver</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--teal-accent);">◦</span><span>A full test pass across major browsers and devices</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--teal-accent);">◦</span><span>Clear bug reports with reproduction steps</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--teal-accent);">◦</span><span>Form and functionality testing</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--teal-accent);">◦</span><span>A pre launch sign off before release</span></li>
          </ul>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">Key Skill Areas</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--teal-accent);">◦</span><span>Manual web and application testing</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--teal-accent);">◦</span><span>Automated web testing setup</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--teal-accent);">◦</span><span>Cross browser compatibility testing</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--teal-accent);">◦</span><span>Responsive and mobile web testing</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Our Process ===== -->
  <section class="py-24 border-t fade-up" style="border-color:var(--line); background:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-16 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-bright);">Our Process</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3 text-white">From First Build to Sign Off</h2>
      </div>

      <div class="space-y-5">
        @foreach ([
          ['n' => '01', 't' => 'Test Planning', 'd' => 'We review the product and plan what needs to be tested.'],
          ['n' => '02', 't' => 'Test Case Design', 'd' => 'We write clear test cases covering key functionality.'],
          ['n' => '03', 't' => 'Manual & Automated Testing', 'd' => 'We test manually and set up automation where it adds value.'],
          ['n' => '04', 't' => 'Bug Tracking & Retesting', 'd' => 'We log issues clearly, then retest once they are fixed.'],
          ['n' => '05', 't' => 'Sign Off & Release Support', 'd' => 'We give a clear sign off, then support the release.'],
        ] as $step)
          <div class="flex flex-col sm:flex-row sm:items-center gap-6 p-6 rounded-xl border border-white/10 bg-white/[0.03]">
            <div class="font-mono text-3xl font-bold flex-shrink-0" style="color:var(--teal-bright);">{{ $step['n'] }}</div>
            <div>
              <h3 class="text-lg font-bold text-white mb-1">{{ $step['t'] }}</h3>
              <p class="text-sm text-white/60">{{ $step['d'] }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-3xl">
        @foreach ([
          'A full test pass across major browsers and devices',
          'Clear bug reports with reproduction steps',
          'Form and functionality testing',
          'A pre launch sign off before release',
        ] as $outcome)
          <div class="flex items-start gap-3">
            <span class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold" style="background:var(--teal-accent); color:#fff;">✓</span>
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
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-accent);">Stack</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Tools / Technologies</h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="p-6 border" style="border-color:var(--line); background:var(--bg-soft);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--teal-accent);">Automation</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Selenium · Appium</p>
        </div>
        <div class="p-6 border" style="border-color:var(--line); background:var(--bg-soft);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--teal-accent);">Bug Tracking</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Jira</p>
        </div>
        <div class="p-6 border" style="border-color:var(--line); background:var(--bg-soft);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--teal-accent);">Device Testing</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">BrowserStack</p>
        </div>
        <div class="p-6 border" style="border-color:var(--line); background:var(--bg-soft);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--teal-accent);">API Testing</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Postman</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Enablers We Work With (marquee ticker) ===== -->
  <section class="py-14 border-t overflow-hidden fade-up" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 mb-8">
      <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-accent);">Enablers We Work With</span>
    </div>
    <div class="relative">
      <div class="marquee-track">
        @for ($rep = 0; $rep < 2; $rep++)
          @foreach (['Selenium', 'Appium', 'Jira', 'BrowserStack', 'Postman'] as $tag)
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
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-bright);">Why InTech Nexus</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">We test what your visitors actually use</h2>
          <p class="text-white/70 leading-relaxed max-w-md">
            We test across the same browsers and devices your actual visitors use, not just the ones a development team happens to prefer. That keeps problems from slipping through unnoticed.
          </p>
        </div>
        <div class="h-full min-h-[320px]" style="background-image:url('https://images.unsplash.com/photo-1547658719-da2b51169166?q=80&w=1200&auto=format&fit=crop'); background-size:cover; background-position:center;"></div>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section class="py-24 border-t fade-up" style="border-color:var(--line); background:var(--bg-soft);" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <div class="text-center mb-14">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--teal-accent);">FAQ</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Frequently Asked Questions</h2>
      </div>

      <div class="space-y-4">
        @foreach ([
          ['q' => 'Do you test websites you did not build?', 'a' => 'Yes. We offer web testing for sites and applications built by other teams, not only ones we developed, including projects from our own Custom Website Development and Web Application Development work.'],
          ['q' => 'Can you set up automated testing for ongoing releases?', 'a' => 'Yes. Automated web testing can be set up to run checks automatically as new changes are released.'],
        ] as $i => $faq)
          <div class="bg-white border overflow-hidden" style="border-color:var(--line);">
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

  <!-- ===== Bottom CTA Banner ===== -->
  <section class="py-24 border-t fade-up" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
      <div class="p-10 md:p-16 text-white" style="background:var(--navy-deep); border-radius:2px;">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to make sure your site works everywhere?</h2>
        <p class="text-white/70 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
          Book a call, request a proposal, or get a free quote to start.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5" style="background:var(--teal-accent);">
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