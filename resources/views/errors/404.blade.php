@extends('layouts.pages.index')
@section('title')
404 - Static in the Air
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 flex flex-col items-center justify-center text-center">
    <div class="relative mb-12">
        <div class="absolute inset-0 bg-primary/20 blur-[100px] rounded-full animate-pulse"></div>
        <h1 class="relative z-10 text-[12rem] font-display text-white leading-none opacity-10">404</h1>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="w-32 h-32 rounded-3xl liquid-glass flex items-center justify-center text-secondary text-5xl border-secondary/20 rotate-12 animate-bounce">
                <i class="fa fa-unlink"></i>
            </div>
        </div>
    </div>

    <h2 class="text-4xl font-display text-white mb-6">Static in the <span class="text-primary italic">Air</span></h2>
    <p class="text-xl text-white/40 max-w-lg mb-12 font-light">
        We've lost the signal on this one. The page you're looking for has moved to another frequency or never existed.
    </p>

    <div class="flex flex-col sm:flex-row gap-6">
        <a href="{{ route('home') }}" class="btn-fusion-primary px-12 py-4">
            <i class="fa fa-home mr-2"></i> Back to Home
        </a>
        <a href="{{ route('contact') }}" class="liquid-glass border-white/10 hover:bg-white/5 text-white px-12 py-4 rounded-full font-bold uppercase text-xs tracking-widest transition-all">
            Report Issue
        </a>
    </div>
</div>

@endsection
