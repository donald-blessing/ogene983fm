@extends('layouts.site')

@section('title', 'Set a new password · Ogene 98.3 FM')

@section('content')
<x-ui.auth-shell
    title="New frequency"
    subtitle="Choose a new password for your Ogene account."
    icon="user"
>
    <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <x-ui.input
            name="email"
            label="Email address"
            type="email"
            :value="$email ?? null"
            required
            autofocus
            autocomplete="email"
        />

        <x-ui.input
            name="password"
            label="New password"
            type="password"
            placeholder="••••••••"
            required
            autocomplete="new-password"
        />

        <x-ui.input
            name="password_confirmation"
            label="Confirm new password"
            type="password"
            placeholder="••••••••"
            required
            autocomplete="new-password"
        />

        <x-ui.button type="submit" size="lg" full>
            Update password
            <x-ui.icon name="check" :size="16" />
        </x-ui.button>
    </form>

    <x-slot:footer>
        <a href="{{ route('login') }}" class="text-[13px] font-semibold text-muted transition-colors hover:text-paper">Back to sign in</a>
    </x-slot:footer>
</x-ui.auth-shell>
@endsection
