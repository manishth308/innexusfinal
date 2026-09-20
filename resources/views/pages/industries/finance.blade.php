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
          In finance and banking, trust matters as much as the service itself. Every digital touchpoint needs to feel safe, honest, and built to a high standard, because a single confusing or unreliable moment can be enough to make a customer question whether their money is actually secure. This makes finance one of the least forgiving industries for cutting corners on either security or user experience.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          We work with finance and banking businesses that need technology built to hold up under scrutiny, from regulators, from customers, and from their own internal risk teams. That means every project starts from a security first mindset, then builds outward toward an experience that still feels simple and trustworthy to the people using it.
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

<!-- Common Challenges -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-4xl mx-auto px-6 sm:px-12">
    <div class="p-8 bg-white/[0.03] border border-white/10 text-center">
      <h2 class="text-2xl font-bold text-white mb-4 flex items-center justify-center gap-3">
        <span class="w-2 h-2 rounded-full bg-purple-400"></span>
        Common Challenges
      </h2>
      <ul class="space-y-3 text-gray-300 max-w-2xl mx-auto">
        <li>Security and compliance rules shape most technical decisions, which can slow down projects that are not planned with those constraints in mind from the start.</li>
        <li>Customer trust depends a lot on how safe and professional the digital experience feels, not just on what is happening behind the scenes.</li>
        <li>Older systems can make change slow and risky, especially when core banking or transaction systems are involved.</li>
        <li>Fraud prevention and identity verification need to be built in without making the experience feel hostile to legitimate customers.</li>
        <li>Reporting and audit requirements that demand accurate, well organized data across multiple systems.</li>
        <li>Competing against fintech challengers who often move faster on digital experience, even without the same institutional trust.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Why Finance and Banking Businesses Choose InTech Nexus -->
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

<!-- Services We Provide -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-4xl mx-auto px-6 sm:px-12">
    <div class="mb-12 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Services We Provide</h2>
      <p class="text-gray-400 text-lg">We build financial platforms with security and compliance in mind from day one.</p>
    </div>

    <div class="p-8 bg-white/[0.03] border border-white/10 text-center">
      <ul class="space-y-3 text-gray-300 max-w-2xl mx-auto">
        <li>Secure Software Development for financial platforms, including account systems, transaction processing, and reporting tools.</li>
        <li>UI/UX Design for financial products, designed to feel trustworthy and simple even when the underlying logic is complex.</li>
        <li>Legacy system modernization, planned carefully to reduce risk during migration from older core systems.</li>
        <li>QA & Testing for security and performance, including load testing for systems that need to handle high transaction volumes reliably.</li>
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
        <li>Digital banking and fintech platforms built for both security and everyday usability.</li>
        <li>Loan and insurance management systems that bring application, underwriting, and servicing into one connected workflow.</li>
        <li>Payment system integrations connecting your platform to the payment processors and banking rails your business relies on.</li>
        <li>Financial reporting dashboards that give your team and your regulators a clear, accurate view of performance and compliance.</li>
        <li>Identity verification and fraud prevention workflows designed to protect the business without adding unnecessary friction for customers.</li>
      </ul>
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

<!-- Common Questions -->
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

<!-- Get Started / Call to Action Banner -->
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
        Ready to talk through your finance or banking project? Get a free quote or book a call with our team.
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