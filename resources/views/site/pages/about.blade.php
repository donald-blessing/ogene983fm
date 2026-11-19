@extends('layouts.site')

@section('title', 'About the station · Ogene 98.3 FM')

@section('content')
@php
    $settings = app(\App\Settings\GeneralSettings::class);

    $values = [
        [
            'icon' => 'microphone',
            'title' => 'Indigenous voice',
            'body' => 'We take pride in our roots, promoting the rich cultural heritage of the South-East through every broadcast.',
        ],
        [
            'icon' => 'radio',
            'title' => 'Global reach',
            'body' => 'Authentically local, globally minded — bringing you world-class entertainment and reporting from home.',
        ],
        [
            'icon' => 'headphones',
            'title' => 'Community focused',
            'body' => 'At our heart we are about the people: bridging communities and fostering unity through radio.',
        ],
    ];
@endphp

<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[['label' => 'About']]" />
    </div>
</div>

<section class="container-page py-12 sm:py-16">
    <div class="grid gap-12 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-7">
            <p class="flex items-center gap-2.5 text-[11px] font-semibold uppercase tracking-[0.16em] text-brand-text">
                <span class="h-2 w-2 bg-brand"></span>
                {{ $settings->site_motto }}
            </p>

            <h1 class="mt-5 text-[clamp(2.1rem,5vw,3.6rem)] font-bold leading-[1.02] tracking-[-0.035em] text-paper">
                Authentically Eastern.
            </h1>

            <p class="mt-6 max-w-[56ch] text-[17px] leading-relaxed text-muted">
                The best indigenous radio station in the South-East of the Niger. We bridge the gap between urban contemporary and indigenous broadcasting.
            </p>

            <div class="mt-8 max-w-[62ch] space-y-4 text-[15px] leading-relaxed text-muted">
                <p>
                    Infusing local content and reaching out to upwardly mobile listeners and locals alike. If you ever find yourself in Anambra State, make sure you pick up Ogene.
                </p>
                <p>
                    Our mission is to provide high-quality broadcasting that celebrates our local culture and heritage while keeping our audience informed and entertained with the latest global and local happenings.
                </p>
            </div>

            <div class="mt-9 flex flex-wrap gap-3">
                <x-ui.button href="{{ route('listen') }}" wire:navigate>
                    <x-ui.icon name="play" :size="16" />
                    Listen live
                </x-ui.button>

                <x-ui.button href="{{ route('contact') }}" wire:navigate variant="secondary">Contact the studio</x-ui.button>
            </div>
        </div>

        <div class="lg:col-span-5">
            <div class="surface overflow-hidden p-5">
                <div class="flex aspect-[4/3] items-center justify-center rounded-md border border-line bg-ink">
                    <img src="{{ asset('images/logo-wordmark.png') }}" alt="Ogene 98.3 FM logo" width="512" height="172" class="h-auto w-[70%] max-w-[88%] object-contain">
                </div>

                <dl class="mt-5 grid grid-cols-2 gap-4">
                    <div>
                        <dt class="text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">Frequency</dt>
                        <dd class="mt-1 font-display text-xl text-paper">98.3 FM</dd>
                    </div>
                    <div>
                        <dt class="text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">Broadcasting</dt>
                        <dd class="mt-1 font-display text-xl text-paper">24 / 7</dd>
                    </div>
                    <div>
                        <dt class="text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">Based in</dt>
                        <dd class="mt-1 text-[15px] text-paper">Enugwu Ukwu, Anambra</dd>
                    </div>
                    <div>
                        <dt class="text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">Reaching</dt>
                        <dd class="mt-1 text-[15px] text-paper">The South-East</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</section>

<section class="border-t border-line bg-surface/20">
    <div class="container-page py-12 sm:py-16">
        <x-ui.section-header
            title="What we stand for"
            description="Three things shape every hour we put on air."
        />

        <div class="mt-8 grid gap-5 sm:grid-cols-3">
            @foreach ($values as $value)
                <div class="surface p-5 sm:p-6">
                    <span class="flex h-10 w-10 items-center justify-center rounded-sm bg-brand-soft text-brand-text">
                        <x-ui.icon :name="$value['icon']" :size="19" />
                    </span>

                    <h3 class="mt-4 text-[17px] font-semibold text-paper">{{ $value['title'] }}</h3>
                    <p class="mt-2 text-[14px] leading-relaxed text-muted">{{ $value['body'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="container-page py-12 sm:py-16">
    <div class="surface flex flex-col gap-6 p-6 sm:flex-row sm:items-center sm:justify-between sm:p-8">
        <div>
            <h2 class="text-xl font-semibold tracking-[-0.01em] text-paper">Working with us</h2>
            <p class="mt-1.5 max-w-[52ch] text-[14px] leading-relaxed text-muted">
                Advertising, sponsorship, studio visits and press enquiries all start with one conversation.
            </p>
        </div>

        <div class="flex flex-wrap gap-3">
            <x-ui.button href="{{ route('contact') }}" wire:navigate>Get in touch</x-ui.button>
            <x-ui.button href="{{ route('programme.index') }}" wire:navigate variant="secondary">See the schedule</x-ui.button>
        </div>
    </div>
</section>
@endsection
