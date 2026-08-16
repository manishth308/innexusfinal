@extends('layouts.app')
@section('title', 'Enterprise Software Development Services - InTech Nexus')

@push('styles')
<style>
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

<!-- Hero / Banner Section -->
<!-- Hero / Banner Section -->
<section class="relative overflow-hidden bg-[#070709] pt-16 pb-24 lg:pt-24 lg:pb-32 flex items-center min-h-[620px] border-b border-white/5">

  <!-- Ambient Fluid Glow Backdrop -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-[#070709] via-[#08080d] to-[#0c0814] opacity-90"></div>
    
    <!-- Abstract Glowing Fluid Wave Element -->
    <div class="absolute top-1/2 -right-20 -translate-y-1/2 w-[750px] h-[550px] opacity-60 blur-[70px]">
      <div class="w-full h-full bg-gradient-to-tr from-purple-700 via-indigo-600 to-cyan-500 rounded-full mix-blend-screen transform rotate-12 scale-y-50"></div>
    </div>
    
    <svg class="absolute right-0 top-1/2 -translate-y-1/2 w-full lg:w-1/2 h-full opacity-35" viewBox="0 0 800 600" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M-100 400C100 300 300 500 500 350C700 200 800 450 1000 300" stroke="url(#paint0_linear)" stroke-width="40" stroke-linecap="round" filter="blur(20px)"/>
      <path d="M-50 350C150 250 350 450 550 300C750 150 850 400 1050 250" stroke="url(#paint1_linear)" stroke-width="12" stroke-linecap="round" opacity="0.8"/>
      <defs>
        <linearGradient id="paint0_linear" x1="0" y1="0" x2="800" y2="600" gradientUnits="userSpaceOnUse">
          <stop stop-color="#9333EA"/>
          <stop offset="0.5" stop-color="#4F46E5"/>
          <stop offset="1" stop-color="#06B6D4"/>
        </linearGradient>
        <linearGradient id="paint1_linear" x1="0" y1="0" x2="800" y2="600" gradientUnits="userSpaceOnUse">
          <stop stop-color="#C084FC"/>
          <stop offset="1" stop-color="#38BDF8"/>
        </linearGradient>
      </defs>
    </svg>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
    <div class="max-w-4xl flex flex-col justify-center">
      
      <!-- Breadcrumb Navigation -->
      <nav class="flex flex-wrap items-center gap-2 text-sm font-medium text-emerald-400 mb-8" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:underline">Main Navigation</a>
        <span class="text-gray-500">></span>
        <a href="{{ url('/services') }}" class="hover:underline">Services</a>
        <span class="text-gray-500">></span>
        <a href="{{ url('/services/software-development') }}" class="hover:underline">Software Development</a>
        <span class="text-gray-500">></span>
        <span class="text-emerald-400">Custom Software Development</span>
      </nav>

      <!-- Main Headline -->
      <h1 class="text-5xl sm:text-6xl lg:text-[68px] font-bold text-white leading-[1.05] tracking-tight mb-8">
        Custom Software Development Services Built Around Your <span class="text-purple-400">Exact Process</span>
      </h1>

      <!-- Subheading Paragraphs -->
      <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-3xl font-normal mb-4">
        Custom software development services built around your exact process, not a generic template. We design and build systems that fit how your business actually operates.
      </p>
      <p class="text-base text-gray-400 leading-relaxed max-w-3xl font-normal mb-10">
        As a full Software Development partner, we handle everything from requirements mapping through to long term support, so the software fits how your team actually works instead of forcing your team to adapt. This makes us a strong fit whether you are replacing a spreadsheet based process or scaling past what an off the shelf tool can handle.
      </p>

      <!-- Action Buttons -->
      <div class="flex flex-wrap items-center gap-4">
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-medium hover:bg-purple-500 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
          Get a Free Quote
        </a>
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-all">
          Book a Call
        </a>
      </div>

    </div>
  </div>
</section>
<!-- Who This Is For & Problems We Solve Section -->
<section class="py-20 bg-[#070709] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Target Audience -->
      <div class="p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 flex flex-col justify-between">
        <div>
          <h2 class="text-3xl font-bold text-white leading-tight tracking-tight mb-4 flex items-center gap-3">
            <span class="w-2.5 h-2.5 rounded-full bg-purple-400"></span>
            Who This Is For
          </h2>
          <p class="text-gray-300 leading-relaxed text-base">
            Mid-to-large organizations that need robust internal platforms, customer-facing enterprise portals, or full-scale digital transformation initiatives. Ideal for teams managing complex workflows across multiple departments and geographies.
          </p>
        </div>
      </div>

      <!-- Problems We Solve -->
      <div class="p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 flex flex-col justify-between">
        <div>
          <h2 class="text-3xl font-bold text-white leading-tight tracking-tight mb-4 flex items-center gap-3">
            <span class="w-2.5 h-2.5 rounded-full bg-purple-400"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Legacy systems that are slow, fragile, and costly to maintain.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Disconnected tools creating data silos across departments.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Platforms that cannot scale with growing user bases or business demands.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="text-purple-400 font-bold">•</span>
              <span>Compliance and security gaps in existing software architectures.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Core Capabilities Grid -->
<section class="py-20 bg-[#070709] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="mb-14">
      <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight tracking-tight mb-4">What We Offer</h2>
      <p class="text-gray-400 text-lg">End-to-end enterprise solutions engineered for reliability, security, and scale.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Capability 1 -->
      <div class="group p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 hover:border-purple-500/50 hover:bg-white/[0.04] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white leading-tight tracking-tight mb-3 group-hover:text-purple-400 transition-colors">Enterprise Application Development</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Custom platforms for complex business needs</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• ERP and CRM systems</li>
            <li>• Supply chain management platforms</li>
            <li>• HR and workforce management tools</li>
          </ul>
        </div>
      </div>

      <!-- Capability 2 -->
      <div class="group p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 hover:border-purple-500/50 hover:bg-white/[0.04] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white leading-tight tracking-tight mb-3 group-hover:text-purple-400 transition-colors">Legacy Modernization</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Transform old systems into modern architectures</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• Monolith to microservices migration</li>
            <li>• Cloud-native architecture design</li>
            <li>• Data migration and system integration</li>
          </ul>
        </div>
      </div>

      <!-- Capability 3 -->
      <div class="group p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 hover:border-purple-500/50 hover:bg-white/[0.04] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white leading-tight tracking-tight mb-3 group-hover:text-purple-400 transition-colors">Integration & API Strategy</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Seamlessly connect your tech ecosystem</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• RESTful and GraphQL API development</li>
            <li>• Third-party system integrations</li>
            <li>• Enterprise service bus implementation</li>
          </ul>
        </div>
      </div>

      <!-- Capability 4 -->
      <div class="group p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 hover:border-purple-500/50 hover:bg-white/[0.04] shadow-[0_0_20px_rgba(168,85,247,0.05)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
        <div>
          <h3 class="text-2xl font-bold text-white leading-tight tracking-tight mb-3 group-hover:text-purple-400 transition-colors">Security & Compliance</h3>
          <p class="text-purple-400 text-sm font-medium mb-3">Enterprise-grade protection and governance</p>
          <ul class="text-gray-400 leading-relaxed space-y-1.5 text-sm">
            <li>• Role-based access control (RBAC)</li>
            <li>• SOC 2 and GDPR compliance readiness</li>
            <li>• End-to-end encryption and audit logging</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process Section: 5-Step Playbook -->
<section class="py-24 bg-[#070709] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight tracking-tight mb-4">Our Process</h2>
      <p class="text-gray-400 text-lg leading-relaxed">
        A proven methodology for delivering enterprise software on time, on budget, and aligned with your strategic objectives.
      </p>
    </div>

    <div class="space-y-6">
      <!-- Step 01 -->
      <div class="p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-bold text-purple-400">01</span>
        <div>
          <h3 class="text-2xl font-bold text-white leading-tight tracking-tight mb-2">Enterprise Discovery</h3>
          <p class="text-gray-300 text-base leading-relaxed">We conduct stakeholder interviews, workflow audits, and technical assessments to define scope, compliance requirements, and success metrics.</p>
        </div>
      </div>

      <!-- Step 02 -->
      <div class="p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-bold text-purple-400">02</span>
        <div>
          <h3 class="text-2xl font-bold text-white leading-tight tracking-tight mb-2">Architecture & Roadmap</h3>
          <p class="text-gray-300 text-base leading-relaxed">We design scalable system architecture, select the right tech stack, and create a phased delivery roadmap with clear milestones.</p>
        </div>
      </div>

      <!-- Step 03 -->
      <div class="p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-bold text-purple-400">03</span>
        <div>
          <h3 class="text-2xl font-bold text-white leading-tight tracking-tight mb-2">Agile Development</h3>
          <p class="text-gray-300 text-base leading-relaxed">We build in sprints with regular stakeholder demos, ensuring the product evolves based on real feedback and changing business needs.</p>
        </div>
      </div>

      <!-- Step 04 -->
      <div class="p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-bold text-purple-400">04</span>
        <div>
          <h3 class="text-2xl font-bold text-white leading-tight tracking-tight mb-2">Rigorous Testing & QA</h3>
          <p class="text-gray-300 text-base leading-relaxed">Automated testing, penetration testing, and performance benchmarking ensure the platform is secure, stable, and ready for enterprise deployment.</p>
        </div>
      </div>

      <!-- Step 05 -->
      <div class="p-8 md:p-10 rounded-3xl bg-white/[0.02] border border-white/10 hover:border-purple-500/40 transition-all duration-300 flex flex-col md:flex-row gap-6 md:items-start">
        <span class="text-3xl font-bold text-purple-400">05</span>
        <div>
          <h3 class="text-2xl font-bold text-white leading-tight tracking-tight mb-2">Deployment & Managed Support</h3>
          <p class="text-gray-300 text-base leading-relaxed">We deploy with zero-downtime strategies, provide team training, and offer ongoing managed support and optimization services.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tools / Technologies Ticker Section -->
<section class="py-16 bg-[#070709] border-t border-white/5 overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 mb-8">
    <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight tracking-tight">Tools & Technologies</h2>
  </div>

  <div class="flex whitespace-nowrap animate-scroll">
    <div class="flex items-center gap-12 px-6 text-gray-400 font-semibold text-base tracking-wider uppercase">
      <span>Java</span> •
      <span>.NET</span> •
      <span>Python</span> •
      <span>React</span> •
      <span>Angular</span> •
      <span>Kubernetes</span> •
      <span>Docker</span> •
      <span>AWS</span> •
      <span>Azure</span> •
      <span>Google Cloud</span> •
      <span>PostgreSQL</span> •
      <span>Oracle</span> •
      <span>Redis</span> •
      <span>Elasticsearch</span> •
      <span>Kafka</span> •
      <span>Terraform</span> •
    </div>
    <div class="flex items-center gap-12 px-6 text-gray-400 font-semibold text-base tracking-wider uppercase">
      <span>Java</span> •
      <span>.NET</span> •
      <span>Python</span> •
      <span>React</span> •
      <span>Angular</span> •
      <span>Kubernetes</span> •
      <span>Docker</span> •
      <span>AWS</span> •
      <span>Azure</span> •
      <span>Google Cloud</span> •
      <span>PostgreSQL</span> •
      <span>Oracle</span> •
      <span>Redis</span> •
      <span>Elasticsearch</span> •
      <span>Kafka</span> •
      <span>Terraform</span> •
    </div>
  </div>
</section>

<!-- Why Choose InTech Nexus -->
<section class="py-24 bg-[#070709] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="p-10 md:p-14 rounded-3xl bg-gradient-to-br from-purple-950/30 via-white/[0.01] to-white/[0.03] border border-purple-500/30">
      <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight tracking-tight mb-6">Why Choose InTech Nexus</h2>
      <p class="text-gray-300 text-lg leading-relaxed max-w-4xl font-normal">
        We combine deep technical expertise with business acumen to deliver enterprise solutions that drive measurable outcomes. Our teams operate with the rigor your organization expects — transparent reporting, governance-aligned processes, and a commitment to long-term partnership over one-off projects.
      </p>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-24 bg-[#070709] border-t border-white/5" x-data="{ openFaq: null }">
  <div class="max-w-5xl mx-auto px-6 sm:px-12">
    <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight tracking-tight mb-12 text-center">Frequently Asked Questions</h2>
    
    <div class="space-y-4">
      <!-- FAQ 1 -->
      <div class="bg-white/[0.02] border border-white/10 rounded-2xl overflow-hidden">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>What industries do you serve for enterprise software?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 1 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 1" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed text-base">
          We work across finance, healthcare, manufacturing, logistics, retail, and government sectors. Our solutions are built to meet industry-specific compliance and regulatory requirements.
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="bg-white/[0.02] border border-white/10 rounded-2xl overflow-hidden">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>How do you handle data security and compliance?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 2 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 2" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed text-base">
          Security is embedded in every stage of our development lifecycle. We follow OWASP guidelines, implement encryption at rest and in transit, and ensure compliance with standards such as SOC 2, GDPR, and HIPAA where applicable.
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="bg-white/[0.02] border border-white/10 rounded-2xl overflow-hidden">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>Can you integrate with our existing enterprise systems?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 3 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 3" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed text-base">
          Yes. We specialize in integrating with ERPs, CRMs, legacy databases, and third-party services. Our API-first approach ensures clean, maintainable integrations that avoid vendor lock-in.
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="bg-white/[0.02] border border-white/10 rounded-2xl overflow-hidden">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
          <span>What does your support model look like after launch?</span>
          <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === 4 ? '−' : '+'"></span>
        </button>
        <div x-show="openFaq === 4" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed text-base">
          We offer flexible support tiers including monitoring, bug fixes, performance tuning, and feature enhancements. Many clients choose a dedicated managed services team for ongoing operations.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Banner -->
<section class="py-24 bg-[#070709] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.02] border border-purple-500/30 rounded-3xl p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.15)]">
      <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight tracking-tight mb-6">
        Ready to build enterprise software that scales?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Schedule a consultation with our enterprise team to discuss your requirements, timeline, and how we can help you achieve your business goals.
      </p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-medium hover:bg-purple-500 shadow-[0_0_20px_rgba(168,85,247,0.4)] transition-all">
          Get a Free Quote
        </a>
        <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-all">
          Book a Call
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Floating Chat Button Widget -->
<a href="{{ url('/contact') }}" class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-purple-600 text-white flex items-center justify-center shadow-[0_0_20px_rgba(168,85,247,0.5)] hover:bg-purple-500 transition-all">
  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
    <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/>
  </svg>
</a>

@endsection