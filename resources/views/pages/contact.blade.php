@extends("layouts.app")
@section('title', 'Contact Us')
@section("content")
<x-hero.hero-contact/>

 <!-----  Contact Section -->
    {{-- Intro + CTA Green Section --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-8">
            <div>
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-3xl">
                    Whatever the enquiry, we will appreciate you reaching out. Drop us a line via a contact form below or contact us at
                    <a href="mailto:info@intechnnexus.com" class="text-[#071336] font-semibold hover:underline">info@intechnnexus.com</a>
                    and our representative will get back to you within one business day.
                </p>
            </div>
            <div class="shrink-0">
                <p class="text-base font-bold text-[#071336] mb-2">Start your digital transformation journey today</p>
                <p class="text-sm text-gray-500 mb-4 max-w-xs">Drop us a line via the form below and our representative will get back to you within one business day.</p>
                <a href="#contact-form" class="inline-flex items-center justify-center px-6 py-3 bg-red-700 text-white text-sm font-medium rounded-sm hover:bg-red-800 transition-colors">
                    Contact us
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form + Sidebar --}}
<section id="contact-form" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- Contact Form --}}
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl p-8 md:p-10 shadow-sm border border-gray-100">
                    <h2 class="text-2xl md:text-3xl font-bold text-[#071336] mb-2">Write us</h2>
                    <p class="text-gray-500 text-sm mb-8">Please fill in your contact details and a short description of your requirement. We will get back to you within one business day.</p>

                    <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
                        @csrf

                        @if (session('success'))
                            <div class="p-4 bg-green-50 border border-green-200 rounded-lg text-green-800 text-sm">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Your Name</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                       class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:border-[#071336] focus:ring-1 focus:ring-[#071336] focus:outline-none text-sm text-gray-800 placeholder-gray-400 transition-colors"
                                       placeholder="Your full name">
                                @error('name') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Your Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                       class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:border-[#071336] focus:ring-1 focus:ring-[#071336] focus:outline-none text-sm text-gray-800 placeholder-gray-400 transition-colors"
                                       placeholder="you@example.com">
                                @error('email') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Your Message</label>
                            <p class="text-xs text-gray-400 mb-2">Please tell us about your project, idea, or challenge. The more details you share, the better we can assist you.</p>
                            <textarea name="message" rows="5"
                                      class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:border-[#071336] focus:ring-1 focus:ring-[#071336] focus:outline-none text-sm text-gray-800 placeholder-gray-400 transition-colors resize-none"
                                      placeholder="Describe your project or inquiry...">{{ old('message') }}</textarea>
                            @error('message') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="flex items-start gap-3">
                            <input type="checkbox" id="terms" required class="mt-1 w-4 h-4 rounded border-gray-300 text-[#071336] focus:ring-[#071336]">
                            <label for="terms" class="text-xs text-gray-500 leading-relaxed">
                                I agree with the
                                <a href="#privacy" class="text-[#071336] underline underline-offset-1 hover:opacity-70">Privacy Policy</a>
                                and the
                                <a href="#terms" class="text-[#071336] underline underline-offset-1 hover:opacity-70">Terms of Services</a>
                            </label>
                        </div>

                        <button type="submit"
                                class="inline-flex items-center justify-center px-8 py-3.5 bg-red-700 text-white text-sm font-medium rounded-sm hover:bg-red-800 transition-colors">
                            Send message
                        </button>

                    </form>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="space-y-8">

                {{-- Career Card --}}
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100">
                    <div class="h-36 bg-gradient-to-br from-blue-500 to-[#071336] flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/30" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-[#071336] mb-2">Career</h3>
                        <p class="text-sm text-gray-500 leading-relaxed mb-4">
                            Looking for the next career opportunity? Consider visiting the website's Career section to learn more and apply through specialized forms.
                        </p>
                        <a href="/careers" class="inline-flex items-center text-sm font-semibold text-[#071336] border-b border-[#071336] pb-0.5 hover:opacity-70 transition-opacity">
                            Explore careers
                            <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Referral Program Card --}}
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100">
                    <div class="h-36 bg-gradient-to-br from-[#071336] to-blue-800 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/30" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-[#071336] mb-2">Referral program</h3>
                        <p class="text-sm text-gray-500 leading-relaxed mb-4">
                            If you would like to refer a business opportunity to IntechNexus, we recommend engaging through our referral program. We are always open to partnerships that are built with trust, transparency and win-win-win mindset.
                        </p>
                        <a href="#referral" class="inline-flex items-center text-sm font-semibold text-[#071336] border-b border-[#071336] pb-0.5 hover:opacity-70 transition-opacity">
                            Learn more
                            <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- Our Locations --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-[#071336] mb-3">Our locations</h2>
        <p class="text-gray-500 text-base mb-12 max-w-3xl">
            IntechNexus is a global software development company with its <strong>headquarters located in Poland</strong>. Alongside our headquarters, we operate development centers across Europe and have representative offices in other regions, allowing us to build distributed teams and remain close to our clients worldwide. This structure enables us to combine strong engineering expertise with seamless collaboration across time zones, delivering high-quality custom software solutions to clients around the globe.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Poland --}}
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-md transition-shadow">
                <h3 class="text-base font-bold text-[#071336] mb-1.5">Poland</h3>
                <p class="text-sm text-gray-500 mb-3">9A Belwederska st, Warsaw, 00-761</p>
                <a href="mailto:warsaw@intechnnexus.com" class="text-sm text-gray-600 hover:text-[#071336] transition-colors border-b border-gray-300 hover:border-[#071336] pb-0.5">warsaw@intechnnexus.com</a>
            </div>

            {{-- United States --}}
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-md transition-shadow">
                <h3 class="text-base font-bold text-[#071336] mb-1.5">United States</h3>
                <p class="text-sm text-gray-500 mb-3">22 Juniper st, Wenham, Massachusetts, 01984</p>
                <a href="mailto:wenham@intechnnexus.com" class="text-sm text-gray-600 hover:text-[#071336] transition-colors border-b border-gray-300 hover:border-[#071336] pb-0.5">wenham@intechnnexus.com</a>
            </div>

            {{-- Lithuania --}}
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-md transition-shadow">
                <h3 class="text-base font-bold text-[#071336] mb-1.5">Lithuania</h3>
                <p class="text-sm text-gray-500 mb-3">82 Laisves al., Kaunas, 44250</p>
                <a href="mailto:kaunas@intechnnexus.com" class="text-sm text-gray-600 hover:text-[#071336] transition-colors border-b border-gray-300 hover:border-[#071336] pb-0.5">kaunas@intechnnexus.com</a>
            </div>

            {{-- United Kingdom --}}
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-md transition-shadow">
                <h3 class="text-base font-bold text-[#071336] mb-1.5">United Kingdom</h3>
                <p class="text-sm text-gray-500 mb-3">Loughborough Technology Centre, Epinal Way, Loughborough, LE11 3GE</p>
                <a href="mailto:london@intechnnexus.com" class="text-sm text-gray-600 hover:text-[#071336] transition-colors border-b border-gray-300 hover:border-[#071336] pb-0.5">london@intechnnexus.com</a>
            </div>

            {{-- Bulgaria --}}
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-md transition-shadow">
                <h3 class="text-base font-bold text-[#071336] mb-1.5">Bulgaria</h3>
                <p class="text-sm text-gray-500 mb-3">Knyaginya Maria Luiza 1 Blvd., Plovdiv, 4000</p>
                <a href="mailto:plovdiv@intechnnexus.com" class="text-sm text-gray-600 hover:text-[#071336] transition-colors border-b border-gray-300 hover:border-[#071336] pb-0.5">plovdiv@intechnnexus.com</a>
            </div>

            {{-- United Arab Emirates --}}
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-md transition-shadow">
                <h3 class="text-base font-bold text-[#071336] mb-1.5">United Arab Emirates</h3>
                <p class="text-sm text-gray-500 mb-3">Office No. 19-177MF, Owned by Shamsa Mohammed Ibrahim Al-Suwaidi, Al-Murar, Dubai</p>
                <a href="mailto:dubai@intechnnexus.com" class="text-sm text-gray-600 hover:text-[#071336] transition-colors border-b border-gray-300 hover:border-[#071336] pb-0.5">dubai@intechnnexus.com</a>
            </div>

            {{-- Georgia --}}
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-md transition-shadow md:col-span-2 lg:col-span-1">
                <h3 class="text-base font-bold text-[#071336] mb-1.5">Georgia</h3>
                <p class="text-sm text-gray-500 mb-3">1 Meliton And Andria Balanchivadze st, Tbilisi, 0667</p>
                <a href="mailto:tbilisi@intechnnexus.com" class="text-sm text-gray-600 hover:text-[#071336] transition-colors border-b border-gray-300 hover:border-[#071336] pb-0.5">tbilisi@intechnnexus.com</a>
            </div>

        </div>
    </div>
</section>
@endsection