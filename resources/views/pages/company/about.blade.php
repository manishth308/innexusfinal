@extends('layouts.app')
@section('title', 'About Us - InTech Nexus')

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
    <div class="absolute top-0 right-0 w-full lg:w-[65%] h-full bg-gradient-to-br from-purple-900/60 via-purple-800/30 to-purple-950/10 [clip-path:polygon(25%_0%,100%_0%,100%_100%,0%_100%)] opacity-90"></div>
    <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

      <div class="lg:col-span-7 flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-sm font-medium text-purple-400 mb-6" aria-label="Breadcrumb">
          <a href="{{ url('/') }}" class="hover:text-purple-300 transition-colors">Home</a>
          <span class="text-gray-500">/</span>
          <a href="{{ url('/company') }}" class="hover:text-purple-300 transition-colors">Company</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">About Us</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          One Team. <span class="text-purple-400">Every Stage</span> of the Digital Journey.
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-8">
          InTech Nexus exists because businesses were tired of managing three separate companies. A dev shop, a design studio, and a marketing agency that rarely talk to each other. We built one team that does.
        </p>

        <div class="flex flex-wrap items-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
            Get a Free Quote
          </a>
          <a href="{{ url('/services') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
            Explore Services
          </a>
        </div>
      </div>

      <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
        <div class="relative w-full max-w-[520px] aspect-[4/3] lg:aspect-square">
          <img
            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1000&auto=format&fit=crop"
            alt="One team. Every stage. InTech Nexus."
            class="w-full h-full object-cover object-center relative z-10 border border-white/10 shadow-2xl"
          />
          <div class="absolute inset-0 z-20 bg-gradient-to-r from-[#0b0c10] via-transparent to-transparent opacity-90 pointer-events-none"></div>
          <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent opacity-40 pointer-events-none"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Client Ticker Banner -->
<section class="bg-[#0b0c10] border-t border-white/5 overflow-hidden py-6">
  <div class="flex whitespace-nowrap animate-scroll">
    <div class="flex items-center gap-16 px-8 text-gray-400 text-lg font-bold tracking-wide uppercase">
      <span>Healthcare</span>
      <span>Manufacturing</span>
      <span>Finance & Banking</span>
      <span>E-Commerce</span>
      <span>Build</span>
      <span>Design</span>
      <span>Grow</span>
    </div>
    <div class="flex items-center gap-16 px-8 text-gray-400 text-lg font-bold tracking-wide uppercase">
      <span>Healthcare</span>
      <span>Manufacturing</span>
      <span>Finance & Banking</span>
      <span>E-Commerce</span>
      <span>Build</span>
      <span>Design</span>
      <span>Grow</span>
    </div>
  </div>
</section>

<!-- Who We Are Section -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Who We Are</h2>
      <p class="text-gray-300 text-lg leading-relaxed">
        We are a global digital and IT company. We believe the best digital products come from a team that understands the full journey, not just one part of it. A developer who never talks to a designer builds software that is hard to use. A marketer who never talks to a developer sends traffic to pages that were never built to convert it. We removed that gap by building one team that handles all of it together.
      </p>
      <p class="text-gray-300 text-lg leading-relaxed mt-4">
        That is why our business has three connected parts: <strong class="text-purple-400">Build, Design, and Grow</strong>. We do not treat software, design, and marketing as separate businesses under one roof. A project that starts in our Software Development team stays connected to UI/UX Design and Digital Marketing for as long as you need us, instead of being handed off to a disconnected vendor once the code is written.
      </p>
      <p class="text-gray-300 text-lg leading-relaxed mt-4">
        We operate as one global brand with local delivery. Our teams work across time zones and markets, which means you get a partner who understands global standards and local context, not just a single office with a narrow view of your market.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Build</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Software development engineered for long-term scalability, stability, and high performance from day one.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Design</h3>
          <p class="text-gray-400 leading-relaxed text-sm">User-centric design studios creating intuitive digital interfaces aligned directly with technical execution.</p>
        </div>
      </div>

      <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Grow</h3>
          <p class="text-gray-400 leading-relaxed text-sm">Data-driven digital marketing campaigns built on deep platform knowledge to accelerate real-world reach.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- What We Believe Section -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Believe</h2>
      <p class="text-purple-400 font-semibold text-xl mb-6">
        We design, build, and grow digital businesses. This is not just a tagline. It is how we work.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">One Brief, One Process</h3>
        <p class="text-gray-300 leading-relaxed">
          A software development project does not get handed off to a design team that was not part of the plan. A digital marketing campaign is not guessing at a brand it never helped shape. Every team works from the same brief, inside the same process.
        </p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Judged by Results</h3>
        <p class="text-gray-300 leading-relaxed">
          We also believe good digital work should be judged by results, not just by how polished it looks. A beautiful website that does not rank in search, or an app that looks great but confuses users, has not actually done its job. Every project we take on is measured against a real business outcome, whether that is leads, sales, retention, or something else specific to your goals.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- How We're Different (Process 01-05) -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">How We're Different</h2>
      <p class="text-gray-400 text-lg leading-relaxed">Experience a modern model built around unified delivery and real industry expertise.</p>
    </div>

    <div class="space-y-6">
      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Full Journey Support</h3>
          <p class="text-gray-300">From your first working build to a fully grown platform, we stay with you as the project grows.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Real Industry Knowledge</h3>
          <p class="text-gray-300">Deep expertise in healthcare, manufacturing, finance and banking, and ecommerce. Not generic delivery.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">One Team You Can Reach</h3>
          <p class="text-gray-300">One point of contact across design, development, and growth. Nothing gets lost between vendors.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">Global Reach, Local Understanding</h3>
          <p class="text-gray-300">Global reach with local understanding, wherever you are building.</p>
        </div>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-extrabold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white mb-2">A Structured Process on Every Project</h3>
          <p class="text-gray-300">Discovery, strategy, design, development, QA, and launch. This keeps quality consistent no matter which team members are working on your project.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Approach Section (Service Capabilities pattern) -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Our Approach to Every Project</h2>
      <p class="text-gray-400 text-lg">How we work with every client, no matter the size of the engagement.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Discovery First</h3>
        <p class="text-gray-300 leading-relaxed">
          Every engagement, no matter the size, starts with the same discovery process. We take the time to understand your business, your users, and your goals before recommending a single service or solution. This means the plan we bring back is built around your actual situation, not a standard package applied to every client.
        </p>
      </div>

      <div class="p-8 bg-white/[0.03] border border-white/10">
        <h3 class="text-xl font-bold text-white mb-4">Parallel Execution</h3>
        <p class="text-gray-300 leading-relaxed">
          From there, our teams work in parallel rather than in a strict sequence. Design and development stay in close contact throughout, and our growth team is looped in early enough to plan for search visibility and conversion from the start, not as an afterthought once the build is finished.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose InTech Nexus (split-pane layout) -->
<section class="py-24 border-t border-white/10 bg-[#0b0c10]">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center overflow-hidden rounded-md">
      <div class="p-10 md:p-16 bg-[#0b0c10] text-white flex flex-col justify-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">One team, one brief, one result</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          We design, build, and grow digital businesses, with one team handling all three from the same brief. No handoffs between disconnected vendors, no strategies built without the people who will execute them.
        </p>
      </div>
      <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1200&auto=format&fit=crop" alt="One team, one brief, one result" class="why-choose-image">
      </div>
    </div>
  </div>
</section>

@include('partials.faq-accordion', ['faqs' => $page->activeFaqs])

<!-- Call To Action Section (Work With Us) -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)]">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">Work With Us</h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Ready to work with a team that owns the full result? Get a free quote to get started, or explore our services to see everything we can help with.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
          Get a Free Quote
        </a>
        <a href="{{ url('/services') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-bold hover:bg-white/10 transition-all">
          Explore Services
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-[#07080a] text-gray-400 pt-16 pb-12 border-t border-white/10">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 flex flex-col md:flex-row items-center justify-between gap-6">
    <div class="text-xl font-bold text-white">InTech Nexus</div>
    <div class="text-sm text-gray-500">© 2026 InTech Nexus. All Rights Reserved.</div>
  </div>
</footer>

</div>

@endsection
