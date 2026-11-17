@extends('layouts.site')

@section('title', 'Reset your password · Ogene 98.3 FM')

@section('content')
<x-ui.auth-shell
    title="Lost the signal?"
    subtitle="Enter the email address on your account and we'll send a reset link."
    icon="mail"
>
    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <x-ui.input
            name="email"
            label="Email address"
            type="email"
            placeholder="name@example.com"
            required
            autofocus
            autocomplete="email"
        />

        <x-ui.button type="submit" size="lg" full>
            Send reset link
            <x-ui.icon name="arrow-right" :size="16" />
        </x-ui.button>
    </form>

    <x-slot:footer>
        <a href="{{ route('login') }}" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-muted transition-colors hover:text-paper">
            <x-ui.icon name="chevron-right" :size="14" class="rotate-180" />
            Back to sign in
        </a>
    </x-slot:footer>
</x-ui.auth-shell>
@endsection
