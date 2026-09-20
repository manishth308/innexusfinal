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
          <a href="{{ url('/industries') }}" class="hover:text-purple-300 transition-colors">Industries</a>
          <span class="text-gray-500">/</span>
          <span class="text-purple-400">Healthcare</span>
        </nav>

        <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
          Healthcare Platforms That Work for <span class="text-purple-400">Patients, Providers, and Regulators</span>
        </h1>

        <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
          Healthcare technology has to work for patients, providers, and regulators all at once. It cannot be easy to use at the cost of privacy and safety, and it cannot treat those rules as an afterthought either. A patient portal that is technically compliant but confusing to use will still go unused. A beautifully designed booking flow that overlooks data handling requirements is not a solution at all, it is a liability.
        </p>
        <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
          We work with healthcare businesses on both sides of this problem: the software and systems that need to work correctly and securely, and the patient and provider facing experience that needs to feel simple despite everything happening behind the scenes. Our team brings both technical and design discipline to every healthcare project, so neither gets treated as secondary to the other.
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

<!-- Common Challenges -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-4xl mx-auto px-6 sm:px-12">
    <div class="p-8 bg-white/[0.03] border border-white/10 text-center">
      <h2 class="text-2xl font-bold text-white mb-4 flex items-center justify-center gap-3">
        <span class="w-2 h-2 rounded-full bg-purple-400"></span>
        Common Challenges
      </h2>
      <ul class="space-y-3 text-gray-300 max-w-2xl mx-auto">
        <li>Patient facing tools need to be simple to use without putting data at risk.</li>
        <li>Older systems make it hard to improve the patient or provider experience without a costly, risky migration.</li>
        <li>Marketing needs to build trust in a field where credibility matters more than clever wording.</li>
        <li>Appointment scheduling and intake processes that still rely on phone calls or paperwork, creating friction for both patients and staff.</li>
        <li>Disconnected systems between clinical records, billing, and patient communication, leading to duplicated work.</li>
        <li>Meeting accessibility expectations for a patient base that includes older adults and people with varying levels of technical comfort.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Why Healthcare Businesses Choose InTech Nexus -->
<section class="relative py-24 bg-[#0b0c10] border-t border-white/5 why-choose-section">
  <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
  <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
      <div class="p-10 md:p-16 text-white flex flex-col justify-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">One team, day one</h2>
        <p class="text-gray-300 leading-relaxed max-w-md">
          Healthcare projects rarely fail because of a single bad decision. They fail when privacy, usability, and clinical workflow get designed in isolation from each other. Our Software Development and UI/UX Design teams work on healthcare projects together from day one, so decisions about how data is handled and decisions about how a screen looks and feels are made with full knowledge of each other, not negotiated after the fact between two disconnected teams.
        </p>
      </div>
      <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=1200&auto=format&fit=crop" alt="Why Choose InTech Nexus" class="why-choose-image">
      </div>
    </div>
  </div>
</section>

<!-- Services We Provide -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-4xl mx-auto px-6 sm:px-12">
    <div class="mb-12 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Services We Provide</h2>
      <p class="text-gray-400 text-lg">We bring both technical and design discipline to every healthcare project.</p>
    </div>

    <div class="p-8 bg-white/[0.03] border border-white/10 text-center">
      <ul class="space-y-3 text-gray-300 max-w-2xl mx-auto">
        <li>Software Development and Mobile App Development for healthcare software and apps, including patient portals and provider tools.</li>
        <li>UI/UX Design built around patients and providers, tested for clarity across a wide range of ages and technical comfort levels.</li>
        <li>Web Development and Digital Marketing for your website and outreach, built to earn trust in a field where credibility matters.</li>
        <li>QA & Testing with attention to accessibility and reliability, since healthcare tools cannot afford to fail during real use.</li>
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
        <li>Appointment booking and telemedicine platforms that reduce phone based scheduling and no shows.</li>
        <li>Clinic and hospital management systems that bring scheduling, records, and billing into one connected system.</li>
        <li>EMR and EHR integrations that connect new tools to the clinical systems you already rely on.</li>
        <li>Healthcare reporting dashboards that give staff and administrators a clear, real time view of what is happening across the practice.</li>
        <li>Patient intake and communication tools designed to reduce paperwork and missed appointments.</li>
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
        We design and build healthcare platforms and websites with privacy, accessibility, and the right rules built in from the start, not added later. This means data handling, access control, and compliance considerations are part of the technical plan from the first discovery conversation, not a checklist applied at the end of the project.
      </p>
      <p class="text-gray-400 leading-relaxed text-base md:text-lg max-w-3xl">
        On the patient facing side, we test designs with real usability in mind, since a confusing interface can be just as harmful as a technical failure if it keeps someone from booking care or understanding their own information.
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

<!-- Get Started / Call to Action Banner -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)] hover:shadow-[0_0_60px_rgba(168,85,247,0.35)] transition-all duration-300">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
        Ready to build a healthcare platform that earns trust from day one?
      </h2>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-4 leading-relaxed">
        For a new healthcare platform idea, such as a telemedicine app, see
        <a href="{{ url('/software-development') }}" class="text-purple-400 font-semibold hover:text-purple-300 transition-colors">Software Development</a>.
        For an outdated patient facing website, see
        <a href="{{ url('/web-development') }}" class="text-purple-400 font-semibold hover:text-purple-300 transition-colors">Web Development</a>.
      </p>
      <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
        Ready to talk through your healthcare project? Get a free quote or book a call with our team.
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