@extends('layouts.app')
@section('title', 'Digital Marketing Services - InTech Nexus')

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
          <span class="text-purple-400">Digital Marketing</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Digital Marketing Services Built to Bring In <span class="text-purple-400">Real, Measurable Leads</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          Marketing built to bring in real leads, not just traffic. SEO, paid ads, content, and conversion work, all planned together instead of run as separate campaigns.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          Our digital marketing services cover SEO, paid ads, content, email, and conversion optimization, all planned together instead of run as disconnected campaigns. Because the same team can see how your website and product actually work, campaigns send traffic to pages built to convert it, not just generic landing pages.
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
            Businesses with a product or website already in place that is not bringing in the leads or sales it should.
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
              <span>Website traffic is not turning into leads or sales.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Search rankings are weak or missing for terms that matter to the business.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Ad spend is not showing a clear return.</span>
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
      <p class="text-gray-400 text-lg">Full-funnel marketing programs engineered for leads, revenue, and measurable growth.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">SEO & Local SEO</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Search visibility that converts into traffic</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• Technical SEO and site health audits</li>
            <li>• On-page and content optimization</li>
            <li>• Local SEO and Google Business Profile management</li>
          </ul>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Paid Advertising</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Google Ads and Meta Ads managed for ROI</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• Google Ads campaign management</li>
            <li>• Meta Ads for Facebook and Instagram</li>
            <li>• Landing page alignment and conversion tracking</li>
          </ul>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Content & Email Marketing</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Content and email that nurture leads</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• SEO-driven content strategy</li>
            <li>• Email automation and lifecycle campaigns</li>
            <li>• Newsletter and lead nurture sequences</li>
          </ul>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Conversion Optimization</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Turn more traffic into leads and sales</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• CRO audits and A/B testing</li>
            <li>• Landing page optimization</li>
            <li>• Funnel analysis and heatmap testing</li>
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
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>A full marketing program tailored to your goals</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Clear reporting tied to leads, sales, or other set targets</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Landing pages and creative aligned with campaigns</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Ongoing optimization based on real performance data</span></li>
        </ul>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>SEO and technical search optimization</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Paid search and paid social management</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Content strategy and execution</span></li>
          <li class="flex items-start gap-3"><span class="text-purple-400 mt-1">◦</span><span>Conversion rate optimization</span></li>
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
        A structured, transparent approach to building marketing programs that generate real leads and revenue.
      </p>
    </div>

    <div class="space-y-6">
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Audit & Strategy</h3>
          <p class="text-gray-300">We review your current performance, audience, and competitive landscape to define a clear marketing strategy tied to your business goals.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Setup & Implementation</h3>
          <p class="text-gray-300">We set up campaigns, tracking, analytics, and technical foundations needed to measure and optimize performance from day one.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Execution</h3>
          <p class="text-gray-300">We launch and run campaigns, content, and ads on a consistent schedule, keeping messaging aligned with your brand and audience.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Monitoring & Optimization</h3>
          <p class="text-gray-300">We track performance against clear KPIs, adjusting targeting, creative, and spend to improve results over time.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Reporting & Scaling</h3>
          <p class="text-gray-300">We report results clearly, tied back to your original goals, and scale what works across channels and campaigns.</p>
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
                    'name' => 'SEO & Analytics',
                    'technologies' => [
                        ['name' => 'Ahrefs', 'image' => asset('images/tech-logo/Ahrefs.png')],
                        ['name' => 'SEMrush', 'image' => asset('images/tech-logo/SEMrush.png')],
                        ['name' => 'Google Search Console', 'image' => asset('images/tech-logo/Google Search Console.png')],
                    ],
                ],
                [
                    'name' => 'Paid Ads',
                    'technologies' => [
                        ['name' => 'Google Ads', 'image' => asset('images/tech-logo/Google Ads.png')],
                        ['name' => 'Meta Ads Manager', 'image' => asset('images/tech-logo/Meta Ads Manager.png')],
                    ],
                ],
                [
                    'name' => 'Email & Automation',
                    'technologies' => [
                        ['name' => 'Mailchimp', 'image' => asset('images/tech-logo/Mailchimp.png')],
                        ['name' => 'Klaviyo', 'image' => asset('images/tech-logo/Klaviyo.png')],
                    ],
                ],
                [
                    'name' => 'Analytics & CRO',
                    'technologies' => [
                        ['name' => 'Google Analytics', 'image' => asset('images/tech-logo/Google Analytics.png')],
                        ['name' => 'Hotjar', 'image' => asset('images/tech-logo/Hotjar.png')],
                        ['name' => 'Mixpanel', 'image' => asset('images/tech-logo/Mixpanel.png')],
                    ],
                ],
                [
                    'name' => 'Project & QA Tools',
                    'technologies' => [
                        ['name' => 'Jira', 'image' => asset('images/tech-logo/Jira.png')],
                        ['name' => 'GitHub', 'image' => asset('images/tech-logo/github-white.png')],
                        ['name' => 'Notion', 'image' => asset('images/tech-logo/Notion.png')],
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
          Marketing connected to the product and website it promotes. The same team can see Web Development and UI/UX Design decisions, so campaigns send traffic to pages actually built to convert it.
        </p>
      </div>
      <div class="min-h-[320px] bg-[url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center"></div>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Frequently Asked Questions</h2>

    <div class="space-y-4">
      @foreach ([
        ['q' => 'How long before SEO shows results?', 'a' => 'SEO builds over time. Real movement usually takes a few months, while paid ads can show results faster.'],
        ['q' => 'Do you manage ad spend directly?', 'a' => 'Yes. We manage campaigns from start to finish, including budget, creative, and ongoing changes.'],
        ['q' => 'Which channels should we focus on first?', 'a' => 'This depends on your goals, budget, and current performance. We will recommend a starting focus during our initial audit and strategy phase.'],
        ['q' => 'How is success measured?', 'a' => 'We track results against clear goals, such as leads, sales, or cost per acquisition, agreed with you before work begins.'],
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
        Ready to turn your marketing into a real lead source?
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