@extends('layouts.app')
@section('title', 'UI UX Design Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .ux-page{
    font-family:'Inter',system-ui,sans-serif;
  }
  .ux-page h1, .ux-page h2, .ux-page h3, .ux-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .ux-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }
</style>
@endpush

@section('content')
<div class="ux-page">

  <!-- Hero / Banner Section -->
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
            <span class="text-purple-400">UI/UX Design</span>
          </nav>

          <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
            UI UX Design Services That Turn Good Ideas Into <span class="text-purple-400">Products People Use</span>
          </h1>
          <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
            Product design based on how people actually behave, not just what looks nice in a mockup. Our UI UX design team designs the experience that decides if a product gets used.
          </p>
          <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
            Our UI UX design services cover websites, mobile apps, and SaaS products, all grounded in real user research rather than guesswork. Every project moves through the same structured process, from early research through to a design system your development team can build from directly.
          </p>

          <div class="flex flex-wrap items-center gap-4">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
              Get a Free Quote
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
              Book a Call
            </a>
          </div>
        </div>

        <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
          <div class="relative w-full max-w-[520px] aspect-[4/3] lg:aspect-square">
            <img
              src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?q=80&w=1000&auto=format&fit=crop"
              alt="UI UX Design - InTech Nexus"
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
              Product teams launching something new, or businesses whose product has usability issues that are costing them users.
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
              <li class="flex items-start gap-3"><span class="text-purple-400 font-bold">•</span><span>Users drop off during sign up or key steps.</span></li>
              <li class="flex items-start gap-3"><span class="text-purple-400 font-bold">•</span><span>The interface feels outdated or looks different from screen to screen.</span></li>
              <li class="flex items-start gap-3"><span class="text-purple-400 font-bold">•</span><span>Design choices are being made without any user research.</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service Cards Grid -->
  <section class="py-24 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="max-w-3xl mb-16">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Offer</h2>
        <p class="text-gray-400 text-lg leading-relaxed">Explore the specific UI UX design services we offer.</p>
      </div>

      @php
          $childServices = [
              [
                  'title' => 'UI UX Design Services',
                  'slug' => 'ui-ux-design-services',
                  'description' => 'Our core design offering — research, wireframes, visual design, and prototyping in one structured process.',
              ],
              [
                  'title' => 'Web UI UX Design',
                  'slug' => 'web-ui-ux-design',
                  'description' => 'Interface design for websites and web apps, built around how visitors actually browse and convert.',
              ],
              [
                  'title' => 'Mobile App UI UX Design',
                  'slug' => 'mobile-app-ui-ux-design',
                  'description' => 'Native-feeling mobile interfaces designed around touch, gestures, and platform conventions.',
              ],
              [
                  'title' => 'SaaS UI UX Design',
                  'slug' => 'saas-ui-ux-design',
                  'description' => 'Dashboard and product design for SaaS platforms, focused on clarity at scale as features grow.',
              ],
              [
                  'title' => 'Product Design',
                  'slug' => 'product-design',
                  'description' => 'End-to-end product design from early concept through a design system ready for development.',
              ],
          ];
      @endphp

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($childServices as $service)
          <a href="{{ url('/'.$service['slug']) }}" class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
            <div>
              <h3 class="text-xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">{{ $service['title'] }}</h3>
              <p class="text-gray-400 leading-relaxed text-sm">{{ $service['description'] }}</p>
            </div>
            <span class="text-purple-400 text-sm font-semibold mt-6 inline-flex items-center gap-1 group-hover:gap-2 transition-all">
              Learn more
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </span>
          </a>
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
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>A complete user experience design, from research to final screens</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>A reusable design system and component library</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Interactive prototypes ready for user testing</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Developer ready design files for handoff</span></li>
          </ul>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10">
          <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>User research and usability testing</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Information architecture and wireframing</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Visual and interaction design</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Design systems for scaling products</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Process -->
  <section class="relative py-24 bg-[#0b0c10] border-t border-white/5">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
    <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
      <div class="max-w-3xl mb-16">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">From Complexity to Clarity</h2>
        <p class="text-gray-400 text-lg leading-relaxed">
          A structured design process from research through developer handoff.
        </p>
      </div>

      <div class="space-y-5">
        @foreach ([
          ['n' => '01', 't' => 'Research & Discovery', 'd' => 'We learn about your users, goals, and current pain points.'],
          ['n' => '02', 't' => 'Wireframing', 'd' => 'We map out the structure and flow of each screen.'],
          ['n' => '03', 't' => 'Visual Design', 'd' => 'We design the interface using a clear, consistent visual system.'],
          ['n' => '04', 't' => 'Prototyping', 'd' => 'We build interactive prototypes to test before development.'],
          ['n' => '05', 't' => 'Usability Testing & Handoff', 'd' => 'We test with real users, then hand off developer ready files.'],
        ] as $step)
          <div class="flex flex-col sm:flex-row sm:items-center gap-6 p-6 rounded-xl border border-white/10 bg-white/[0.03]">
            <div class="font-mono text-3xl font-bold flex-shrink-0 text-purple-400">{{ $step['n'] }}</div>
            <div>
              <h3 class="text-lg font-bold text-white mb-1">{{ $step['t'] }}</h3>
              <p class="text-sm text-gray-400">{{ $step['d'] }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-3xl">
        @foreach ([
          'A complete user experience design, from research to final screens',
          'A reusable design system and component library',
          'Interactive prototypes ready for user testing',
          'Developer ready design files for handoff',
        ] as $outcome)
          <div class="flex items-start gap-3">
            <span class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold bg-purple-600 text-white">✓</span>
            <span class="text-sm text-gray-300">{{ $outcome }}</span>
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
        <p class="text-gray-400 text-lg">The stack we work with on UI UX design projects.</p>
      </div>

      <div class="tech-split-grid">
        <div>
          @php
              $techStack = [
                  [
                      'name' => 'Design',
                      'technologies' => [
                          ['name' => 'Figma', 'image' => asset('images/tech-logo/Figma.png')],
                          ['name' => 'Adobe XD', 'image' => asset('images/tech-logo/Adobe XD.png')],
                          ['name' => 'Sketch', 'image' => asset('images/tech-logo/Sketch.png')],
                      ],
                  ],
                  [
                      'name' => 'Prototyping',
                      'technologies' => [
                          ['name' => 'Figma', 'image' => asset('images/tech-logo/Figma.png')],
                          ['name' => 'Principle', 'image' => asset('images/tech-logo/Principle.png')],
                      ],
                  ],
                  [
                      'name' => 'User Research',
                      'technologies' => [
                          ['name' => 'Maze', 'image' => asset('images/tech-logo/Maze.png')],
                          ['name' => 'UserTesting', 'image' => asset('images/tech-logo/UserTesting.png')],
                      ],
                  ],
                  [
                      'name' => 'Developer Handoff',
                      'technologies' => [
                          ['name' => 'Figma Dev Mode', 'image' => asset('images/tech-logo/Figma.png')],
                          ['name' => 'Zeplin', 'image' => asset('images/tech-logo/Zeplin.png')],
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
              <div class="group tech-card">
                <div class="tech-card-icon-frame">
                  <img src="{{ $tech['image'] }}" alt="{{ $tech['name'] }}" class="tech-card-icon">
                </div>

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
                    <div class="group tech-card">
                        <div class="tech-card-icon-frame">
                            <img src="${tech.image}" alt="${tech.name}" class="tech-card-icon">
                        </div>

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
      <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-10">
        <div class="text-white flex flex-col justify-center">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Design That Stays Close to What Gets Built</h2>
          <p class="text-gray-300 leading-relaxed max-w-md">
            Design work does not stop at handoff. Our design team stays close to Web Development and Mobile App Development, so what gets designed is what actually gets built.
          </p>
        </div>
        <div class="relative w-full aspect-[4/3] overflow-hidden border border-white/10 shadow-2xl">
          <img
            src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?q=80&w=1200&auto=format&fit=crop"
            alt="Why Choose InTech Nexus"
            class="w-full h-full object-cover object-center"
          />
        </div>
      </div>
    </div>
  </section>

  <!-- Frequently Asked Questions -->
  <section class="py-24 bg-[#0b0c10] border-t border-white/5" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Frequently Asked Questions</h2>

      <div class="space-y-4">
        @foreach ([
          ['q' => 'Do you do real user research, or just follow best practices?', 'a' => 'Both. We combine known UX rules with direct research and testing when the project calls for it.'],
          ['q' => 'Can you redesign part of a product without rebuilding it all?', 'a' => 'Yes. A focused redesign of one flow or screen is common, and often all that is needed.'],
          ['q' => 'Do you design for web, mobile, or both?', 'a' => 'Both. We design for web through Web UI UX Design and for mobile through Mobile App UI UX Design, using the same research driven process.'],
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
          Ready to design a product people actually enjoy using?
        </h2>
        <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
          Book a call, request a proposal, or get a free quote to begin.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
            Get a Free Quote
          </a>
          <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
            Book a Call
          </a>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection