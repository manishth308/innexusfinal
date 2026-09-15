@extends('layouts.app')
@section('title', 'Finance & Banking Industry Solutions - InTech Nexus')

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
            <span class="text-purple-400">Finance & Banking</span>
          </nav>

          <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
            Financial Platforms Built on <span class="text-purple-400">Trust, Security, and a Simple Experience</span>
          </h1>
          <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
            In finance and banking, trust matters as much as the service itself. Every digital touchpoint needs to feel safe, honest, and built to a high standard, because a single confusing or unreliable moment can be enough to make a customer question whether their money is actually secure.
          </p>
          <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
            We work with finance and banking businesses that need technology built to hold up under scrutiny, from regulators, from customers, and from their own internal risk teams. Every project starts from a security first mindset, then builds outward toward an experience that still feels simple and trustworthy to the people using it.
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
              src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=1000&auto=format&fit=crop"
              alt="Finance & Banking Solutions - InTech Nexus"
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
              Finance and banking businesses that need technology built to hold up under scrutiny from regulators, customers, and internal risk teams, not just a platform that looks the part.
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
                <span>Security and compliance rules shape most technical decisions, which can slow down projects that are not planned with those constraints in mind from the start.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-purple-400 font-bold">•</span>
                <span>Customer trust depends a lot on how safe and professional the digital experience feels, not just on what is happening behind the scenes.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-purple-400 font-bold">•</span>
                <span>Older systems can make change slow and risky, especially when core banking or transaction systems are involved.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-purple-400 font-bold">•</span>
                <span>Fraud prevention and identity verification need to be built in without making the experience feel hostile to legitimate customers.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-purple-400 font-bold">•</span>
                <span>Reporting and audit requirements demand accurate, well organized data across multiple systems.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="text-purple-400 font-bold">•</span>
                <span>Competing against fintech challengers who often move faster on digital experience, even without the same institutional trust.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services We Provide -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Services We Provide</h2>
        <p class="text-gray-400 text-lg">We build financial platforms with security and compliance in mind from day one.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
          <div>
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Secure Software Development</h3>
            <p class="text-gray-400 leading-relaxed text-sm">Secure Software Development for financial platforms, including account systems, transaction processing, and reporting tools.</p>
          </div>
        </div>

        <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
          <div>
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">UI/UX Design for Financial Products</h3>
            <p class="text-gray-400 leading-relaxed text-sm">UI/UX Design for financial products, designed to feel trustworthy and simple even when the underlying logic is complex.</p>
          </div>
        </div>

        <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
          <div>
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Legacy System Modernization</h3>
            <p class="text-gray-400 leading-relaxed text-sm">Legacy system modernization, planned carefully to reduce risk during migration from older core systems.</p>
          </div>
        </div>

        <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
          <div>
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">QA &amp; Testing for Security and Performance</h3>
            <p class="text-gray-400 leading-relaxed text-sm">QA &amp; Testing for security and performance, including load testing for systems that need to handle high transaction volumes reliably.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Solutions We Offer -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Solutions We Offer</h2>
        <p class="text-gray-400 text-lg">Systems built for both security and everyday usability.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
          <div>
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Digital Banking and Fintech Platforms</h3>
            <p class="text-gray-400 leading-relaxed text-sm">Digital banking and fintech platforms built for both security and everyday usability.</p>
          </div>
        </div>

        <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
          <div>
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Loan and Insurance Management Systems</h3>
            <p class="text-gray-400 leading-relaxed text-sm">Loan and insurance management systems that bring application, underwriting, and servicing into one connected workflow.</p>
          </div>
        </div>

        <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
          <div>
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Payment System Integrations</h3>
            <p class="text-gray-400 leading-relaxed text-sm">Payment system integrations connecting your platform to the payment processors and banking rails your business relies on.</p>
          </div>
        </div>

        <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
          <div>
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Financial Reporting Dashboards</h3>
            <p class="text-gray-400 leading-relaxed text-sm">Financial reporting dashboards that give your team and your regulators a clear, accurate view of performance and compliance.</p>
          </div>
        </div>

        <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[220px] md:col-span-2">
          <div>
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">Identity Verification and Fraud Prevention</h3>
            <p class="text-gray-400 leading-relaxed text-sm">Identity verification and fraud prevention workflows designed to protect the business without adding unnecessary friction for customers.</p>
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
              <span>Secure account, transaction, and reporting systems built for financial platforms</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Legacy modernization that reduces risk through careful, phased migration</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Trustworthy UI/UX for products with complex underlying logic</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>QA and load testing for systems that must handle high transaction volumes reliably</span>
            </li>
          </ul>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10">
          <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Security and compliance defined upfront, not reviewed at the end</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Fraud prevention and identity verification without added customer friction</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Audit ready reporting across multiple systems</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 mt-1">◦</span>
              <span>Competing on digital experience without compromising institutional trust</span>
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
          A structured approach that treats security and compliance as part of the plan, not a final gate.
        </p>
      </div>

      <div class="space-y-6">
        <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
          <span class="text-3xl font-extrabold text-purple-400">01</span>
          <div>
            <h3 class="text-2xl font-bold text-white mb-2">Discovery and Compliance Mapping</h3>
            <p class="text-gray-300">We map your systems and the specific regulatory and security requirements relevant to your business and region.</p>
          </div>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
          <span class="text-3xl font-extrabold text-purple-400">02</span>
          <div>
            <h3 class="text-2xl font-bold text-white mb-2">Platform Strategy &amp; Roadmap</h3>
            <p class="text-gray-300">We design a plan that builds security and compliance in from the start, aligned to business outcomes.</p>
          </div>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
          <span class="text-3xl font-extrabold text-purple-400">03</span>
          <div>
            <h3 class="text-2xl font-bold text-white mb-2">Architecture &amp; Design</h3>
            <p class="text-gray-300">We create secure, scalable blueprints and a UI/UX approach that feels simple even where the logic is complex.</p>
          </div>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
          <span class="text-3xl font-extrabold text-purple-400">04</span>
          <div>
            <h3 class="text-2xl font-bold text-white mb-2">Build and Test in Parallel</h3>
            <p class="text-gray-300">We test against security and compliance requirements throughout development, not as a final gate before launch.</p>
          </div>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
          <span class="text-3xl font-extrabold text-purple-400">05</span>
          <div>
            <h3 class="text-2xl font-bold text-white mb-2">Launch and Continuous Support</h3>
            <p class="text-gray-300">We monitor, refine, and support the platform post-launch as transaction volumes and requirements evolve.</p>
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
        <p class="text-gray-400 text-lg">The stack we work with on finance and banking projects.</p>
      </div>

      <div class="tech-split-grid">
        <div>
          @php
              $techStack = [
                  [
                      'name' => 'Cloud & Infrastructure',
                      'technologies' => [
                          ['name' => 'AWS', 'image' => asset('images/tech-logo/AWS.png')],
                          ['name' => 'Azure', 'image' => asset('images/tech-logo/Azure.png')],
                          ['name' => 'Google Cloud', 'image' => asset('images/tech-logo/GoogleCloud.png')],
                      ],
                  ],
                  [
                      'name' => 'Frontend & Experience',
                      'technologies' => [
                          ['name' => 'React', 'image' => asset('images/tech-logo/React.png')],
                          ['name' => 'Next.js', 'image' => asset('images/tech-logo/Next.js.png')],
                          ['name' => 'Node.js', 'image' => asset('images/tech-logo/Node.js.png')],
                      ],
                  ],
                  [
                      'name' => 'Data & Backend',
                      'technologies' => [
                          ['name' => 'PostgreSQL', 'image' => asset('images/tech-logo/PostgresSQL.png')],
                          ['name' => 'MySQL', 'image' => asset('images/tech-logo/MySQL.png')],
                          ['name' => 'Python', 'image' => asset('images/tech-logo/Python.png')],
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
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Security tested throughout, not reviewed at the end</h2>
          <p class="text-gray-300 leading-relaxed max-w-md">
            Financial platforms cannot treat security as something to review at the end of a project. Our Software Development and QA &amp; Testing teams build with security and compliance requirements defined upfront, then test against them throughout development rather than as a final gate before launch. This reduces the risk of expensive rework late in a project, and it gives you a clearer picture of where the platform stands at every stage, not just at the end.
          </p>
        </div>
        <div class="why-choose-image-frame">
          <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=1200&auto=format&fit=crop" alt="Why Choose InTech Nexus" class="why-choose-image">
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
          We build safe, trust first digital platforms and websites for regulated finance businesses, with security and compliance built into the plan from day one. This includes how data is stored, how access is controlled, and how the system behaves under real world load, not just how it performs in a demo environment.
        </p>
        <p class="text-gray-400 leading-relaxed text-base md:text-lg max-w-3xl">
          We also know that trust is not only a technical property. It comes through in how the product looks, how clearly it communicates, and how confidently a customer can complete a task without wondering if something went wrong. Our design and development teams work together on both sides of that problem at once.
        </p>
      </div>
    </div>
  </section>

  <!-- Insights Powering Growth -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="flex items-center justify-between mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white">Insights Powering Growth</h2>
        <a href="{{ url('/case-studies') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white/5 border border-white/10 text-white text-sm font-semibold hover:bg-white/10 transition-colors">
          Case Studies
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="#" class="group block bg-white/[0.03] border border-white/10 rounded-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" class="w-full h-56 object-cover" alt="">
          <div class="p-6">
            <span class="inline-block bg-white/10 text-white/80 text-xs font-medium px-3 py-1 rounded-full mb-4">Case Study</span>
            <h3 class="text-xl font-bold text-white group-hover:text-purple-400 transition-colors">Elevating Customer Experience & Automation for Orton</h3>
          </div>
        </a>

        <a href="#" class="group block bg-white/[0.03] border border-white/10 rounded-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=800&auto=format&fit=crop" class="w-full h-56 object-cover" alt="">
          <div class="p-6">
            <span class="inline-block bg-white/10 text-white/80 text-xs font-medium px-3 py-1 rounded-full mb-4">Case Study</span>
            <h3 class="text-xl font-bold text-white group-hover:text-purple-400 transition-colors">Driving Growth and Engagement for Pickles Auction</h3>
          </div>
        </a>

        <a href="#" class="group block bg-white/[0.03] border border-white/10 rounded-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop" class="w-full h-56 object-cover" alt="">
          <div class="p-6">
            <span class="inline-block bg-white/10 text-white/80 text-xs font-medium px-3 py-1 rounded-full mb-4">Enterprise Digital Platform</span>
            <h3 class="text-xl font-bold text-white group-hover:text-purple-400 transition-colors">Why Real-Time Data is the Backbone of Modern Business Innovation</h3>
          </div>
        </a>

        <a href="#" class="group block bg-white/[0.03] border border-white/10 rounded-lg overflow-hidden">
          <img src="https://images.unsplash.com/photo-1516110833967-0b5716ca1387?q=80&w=800&auto=format&fit=crop" class="w-full h-56 object-cover" alt="">
          <div class="p-6">
            <span class="inline-block bg-white/10 text-white/80 text-xs font-medium px-3 py-1 rounded-full mb-4">Enterprise Digital Platform</span>
            <h3 class="text-xl font-bold text-white group-hover:text-purple-400 transition-colors">Mastering Software Complexity: A Deep Dive into Domain-Driven Design</h3>
          </div>
        </a>
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
            <span>Can you work within our existing compliance and security requirements?</span>
            <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
          </button>
          <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
            Yes. We plan every finance project around the specific regulatory and security requirements relevant to your business and region, and we build with those constraints in mind from the start rather than adjusting for them later.
          </div>
        </div>

        <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
          <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
            <span>Do you have experience modernizing legacy banking systems?</span>
            <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
          </button>
          <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
            Yes. We approach legacy modernization carefully, often running new systems alongside old ones during a transition period to reduce risk.
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
          Ready to build a platform your customers can trust?
        </h2>
        <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-4 leading-relaxed">
          For upgrading an existing platform, see
          <a href="{{ url('/software-development') }}" class="text-purple-400 font-semibold hover:text-purple-300 transition-colors">Software Development</a>.
          For a stronger digital presence, see
          <a href="{{ url('/branding') }}" class="text-purple-400 font-semibold hover:text-purple-300 transition-colors">Branding</a>.
        </p>
        <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
          Ready to talk through your finance or banking project? Book a call, request a proposal, or get a free quote to begin.
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