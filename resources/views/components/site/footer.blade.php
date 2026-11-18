@php
    $settings = app(\App\Settings\GeneralSettings::class);

    // Error pages render outside the web middleware stack, so the shared
    // error bag may not exist. Fall back to an empty bag.
    $newsletterErrors = isset($errors) ? $errors->newsletter : new \Illuminate\Support\MessageBag();

    $explore = [
        ['label' => 'Schedule', 'href' => route('programme.index')],
        ['label' => 'Shows & presenters', 'href' => route('presenter.index')],
        ['label' => 'News & events', 'href' => route('post.index')],
        ['label' => 'Metro', 'href' => route('metro.index')],
        ['label' => 'Gallery', 'href' => route('gallery.album.index')],
    ];

    $station = [
        ['label' => 'About the station', 'href' => route('about')],
        ['label' => 'Listen live', 'href' => route('listen')],
        ['label' => 'Contact us', 'href' => route('contact')],
        ['label' => 'Sign in', 'href' => route('login')],
    ];

    $socials = array_filter([
        ['label' => 'Facebook', 'href' => $settings->facebook_url ?: 'https://www.facebook.com/ogene983fm', 'icon' => 'fa-facebook'],
        ['label' => 'X (Twitter)', 'href' => $settings->twitter_url ?: 'https://twitter.com/ogenefm983', 'icon' => 'fa-twitter'],
        ['label' => 'Instagram', 'href' => $settings->instagram_url ?: 'https://instagram.com/ogene983fm', 'icon' => 'fa-instagram'],
        ['label' => 'YouTube', 'href' => $settings->youtube_url, 'icon' => 'fa-youtube-play'],
    ], fn (array $social): bool => filled($social['href']));

    $studioPhone = $settings->contact_phone;
    $studioEmail = $settings->contact_email;
@endphp

<footer class="mt-24 border-t border-line">
    <div class="border-b border-line">
        <div class="container-page flex flex-wrap items-center justify-between gap-3 py-2.5">
            <p class="label-mono text-faint">Ogene 98.3 FM — Awka, Anambra</p>
            <p class="label-mono text-faint">Broadcasting 24 / 7</p>
        </div>
    </div>

    <div class="container-page py-14 sm:py-16">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-10">
            {{-- Brand --}}
            <div class="lg:col-span-5">
                <a href="{{ route('home') }}" wire:navigate class="inline-flex items-center gap-3" aria-label="Ogene 98.3 FM — home">
                    <img src="{{ asset('images/logo-wordmark.png') }}" alt="Ogene 98.3 FM" width="512" height="172" class="h-12 w-auto" loading="lazy">
                </a>

                <p class="mt-5 max-w-[38ch] text-[15px] leading-relaxed text-muted">
                    The voice of the East. Highlife, news and community stories from Awka — live on 98.3 FM and streaming everywhere.
                </p>

                <p class="mt-5 inline-flex items-center gap-2 text-[12px] font-semibold uppercase tracking-[0.14em] text-brand-text">
                    <span class="equalizer" aria-hidden="true"><span></span><span></span><span></span><span></span></span>
                    {{ $settings->site_motto }}
                </p>

                @if ($socials)
                    <ul class="mt-7 flex flex-wrap gap-2.5">
                        @foreach ($socials as $social)
                            <li>
                                <a
                                    href="{{ $social['href'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="{{ $social['label'] }}"
                                    class="flex h-10 w-10 items-center justify-center rounded-sm border border-line text-muted transition-colors hover:border-brand/60 hover:bg-surface-2 hover:text-paper"
                                >
                                    <i class="fa {{ $social['icon'] }}" aria-hidden="true"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            {{-- Link columns --}}
            <nav class="grid grid-cols-2 gap-8 sm:gap-10 lg:col-span-4" aria-label="Footer">
                <div>
                    <h2 class="label-mono text-faint">Explore</h2>
                    <ul class="mt-5 space-y-3.5">
                        @foreach ($explore as $link)
                            <li>
                                <a href="{{ $link['href'] }}" wire:navigate class="text-sm text-muted transition-colors hover:text-paper">{{ $link['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h2 class="label-mono text-faint">Station</h2>
                    <ul class="mt-5 space-y-3.5">
                        @foreach ($station as $link)
                            <li>
                                <a href="{{ $link['href'] }}" wire:navigate class="text-sm text-muted transition-colors hover:text-paper">{{ $link['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>

            {{-- Newsletter --}}
            <div class="lg:col-span-3">
                <h2 class="label-mono text-brand-text">The weekly note</h2>
                <p class="mt-4 text-sm leading-relaxed text-muted">
                    One email a week: what's worth listening to, and what's happening across the East.
                </p>

                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="mt-5">
                    @csrf
                    <label for="footer-newsletter-email" class="sr-only">Email address</label>
                    <div class="flex items-center gap-1.5 rounded-xs border border-line bg-ink p-1.5 transition-colors focus-within:border-brand/60">
                        <input
                            id="footer-newsletter-email"
                            type="email"
                            name="email"
                            required
                            autocomplete="email"
                            placeholder="you@example.com"
                            @if ($newsletterErrors->has('email')) aria-invalid="true" aria-describedby="footer-newsletter-error" @endif
                            class="h-9 min-w-0 flex-1 bg-transparent px-2.5 text-[16px] text-paper placeholder:text-faint focus:outline-none"
                        >
                        <button type="submit" class="h-9 shrink-0 rounded-xs bg-brand-strong px-3.5 text-[13px] font-semibold text-white transition-colors hover:bg-brand">
                            Join
                        </button>
                    </div>

                    @if ($newsletterErrors->has('email'))
                        <p id="footer-newsletter-error" class="mt-2 text-[12px] text-brand-text" role="alert">{{ $newsletterErrors->first('email') }}</p>
                    @endif
                </form>

                <p class="mt-3 text-[12px] leading-relaxed text-faint">No spam. Unsubscribe any time.</p>
            </div>
        </div>

        {{-- Legal --}}
        <div class="mt-12 flex flex-col gap-4 border-t border-line pt-7 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-[12px] text-faint">
                &copy; {{ date('Y') }} {{ $settings->site_name }}. All rights reserved.
            </p>

            <p class="text-[12px] text-faint">
                @if ($studioPhone)
                    Broadcasting from Awka · <a href="tel:{{ preg_replace('/\s+/', '', $studioPhone) }}" class="text-paper underline decoration-line underline-offset-2 transition-colors hover:decoration-brand-text">{{ $studioPhone }}</a>
                @elseif ($studioEmail)
                    Broadcasting from Awka · <a href="mailto:{{ $studioEmail }}" class="text-paper underline decoration-line underline-offset-2 transition-colors hover:decoration-brand-text">{{ $studioEmail }}</a>
                @else
                    Broadcasting from Awka
                @endif
            </p>
        </div>
    </div>
</footer>
