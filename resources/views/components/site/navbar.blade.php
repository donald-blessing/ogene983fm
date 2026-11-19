@php
    $primaryItems = [
        ['label' => 'Listen', 'href' => route('listen'), 'active' => request()->routeIs('listen')],
        ['label' => 'Schedule', 'href' => route('programme.index'), 'active' => request()->routeIs('programme.*')],
        ['label' => 'Shows', 'href' => route('presenter.index'), 'active' => request()->routeIs('presenter.*')],
        ['label' => 'News', 'href' => route('post.index'), 'active' => request()->routeIs('post.*', 'metro.*')],
    ];

    $moreItems = [
        ['label' => 'Gallery', 'href' => route('gallery.album.index'), 'active' => request()->routeIs('gallery.*')],
        ['label' => 'Metro', 'href' => route('metro.index'), 'active' => request()->routeIs('metro.*')],
        ['label' => 'About the station', 'href' => route('about'), 'active' => request()->routeIs('about')],
        ['label' => 'Contact', 'href' => route('contact'), 'active' => request()->routeIs('contact')],
    ];

    $menuItems = array_merge($primaryItems, $moreItems);
@endphp

<header class="fixed inset-x-0 top-0 z-[100] border-b border-line bg-ink">
    <span aria-hidden="true" class="absolute inset-x-0 top-0 h-[3px] bg-brand"></span>
    <div class="container-page">
        <div class="flex h-[var(--header-h)] items-center justify-between gap-4">
            {{-- Brand --}}
            <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-3" aria-label="Ogene 98.3 FM — home">
                <img
                    src="{{ asset('images/logo-wordmark-1x.png') }}"
                    srcset="{{ asset('images/logo-wordmark-1x.png') }} 1x, {{ asset('images/logo-wordmark-2x.png') }} 2x"
                    alt="Ogene 98.3 FM"
                    width="131"
                    height="44"
                    class="h-9 w-auto sm:h-11"
                >
            </a>

            {{-- Desktop nav --}}
            <nav class="hidden items-center gap-7 lg:flex" aria-label="Primary">
                @foreach ($primaryItems as $item)
                    <x-ui.nav-link :href="$item['href']" :active="$item['active']">{{ $item['label'] }}</x-ui.nav-link>
                @endforeach

                <x-ui.dropdown label="More" width="w-56">
                    @foreach ($moreItems as $item)
                        <a href="{{ $item['href'] }}" wire:navigate class="block rounded-xs px-3 py-2.5 text-sm {{ $item['active'] ? 'bg-surface-2 text-paper' : 'text-muted' }} transition-colors hover:bg-surface-2 hover:text-paper">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </x-ui.dropdown>
            </nav>

            {{-- Actions --}}
            <div class="flex items-center gap-2.5">
                <button
                    type="button"
                    class="flex h-10 w-10 items-center justify-center rounded-sm text-muted transition-colors hover:bg-surface-2 hover:text-paper"
                    x-data
                    x-on:click="$dispatch('open-search')"
                    aria-label="Search the site"
                    aria-haspopup="dialog"
                >
                    <x-ui.icon name="search" :size="19" />
                </button>

                {{-- Listen live (primary action) --}}
                <span class="hidden sm:block">
                    <x-ui.button size="sm" x-data x-on:click="$dispatch('toggle-player')">
                        <x-ui.icon name="play" :size="15" />
                        Listen Live
                    </x-ui.button>
                </span>

                @guest
                    <span class="hidden sm:block">
                        <x-ui.button href="{{ route('login') }}" variant="secondary" size="sm">Sign in</x-ui.button>
                    </span>
                @else
                    <x-ui.dropdown align="right" width="w-60">
                        <x-slot:trigger>
                            <x-ui.avatar :src="auth()->user()->avatar" :name="auth()->user()->name" size="sm" />
                        </x-slot:trigger>

                        <div class="border-b border-line px-3 py-2.5">
                            <p class="truncate text-sm font-semibold text-paper">{{ auth()->user()->name }}</p>
                            <p class="mt-0.5 text-[12px] text-brand-text">{{ auth()->user()->loyalty_points }} Ogene points</p>
                        </div>

                        @role('admin|super admin|presenter')
                            <a href="{{ route('dashboard') }}" wire:navigate class="block rounded-xs px-3 py-2.5 text-sm text-muted transition-colors hover:bg-surface-2 hover:text-paper">Studio dashboard</a>
                        @endrole

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full rounded-xs px-3 py-2.5 text-left text-sm text-muted transition-colors hover:bg-surface-2 hover:text-brand-text">Sign out</button>
                        </form>
                    </x-ui.dropdown>
                @endguest

                {{-- Mobile more --}}
                <button
                    type="button"
                    class="flex h-10 w-10 items-center justify-center rounded-sm text-muted transition-colors hover:bg-surface-2 hover:text-paper lg:hidden"
                    x-data
                    x-on:click="$dispatch('open-menu')"
                    aria-label="Open menu"
                    aria-haspopup="dialog"
                >
                    <x-ui.icon name="menu" :size="21" />
                </button>
            </div>
        </div>
    </div>
</header>

{{-- Command-style search overlay --}}
<div
    x-data="{
        open: false,
        trigger: null,
        q: '',
        openSearch() {
            this.trigger = document.activeElement;
            this.open = true;
            this.$nextTick(() => this.$refs.field?.focus());
        },
        closeSearch() {
            this.open = false;
            // Clear inert before returning focus, otherwise focus() is a no-op.
            this.setBackgroundInert(false);
            this.$nextTick(() => {
                if (this.trigger && document.contains(this.trigger)) {
                    this.trigger.focus();
                }
            });
        },
        setBackgroundInert(state) {
            ['header', 'main', 'footer', 'nav[aria-label=\'Primary mobile\']'].forEach((selector) => {
                document.querySelectorAll(selector).forEach((el) => { el.inert = state; });
            });
            document.body.classList.toggle('overflow-hidden', state);
        },
        trapFocus(event) {
            const focusable = Array.from(this.$refs.panel.querySelectorAll('a[href], button:not([disabled]), input:not([type=hidden]):not([disabled]), [tabindex]:not([tabindex=\'-1\'])'))
                .filter((el) => el.offsetParent !== null);

            if (!focusable.length) return;

            const first = focusable[0];
            const last = focusable[focusable.length - 1];

            if (event.shiftKey && document.activeElement === first) {
                event.preventDefault();
                last.focus();
            } else if (!event.shiftKey && document.activeElement === last) {
                event.preventDefault();
                first.focus();
            }
        },
    }"
    x-on:open-search.window="openSearch()"
    x-on:keydown.escape.window="open && closeSearch()"
    x-effect="setBackgroundInert(open)"
    x-cloak
>
    <div x-show="open" x-transition.opacity class="fixed inset-0 z-[110] bg-black/70" x-on:click="closeSearch()" aria-hidden="true"></div>

    <div
        x-ref="panel"
        x-show="open"
        x-on:keydown.tab="trapFocus($event)"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="fixed inset-x-4 top-24 z-[111] mx-auto max-w-xl rounded-xs border border-line bg-surface p-3 shadow-[0_24px_48px_-24px_rgba(0,0,0,0.9)] sm:top-28"
        role="dialog"
        aria-modal="true"
        aria-label="Search"
    >
        <form action="{{ route('search') }}" method="GET" class="flex items-center gap-2">
            <x-ui.icon name="search" :size="20" class="ml-1 text-faint" />
            <label for="site-search" class="sr-only">Search news, shows and presenters</label>
            <input
                id="site-search"
                x-ref="field"
                name="search"
                type="search"
                x-model="q"
                placeholder="Search news, shows and presenters"
                class="h-11 w-full bg-transparent text-[16px] text-paper placeholder:text-faint focus:outline-none"
                autocomplete="off"
            >
            <kbd class="hidden rounded-xs border border-line px-1.5 py-1 text-[11px] text-faint sm:block">Esc</kbd>
            <button
                type="button"
                x-on:click="closeSearch()"
                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-sm text-faint transition-colors hover:bg-surface-2 hover:text-paper"
                aria-label="Close search"
            >
                <x-ui.icon name="x" :size="16" />
            </button>
        </form>
    </div>
</div>

{{-- Mobile menu sheet --}}
<div
    x-data="{
        open: false,
        trigger: null,
        openMenu() {
            this.trigger = document.activeElement;
            this.open = true;
            this.$nextTick(() => this.$refs.panel?.querySelector('a, button')?.focus());
        },
        closeMenu() {
            this.open = false;
            // Clear inert before returning focus, otherwise focus() is a no-op.
            this.setBackgroundInert(false);
            this.$nextTick(() => {
                if (this.trigger && document.contains(this.trigger)) {
                    this.trigger.focus();
                }
            });
        },
        setBackgroundInert(state) {
            ['header', 'main', 'footer', 'nav[aria-label=\'Primary mobile\']'].forEach((selector) => {
                document.querySelectorAll(selector).forEach((el) => { el.inert = state; });
            });
            document.body.classList.toggle('overflow-hidden', state);
        },
        trapFocus(event) {
            const focusable = Array.from(this.$refs.panel.querySelectorAll('a[href], button:not([disabled]), [tabindex]:not([tabindex=\'-1\'])'))
                .filter((el) => el.offsetParent !== null);

            if (!focusable.length) return;

            const first = focusable[0];
            const last = focusable[focusable.length - 1];

            if (event.shiftKey && document.activeElement === first) {
                event.preventDefault();
                last.focus();
            } else if (!event.shiftKey && document.activeElement === last) {
                event.preventDefault();
                first.focus();
            }
        },
    }"
    x-on:open-menu.window="openMenu()"
    x-on:keydown.escape.window="open && closeMenu()"
    x-effect="setBackgroundInert(open)"
    x-cloak
>
    <div x-show="open" x-transition.opacity class="fixed inset-0 z-[110] bg-black/70 lg:hidden" x-on:click="closeMenu()" aria-hidden="true"></div>

    <div
        x-ref="panel"
        x-show="open"
        x-on:keydown.tab="trapFocus($event)"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="translate-y-full"
        class="fixed inset-x-0 bottom-0 z-[111] max-h-[85dvh] overflow-y-auto rounded-t-md border-t border-line bg-surface px-4 pb-6 pt-3 lg:hidden"
        role="dialog"
        aria-modal="true"
        aria-label="Menu"
    >
        <div class="mb-3 flex items-center justify-between">
            <span class="h-1 w-10 rounded-full bg-line" aria-hidden="true"></span>

            <button
                type="button"
                x-on:click="closeMenu()"
                class="flex h-10 w-10 items-center justify-center rounded-sm text-muted transition-colors hover:bg-surface-2 hover:text-paper"
                aria-label="Close menu"
            >
                <x-ui.icon name="x" :size="18" />
            </button>
        </div>

        <nav aria-label="Site" class="flex flex-col gap-1">
            @foreach ($menuItems as $item)
                <x-ui.nav-link :href="$item['href']" mobile :active="$item['active']">{{ $item['label'] }}</x-ui.nav-link>
            @endforeach
        </nav>

        <div class="mt-4 border-t border-line pt-4">
            @guest
                <x-ui.button href="{{ route('login') }}" full>Sign in</x-ui.button>
            @else
                <x-ui.button href="{{ route('dashboard') }}" variant="secondary" full>Studio dashboard</x-ui.button>
            @endguest
        </div>
    </div>
</div>

{{-- Mobile bottom navigation --}}
<nav class="fixed inset-x-0 bottom-[env(safe-area-inset-bottom)] z-[90] border-t border-line bg-ink lg:hidden" aria-label="Primary mobile">
    <div class="grid h-[var(--tabbar-h)] grid-cols-5">
        {{-- Listen (player toggle, not a route) --}}
        <button
            type="button"
            class="flex flex-col items-center justify-center gap-1 text-[11px] font-medium text-faint transition-colors hover:text-paper"
            x-data
            x-on:click="$dispatch('toggle-player')"
        >
            <x-ui.icon name="play" :size="20" />
            Listen
        </button>

        @php
            $tabs = [
                ['label' => 'Schedule', 'href' => route('programme.index'), 'icon' => 'calendar', 'active' => request()->routeIs('programme.*')],
                ['label' => 'Shows', 'href' => route('presenter.index'), 'icon' => 'microphone', 'active' => request()->routeIs('presenter.*')],
                ['label' => 'News', 'href' => route('post.index'), 'icon' => 'newspaper', 'active' => request()->routeIs('post.*', 'metro.*')],
            ];
        @endphp

        @foreach ($tabs as $tab)
            <a
                href="{{ $tab['href'] }}"
                wire:navigate
                @if ($tab['active']) aria-current="page" @endif
                class="flex flex-col items-center justify-center gap-1 text-[11px] font-medium transition-colors {{ $tab['active'] ? 'text-paper' : 'text-faint hover:text-paper' }}"
            >
                <x-ui.icon :name="$tab['icon']" :size="20" />
                {{ $tab['label'] }}
            </a>
        @endforeach

        {{-- More --}}
        <button
            type="button"
            class="flex flex-col items-center justify-center gap-1 text-[11px] font-medium text-faint transition-colors hover:text-paper"
            x-data
            x-on:click="$dispatch('open-menu')"
            aria-haspopup="dialog"
        >
            <x-ui.icon name="menu" :size="20" />
            More
        </button>
    </div>
</nav>
