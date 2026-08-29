@extends('layouts.app')
@section('title', 'Ecommerce Website Development Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .ecom-page{
    --navy-deep:#0B1B3D;
    --navy-darker:#071227;
    --navy-mid:#152a5c;
    --blue-accent:#3D6BFF;
    --blue-bright:#5A8CFF;
    --bg-soft:#F3F5FA;
    --text-muted:#6B7280;
    --line:#E3E7F0;
    font-family:'Inter',system-ui,sans-serif;
  }
  .ecom-page h1, .ecom-page h2, .ecom-page h3, .ecom-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .ecom-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }

  @keyframes ecomScroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .ecom-animate-scroll {
    animation: ecomScroll 35s linear infinite;
  }
  @media (prefers-reduced-motion: reduce){
    .ecom-page *{ animation:none!important; transition:none!important; }
  }
</style>
@endpush

@section('content')
<div class="ecom-page">

  <!-- ===== Hero / Asymmetric Banner ===== -->
  <section class="relative overflow-hidden pt-16 pb-28 min-h-[620px] flex items-center border-b border-white/10" style="background:var(--navy-deep);">

    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute -top-10 -right-10 w-full lg:w-[60%] h-[120%] opacity-95" style="background:linear-gradient(to bottom right, var(--navy-mid), rgba(11,27,61,0.8), rgba(7,18,39,0.4)); clip-path:polygon(20% 0%, 100% 0%, 100% 100%, 0% 100%);"></div>
      <div class="absolute top-0 left-0 right-0 h-[1px]" style="background:linear-gradient(to right, transparent, rgba(90,140,255,0.5), transparent);"></div>
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-12 w-full">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

        <div class="lg:col-span-7 flex flex-col justify-center">
          <nav class="flex flex-wrap items-center gap-2 font-mono text-xs font-semibold tracking-wider mb-6 uppercase" style="color:var(--blue-bright);" aria-label="Breadcrumb">
            <a href="{{ url('/') }}" class="hover:text-white transition-colors">Main Navigation</a>
            <span class="text-white/30">/</span>
            <a href="{{ url('/services') }}" class="hover:text-white transition-colors">Services</a>
            <span class="text-white/30">/</span>
            <a href="{{ url('/services/web-development') }}" class="hover:text-white transition-colors">Web Development</a>
            <span class="text-white/30">/</span>
            <span class="text-white/70">Ecommerce Website Development</span>
          </nav>

          <h1 class="text-4xl sm:text-6xl lg:text-[52px] font-bold text-white leading-[1.15] tracking-tight mb-6">
            Ecommerce Website Development Built to <span style="color:var(--blue-bright);">Convert Visitors Into Buyers</span>
          </h1>

          <p class="text-lg sm:text-xl text-white/80 leading-relaxed max-w-2xl font-normal mb-4">
            Ecommerce website development services for businesses that need a storefront built to convert, not just to look good.
          </p>
          <p class="text-base text-white/60 leading-relaxed max-w-2xl font-normal mb-8">
            As part of our wider Web Development practice, we build ecommerce websites around the full buying journey, not just the product pages. That means a storefront, checkout, and backend that work together to turn traffic into completed orders, whether you are launching your first store or replacing one that is not converting.
          </p>

          <div class="flex flex-wrap items-center gap-4">
            <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-bold tracking-wider uppercase text-white transition-all" style="background:var(--blue-accent); box-shadow:0 0 20px rgba(61,107,255,0.4);">
              Get a Free Quote
            </a>
            <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 border border-white/20 text-white font-mono text-xs font-bold tracking-wider uppercase hover:bg-white/20 transition-all">
              Book a Call
            </a>
          </div>
        </div>

        <div class="lg:col-span-5 relative flex justify-center lg:justify-end items-center mt-8 lg:mt-0">
          <div class="relative w-full max-w-[480px] aspect-square">
            <img
              src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=1000&auto=format&fit=crop"
              alt="Ecommerce Website Development - InTech Nexus"
              class="w-full h-full object-cover relative z-10 border border-white/10 shadow-2xl lg:translate-y-6"
            />
            <div class="absolute -top-6 -left-6 w-full h-full border-2 z-0 pointer-events-none" style="border-color:rgba(90,140,255,0.3);"></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== Who This Is For & Problems We Solve (overlapping cards) ===== -->
  <section class="relative z-20 -mt-16 max-w-7xl mx-auto px-6 sm:px-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

      <div class="p-8 bg-white border shadow-xl flex flex-col justify-between transform hover:-translate-y-1 transition-all" style="border-color:var(--line);">
        <div>
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-3 h-3" style="background:var(--blue-accent);"></span>
            Who This Is For
          </h2>
          <p class="leading-relaxed text-base" style="color:var(--text-muted);">
            Businesses launching a new online store, or replacing one that is not converting well.
          </p>
        </div>
      </div>

      <div class="p-8 bg-white border shadow-xl flex flex-col justify-between transform hover:-translate-y-1 transition-all" style="border-color:var(--line);">
        <div>
          <h2 class="text-2xl font-bold mb-4 flex items-center gap-3" style="color:var(--navy-deep);">
            <span class="w-3 h-3" style="background:var(--blue-accent);"></span>
            Problems We Solve
          </h2>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>The current online store looks fine but is not converting visitors into buyers.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>Managing products, inventory, and checkout across disconnected tools is slowing the business down.</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">•</span><span>You need an ecommerce site that can grow with your product catalog.</span></li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- ===== What We Offer ===== -->
  <section class="py-24" style="background:var(--bg-soft); color:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight mb-4" style="color:var(--navy-deep);">What We Offer</h2>
        <p class="text-lg" style="color:var(--text-muted);">We build ecommerce websites designed around the buying journey.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ([
          ['t' => 'Ecommerce Website Development', 'd' => 'Ecommerce website development services for growing catalogs.', 'span' => false],
          ['t' => 'Ecommerce Development Company Experience', 'd' => 'Ecommerce development company experience across platforms.', 'span' => false],
          ['t' => 'Custom Ecommerce Development', 'd' => 'Custom ecommerce development beyond template themes.', 'span' => false],
          ['t' => 'Online Store Development', 'd' => 'Online store development with secure checkout.', 'span' => false],
          ['t' => 'Ecommerce Web Design', 'd' => 'Ecommerce web design built around conversion.', 'span' => true],
        ] as $offer)
          <div class="group p-8 bg-white border shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between min-h-[220px] {{ $offer['span'] ? 'md:col-span-2 lg:col-span-2' : '' }}" style="border-color:var(--line);" onmouseover="this.style.borderColor='var(--blue-accent)'" onmouseout="this.style.borderColor='var(--line)'">
            <div>
              <h3 class="text-2xl font-bold mb-3 transition-colors" style="color:var(--navy-deep);">{{ $offer['t'] }}</h3>
              <p class="leading-relaxed text-sm" style="color:var(--text-muted);">{{ $offer['d'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Service Capabilities ===== -->
  <section class="py-20 bg-white" style="color:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight mb-4" style="color:var(--navy-deep);">Service Capabilities</h2>
        <p class="text-lg" style="color:var(--text-muted);">What we deliver and where we excel.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-8 border" style="background:var(--bg-soft); border-color:var(--line);">
          <h3 class="text-xl font-bold mb-4" style="color:var(--navy-deep);">What We Deliver</h3>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">◦</span><span>A fully built ecommerce storefront ready to sell</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">◦</span><span>Secure checkout and payment integration</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">◦</span><span>Product catalog structure built to scale</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">◦</span><span>Ongoing support for updates and new features</span></li>
          </ul>
        </div>

        <div class="p-8 border" style="background:var(--bg-soft); border-color:var(--line);">
          <h3 class="text-xl font-bold mb-4" style="color:var(--navy-deep);">Key Skill Areas</h3>
          <ul class="space-y-3" style="color:var(--text-muted);">
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">◦</span><span>Ecommerce platform development on Shopify, WordPress, or custom builds</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">◦</span><span>Checkout flow and conversion focused design</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">◦</span><span>Payment gateway integration</span></li>
            <li class="flex items-start gap-3"><span class="font-bold" style="color:var(--blue-accent);">◦</span><span>Product catalog and inventory structuring</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Our Process ===== -->
  <section class="py-24 text-white" style="background:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="max-w-3xl mb-16">
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight mb-4 text-white">Our Process</h2>
        <p class="text-white/70 text-lg leading-relaxed">
          A structured, transparent approach to building ecommerce sites that convert.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach ([
          ['n' => '01', 't' => 'Discovery & Planning', 'd' => 'We map your goals, content, and site structure.', 'span' => false],
          ['n' => '02', 't' => 'Wireframes & Sitemap', 'd' => 'We plan the layout and navigation before any design work begins.', 'span' => false],
          ['n' => '03', 't' => 'Design', 'd' => 'We design pages built around clarity and conversion.', 'span' => false],
          ['n' => '04', 't' => 'Development', 'd' => 'We build the site on a fast, reliable, and search friendly foundation.', 'span' => false],
          ['n' => '05', 't' => 'QA, Launch & Support', 'd' => 'We test thoroughly, launch, and support the site afterward.', 'span' => true],
        ] as $step)
          <div class="p-8 bg-white/[0.05] border border-white/10 transition-all duration-300 flex flex-col justify-between min-h-[220px] {{ $step['span'] ? 'md:col-span-2' : '' }}" onmouseover="this.style.borderColor='var(--blue-bright)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'">
            <span class="font-mono text-5xl font-black mb-4 block" style="color:var(--blue-bright);">{{ $step['n'] }}</span>
            <div>
              <h3 class="text-2xl font-bold text-white mb-2">{{ $step['t'] }}</h3>
              <p class="text-white/70">{{ $step['d'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Tools / Technologies Ticker ===== -->
  <section class="py-16 overflow-hidden border-t border-b" style="background:var(--bg-soft); border-color:var(--line); color:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 mb-8">
      <h2 class="text-3xl md:text-4xl font-bold tracking-tight" style="color:var(--navy-deep);">Tools / Technologies</h2>
    </div>

    <div class="flex whitespace-nowrap ecom-animate-scroll">
      @for ($rep = 0; $rep < 2; $rep++)
        <div class="flex items-center gap-12 px-6 font-mono font-semibold text-base tracking-wider uppercase" style="color:var(--text-muted);">
          <span>WordPress</span> •
          <span>Shopify</span> •
          <span>Headless CMS</span> •
          <span>React</span> •
          <span>Next.js</span> •
          <span>Node.js</span> •
          <span>PHP</span> •
          <span>AWS</span> •
          <span>Cloudflare</span> •
          <span>Google Analytics</span> •
          <span>Search Console</span> •
        </div>
      @endfor
    </div>
  </section>

  <!-- ===== Why Choose InTech Nexus ===== -->
  <section class="py-24 text-white relative overflow-hidden" style="background:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 relative z-10">
      <div class="p-10 md:p-16 border shadow-2xl" style="background:linear-gradient(to bottom right, var(--navy-mid), var(--navy-darker)); border-color:rgba(90,140,255,0.3);">
        <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-6 text-white">Why Choose InTech Nexus</h2>
        <p class="text-white/80 text-lg leading-relaxed max-w-4xl">
          As a team offering full ecommerce solutions, we plan the storefront and the checkout flow together, so the site is not just attractive but actually built to turn visitors into buyers.
        </p>
      </div>
    </div>
  </section>

  <!-- ===== Frequently Asked Questions ===== -->
  <section class="py-24 bg-white" style="color:var(--navy-deep);" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <h2 class="text-3xl md:text-5xl font-bold tracking-tight mb-12 text-center" style="color:var(--navy-deep);">Frequently Asked Questions</h2>

      <div class="space-y-4">
        @foreach ([
          ['q' => 'Can you build on Shopify or a custom platform?', 'a' => 'Yes. We can build ecommerce sites on Shopify, WordPress, or a fully custom platform, depending on what fits your catalog and goals.'],
          ['q' => 'Can the store handle a large or growing product catalog?', 'a' => 'Yes. We plan the site structure and backend to handle catalog growth without needing a rebuild later.'],
          ['q' => 'Which ecommerce platform is right for us?', 'a' => 'It depends on your catalog size, budget, and customization needs. We will recommend the right platform, whether that is Shopify Development or a fully custom build, during discovery.'],
          ['q' => 'Can the store integrate with our existing inventory system?', 'a' => 'Yes. We can integrate the storefront with most inventory and fulfillment systems.'],
        ] as $i => $faq)
          <div class="border overflow-hidden" style="background:var(--bg-soft); border-color:var(--line);">
            <button @click="openFaq = openFaq === {{ $i }} ? null : {{ $i }}" class="w-full text-left p-6 font-semibold text-lg flex justify-between items-center focus:outline-none" style="color:var(--navy-deep);">
              <span>{{ $faq['q'] }}</span>
              <span class="text-2xl font-bold ml-4" style="color:var(--blue-accent);" x-text="openFaq === {{ $i }} ? '−' : '+'"></span>
            </button>
            <div x-show="openFaq === {{ $i }}" x-collapse class="px-6 pb-6 leading-relaxed" style="color:var(--text-muted);">
              {{ $faq['a'] }}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ===== Call to Action Banner ===== -->
  <section class="py-24 text-white" style="background:var(--navy-deep);">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
      <div class="p-10 md:p-16 shadow-xl border" style="background:linear-gradient(to bottom right, rgba(21,42,92,0.5), rgba(7,18,39,0.5)); border-color:rgba(90,140,255,0.3);">
        <h2 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-6 text-white">
          Ready to build a storefront that actually converts?
        </h2>
        <p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
          Book a call, request a proposal, or get a free quote to begin.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-8 py-4 font-mono text-xs font-bold tracking-wider uppercase text-white transition-all" style="background:var(--blue-accent); box-shadow:0 0 20px rgba(61,107,255,0.4);">
            Get a Free Quote
          </a>
          <a href="{{ url('/book-a-call') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 border border-white/20 text-white font-mono text-xs font-bold tracking-wider uppercase hover:bg-white/20 transition-all">
            Book a Call
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Floating Chat Button Widget ===== -->
  <a href="{{ url('/contact') }}" class="fixed bottom-6 right-6 z-50 w-14 h-14 text-white flex items-center justify-center transition-all" style="background:var(--blue-accent); box-shadow:0 0 20px rgba(61,107,255,0.5);" onmouseover="this.style.background='var(--blue-bright)'" onmouseout="this.style.background='var(--blue-accent)'">
    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
  </a>

</div>
@endsection