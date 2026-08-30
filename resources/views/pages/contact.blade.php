@extends('layouts.app')
@section('title', 'Contact Us - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .ct-page{
    --navy-deep:#0B1B3D;
    --navy-darker:#071227;
    --blue-accent:#3D6BFF;
    --blue-bright:#5A8CFF;
    --bg-soft:#F3F5FA;
    --text-muted:#6B7280;
    --line:#E3E7F0;
    font-family:'Inter',system-ui,sans-serif;
  }
  .ct-page h1, .ct-page h2, .ct-page h3, .ct-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .ct-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  .ct-hero{
    background:
      radial-gradient(ellipse 800px 480px at 15% 10%, rgba(61,107,255,0.30), transparent 60%),
      radial-gradient(ellipse 700px 500px at 85% 90%, rgba(90,140,255,0.18), transparent 55%),
      var(--navy-deep);
  }
  .ct-hero .vector-lines{ position:absolute; inset:0; pointer-events:none; opacity:0.5; }

  .float-graphic{ animation:float 6s ease-in-out infinite; }
  @keyframes float{ 0%, 100%{ transform:translateY(0); } 50%{ transform:translateY(-10px); } }

  .fade-up{ opacity:0; transform:translateY(24px); transition:opacity .6s ease, transform .6s ease; }
  .fade-up.visible{ opacity:1; transform:translateY(0); }

  .ct-input, .ct-select, .ct-textarea{
    width:100%;
    border:1px solid var(--line);
    background:#fff;
    padding:.85rem 1rem;
    font-family:'Inter',sans-serif;
    font-size:.95rem;
    color:var(--navy-deep);
    border-radius:2px;
    transition:border-color .2s ease, box-shadow .2s ease;
  }
  .ct-input:focus, .ct-select:focus, .ct-textarea:focus{
    outline:none;
    border-color:var(--blue-accent);
    box-shadow:0 0 0 3px rgba(61,107,255,0.12);
  }
  .ct-label{
    display:block;
    font-family:'IBM Plex Mono',monospace;
    font-size:.72rem;
    text-transform:uppercase;
    letter-spacing:.08em;
    font-weight:600;
    color:var(--navy-deep);
    margin-bottom:.5rem;
  }

  .type-option input{ position:absolute; opacity:0; }
  .type-option span{
    display:block;
    border:1px solid var(--line);
    border-radius:2px;
    padding:1rem;
    text-align:center;
    font-weight:600;
    color:var(--navy-deep);
    cursor:pointer;
    transition:all .2s ease;
  }
  .type-option input:checked + span{
    border-color:var(--blue-accent);
    background:rgba(61,107,255,0.06);
    color:var(--blue-accent);
  }

  @media (prefers-reduced-motion: reduce){
    .ct-page *{ animation:none!important; transition:none!important; }
    .fade-up{ opacity:1!important; transform:none!important; }
  }
</style>
@endpush

@section('content')
<div class="ct-page bg-white">

  <!-- ===== Hero ===== -->
  <header class="ct-hero relative overflow-hidden text-white">
    <svg class="vector-lines" viewBox="0 0 1200 500" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0 460 L260 400 L520 430 L780 340 L1040 380 L1200 260" stroke="#5A8CFF" stroke-width="1.5" fill="none" opacity="0.4"/>
      <path d="M0 490 L300 440 L560 470 L860 360 L1200 300" stroke="#3D6BFF" stroke-width="1.5" fill="none" opacity="0.3"/>
      <circle cx="260" cy="400" r="4" fill="#5A8CFF"/>
      <circle cx="780" cy="340" r="4" fill="#5A8CFF"/>
      <circle cx="1200" cy="260" r="4" fill="#3D6BFF"/>
    </svg>

    <!-- Floating graphic: a path from a starting point to launch -->
    <div class="absolute right-10 top-1/2 -translate-y-1/2 hidden lg:block float-graphic" aria-hidden="true">
      <svg width="280" height="280" viewBox="0 0 280 280" fill="none">
        <rect x="40" y="40" width="200" height="200" rx="24" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
        <path d="M70 200 Q 120 200 140 160 T 200 90" stroke="rgba(255,255,255,0.25)" stroke-width="2" stroke-dasharray="5 6" fill="none"/>
        <circle cx="70" cy="200" r="7" fill="#fff" opacity="0.5"/>
        <circle cx="140" cy="160" r="4" fill="#5A8CFF" opacity="0.8"/>
        <circle cx="200" cy="90" r="9" fill="#3D6BFF"/>
        <path d="M196 94 L200 86 L204 94" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <text x="70" y="222" text-anchor="middle" fill="rgba(255,255,255,0.7)" font-family="IBM Plex Mono, monospace" font-size="11">Start</text>
        <text x="200" y="70" text-anchor="middle" fill="rgba(255,255,255,0.9)" font-family="IBM Plex Mono, monospace" font-size="11" font-weight="600">Launch</text>
      </svg>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 pt-14 pb-24 lg:pt-16 lg:pb-28">
      <!-- Breadcrumb -->
      <nav class="flex flex-wrap items-center gap-2 text-sm font-medium mb-8" style="color:var(--blue-bright);" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-white transition-colors">Main Navigation</a>
        <span class="text-white/30">/</span>
        <span class="text-white/70">Contact</span>
      </nav>

      <div class="max-w-2xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">
          Get In Touch
        </span>
        <h1 class="text-4xl sm:text-4xl lg:text-[50px] font-bold leading-[1.1] mt-5 mb-6">
          Let's Build Something Worth Launching
        </h1>
        <p class="text-lg text-white/70 leading-relaxed mb-10 max-w-xl">
          Tell us where you are starting from. An idea, an existing product, or a business that needs to grow. We will tell you the fastest, most sensible way to get there.
        </p>

        <a href="#project-form" class="inline-flex items-center gap-2 px-7 py-3.5 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5" style="background:var(--blue-accent);">
          Get a Free Quote
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
        </a>
      </div>
    </div>
  </header>

  <!-- ===== Project Intake Form ===== -->
  <section id="project-form" class="py-24 border-t fade-up" style="border-color:var(--line); background:var(--bg-soft);">
    <div class="max-w-3xl mx-auto px-6 sm:px-12">
      <div class="mb-12 text-center">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Tell Us About Your Project</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3" style="color:var(--navy-deep);">Share the Details, We'll Follow Up</h2>
        <p class="mt-3 text-base" style="color:var(--text-muted);">
          Share your name, company, and project details, along with the type of project, build, design, or grow, and your budget range. We will follow up with next steps.
        </p>
      </div>

      <form method="POST" action="{{ url('/contact') }}" class="bg-white p-8 md:p-10 border" style="border-color:var(--line);">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
          <div>
            <label for="name" class="ct-label">Your Name</label>
            <input type="text" id="name" name="name" class="ct-input" placeholder="Jane Doe" required>
          </div>
          <div>
            <label for="company" class="ct-label">Company</label>
            <input type="text" id="company" name="company" class="ct-input" placeholder="Company name">
          </div>
        </div>

        <div class="mb-6">
          <label for="email" class="ct-label">Email</label>
          <input type="email" id="email" name="email" class="ct-input" placeholder="you@company.com" required>
        </div>

        <div class="mb-6">
          <span class="ct-label">Type of Project</span>
          <div class="grid grid-cols-3 gap-3">
            <label class="type-option relative">
              <input type="radio" name="project_type" value="build" checked>
              <span>Build</span>
            </label>
            <label class="type-option relative">
              <input type="radio" name="project_type" value="design">
              <span>Design</span>
            </label>
            <label class="type-option relative">
              <input type="radio" name="project_type" value="grow">
              <span>Grow</span>
            </label>
          </div>
        </div>

        <div class="mb-6">
          <label for="budget" class="ct-label">Budget Range</label>
          <select id="budget" name="budget_range" class="ct-select">
            <option value="">Select a range</option>
            <option value="under-5k">Under $5,000</option>
            <option value="5k-15k">$5,000 – $15,000</option>
            <option value="15k-50k">$15,000 – $50,000</option>
            <option value="50k-plus">$50,000+</option>
            <option value="not-sure">Not sure yet</option>
          </select>
        </div>

        <div class="mb-8">
          <label for="details" class="ct-label">Project Details</label>
          <textarea id="details" name="project_details" rows="5" class="ct-textarea" placeholder="Tell us where you're starting from and what you're trying to get to."></textarea>
        </div>

        <button type="submit" class="w-full inline-flex items-center justify-center gap-2 px-7 py-4 font-mono text-xs font-semibold uppercase tracking-wider text-white rounded-full transition-all hover:-translate-y-0.5" style="background:var(--blue-accent);">
          Send Project Details
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9"/></svg>
        </button>
      </form>
    </div>
  </section>

  <!-- ===== Other Ways to Reach Us ===== -->
  <section class="py-20 border-t fade-up" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12 max-w-xl">
        <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-accent);">Other Ways to Reach Us</span>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-3" style="color:var(--navy-deep);">General Inquiries</h3>
          <p class="leading-relaxed text-base" style="color:var(--text-muted);">
            Available on request.
          </p>
        </div>

        <div class="p-8 border" style="border-color:var(--line); background:var(--bg-soft);">
          <h3 class="text-xl font-bold mb-3" style="color:var(--navy-deep);">Existing Clients</h3>
          <p class="leading-relaxed text-base" style="color:var(--text-muted);">
            A dedicated support contact is given at the start of your project.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== No Pressure, No Obligation ===== -->
  <section class="py-24 border-t fade-up" style="border-color:var(--line);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 items-center overflow-hidden" style="border-radius:2px;">
        <div class="p-10 md:p-16 text-white h-full flex flex-col justify-center" style="background:var(--navy-deep);">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold" style="color:var(--blue-bright);">No Pressure, No Obligation</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Just a clear look at what your project needs</h2>
          <p class="text-white/70 leading-relaxed max-w-md mb-8">
            Whether that is a full Build, a Design refresh, or a Grow plan.
          </p>
          <div class="flex flex-wrap gap-3">
            <span class="font-mono text-xs font-semibold uppercase tracking-wider px-4 py-2 rounded-full border border-white/25 text-white/80">Build</span>
            <span class="font-mono text-xs font-semibold uppercase tracking-wider px-4 py-2 rounded-full border border-white/25 text-white/80">Design</span>
            <span class="font-mono text-xs font-semibold uppercase tracking-wider px-4 py-2 rounded-full border border-white/25 text-white/80">Grow</span>
          </div>
        </div>
        <div class="h-full min-h-[320px]" style="background-image:url('https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1200&auto=format&fit=crop'); background-size:cover; background-position:center;"></div>
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