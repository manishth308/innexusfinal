@extends('layouts.app')
@section('title', 'Mobile App Development Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .mad-page{
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
<div class="csd-page">

  <!-- ===== Hero ===== -->
  <section class="relative overflow-hidden bg-[#0b0c10] pt-12 pb-20 lg:pt-16 lg:pb-24 min-h-[580px] flex items-center border-b border-white/10">

    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute top-0 right-0 w-full lg:w-[65%] h-full bg-gradient-to-br from-purple-900/60 via-purple-800/30 to-purple-950/10 [clip-path:polygon(75%_0%,100%_0%,100%_100%,0%_100%)] opacity-90" style="filter: drop-shadow(0 0 8px rgba(168, 85, 247, 0.6));"></div>
      <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
        <div class="lg:col-span-7 flex flex-col justify-center">
          <nav class="flex items-center gap-2 text-sm font-medium text-purple-400 mb-6" aria-label="Breadcrumb">
            <a href="{{ url('/services') }}" class="hover:text-purple-300 transition-colors">Services</a>
            <span class="text-gray-500">/</span>
            <span class="text-purple-400">Mobile App Development</span>
          </nav>

          <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
            Fast, native, and <span class="text-purple-400">built to last.</span>
          </h1>
          <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
            Native and cross platform apps built for real use. Fast, stable, and designed around how people actually use their phones.
          </p>
          <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
            Our mobile app development services cover native iOS, native Android, and cross platform builds, all planned around real user behavior rather than a generic feature list. Whether you need a single platform app or one build that runs well on both, we scope the right approach during discovery instead of assuming one answer fits every project.
          </p>

          <div class="flex flex-wrap items-center gap-4">
            <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
              Get a Free Quote
            </a>
            <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
              Book a Call
            </a>
          </div>
        </div>

        <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
          <div class="relative w-full max-w-[520px] aspect-[4/3] lg:aspect-square">
            <img 
              src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1000&auto=format&fit=crop" 
              alt="Mobile App Development - InTech Nexus" 
              class="w-full h-full object-cover object-center relative z-10 border border-white/10 shadow-2xl"
            />
            <div class="absolute inset-0 z-20 bg-gradient-to-r from-[#0b0c10] via-transparent to-transparent opacity-90 pointer-events-none"></div>
            <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent opacity-40 pointer-events-none"></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Who This Is For & Problems We Solve Section -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 bg-white/[0.03] border border-white/10 flex flex-col justify-between">
          <div>
            <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
              <span class="w-2 h-2 rounded-full bg-purple-400"></span>
              Who This Is For
            </h2>
            <p class="text-gray-300 leading-relaxed text-base">
              Businesses launching a new mobile app, or replacing one that has become slow, outdated, or hard to maintain.
            </p>
          </div>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10 flex flex-col justify-between">
          <div>
            <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
              <span class="w-2 h-2 rounded-full bg-purple-400"></span>
              Problems We Solve
            </h2>
            <ul class="space-y-3 text-gray-300">
              <li class="flex items-start gap-3">
                <span class="text-purple-400 font-bold">•</span>
                <span>An existing app is slow, crashes often, or looks outdated.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-purple-400 font-bold">•</span>
                <span>You need to launch on iOS and Android without building everything twice.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-purple-400 font-bold">•</span>
                <span>Mobile has been an afterthought and it shows.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- What We Offer -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Offer</h2>
        <p class="text-gray-400 text-lg">We build mobile apps from start to finish</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ([
          'Native iOS and Android development',
          'Cross platform builds',
          'App upgrades and speed improvements',
          'Push notifications, payments, and outside integrations',
          'Fitness, food delivery, and other consumer app builds',
          'App store launch and ongoing support',
        ] as $offer)
          <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[140px]">
            <p class="text-base font-medium text-white group-hover:text-purple-400 transition-colors">{{ $offer }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Service Capabilities -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Service Capabilities</h2>
        <p class="text-gray-400 text-lg">What we deliver and where we excel.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 bg-white/[0.03] border border-white/10">
          <h3 class="text-xl font-bold text-white mb-4">What We Deliver</h3>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>A fully built, app store ready mobile app</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Native or cross platform builds depending on your needs</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Push notifications, payments, and third party integrations</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Ongoing updates and performance support after launch</span>
            </li>
          </ul>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10">
          <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Native iOS and Android development</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Cross platform development with Flutter and React Native</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Mobile UI and UX design</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>App store submission and release management</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Process -->
  <section class="py-24 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="max-w-3xl mb-16">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Our Process</h2>
        <p class="text-gray-400 text-lg leading-relaxed">
          A structured, transparent approach to mobile app development from discovery to launch and beyond.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ([
          ['n' => '01', 't' => 'Discovery & Planning', 'd' => "We map the app's core features, audience, and platform needs."],
          ['n' => '02', 't' => 'UI/UX Design', 'd' => "We design the app's screens and flows around real user behavior."],
          ['n' => '03', 't' => 'Development', 'd' => 'We build the app using the right native or cross platform approach.'],
          ['n' => '04', 't' => 'Testing', 'd' => 'We test across real devices and operating system versions.'],
          ['n' => '05', 't' => 'Launch & Support', 'd' => 'We manage app store submission, then support the app after launch.'],
        ] as $step)
          <div class="p-7 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col">
            <div class="w-12 h-12 rounded-full flex items-center justify-center font-mono font-semibold text-white mb-6 bg-purple-600">
              {{ $step['n'] }}
            </div>
            <h3 class="text-lg font-bold mb-2 text-white">{{ $step['t'] }}</h3>
            <p class="text-sm text-gray-400">{{ $step['d'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Tools / Technologies -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Tools / Technologies</h2>
        <p class="text-gray-400 text-lg">The stack we work with on mobile app development projects.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[40%_60%] gap-8 lg:gap-16">
        <div>
          @php
              $techStack = [
                  [
                      'name' => 'Languages',
                      'technologies' => [
                          ['name' => 'Swift', 'image' => asset('images/tech-logo/Swift.png')],
                          ['name' => 'Kotlin', 'image' => asset('images/tech-logo/Kotlin.png')],
                          ['name' => 'Dart', 'image' => asset('images/tech-logo/Dart.png')],
                      ],
                  ],
                  [
                      'name' => 'Frameworks',
                      'technologies' => [
                          ['name' => 'Flutter', 'image' => asset('images/tech-logo/Flutter.png')],
                          ['name' => 'React Native', 'image' => asset('images/tech-logo/React.png')],
                      ],
                  ],
                  [
                      'name' => 'Design',
                      'technologies' => [
                          ['name' => 'Figma', 'image' => asset('images/tech-logo/Figma.png')],
                      ],
                  ],
                  [
                      'name' => 'Backend',
                      'technologies' => [
                          ['name' => 'Firebase', 'image' => asset('images/tech-logo/Firebase.png')],
                          ['name' => 'Node.js', 'image' => asset('images/tech-logo/Node.js.png')],
                      ],
                  ],
                  [
                      'name' => 'Testing & Launch',
                      'technologies' => [
                          ['name' => 'BrowserStack', 'image' => asset('images/tech-logo/BrowserStack.png')],
                      ],
                  ],
              ];
          @endphp

          <div class="flex flex-col gap-8">
            @foreach ($techStack as $index => $category)
              <div class="tech-category flex items-center gap-3 cursor-pointer" data-index="{{ $index }}">
                <span class="tech-indicator block w-12 h-[3px] bg-purple-400 shrink-0 opacity-0 transition-opacity duration-300"></span>
                <span class="tech-name text-lg md:text-xl font-semibold text-white transition-colors duration-300">
                  {{ $category['name'] }}
                </span>
              </div>
            @endforeach
          </div>
        </div>

        <div id="tech-right" class="relative lg:pr-16">
          <h3 class="text-2xl md:text-3xl font-bold text-white leading-[1.2] mb-[30px]">
            {{ $techStack[0]['name'] }}
          </h3>

          <div class="grid grid-cols-2 sm:grid-cols-3 gap-5" id="tech-grid">
            @php
                $firstCategory = $techStack[0]['technologies'];
            @endphp

            @foreach ($firstCategory as $tech)
              <div class="group border border-white/10 bg-white/[0.03] backdrop-blur-sm h-[100px] flex flex-col items-center justify-center gap-2 p-3 rounded-lg hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300">
                <img src="{{ $tech['image'] }}" alt="{{ $tech['name'] }}" class="max-h-[50px] max-w-full object-contain">
                <span class="text-xs text-gray-300 group-hover:text-purple-400 transition-colors">{{ $tech['name'] }}</span>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  @push('scripts')
  <script>
    window.techStackData = @json($techStack);
  </script>
  <script>
    (function () {
      const categories = document.querySelectorAll('.tech-category');
      const rightHeading = document.querySelector('#tech-right h3');
      const techGrid = document.getElementById('tech-grid');
      const data = window.techStackData;

      if (!categories.length || !rightHeading || !techGrid || !data) return;

      function setActive(index) {
        categories.forEach((cat, idx) => {
          const isActive = Number(cat.getAttribute('data-index')) === index;
          const indicator = cat.querySelector('.tech-indicator');
          const name = cat.querySelector('.tech-name');

          if (isActive) {
            indicator.classList.remove('opacity-0');
            indicator.classList.add('opacity-100');
            name.classList.remove('text-white', 'font-normal');
            name.classList.add('text-purple-400', 'font-medium');
          } else {
            indicator.classList.remove('opacity-100');
            indicator.classList.add('opacity-0');
            name.classList.remove('text-purple-400', 'font-medium');
            name.classList.add('text-white', 'font-normal');
          }
        });

        const selected = data[index];
        if (!selected) return;

        rightHeading.textContent = selected.name;

        techGrid.innerHTML = selected.technologies
            .map(
                (tech) => `
                    <div class="group border border-white/10 bg-white/[0.03] backdrop-blur-sm h-[100px] flex flex-col items-center justify-center gap-2 p-3 rounded-lg hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300">
                        <img src="${tech.image}" alt="${tech.name}" class="max-h-[50px] max-w-full object-contain">
                        <span class="text-xs text-gray-300 group-hover:text-purple-400 transition-colors">${tech.name}</span>
                    </div>
                `
            )
            .join('');
      }

      categories.forEach((cat) => {
        cat.addEventListener('click', function () {
          const index = Number(this.getAttribute('data-index'));
          setActive(index);
        });
      });

      setActive(0);
    })();
  </script>
  @endpush

  <!-- Why Choose InTech Nexus -->
  <section class="relative py-24 bg-[#0b0c10] border-t border-white/5">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
    <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 items-stretch">
        <div class="p-10 md:p-16 text-white flex flex-col justify-center">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Design isn't bolted on at the end</h2>
          <p class="text-gray-300 leading-relaxed max-w-md">
            Mobile app work runs through our UI/UX Design team from day one. The interface is not added at the end. It is part of the same process, then checked by our QA & Testing team before launch.
          </p>
        </div>
        <div class="min-h-[320px] bg-[url('https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center"></div>
      </div>
    </div>
  </section>

  <!-- Frequently Asked Questions -->
  <section class="py-24 bg-[#0b0c10] border-t border-white/5" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Frequently Asked Questions</h2>

      <div class="space-y-4">
        @foreach ([
          ['q' => 'Should we build native or cross platform?', 'a' => 'It depends on your speed needs, budget, and long term plan. We will walk through the choices during discovery instead of picking one by default.'],
          ['q' => 'Do you support the app after launch?', 'a' => 'Yes. Ongoing support, updates, and performance checks are part of our process.'],
          ['q' => 'How do you decide between native and cross platform?', 'a' => 'We look at your budget, timeline, and long term plans, then recommend the approach that fits best during discovery.'],
          ['q' => 'Do you support the app after it launches?', 'a' => 'Yes. Ongoing updates, bug fixes, and performance monitoring are available as part of our standard support.'],
        ] as $i => $faq)
          <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
            <button @click="openFaq = openFaq === {{ $i }} ? null : {{ $i }}" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
              <span>{{ $faq['q'] }}</span>
              <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === {{ $i }} ? '−' : '+'"></span>
            </button>
            <div x-show="openFaq === {{ $i }}" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
              {{ $faq['a'] }}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Call to Action Banner -->
  <section class="py-24 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
      <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)] hover:shadow-[0_0_60px_rgba(168,85,247,0.35)] transition-all duration-300">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
          Ready to build your mobile app?
        </h2>
        <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
          Book a call, request a proposal, or get a free quote to begin.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
            Get a Free Quote
          </a>
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
            Book a Call
          </a>
        </div>
      </div>
    </div>
  </section>

  </div>

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
              ctx.strokeStyle = 'rgba(168,85,247,' + (0.22 * (1 - d / LINK_DIST)) + ')';
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
          ctx.fillStyle = 'rgba(168,85,247,0.65)';
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