<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark" style="color-scheme: dark;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#100E0D">

    @php
        $pageTitle = trim($__env->yieldContent('title'));

        // Page sections already end with the station name; the SEO defaults
        // append it again, so strip it before handing the title over.
        $pageTitle = trim((string) preg_replace('/\s*[·|-]\s*Ogene 98\.3 FM\s*$/u', '', $pageTitle));

        if ($pageTitle !== '') {
            SEO::setTitle($pageTitle);
        }
    @endphp

    {!! SEO::generate() !!}

    <link rel="icon" type="image/png" href="{{ asset('images/logo-icon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-icon.png') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('css')
</head>

<body class="antialiased">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-sm focus:bg-paper focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-ink">
        Skip to content
    </a>

    <x-site.navbar />

    <main id="main" class="min-h-[60dvh] pt-[var(--header-h)]">
        <x-ui.flash />

        @yield('content')
    </main>

    <x-site.footer />

    {{-- Reserve space for the fixed player dock (and the mobile tab bar) --}}
    <div aria-hidden="true" class="h-[calc(var(--player-h)+var(--tabbar-h)+1rem)] lg:h-[calc(var(--player-h)+1rem)]"></div>

    @persist('player')
        @livewire('persistent-player')
    @endpersist

    @livewireScripts
    @stack('js')
</body>
</html>
