@extends('layouts.site')

@section('title', 'Authentically Eastern · Ogene 98.3 FM')

@section('content')
@php
    $settings = app(\App\Settings\GeneralSettings::class);
    $studioContact = $settings->contact_phone ?: $settings->contact_email;
    $studioHref = $settings->contact_phone
        ? 'tel:' . preg_replace('/\s+/', '', $settings->contact_phone)
        : 'mailto:' . $settings->contact_email;
    $formatTime = fn (?string $time): string => $time ? \Illuminate\Support\Carbon::parse($time)->format('g:i A') : '';
    $now = now()->format('H:i:s');

    $isOnAir = fn ($programme): bool => $programme->programmeTimes
        ->contains(fn ($time) => $time->from <= $now && $time->to > $now);
@endphp

{{-- Hero ---------------------------------------------------------------- --}}
<section class="border-b border-line">
    {{-- Masthead --}}
    <div class="border-b border-line">
        <div class="container-page flex items-center justify-between gap-4 py-2.5">
            <p class="label-mono text-faint">Ogene 98.3 FM<span class="hidden sm:inline"> — Awka, Anambra</span></p>
            <p class="label-mono hidden text-faint sm:block">Highlife · News · Culture</p>
            <p class="label-mono tabular-nums text-muted">
                <span class="sm:hidden">{{ now()->format('H:i') }}</span>
                <span class="hidden sm:inline">{{ now()->format('D j M · H:i') }} WAT</span>
            </p>
        </div>
    </div>

    <div class="container-page">
        <div class="grid lg:grid-cols-12">
            {{-- Statement --}}
            <div class="py-12 lg:col-span-7 lg:border-r lg:border-line lg:py-16 lg:pr-12">
                <p class="flex items-center gap-2.5 label-mono text-brand-text">
                    <span class="h-2 w-2 bg-brand"></span>
                    Live from Awka
                </p>

                <h1 class="mt-6 font-display text-[clamp(2.75rem,6.2vw,5rem)] font-bold leading-[0.94] tracking-[-0.04em] text-paper">
                    The voice<br>of the East.
                </h1>

                <p class="mt-6 max-w-[44ch] text-[17px] leading-relaxed text-muted">
                    Highlife, conversation and the stories that matter — live from Awka on 98.3 FM.
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3">
                    <button
                        type="button"
                        x-data
                        x-on:click="$dispatch('toggle-player')"
                        class="inline-flex h-12 items-center justify-center gap-2.5 rounded-xs bg-brand-strong px-6 text-[15px] font-semibold text-white transition-colors hover:bg-brand focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-text active:translate-y-px"
                    >
                        <x-ui.icon name="play" :size="16" />
                        Listen live
                    </button>

                    <a href="{{ route('programme.index') }}" wire:navigate class="group inline-flex items-center gap-2 border-b border-line pb-1.5 text-sm font-semibold text-paper transition-colors hover:border-brand-text hover:text-brand-text">
                        Today's schedule
                        <x-ui.icon name="arrow-right" :size="15" class="transition-transform duration-200 group-hover:translate-x-0.5" />
                    </a>
                </div>

                <dl class="mt-12 grid max-w-lg grid-cols-3 gap-6 border-t border-line pt-6">
                    <div>
                        <dt class="label-mono text-faint">Broadcasting</dt>
                        <dd class="mt-2 font-display text-xl tracking-[-0.02em] text-paper">24 / 7</dd>
                    </div>
                    <div>
                        <dt class="label-mono text-faint">Frequency</dt>
                        <dd class="mt-2 font-display text-xl tracking-[-0.02em] text-paper">98.3 FM</dd>
                    </div>
                    <div>
                        <dt class="label-mono text-faint">From</dt>
                        <dd class="mt-2 font-display text-xl tracking-[-0.02em] text-paper">Awka</dd>
                    </div>
                </dl>
            </div>

            {{-- On air --}}
            <div class="border-t border-line py-10 lg:col-span-5 lg:border-t-0 lg:py-16 lg:pl-12">
                <div class="flex items-center justify-between gap-3">
                    <span class="flex items-center gap-2.5 label-mono text-brand-text">
                        <span class="equalizer" aria-hidden="true"><span></span><span></span><span></span><span></span></span>
                        On air now
                    </span>

                    <span class="label-mono tabular-nums text-faint">{{ now()->format('H:i') }}</span>
                </div>

                <x-ui.frequency-dial class="mt-5" />

                @if ($onAirProgramme)
                    <div class="mt-7 flex items-start gap-4">
                        @if ($onAirProgramme->coverImage)
                            <img
                                src="{{ $onAirProgramme->coverImage }}"
                                alt=""
                                class="h-20 w-20 shrink-0 rounded-xs border border-line object-cover"
                            >
                        @else
                            <div class="relative flex h-20 w-20 shrink-0 items-center justify-center rounded-xs border border-line bg-surface-2 text-brand-text">
                                <x-ui.icon name="radio" :size="24" />

                                <span class="absolute bottom-1.5 right-2 font-mono text-[10px] tracking-[0.1em] text-muted">98.3</span>
                            </div>
                        @endif

                        <div class="min-w-0 flex-1">
                            <h2 class="font-display text-[22px] font-bold leading-[1.1] tracking-[-0.02em] text-paper">{{ $onAirProgramme->title }}</h2>

                            @if ($onAirProgramme->presenters->isNotEmpty())
                                <p class="mt-1.5 text-[13px] leading-relaxed text-muted">
                                    with {{ $onAirProgramme->presenters->pluck('name')->join(', ') }}
                                </p>
                            @endif

                            <div class="mt-4 flex flex-wrap items-center gap-x-5 gap-y-2">
                                <button
                                    type="button"
                                    x-data
                                    x-on:click="$dispatch('toggle-player')"
                                    class="inline-flex h-9 items-center gap-2 rounded-xs bg-brand-strong px-3 text-[13px] font-semibold text-white transition-colors hover:bg-brand"
                                >
                                    <x-ui.icon name="play" :size="12" />
                                    Tune in
                                </button>

                                <a href="{{ route('programme.show', $onAirProgramme) }}" wire:navigate class="text-[13px] font-medium text-muted underline decoration-line underline-offset-4 transition-colors hover:text-paper">
                                    About the show
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="mt-7">
                        <h2 class="font-display text-[22px] font-bold leading-[1.1] tracking-[-0.02em] text-paper">Ogene mix session</h2>
                        <p class="mt-1.5 text-[14px] text-muted">Continuous music until the next live show.</p>

                        <button
                            type="button"
                            x-data
                            x-on:click="$dispatch('toggle-player')"
                            class="mt-4 inline-flex h-9 items-center gap-2 rounded-xs bg-brand-strong px-3 text-[13px] font-semibold text-white transition-colors hover:bg-brand"
                        >
                            <x-ui.icon name="play" :size="12" />
                            Tune in
                        </button>
                    </div>
                @endif

                @php
                    $nextUp = $todaySchedule
                        ->filter(fn ($programme) => ! $isOnAir($programme))
                        ->first();
                @endphp

                @if ($nextUp)
                    <div class="mt-7 flex items-center gap-4 border-t border-line pt-3.5">
                        <span class="label-mono shrink-0 text-faint">Next</span>
                        <p class="min-w-0 flex-1 truncate text-[13px] text-paper">{{ $nextUp->title }}</p>
                        <span class="shrink-0 font-mono text-[11px] tabular-nums text-faint">{{ $formatTime($nextUp->programmeTimes->first()?->from) }}</span>
                    </div>
                @endif

                <div class="mt-6 border-t border-line pt-4">
                    <p class="label-mono text-faint">Talk to the studio</p>
                    <div class="mt-2 flex flex-wrap items-center justify-between gap-3">
                        <a href="{{ $studioHref }}" class="font-display text-[19px] tracking-[-0.01em] text-paper transition-colors hover:text-brand-text">
                            {{ $studioContact }}
                        </a>

                        <a href="{{ route('contact') }}" wire:navigate class="text-[13px] font-medium text-muted underline decoration-line underline-offset-4 transition-colors hover:text-paper">
                            Message us
                        </a>
                    </div>
                </div>

                <p class="mt-6 flex items-center gap-2 font-mono text-[10px] uppercase tracking-[0.12em] text-faint">
                    <x-ui.icon name="headphones" :size="14" />
                    Streams on mobile data and Wi-Fi
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Station strip ------------------------------------------------------- --}}
<div class="border-b border-line bg-surface/20">
    <div class="container-page flex flex-wrap items-center gap-x-5 gap-y-2 py-3">
        <span class="flex items-center gap-2 label-mono text-brand-text">
            <span class="equalizer" aria-hidden="true"><span></span><span></span><span></span><span></span></span>
            24 / 7 broadcast
        </span>
        <span class="hidden h-3 w-px bg-line sm:block"></span>
        <p class="text-[12px] uppercase tracking-[0.16em] text-muted">{{ $settings->site_motto }}</p>
        <span class="ml-auto hidden font-mono text-[10px] uppercase tracking-[0.16em] text-faint md:block">98.3 MHz · Awka</span>
    </div>
</div>

{{-- Today --------------------------------------------------------------- --}}
<section class="container-page py-14 sm:py-20">
    <x-ui.section-header
        eyebrow="Programme"
        title="Today on Ogene"
        description="The full run of show for {{ now()->format('l') }}."
        :href="route('programme.index')"
        link-label="Full schedule"
    />

    <div class="mt-8 grid gap-10 lg:grid-cols-12 lg:gap-12">
        {{-- Schedule --}}
        <div class="lg:col-span-7">
            @if ($todaySchedule->isNotEmpty())
                <ol class="divide-y divide-line border-y border-line">
                    @foreach ($todaySchedule as $programme)
                        @php $live = $isOnAir($programme); @endphp

                        <li>
                            <a
                                href="{{ route('programme.show', $programme) }}"
                                wire:navigate
                                class="group flex items-center gap-4 px-1 py-4 transition-colors hover:bg-surface/40 sm:px-2"
                            >
                                <span class="w-16 shrink-0 font-mono text-[11px] tabular-nums {{ $live ? 'text-brand-text' : 'text-faint' }}">
                                    {{ $formatTime($programme->programmeTimes->first()?->from) }}
                                </span>

                                <span class="h-8 w-px shrink-0 bg-line"></span>

                                <span class="min-w-0 flex-1">
                                    <span class="flex items-center gap-2.5">
                                        <span class="truncate text-[15px] font-semibold text-paper">{{ $programme->title }}</span>
                                        @if ($live)
                                            <x-ui.badge variant="brand" dot>Live</x-ui.badge>
                                        @endif
                                    </span>

                                    @if ($programme->presenters->isNotEmpty())
                                        <span class="mt-1 block truncate text-[12px] text-faint">{{ $programme->presenters->pluck('name')->join(', ') }}</span>
                                    @endif
                                </span>

                                <x-ui.icon name="arrow-up-right" :size="15" class="shrink-0 text-faint transition-colors group-hover:text-paper" />
                            </a>
                        </li>
                    @endforeach
                </ol>
            @else
                <x-ui.empty-state
                    icon="calendar"
                    label="Schedule · Standby"
                    title="No shows scheduled for today"
                    description="The weekly lineup will appear here once programme times are published."
                >
                    <x-slot:action>
                        <x-ui.button href="{{ route('programme.index') }}" variant="secondary" size="sm">Browse programmes</x-ui.button>
                    </x-slot:action>
                </x-ui.empty-state>
            @endif
        </div>

        {{-- Song of the week --}}
        <div class="lg:col-span-5">
            @if ($songOfTheWeek)
                @php $art = $songOfTheWeek->getFirstMediaUrl('album_arts'); @endphp

                <article class="border border-line">
                    <div class="flex items-center justify-between gap-3 border-b border-line px-5 py-3">
                        <span class="label-mono text-brand-text">Record of the week</span>
                        <span class="font-mono text-[10px] uppercase tracking-[0.14em] text-faint">33⅓ RPM</span>
                    </div>

                    <div class="p-5">
                        <div class="relative aspect-square overflow-hidden rounded-xs border border-line bg-surface-2">
                            @if ($art)
                                <img src="{{ $art }}" alt="{{ $songOfTheWeek->title }} album art" class="h-full w-full object-cover">
                            @else
                                <div class="flex h-full w-full flex-col items-center justify-center gap-3 text-faint">
                                    <x-ui.icon name="radio" :size="36" />
                                    <span class="font-mono text-[9px] uppercase tracking-[0.2em]">Ogene 98.3</span>
                                </div>
                            @endif
                        </div>

                        <h3 class="mt-5 font-display text-[22px] font-bold leading-tight tracking-[-0.02em] text-paper">{{ $songOfTheWeek->title }}</h3>
                        <p class="mt-1 text-[15px] text-brand-text">{{ $songOfTheWeek->artist }}</p>
                        @if ($songOfTheWeek->album)
                            <p class="mt-0.5 font-mono text-[10px] uppercase tracking-[0.12em] text-faint">{{ $songOfTheWeek->album }}</p>
                        @endif

                        <a href="{{ route('songoftheweek.show', $songOfTheWeek) }}" wire:navigate class="group mt-5 inline-flex items-center gap-2 text-sm font-semibold text-paper transition-colors hover:text-brand-text">
                            Listen & read
                            <x-ui.icon name="arrow-right" :size="15" class="transition-transform duration-200 group-hover:translate-x-0.5" />
                        </a>
                    </div>
                </article>
            @else
                <x-ui.empty-state
                    icon="radio"
                    label="Record of the week · Standby"
                    title="Song of the week lands soon"
                    description="Every week we pick one record worth your full attention. Check back on Monday."
                />
            @endif
        </div>
    </div>
</section>

{{-- News ---------------------------------------------------------------- --}}
<section class="container-page py-14 sm:py-20">
    <x-ui.section-header
        eyebrow="Newsroom"
        title="From the newsroom"
        description="Reporting on the East — the people, the places and the conversations."
        :href="route('post.index')"
        link-label="All news"
    />

    @if ($categories->isNotEmpty())
        <div class="mt-6 flex flex-wrap gap-x-5 gap-y-2.5">
            @foreach ($categories->take(6) as $category)
                <a
                    href="{{ route('post.category', ['category' => $category->slug]) }}"
                    wire:navigate
                    class="group inline-flex items-baseline gap-1.5 border-b border-line pb-1 font-mono text-[10px] uppercase tracking-[0.12em] text-muted transition-colors hover:border-brand-text hover:text-paper"
                >
                    {{ $category->name }}
                    <span class="text-[9px] tabular-nums text-faint">{{ $category->posts->count() }}</span>
                </a>
            @endforeach
        </div>
    @endif

    @if ($posts->isNotEmpty())
        <div class="mt-9 grid gap-x-7 gap-y-10 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($posts as $post)
                <x-ui.media-card
                    :href="$post->url"
                    :image="$post->coverImage"
                    :image-alt="$post->title"
                    :title="$post->title"
                    :eyebrow="$post->category?->name"
                    :meta="$post->created_at?->format('M j, Y') . ' · ' . $post->comments_count . ' ' . \Illuminate\Support\Str::plural('comment', $post->comments_count)"
                />
            @endforeach
        </div>
    @else
        <div class="mt-8">
            <x-ui.empty-state
                icon="newspaper"
                label="Newsroom · Standby"
                title="No stories published yet"
                description="The newsroom is warming up. Follow us on socials to catch the first edition."
            >
                <x-slot:action>
                    <x-ui.button href="{{ route('post.index') }}" variant="secondary" size="sm">Visit the newsroom</x-ui.button>
                </x-slot:action>
            </x-ui.empty-state>
        </div>
    @endif
</section>

{{-- Presenters ---------------------------------------------------------- --}}
<section class="container-page py-14 sm:py-20">
    <x-ui.section-header
        eyebrow="On air"
        title="The voices"
        description="The people behind the microphone."
        :href="route('presenter.index')"
        link-label="Meet everyone"
    />

    @if ($presenters->isNotEmpty())
        <div class="mt-9 grid grid-cols-2 gap-x-5 gap-y-8 sm:grid-cols-3 lg:grid-cols-6">
            @foreach ($presenters as $presenter)
                <a href="{{ route('presenter.show', $presenter) }}" wire:navigate class="group block">
                    <div class="relative aspect-[4/5] overflow-hidden rounded-xs border border-line bg-surface-2 transition-colors group-hover:border-line-strong">
                        @if ($presenter->avatar)
                            <img src="{{ $presenter->avatar }}" alt="{{ $presenter->name }}" loading="lazy" class="h-full w-full object-cover">
                        @else
                            <div class="flex h-full w-full items-center justify-center text-faint">
                                <x-ui.icon name="microphone" :size="26" />
                            </div>
                        @endif

                        <span class="absolute left-2 top-2 h-1.5 w-1.5 bg-brand"></span>
                    </div>

                    <p class="mt-3 text-sm font-semibold leading-snug text-paper transition-colors group-hover:text-brand-text">{{ $presenter->name }}</p>
                    <p class="mt-1 font-mono text-[9px] uppercase tracking-[0.14em] text-faint">On air</p>
                </a>
            @endforeach
        </div>
    @else
        <div class="mt-8">
            <x-ui.empty-state
                icon="microphone"
                label="Presenters · Standby"
                title="Presenter profiles coming soon"
                description="We're putting faces and names to the voices you hear every day."
            />
        </div>
    @endif
</section>

{{-- Gallery ------------------------------------------------------------- --}}
<section class="container-page py-14 sm:py-20">
    <x-ui.section-header
        eyebrow="Gallery"
        title="In the room"
        description="Studio sessions, station events and the people who make the noise."
        :href="route('gallery.album.index')"
        link-label="Open gallery"
    />

    @if ($albums->isNotEmpty())
        <div class="mt-9 grid gap-7 sm:grid-cols-3">
            @foreach ($albums as $album)
                <x-ui.media-card
                    :href="route('gallery.album.show', $album)"
                    :image="$album->coverImage"
                    :image-alt="$album->title"
                    :title="$album->title"
                    aspect="wide"
                />
            @endforeach
        </div>
    @else
        <div class="mt-8">
            <x-ui.empty-state
                icon="radio"
                label="Gallery · Standby"
                title="No albums yet"
                description="Photos from the studio and station events will be collected here."
            >
                <x-slot:action>
                    <x-ui.button href="{{ route('gallery.album.index') }}" variant="secondary" size="sm">Open gallery</x-ui.button>
                </x-slot:action>
            </x-ui.empty-state>
        </div>
    @endif
</section>
@endsection
