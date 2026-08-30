<header
    x-data="{
        openMenu: null,
        activeChild: null,
        mobileOpen: false,

        toggleMenu(id, firstChildId) {
            if (this.openMenu === id) {
                this.openMenu = null;
                this.activeChild = null;
            } else {
                this.openMenu = id;
                this.activeChild = firstChildId;
            }
        },
        selectChild(id) {
            this.activeChild = id;
        },
        closeAll() {
            this.openMenu = null;
            this.activeChild = null;
        }
    }"
    @keydown.escape.window="closeAll(); mobileOpen = false"
    @click.outside="closeAll()"
    class="navbar"
>
    {{-- Top Bar --}}
    <div class="max-w-7xl mx-auto px-5 h-full flex items-center justify-between">

        <a href="{{ route('home') }}" aria-label="Home" class="shrink-0 navbar-brand">
            <img src="{{ asset('images/intech-logo.png') }}" alt="InTech Nexus" class="h-15 w-auto">
        </a>

        <ul class="hidden lg:flex gap-7 items-center absolute left-1/2 -translate-x-1/2">
            @foreach ($menuItems as $item)
                <li>
                    @if ($item->children->isNotEmpty())
                        <button
                            type="button"
                            @click="toggleMenu({{ $item->id }}, {{ $item->children->first()?->id ?? 'null' }})"
                            :class="openMenu === {{ $item->id }} ? 'nav-link-active' : 'nav-link'"
                            :aria-expanded="(openMenu === {{ $item->id }}).toString()"
                            aria-haspopup="true"
                            class="flex items-center gap-1"
                        >
                            {{ $item->title }}
                            <svg class="w-3 h-3 nav-chevron" :class="{ 'rotate-180': openMenu === {{ $item->id }} }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    @elseif ($item->page)
                        <a href="{{ route('page.show', $item->page->slug) }}"
                           class="nav-link">
                            {{ $item->title }}
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>

        <div class="flex items-center gap-3 shrink-0">
            <a href="{{ route('contact')}}"
               class="hidden lg:inline-block btn-contact">
                Contact Us
            </a>

            <button
                type="button"
                @click="mobileOpen = !mobileOpen"
                :aria-expanded="mobileOpen.toString()"
                :aria-label="mobileOpen ? 'Close menu' : 'Open menu'"
                class="lg:hidden nav-hamburger"
            >
                <svg x-cloak x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-cloak x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Desktop Mega Menu Panel --}}
    @foreach ($menuItems as $item)
        @if ($item->children->isNotEmpty())
            <div
                x-cloak
                x-show="openMenu === {{ $item->id }}"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="fixed top-[68px] left-0 w-screen mega-menu-panel"
                role="region"
                aria-label="{{ $item->title }} submenu"
            >
                <div class="max-w-7xl mx-auto grid grid-cols-4 gap-0 min-h-[320px] max-h-[calc(100vh-68px)]">

                    {{-- Column 1: categories --}}
                    <div class="col-span-1 mega-category-col">
                        <p class="mega-category-title">
                            {{ $item->title }}
                        </p>
                        <ul class="space-y-0.5">
                            @foreach ($item->children as $category)
                                <li>
                                    <button
                                        type="button"
                                        @click="selectChild({{ $category->id }})"
                                        :class="activeChild === {{ $category->id }}
                                            ? 'mega-category-item-active'
                                            : 'mega-category-item-inactive'"
                                        class="mega-category-item"
                                        :aria-current="(activeChild === {{ $category->id }}).toString()"
                                    >
                                        <span>{{ $category->title }}</span>
                                        @if ($category->children->isNotEmpty())
                                            <svg class="w-3.5 h-3.5 mega-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        @endif
                                    </button>
                                </li>
                            @endforeach
                        </ul>

                        <button
                            type="button"
                            @click="closeAll()"
                            class="mega-close-btn"
                        >
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Close
                        </button>
                    </div>

                    {{-- Columns 2-4: sub-items --}}
                    <div class="col-span-3 mega-subitems-col">
                        @foreach ($item->children as $category)
                            <div
                                x-cloak
                                x-show="activeChild === {{ $category->id }}"
                                x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0 translate-x-2"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                            >
                                @if ($category->children->isNotEmpty())
                                    <p class="mega-group-title">
                                        {{ $category->title }}
                                    </p>
                                    <ul class="grid grid-cols-3 gap-2">
                                        @foreach ($category->children as $subItem)
                                            @if ($subItem->page)
                                                <li>
                                                    <a
                                                        href="{{ route('page.show', $subItem->page->slug) }}"
                                                        @click="closeAll()"
                                                        class="mega-subitem-card group"
                                                    >
                                                        <span class="mega-subitem-dot"></span>
                                                        <span class="mega-subitem-text">
                                                            {{ $subItem->title }}
                                                        </span>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @else
                                    <div class="flex flex-col justify-center h-full max-w-sm">
                                        <p class="mega-leaf-title">{{ $category->title }}</p>
                                        @if ($category->page)
                                            <a
                                                href="{{ route('page.show', $category->page->slug) }}"
                                                @click="closeAll()"
                                                class="mega-leaf-link"
                                            >
                                                View {{ $category->title }}
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    {{-- Mobile Accordion Menu --}}
    <div
        x-cloak
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden fixed top-[68px] left-0 right-0 mobile-menu-panel"
        role="navigation"
        aria-label="Mobile navigation"
    >
        <ul class="flex flex-col gap-0.5 px-5 py-4">
            @foreach ($menuItems as $item)
                <li x-data="{ l1Open: false }">

                    @if ($item->children->isNotEmpty())
                        <button
                            type="button"
                            @click="l1Open = !l1Open"
                            :aria-expanded="l1Open.toString()"
                            class="mobile-l1-btn"
                        >
                            <span>{{ $item->title }}</span>
                            <svg class="w-4 h-4 nav-chevron" :class="{ 'rotate-90': l1Open }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>

                        <ul
                            x-show="l1Open"
                            x-cloak
                            x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="mobile-l1-ul"
                        >
                            @foreach ($item->children as $category)
                                <li x-data="{ l2Open: false }">

                                    @if ($category->children->isNotEmpty())
                                        <button
                                            type="button"
                                            @click="l2Open = !l2Open"
                                            :aria-expanded="l2Open.toString()"
                                            class="mobile-l2-btn"
                                        >
                                            <span>{{ $category->title }}</span>
                                            <svg class="w-3.5 h-3.5 nav-chevron" :class="{ 'rotate-90': l2Open }"
                                                 fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </button>

                                        <ul
                                            x-show="l2Open"
                                            x-cloak
                                            x-transition:enter="transition ease-out duration-150"
                                            x-transition:enter-start="opacity-0 -translate-y-1"
                                            x-transition:enter-end="opacity-100 translate-y-0"
                                            x-transition:leave="transition ease-in duration-100"
                                            x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0"
                                            class="mobile-l2-ul"
                                        >
                                            @foreach ($category->children as $subItem)
                                                @if ($subItem->page)
                                                    <li>
                                                        <a
                                                            href="{{ route('page.show', $subItem->page->slug) }}"
                                                            @click="mobileOpen = false"
                                                            class="flex items-center gap-2 py-1.5 text-[13px] text-ink/70 hover:text-brand-blue transition-colors"
                                                        >
                                                            <span class="w-1.5 h-1.5 rounded-full bg-ink/30 shrink-0"></span>
                                                            {{ $subItem->title }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>

                                    @elseif ($category->page)
                                        <a
                                            href="{{ route('page.show', $category->page->slug) }}"
                                            @click="mobileOpen = false"
                                            class="block py-2 text-[14px] text-ink/70 hover:text-brand-blue transition-colors"
                                        >
                                            {{ $category->title }}
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>

                    @elseif ($item->page)
                        <a
                            href="{{ route('page.show', $item->page->slug) }}"
                            @click="mobileOpen = false"
                            class="block py-3 text-ink hover:text-brand-blue font-medium text-[15px] transition-colors"
                        >
                            {{ $item->title }}
                        </a>
                    @endif
                </li>
            @endforeach

            {{-- Mobile Contact --}}
            <li class="pt-4 mt-2 border-t border-gray-200">
                <a
                    href="#contact"
                    @click="mobileOpen = false"
                    class="inline-block btn-contact"
                >
                    Contact Us
                </a>
            </li>
        </ul>
    </div>

</header>