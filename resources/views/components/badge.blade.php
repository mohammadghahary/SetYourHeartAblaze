@props([
    'variant' => 'glass', // glass, primary, secondary, tertiary, sage
    'icon' => null,
])

@php
    $baseClasses = 'inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full font-label-sm text-label-sm font-semibold transition-all select-none';

    $variantClasses = match($variant) {
        'primary' => 'bg-primary text-on-primary shadow-sm',
        'secondary' => 'bg-secondary text-on-secondary shadow-sm',
        'tertiary' => 'bg-tertiary-container text-on-tertiary shadow-sm',
        'sage' => 'bg-secondary-container text-on-secondary-container border border-secondary/20',
        'teal-soft' => 'bg-primary-container/20 text-primary border border-primary/20',
        default => 'glass-pill text-on-surface border border-white/85 shadow-sm',
    };

    $classes = "{$baseClasses} {$variantClasses}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if ($icon)
        <span class="material-symbols-outlined text-[16px]">{{ $icon }}</span>
    @endif
    <span>{{ $slot }}</span>
</div>
