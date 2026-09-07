@extends('layouts.app')
@section('title', 'SaaS UI UX Design Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .csd-page{
    font-family:'Inter',system-ui,sans-serif;
  }
  .csd-page h1, .csd-page h2, .csd-page h3, .csd-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .csd-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  .cap-card{
    border:1px solid rgba(168,85,247,0.30);
    background:rgba(255,255,255,0.03);
    color:#fff;
    cursor:pointer;
    transition:border-color .25s ease, transform .25s ease, background-color .25s ease;
  }
  .cap-card:hover, .cap-card.is-open{
    border-color:#c084fc;
    background:rgba(255,255,255,0.06);
    transform:translateY(-2px);
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
  .cap-card .cap-chevron{ transition:transform .25s ease; color:#c084fc; }
  .cap-card.is-open .cap-chevron{ transform:rotate(45deg); }

  @media (prefers-reduced-motion: reduce){
    .csd-page *{ animation:none!important; transition:none!important; }
  }
</style>
@endpush

@section('content')

<div class="csd-page">

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
          <a href="{{ url('/services/ui-ux-design') }}" class="hover:text-purple-300 transition-colors">UI/UX Design</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">SaaS UI UX Design</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          SaaS UI UX Design That Stays Clear as <span class="text-purple-400">Your Product Grows</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          SaaS UI UX design services for software teams that need a product interface that stays clear as features and users grow.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          As part of our wider UI/UX Design practice, we design SaaS interfaces with a proper system and component library from the start, so new features can be added later without the product becoming cluttered or inconsistent for existing users.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
            Get a Free Quote
          </a>
          <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
            Book a Call
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
        <div class="relative w-full max-w-[520px] aspect-[4/3] lg:aspect-square">
          <img
            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop"
            alt="SaaS UI UX Design - InTech Nexus"
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
            SaaS teams whose product has grown more complex than the original design can support.
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
              <span>The product has grown more complex, but the interface has not kept up.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>New users find the dashboard confusing or overwhelming.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Design decisions are being made feature by feature, without an overall system.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Core Capabilities (interactive expandable grid) -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5" x-data="{ openCap: null }">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Offer</h2>
      <p class="text-gray-400 text-lg">We design SaaS interfaces built to stay clear as the product grows.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      @foreach ([
        ['t' => 'SaaS Product Design with a Scalable Design System', 'd' => 'SaaS product design with a scalable design system and component library that keeps the interface consistent as features grow.'],
        ['t' => 'SaaS UX Design Agency Experience Across B2B and B2C Products', 'd' => 'SaaS UX design agency experience across B2B and B2C products, with designs adapted to different user types and workflows.'],
        ['t' => 'Dashboard UI Design for Data Heavy Products', 'd' => 'Dashboard UI design for data heavy products, with layouts that make complex information easy to scan and act on.'],
        ['t' => 'B2B SaaS Design for Complex, Multi User Platforms', 'd' => 'B2B SaaS design for complex, multi user platforms, with clear roles, permissions, and workflow specific interfaces.'],
        ['t' => 'Software Interface Design Built for Long Term Growth', 'd' => 'Software interface design built for long term growth, so new features can be added without cluttering the existing experience.'],
      ] as $i => $offer)
        <div class="cap-card rounded-xl p-6" :class="{ 'is-open': openCap === {{ $i }} }" @click="openCap = openCap === {{ $i }} ? null : {{ $i }}">
          <div class="flex items-start justify-between gap-3">
            <p class="font-semibold text-lg text-white">{{ $offer['t'] }}</p>
            <span class="cap-chevron font-mono text-lg flex-shrink-0">+</span>
          </div>
          <div class="cap-detail text-sm leading-relaxed text-gray-400">
            {{ $offer['d'] }}
          </div>
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
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>A scalable SaaS design system and component library</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Dashboard and data heavy interface design</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Onboarding flows for new users</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Efficient, dense views for power users</span></li>
        </ul>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>SaaS product design at scale</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Dashboard and data visualization design</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>B2B and B2C SaaS design experience</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Design system architecture</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Our Process (with outcomes grid) -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Our Process</h2>
      <p class="text-gray-400 text-lg leading-relaxed">From complexity to clarity, in structured, reviewable stages.</p>
    </div>

    <div class="space-y-6">
      @foreach ([
        ['n' => '01', 't' => 'Research & Discovery', 'd' => 'We learn about your users, goals, and current pain points.'],
        ['n' => '02', 't' => 'Wireframing', 'd' => 'We map out the structure and flow of each screen.'],
        ['n' => '03', 't' => 'Visual Design', 'd' => 'We design the interface using a clear, consistent visual system.'],
        ['n' => '04', 't' => 'Prototyping', 'd' => 'We build interactive prototypes to test before development.'],
        ['n' => '05', 't' => 'Usability Testing & Handoff', 'd' => 'We test with real users, then hand off developer ready files.'],
      ] as $step)
        <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
          <span class="text-3xl font-extrabold text-purple-400">{{ $step['n'] }}</span>
          <div>
            <h3 class="text-2xl font-bold text-white mb-2">{{ $step['t'] }}</h3>
            <p class="text-gray-300">{{ $step['d'] }}</p>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-3xl">
      @foreach ([
        'A scalable SaaS design system and component library',
        'Dashboard and data heavy interface design',
        'Onboarding flows for new users',
        'Efficient, dense views for power users',
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
        <p class="text-gray-400 text-lg">The stack we work with on SaaS interface design.</p>
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
            name.classList.remove('purple-400', 'font-medium');
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
<section class="relative py-24 bg-[#0b0c10] border-t border-white/5 why-choose-section">
  <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
  <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
      <div class="p-10 md:p-16 text-white flex flex-col justify-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">A system that keeps your SaaS interface consistent as it grows</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          SaaS products keep growing after launch. We design with a proper system and component library from the start, so new features can be added without the interface becoming inconsistent or cluttered.
        </p>
      </div>
      <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop" alt="Why Choose InTech Nexus" class="why-choose-image">
      </div>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Frequently Asked Questions</h2>

    <div class="space-y-4">
      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you redesign our dashboard without disrupting current users?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We can plan a phased redesign that improves the interface without a jarring, all at once change for existing users.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Do you design for both new users and power users?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We design onboarding for new users and efficient, dense views for power users, since SaaS products usually need both.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you redesign our dashboard without disrupting current users?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We can plan a phased redesign that improves the interface without a jarring, all at once change for existing users.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Do you design for both new and experienced users?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We design onboarding for new users and efficient, dense views for power users, since most SaaS products need both.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Banner -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)] hover:shadow-[0_0_60px_rgba(168,85,247,0.35)] transition-all duration-300">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
        Ready to design a SaaS interface built to scale?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Book a call, request a proposal, or get a free quote to begin.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
          Get a Free Quote
        </a>
        <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
          Book a Call
        </a>
      </div>
    </div>
  </div>
</section>

</div>

@endsection
