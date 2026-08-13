@extends('layouts.app')
@section('title', 'About Softobiz - Softobiz Technologies')

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

<!-- Navigation / Header Bar -->
<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-[#0b0c10]/90 backdrop-blur-md border-b border-white/10">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 h-20 flex items-center justify-between">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="text-2xl font-bold tracking-tight text-white flex items-center gap-1">
      Softobiz<span class="w-2 h-2 rounded-full bg-purple-500 inline-block"></span>
    </a>

    <!-- Desktop Navigation -->
    <nav class="hidden lg:flex items-center gap-8">
      <a href="{{ url('/services') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Services</a>
      <a href="{{ url('/industries') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Industries</a>
      <a href="{{ url('/case-studies') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Case Studies</a>
      <a href="{{ url('/blogs') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Blogs</a>
      <a href="{{ url('/about-us') }}" class="text-sm font-medium text-white font-semibold">About Us</a>
      <a href="{{ url('/careers') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Careers</a>
    </nav>

    <!-- Desktop CTA -->
    <div class="hidden lg:flex items-center gap-4">
      <a href="{{ url('/contact') }}" class="px-5 py-2.5 rounded-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-medium text-sm hover:opacity-90 transition-opacity">
        Let's talk
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-gray-300 hover:text-white focus:outline-none">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </div>

  <!-- Mobile Navigation Drawer -->
  <div x-show="mobileMenuOpen" x-cloak x-transition class="lg:hidden bg-[#0b0c10] border-b border-white/10 px-6 py-6 space-y-4">
    <a href="{{ url('/services') }}" class="block text-gray-300 hover:text-white">Services</a>
    <a href="{{ url('/industries') }}" class="block text-gray-300 hover:text-white">Industries</a>
    <a href="{{ url('/case-studies') }}" class="block text-gray-300 hover:text-white">Case Studies</a>
    <a href="{{ url('/blogs') }}" class="block text-gray-300 hover:text-white">Blogs</a>
    <a href="{{ url('/about-us') }}" class="block text-white font-semibold">About Us</a>
    <a href="{{ url('/careers') }}" class="block text-gray-300 hover:text-white">Careers</a>
    <a href="{{ url('/contact') }}" class="inline-block mt-2 px-5 py-2.5 rounded-full bg-purple-600 text-white text-sm font-medium">Let's talk</a>
  </div>
</header>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-[#0b0c10] pt-20 pb-16 min-h-[550px] flex flex-col justify-center">
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-1 bg-gradient-to-r from-transparent via-purple-500 to-transparent opacity-60"></div>
  <div class="absolute top-20 left-20 w-72 h-72 bg-purple-500/10 rounded-full blur-[100px]"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight">
      We are <span class="text-purple-400">Softobiz</span>
    </h1>
    <p class="mt-6 text-lg sm:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
      A global team of builders who turn AI-first strategies into real-world platforms — helping enterprises move faster, smarter, and stronger.
    </p>
  </div>

  <!-- Infinite Scroll Client Logos Bar -->
  <div class="relative z-10 mt-16 overflow-hidden border-t border-b border-white/5 py-6">
    <div class="flex whitespace-nowrap animate-scroll">
      <div class="flex items-center gap-16 px-8 text-gray-400 text-lg font-bold tracking-wide">
        <span>MICROSOFT</span>
        <span>ROGERS</span>
        <span>TRACK-IT</span>
        <span>PICKLES</span>
        <span>CLIENTPOINT</span>
        <span>OPTIMUS</span>
        <span>OROTON</span>
        <span>DATIUM</span>
        <span>FIRSTPATH</span>
        <span>WESFARMERS</span>
        <span>BLACKWOODS</span>
      </div>
      <!-- Duplicate Set for Continuous Loop -->
      <div class="flex items-center gap-16 px-8 text-gray-400 text-lg font-bold tracking-wide">
        <span>MICROSOFT</span>
        <span>ROGERS</span>
        <span>TRACK-IT</span>
        <span>PICKLES</span>
        <span>CLIENTPOINT</span>
        <span>OPTIMUS</span>
        <span>OROTON</span>
        <span>DATIUM</span>
        <span>FIRSTPATH</span>
        <span>WESFARMERS</span>
        <span>BLACKWOODS</span>
      </div>
    </div>
  </div>
</section>

<!-- What We Stand For (Core Values) -->
<section class="py-24 bg-[#0b0c10]">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What we stand for</h2>
      <p class="text-gray-400 text-lg leading-relaxed">
        Our values aren’t painted on walls. They show up in how we build, collaborate, and deliver every day.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Value 1 -->
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-purple-400/50 hover:bg-white/[0.06] transition-all duration-300">
        <h3 class="text-xl font-bold text-white mb-3">Customer Centricity</h3>
        <p class="text-gray-400 leading-relaxed">We listen first, then act with intent. The result? Clarity, momentum, and outcomes that matter.</p>
      </div>

      <!-- Value 2 -->
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-purple-400/50 hover:bg-white/[0.06] transition-all duration-300">
        <h3 class="text-xl font-bold text-white mb-3">Innovation Leadership</h3>
        <p class="text-gray-400 leading-relaxed">Curiosity fuels our breakthroughs. We don’t just follow trends — we set them.</p>
      </div>

      <!-- Value 3 -->
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-purple-400/50 hover:bg-white/[0.06] transition-all duration-300">
        <h3 class="text-xl font-bold text-white mb-3">Growth Mindset</h3>
        <p class="text-gray-400 leading-relaxed">Every change is a chance to learn, adapt, and get better together.</p>
      </div>

      <!-- Value 4 -->
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-purple-400/50 hover:bg-white/[0.06] transition-all duration-300">
        <h3 class="text-xl font-bold text-white mb-3">Purpose with Ownership</h3>
        <p class="text-gray-400 leading-relaxed">We take charge, make decisions, and own outcomes — because impact is everyone’s job.</p>
      </div>

      <!-- Value 5 -->
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-purple-400/50 hover:bg-white/[0.06] transition-all duration-300 md:col-span-2 lg:col-span-1">
        <h3 class="text-xl font-bold text-white mb-3">Pride in Craft</h3>
        <p class="text-gray-400 leading-relaxed">Details matter. Excellence is not an act here; it’s a habit.</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Approach Section -->
<section class="py-24 bg-[#0b0c10] relative overflow-hidden">
  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Our Approach</h2>
      <p class="text-gray-400 text-lg leading-relaxed">A focused 4-step approach to deliver impact, speed, and scale.</p>
    </div>

    <div x-data="{ activeStep: 1 }" class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      <!-- Left Step Selector -->
      <div class="lg:col-span-5 flex flex-col gap-4">
        <template x-for="step in [
          { id: 1, num: '01', title: 'Strategy Over Hype' },
          { id: 2, num: '02', title: 'Systems That Scale' },
          { id: 3, num: '03', title: 'Partnership at the Core' },
          { id: 4, num: '04', title: 'Built to Withstand What’s Next' }
        ]" :key="step.id">
          <button 
            @click="activeStep = step.id"
            :class="activeStep === step.id ? 'bg-white/10 border-purple-400/50' : 'bg-white/[0.03] border-white/10 hover:bg-white/[0.06]'"
            class="w-full text-left p-6 rounded-2xl border transition-all duration-300 flex items-center gap-4"
          >
            <span class="text-2xl font-bold text-purple-400" x-text="step.num"></span>
            <span class="text-lg font-bold text-white" x-text="step.title"></span>
          </button>
        </template>
      </div>

      <!-- Right Active Step Content -->
      <div class="lg:col-span-7">
        <div class="h-full rounded-3xl bg-white/[0.03] border border-white/10 p-8 md:p-12 flex flex-col justify-center min-h-[350px]">
          <div x-show="activeStep === 1" x-transition.opacity class="space-y-4">
            <span class="text-purple-400 font-bold text-xl">01</span>
            <h3 class="text-2xl md:text-3xl font-bold text-white">Strategy Over Hype</h3>
            <p class="text-gray-400 text-lg leading-relaxed">
              In a landscape filled with fleeting buzzwords and short-lived tech fads, we anchor every decision in business strategy. Our focus is on solving the right problems with meaningful innovation that drives sustainable impact — not just what's popular now.
            </p>
          </div>
          
          <div x-show="activeStep === 2" x-transition.opacity class="space-y-4">
            <span class="text-purple-400 font-bold text-xl">02</span>
            <h3 class="text-2xl md:text-3xl font-bold text-white">Systems That Scale</h3>
            <p class="text-gray-400 text-lg leading-relaxed">
              We approach each build with a product mindset — modular, extensible, and performance-focused. Whether you're scaling users, features, or markets, your systems will be ready for tomorrow’s demand without a complete rework.
            </p>
          </div>
          
          <div x-show="activeStep === 3" x-transition.opacity class="space-y-4">
            <span class="text-purple-400 font-bold text-xl">03</span>
            <h3 class="text-2xl md:text-3xl font-bold text-white">Partnership at the Core</h3>
            <p class="text-gray-400 text-lg leading-relaxed">
              Our teams embed into yours with transparency and shared ownership. We align with your business rhythms, co-create roadmaps, and stay accountable to results — because long-term success is a shared journey.
            </p>
          </div>
          
          <div x-show="activeStep === 4" x-transition.opacity class="space-y-4">
            <span class="text-purple-400 font-bold text-xl">04</span>
            <h3 class="text-2xl md:text-3xl font-bold text-white">Built to Withstand What’s Next</h3>
            <p class="text-gray-400 text-lg leading-relaxed">
              We design for uncertainty – anticipating change. Planning for disruption and building digital systems that stay reliable under pressure. The result: solutions that evolve as fast as your business does.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Metrics / One Global Team Section -->
<section class="py-24 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white">One Global Team</h2>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 text-center">
        <div class="text-4xl md:text-6xl font-extrabold text-white mb-2">99%</div>
        <div class="text-sm text-gray-400 font-medium">Success Rate</div>
      </div>
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 text-center">
        <div class="text-4xl md:text-6xl font-extrabold text-white mb-2">150+</div>
        <div class="text-sm text-gray-400 font-medium">Clients Worldwide</div>
      </div>
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 text-center">
        <div class="text-4xl md:text-6xl font-extrabold text-white mb-2">350+</div>
        <div class="text-sm text-gray-400 font-medium">People Globally</div>
      </div>
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 text-center">
        <div class="text-4xl md:text-6xl font-extrabold text-white mb-2">17+</div>
        <div class="text-sm text-gray-400 font-medium">Years of Experience</div>
      </div>
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 text-center">
        <div class="text-4xl md:text-6xl font-extrabold text-white mb-2">85%</div>
        <div class="text-sm text-gray-400 font-medium">Repeat Client Ratio</div>
      </div>
      <div class="p-8 rounded-2xl bg-white/[0.03] border border-white/10 text-center">
        <div class="text-4xl md:text-6xl font-extrabold text-white mb-2">300+</div>
        <div class="text-sm text-gray-400 font-medium">Successful Projects</div>
      </div>
    </div>
  </div>
</section>

<!-- Partners In Progress (Testimonials Carousel) -->
<section class="py-24 bg-[#0b0c10] relative overflow-hidden">
  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Partners In Progress</h2>
      <p class="text-gray-400 text-lg max-w-2xl mx-auto">
        From quick-service restaurants to auction platforms, from insurance leaders to global retailers — we deliver results that matter.
      </p>
    </div>

    <div x-data="{ currentSlide: 0, slidesCount: 3 }" class="relative">
      <div class="overflow-hidden">
        <div class="flex transition-transform duration-500 ease-in-out" :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
          
          <!-- Testimonial 1 -->
          <div class="w-full flex-shrink-0 px-4">
            <div class="max-w-4xl mx-auto bg-white/[0.03] border border-white/10 rounded-3xl p-8 md:p-12 text-center md:text-left">
              <p class="text-gray-300 text-lg md:text-xl leading-relaxed italic mb-8">
                “Amazing group of talented, thoughtful managers and developers. We were able to make our business even better and more streamlined with their valuable inputs. The best thing is they were able to talk beyond development and help in streamlining some processes, resulting in a streamlined application.”
              </p>
              <div>
                <div class="text-white font-bold text-lg">Keith Diamond</div>
                <div class="text-gray-400 text-sm">Director, Pourtastic</div>
              </div>
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="w-full flex-shrink-0 px-4">
            <div class="max-w-4xl mx-auto bg-white/[0.03] border border-white/10 rounded-3xl p-8 md:p-12 text-center md:text-left">
              <p class="text-gray-300 text-lg md:text-xl leading-relaxed italic mb-8">
                “I loved working with Softobiz. Their ideas were great and commitment to help clients achieve their goals was admirable. With them, I found a team with who I would always love to work in future.”
              </p>
              <div>
                <div class="text-white font-bold text-lg">Brad Pengelly</div>
                <div class="text-gray-400 text-sm">Founder, Hoops</div>
              </div>
            </div>
          </div>

          <!-- Testimonial 3 -->
          <div class="w-full flex-shrink-0 px-4">
            <div class="max-w-4xl mx-auto bg-white/[0.03] border border-white/10 rounded-3xl p-8 md:p-12 text-center md:text-left">
              <p class="text-gray-300 text-lg md:text-xl leading-relaxed italic mb-8">
                “Very good understanding of the project, well-organized task management, fast execution, and well thought-through results. Highly recommended.”
              </p>
              <div>
                <div class="text-white font-bold text-lg">Laurence Abrams</div>
                <div class="text-gray-400 text-sm">Founder, ClientPoint</div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Navigation Arrows -->
      <div class="flex items-center justify-center gap-4 mt-8">
        <button @click="currentSlide = (currentSlide - 1 + slidesCount) % slidesCount" class="w-12 h-12 rounded-full border border-white/10 bg-white/[0.03] hover:bg-white/10 flex items-center justify-center text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button @click="currentSlide = (currentSlide + 1) % slidesCount" class="w-12 h-12 rounded-full border border-white/10 bg-white/[0.03] hover:bg-white/10 flex items-center justify-center text-white transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Life at Softobiz Culture Gallery -->
<section class="py-24 bg-[#0b0c10]">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="max-w-3xl mb-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Life at Softobiz</h2>
      <p class="text-gray-400 text-lg leading-relaxed">
        Collaboration comes naturally here. Curiosity is encouraged. Wins are celebrated — whether it’s a successful launch, a hackathon breakthrough, or just making Mondays a little more fun.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 auto-rows-[220px]">
      <div class="col-span-2 row-span-2 group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10">
        <img src="https://placehold.co/800x600/1a1a2e/ffffff?text=Life+At+Softobiz+1" alt="Life at Softobiz" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
      </div>
      <div class="group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10">
        <img src="https://placehold.co/400x300/1a1a2e/ffffff?text=Life+At+Softobiz+2" alt="Life at Softobiz" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
      </div>
      <div class="group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10">
        <img src="https://placehold.co/400x300/1a1a2e/ffffff?text=Life+At+Softobiz+3" alt="Life at Softobiz" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
      </div>
      <div class="group relative overflow-hidden rounded-2xl bg-white/5 border border-white/10">
        <img src="https://placehold.co/400x300/1a1a2e/ffffff?text=Life+At+Softobiz+4" alt="Life at Softobiz" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
      </div>
    </div>
  </div>
</section>

<!-- Join CTA Banner -->
<section class="py-20 bg-[#0b0c10] border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
    <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
      Build with <span class="text-purple-400">Curiosity.</span> Trust. Grit. <span class="text-purple-400">People</span>
    </h2>
    <p class="text-gray-400 text-lg mb-8 italic">Ready to take the next step?</p>
    <a href="{{ url('/careers') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-purple-600 text-white font-bold hover:bg-purple-700 transition-colors">
      Join Our Team
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
    </a>
  </div>
</section>

<!-- Footer -->
<footer class="bg-[#07080a] text-gray-400 pt-20 pb-12 border-t border-white/10">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
      
      <!-- Brand & Socials -->
      <div class="lg:col-span-2 space-y-6">
        <div class="text-2xl font-bold text-white">Softobiz</div>
        <p class="text-sm leading-relaxed max-w-sm">
          We drive digital transformation that’s built for today and ready for tomorrow — blending innovation, expertise, and strategic insight. Backed by a skilled team and a customer-first mindset, we turn bold ideas into measurable, lasting outcomes.
        </p>
        <div>
          <div class="text-white font-semibold mb-3">Join Us</div>
          <div class="flex gap-4">
            <a href="https://linkedin.com" class="hover:text-white">LinkedIn</a>
            <a href="https://x.com" class="hover:text-white">X</a>
            <a href="https://facebook.com" class="hover:text-white">Facebook</a>
            <a href="https://instagram.com" class="hover:text-white">Instagram</a>
          </div>
        </div>
      </div>

      <!-- Links Column 1 -->
      <div>
        <h4 class="text-white font-semibold mb-4">Services</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="{{ url('/services/ai-transformation') }}" class="hover:text-white">AI Transformation Services</a></li>
          <li><a href="{{ url('/services/enterprise-data') }}" class="hover:text-white">Enterprise Data Transformation Services</a></li>
          <li><a href="{{ url('/services/cloud-strategy') }}" class="hover:text-white">Cloud Strategy Consulting Services</a></li>
          <li><a href="{{ url('/services/staff-augmentation') }}" class="hover:text-white">IT Staff Augmentation</a></li>
        </ul>
      </div>

      <!-- Links Column 2 -->
      <div>
        <h4 class="text-white font-semibold mb-4">Company</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="{{ url('/about-us') }}" class="hover:text-white">About Us</a></li>
          <li><a href="{{ url('/careers') }}" class="hover:text-white">Careers</a></li>
          <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact us</a></li>
        </ul>
      </div>

      <!-- Links Column 3 -->
      <div>
        <h4 class="text-white font-semibold mb-4">Resources & Legal</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="{{ url('/blogs') }}" class="hover:text-white">Blogs</a></li>
          <li><a href="{{ url('/case-studies') }}" class="hover:text-white">Case Studies</a></li>
          <li><a href="{{ url('/privacy-policy') }}" class="hover:text-white">Privacy Policy</a></li>
          <li><a href="{{ url('/terms-of-use') }}" class="hover:text-white">Terms of Use</a></li>
        </ul>
      </div>
    </div>

    <!-- Offices Grid -->
    <div class="border-t border-white/5 pt-12 mb-12">
      <h4 class="text-white font-semibold mb-6">Global Offices</h4>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 text-xs leading-relaxed">
        <div>
          <strong class="text-white block mb-1">Mohali</strong>
          IT C6, Sebiz Square, Sector 67, Sahibzada Ajit Singh Nagar, Punjab - 160062
        </div>
        <div>
          <strong class="text-white block mb-1">Hyderabad</strong>
          Aurobindo Galaxy, Knowledge City, opp. IKEA, HITEC City, Hyderabad - 500081
        </div>
        <div>
          <strong class="text-white block mb-1">Kochi</strong>
          Prestige Cyber Green 1 Block A, Smart City Kochi - 682042
        </div>
        <div>
          <strong class="text-white block mb-1">Sydney</strong>
          Kellyville, NSW 2155 Sydney, Australia
        </div>
        <div>
          <strong class="text-white block mb-1">Los Angeles</strong>
          1042 S Dunsmuir Ave Los Angeles CA 90019 United States
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-white/5 pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500">
      <div>© 2026 Softobiz Technologies. All Rights Reserved</div>
    </div>
  </div>
</footer>

@endsection