<div x-data="chatbot()" class="fixed bottom-6 right-6 z-50">
    <!-- Toggle Button -->
    <button
        @click="toggle()"
        class="w-14 h-14 rounded-full bg-[#CC0309] hover:bg-[#F12B2B] shadow-lg flex items-center justify-center transition-all"
        aria-label="Open chat"
    >
        <svg x-show="!open" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8-1.06 0-2.077-.163-3.02-.465L3 21l1.395-4.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
        </svg>
        <svg x-show="open" x-cloak class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>

    <!-- Chat Panel -->
    <div
        x-show="open"
        x-cloak
        x-transition
        class="absolute bottom-20 right-0 w-80 sm:w-96 max-h-[500px] bg-white border border-black/10 rounded-2xl shadow-2xl flex flex-col overflow-hidden"
    >
        <div class="p-4 bg-[#01183D]">
            <h3 class="text-white font-bold">Ask us anything</h3>
        </div>

        <div class="flex-1 overflow-y-auto p-4 space-y-3 bg-white" x-ref="messages">
            <template x-for="msg in messages" :key="msg.id">
                <div :class="msg.role === 'user' ? 'text-right' : 'text-left'">
                    <div
                        :class="msg.role === 'user' ? 'bg-[#CC0309] text-white inline-block' : 'bg-black/5 text-black inline-block'"
                        class="px-4 py-2 rounded-xl max-w-[85%] text-sm leading-relaxed"
                        x-text="msg.text"
                    ></div>
                    <template x-if="msg.link">
                        <div class="mt-1">
                            <a :href="msg.link" class="text-[#CC0309] text-xs underline hover:text-[#F12B2B]">Learn more</a>
                        </div>
                    </template>
                </div>
            </template>
            <div x-show="loading" class="text-black/40 text-sm">Typing...</div>
        </div>

        <form @submit.prevent="send()" class="p-3 border-t border-black/10 flex gap-2 bg-white">
    <input
        x-model="input"
        type="text"
        placeholder="Type your question..."
        class="flex-1 bg-black/5 text-black placeholder-black/40 text-sm rounded-lg px-3 py-2 outline-none focus:ring-1 focus:ring-[#CC0309]"
    >
    <button
        type="submit"
        class="w-10 h-10 shrink-0 rounded-full bg-[#CC0309] hover:bg-[#F12B2B] flex items-center justify-center transition-colors"
        aria-label="Send message"
    >
        <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="currentColor">
            <path d="M2 21l21-9L2 3v7l15 2-15 2v7z"/>
        </svg>
    </button>
</form>
    </div>
</div>

<script>
function chatbot() {
    return {
        open: false,
        input: '',
        loading: false,
        messages: [
            { id: 0, role: 'bot', text: "Hi! Ask me anything about our services.", link: null }
        ],
        toggle() {
            this.open = !this.open;
        },
        async send() {
            const text = this.input.trim();
            if (!text) return;

            this.messages.push({ id: Date.now(), role: 'user', text, link: null });
            this.input = '';
            this.loading = true;
            this.$nextTick(() => this.scrollToBottom());

            try {
                const res = await fetch('{{ route('chatbot.ask') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({ message: text }),
                });
                const data = await res.json();
                this.messages.push({ id: Date.now() + 1, role: 'bot', text: data.answer, link: data.link ?? null });
            } catch (e) {
                this.messages.push({ id: Date.now() + 1, role: 'bot', text: "Something went wrong. Please try again.", link: null });
            } finally {
                this.loading = false;
                this.$nextTick(() => this.scrollToBottom());
            }
        },
        scrollToBottom() {
            this.$refs.messages.scrollTop = this.$refs.messages.scrollHeight;
        },
    };
}
</script>