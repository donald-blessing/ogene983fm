@extends('layouts.pages.register')
@section('title')
Join the Community
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col items-center">
    <!-- Breadcrumb -->
    <div class="flex items-center justify-center gap-2 text-white/40 text-sm font-medium mb-12">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <span class="text-white">Register</span>
    </div>

    <!-- Register Card -->
    <div class="w-full max-w-xl">
        <div class="glass-panel rounded-[3rem] p-10 md:p-12 relative overflow-hidden shadow-2xl">
            <!-- Decorative Gradient -->
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-secondary/10 blur-[80px] rounded-full"></div>
            <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 bg-primary/20 blur-[60px] rounded-full"></div>

            <div class="relative z-10 text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl liquid-glass mb-6 text-secondary text-2xl border-secondary/20">
                    <i class="fa fa-user-plus"></i>
                </div>
                <h2 class="text-3xl font-display text-white mb-2">Join the <span class="text-primary italic">Frequency</span></h2>
                <p class="text-white/40 text-sm">Become a member and start earning Ogene Points</p>
            </div>

            @include('errors.list')

            <form method="POST" action="{{ route('register') }}" class="space-y-6 relative z-10">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-[10px] font-black uppercase tracking-widest text-white/30 ml-4 mb-2 block">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                               class="input-fusion w-full !rounded-2xl" placeholder="John Doe">
                        @error('name')
                            <span class="text-red-400 text-[10px] mt-2 block ml-4 font-bold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-[10px] font-black uppercase tracking-widest text-white/30 ml-4 mb-2 block">Username</label>
                        <input type="text" name="username" value="{{ old('username') }}" required
                               class="input-fusion w-full !rounded-2xl" placeholder="johndoe983">
                        @error('username')
                            <span class="text-red-400 text-[10px] mt-2 block ml-4 font-bold">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="text-[10px] font-black uppercase tracking-widest text-white/30 ml-4 mb-2 block">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="input-fusion w-full !rounded-2xl" placeholder="name@example.com">
                    @error('email')
                        <span class="text-red-400 text-[10px] mt-2 block ml-4 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-[10px] font-black uppercase tracking-widest text-white/30 ml-4 mb-2 block">Password</label>
                        <input type="password" name="password" required
                               class="input-fusion w-full !rounded-2xl" placeholder="••••••••">
                        @error('password')
                            <span class="text-red-400 text-[10px] mt-2 block ml-4 font-bold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-[10px] font-black uppercase tracking-widest text-white/30 ml-4 mb-2 block">Confirm Password</label>
                        <input type="password" name="password_confirmation" required
                               class="input-fusion w-full !rounded-2xl" placeholder="••••••••">
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" class="btn-fusion-secondary w-full py-4 !rounded-2xl group">
                        Create Account <i class="fa fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>
            </form>

            <div class="mt-10 text-center relative z-10 border-t border-white/5 pt-8">
                <p class="text-white/30 text-xs mb-4">Already have an account?</p>
                <a href="{{ route('login') }}" class="inline-flex items-center gap-2 text-primary font-bold text-xs uppercase tracking-widest hover:text-white transition-colors">
                    Sign In <i class="fa fa-sign-in"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
