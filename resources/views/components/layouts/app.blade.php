<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'پرشیا مدیس | گردشگری سلامت و درمان‌های فوق‌تخصصی' }}</title>

    <!-- Google Fonts: Vazirmatn (Arabic/Persian/Latin) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        // Inline blocking script to prevent theme flicker on page load
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @isset($styles)
        {{ $styles }}
    @endisset
</head>

<body class="bg-background font-body-md text-on-surface antialiased min-h-screen flex flex-col relative selection:bg-primary selection:text-on-primary">
    
    <x-header />

    <main class="w-full pt-[120px] bg-transparent flex-grow">
        {{ $slot }}
    </main>

    <x-footer />

    @isset($scripts)
        {{ $scripts }}
    @endisset
</body>
</html>
