@extends('layouts.app')
@section('title', 'SaaS Development Services - InTech Nexus')

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

  @keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .animate-scroll {
    animation: scroll 35s linear infinite;
  }
  .no-scrollbar::-webkit-scrollbar { display: none; }
  .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
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
          <span class="text-purple-400">SaaS Development</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          SaaS Development Services Built to <span class="text-purple-400">Scale From Day One</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          SaaS development services for founders and businesses building a subscription based software product, from first version to a platform ready to scale.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          We handle SaaS development end to end, from early product planning through to a platform ready for real subscribers. As part of our Software Development practice, every SaaS build is planned with billing, account management, and future growth in mind, not added on as an afterthought.
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
            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop" 
            alt="SaaS Development - InTech Nexus" 
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
            Founders and product teams building a SaaS product, or looking to modernize an existing one.
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
              <span>Turning an idea into a working SaaS product involves more than just writing code.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Subscription billing, user accounts, and multi tenant architecture all need to be planned properly.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Cloud software development needs to be built to scale from day one.</span>
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
      <p class="text-gray-400 text-lg">We handle custom SaaS development from architecture through to launch.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">SaaS Product Development</h3>
          <p class="text-gray-400 leading-relaxed text-sm">From idea to launch, we build complete SaaS products.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Subscription Billing & Account Management</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Robust billing systems and user account management built in from the start.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Cloud Software Development</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Scalable cloud infrastructure designed for growth from day one.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">SaaS Application Development</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Web and mobile applications built for subscription based businesses.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px] md:col-span-2">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Onboarding Flows Built to Reduce Churn</h3>
          <p class="text-gray-400 leading-relaxed text-sm">User onboarding experiences designed to increase adoption and reduce early churn.</p>
        </div>
      </div>
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
            <span>A fully built SaaS platform ready for real users</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Subscription billing and account management systems</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Multi tenant architecture built to scale</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Onboarding flows designed to reduce early churn</span>
          </li>
        </ul>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Cloud native architecture and infrastructure planning</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Subscription and billing system integration</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Multi tenant data design</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Product analytics and usage tracking setup</span>
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
        A structured, transparent approach to building SaaS products that scale.
      </p>
    </div>

    <div class="space-y-6">
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Discovery & Requirements</h3>
          <p class="text-gray-300">We map your goals, workflows, and technical needs before any planning begins.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Planning & Architecture</h3>
          <p class="text-gray-300">We design the system architecture and choose the right technical approach.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Design</h3>
          <p class="text-gray-300">We plan the interface and user experience alongside the technical build.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Development</h3>
          <p class="text-gray-300">We build the software in structured, reviewable stages.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Testing & Launch</h3>
          <p class="text-gray-300">We test thoroughly, then launch with ongoing support.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tools / Technologies Section -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Tools / Technologies</h2>
      <p class="text-gray-400 text-lg">What we deliver and where we excel.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-[40%_60%] gap-8 lg:gap-16">
      <div>
        @php
            $techStack = [
                [
                    'name' => 'Languages',
                    'technologies' => [
                        ['name' => 'Python', 'image' => asset('images/tech-logo/Python.png')],
                        ['name' => 'JavaScript', 'image' => asset('images/tech-logo/js.png')],
                        ['name' => 'PHP', 'image' => asset('images/tech-logo/PHP.png')],
                    ],
                ],
                [
                    'name' => 'Frameworks',
                    'technologies' => [
                        ['name' => 'React', 'image' => asset('images/tech-logo/React.png')],
                        ['name' => 'Node.js', 'image' => asset('images/tech-logo/Node.js.png')],
                        ['name' => 'Laravel', 'image' => asset('images/tech-logo/Laravel.png')],
                        ['name' => 'Django', 'image' => asset('images/tech-logo/Django.png')],
                    ],
                ],
                [
                    'name' => 'Databases',
                    'technologies' => [
                        ['name' => 'PostgreSQL', 'image' => asset('images/tech-logo/PostgresSQL.png')],
                        ['name' => 'MySQL', 'image' => asset('images/tech-logo/MySQL.png')],
                        ['name' => 'MongoDB', 'image' => asset('images/tech-logo/MongoDB.png')],
                    ],
                ],
                [
                    'name' => 'Cloud and infrastructure',
                    'technologies' => [
                        ['name' => 'AWS', 'image' => asset('images/tech-logo/AWS.png')],
                        ['name' => 'Azure', 'image' => asset('images/tech-logo/Azure.png')],
                        ['name' => 'Google Cloud', 'image' => asset('images/tech-logo/Google Cloud.png')],
                    ],
                ],
                [
                    'name' => 'Project and QA tools',
                    'technologies' => [
                        ['name' => 'Jira', 'image' => asset('images/tech-logo/Jira.png')],
                        ['name' => 'GitHub', 'image' => asset('images/tech-logo/github-white.png')],
                        ['name' => 'Postman', 'image' => asset('images/tech-logo/Postman.png')],
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
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Why Choose InTech Nexus</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          As a SaaS development company, we build subscription ready platforms around how your team actually sells and supports customers, instead of asking them to change their process to fit the tool.
        </p>
      </div>
      <div class="min-h-[320px] bg-[url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center"></div>
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
          <span>What makes SaaS development different from regular software development?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          SaaS development requires planning for multi-tenancy, subscription billing, user account management, and scalability from the start. These are not afterthoughts but core architectural decisions that shape the entire platform.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Do you handle subscription billing and payments?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We integrate with leading payment processors and build custom subscription billing logic, including tiered pricing, trial periods, and automated invoicing.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you scale an existing SaaS product?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Absolutely. We work with existing SaaS platforms to optimize architecture, improve performance, and add new features without disrupting current users.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>What cloud platforms do you use for SaaS hosting?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          We primarily work with AWS, Azure, and Google Cloud, choosing the best fit for your product's needs, team expertise, and long-term cost considerations.
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
        Ready to build or scale your SaaS product?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Book a call, request a proposal, or get a free quote to start the conversation.
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

<!-- Floating Chat Button Widget -->
<a href="{{ url('/contact') }}" class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-purple-600 text-white flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.5)] hover:bg-purple-700 transition-all">
  <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
</a>

@endsection