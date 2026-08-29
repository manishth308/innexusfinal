@extends('layouts.app')
@section('title', 'iOS App Development Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .ios-page{
    --navy-deep:#0B1B3D;
    --navy-darker:#071227;
    --red-accent:#A3242E;
    --red-bright:#D9483F;
    --bg-soft:#F5F3F2;
    --text-muted:#6B7280;
    --line:#E5E1DF;
    font-family:'Inter',system-ui,sans-serif;
  }
  .ios-page h1, .ios-page h2, .ios-page h3, .ios-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .ios-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }
  #iosNodeCanvas{
    position:absolute;inset:0;width:100%;height:100%;opacity:0.55;pointer-events:none;
  }
  @media (prefers-reduced-motion: reduce){
    .ios-page *{animation:none!important;transition:none!important;}
  }
</style>
@endpush

@section('content')
<div class="ios-page bg-white">

  <!-- ===== Hero ===== -->
  <header class="relative overflow-hidden text-white" style="background: radial-gradient(ellipse 900px 500px at 78% 20%, rgba(163,36,46,0.28), transparent 60%), var(--navy-deep);">
    <canvas id="iosNodeCanvas"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-14 pb-24 lg:pt-16 lg:pb-28">
      <!-- Breadcrumb -->
      <nav class="flex flex-wrap items-center gap-2 text-sm font-medium mb-8" style="color:var(--red-bright);" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-white transition-colors">Main Navigation</a>
        <span class="text-white/30">/</span>
        <a href="{{ url('/services') }}" class="hover:text-white transition-colors">Services</a>
        <span class="text-white/30">/</span>
        <a href="{{ url('/services/mobile-app-development') }}" class="hover:text-white transition-colors">Mobile App Development</a>
        <span class="text-white/30">/</span>
        <span class="text-white/70">iOS App Development</span>
      </nav>

      <div class="max-w-2xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--red-bright);">
          iOS App Development
        </span>
        <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
          Built for <span style="color:var(--red-bright);">Apple's standards.</span>
        </h1>
        <p class="text-lg text-white/70 leading-relaxed mb-4">
          iOS app development services for businesses building a native app for iPhone and iPad, built to feel fast and familiar to Apple users.
        </p>
        <p class="text-base text-white/60 leading-relaxed mb-10">
          As part of our wider Mobile App Development practice, our iOS work is built natively using Apple's own tools, so the app feels fast, familiar, and fully at home on iPhone and iPad. This matters most for businesses whose audience skews toward Apple devices, or who need the performance and polish that native development provides.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white transition-all hover:-translate-y-0.5" style="background:var(--red-accent); border-radius:2px;">
            Get a Free Quote
          </a>
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white border border-white/30 hover:border-white hover:bg-white/5 transition-all" style="border-radius:2px;">
            Book a Call
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- ===== Who This Is For & Problems We Solve ===== -->
  <section class="py-20 border-t" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-2 h-2 rounded-full" style="background:var(--red-accent);"></span>
            Who This Is For
          </h2>
          <p class="leading-relaxed text-base" style="color:var(--text-muted);">
            Businesses building a new iOS app, or replacing one that feels slow or outdated.
          </p>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-2 h-2 rounded-full" style="background:var(--red-accent);"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3">
              <span class="font-bold" style="color:var(--red-accent);">•</span>
              <span>A generic cross platform app does not feel native to iPhone users.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="font-bold" style="color:var(--red-accent);">•</span>
              <span>An existing iOS app is slow, outdated, or hard to maintain.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="font-bold" style="color:var(--red-accent);">•</span>
              <span>You need an app built specifically for Apple's design standards and app store requirements.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== What We Offer ===== -->
  <section class="py-20 border-t" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--red-accent);">What We Offer</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">
          We build native iOS apps using Apple's own tools and design standards
        </h2>
      </div>

      <div class="grid gap-px border" style="background:var(--line); border-color:var(--line); grid-template-columns:repeat(auto-fit,minmax(260px,1fr));">
        @foreach ([
          'Native iOS app development company experience across industries',
          'Custom iOS app development for iPhone and iPad',
          'iPhone app development using Swift',
          'iOS mobile app development with App Store submission support',
          'Ongoing updates and maintenance',
        ] as $offer)
          <div class="bg-white p-8 transition-colors duration-300 ios-offer-card">
            <div class="w-10 h-10 rounded-full border flex items-center justify-center font-mono text-xs mb-6" style="border-color:var(--line); color:var(--red-accent);">
              ●
            </div>
            <p class="font-medium" style="color:var(--navy-deep);">{{ $offer }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Our Service Capabilities ===== -->
  <section class="py-20 border-t" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--red-accent);">Capabilities</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Our Service Capabilities</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 bg-white border" style="border-color:var(--line);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">What We Deliver</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--red-accent);">◦</span><span>A fully native iOS app for iPhone and iPad</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--red-accent);">◦</span><span>App Store optimized listing and submission support</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--red-accent);">◦</span><span>Integration with Apple specific features and frameworks</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--red-accent);">◦</span><span>Ongoing updates aligned with new iOS releases</span></li>
          </ul>
        </div>

        <div class="p-8 bg-white border" style="border-color:var(--line);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">Key Skill Areas</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--red-accent);">◦</span><span>Native iOS development using Swift</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--red-accent);">◦</span><span>Apple Human Interface Guidelines compliance</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--red-accent);">◦</span><span>App Store submission and review process management</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--red-accent);">◦</span><span>Performance tuning for Apple hardware</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Our Process ===== -->
  <section class="py-24 border-t" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-16 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--red-accent);">Process</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Our Process</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ([
          ['n' => '01', 't' => 'Discovery & Planning', 'd' => "We map the app's core features, audience, and platform needs."],
          ['n' => '02', 't' => 'UI/UX Design', 'd' => "We design the app's screens and flows around real user behavior."],
          ['n' => '03', 't' => 'Development', 'd' => 'We build the app using the right native or cross platform approach.'],
          ['n' => '04', 't' => 'Testing', 'd' => 'We test across real devices and operating system versions.'],
          ['n' => '05', 't' => 'Launch & Support', 'd' => 'We manage app store submission, then support the app after launch.'],
        ] as $step)
          <div class="p-7 border flex flex-col" style="border-color:var(--line); min-height:230px;">
            <div class="w-12 h-12 rounded-full flex items-center justify-center font-mono font-semibold text-white mb-6" style="background:var(--navy-deep);">
              {{ $step['n'] }}
            </div>
            <h3 class="text-lg font-bold mb-2" style="color:var(--navy-deep);">{{ $step['t'] }}</h3>
            <p class="text-sm" style="color:var(--text-muted);">{{ $step['d'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Tools & Technologies ===== -->
  <section class="py-20 border-t" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-10 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--red-accent);">Stack</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Tools & Technologies</h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--red-accent);">Languages</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Swift · Kotlin · Dart</p>
        </div>
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--red-accent);">Frameworks</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Flutter · React Native</p>
        </div>
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--red-accent);">Design</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Figma</p>
        </div>
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--red-accent);">Backend</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Firebase · Node.js</p>
        </div>
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--red-accent);">Testing</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">BrowserStack · TestFlight · Play Console</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Why Choose InTech Nexus ===== -->
  <section class="py-24 border-t" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 items-center overflow-hidden" style="border-radius:2px;">
        <div class="p-10 md:p-16 text-white h-full flex flex-col justify-center" style="background:var(--navy-deep);">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--red-bright);">Why InTech Nexus</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Built for Apple, not bolted onto it</h2>
          <p class="text-white/70 leading-relaxed max-w-md">
            As a team that does Swift app development natively, we build apps that feel like they belong on Apple devices, not like a web page wrapped in an app shell.
          </p>
        </div>
        <div class="h-full min-h-[320px]" style="background-image:url('https://images.unsplash.com/photo-1621330396173-e41b1cafd17f?q=80&w=1200&auto=format&fit=crop'); background-size:cover; background-position:center;"></div>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section class="py-24 border-t" style="border-color:var(--line); background:var(--bg-soft);" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <div class="text-center mb-14">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--red-accent);">FAQ</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Frequently Asked Questions</h2>
      </div>

      <div class="space-y-4">
        @foreach ([
          ['q' => 'Do you build for both iPhone and iPad?', 'a' => 'Yes. Our iOS app development covers both iPhone and iPad, with layouts adjusted for each.'],
          ['q' => 'Do you handle App Store submission?', 'a' => 'Yes. App Store submission and review support is part of our standard process.'],
          ['q' => 'Do you support older iOS versions?', 'a' => 'We will confirm the supported OS range with you during discovery, based on your audience and the features the app needs.'],
          ['q' => 'Can you add Apple specific features like Face ID or Apple Pay?', 'a' => 'Yes. We integrate Apple specific features where they fit the app\'s purpose.'],
        ] as $i => $faq)
          <div class="bg-white border overflow-hidden" style="border-color:var(--line);">
            <button @click="openFaq = openFaq === {{ $i }} ? null : {{ $i }}" class="w-full text-left p-6 font-semibold text-lg flex justify-between items-center focus:outline-none" style="color:var(--navy-deep);">
              <span>{{ $faq['q'] }}</span>
              <span class="text-2xl font-bold ml-4" style="color:var(--red-accent);" x-text="openFaq === {{ $i }} ? '−' : '+'"></span>
            </button>
            <div x-show="openFaq === {{ $i }}" x-collapse class="px-6 pb-6 leading-relaxed" style="color:var(--text-muted);">
              {{ $faq['a'] }}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Call to Action Banner ===== -->
  <section class="py-24 border-t" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
      <div class="p-10 md:p-16 text-white" style="background:var(--navy-deep); border-radius:2px;">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to build a native iOS app?</h2>
        <p class="text-white/70 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
          Book a call, request a proposal, or get a free quote to start.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white transition-all hover:-translate-y-0.5" style="background:var(--red-accent); border-radius:2px;">
            Get a Free Quote
          </a>
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white border border-white/30 hover:border-white hover:bg-white/5 transition-all" style="border-radius:2px;">
            Book a Call
          </a>
        </div>
      </div>
    </div>
  </section>

</div>

<style>
  .ios-offer-card:hover{
    background:var(--navy-deep) !important;
  }
  .ios-offer-card:hover p{
    color:#fff !important;
  }
  .ios-offer-card:hover div{
    border-color:var(--red-bright) !important;
    color:var(--red-bright) !important;
  }
</style>

<script>
  (function () {
    var canvas = document.getElementById('iosNodeCanvas');
    if (!canvas) return;
    var ctx = canvas.getContext('2d');
    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var w, h, nodes = [];
    var NODE_COUNT = 40, LINK_DIST = 150;

    function resize() {
      var header = canvas.closest('header');
      w = canvas.width = header.offsetWidth;
      h = canvas.height = header.offsetHeight;
    }
    function initNodes() {
      nodes = Array.from({ length: NODE_COUNT }, function () {
        return {
          x: Math.random() * w,
          y: Math.random() * h,
          vx: (Math.random() - 0.5) * 0.25,
          vy: (Math.random() - 0.5) * 0.25
        };
      });
    }
    function draw() {
      ctx.clearRect(0, 0, w, h);
      for (var i = 0; i < nodes.length; i++) {
        for (var j = i + 1; j < nodes.length; j++) {
          var a = nodes[i], b = nodes[j];
          var d = Math.hypot(a.x - b.x, a.y - b.y);
          if (d < LINK_DIST) {
            ctx.strokeStyle = 'rgba(217,72,63,' + (0.22 * (1 - d / LINK_DIST)) + ')';
            ctx.lineWidth = 1;
            ctx.beginPath();
            ctx.moveTo(a.x, a.y);
            ctx.lineTo(b.x, b.y);
            ctx.stroke();
          }
        }
      }
      for (var k = 0; k < nodes.length; k++) {
        var n = nodes[k];
        ctx.fillStyle = 'rgba(217,72,63,0.65)';
        ctx.beginPath();
        ctx.arc(n.x, n.y, 1.8, 0, Math.PI * 2);
        ctx.fill();
      }
    }
    function step() {
      for (var k = 0; k < nodes.length; k++) {
        var n = nodes[k];
        n.x += n.vx; n.y += n.vy;
        if (n.x < 0 || n.x > w) n.vx *= -1;
        if (n.y < 0 || n.y > h) n.vy *= -1;
      }
      draw();
      if (!prefersReduced) requestAnimationFrame(step);
    }

    window.addEventListener('resize', function () { resize(); initNodes(); draw(); });
    resize();
    initNodes();
    step();
  })();
</script>
@endsection