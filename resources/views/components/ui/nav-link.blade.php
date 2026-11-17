@props([
    'href',
    'active' => false,
    'mobile' => false,
])

@if ($mobile)
    <a
        href="{{ $href }}"
        wire:navigate
        @if ($active) aria-current="page" @endif
        {{ $attributes->merge(['class' => 'flex items-center justify-between rounded-sm px-3 py-3 text-[15px] font-medium transition-colors ' . ($active ? 'bg-surface-2 text-paper' : 'text-muted hover:bg-surface-2 hover:text-paper')]) }}
    >
        {{ $slot }}
        <x-ui.icon name="chevron-right" :size="16" class="text-faint" />
    </a>
@else
    <a
        href="{{ $href }}"
        wire:navigate
        @if ($active) aria-current="page" @endif
        {{ $attributes->merge(['class' => 'relative py-2 font-mono text-[10px] font-medium uppercase tracking-[0.14em] transition-colors ' . ($active ? 'text-paper' : 'text-muted hover:text-paper')]) }}
    >
        {{ $slot }}
        <span class="absolute -bottom-1 left-0 h-px w-full bg-brand transition-opacity duration-150 {{ $active ? 'opacity-100' : 'opacity-0' }}"></span>
    </a>
@endif
