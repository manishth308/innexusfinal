@extends('layouts.app')
@section('title', 'Web Application Development Services - InTech Nexus')

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

  /* Capability cards (accordion) */
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
          <a href="{{ url('/web-development') }}" class="hover:text-purple-300 transition-colors">Web Development</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">Web Application Development</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Web Application Development for Platforms That Go <span class="text-purple-400">Beyond a Website</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          Web application development services for businesses that need more than a website, a full custom platform that runs in the browser.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          As part of our wider <strong class="text-purple-400">Web Development</strong> practice, we build custom web applications for businesses that need real functionality in the browser, like dashboards, portals, and tools with user accounts and complex logic, not just informational pages.
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
            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop"
            alt="Web Application Development - InTech Nexus"
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
            Businesses building tools, dashboards, or platforms that need real functionality beyond a standard website.
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
              <span>A standard website cannot handle the logic or user accounts your project needs.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>You need a browser based platform that works like software, not just a set of pages.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>The project involves complex features that a template or page builder cannot support.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- What We Offer (accordion) -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5" x-data="{ openCap: null }">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Offer</h2>
      <p class="text-gray-400 text-lg">We design and build custom web applications from the ground up.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      @foreach ([
        ['t' => 'Custom Web Application Development for Dashboards and Platforms', 'd' => 'Custom web application development for dashboards, portals, and internal tools built around your workflow.'],
        ['t' => 'Web App Development Company Experience', 'd' => 'Web app development company experience across industries, with focus on performance and scalability.'],
        ['t' => 'Progressive Web Application Development', 'd' => 'Progressive web application development for app like performance and offline capable experiences.'],
        ['t' => 'Web Based Software Development with Secure User Accounts', 'd' => 'Web based software development with secure user accounts, roles, and permissions built in.'],
        ['t' => 'SaaS Web Application Development', 'd' => 'SaaS web application development for subscription platforms with billing and multi tenancy support.'],
      ] as $i => $offer)
        <div class="cap-card rounded-xl p-6"
             role="button"
             tabindex="0"
             :class="{ 'is-open': openCap === {{ $i }} }"
             @click="openCap = openCap === {{ $i }} ? null : {{ $i }}"
             @keydown.enter="openCap = openCap === {{ $i }} ? null : {{ $i }}"
             @keydown.space.prevent="openCap = openCap === {{ $i }} ? null : {{ $i }}">
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
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Our Service Capabilities</h2>
      <p class="text-gray-400 text-lg">What we deliver and where we excel.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">What We Deliver</h3>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>A fully built, custom web application</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Secure user accounts and role based access</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>A backend built to handle real business logic</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>An architecture ready to scale as usage grows</span></li>
        </ul>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Full stack web application development</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Database and backend architecture</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>User authentication and access control</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>API development and integrations</span></li>
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
        ['n' => '01', 't' => 'Discovery & Planning', 'd' => 'We map your goals, content, and site structure.'],
        ['n' => '02', 't' => 'Wireframes & Sitemap', 'd' => 'We plan the layout and navigation before any design work begins.'],
        ['n' => '03', 't' => 'Design', 'd' => 'We design pages built around clarity and conversion.'],
        ['n' => '04', 't' => 'Development', 'd' => 'We build the site on a fast, reliable, and search friendly foundation.'],
        ['n' => '05', 't' => 'QA, Launch & Support', 'd' => 'We test thoroughly, launch, and support the site afterward.'],
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
        'A fully built, custom web application',
        'Secure user accounts and role based access',
        'A backend built to handle real business logic',
        'An architecture ready to scale as usage grows',
      ] as $outcome)
        <div class="flex items-start gap-3">
          <span class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold bg-purple-600 text-white">✓</span>
          <span class="text-sm text-gray-300">{{ $outcome }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Tools / Technologies Section -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Tools / Technologies</h2>
      <p class="text-gray-400 text-lg">What we build with and where we excel.</p>
    </div>

    <div class="tech-split-grid">
      <div>
        @php
            $techStack = [
                [
                    'name' => 'CMS and Platforms',
                    'technologies' => [
                        ['name' => 'WordPress', 'image' => asset('images/tech-logo/WordPress.png')],
                        ['name' => 'Shopify', 'image' => asset('images/tech-logo/Shopify.png')],
                        ['name' => 'Headless CMS', 'image' => asset('images/tech-logo/Strapi.png')],
                    ],
                ],
                [
                    'name' => 'Frontend',
                    'technologies' => [
                        ['name' => 'React', 'image' => asset('images/tech-logo/React.png')],
                        ['name' => 'Next.js', 'image' => asset('images/tech-logo/Next.js.png')],
                    ],
                ],
                [
                    'name' => 'Backend',
                    'technologies' => [
                        ['name' => 'Node.js', 'image' => asset('images/tech-logo/Node.js.png')],
                        ['name' => 'PHP', 'image' => asset('images/tech-logo/PHP.png')],
                    ],
                ],
                [
                    'name' => 'Hosting and Infrastructure',
                    'technologies' => [
                        ['name' => 'AWS', 'image' => asset('images/tech-logo/AWS.png')],
                        ['name' => 'Cloudflare', 'image' => asset('images/tech-logo/Cloudflare.png')],
                    ],
                ],
                [
                    'name' => 'Analytics',
                    'technologies' => [
                        ['name' => 'Google Analytics', 'image' => asset('images/tech-logo/GoogleAnalytics.png')],
                        ['name' => 'Search Console', 'image' => asset('images/tech-logo/SearchConsole.png')],
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

<!-- Why Choose InTech Nexus -->
<section class="relative py-24 bg-[#0b0c10] border-t border-white/5 why-choose-section">
  <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
  <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
      <div class="p-10 md:p-16 text-white flex flex-col justify-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why Choose InTech Nexus</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Planning that keeps complex applications stable at launch</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          Web application projects need more planning than a standard website. We map the data, the user roles, and the logic during strategy, so the application holds up under real, daily use once it launches.
        </p>
      </div>
      <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop" alt="Why Choose InTech Nexus" class="why-choose-image">
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
          <span>How is a web application different from a website?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          A website mainly presents information. A web application lets users log in, interact with data, and complete tasks, more like software running in a browser.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can a web application later become a SaaS product?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. Many web applications are built as the foundation for a future SaaS product, and we can plan for that from the start if it is on your roadmap.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>How long does a web application project take?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          It depends on scope and complexity. A focused internal tool can take a few weeks, while a full multi role platform with integrations takes longer. We give a clear estimate after discovery.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Do you build the frontend and backend together?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. Both are handled by the same team, so the interface and the underlying logic are always in sync.
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
        Ready to build a custom web application?
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

@endsection