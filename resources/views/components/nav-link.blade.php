@props([
    'href',
    'active' => false,
    'mobile' => false,
    'highlight' => false,
])

@php
$baseClasses = 'transition-all duration-200 font-label-md text-label-md';

if ($mobile) {
    $classes = $baseClasses . ' px-4 py-3 rounded-xl flex items-center justify-between ';
    if ($active) {
        $classes .= 'bg-primary-container text-on-primary-container font-bold shadow-sm';
    } elseif ($highlight) {
        $classes .= 'text-primary font-semibold hover:bg-surface-container';
    } else {
        $classes .= 'text-on-surface hover:bg-surface-container';
    }
} else {
    $classes = $baseClasses . ' px-3 py-2 rounded-lg flex items-center ';
    if ($active) {
        $classes .= 'bg-primary-container text-on-primary-container font-bold shadow-sm';
    } elseif ($highlight) {
        $classes .= 'text-primary font-semibold hover:bg-surface-container-high';
    } else {
        $classes .= 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface';
    }
}
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => $classes]) }}
    @if($active) aria-current="page" @endif
>
    <span>{{ $slot }}</span>

    @if($mobile)
        {{-- Pure CSS chevron indicator that respects LTR and RTL --}}
        <span class="inline-block w-2 h-2 border-t-2 border-r-2 transform rotate-[135deg] rtl:-rotate-45 {{ $active ? 'border-on-primary-container' : ($highlight ? 'border-primary' : 'border-outline') }}"></span>
    @endif
</a>