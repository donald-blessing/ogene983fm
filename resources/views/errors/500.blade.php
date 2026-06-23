@extends('layouts.pages.index')
@section('title')
500 - Technical Difficulties
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 flex flex-col items-center justify-center text-center">
    <div class="relative mb-12">
        <div class="absolute inset-0 bg-secondary/20 blur-[100px] rounded-full animate-pulse"></div>
        <h1 class="relative z-10 text-[12rem] font-display text-white leading-none opacity-10">500</h1>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="w-32 h-32 rounded-3xl liquid-glass flex items-center justify-center text-primary text-5xl border-primary/20 -rotate-12 animate-pulse">
                <i class="fa fa-warning"></i>
            </div>
        </div>
    </div>

    <h2 class="text-4xl font-display text-white mb-6">Technical <span class="text-secondary italic">Difficulties</span></h2>
    <p class="text-xl text-white/40 max-w-lg mb-12 font-light">
        Our transmitter is experiencing some interference. We're working hard to get the broadcast back to normal.
    </p>

    <div class="flex flex-col sm:flex-row gap-6">
        <button onclick="window.location.reload()" class="btn-fusion-secondary px-12 py-4">
            <i class="fa fa-refresh mr-2"></i> Try Again
        </a>
        <a href="{{ route('home') }}" class="btn-fusion-primary px-12 py-4">
            <i class="fa fa-home mr-2"></i> Back to Home
        </a>
    </div>
</div>

@endsection
