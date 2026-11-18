@extends('layouts.site')

@section('title', 'Listen live · Ogene 98.3 FM')

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

    $nextUp = $todaySchedule
        ->filter(fn ($programme) => ! $isOnAir($programme))
        ->first();
@endphp

<section class="border-b border-line">
    <div class="container-page grid gap-10 py-12 lg:grid-cols-12 lg:gap-12 lg:py-16">
        <div class="lg:col-span-7">
            <p class="flex items-center gap-2.5 label-mono text-brand-text">
                <span class="equalizer" aria-hidden="true"><span></span><span></span><span></span><span></span></span>
                Live radio · Awka
            </p>

            <h1 class="mt-6 font-display text-[clamp(2.4rem,5.5vw,4.25rem)] font-bold leading-[0.96] tracking-[-0.04em] text-paper">
                Listen to<br>Ogene 98.3 FM.
            </h1>

            <p class="mt-6 max-w-[48ch] text-[17px] leading-relaxed text-muted">
                One stream, wherever you are. Tune in from Awka or from the other side of the world — the player stays with you as you browse.
            </p>
        </div>

        <div class="lg:col-span-5 lg:border-l lg:border-line lg:pl-12">
            <div class="flex items-end justify-between gap-4">
                <p class="font-display text-[64px] font-bold leading-none tracking-[-0.05em] text-paper">98.3</p>
                <p class="pb-2 font-mono text-[10px] uppercase tracking-[0.2em] text-faint">MHz · WAT</p>
            </div>

            <x-ui.frequency-dial class="mt-6" />

            <dl class="mt-8 grid grid-cols-2 gap-x-6 gap-y-4 border-t border-line pt-5">
                <div>
                    <dt class="label-mono text-faint">Broadcast</dt>
                    <dd class="mt-1.5 font-display text-lg tracking-[-0.01em] text-paper">24 / 7</dd>
                </div>
                <div>
                    <dt class="label-mono text-faint">Coverage</dt>
                    <dd class="mt-1.5 font-display text-lg tracking-[-0.01em] text-paper">South-East</dd>
                </div>
            </dl>
        </div>
    </div>
</section>

<section class="container-page py-12 sm:py-16">
    <div class="grid gap-12 lg:grid-cols-12 lg:gap-12">
        {{-- Player / now playing --}}
        <div class="lg:col-span-7">
            <div class="border border-line">
                <div class="flex items-center justify-between gap-3 border-b border-line px-5 py-3">
                    <span class="flex items-center gap-2.5 label-mono text-brand-text">
                        <span class="h-1.5 w-1.5 bg-brand"></span>
                        {{ $onAirProgramme ? 'On air now' : 'Ogene mix session' }}
                    </span>
                    <span class="label-mono tabular-nums text-faint">{{ now()->format('H:i') }} WAT</span>
                </div>

                <div class="p-5 sm:p-7">
                    <div class="flex items-start gap-5">
                        @if ($onAirProgramme?->coverImage)
                            <img
                                src="{{ $onAirProgramme->coverImage }}"
                                alt=""
                                class="h-20 w-20 shrink-0 rounded-xs border border-line object-cover sm:h-24 sm:w-24"
                            >
                        @else
                            <div class="relative flex h-20 w-20 shrink-0 items-center justify-center rounded-xs border border-line bg-surface-2 text-brand-text sm:h-24 sm:w-24">
                                <x-ui.icon name="radio" :size="26" />

                                <span class="absolute bottom-2 right-2.5 font-mono text-[10px] tracking-[0.1em] text-muted">98.3</span>
                            </div>
                        @endif

                        <div class="min-w-0 flex-1">
                            <h2 class="font-display text-[24px] font-bold leading-[1.05] tracking-[-0.025em] text-paper sm:text-[28px]">
                                {{ $onAirProgramme->title ?? 'Ogene mix session' }}
                            </h2>

                            @if ($onAirProgramme && $onAirProgramme->presenters->isNotEmpty())
                                <p class="mt-2 text-[14px] text-muted">
                                    with {{ $onAirProgramme->presenters->pluck('name')->join(', ') }}
                                </p>
                            @else
                                <p class="mt-2 text-[14px] text-muted">Continuous music until the next live show.</p>
                            @endif

                            @if ($nextUp)
                                <p class="mt-3 font-mono text-[10px] uppercase tracking-[0.1em] text-faint">
                                    Next · <span class="text-muted">{{ $nextUp->title }}</span> · {{ $formatTime($nextUp->programmeTimes->first()?->from) }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="mt-7 flex flex-wrap items-center gap-x-6 gap-y-3">
                        <button
                            type="button"
                            x-data
                            x-on:click="$dispatch('toggle-player')"
                            class="inline-flex h-12 items-center justify-center gap-2.5 rounded-xs bg-brand-strong px-6 text-[15px] font-semibold text-white transition-colors hover:bg-brand focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-text active:translate-y-px"
                        >
                            <x-ui.icon name="play" :size="16" />
                            Start listening
                        </button>

                        <a
                            href="{{ $settings->stream_url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group inline-flex items-center gap-2 border-b border-line pb-1.5 text-sm font-semibold text-paper transition-colors hover:border-brand-text hover:text-brand-text"
                        >
                            Open stream
                            <x-ui.icon name="external" :size="14" />
                        </a>
                    </div>

                    <p class="mt-6 border-t border-line pt-4 font-mono text-[10px] uppercase leading-relaxed tracking-[0.1em] text-faint">
                        ≈ 128 kbps while playing · Headphones recommended for highlife
                    </p>
                </div>
            </div>

            {{-- Later today --}}
            <div class="mt-10">
                <div class="flex items-end justify-between gap-4 border-t border-line pt-5">
                    <h2 class="font-display text-[22px] font-bold tracking-[-0.02em] text-paper">Later today</h2>
                    <a href="{{ route('programme.index') }}" wire:navigate class="font-mono text-[10px] uppercase tracking-[0.14em] text-muted transition-colors hover:text-paper">Full schedule</a>
                </div>

                @if ($todaySchedule->isNotEmpty())
                    <ol class="mt-3 divide-y divide-line border-b border-line">
                        @foreach ($todaySchedule as $programme)
                            @continue($isOnAir($programme))

                            <li>
                                <a href="{{ route('programme.show', $programme) }}" wire:navigate class="group flex items-center gap-4 px-1 py-3.5 transition-colors hover:bg-surface/40">
                                    <span class="w-16 shrink-0 font-mono text-[11px] tabular-nums text-faint">{{ $formatTime($programme->programmeTimes->first()?->from) }}</span>
                                    <span class="h-6 w-px shrink-0 bg-line"></span>
                                    <span class="min-w-0 flex-1 truncate text-[15px] font-medium text-paper">{{ $programme->title }}</span>
                                    <x-ui.icon name="arrow-up-right" :size="14" class="shrink-0 text-faint transition-colors group-hover:text-paper" />
                                </a>
                            </li>
                        @endforeach
                    </ol>
                @else
                    <div class="mt-4">
                        <x-ui.empty-state
                            icon="calendar"
                            label="Schedule · Standby"
                            title="No more shows listed for today"
                            description="The next live programme will appear here once today's schedule is published."
                        />
                    </div>
                @endif
            </div>
        </div>

        {{-- Ways to listen --}}
        <aside class="lg:col-span-5">
            <div class="border-t border-line pt-5">
                <h2 class="label-mono text-faint">Ways to listen</h2>

                <ol class="mt-2 divide-y divide-line">
                    @foreach ([
                        ['title' => 'On the radio', 'body' => '98.3 FM across Anambra and the South-East.'],
                        ['title' => 'On this page', 'body' => 'Press play above. The player follows you across the site.'],
                        ['title' => 'Share the frequency', 'body' => 'Send this page to someone who needs the right soundtrack.'],
                    ] as $index => $way)
                        <li class="flex gap-5 py-5">
                            <span class="shrink-0 font-mono text-[11px] tabular-nums text-brand-text">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <div class="min-w-0">
                                <h3 class="text-[15px] font-semibold text-paper">{{ $way['title'] }}</h3>
                                <p class="mt-1 text-[13px] leading-relaxed text-muted">{{ $way['body'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div class="mt-8 border border-line p-5">
                <h2 class="font-display text-[19px] font-bold tracking-[-0.01em] text-paper">Stream not starting?</h2>
                <p class="mt-2 text-[13px] leading-relaxed text-muted">
                    Press play once more, or check your connection. For studio requests and shout-outs, call the line.
                </p>

                <a href="{{ $studioHref }}" class="mt-4 inline-flex items-center gap-2 break-all font-display text-lg tracking-[-0.01em] text-paper transition-colors hover:text-brand-text">
                    {{ $studioContact }}
                </a>

                <div class="mt-4">
                    <x-ui.button href="{{ route('contact') }}" variant="secondary" size="sm">Message the studio</x-ui.button>
                </div>
            </div>
        </aside>
    </div>
</section>
@endsection
