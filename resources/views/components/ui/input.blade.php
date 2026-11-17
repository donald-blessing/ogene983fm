@props([
    'label' => null,
    'name' => null,
    'type' => 'text',
    'value' => null,
    'placeholder' => null,
    'required' => false,
    'autofocus' => false,
    'autocomplete' => null,
])

@php
    $id = 'field-' . str_replace(['[', ']', '_'], '-', (string) $name);
    $hasError = $name && $errors->has($name);
@endphp

<div>
    @if ($label)
        <label for="{{ $id }}" class="block label-mono text-faint">{{ $label }}</label>
    @endif

    <input
        id="{{ $id }}"
        type="{{ $type }}"
        name="{{ $name }}"
        @if ($type !== 'password') value="{{ old($name, $value) }}" @endif
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($required) required @endif
        @if ($autofocus) autofocus @endif
        @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
        {{ $attributes->merge([
            'class' => 'mt-2 h-11 w-full rounded-xs border bg-ink px-3 text-[14px] text-paper placeholder:text-faint transition-colors focus:outline-none focus:ring-2 focus:ring-brand/40 ' . ($hasError ? 'border-brand' : 'border-line'),
        ]) }}
    >

    @if ($hasError)
        <p class="mt-1.5 text-[12px] text-brand-text">{{ $errors->first($name) }}</p>
    @endif
</div>
