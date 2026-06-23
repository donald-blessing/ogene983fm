@extends('layouts.pages.index')
@section('title')
Forgot Password
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col items-center">
    <!-- Breadcrumb -->
    <div class="flex items-center justify-center gap-2 text-white/40 text-sm font-medium mb-12">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <a href="{{ route('login') }}" class="hover:text-secondary transition-colors">Login</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <span class="text-white">Reset Password</span>
    </div>

    <!-- Reset Card -->
    <div class="w-full max-w-md">
        <div class="glass-panel rounded-[3rem] p-10 md:p-12 relative overflow-hidden shadow-2xl">
            <!-- Decorative Gradient -->
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 bg-primary/10 blur-[60px] rounded-full"></div>
            
            <div class="relative z-10 text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl liquid-glass mb-6 text-primary text-2xl border-primary/20">
                    <i class="fa fa-key"></i>
                </div>
                <h2 class="text-3xl font-display text-white mb-2">Lost <span class="text-secondary italic">Signal?</span></h2>
                <p class="text-white/40 text-sm">Enter your email to receive a reset link</p>
            </div>

            @if (session('status'))
                <div class="mb-6 p-4 rounded-2xl bg-secondary/10 border border-secondary/20 text-secondary text-xs font-bold text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="space-y-6 relative z-10">
                @csrf
                
                <div>
                    <label class="text-[10px] font-black uppercase tracking-widest text-white/30 ml-4 mb-2 block">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="input-fusion w-full !rounded-2xl" placeholder="name@example.com">
                    @error('email')
                        <span class="text-red-400 text-[10px] mt-2 block ml-4 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="pt-4">
                    <button type="submit" class="btn-fusion-primary w-full py-4 !rounded-2xl group">
                        Send Reset Link <i class="fa fa-paper-plane ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </button>
                </div>
            </form>

            <div class="mt-10 text-center relative z-10 border-t border-white/5 pt-8">
                <a href="{{ route('login') }}" class="inline-flex items-center gap-2 text-white/40 font-bold text-xs uppercase tracking-widest hover:text-white transition-colors">
                    <i class="fa fa-arrow-left mr-2"></i> Back to Login
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
