@extends('layouts.app')
@section('title', 'Brand Strategy and Identity Services - InTech Nexus')

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
          <a href="{{ url('/services/branding') }}" class="hover:text-purple-300 transition-colors">Branding</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">Brand Strategy and Identity</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Brand Strategy and Identity Services for a Business People <span class="text-purple-400">Recognize and Trust</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          Brand strategy and identity services for businesses that need a clear, consistent identity people can recognize and trust.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          As part of our wider Branding practice, we build strategy and visual identity together as one process, so your logo, colors, and messaging are grounded in a clear position rather than chosen for their own sake. This makes it the right starting point whether you are launching for the first time or rebuilding an identity that no longer fits.
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
            alt="Brand Strategy and Identity - InTech Nexus" 
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
            Businesses launching for the first time, or rebranding after outgrowing their current identity.
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
              <span class="text-purple-400 mt-1">◦</span>
              <span>The brand feels inconsistent or unclear across different channels.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>There is no real strategy behind the current visual identity.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>The brand does not reflect where the business is now.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Core Capabilities Grid -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Core Capabilities</h2>
      <p class="text-gray-400 text-lg">Branding programs engineered for clarity, consistency, and long-term impact.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Brand Strategy & Positioning</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Define what makes the brand different</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• Market and audience research</li>
            <li>• Positioning and messaging framework</li>
            <li>• Brand architecture and naming</li>
          </ul>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Visual Identity Design</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">A coherent system across every channel</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• Logo, color, and typography systems</li>
            <li>• Imagery and graphic style</li>
            <li>• Templates for digital and print</li>
          </ul>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Brand Guidelines & Documentation</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Make the brand easy to apply</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• Usage rules and do/don't guidelines</li>
            <li>• Voice and tone documentation</li>
            <li>• Asset libraries and templates</li>
          </ul>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Rollout & Activation Support</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Launch the brand with confidence</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• Launch planning and timeline</li>
            <li>• Team and partner enablement</li>
            <li>• Post-launch refinement</li>
          </ul>
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
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>A documented brand strategy and positioning statement</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>A full visual identity system, including logo and color</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Brand guidelines your team can apply consistently</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Messaging direction to support the visual identity</span></li>
        </ul>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Brand strategy and positioning</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Visual identity design</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Brand messaging and voice development</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Brand guideline documentation</span></li>
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
        A structured approach to branding that turns positioning and design into a coherent, usable identity system.
      </p>
    </div>

    <div class="space-y-6">
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Discovery & Research</h3>
          <p class="text-gray-300">We learn your business, audience, and competitors to define the brand's market position and personality.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Positioning & Messaging</h3>
          <p class="text-gray-300">We define how the brand should be positioned and understood, including voice, tone, and key messages.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Visual Identity Design</h3>
          <p class="text-gray-300">We design the logo, color, type, and wider visual system so the brand looks consistent everywhere.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Guidelines & Documentation</h3>
          <p class="text-gray-300">We document the system in clear, usable brand guidelines your team and partners can follow.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Launch & Support</h3>
          <p class="text-gray-300">We support rollout across channels and refine the identity based on real use and feedback.</p>
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
                    'name' => 'Design Tools',
                    'technologies' => [
                        ['name' => 'Adobe Illustrator', 'image' => asset('images/tech-logo/Adobe Illustrator.png')],
                        ['name' => 'Adobe InDesign', 'image' => asset('images/tech-logo/Adobe InDesign.png')],
                        ['name' => 'Adobe Photoshop', 'image' => asset('images/tech-logo/Adobe Photoshop.png')],
                    ],
                ],
                [
                    'name' => 'Collaboration',
                    'technologies' => [
                        ['name' => 'Figma', 'image' => asset('images/tech-logo/Figma.png')],
                        ['name' => 'Notion', 'image' => asset('images/tech-logo/Notion.png')],
                        ['name' => 'Miro', 'image' => asset('images/tech-logo/Miro.png')],
                    ],
                ],
                [
                    'name' => 'Project & QA Tools',
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
          Strategy and design as one process, not separate steps. The visual identity is grounded in a clear position, not just a set of colors and fonts chosen for their own sake.
        </p>
      </div>
      <div class="min-h-[320px] bg-[url('https://images.unsplash.com/photo-1558655146-9f40138edfeb?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center"></div>
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
          <span>Do you handle both strategy and design, or just one?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Both. Brand strategy and visual identity are handled together in our process, since one should inform the other.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Will we receive brand guidelines we can share with our team?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. A brand guideline document is part of our standard deliverable, so your team and any future partners can apply the identity consistently.
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
        Ready to build a brand people remember?
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

<!-- Floating Chat Button Widget -->
<a href="{{ url('/contact') }}" class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-purple-600 text-white flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.5)] hover:bg-purple-700 transition-all">
  <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
</a>

</div>

@endsection