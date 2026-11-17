@props([
    'icon' => 'radio',
    'title' => 'Nothing here yet',
    'description' => null,
    'label' => 'Standby',
])

<div {{ $attributes->merge(['class' => 'border-y border-line bg-surface/20 px-5 py-8 sm:px-6 sm:py-10']) }}>
    <div class="flex items-start gap-5">
        <span class="mt-0.5 flex h-10 w-10 shrink-0 items-center justify-center border border-line text-faint">
            <x-ui.icon :name="$icon" :size="19" />
        </span>

        <div class="min-w-0 flex-1">
            <p class="label-mono text-faint">{{ $label }}</p>

            <p class="mt-2 font-display text-[19px] font-semibold leading-snug tracking-[-0.01em] text-paper">{{ $title }}</p>

            @if ($description)
                <p class="mt-2 max-w-[46ch] text-sm leading-relaxed text-muted">{{ $description }}</p>
            @endif

            @isset($action)
                <div class="mt-5">{{ $action }}</div>
            @endisset
        </div>
    </div>
</div>
