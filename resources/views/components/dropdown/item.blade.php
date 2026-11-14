@props([
    'href' => null,
    'icon' => null,
    'variant' => 'default',
])

@php
    $baseClasses = 'w-full px-4 py-2.5 text-start font-label-md text-label-md flex items-center gap-2 transition-colors cursor-pointer ';
    
    $variantClasses = match ($variant) {
        'danger' => 'text-error hover:bg-error-container/20',
        default => 'text-on-surface hover:bg-surface-container-high/50',
    };

    $iconClasses = match ($variant) {
        'danger' => 'text-error',
        default => 'text-on-surface-variant',
    };
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $baseClasses . $variantClasses]) }}>
        @if($icon)
            <span class="material-symbols-outlined text-[18px] {{ $iconClasses }}">{{ $icon }}</span>
        @endif
        <span class="truncate">{{ $slot }}</span>
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button', 'class' => $baseClasses . $variantClasses]) }}>
        @if($icon)
            <span class="material-symbols-outlined text-[18px] {{ $iconClasses }}">{{ $icon }}</span>
        @endif
        <span class="truncate">{{ $slot }}</span>
    </button>
@endif