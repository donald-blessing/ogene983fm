@extends('layouts.pages.contact')
@section('title')
Connect with the Studio
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-white/40 text-sm font-medium mb-12">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <span class="text-white">Contact</span>
    </div>

    <!-- Map Section -->
    <div class="rounded-[3rem] overflow-hidden glass-panel border-0 h-[450px] shadow-2xl relative group mb-24">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.894575663993!2d7.0281902!3d6.201075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ed90cdacc384b13!2sOGENE%2098.3FM!5e0!3m2!1sen!2sng!4v1580815480921!5m2!1sen!2sng" 
                class="w-full h-full grayscale invert opacity-60 group-hover:grayscale-0 group-hover:invert-0 group-hover:opacity-100 transition-all duration-1000" 
                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <div class="absolute inset-0 pointer-events-none border-[12px] border-bg-dark/20 rounded-[3rem]"></div>
    </div>

    <!-- Contact Info & Form -->
    <div class="flex flex-col lg:flex-row gap-16 items-start">
        <!-- Left: Info Column -->
        <div class="w-full lg:w-5/12">
            <h2 class="text-6xl font-display text-white mb-8 leading-tight">
                Authentically <br><span class="text-secondary italic">Connected</span>
            </h2>
            <p class="text-lg text-white/60 mb-12 leading-relaxed">
                Best indigenous Radio Station, South-East of the Niger. We bridge the gap between urban contemporary and indigenous broadcasting.
            </p>

            <div class="space-y-10">
                <div class="flex gap-6 group">
                    <div class="w-14 h-14 shrink-0 rounded-2xl liquid-glass flex items-center justify-center text-primary text-xl group-hover:neon-border-purple transition-all duration-500">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-white/40 block mb-1">Our Studio</span>
                        <p class="text-white/80">KM 80 Enugu/Onitsha Expressway, Awka, Anambra State, Nigeria</p>
                    </div>
                </div>

                <div class="flex gap-6 group">
                    <div class="w-14 h-14 shrink-0 rounded-2xl liquid-glass flex items-center justify-center text-secondary text-xl group-hover:neon-border-green transition-all duration-500">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-white/40 block mb-1">Call Us</span>
                        <p class="text-white/80">+234 807 772 6636</p>
                        <p class="text-white/80">+234 816 749 4172</p>
                    </div>
                </div>

                <div class="flex gap-6 group">
                    <div class="w-14 h-14 shrink-0 rounded-2xl liquid-glass flex items-center justify-center text-accent text-xl group-hover:shadow-[0_0_15px_rgba(255,170,0,0.3)] transition-all duration-500">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-white/40 block mb-1">Email</span>
                        <p class="text-white/80">info@ogene983fm.com</p>
                        <p class="text-white/80">ogenefm983@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Form Column -->
        <div class="w-full lg:w-7/12">
            <div class="glass-panel rounded-[3rem] p-10 md:p-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-primary/10 blur-[80px] rounded-full"></div>
                
                <h4 class="text-3xl font-display text-white mb-2">Leave a Message</h4>
                <p class="text-white/40 mb-10">Our team will get back to you as soon as possible.</p>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="flex flex-col md:flex-row gap-6">
                        <input type="text" placeholder="Full Name" name="name" class="input-fusion w-full" required>
                        <input type="email" placeholder="Email Address" name="email" class="input-fusion w-full" required>
                    </div>
                    <input type="text" placeholder="Subject" name="subject" class="input-fusion w-full" required>
                    <textarea placeholder="Tell us what's on your mind..." name="message" rows="5" class="input-fusion w-full resize-none" required></textarea>
                    
                    <div class="pt-4">
                        <button type="submit" class="btn-fusion-primary w-full md:w-auto px-12 group">
                            Send Message <i class="fa fa-paper-plane ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
