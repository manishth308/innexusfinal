@extends('layouts.app')
@section('title', 'Manufacturing Industry Solutions - InTech Nexus')

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
          <span class="text-purple-400">Manufacturing</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Manufacturing Systems That <span class="text-purple-400">Connect Operations, Sales, and Customers</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          Manufacturing businesses need digital systems that connect operations, sales, and customers. Not just a website that describes what the business does.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          Buyers researching industrial equipment, parts, or manufacturing services now do most of that research online, long before they ever pick up the phone. If your website reads like a brochure instead of demonstrating real technical capability, you lose serious buyers to competitors who look more credible online, even if your actual work is better. At the same time, many manufacturers are still running core operations, inventory, and customer data across systems that were never built to talk to each other. We work with manufacturing businesses that need both sides of this solved together, digital systems that connect operations and data internally, and a customer facing presence that reflects the real technical skill behind the business.
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
            src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1000&auto=format&fit=crop"
            alt="Manufacturing Solutions - InTech Nexus"
            class="w-full h-full object-cover object-center relative z-10 border border-white/10 shadow-2xl"
          />
          <div class="absolute inset-0 z-20 bg-gradient-to-r from-[#0b0c10] via-transparent to-transparent opacity-90 pointer-events-none"></div>
          <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent opacity-40 pointer-events-none"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Common Challenges -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-4xl mx-auto px-6 sm:px-12">
    <div class="p-8 bg-white/[0.03] border border-white/10 text-center">
      <h2 class="text-2xl font-bold text-white mb-4 flex items-center justify-center gap-3">
        <span class="w-2 h-2 rounded-full bg-purple-400"></span>
        Common Challenges
      </h2>
      <ul class="space-y-3 text-gray-300 max-w-2xl mx-auto">
        <li>Sales and operations data live in systems that do not talk to each other. Teams end up re-entering the same information across spreadsheets, order systems, and inventory tools.</li>
        <li>The website undersells what the business can actually do to buyers doing early research. A generic template site does not build the confidence a technical buyer needs before reaching out.</li>
        <li>Lead generation for manufacturing sales cycles looks different from consumer marketing. Long, considered B2B buying cycles need a different approach than a typical ecommerce funnel.</li>
        <li>Legacy operations software can be difficult to extend, forcing teams to work around limitations instead of the system supporting the actual workflow.</li>
        <li>Customer and supplier communication is often still manual, when a connected portal could remove a large share of the back and forth.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Why Manufacturing Needs a Different Approach -->
<section class="relative py-24 bg-[#0b0c10] border-t border-white/5 why-choose-section">
  <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
  <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
      <div class="p-10 md:p-16 text-white flex flex-col justify-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Why Manufacturing Needs a Different Approach</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          Manufacturing buyers are usually technical, deliberate, and comparing multiple suppliers before ever reaching out. A generic marketing approach built for consumer products does not build the kind of confidence this audience needs. At the same time, manufacturing operations depend on systems that actually reflect how production, inventory, and fulfillment work day to day, not a simplified version built by a team that has never worked with a manufacturing business. We bring both kinds of understanding into every manufacturing project.
        </p>
      </div>
      <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1200&auto=format&fit=crop" alt="Why Choose InTech Nexus" class="why-choose-image">
      </div>
    </div>
  </div>
</section>

<!-- Services We Provide -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-4xl mx-auto px-6 sm:px-12">
    <div class="mb-12 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Services We Provide</h2>
      <p class="text-gray-400 text-lg">We build systems and content that reflect how manufacturing actually runs.</p>
    </div>

    <div class="p-8 bg-white/[0.03] border border-white/10 text-center">
      <ul class="space-y-3 text-gray-300 max-w-2xl mx-auto">
        <li>Software Development for custom business systems, connecting operations, inventory, and sales data instead of leaving them isolated.</li>
        <li>ERP and CRM development, tailored to the specific processes running your production and sales floor, not a generic manufacturing template.</li>
        <li>B2B Web Development, built to demonstrate technical capability to buyers doing serious research, not just describe services in general terms.</li>
        <li>Digital Marketing for SEO and lead generation, built around how manufacturing buyers actually search and evaluate suppliers.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Solutions We Offer -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-4xl mx-auto px-6 sm:px-12">
    <div class="mb-12 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Solutions We Offer</h2>
    </div>

    <div class="p-8 bg-white/[0.03] border border-white/10 text-center">
      <ul class="space-y-3 text-gray-300 max-w-2xl mx-auto">
        <li>Production and inventory management systems that give real time visibility into stock, orders, and production status across the business.</li>
        <li>Supplier and customer portals that reduce manual back and forth by giving partners direct access to the information they need.</li>
      </ul>
    </div>
  </div>
</section>

<!-- How We Help -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="p-8 md:p-12 bg-white/[0.03] border border-white/10">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">How We Help</h2>
      <p class="text-gray-300 leading-relaxed text-base md:text-lg max-w-3xl">
        We build digital systems and websites that show the real skill behind manufacturing businesses, and connect customer facing content to how sales actually happens. That means building both the internal systems that keep operations running smoothly, and the outward facing presence that helps serious buyers take your business seriously from the first visit.
      </p>
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
          <span>Do you have experience working with manufacturing or industrial businesses specifically?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. We understand the difference between a manufacturing sales cycle and a typical consumer buying journey, and we build systems and content that reflect that.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you connect our website to our internal operations or inventory systems?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          In many cases, yes. We review your existing systems during discovery and plan integrations that fit around them wherever practical.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Will a new website actually help us generate more qualified leads?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          A website built around how manufacturing buyers actually research and compare suppliers, combined with the right SEO and content strategy, is one of the most direct ways to improve lead quality.
        </div>
      </div>

      <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you build custom portals for our suppliers or customers?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
          Yes. Supplier and customer portals are one of the most common systems we build for manufacturing businesses, and we scope them around the specific information each side actually needs.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Get Started / Call to Action Banner -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)] hover:shadow-[0_0_60px_rgba(168,85,247,0.35)] transition-all duration-300">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
        Ready to show the real skill behind your manufacturing business?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-4 leading-relaxed">
        If lead generation is the main goal, see
        <a href="{{ url('/digital-marketing') }}" class="text-purple-400 font-semibold hover:text-purple-300 transition-colors">Digital Marketing</a>.
        For connecting internal systems, see
        <a href="{{ url('/software-development') }}" class="text-purple-400 font-semibold hover:text-purple-300 transition-colors">Software Development</a>.
      </p>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        If you are not sure where to start, reach out through our
        <a href="{{ url('/contact') }}" class="text-purple-400 font-semibold hover:text-purple-300 transition-colors">Contact</a>
        page and we will help you find the right first step.
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