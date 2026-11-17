@props([
    'title' => null,
    'subtitle' => null,
    'icon' => 'user',
    'maxWidth' => 'max-w-md',
])

<div class="container-page flex justify-center py-12 sm:py-16">
    <div class="w-full {{ $maxWidth }}">
        <div class="border border-line">
            <div class="border-b border-line px-6 py-5">
                <p class="flex items-center gap-2.5 label-mono text-brand-text">
                    <x-ui.icon :name="$icon" :size="13" />
                    Listener account
                </p>

                @if ($title)
                    <h1 class="mt-3 font-display text-[26px] font-bold leading-tight tracking-[-0.025em] text-paper">{{ $title }}</h1>
                @endif

                @if ($subtitle)
                    <p class="mt-1.5 max-w-[42ch] text-[14px] leading-relaxed text-muted">{{ $subtitle }}</p>
                @endif
            </div>

            <div class="px-6 py-6">
                @if ($errors->any())
                    <div class="mb-6 border-l-2 border-brand bg-brand-soft/60 px-4 py-3" role="alert">
                        <p class="label-mono text-brand-text">Please check the form</p>
                        <ul class="mt-2 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li class="text-[13px] leading-relaxed text-paper">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="mb-6 border border-line bg-surface-2 px-4 py-3" role="status">
                        <p class="text-[13px] leading-relaxed text-paper">{{ session('status') }}</p>
                    </div>
                @endif

                {{ $slot }}
            </div>
        </div>

        @isset($footer)
            <div class="mt-5 text-center">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>
