@props([
    'variant' => 'primary', // primary (terracotta), secondary (teal), glass, outline
    'size' => 'md',        // sm, md, lg
    'href' => null,
    'type' => 'button',
    'icon' => null,
    'iconPosition' => 'right', // in RTL, right is leading, left is trailing
])

@php
    $baseClasses = 'inline-flex items-center justify-center gap-2 font-semibold transition-all duration-200 focus:outline-none select-none cursor-pointer';

    $sizeClasses = match($size) {
        'sm' => 'px-3.5 py-1.5 font-label-sm text-label-sm rounded-full',
        'lg' => 'px-7 py-3.5 font-label-lg text-label-lg rounded-full shadow-lg',
        default => 'px-5 py-2.5 font-label-md text-label-md rounded-full shadow-md',
    };

    $variantClasses = match($variant) {
        'primary' => 'bg-[#CC7A3D] hover:bg-[#C45335] text-white shadow-[0_6px_18px_rgba(204,122,61,0.3)] hover:shadow-[0_8px_22px_rgba(196,83,53,0.35)] hover:-translate-y-0.5 active:translate-y-0',
        'secondary' => 'bg-primary hover:bg-primary-container text-on-primary shadow-[0_4px_16px_rgba(0,103,103,0.2)] hover:-translate-y-0.5 active:translate-y-0',
        'glass' => 'glass-pill text-primary hover:bg-white hover:text-on-surface hover:shadow-md border border-white/90',
        'outline' => 'bg-transparent text-primary hover:bg-primary hover:text-on-primary border border-primary/40 hover:border-primary',
        'terracotta-soft' => 'bg-tertiary-container hover:bg-tertiary text-on-tertiary shadow-[0_4px_14px_rgba(173,97,38,0.25)]',
        default => 'bg-[#CC7A3D] hover:bg-[#C45335] text-white shadow-[0_6px_18px_rgba(204,122,61,0.3)]',
    };

    $classes = "{$baseClasses} {$sizeClasses} {$variantClasses}";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if ($icon && $iconPosition === 'right')
            <span class="material-symbols-outlined text-[18px]">{{ $icon }}</span>
        @endif

        <span>{{ $slot }}</span>

        @if ($icon && $iconPosition === 'left')
            <span class="material-symbols-outlined text-[18px] rotate-180">{{ $icon }}</span>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if ($icon && $iconPosition === 'right')
            <span class="material-symbols-outlined text-[18px]">{{ $icon }}</span>
        @endif

        <span>{{ $slot }}</span>

        @if ($icon && $iconPosition === 'left')
            <span class="material-symbols-outlined text-[18px] rotate-180">{{ $icon }}</span>
        @endif
    </button>
@endif
