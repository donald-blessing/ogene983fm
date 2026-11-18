@extends('layouts.site')

@section('title', 'Page not found · Ogene 98.3 FM')

@section('content')
<section class="container-page py-16 sm:py-24">
    <div class="mx-auto flex max-w-xl flex-col items-center text-center">
        <p class="flex items-center gap-2.5 text-[11px] font-semibold uppercase tracking-[0.16em] text-brand-text">
            <span class="h-2 w-2 bg-brand"></span>
            Error 404
        </p>

        <p class="mt-6 font-display text-[clamp(4rem,16vw,9rem)] font-bold leading-none tracking-[-0.05em] text-surface-2" aria-hidden="true">
            404
        </p>

        <h1 class="mt-4 text-[clamp(1.5rem,4vw,2.25rem)] font-bold leading-tight tracking-[-0.02em] text-paper">
            Static in the air
        </h1>

        <p class="mt-3 max-w-[46ch] text-[15px] leading-relaxed text-muted">
            We've lost the signal on this one. The page has moved to another frequency, or never existed.
        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-3">
            <x-ui.button href="{{ route('home') }}" wire:navigate>
                <x-ui.icon name="chevron-right" :size="15" class="rotate-180" />
                Back home
            </x-ui.button>

            <x-ui.button href="{{ route('programme.index') }}" wire:navigate variant="secondary">Browse the schedule</x-ui.button>
        </div>

        <p class="mt-8 text-[13px] text-faint">
            Looking for something specific?
            <a href="{{ route('contact') }}" wire:navigate class="font-semibold text-paper transition-colors hover:text-brand-text">Tell us</a>
        </p>
    </div>
</section>
@endsection
