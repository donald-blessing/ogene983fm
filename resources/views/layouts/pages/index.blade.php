<!DOCTYPE html>
<html lang="en" class="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ogene 98.3 FM - Authentically Eastern Radio">
        <meta name="keywords" content="Ogene98.3FM, Radio Station, online radio, Igbo Radio, Enugu Radio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ogene 98.3 FM | @yield('title')</title>

        <!-- Favicon -->
        <link href="{{ asset('images/logo.png') }}" rel="shortcut icon" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('css')

        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>

    <body class="antialiased min-h-screen pb-[100px] selection:bg-primary/30 selection:text-secondary">
        <!-- Animated Background Blobs -->
        <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none opacity-50">
            <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-primary/20 blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-secondary/10 blur-[100px] animate-pulse" style="animation-delay: 2s"></div>
        </div>

        @include('layouts.pages.includes.navbar')

        <main class="relative z-10 pt-24">
            @yield('content')
        </main>

        @include('layouts.pages.includes.footer')

        @persist('player')
            @livewire('persistent-player')
        @endpersist

        @stack('js')
    </body>

</html>
