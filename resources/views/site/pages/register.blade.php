@extends('layouts.site')

@section('title', 'Create an account · Ogene 98.3 FM')

@section('content')
<x-ui.auth-shell
    title="Join the frequency"
    subtitle="Create an account to comment on stories and start earning Ogene Points when you listen."
    icon="user"
    max-width="max-w-xl"
>
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div class="grid gap-5 sm:grid-cols-2">
            <x-ui.input
                name="name"
                label="Full name"
                placeholder="John Doe"
                required
                autofocus
                autocomplete="name"
            />

            <x-ui.input
                name="username"
                label="Username"
                placeholder="johndoe983"
                required
                autocomplete="username"
            />
        </div>

        <x-ui.input
            name="email"
            label="Email address"
            type="email"
            placeholder="name@example.com"
            required
            autocomplete="email"
        />

        <div class="grid gap-5 sm:grid-cols-2">
            <x-ui.input
                name="password"
                label="Password"
                type="password"
                placeholder="••••••••"
                required
                autocomplete="new-password"
            />

            <x-ui.input
                name="password_confirmation"
                label="Confirm password"
                type="password"
                placeholder="••••••••"
                required
                autocomplete="new-password"
            />
        </div>

        <x-ui.button type="submit" size="lg" full>
            Create account
            <x-ui.icon name="arrow-right" :size="16" />
        </x-ui.button>

        <p class="text-[12px] leading-relaxed text-faint">
            By creating an account you agree to keep the conversation respectful.
        </p>
    </form>

    <x-slot:footer>
        <p class="text-[13px] text-muted">
            Already have an account?
            <a href="{{ route('login') }}" class="font-semibold text-paper transition-colors hover:text-brand-text">Sign in</a>
        </p>
    </x-slot:footer>
</x-ui.auth-shell>
@endsection
