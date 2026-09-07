@extends('layouts.app')
@section('title', 'Healthcare Industry Solutions - InTech Nexus')

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
          <a href="{{ url('/') }}" class="hover:text-purple-300 transition-colors">Home</a>
          <span class="text-gray-500">/</span>
          <a href="{{ url('/industries') }}" class="hover:text-purple-300 transition-colors">Industries</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">Healthcare</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Healthcare Platforms That Work for <span class="text-purple-400">Patients, Providers, and Regulators</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          Healthcare technology has to work for patients, providers, and regulators all at once. It cannot be easy to use at the cost of privacy and safety, and it cannot treat those rules as an afterthought either.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          We work with healthcare businesses on both sides of this problem: the software and systems that need to work correctly and securely, and the patient and provider facing experience that needs to feel simple despite everything happening behind the scenes.
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
            src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=1000&auto=format&fit=crop"
            alt="Healthcare Solutions - InTech Nexus"
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
            Healthcare businesses that need platforms and websites serving patients and providers alike, with privacy, accessibility, and clinical workflow built in from the start, not added later.
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
              <span>Patient facing tools that are simple to use without putting data at risk, and older systems that make it hard to improve the experience without a risky migration.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Marketing that needs to build trust in a field where credibility matters more than clever wording.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Disconnected systems between clinical records, billing, and patient communication, and meeting accessibility expectations for a diverse patient base.</span>
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
      <p class="text-gray-400 text-lg">We bring both technical and design discipline to every healthcare project.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Software and Mobile App Development</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Software Development and Mobile App Development for healthcare software and apps, including patient portals and provider tools.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">UI/UX Design for Patients and Providers</h3>
          <p class="text-gray-400 leading-relaxed text-sm">UI/UX Design built around patients and providers, tested for clarity across a wide range of ages and technical comfort levels.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Web Development and Digital Marketing</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Web Development and Digital Marketing for your website and outreach, built to earn trust in a field where credibility matters.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">QA and Testing for Reliability</h3>
          <p class="text-gray-400 leading-relaxed text-sm">QA and Testing with attention to accessibility and reliability, since healthcare tools cannot afford to fail during real use.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px] md:col-span-2">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Privacy, Accessibility, and Compliance From Day One</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Privacy, accessibility, and the right rules built in from the start, not added later. Data handling, access control, and compliance are part of the technical plan from the first discovery conversation.</p>
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
            <span>Appointment booking and telemedicine platforms that reduce phone based scheduling and no shows</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Clinic and hospital management systems that bring scheduling, records, and billing into one connected system</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>EMR and EHR integrations that connect new tools to the clinical systems you already rely on</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Patient intake and communication tools designed to reduce paperwork and missed appointments</span>
          </li>
        </ul>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Healthcare software and mobile app engineering, including patient portals and provider tools</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>UI/UX design tested for clarity and accessibility across a wide range of patient ages and technical comfort</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Healthcare reporting dashboards that give staff and administrators a clear, real time view across the practice</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Privacy, accessibility, and compliance requirements designed in from the first conversation, not added later</span>
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
        Privacy, usability, and clinical workflow designed together from day one.
      </p>
    </div>

    <div class="space-y-6">
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Discovery and Compliance Mapping</h3>
          <p class="text-gray-300">We identify the privacy, accessibility, and clinical workflow requirements that will shape the build before any code is written.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Design and Usability Testing</h3>
          <p class="text-gray-300">We design patient and provider experiences that are simple to use across a wide range of ages and technical comfort levels.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Build and Integration</h3>
          <p class="text-gray-300">We build the platform and connect it to the EMR, EHR, billing, and scheduling systems your practice already uses.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Accessibility and Reliability Testing</h3>
          <p class="text-gray-300">We test for accessibility, reliability, and security throughout, since healthcare tools cannot afford to fail during real use.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Launch and Ongoing Support</h3>
          <p class="text-gray-300">We support the platform after launch, with clear reporting for staff and administrators on what is happening across the practice.</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Tools / Technologies -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Tools / Technologies</h2>
        <p class="text-gray-400 text-lg">The stack we work with on healthcare projects.</p>
      </div>

      <div class="tech-split-grid">
        <div>
          @php
              $techStack = [
                  [
                      'name' => 'Frontend & Experience',
                      'technologies' => [
                          ['name' => 'React', 'image' => asset('images/tech-logo/React.png')],
                          ['name' => 'Next.js', 'image' => asset('images/tech-logo/Next.js.png')],
                          ['name' => 'Node.js', 'image' => asset('images/tech-logo/Node.js.png')],
                      ],
                  ],
                  [
                      'name' => 'Backend & Data',
                      'technologies' => [
                          ['name' => 'Node.js', 'image' => asset('images/tech-logo/Node.js.png')],
                          ['name' => 'Python', 'image' => asset('images/tech-logo/Python.png')],
                          ['name' => 'PostgreSQL', 'image' => asset('images/tech-logo/PostgresSQL.png')],
                          ['name' => 'MySQL', 'image' => asset('images/tech-logo/MySQL.png')],
                      ],
                  ],
                  [
                      'name' => 'Infrastructure',
                      'technologies' => [
                          ['name' => 'AWS', 'image' => asset('images/tech-logo/AWS.png')],
                          ['name' => 'Azure', 'image' => asset('images/tech-logo/Azure.png')],
                          ['name' => 'Google Cloud', 'image' => asset('images/tech-logo/Google Cloud.png')],
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
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">One team, day one</h2>
          <p class="text-gray-300 leading-relaxed max-w-md">
            Our Software Development and UI/UX Design teams work on healthcare projects together from day one, so decisions about how data is handled and decisions about how a screen looks and feels are made with full knowledge of each other, not negotiated after the fact between two disconnected teams.
          </p>
        </div>
        <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=1200&auto=format&fit=crop" alt="Why Choose InTech Nexus" class="why-choose-image">
      </div>
      </div>
    </div>
  </section>

<!-- Frequently Asked Questions -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Common Questions</h2>

    <div class="space-y-4">
      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Do you have experience with healthcare specific compliance requirements?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We build with data privacy and access control as core requirements from the start, and we plan projects around the specific rules relevant to your region and type of practice.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you work with our existing EMR or EHR system?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          In most cases, yes. We assess your current systems during discovery and plan integrations that connect new tools to what you already use wherever possible.
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
        Ready to build a healthcare platform that earns trust from day one?
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

@endsection
