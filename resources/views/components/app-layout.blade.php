@props(['title' => null])
<x-layouts.app :title="$title">
    @isset($styles)
        <x-slot:styles>{{ $styles }}</x-slot:styles>
    @endisset

    {{ $slot }}

    @isset($scripts)
        <x-slot:scripts>{{ $scripts }}</x-slot:scripts>
    @endisset
</x-layouts.app>
