@extends('layouts.pages.index')
@section('title')
About Ogene 98.3 FM
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-white/40 text-sm font-medium mb-12">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <span class="text-white">About Us</span>
    </div>

    <div class="flex flex-col lg:flex-row gap-16 items-center mb-24">
        <div class="w-full lg:w-6/12">
            <h1 class="text-6xl font-display text-white mb-8 leading-tight">
                Authentically <br><span class="text-primary italic leading-none">Eastern</span>
            </h1>
            <p class="text-xl text-white/70 leading-relaxed font-light mb-8">
                Best indigenous Radio Station, South-East of the Niger. We bridge the gap between urban contemporary and indigenous broadcasting.
            </p>
            <div class="space-y-6 text-white/60 leading-relaxed">
                <p>
                    Infusing Local content, reaching out to upwardly mobile and locals. If you ever find yourself in Anambra state, make sure you pick up OGENE.
                </p>
                <p>
                    Our mission is to provide high-quality broadcasting that celebrates our local culture and heritage while keeping our audience informed and entertained with the latest global and local happenings.
                </p>
            </div>
        </div>

        <div class="w-full lg:w-6/12">
            <div class="glass-panel rounded-[3rem] p-4 relative group">
                <div class="absolute inset-0 bg-primary/20 blur-[80px] rounded-full group-hover:bg-secondary/20 transition-colors duration-700"></div>
                <img src="{{ asset('images/logo.png') }}" alt="Ogene 98.3 FM Logo" class="relative z-10 w-full aspect-video object-contain bg-bg-dark/50 rounded-[2.5rem]">
            </div>
        </div>
    </div>

    <!-- Values Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-24">
        <div class="liquid-glass rounded-[2rem] p-8 border-white/5">
            <i class="fa fa-microphone text-4xl text-primary mb-6"></i>
            <h4 class="text-2xl mb-4">Indigenous Voice</h4>
            <p class="text-white/50 text-sm leading-relaxed">We take pride in our roots, promoting the rich cultural heritage of the South-East through every broadcast.</p>
        </div>
        <div class="liquid-glass rounded-[2rem] p-8 border-white/5">
            <i class="fa fa-globe text-4xl text-secondary mb-6"></i>
            <h4 class="text-2xl mb-4">Global Reach</h4>
            <p class="text-white/50 text-sm leading-relaxed">While we are authentically local, our perspective is global, bringing you world-class entertainment and news.</p>
        </div>
        <div class="liquid-glass rounded-[2rem] p-8 border-white/5">
            <i class="fa fa-heart text-4xl text-accent mb-6"></i>
            <h4 class="text-2xl mb-4">Community Focused</h4>
            <p class="text-white/50 text-sm leading-relaxed">At our heart, we are about the people. Bridging communities and fostering unity through the power of radio.</p>
        </div>
    </div>
</div>

@endsection
