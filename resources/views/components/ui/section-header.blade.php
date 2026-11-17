@props([
    'title' => null,
    'description' => null,
    'eyebrow' => null,
    'href' => null,
    'linkLabel' => null,
])

<div {{ $attributes->merge(['class' => 'flex flex-wrap items-end justify-between gap-x-8 gap-y-4 border-t border-line pt-5']) }}>
    <div class="max-w-[54ch]">
        @if ($eyebrow)
            <p class="label-mono mb-3 text-brand-text">{{ $eyebrow }}</p>
        @endif

        @if ($title)
            <h2 class="font-display text-[27px] font-bold leading-[1.05] tracking-[-0.025em] text-paper sm:text-[34px]">{{ $title }}</h2>
        @endif

        @if ($description)
            <p class="mt-2.5 text-[15px] leading-relaxed text-muted">{{ $description }}</p>
        @endif
    </div>

    @if ($href && $linkLabel)
        <a href="{{ $href }}" class="group inline-flex items-center gap-2 pb-1 font-mono text-[10px] font-medium uppercase tracking-[0.16em] text-muted transition-colors hover:text-paper">
            {{ $linkLabel }}
            <x-ui.icon name="arrow-right" :size="14" class="transition-transform duration-200 group-hover:translate-x-0.5" />
        </a>
    @endif
</div>
