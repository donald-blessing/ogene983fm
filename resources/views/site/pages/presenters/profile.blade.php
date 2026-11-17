@extends('layouts.site')

@section('title', ($user->name ?? 'Presenter') . ' · Ogene 98.3 FM')

@section('content')
@php
    $presenter = $user;
    $formatTime = fn ($time): string => $time ? date('g:i A', (int) strtotime((string) $time)) : '';
@endphp

<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[
            ['label' => 'Shows & presenters', 'href' => route('presenter.index')],
            ['label' => $presenter->name],
        ]" />
    </div>
</div>

<section class="container-page py-10 sm:py-12">
    <div class="grid gap-10 lg:grid-cols-12 lg:gap-12">
        <div class="lg:col-span-8">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-start">
                <div class="relative aspect-[4/5] w-full max-w-[200px] shrink-0 overflow-hidden rounded-md border border-line bg-surface-2">
                    @if ($presenter->avatar)
                        <img src="{{ $presenter->avatar }}" alt="{{ $presenter->name }}" class="h-full w-full object-cover">
                    @else
                        <div class="flex h-full w-full items-center justify-center text-faint">
                            <x-ui.icon name="microphone" :size="34" />
                        </div>
                    @endif
                </div>

                <div class="min-w-0 flex-1">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-brand-text">On air personality</p>

                    <h1 class="mt-2 text-[clamp(1.9rem,4vw,2.9rem)] font-bold leading-[1.03] tracking-[-0.03em] text-paper">
                        {{ $presenter->name }}
                    </h1>

                    @if ($presenter->programmes->isNotEmpty())
                        <p class="mt-3 text-[15px] text-muted">
                            Presents {{ $presenter->programmes->pluck('title')->join(', ') }}.
                        </p>
                    @endif

                    <div class="mt-6 flex flex-wrap gap-2.5">
                        @if ($presenter->twitter_handle)
                            <a
                                href="https://twitter.com/{{ ltrim($presenter->twitter_handle, '@') }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex h-9 items-center gap-2 rounded-sm border border-line px-3 text-[13px] font-medium text-muted transition-colors hover:border-brand/50 hover:text-paper"
                            >
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                X (Twitter)
                            </a>
                        @endif

                        @if ($presenter->instagram_handle)
                            <a
                                href="https://instagram.com/{{ ltrim($presenter->instagram_handle, '@') }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex h-9 items-center gap-2 rounded-sm border border-line px-3 text-[13px] font-medium text-muted transition-colors hover:border-brand/50 hover:text-paper"
                            >
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                Instagram
                            </a>
                        @endif

                        @if ($presenter->facebook_url)
                            <a
                                href="{{ $presenter->facebook_url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex h-9 items-center gap-2 rounded-sm border border-line px-3 text-[13px] font-medium text-muted transition-colors hover:border-brand/50 hover:text-paper"
                            >
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                Facebook
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="mt-10 border-t border-line pt-8">
                <h2 class="text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">About</h2>

                @if (filled($presenter->about))
                    <div class="prose-ogene mt-4 text-[15px] leading-relaxed text-muted">
                        {!! $presenter->about !!}
                    </div>
                @else
                    <p class="mt-4 max-w-[62ch] text-[15px] leading-relaxed text-muted">
                        {{ $presenter->name }} is part of the Ogene 98.3 FM on-air team. A full profile is coming soon.
                    </p>
                @endif
            </div>
        </div>

        <aside class="lg:col-span-4">
            <div class="surface overflow-hidden">
                <div class="border-b border-line px-5 py-3.5">
                    <h2 class="text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">On the schedule</h2>
                </div>

                @if ($presenter->programmes->isEmpty())
                    <p class="px-5 py-5 text-[13px] text-muted">No shows assigned yet.</p>
                @else
                    <ul class="divide-y divide-line">
                        @foreach ($presenter->programmes as $programme)
                            @php $slots = $programme->programmeTimes->sortBy('from'); @endphp

                            <li>
                                <a href="{{ route('programme.show', ['programme' => $programme->slug]) }}" wire:navigate class="group block px-5 py-4 transition-colors hover:bg-surface-2/60">
                                    <span class="block text-[14px] font-semibold text-paper transition-colors group-hover:text-brand-text">{{ $programme->title }}</span>

                                    @if ($slots->isNotEmpty())
                                        <span class="mt-1 block text-[12px] text-faint">
                                            @foreach ($slots->take(2) as $slot)
                                                {{ ucfirst(strtolower($slot->day)) }} {{ $formatTime($slot->from) }}@if (! $loop->last) · @endif
                                            @endforeach
                                            @if ($slots->count() > 2)
                                                +{{ $slots->count() - 2 }} more
                                            @endif
                                        </span>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="mt-6 rounded-lg border border-line bg-surface/40 p-5">
                <h2 class="text-[15px] font-semibold text-paper">Also on air</h2>
                <p class="mt-1.5 text-[13px] leading-relaxed text-muted">See who else is on the Ogene lineup this week.</p>

                <div class="mt-4">
                    <x-ui.button href="{{ route('presenter.index') }}" wire:navigate variant="secondary" size="sm">All presenters</x-ui.button>
                </div>
            </div>
        </aside>
    </div>
</section>
@endsection
