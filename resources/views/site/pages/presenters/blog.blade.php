@extends('layouts.site')

@section('title', 'Shows & presenters · Ogene 98.3 FM')

@section('content')
<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[['label' => 'Shows & presenters']]" />

        <div class="mt-7">
            <p class="flex items-center gap-2.5 label-mono text-brand-text">
                <span class="h-2 w-2 bg-brand"></span>
                On air team
            </p>
            <h1 class="mt-5 font-display text-[clamp(2rem,4.6vw,3.25rem)] font-bold leading-[1.02] tracking-[-0.03em] text-paper">
                The voices of the East
            </h1>
            <p class="mt-3 max-w-[56ch] text-[15px] leading-relaxed text-muted">
                The people behind the microphone — and the shows they bring you every week.
            </p>
        </div>
    </div>
</div>

<section class="container-page py-12 sm:py-14">
    @if ($presenters->isEmpty())
        <x-ui.empty-state
            icon="microphone"
            title="Presenter profiles coming soon"
            description="We're putting faces and names to the voices you hear every day. Check back shortly."
        />
    @else
        <div class="grid gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($presenters as $presenter)
                <article class="group flex flex-col">
                    <a href="{{ route('presenter.show', ['presenter' => $presenter->slug]) }}" wire:navigate class="relative block aspect-[4/5] overflow-hidden rounded-xs border border-line bg-surface-2 transition-colors hover:border-[#4a3f39]">
                        @if ($presenter->avatar)
                            <img
                                src="{{ $presenter->avatar }}"
                                alt="{{ $presenter->name }}"
                                loading="lazy"
                                class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.02]"
                            >
                        @else
                            <div class="flex h-full w-full items-center justify-center text-faint">
                                <x-ui.icon name="microphone" :size="38" />
                            </div>
                        @endif

                        <span class="absolute left-3 top-3 h-1.5 w-1.5 bg-brand"></span>
                    </a>

                    <div class="mt-4 flex flex-1 flex-col border-t border-line pt-4">
                        <a href="{{ route('presenter.show', ['presenter' => $presenter->slug]) }}" wire:navigate class="block">
                            <h2 class="font-display text-[21px] font-bold leading-tight tracking-[-0.02em] text-paper transition-colors group-hover:text-brand-text">{{ $presenter->name }}</h2>
                            <p class="mt-1 label-mono text-faint">On air personality</p>
                        </a>

                        @if ($presenter->programmes->isNotEmpty())
                            <ul class="mt-4 space-y-2">
                                @foreach ($presenter->programmes->take(3) as $programme)
                                    @php $slot = $programme->programmeTimes->sortBy('from')->first(); @endphp

                                    <li class="flex items-baseline justify-between gap-3">
                                        <a href="{{ route('programme.show', ['programme' => $programme->slug]) }}" wire:navigate class="min-w-0 truncate text-[14px] font-medium text-paper transition-colors hover:text-brand-text">
                                            {{ $programme->title }}
                                        </a>

                                        @if ($slot)
                                            <span class="shrink-0 font-mono text-[10px] uppercase tracking-[0.06em] text-faint">
                                                {{ ucfirst(substr(strtolower($slot->day), 0, 3)) }} · {{ date('g:i A', (int) strtotime((string) $slot->from)) }}
                                            </span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="mt-4 text-[13px] text-faint">No shows assigned yet.</p>
                        @endif

                        <a href="{{ route('presenter.show', ['presenter' => $presenter->slug]) }}" wire:navigate class="mt-5 inline-flex items-center gap-2 font-mono text-[10px] uppercase tracking-[0.12em] text-muted transition-colors hover:text-paper">
                            View profile
                            <x-ui.icon name="arrow-right" :size="14" />
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    @endif
</section>
@endsection
