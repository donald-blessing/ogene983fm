@extends('layouts.pages.login')
@section('title')
Welcome Back
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col items-center">
    <!-- Breadcrumb -->
    <div class="flex items-center justify-center gap-2 text-white/40 text-sm font-medium mb-12">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <span class="text-white">Login</span>
    </div>

    <!-- Login Card -->
    <div class="w-full max-w-md">
        <div class="glass-panel rounded-[3rem] p-10 md:p-12 relative overflow-hidden shadow-2xl">
            <!-- Decorative Gradient -->
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 bg-primary/20 blur-[60px] rounded-full"></div>
            <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-32 h-32 bg-secondary/10 blur-[50px] rounded-full"></div>

            <div class="relative z-10 text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl liquid-glass mb-6 text-primary text-2xl border-primary/20">
                    <i class="fa fa-lock"></i>
                </div>
                <h2 class="text-3xl font-display text-white mb-2">Welcome <span class="text-secondary italic">Back</span></h2>
                <p class="text-white/40 text-sm">Sign in to your Ogene account</p>
            </div>

            @include('errors.list')

            <form method="POST" action="{{ route('login') }}" class="space-y-6 relative z-10">
                @csrf
                
                <div>
                    <label class="text-[10px] font-black uppercase tracking-widest text-white/30 ml-4 mb-2 block">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="input-fusion w-full !rounded-2xl" placeholder="name@example.com">
                    @error('email')
                        <span class="text-red-400 text-[10px] mt-2 block ml-4 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2 px-4">
                        <label class="text-[10px] font-black uppercase tracking-widest text-white/30">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-[10px] font-bold text-primary hover:text-white transition-colors">Forgot?</a>
                        @endif
                    </div>
                    <input type="password" name="password" required
                           class="input-fusion w-full !rounded-2xl" placeholder="••••••••">
                    @error('password')
                        <span class="text-red-400 text-[10px] mt-2 block ml-4 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center px-4">
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-white/10 bg-white/5 text-primary focus:ring-primary focus:ring-offset-bg-dark" {{ old('remember') ? 'checked' : '' }}>
                        <span class="text-xs text-white/40 group-hover:text-white transition-colors">Stay signed in</span>
                    </label>
                </div>

                <div class="pt-4">
                    <button type="submit" class="btn-fusion-primary w-full py-4 !rounded-2xl group">
                        Sign In <i class="fa fa-sign-in ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>
            </form>

            @if (Route::has('register'))
                <div class="mt-10 text-center relative z-10 border-t border-white/5 pt-8">
                    <p class="text-white/30 text-xs mb-4">Don't have an account yet?</p>
                    <a href="{{ route('register') }}" class="inline-flex items-center gap-2 text-secondary font-bold text-xs uppercase tracking-widest hover:text-white transition-colors">
                        Create Account <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
