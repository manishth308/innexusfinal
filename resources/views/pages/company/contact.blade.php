@extends('layouts.app')
@section('title', 'Contact Us - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .ct-page{
    --bg-base:#0b0c10;
    --card-bg:rgba(255,255,255,0.03);
    --card-border:rgba(255,255,255,0.10);
    --purple-accent:#a855f7;
    --purple-strong:#9333ea;
    --text-muted:#9CA3AF; /* gray-400 */
    --text-body:#D1D5DB;  /* gray-300 */
    --line:rgba(255,255,255,0.10);
    font-family:'Inter',system-ui,sans-serif;
    background:var(--bg-base);
    color:#fff;
  }
  .ct-page h1, .ct-page h2, .ct-page h3, .ct-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .ct-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  .ct-hero{
    background:#0b0c10;
    position:relative;
    overflow:hidden;
  }
  .ct-hero .hero-panel{
    position:absolute; top:0; right:0;
    width:100%; height:100%;
    background:linear-gradient(135deg, rgba(147,51,234,0.60), rgba(126,34,206,0.30) 50%, rgba(88,28,135,0.10));
    clip-path:polygon(75% 0%, 100% 0%, 100% 100%, 0% 100%);
    opacity:0.9;
    filter:drop-shadow(0 0 8px rgba(168,85,247,0.6));
    z-index:0;
  }
  @media (min-width:1024px){
    .ct-hero .hero-panel{ width:65%; }
  }
  .ct-hero .hero-topline{
    position:absolute; top:0; left:0; right:0; height:1px;
    background:linear-gradient(to right, transparent, rgba(168,85,247,0.5), transparent);
    z-index:2;
  }

  /* ---- CSS + Alpine hero background (replaces the Vanta globe) ---- */
  .hero-bg-wrap{
    position:absolute; inset:0; z-index:1; overflow:hidden; pointer-events:none;
  }
  .hero-orb-outer{ position:absolute; will-change:transform; transition:transform .25s ease-out; }
  .hero-orb-a-pos{ width:420px; height:420px; top:-90px; right:-70px; }
  .hero-orb-b-pos{ width:300px; height:300px; bottom:-70px; left:6%; }
  .hero-orb-c-pos{ width:220px; height:220px; top:38%; left:50%; }
  .hero-orb{
    position:absolute; inset:0; border-radius:50%; filter:blur(60px); opacity:.55;
  }
  .hero-orb-a{ background:radial-gradient(circle at 30% 30%, rgba(168,85,247,0.55), transparent 70%); animation:orbFloatA 14s ease-in-out infinite; }
  .hero-orb-b{ background:radial-gradient(circle at 60% 40%, rgba(147,51,234,0.45), transparent 70%); animation:orbFloatB 18s ease-in-out infinite; }
  .hero-orb-c{ background:radial-gradient(circle, rgba(192,132,252,0.35), transparent 70%); animation:orbFloatC 11s ease-in-out infinite; }
  @keyframes orbFloatA{ 0%,100%{ transform:translate(0,0) scale(1); } 50%{ transform:translate(-30px,20px) scale(1.08); } }
  @keyframes orbFloatB{ 0%,100%{ transform:translate(0,0) scale(1); } 50%{ transform:translate(25px,-15px) scale(0.95); } }
  @keyframes orbFloatC{ 0%,100%{ transform:translate(0,0) scale(1); } 50%{ transform:translate(-15px,-25px) scale(1.12); } }

  .hero-globe-outer{
    position:absolute; right:2%; top:50%; width:520px; height:520px;
    will-change:transform; transition:transform .25s ease-out;
  }
  @media (max-width:1023px){ .hero-globe-outer{ width:340px; height:340px; right:-6%; } }
  .hero-globe{
    width:100%; height:100%;
    opacity:.85;
    transform-origin:50% 50%;
    animation:globeSpin 46s linear infinite;
    filter:
      drop-shadow(0 0 18px rgba(168,85,247,0.7))
      drop-shadow(0 0 42px rgba(147,51,234,0.45))
      drop-shadow(0 0 80px rgba(192,132,252,0.25));
  }
  @keyframes globeSpin{ from{ transform:rotate(0deg); } to{ transform:rotate(360deg); } }
  .hero-globe-ring{ transform-origin:180px 180px; }
  .ring-1{ animation:spinRing 16s linear infinite; }
  .ring-2{ animation:spinRing 24s linear infinite reverse; }
  .ring-3{ animation:spinRing 30s linear infinite; }
  @keyframes spinRing{ from{ transform:rotate(0deg); } to{ transform:rotate(360deg); } }
  .hero-globe-dots circle{ animation:dotTwinkle 3s ease-in-out infinite; }
  .hero-globe-dots circle:nth-child(2){ animation-delay:.5s; }
  .hero-globe-dots circle:nth-child(3){ animation-delay:1s; }
  .hero-globe-dots circle:nth-child(4){ animation-delay:1.5s; }
  .hero-globe-dots circle:nth-child(5){ animation-delay:2s; }
  .hero-globe-dots circle:nth-child(6){ animation-delay:2.5s; }
  @keyframes dotTwinkle{ 0%,100%{ opacity:.4; } 50%{ opacity:1; } }

  .fade-up{ opacity:0; transform:translateY(24px); transition:opacity .6s ease, transform .6s ease; }
  .fade-up.visible{ opacity:1; transform:translateY(0); }

  .ct-input, .ct-select, .ct-textarea{
    width:100%;
    border:1px solid var(--card-border);
    background:rgba(255,255,255,0.03);
    padding:.85rem 1rem;
    font-family:'Inter',sans-serif;
    font-size:.95rem;
    color:#fff;
    border-radius:0;
    transition:border-color .2s ease, box-shadow .2s ease;
  }
  .ct-input::placeholder, .ct-textarea::placeholder{
    color:#6B7280;
  }
  .ct-input:focus, .ct-select:focus, .ct-textarea:focus{
    outline:none;
    border-color:var(--purple-accent);
    box-shadow:0 0 0 3px rgba(168,85,247,0.15);
  }
  .ct-select option{
    background:#0b0c10;
    color:#fff;
  }
  .ct-label{
    display:block;
    font-family:'IBM Plex Mono',monospace;
    font-size:.72rem;
    text-transform:uppercase;
    letter-spacing:.08em;
    font-weight:600;
    color:#fff;
    margin-bottom:.5rem;
  }

  .type-option input{ position:absolute; opacity:0; }
  .type-option span{
    display:block;
    border:1px solid var(--card-border);
    border-radius:0;
    padding:1rem;
    text-align:center;
    font-weight:600;
    color:var(--text-body);
    cursor:pointer;
    transition:all .2s ease;
  }
  .type-option input:checked + span{
    border-color:var(--purple-accent);
    background:rgba(168,85,247,0.08);
    color:var(--purple-accent);
  }

  .ct-card{
    background:var(--card-bg);
    border:1px solid var(--card-border);
  }

  .why-choose-image-frame{
    position:relative;
    width:100%;
    height:100%;
    min-height:320px;
    overflow:hidden;
  }
  .why-choose-image{
    display:block;
    width:100%;
    height:100%;
    object-fit:cover;
    object-position:center;
  }

  .ct-btn-solid{
    background:var(--purple-strong);
    box-shadow:0 0 20px rgba(168,85,247,0.4);
  }
  .ct-btn-solid:hover{
    background:#7e22ce;
  }

  @media (prefers-reduced-motion: reduce){
    .ct-page *{ animation:none!important; transition:none!important; }
    .fade-up{ opacity:1!important; transform:none!important; }
  }
</style>
@endpush

@section('content')
<div class="ct-page">

  <!-- ===== Hero ===== -->
  <header class="ct-hero relative overflow-hidden text-white border-b border-white/10"
           x-data="{ mx: 0, my: 0 }"
           @mousemove.window="mx = ((event.clientX / window.innerWidth) - 0.5); my = ((event.clientY / window.innerHeight) - 0.5)">

    <div class="hero-panel" aria-hidden="true"></div>

    <div class="hero-bg-wrap" aria-hidden="true">
      <div class="hero-orb-outer hero-orb-a-pos" :style="`transform: translate(${(mx*40).toFixed(1)}px, ${(my*40).toFixed(1)}px)`">
        <div class="hero-orb hero-orb-a"></div>
      </div>
      <div class="hero-orb-outer hero-orb-b-pos" :style="`transform: translate(${(mx*70).toFixed(1)}px, ${(my*70).toFixed(1)}px)`">
        <div class="hero-orb hero-orb-b"></div>
      </div>
      <div class="hero-orb-outer hero-orb-c-pos" :style="`transform: translate(${(mx*100).toFixed(1)}px, ${(my*100).toFixed(1)}px)`">
        <div class="hero-orb hero-orb-c"></div>
      </div>

      <div class="hero-globe-outer" :style="`transform: translateY(-50%) translate(${(mx*25).toFixed(1)}px, ${(my*25).toFixed(1)}px)`">
        <svg class="hero-globe" viewBox="0 0 360 360">
          <g fill="none" stroke="#c084fc" opacity="0.85">
            <ellipse cx="180" cy="180" rx="150" ry="150" stroke-width="2"/>
            <ellipse class="hero-globe-ring ring-1" cx="180" cy="180" rx="150" ry="55" stroke-width="2.2"/>
            <ellipse class="hero-globe-ring ring-2" cx="180" cy="180" rx="150" ry="95" stroke-width="2.2"/>
            <ellipse class="hero-globe-ring ring-3" cx="180" cy="180" rx="60" ry="150" stroke-width="2.2"/>
          </g>
          <g class="hero-globe-dots" fill="#e9d5ff">
            <circle cx="180" cy="30" r="4"/>
            <circle cx="303" cy="118" r="3.5"/>
            <circle cx="255" cy="270" r="3.5"/>
            <circle cx="90" cy="280" r="3"/>
            <circle cx="58" cy="112" r="3"/>
            <circle cx="180" cy="330" r="3"/>
          </g>
        </svg>
      </div>
    </div>

    <div class="hero-topline" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-14 pb-24 lg:pt-16 lg:pb-28">
      <nav class="flex items-center gap-2 text-sm font-medium text-purple-400 mb-6" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-purple-300 transition-colors">Main Navigation</a>
        <span class="text-gray-500">/</span>
        <span class="text-purple-400">Contact</span>
      </nav>

      <div class="max-w-2xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">
          Get In Touch
        </span>
        <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6 text-white">
          Let's Build Something Worth Launching
        </h1>
        <p class="text-lg text-gray-300 leading-relaxed mb-10 max-w-xl">
          Tell us where you are starting from. An idea, an existing product, or a business that needs to grow. We will tell you the fastest, most sensible way to get there.
        </p>

        <a href="#project-form" class="ct-btn-solid inline-flex items-center gap-2 px-7 py-3.5 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5 w-fit">
          Get a Free Quote
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
        </a>
      </div>
    </div>
  </header>

  <!-- ===== Project Intake Form ===== -->
  <section id="project-form" class="py-24 border-t border-white/5 fade-up">
    <div class="max-w-3xl mx-auto px-6 sm:px-12">
      <div class="mb-12 text-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Tell Us About Your Project</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3 text-white">Share the Details, We'll Follow Up</h2>
        <p class="mt-3 text-base text-gray-400">
          Share your name, company, and project details, along with the type of project, build, design, or grow, and your budget range. We will follow up with next steps.
        </p>
      </div>

      @if (session('success'))
        <div class="mb-6 px-6 py-4 border border-green-500/40 bg-green-500/10 text-green-400" role="status">
          {{ session('success') }}
        </div>
      @endif

      @if ($errors->any())
        <div class="mb-6 px-6 py-4 border border-red-500/40 bg-red-500/10 text-red-400" role="alert">
          <p class="font-semibold mb-1">Please fix the following:</p>
          <ul class="list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ url('/contact') }}" class="ct-card p-8 md:p-10">
        @csrf

        {{-- Honeypot: real visitors never see or fill this in (see .hp-field
             below); bots that auto-fill every input tend to. --}}
        <div class="hp-field" aria-hidden="true">
          <label for="website">Website</label>
          <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
          <div>
            <label for="name" class="ct-label">Your Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="ct-input" placeholder="Jane Doe" required>
          </div>
          <div>
            <label for="company" class="ct-label">Company</label>
            <input type="text" id="company" name="company" value="{{ old('company') }}" class="ct-input" placeholder="Company name">
          </div>
        </div>

        <div class="mb-6">
          <label for="email" class="ct-label">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" class="ct-input" placeholder="you@company.com" required>
        </div>

        <div class="mb-6">
          <span class="ct-label">Type of Project</span>
          <div class="grid grid-cols-3 gap-3">
            <label class="type-option relative">
              <input type="radio" name="project_type" value="build" {{ old('project_type', 'build') === 'build' ? 'checked' : '' }}>
              <span>Build</span>
            </label>
            <label class="type-option relative">
              <input type="radio" name="project_type" value="design" {{ old('project_type') === 'design' ? 'checked' : '' }}>
              <span>Design</span>
            </label>
            <label class="type-option relative">
              <input type="radio" name="project_type" value="grow" {{ old('project_type') === 'grow' ? 'checked' : '' }}>
              <span>Grow</span>
            </label>
          </div>
        </div>

        <div class="mb-6">
          <label for="budget" class="ct-label">Budget Range</label>
          <select id="budget" name="budget_range" class="ct-select">
            <option value="" {{ old('budget_range') === null ? 'selected' : '' }}>Select a range</option>
            <option value="under-5k" {{ old('budget_range') === 'under-5k' ? 'selected' : '' }}>Under $5,000</option>
            <option value="5k-15k" {{ old('budget_range') === '5k-15k' ? 'selected' : '' }}>$5,000 – $15,000</option>
            <option value="15k-50k" {{ old('budget_range') === '15k-50k' ? 'selected' : '' }}>$15,000 – $50,000</option>
            <option value="50k-plus" {{ old('budget_range') === '50k-plus' ? 'selected' : '' }}>$50,000+</option>
            <option value="not-sure" {{ old('budget_range') === 'not-sure' ? 'selected' : '' }}>Not sure yet</option>
          </select>
        </div>

        <div class="mb-8">
          <label for="details" class="ct-label">Project Details</label>
          <textarea id="details" name="project_details" rows="5" class="ct-textarea" placeholder="Tell us where you're starting from and what you're trying to get to.">{{ old('project_details') }}</textarea>
        </div>

        <button type="submit" class="ct-btn-solid w-full inline-flex items-center justify-center gap-2 px-7 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5">
          Send Project Details
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
        </button>
      </form>
    </div>
  </section>

  <!-- ===== Other Ways to Reach Us ===== -->
  <section class="py-20 border-t border-white/5 fade-up">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Other Ways to Reach Us</span>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="ct-card p-8">
          <h3 class="text-xl font-bold mb-3 text-white">General Inquiries</h3>
          <p class="leading-relaxed text-base text-gray-400">
            Available on request.
          </p>
        </div>

        <div class="ct-card p-8">
          <h3 class="text-xl font-bold mb-3 text-white">Existing Clients</h3>
          <p class="leading-relaxed text-base text-gray-400">
            A dedicated support contact is given at the start of your project.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== No Pressure, No Obligation ===== -->
  <section class="relative py-24 bg-[#0b0c10] border-t border-white/5 why-choose-section fade-up">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04] pointer-events-none"></div>
    <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
        <div class="p-10 md:p-16 text-white flex flex-col justify-center">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">No Pressure, No Obligation</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Just a clear look at what your project needs</h2>
          <p class="text-gray-300 leading-relaxed max-w-md mb-8">
            Whether that is a full Build, a Design refresh, or a Grow plan.
          </p>
          <div class="flex flex-wrap gap-3">
            <span class="font-mono text-xs font-semibold uppercase tracking-wider px-4 py-2 rounded-full border border-purple-400/40 text-purple-300">Build</span>
            <span class="font-mono text-xs font-semibold uppercase tracking-wider px-4 py-2 rounded-full border border-purple-400/40 text-purple-300">Design</span>
            <span class="font-mono text-xs font-semibold uppercase tracking-wider px-4 py-2 rounded-full border border-purple-400/40 text-purple-300">Grow</span>
          </div>
        </div>
        <div class="why-choose-image-frame">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1200&auto=format&fit=crop" alt="No Pressure, No Obligation - InTech Nexus" class="why-choose-image">
        </div>
      </div>
    </div>
  </section>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function(){
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
  });
</script>
@endsection