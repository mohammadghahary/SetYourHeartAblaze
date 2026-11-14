@props([
    'align' => 'end', 
    'width' => 'w-48',
    'contentClasses' => 'py-2 bg-surface-container-lowest/95 dark:bg-surface-container-lowest/95 backdrop-blur-2xl border border-white/80 dark:border-white/10',
    'closeOnClick' => true,
])

@php
    $alignmentClasses = match ($align) {
        'start' => 'start-0 mt-2 origin-top-start',
        'end' => 'end-0 mt-2 origin-top-end',
        'top-start' => 'bottom-full start-0 mb-2 origin-bottom-start',
        'top-end' => 'bottom-full end-0 mb-2 origin-bottom-end',
        default => 'end-0 mt-2 origin-top-end',
    };
@endphp

<div 
    {{ $attributes->merge(['class' => 'relative inline-block text-start']) }}
    x-data="{ open: false }"
    @click.outside="open = false"
    @keydown.escape.window="open = false">

    <div @click="open = !open" class="cursor-pointer">
        {{ $trigger }}
    </div>

    <div
        x-show="open"
        x-cloak
        @if($closeOnClick) @click="open = false" @endif
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 {{ $width }} rounded-2xl shadow-xl {{ $alignmentClasses }} {{ $contentClasses }}"
        style="display: none;">
        
        {{ $slot }}
    </div>
</div>