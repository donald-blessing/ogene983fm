@extends('layouts.pages.index')
@section('title')
Update Password
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col items-center">
    <!-- Breadcrumb -->
    <div class="flex items-center justify-center gap-2 text-white/40 text-sm font-medium mb-12">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <span class="text-white">Reset Password</span>
    </div>

    <!-- Reset Card -->
    <div class="w-full max-w-md">
        <div class="glass-panel rounded-[3rem] p-10 md:p-12 relative overflow-hidden shadow-2xl">
            <!-- Decorative Gradient -->
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 bg-secondary/10 blur-[60px] rounded-full"></div>
            
            <div class="relative z-10 text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl liquid-glass mb-6 text-secondary text-2xl border-secondary/20">
                    <i class="fa fa-refresh"></i>
                </div>
                <h2 class="text-3xl font-display text-white mb-2">New <span class="text-primary italic">Frequency</span></h2>
                <p class="text-white/40 text-sm">Secure your account with a new password</p>
            </div>

            <form method="POST" action="{{ route('password.update') }}" class="space-y-6 relative z-10">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div>
                    <label class="text-[10px] font-black uppercase tracking-widest text-white/30 ml-4 mb-2 block">Email Address</label>
                    <input type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus
                           class="input-fusion w-full !rounded-2xl" placeholder="name@example.com">
                    @error('email')
                        <span class="text-red-400 text-[10px] mt-2 block ml-4 font-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="text-[10px] font-black uppercase tracking-widest text-white/30 ml-4 mb-2 block">New Password</label>
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

                <div class="pt-4">
                    <button type="submit" class="btn-fusion-secondary w-full py-4 !rounded-2xl group">
                        Update Password <i class="fa fa-check-circle ml-2 group-hover:scale-110 transition-transform"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
