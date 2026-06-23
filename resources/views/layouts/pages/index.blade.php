<!DOCTYPE html>
<html lang="en" class="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {!! SEO::generate() !!}

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('css')

        <style>
            [x-cloak] { display: none !important; }
            /* Force images to be contained by default */
            img { max-width: 100%; height: auto; }
        </style>
    </head>

    <body class="antialiased min-h-screen pb-[120px] bg-bg-dark text-white selection:bg-primary/30 selection:text-secondary overflow-x-hidden">
        <!-- Animated Background Blobs -->
        <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none opacity-30">
            <div class="absolute top-[-20%] left-[-10%] w-[60%] h-[60%] bg-primary/30 blur-[150px] animate-pulse"></div>
            <div class="absolute bottom-[-20%] right-[-10%] w-[50%] h-[50%] bg-secondary/20 blur-[130px] animate-pulse" style="animation-delay: 3s"></div>
        </div>

        @include('layouts.pages.includes.navbar')

        <!-- Root Content Container -->
        <div class="relative z-10 w-full min-h-screen pt-32">
            @yield('content')
        </div>

        @include('layouts.pages.includes.footer')

        @persist('player')
            @livewire('persistent-player')
        @endpersist

        @stack('js')
    </body>

</html>
