{{-- Footer --}}
<footer class="bg-brand-blue text-gray-300">
    {{-- Main Footer Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8 lg:justify-center justify-items-center">

            {{-- Column 1: Company / About --}}
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 mb-5 justify-center">
                    <svg class="w-9 h-9 text-white" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="1.5" fill="none"/>
                        <ellipse cx="20" cy="20" rx="10" ry="18" stroke="currentColor" stroke-width="1.5" fill="none"/>
                        <ellipse cx="20" cy="20" rx="18" ry="7" stroke="currentColor" stroke-width="1.5" fill="none"/>
                        <line x1="2" y1="20" x2="38" y2="20" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                    <span class="text-white font-heading font-bold text-xl tracking-widest uppercase">IntechNexus</span>
                </a>

                <p class="text-sm text-gray-400 leading-relaxed mb-5 max-w-xs mx-auto">
                    Transforming Bold Ideas into Digital Reality.
                </p>

                <div class="flex items-center gap-3 flex-wrap justify-center">
                    <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 rounded-full border border-gray-600 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 rounded-full border border-gray-600 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 rounded-full border border-gray-600 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://x.com/" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 rounded-full border border-gray-600 flex items-center justify-center hover:border-white hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                </div>

                <br>
                <h4 class="text-white font-semibold text-lg mb-5">Get in Touch</h4>

                <div class="mb-5">
                    <p class="text-base text-gray-400 mb-1">Email us at</p>
                    <a href="mailto:info@intechnexus.com"
                       class="text-sm text-gray-300 hover:text-white transition-colors border-b border-gray-600 hover:border-white pb-0.5">
                        info@intechnexus.com
                    </a>
                </div>
            </div>

            {{-- Column 2: Quick Links --}}
            {{-- TODO: swap these anchors for route('page.show', $slug) once the
                 corresponding Page records exist --}}
            <div class="text-center">
                <h4 class="text-white font-semibold text-base mb-5">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="/services" class="text-sm text-gray-400 hover:text-white transition-colors">Services</a></li>
                    <li><a href="/technologies" class="text-sm text-gray-400 hover:text-white transition-colors">Technologies</a></li>
                    <li><a href="#projects" class="text-sm text-gray-400 hover:text-white transition-colors">Projects</a></li>
                    <li><a href="#industries" class="text-sm text-gray-400 hover:text-white transition-colors">Industries</a></li>
                    <li><a href="/about" class="text-sm text-gray-400 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="#blog" class="text-sm text-gray-400 hover:text-white transition-colors">Our Blog</a></li>
                    <li><a href="/contact" class="text-sm text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    <li><a href="/career" class="text-sm text-gray-400 hover:text-white transition-colors">Careers</a></li>
                </ul>
            </div>

            {{-- Column 3: Services --}}
            <div class="text-center">
                <h4 class="text-white font-semibold text-base mb-5">Services</h4>
                <ul class="space-y-3">
                    <li><a href="/software-development" class="text-sm text-gray-400 hover:text-white transition-colors">Software Engineering</a></li>
                    <li><a href="#web-development" class="text-sm text-gray-400 hover:text-white transition-colors">Web Development</a></li>
                    <li><a href="#mobile-engineering" class="text-sm text-gray-400 hover:text-white transition-colors">Mobile Engineering</a></li>
                    <li><a href="#ui-ux-design" class="text-sm text-gray-400 hover:text-white transition-colors">UI/UX Design</a></li>
                    <li><a href="#qa-testing" class="text-sm text-gray-400 hover:text-white transition-colors">QA &amp; Testing</a></li>
                    <li><a href="#ai-ml-development" class="text-sm text-gray-400 hover:text-white transition-colors">AI &amp; ML Development</a></li>
                    <li><a href="#devops-services" class="text-sm text-gray-400 hover:text-white transition-colors">DevOps Services</a></li>
                    <li><a href="#it-consulting" class="text-sm text-gray-400 hover:text-white transition-colors">IT Consulting</a></li>
                </ul>
            </div>

            {{-- Column 4: Google Maps Location --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.368245065832!2d85.40713550852705!3d27.67501127610175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a90f3fe73bd%3A0x6717557a3e66a878!2sSallaghari%20Shopping%20Complex!5e0!3m2!1sen!2snp!4v1779603129833!5m2!1sen!2snp"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <div class="flex items-center gap-3">
                    <a href="{{ route('home') }}" class="flex items-center gap-2">
                        <svg class="w-6 h-6 text-gray-500" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="1.5" fill="none"/>
                            <ellipse cx="20" cy="20" rx="10" ry="18" stroke="currentColor" stroke-width="1.5" fill="none"/>
                            <ellipse cx="20" cy="20" rx="18" ry="7" stroke="currentColor" stroke-width="1.5" fill="none"/>
                            <line x1="2" y1="20" x2="38" y2="20" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                        <span class="text-gray-500 font-bold text-xs tracking-widest uppercase">IntechNexus</span>
                    </a>
                </div>

                <p class="text-xs text-gray-500 text-center">
                    Copyright &copy; {{ now()->year }} IntechNexus &reg; &nbsp;|&nbsp;
                    <a href="#cookies" class="hover:text-gray-300 transition-colors">Cookie Settings</a>
                    &nbsp;&bull;&nbsp;
                    <a href="#privacy" class="hover:text-gray-300 transition-colors">Privacy Policy</a>
                    &nbsp;&bull;&nbsp;
                    <a href="#terms" class="hover:text-gray-300 transition-colors">Terms of Services</a>
                </p>
            </div>
        </div>
    </div>
</footer>