@extends('layouts.site')

@section('title', 'Something went wrong · Ogene 98.3 FM')

@section('content')
<section class="container-page py-16 sm:py-24">
    <div class="mx-auto flex max-w-xl flex-col items-center text-center">
        <p class="flex items-center gap-2.5 text-[11px] font-semibold uppercase tracking-[0.16em] text-brand-text">
            <span class="h-2 w-2 bg-brand"></span>
            Error 500
        </p>

        <p class="mt-6 font-display text-[clamp(4rem,16vw,9rem)] font-bold leading-none tracking-[-0.05em] text-surface-2" aria-hidden="true">
            500
        </p>

        <h1 class="mt-4 text-[clamp(1.5rem,4vw,2.25rem)] font-bold leading-tight tracking-[-0.02em] text-paper">
            Interference on the line
        </h1>

        <p class="mt-3 max-w-[46ch] text-[15px] leading-relaxed text-muted">
            Something broke while loading this page. The broadcast is still on air — try again in a moment.
        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-3">
            <x-ui.button href="{{ url()->current() }}">
                <x-ui.icon name="spinner" :size="15" />
                Try again
            </x-ui.button>

            <x-ui.button href="{{ route('home') }}" variant="secondary">Back home</x-ui.button>
        </div>

        <p class="mt-8 text-[13px] text-faint">
            Still stuck?
            <a href="{{ route('contact') }}" class="font-semibold text-paper transition-colors hover:text-brand-text">Report the issue</a>
        </p>
    </div>
</section>
@endsection
