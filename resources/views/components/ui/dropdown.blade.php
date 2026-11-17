@props([
    'label' => null,
    'align' => 'left',
    'width' => 'w-56',
])

@php
    $panelAlign = $align === 'right' ? 'right-0' : 'left-0';
@endphp

<div
    {{ $attributes->merge(['class' => 'relative']) }}
    x-data="{ open: false }"
    @keydown.escape.window="open = false"
    @click.outside="open = false"
>
    <button
        type="button"
        class="inline-flex items-center gap-1.5 font-mono text-[10px] uppercase tracking-[0.14em] text-muted transition-colors hover:text-paper"
        x-on:click="open = !open"
        x-bind:aria-expanded="open"
        aria-haspopup="true"
    >
        {{ $label ?? $trigger }}
        <x-ui.icon name="chevron-down" :size="14" class="transition-transform duration-200" x-bind:class="open && 'rotate-180'" />
    </button>

    <div
        x-cloak
        x-show="open"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute top-full z-50 mt-3 {{ $panelAlign }} {{ $width }} overflow-hidden rounded-xs border border-line bg-surface p-1.5 shadow-[0_24px_48px_-24px_rgba(0,0,0,0.9)]"
    >
        {{ $slot }}
    </div>
</div>
