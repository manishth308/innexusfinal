@if($faqs->isNotEmpty())
<section class="py-16 bg-[#0b0c10] border-t border-white/5" id="faq">
    <div class="max-w-4xl mx-auto px-6 sm:px-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-10 text-center">
            Frequently Asked Questions
        </h2>

        <div x-data="{ open: null }" class="space-y-4">
            @foreach($faqs as $faq)
                <div class="rounded-2xl border border-purple-500/20 bg-white/[0.03] overflow-hidden">
                    <button
                        @click="open === {{ $faq->id }} ? open = null : open = {{ $faq->id }}"
                        class="w-full flex items-center justify-between gap-4 p-6 text-left"
                    >
                        <span class="text-lg font-semibold text-white">{{ $faq->question }}</span>
                        <svg
                            class="w-5 h-5 text-purple-400 shrink-0 transition-transform duration-200"
                            :class="open === {{ $faq->id }} ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div
                        x-show="open === {{ $faq->id }}"
                        x-transition
                        class="px-6 pb-6 text-gray-300 leading-relaxed"
                    >
                        {{ $faq->answer }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif