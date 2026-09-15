@extends('layouts.app')
@section('title', 'Ecommerce Industry Solutions - InTech Nexus')

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
          <a href="{{ url('/industries') }}" class="hover:text-purple-300 transition-colors">Industries</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">Ecommerce</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Ecommerce Solutions Where <span class="text-purple-400">Storefront and Marketing Work as One System</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          Ecommerce success comes down to two things working together: a storefront that converts, and marketing that keeps bringing the right traffic to it. Too often, businesses treat these as separate projects handled by separate vendors, which is exactly where things start to break down. A beautifully designed store with no traffic will not sell. A flood of traffic landing on a storefront that is slow or confusing will not convert either.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          We work with ecommerce businesses at every stage, from a first store launch to a full platform rebuild. Whether you sell a handful of products or manage a catalog with thousands of items, our approach stays the same: build a storefront that works, then build the marketing engine that fills it.
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
            src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1000&auto=format&fit=crop"
            alt="Ecommerce Solutions - InTech Nexus"
            class="w-full h-full object-cover object-center relative z-10 border border-white/10 shadow-2xl"
          />
          <div class="absolute inset-0 z-20 bg-gradient-to-r from-[#0b0c10] via-transparent to-transparent opacity-90 pointer-events-none"></div>
          <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent opacity-40 pointer-events-none"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Who This Is For & Common Challenges Section -->
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
            Ecommerce businesses at every stage, from a first store launch to a full platform rebuild for a business that has outgrown its current setup, whether you sell a handful of products or manage a catalog with thousands of items.
          </p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 flex flex-col justify-between">
        <div>
          <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
            Common Challenges
          </h2>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Storefronts that look good but do not convert well. A polished design does not always translate into a smooth path to checkout.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Paid and organic marketing running apart from the on site experience, so traffic arrives at pages that were never built with that campaign in mind.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Platform limits that make it hard to grow product catalogs or checkout flows as the business scales.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Cart abandonment that goes unaddressed, with no automated follow up to recover lost sales.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Inventory, pricing, or fulfillment systems that do not talk to the storefront, creating manual work and errors.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Search visibility that lags behind competitors, so potential customers never find the store in the first place.</span>
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
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Services We Provide</h2>
      <p class="text-gray-400 text-lg">We build the storefront and the marketing engine behind it, treated as one system.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Application Development</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Application Development for custom ecommerce websites and apps, built to handle real product complexity and growth.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">UI/UX and Conversion Rate Work</h3>
          <p class="text-gray-400 leading-relaxed text-sm">UI/UX Design and conversion rate work, focused on removing friction between browsing and checkout.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Payment and Platform Integrations</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Payment and platform integrations, connecting your storefront to the payment gateways, inventory systems, and fulfillment tools you already use.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Digital Marketing</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Digital Marketing for SEO and paid ads, built to bring in the right kind of traffic, not just more of it.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px] md:col-span-2">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">QA &amp; Testing Across Devices and Browsers</h3>
          <p class="text-gray-400 leading-relaxed text-sm">QA & Testing across devices and browsers, so checkout works reliably no matter how a customer arrives at your store.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service Capabilities -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Solutions We Offer</h2>
      <p class="text-gray-400 text-lg">What we deliver and where we excel.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">What We Deliver</h3>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Custom online stores built around your specific catalog and brand, not a generic theme stretched to fit</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Multi-vendor marketplaces for businesses connecting multiple sellers or suppliers under one platform</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Inventory and order management systems that keep your storefront, warehouse, and fulfillment process in sync</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Customer loyalty and subscription systems built to increase repeat purchases and lifetime value</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Abandoned cart recovery and lifecycle email flows through our Digital Marketing team, aimed at recovering sales that would otherwise be lost</span>
          </li>
        </ul>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Storefront, checkout, and payment integrations that work together end to end</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Conversion rate optimization and A/B testing for landing pages and product flows</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>SEO and paid acquisition tied directly to the storefront experience</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-purple-400 mt-1">◦</span>
            <span>Platform migrations planned to protect existing rankings and data</span>
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
        A structured approach to building ecommerce businesses that grow, from the storefront outward.
      </p>
    </div>

    <div class="space-y-6">
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Discovery and Audit</h3>
          <p class="text-gray-300">We review the storefront, conversion data, and marketing channels to identify what is actually holding growth back.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Storefront Strategy</h3>
          <p class="text-gray-300">We scope the rebuild or platform changes around your catalog, growth targets, and operational reality.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Design and Build</h3>
          <p class="text-gray-300">We design and build the storefront, integrations, and the marketing landing experiences alongside it.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Launch and QA</h3>
          <p class="text-gray-300">We test checkout, payment, and fulfillment flows across devices and browsers before going live.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Grow and Iterate</h3>
          <p class="text-gray-300">We run the marketing and lifecycle channels, then feed conversion data back into the storefront.</p>
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
      <p class="text-gray-400 text-lg">The stack we work with on ecommerce projects.</p>
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
                    'name' => 'Marketing & Analytics',
                    'technologies' => [
                        ['name' => 'Google Analytics', 'image' => asset('images/tech-logo/GoogleAnalytics.png')],
                        ['name' => 'Mailchimp', 'image' => asset('images/tech-logo/Mailchimp.png')],
                        ['name' => 'Klaviyo', 'image' => asset('images/tech-logo/Klaviyo.png')],
                    ],
                ],
                [
                    'name' => 'Infrastructure',
                    'technologies' => [
                        ['name' => 'AWS', 'image' => asset('images/tech-logo/AWS.png')],
                        ['name' => 'Azure', 'image' => asset('images/tech-logo/Azure.png')],
                        ['name' => 'Google Cloud', 'image' => asset('images/tech-logo/GoogleCloud.png')],
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
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Design, development, and marketing as one system</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          Ecommerce is one of the few areas where design, development, and marketing genuinely need to work as one system. A product page redesign affects conversion tracking. A new marketing campaign needs a landing experience built to match it. Because our Application Development, UI/UX Design, and Digital Marketing teams work together on every ecommerce project, changes on one side are always planned with the other in mind. This keeps the storefront and the campaigns driving traffic to it aligned, instead of drifting apart as separate initiatives with separate priorities.
        </p>
      </div>
      <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1200&auto=format&fit=crop" alt="Why Choose InTech Nexus" class="why-choose-image">
      </div>
    </div>
  </div>
</section>

<!-- How We Help -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="p-8 md:p-12 bg-white/[0.03] border border-white/10">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">How We Help</h2>
      <p class="text-gray-300 leading-relaxed text-base md:text-lg max-w-3xl mb-4">
        We build and grow ecommerce businesses together. Storefronts built to convert, backed by marketing built to bring in the right traffic, not just visits. That means every project starts by looking at both sides of the equation: what is stopping visitors from buying, and what is stopping the right visitors from arriving in the first place.
      </p>
      <p class="text-gray-400 leading-relaxed text-base md:text-lg max-w-3xl">
        For newer ecommerce businesses, this often starts with a properly built storefront on a platform suited to your catalog and budget. For established stores, it usually means a conversion audit first, so we can prioritize fixes that will have the biggest impact before recommending a full rebuild.
      </p>
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
          <span>Do you work with existing stores, or only new builds?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Both. Many of our ecommerce projects start with an existing store that needs a redesign, a platform migration, or a conversion fix, rather than a build from scratch.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you help if our issue is traffic, not the store itself?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. If the storefront is performing well but traffic is the bottleneck, our Digital Marketing team can take on SEO, paid ads, or both, without needing to touch the store itself.
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
        Ready to build a storefront and marketing engine that work together?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-4 leading-relaxed">
        If the storefront needs a rebuild, see
        <a href="{{ url('/web-development') }}" class="text-purple-400 font-semibold hover:text-purple-300 transition-colors">Web Development</a>.
        To grow traffic and sales, see
        <a href="{{ url('/digital-marketing') }}" class="text-purple-400 font-semibold hover:text-purple-300 transition-colors">Digital Marketing</a>.
      </p>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Ready to talk through your ecommerce project? Book a call, request a proposal, or get a free quote to begin.
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