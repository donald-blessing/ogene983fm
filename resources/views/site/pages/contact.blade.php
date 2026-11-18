@extends('layouts.site')

@section('title', 'Contact the studio · Ogene 98.3 FM')

@section('content')
@php
    $settings = app(\App\Settings\GeneralSettings::class);

    $address = $settings->contact_address ?: 'KM 80 Enugu/Onitsha Expressway, Awka, Anambra State, Nigeria';
    $emails = array_values(array_filter([
        $settings->contact_email,
        'ogenefm983@gmail.com',
    ]));
    $phones = ['+234 807 772 6636', '+234 816 749 4172'];
@endphp

<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[['label' => 'Contact']]" />

        <div class="mt-7 max-w-[60ch]">
            <p class="label-mono mb-3 text-brand-text">Contact</p>
            <h1 class="text-[clamp(1.9rem,4.4vw,3rem)] font-bold leading-[1.05] tracking-[-0.03em] text-paper">
                Talk to the studio
            </h1>
            <p class="mt-3 text-[15px] leading-relaxed text-muted">
                Requests, shout-outs, advertising or a story tip — the line is open.
            </p>
        </div>
    </div>
</div>

<section class="container-page py-12 sm:py-14">
    <div class="grid gap-10 lg:grid-cols-12 lg:gap-12">
        {{-- Details --}}
        <div class="lg:col-span-5">
            <div class="surface divide-y divide-line overflow-hidden">
                <div class="flex gap-4 p-5">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-sm bg-surface-2 text-muted">
                        <x-ui.icon name="headphones" :size="19" />
                    </span>

                    <div class="min-w-0">
                        <h2 class="text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">The studio</h2>
                        <p class="mt-1.5 text-[14px] leading-relaxed text-paper">{{ $address }}</p>
                    </div>
                </div>

                <div class="flex gap-4 p-5">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-sm bg-surface-2 text-muted">
                        <x-ui.icon name="microphone" :size="19" />
                    </span>

                    <div class="min-w-0">
                        <h2 class="text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">Call the studio</h2>

                        <ul class="mt-1.5 space-y-1">
                            @foreach ($phones as $phone)
                                <li>
                                    <a href="tel:{{ preg_replace('/\s+/', '', $phone) }}" class="text-[14px] text-paper transition-colors hover:text-brand-text">{{ $phone }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="flex gap-4 p-5">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-sm bg-surface-2 text-muted">
                        <x-ui.icon name="mail" :size="19" />
                    </span>

                    <div class="min-w-0">
                        <h2 class="text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">Email</h2>

                        <ul class="mt-1.5 space-y-1">
                            @foreach ($emails as $email)
                                <li>
                                    <a href="mailto:{{ $email }}" class="break-all text-[14px] text-paper transition-colors hover:text-brand-text">{{ $email }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="flex gap-4 p-5">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-sm bg-brand-soft text-brand-text">
                        <x-ui.icon name="radio" :size="19" />
                    </span>

                    <div class="min-w-0">
                        <h2 class="text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">Before the show</h2>
                        <p class="mt-1.5 text-[14px] leading-relaxed text-muted">
                            For on-air requests, call during the programme you're listening to — the presenter takes the line live.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-6 overflow-hidden rounded-lg border border-line">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.894575663993!2d7.0281902!3d6.201075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ed90cdacc384b13!2sOGENE%2098.3FM!5e0!3m2!1sen!2sng!4v1580815480921!5m2!1sen!2sng"
                    title="Ogene 98.3 FM on Google Maps"
                    class="h-[280px] w-full grayscale transition-all duration-700 hover:grayscale-0"
                    loading="lazy"
                    style="border:0;"
                    allowfullscreen
                ></iframe>
            </div>
        </div>

        {{-- Form --}}
        <div class="lg:col-span-7">
            <div class="surface p-6 sm:p-8">
                <h2 class="text-xl font-semibold tracking-[-0.01em] text-paper">Send a message</h2>
                <p class="mt-1.5 text-[14px] leading-relaxed text-muted">We read everything and reply as soon as the studio is quiet.</p>

                <form action="{{ route('contact.store') }}" method="POST" class="mt-7 space-y-5">
                    @csrf

                    @if ($errors->any())
                        <div class="border-l-2 border-brand bg-brand-soft/60 px-4 py-3" role="alert">
                            <p class="text-[13px] font-semibold text-paper">Your message was not sent</p>
                            <p class="mt-1 text-[13px] leading-relaxed text-muted">Check the highlighted fields and try again.</p>
                        </div>
                    @endif

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="contact-name" class="block text-[12px] font-semibold uppercase tracking-[0.1em] text-faint">Full name</label>
                            <input
                                id="contact-name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autocomplete="name"
                                @if ($errors->has('name')) aria-invalid="true" aria-describedby="contact-name-error" @endif
                                @class([
                                    'mt-2 h-11 w-full rounded-sm border bg-ink px-3 text-[16px] text-paper placeholder:text-faint focus:outline-none focus:ring-2 focus:ring-brand/40',
                                    'border-line' => ! $errors->has('name'),
                                    'border-brand' => $errors->has('name'),
                                ])
                            >
                            @error('name')
                                <p id="contact-name-error" class="mt-1.5 text-[12px] text-brand-text" role="alert">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="contact-email" class="block text-[12px] font-semibold uppercase tracking-[0.1em] text-faint">Email address</label>
                            <input
                                id="contact-email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                @if ($errors->has('email')) aria-invalid="true" aria-describedby="contact-email-error" @endif
                                @class([
                                    'mt-2 h-11 w-full rounded-sm border bg-ink px-3 text-[16px] text-paper placeholder:text-faint focus:outline-none focus:ring-2 focus:ring-brand/40',
                                    'border-line' => ! $errors->has('email'),
                                    'border-brand' => $errors->has('email'),
                                ])
                            >
                            @error('email')
                                <p id="contact-email-error" class="mt-1.5 text-[12px] text-brand-text" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="contact-subject" class="block text-[12px] font-semibold uppercase tracking-[0.1em] text-faint">Subject</label>
                        <input
                            id="contact-subject"
                            type="text"
                            name="subject"
                            value="{{ old('subject') }}"
                            required
                            @if ($errors->has('subject')) aria-invalid="true" aria-describedby="contact-subject-error" @endif
                            @class([
                                'mt-2 h-11 w-full rounded-sm border bg-ink px-3 text-[16px] text-paper placeholder:text-faint focus:outline-none focus:ring-2 focus:ring-brand/40',
                                'border-line' => ! $errors->has('subject'),
                                'border-brand' => $errors->has('subject'),
                            ])
                        >
                        @error('subject')
                            <p id="contact-subject-error" class="mt-1.5 text-[12px] text-brand-text" role="alert">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="contact-message" class="block text-[12px] font-semibold uppercase tracking-[0.1em] text-faint">Message</label>
                        <textarea
                            id="contact-message"
                            name="message"
                            rows="6"
                            required
                            placeholder="Tell us what's on your mind…"
                            @if ($errors->has('message')) aria-invalid="true" aria-describedby="contact-message-error" @endif
                            @class([
                                'mt-2 w-full resize-y rounded-sm border bg-ink px-3 py-3 text-[16px] leading-relaxed text-paper placeholder:text-faint focus:outline-none focus:ring-2 focus:ring-brand/40',
                                'border-line' => ! $errors->has('message'),
                                'border-brand' => $errors->has('message'),
                            ])
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p id="contact-message-error" class="mt-1.5 text-[12px] text-brand-text" role="alert">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3 pt-1 sm:flex-row sm:items-center sm:justify-between">
                        <p class="text-[12px] leading-relaxed text-faint">We reply by email, usually within two working days.</p>

                        <x-ui.button type="submit" size="lg" class="w-full sm:w-auto">
                            Send message
                            <x-ui.icon name="arrow-right" :size="16" />
                        </x-ui.button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
