@extends('layouts.app')
@section('title', 'Mobile App Development Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .mad-page{
    --navy-deep:#0B1B3D;
    --navy-darker:#071227;
    --blue-accent:#3D6BFF;
    --blue-bright:#5A8CFF;
    --bg-soft:#F3F5FA;
    --text-muted:#6B7280;
    --line:#E3E7F0;
    font-family:'Inter',system-ui,sans-serif;
  }
  .mad-page h1, .mad-page h2, .mad-page h3, .mad-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .mad-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }
  #madNodeCanvas{
    position:absolute;inset:0;width:100%;height:100%;opacity:0.55;pointer-events:none;
  }
  @media (prefers-reduced-motion: reduce){
    .mad-page *{animation:none!important;transition:none!important;}
  }
</style>
@endpush

@section('content')
<div class="mad-page bg-white">

  <!-- ===== Hero ===== -->
  <header class="relative overflow-hidden text-white" style="background: radial-gradient(ellipse 900px 500px at 78% 20%, rgba(61,107,255,0.28), transparent 60%), var(--navy-deep);">
    <canvas id="madNodeCanvas"></canvas>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-14 pb-24 lg:pt-16 lg:pb-28">
      <!-- Breadcrumb -->
      <nav class="flex items-center gap-2 text-sm font-medium mb-8" style="color:var(--blue-bright);" aria-label="Breadcrumb">
        <a href="{{ url('/services') }}" class="hover:text-white transition-colors">Services</a>
        <span class="text-white/30">/</span>
        <span class="text-white/70">Mobile App Development</span>
      </nav>

      <div class="max-w-2xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">
          Mobile App Development
        </span>
        <h1 class="text-4xl sm:text-4xl lg:text-[52px] font-bold leading-[1.1] mt-5 mb-6">
          Fast, native, and <span style="color:var(--blue-bright);">built to last.</span>
        </h1>
        <p class="text-lg text-white/70 leading-relaxed mb-4">
          Native and cross platform apps built for real use. Fast, stable, and designed around how people actually use their phones.
        </p>
        <p class="text-base text-white/60 leading-relaxed mb-10">
          Our mobile app development services cover native iOS, native Android, and cross platform builds, all planned around real user behavior rather than a generic feature list. Whether you need a single platform app or one build that runs well on both, we scope the right approach during discovery instead of assuming one answer fits every project.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white transition-all hover:-translate-y-0.5" style="background:var(--blue-accent); border-radius:2px;">
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
            <span class="w-2 h-2 rounded-full" style="background:var(--blue-accent);"></span>
            Who This Is For
          </h2>
          <p class="leading-relaxed text-base" style="color:var(--text-muted);">
            Businesses launching a new mobile app, or replacing one that has become slow, outdated, or hard to maintain.
          </p>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-2 h-2 rounded-full" style="background:var(--blue-accent);"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3">
              <span class="font-bold" style="color:var(--blue-accent);">•</span>
              <span>An existing app is slow, crashes often, or looks outdated.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="font-bold" style="color:var(--blue-accent);">•</span>
              <span>You need to launch on iOS and Android without building everything twice.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="font-bold" style="color:var(--blue-accent);">•</span>
              <span>Mobile has been an afterthought and it shows.</span>
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
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">What We Offer</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">
          We build mobile apps from start to finish
        </h2>
        <p class="mt-3 text-base" style="color:var(--text-muted);">
          Strategy, design, development, and support after launch.
        </p>
      </div>

      <div class="grid gap-px border" style="background:var(--line); border-color:var(--line); grid-template-columns:repeat(auto-fit,minmax(260px,1fr));">
        @foreach ([
          'Native iOS and Android development',
          'Cross platform builds',
          'App upgrades and speed improvements',
          'Push notifications, payments, and outside integrations',
          'Fitness, food delivery, and other consumer app builds',
          'App store launch and ongoing support',
        ] as $offer)
          <div class="bg-white p-8 transition-colors duration-300 mad-offer-card">
            <div class="w-10 h-10 rounded-full border flex items-center justify-center font-mono text-xs mb-6" style="border-color:var(--line); color:var(--blue-accent);">
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
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Capabilities</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Our Service Capabilities</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 bg-white border" style="border-color:var(--line);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">What We Deliver</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>A fully built, app store ready mobile app</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Native or cross platform builds depending on your needs</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Push notifications, payments, and third party integrations</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Ongoing updates and performance support after launch</span></li>
          </ul>
        </div>

        <div class="p-8 bg-white border" style="border-color:var(--line);">
          <h3 class="text-xl font-bold mb-5" style="color:var(--navy-deep);">Key Skill Areas</h3>
          <ul class="space-y-3 text-sm" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Native iOS and Android development</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Cross platform development with Flutter and React Native</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>Mobile UI and UX design</span></li>
            <li class="flex items-start gap-3"><span style="color:var(--blue-accent);">◦</span><span>App store submission and release management</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Our Process ===== -->
  <section class="py-24 border-t" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-16 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Process</span>
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
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Stack</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Tools & Technologies</h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">Languages</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Swift · Kotlin · Dart</p>
        </div>
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">Frameworks</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Flutter · React Native</p>
        </div>
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">Design</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Figma</p>
        </div>
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">Backend</p>
          <p class="text-sm font-medium" style="color:var(--navy-deep);">Firebase · Node.js</p>
        </div>
        <div class="bg-white p-6 border" style="border-color:var(--line);">
          <p class="font-mono text-xs uppercase tracking-wider mb-3" style="color:var(--blue-accent);">Testing</p>
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
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">Why InTech Nexus</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Design isn't bolted on at the end</h2>
          <p class="text-white/70 leading-relaxed max-w-md">
            Mobile app work runs through our UI/UX Design team from day one. The interface is not added at the end. It is part of the same process, then checked by our QA & Testing team before launch.
          </p>
        </div>
        <div class="h-full min-h-[320px]" style="background-image:url('https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1200&auto=format&fit=crop'); background-size:cover; background-position:center;"></div>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section class="py-24 border-t" style="border-color:var(--line); background:var(--bg-soft);" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <div class="text-center mb-14">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">FAQ</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Frequently Asked Questions</h2>
      </div>

      <div class="space-y-4">
        @foreach ([
          ['q' => 'Should we build native or cross platform?', 'a' => 'It depends on your speed needs, budget, and long term plan. We will walk through the choices during discovery instead of picking one by default.'],
          ['q' => 'Do you support the app after launch?', 'a' => 'Yes. Ongoing support, updates, and performance checks are part of our process.'],
          ['q' => 'How do you decide between native and cross platform?', 'a' => 'We look at your budget, timeline, and long term plans, then recommend the approach that fits best during discovery.'],
          ['q' => 'Do you support the app after it launches?', 'a' => 'Yes. Ongoing updates, bug fixes, and performance monitoring are available as part of our standard support.'],
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

  <!-- ===== Call to Action Banner ===== -->
  <section class="py-24 border-t" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
      <div class="p-10 md:p-16 text-white" style="background:var(--navy-deep); border-radius:2px;">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to build your mobile app?</h2>
        <p class="text-white/70 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
          Book a call, request a proposal, or get a free quote to get started.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white transition-all hover:-translate-y-0.5" style="background:var(--blue-accent); border-radius:2px;">
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
  .mad-offer-card:hover{
    background:var(--navy-deep) !important;
  }
  .mad-offer-card:hover p{
    color:#fff !important;
  }
  .mad-offer-card:hover div{
    border-color:var(--blue-bright) !important;
    color:var(--blue-bright) !important;
  }
</style>

<script>
  (function () {
    var canvas = document.getElementById('madNodeCanvas');
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
            ctx.strokeStyle = 'rgba(90,140,255,' + (0.22 * (1 - d / LINK_DIST)) + ')';
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
        ctx.fillStyle = 'rgba(90,140,255,0.65)';
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