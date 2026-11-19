@extends('layouts.site')

@section('title', $song->title . ' · Ogene 98.3 FM')

@section('content')
<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[
            ['label' => 'Record of the week', 'href' => route('home')],
            ['label' => $song->title],
        ]" />
    </div>
</div>

<section class="container-page py-10 sm:py-12">
    <div class="grid gap-10 lg:grid-cols-12 lg:gap-12">
        <div class="lg:col-span-7">
            <div class="relative aspect-square w-full max-w-[420px] overflow-hidden rounded-md border border-line bg-surface-2">
                @if ($song->album_art)
                    <img src="{{ $song->album_art }}" alt="{{ $song->title }} album art" class="h-full w-full object-cover">
                @else
                    <div class="flex h-full w-full flex-col items-center justify-center gap-3 text-faint">
                        <x-ui.icon name="radio" :size="36" />
                        <span class="font-mono text-[11px] uppercase tracking-[0.2em]">Ogene 98.3</span>
                    </div>
                @endif
            </div>
        </div>

        <div class="lg:col-span-5">
            <div class="flex flex-wrap items-center gap-2">
                <x-ui.badge variant="brand" dot>Record of the week</x-ui.badge>
                @if ($song->created_at)
                    <span class="font-mono text-[11px] uppercase tracking-[0.14em] text-faint">
                        {{ $song->created_at->format('M Y') }}
                    </span>
                @endif
            </div>

            <h1 class="mt-4 text-[clamp(2rem,4vw,3rem)] font-bold leading-[1.03] tracking-[-0.03em] text-paper">
                {{ $song->title }}
            </h1>
            <p class="mt-3 text-lg text-brand-text">{{ $song->artist }}</p>
            @if ($song->album)
                <p class="mt-1 font-mono text-[11px] uppercase tracking-[0.14em] text-faint">{{ $song->album }}</p>
            @endif

            @if ($song->song)
                <div class="mt-7 border border-line bg-surface/40 p-4">
                    <p class="label-mono mb-3 text-muted">Listen to the record</p>
                    <audio controls preload="none" class="w-full" aria-label="Play {{ $song->title }} by {{ $song->artist }}">
                        <source src="{{ $song->song }}">
                        Your browser does not support audio playback.
                    </audio>
                </div>
            @endif

            @if ($song->about)
                <div class="mt-7 border-t border-line pt-6">
                    <h2 class="label-mono text-muted">About the record</h2>
                    <p class="mt-3 text-[15px] leading-relaxed text-paper/80">{{ $song->about }}</p>
                </div>
            @endif

            <div class="mt-8 flex flex-wrap gap-3">
                <button
                    type="button"
                    x-data
                    x-on:click="$dispatch('toggle-player')"
                    class="inline-flex h-11 min-w-11 items-center justify-center gap-2 rounded-sm bg-brand-strong px-5 text-sm font-semibold text-white transition-colors hover:bg-brand focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-text active:translate-y-px"
                >
                    <x-ui.icon name="play" :size="15" />
                    Listen live
                </button>
                <a href="{{ route('home') }}" wire:navigate class="inline-flex h-11 min-w-11 items-center justify-center gap-2 rounded-sm border border-line-strong px-5 text-sm font-semibold text-paper transition-colors hover:border-muted hover:text-brand-text focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-text">
                    Back to the station
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
