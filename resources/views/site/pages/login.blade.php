@extends('layouts.site')

@section('title', 'Sign in · Ogene 98.3 FM')

@section('content')
<x-ui.auth-shell
    title="Welcome back"
    subtitle="Sign in to your Ogene account to join the conversation and track your Ogene Points."
    icon="user"
>
    <form method="POST" action="{{ route('login') }}" class="space-y-5">
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

        <div>
            <div class="flex items-center justify-between gap-3">
                <label for="field-password" class="block text-[12px] font-semibold uppercase tracking-[0.1em] text-faint">Password</label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-[12px] font-semibold text-brand-text transition-colors hover:text-paper">Forgot?</a>
                @endif
            </div>

            <input
                id="field-password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="••••••••"
                @class([
                    'mt-2 h-11 w-full rounded-sm border bg-ink px-3 text-[14px] text-paper placeholder:text-faint transition-colors focus:outline-none focus:ring-2 focus:ring-brand/40',
                    'border-line' => ! $errors->has('password'),
                    'border-brand' => $errors->has('password'),
                ])
            >

            @error('password')
                <p class="mt-1.5 text-[12px] text-brand-text">{{ $message }}</p>
            @enderror
        </div>

        <label class="flex cursor-pointer items-center gap-2.5">
            <input
                type="checkbox"
                name="remember"
                @checked(old('remember'))
                class="h-4 w-4 rounded-xs border border-line bg-ink text-brand accent-brand focus:ring-2 focus:ring-brand/40"
            >
            <span class="text-[13px] text-muted">Stay signed in</span>
        </label>

        <x-ui.button type="submit" size="lg" full>
            Sign in
            <x-ui.icon name="arrow-right" :size="16" />
        </x-ui.button>
    </form>

    <x-slot:footer>
        @if (Route::has('register'))
            <p class="text-[13px] text-muted">
                New here?
                <a href="{{ route('register') }}" class="font-semibold text-paper transition-colors hover:text-brand-text">Create an account</a>
            </p>
        @endif
    </x-slot:footer>
</x-ui.auth-shell>
@endsection
