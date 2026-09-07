@extends('layouts.app')
@section('title', 'Graphic and Creative Design Services - InTech Nexus')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<style>
  .ux-page{
    font-family:'Inter',system-ui,sans-serif;
  }
  .ux-page h1, .ux-page h2, .ux-page h3, .ux-page .font-display{
    font-family:'Space Grotesk',sans-serif;
    letter-spacing:-0.01em;
  }
  .ux-page .font-mono{
    font-family:'IBM Plex Mono',monospace;
  }
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
            <a href="{{ url('/services') }}" class="hover:text-purple-300 transition-colors">Services</a>
            <span class="text-gray-500">/</span>
            <span class="text-purple-400">Graphic & Creative Design</span>
          </nav>

          <h1 class="text-4xl sm:text-6xl lg:text-[56px] font-extrabold text-white leading-[1.1] tracking-tight mb-6">
            Graphic and Creative Design Services That Keep Your Brand <span class="text-purple-400">Consistent Everywhere</span>
          </h1>
          <p class="text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl font-normal mb-4">
            Ongoing creative work that keeps a brand steady across every channel. Social, ads, and video, all made to feel like one team built them.
          </p>
          <p class="text-base text-gray-400 leading-relaxed max-w-2xl font-normal mb-8">
            Our graphic and creative design services cover logos, social content, ad creative, and motion graphics, all produced with your brand system in mind so nothing feels like a one off. This is especially useful for businesses that need steady creative output without building a full in house design team.
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
              src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?q=80&w=1000&auto=format&fit=crop" 
              alt="Graphic and Creative Design - InTech Nexus" 
              class="w-full h-full object-cover object-center relative z-10 border border-white/10 shadow-2xl"
            />
            <div class="absolute inset-0 z-20 bg-gradient-to-r from-[#0b0c10] via-transparent to-transparent opacity-90 pointer-events-none"></div>
            <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0b0c10] via-transparent to-transparent opacity-40 pointer-events-none"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Who This Is For & Problems We Solve Section -->
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
              Businesses that need steady, high quality creative work on an ongoing basis, not just a one time project.
            </p>
          </div>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10 flex flex-col justify-between">
          <div>
            <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
              <span class="w-2 h-2 rounded-full bg-purple-400"></span>
              Problems We Solve
            </h2>
            <ul class="space-y-3 text-gray-300">
              <li class="flex items-start gap-3"><span class="text-purple-400 font-bold">•</span><span>Creative output looks different across social media, ads, and other channels.</span></li>
              <li class="flex items-start gap-3"><span class="text-purple-400 font-bold">•</span><span>In house teams are too stretched to keep up with content needs.</span></li>
              <li class="flex items-start gap-3"><span class="text-purple-400 font-bold">•</span><span>Ad creative is not performing, and it is unclear if design or targeting is the issue.</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- What We Offer -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">What We Offer</h2>
        <p class="text-gray-400 text-lg">We create ongoing assets that match your brand system and campaign goals</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ([
          ['t' => 'Social Media Design', 'd' => 'Social media design that keeps your brand consistent across platforms, from post templates to story formats.'],
          ['t' => 'Ad Creative for Paid Campaigns', 'd' => 'Ad creative for paid campaigns built to capture attention and align with your brand and messaging.'],
          ['t' => 'Motion Graphics and Short Video', 'd' => 'Motion graphics and short video that add movement and clarity to social, ads, and product content.'],
          ['t' => 'Presentation and Sales Materials', 'd' => 'Presentation and sales materials that make your brand look polished and professional in person or on screen.'],
          ['t' => 'Creative Direction for Specific Campaigns', 'd' => 'Creative direction for specific campaigns, so every asset feels connected and purposeful.'],
        ] as $offer)
          <div class="group p-8 bg-white/[0.03] border border-purple-500/30 hover:border-purple-400 hover:bg-white/[0.06] shadow-[0_0_20px_rgba(168,85,247,0.1)] transition-all duration-300 flex flex-col justify-between min-h-[180px]">
            <div>
              <h3 class="text-xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors">{{ $offer['t'] }}</h3>
              <p class="text-sm text-gray-400 leading-relaxed">{{ $offer['d'] }}</p>
            </div>
          </div>
        @endforeach
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
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Ongoing creative assets aligned with your brand</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Social media and ad creative built for performance</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Motion graphics and animated content</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Consistent visual output across every channel</span></li>
          </ul>
        </div>

        <div class="p-8 bg-white/[0.03] border border-white/10">
          <h3 class="text-xl font-bold text-white mb-4">Key Skill Areas</h3>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Brand aligned graphic design</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Social and paid media creative design</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Motion graphics and animation</span></li>
            <li class="flex items-start gap-3"><span class="text-purple-400">◦</span><span>Creative direction for campaigns</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Process -->
  <section class="relative py-24 bg-[#0b0c10] border-t border-white/5">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
    <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
      <div class="max-w-3xl mb-16">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">From Complexity to Clarity</h2>
        <p class="text-gray-400 text-lg leading-relaxed">
          A structured creative process from brief through final delivery.
        </p>
      </div>

      <div class="space-y-5">
        @foreach ([
          ['n' => '01', 't' => 'Brief & Research', 'd' => 'We learn your brand, audience, and goals for the piece.'],
          ['n' => '02', 't' => 'Concept Development', 'd' => 'We explore a small number of strong creative directions.'],
          ['n' => '03', 't' => 'Design & Refinement', 'd' => 'We build out the chosen direction in full detail.'],
          ['n' => '04', 't' => 'Review & Revisions', 'd' => 'We refine the work based on your feedback.'],
          ['n' => '05', 't' => 'Final Delivery', 'd' => 'We deliver final files in every format you need.'],
        ] as $step)
          <div class="flex flex-col sm:flex-row sm:items-center gap-6 p-6 rounded-xl border border-white/10 bg-white/[0.03]">
            <div class="font-mono text-3xl font-bold flex-shrink-0 text-purple-400">{{ $step['n'] }}</div>
            <div>
              <h3 class="text-lg font-bold text-white mb-1">{{ $step['t'] }}</h3>
              <p class="text-sm text-gray-400">{{ $step['d'] }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-3xl">
        @foreach ([
          'Ongoing creative assets aligned with your brand',
          'Social media and ad creative built for performance',
          'Motion graphics and animated content',
          'Consistent visual output across every channel',
        ] as $outcome)
          <div class="flex items-start gap-3">
            <span class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold bg-purple-600 text-white">✓</span>
            <span class="text-sm text-gray-300">{{ $outcome }}</span>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Tools / Technologies -->
  <section class="py-20 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12">
      <div class="mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Tools / Technologies</h2>
        <p class="text-gray-400 text-lg">The stack we work with on graphic and creative design projects.</p>
      </div>

      <div class="tech-split-grid">
        <div>
          @php
              $techStack = [
                  [
                      'name' => 'Design Tools',
                      'technologies' => [
                          ['name' => 'Adobe Illustrator', 'image' => asset('images/tech-logo/Adobe Illustrator.png')],
                          ['name' => 'Adobe Photoshop', 'image' => asset('images/tech-logo/Adobe Photoshop.png')],
                          ['name' => 'Adobe InDesign', 'image' => asset('images/tech-logo/Adobe InDesign.png')],
                          ['name' => 'Adobe After Effects', 'image' => asset('images/tech-logo/After Effects.png')],
                      ],
                  ],
                  [
                      'name' => 'Collaboration',
                      'technologies' => [
                          ['name' => 'Figma', 'image' => asset('images/tech-logo/Figma.png')],
                          ['name' => 'Canva', 'image' => asset('images/tech-logo/Canva.png')],
                          ['name' => 'Notion', 'image' => asset('images/tech-logo/Notion.png')],
                          ['name' => 'Miro', 'image' => asset('images/tech-logo/Miro.png')],
                      ],
                  ],
                  [
                      'name' => 'Project & QA',
                      'technologies' => [
                          ['name' => 'Jira', 'image' => asset('images/tech-logo/Jira.png')],
                          ['name' => 'GitHub', 'image' => asset('images/tech-logo/github-white.png')],
                          ['name' => 'Postman', 'image' => asset('images/tech-logo/Postman.png')],
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
            name.classList.remove('purple-400', 'font-medium');
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

  <!-- Why Choose InTech Nexus -->
  <section class="relative py-24 bg-[#0b0c10] border-t border-white/5 why-choose-section">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-white/[0.02] to-white/[0.04]"></div>
    <div class="relative max-w-7xl mx-auto px-6 sm:px-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
        <div class="p-10 md:p-16 text-white flex flex-col justify-center">
          <span class="font-mono text-xs uppercase tracking-[0.14em] font-semibold text-purple-400">Why InTech Nexus</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Creative planned around what actually works in campaigns</h2>
          <p class="text-gray-300 leading-relaxed max-w-md">
            Creative work here is planned together with Digital Marketing. Assets are built around what is actually working in campaigns, not made separately from the results they need to drive.
          </p>
        </div>
        <div class="why-choose-image-frame">
        <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?q=80&w=1200&auto=format&fit=crop" alt="Why Choose InTech Nexus" class="why-choose-image">
      </div>
      </div>
    </div>
  </section>

  <!-- Frequently Asked Questions -->
  <section class="py-24 bg-[#0b0c10] border-t border-white/5" x-data="{ openFaq: null }">
    <div class="max-w-5xl mx-auto px-6 sm:px-12">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-12 text-center">Frequently Asked Questions</h2>

      <div class="space-y-4">
        @foreach ([
          ['q' => 'Can you work within our brand guidelines?', 'a' => 'Yes. We can work within your current brand, or build one first through our Branding service if needed.'],
          ['q' => 'Is this project based or ongoing?', 'a' => 'Both options are available, based on how much content and how many campaigns you need.'],
          ['q' => 'Can you work within our existing brand guidelines?', 'a' => 'Yes. We can work within your current brand, or help build one first through our Branding service.'],
          ['q' => 'Do you offer ongoing creative support, or just one off projects?', 'a' => 'Both. We can support a single project or an ongoing retainer, depending on your content and campaign volume.'],
        ] as $i => $faq)
          <div class="bg-white/[0.03] border border-white/10 overflow-hidden">
            <button @click="openFaq = openFaq === {{ $i }} ? null : {{ $i }}" class="w-full text-left p-6 font-semibold text-white text-lg flex justify-between items-center focus:outline-none">
              <span>{{ $faq['q'] }}</span>
              <span class="text-purple-400 text-2xl font-bold ml-4" x-text="openFaq === {{ $i }} ? '−' : '+'"></span>
            </button>
            <div x-show="openFaq === {{ $i }}" x-collapse class="px-6 pb-6 text-gray-300 leading-relaxed">
              {{ $faq['a'] }}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Call to Action Banner -->
  <section class="py-24 bg-[#0b0c10] border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center">
      <div class="bg-white/[0.03] border border-purple-500/40 p-10 md:p-16 shadow-[0_0_40px_rgba(168,85,247,0.2)] hover:shadow-[0_0_60px_rgba(168,85,247,0.35)] transition-all duration-300">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
          Ready for creative that actually looks like your brand?
        </h2>
        <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
          Book a call, request a proposal, or get a free quote to begin.
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
