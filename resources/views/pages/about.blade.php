@extends('layouts.app')
@section('about')
{{--
    Hero section with animated particle background.
    Drop this into a Blade view (e.g. resources/views/components/hero-particles.blade.php)
    and render with <x-hero-particles /> or paste directly into your hero section.

    Requires (in your layout <head>):
      <script src="https://cdn.tailwindcss.com"></script>
      <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    No external particles.js dependency — the dot field is drawn on a plain
    <canvas> with vanilla JS, so it's ~1kb of script and easy to tweak.
--}}

<section
    x-data="particleHero()"
    x-init="init()"
    class="relative isolate overflow-hidden bg-[#0a0514] min-h-[640px] flex items-center"
>
    {{-- Base gradient: near-black fading into deep purple on the right --}}
    <div class="absolute inset-0 bg-gradient-to-br from-[#0a0514] via-[#160b2e] to-[#3b1370]"></div>

    {{-- Diagonal triangle overlay (the "cut corner" look) --}}
    <div
        class="absolute inset-0"
        style="clip-path: polygon(0 0, 62% 0, 30% 100%, 0 100%); background: linear-gradient(135deg, rgba(124,58,237,0.35), rgba(10,5,20,0.05));"
    ></div>
    <div
        class="absolute inset-0"
        style="clip-path: polygon(45% 0, 100% 0, 100% 100%, 15% 100%); background: radial-gradient(circle at 80% 30%, rgba(168,85,247,0.25), transparent 60%);"
    ></div>

    {{-- Particle canvas sits above the gradients, below the content --}}
    <canvas x-ref="canvas" class="absolute inset-0 w-full h-full"></canvas>

    {{-- Content --}}
    <div class="relative z-10 max-w-4xl px-8 sm:px-16 py-24">
        <h1 class="text-4xl sm:text-6xl font-extrabold text-white leading-tight">
            Go Beyond Outsourcing &amp;
            <span class="block">Accelerate</span>
            <span class="block text-emerald-400">Innovation by 07x</span>
        </h1>

        <a href="#"
           class="inline-flex items-center gap-2 mt-10 px-6 py-3 rounded-full border border-white text-white font-medium hover:bg-white hover:text-[#160b2e] transition">
            Learn More
            <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                <path d="M12.293 3.293a1 1 0 011.414 0l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L15.586 10H3a1 1 0 110-2h12.586l-3.293-3.293a1 1 0 010-1.414z"/>
            </svg>
        </a>
    </div>
</section>

<script>
    function particleHero() {
        return {
            init() {
                const canvas = this.$refs.canvas;
                const ctx = canvas.getContext('2d');
                let particles = [];
                let width, height;
                let animationFrame;

                const DENSITY = 12000; // px^2 per particle — raise to thin the field out
                const MAX_SPEED = 0.15;
                const DOT_COLOR = 'rgba(216, 180, 254, 0.55)'; // soft violet dots
                const LINK_DISTANCE = 110;
                const LINK_COLOR = 'rgba(168, 85, 247, 0.12)';

                const resize = () => {
                    width = canvas.width = canvas.offsetWidth * devicePixelRatio;
                    height = canvas.height = canvas.offsetHeight * devicePixelRatio;
                    canvas.style.width = canvas.offsetWidth + 'px';
                    canvas.style.height = canvas.offsetHeight + 'px';
                    const count = Math.round((canvas.offsetWidth * canvas.offsetHeight) / DENSITY);
                    particles = Array.from({ length: count }, () => ({
                        x: Math.random() * width,
                        y: Math.random() * height,
                        vx: (Math.random() - 0.5) * MAX_SPEED * devicePixelRatio,
                        vy: (Math.random() - 0.5) * MAX_SPEED * devicePixelRatio,
                        r: (Math.random() * 1.2 + 0.6) * devicePixelRatio,
                    }));
                };

                const step = () => {
                    ctx.clearRect(0, 0, width, height);

                    for (const p of particles) {
                        p.x += p.vx;
                        p.y += p.vy;
                        if (p.x < 0 || p.x > width) p.vx *= -1;
                        if (p.y < 0 || p.y > height) p.vy *= -1;

                        ctx.beginPath();
                        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                        ctx.fillStyle = DOT_COLOR;
                        ctx.fill();
                    }

                    // faint connecting lines between nearby particles
                    for (let i = 0; i < particles.length; i++) {
                        for (let j = i + 1; j < particles.length; j++) {
                            const a = particles[i], b = particles[j];
                            const dx = a.x - b.x, dy = a.y - b.y;
                            const dist = Math.sqrt(dx * dx + dy * dy);
                            if (dist < LINK_DISTANCE * devicePixelRatio) {
                                ctx.beginPath();
                                ctx.moveTo(a.x, a.y);
                                ctx.lineTo(b.x, b.y);
                                ctx.strokeStyle = LINK_COLOR;
                                ctx.lineWidth = devicePixelRatio * 0.5;
                                ctx.stroke();
                            }
                        }
                    }

                    animationFrame = requestAnimationFrame(step);
                };

                // Respect reduced-motion preference: draw one static frame, no loop
                const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

                resize();
                window.addEventListener('resize', resize);

                if (prefersReducedMotion) {
                    step();
                    cancelAnimationFrame(animationFrame);
                } else {
                    step();
                }
            }
        }
    }
</script>
@endsection