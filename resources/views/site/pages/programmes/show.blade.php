@extends('layouts.site')

@section('title', $programme->title . ' · Ogene 98.3 FM')

@section('content')
@php
    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    $today = now()->englishDayOfWeek;
    $nowTime = (int) strtotime(now()->toTimeString());

    $formatTime = fn ($time): string => $time ? date('g:i A', (int) strtotime((string) $time)) : '';

    $slots = $programme->programmeTimes
        ->sortBy(fn ($time) => array_search(ucfirst(strtolower($time->day)), $days, true) * 100000 + (int) strtotime((string) $time->from))
        ->values();

    $isLive = $slots->contains(fn ($time) => strtolower($time->day) === strtolower($today)
        && (int) strtotime((string) $time->from) <= $nowTime
        && (int) strtotime((string) $time->to) > $nowTime);

    $episodes = $programme->episodes()->latest()->get();
@endphp

<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[
            ['label' => 'Schedule', 'href' => route('programme.index')],
            ['label' => $programme->title],
        ]" />
    </div>
</div>

<section class="container-page py-10 sm:py-12">
    <div class="grid gap-10 lg:grid-cols-12 lg:gap-12">
        {{-- Main --}}
        <div class="lg:col-span-8">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-start">
                <div class="relative aspect-square w-full max-w-[220px] shrink-0 overflow-hidden rounded-md border border-line bg-surface-2">
                    @if ($programme->coverImage)
                        <img src="{{ $programme->coverImage }}" alt="{{ $programme->title }}" class="h-full w-full object-cover">
                    @else
                        <div class="flex h-full w-full items-center justify-center text-faint">
                            <x-ui.icon name="radio" :size="36" />
                        </div>
                    @endif
                </div>

                <div class="min-w-0 flex-1">
                    <div class="flex flex-wrap items-center gap-2">
                        <x-ui.badge variant="neutral">Programme</x-ui.badge>
                        @if ($isLive)
                            <x-ui.badge variant="brand" dot>On air now</x-ui.badge>
                        @endif
                    </div>

                    <h1 class="mt-3 text-[clamp(1.9rem,4vw,2.9rem)] font-bold leading-[1.03] tracking-[-0.03em] text-paper">
                        {{ $programme->title }}
                    </h1>

                    @if ($programme->presenters->isNotEmpty())
                        <p class="mt-3 text-[15px] text-muted">
                            Hosted by
                            @foreach ($programme->presenters as $presenter)
                                <a href="{{ route('presenter.show', ['presenter' => $presenter->slug]) }}" wire:navigate class="inline-flex min-h-6 items-center font-medium text-paper transition-colors hover:text-brand-text">{{ $presenter->name }}</a>@if (! $loop->last), @endif
                            @endforeach
                        </p>
                    @endif

                    <div class="mt-6 flex flex-wrap gap-3">
                        <button
                            type="button"
                            x-data
                            x-on:click="$dispatch('toggle-player')"
                            class="inline-flex h-11 items-center justify-center gap-2 rounded-sm bg-brand-strong px-5 text-sm font-semibold text-white transition-colors hover:bg-brand focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-text active:translate-y-px"
                        >
                            <x-ui.icon name="play" :size="16" />
                            Listen live
                        </button>

                        <x-ui.button href="{{ route('programme.index') }}" wire:navigate variant="secondary">
                            Full schedule
                        </x-ui.button>
                    </div>
                </div>
            </div>

            {{-- About --}}
            <div class="mt-10 border-t border-line pt-8">
                <h2 class="text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">About the show</h2>

                @if (filled($programme->about))
                    <div class="prose-ogene mt-4 text-[15px] leading-relaxed text-muted">
                        {!! $programme->about !!}
                    </div>
                @else
                    <p class="mt-4 max-w-[62ch] text-[15px] leading-relaxed text-muted">
                        {{ $programme->title }} airs on Ogene 98.3 FM. Programme notes will be published here soon.
                    </p>
                @endif
            </div>

            {{-- Episodes --}}
            <div class="mt-12">
                <div class="flex items-end justify-between gap-4">
                    <h2 class="text-[22px] font-bold tracking-[-0.02em] text-paper">Episode archive</h2>
                    <span class="text-[12px] tabular-nums text-faint">{{ $episodes->count() }}</span>
                </div>

                @if ($episodes->isEmpty())
                    <div class="mt-4">
                        <x-ui.empty-state
                            icon="headphones"
                            title="No episodes published yet"
                            description="Recordings of this programme will be added here after broadcast."
                        />
                    </div>
                @else
                    <ol class="mt-4 divide-y divide-line overflow-hidden rounded-lg border border-line bg-surface/40">
                        @foreach ($episodes as $episode)
                            @php $audio = $episode->getFirstMediaUrl('audio'); @endphp

                            <li class="px-4 py-4 sm:px-5">
                                <div class="flex flex-wrap items-center justify-between gap-3">
                                    <p class="min-w-0 flex-1 truncate text-[15px] font-semibold text-paper">{{ $episode->title }}</p>

                                    <p class="flex items-center gap-3 text-[12px] text-faint">
                                        @if ($episode->published_at)
                                            <span>{{ $episode->published_at->format('M j, Y') }}</span>
                                        @endif
                                        @if ($episode->duration)
                                            <span>{{ $episode->duration }}</span>
                                        @endif
                                    </p>
                                </div>

                                @if ($audio)
                                    <audio controls preload="none" class="mt-3 h-9 w-full">
                                        <source src="{{ $audio }}" type="audio/mpeg">
                                    </audio>
                                @endif
                            </li>
                        @endforeach
                    </ol>
                @endif
            </div>
        </div>

        {{-- Sidebar --}}
        <aside class="lg:col-span-4">
            <div class="surface overflow-hidden">
                <div class="border-b border-line px-5 py-3.5">
                    <h2 class="text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">When it airs</h2>
                </div>

                @if ($slots->isEmpty())
                    <p class="px-5 py-5 text-[13px] text-muted">Times for this programme have not been published yet.</p>
                @else
                    <ul class="divide-y divide-line">
                        @foreach ($slots as $slot)
                            @php $slotLive = strtolower($slot->day) === strtolower($today) && (int) strtotime((string) $slot->from) <= $nowTime && (int) strtotime((string) $slot->to) > $nowTime; @endphp

                            <li class="flex items-center justify-between gap-4 px-5 py-3">
                                <span class="text-[13px] font-medium {{ $slotLive ? 'text-brand-text' : 'text-paper' }}">
                                    {{ ucfirst(strtolower($slot->day)) }}
                                </span>
                                <span class="text-[12px] tabular-nums text-faint">
                                    {{ $formatTime($slot->from) }} – {{ $formatTime($slot->to) }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            @if ($programme->presenters->isNotEmpty())
                <div class="surface mt-6 overflow-hidden">
                    <div class="border-b border-line px-5 py-3.5">
                        <h2 class="text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">The voices</h2>
                    </div>

                    <ul class="divide-y divide-line">
                        @foreach ($programme->presenters as $presenter)
                            <li>
                                <a href="{{ route('presenter.show', ['presenter' => $presenter->slug]) }}" wire:navigate class="group flex items-center gap-3 px-5 py-4 transition-colors hover:bg-surface-2/60">
                                    <x-ui.avatar :src="$presenter->avatar" :name="$presenter->name" size="md" />

                                    <span class="min-w-0 flex-1">
                                        <span class="block truncate text-[14px] font-semibold text-paper transition-colors group-hover:text-brand-text">{{ $presenter->name }}</span>
                                        <span class="block text-[12px] text-faint">On air personality</span>
                                    </span>

                                    <x-ui.icon name="chevron-right" :size="15" class="shrink-0 text-faint transition-transform group-hover:translate-x-0.5" />
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mt-6">
                @livewire('sponsorship-banner')
            </div>
        </aside>
    </div>
</section>
@endsection
