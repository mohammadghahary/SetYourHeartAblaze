<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'پرشیا مدیس | گردشگری سلامت و درمان‌های فوق‌تخصصی' }}</title>

    <!-- Google Fonts: Vazirmatn (Persian), Plus Jakarta Sans (Latin/Numbers), Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">

    <!-- Local Vite Bundle (Tailwind CSS v4 & Alpine.js) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @isset($styles)
        {{ $styles }}
    @endisset
</head>

<body class="bg-background font-body-md text-on-surface antialiased min-h-screen flex flex-col relative selection:bg-primary selection:text-on-primary">
    <!-- Ambient Luminous Glow Orbs (Subtle Glass Lighting Canvas) -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10" aria-hidden="true">
        <div class="glow-orb top-6 right-10 w-[640px] h-[640px] bg-gradient-to-br from-primary-fixed to-secondary-fixed opacity-70"></div>
        <div class="glow-orb top-72 -left-20 w-[680px] h-[680px] bg-gradient-to-tr from-tertiary-fixed to-secondary-fixed-dim opacity-60"></div>
        <div class="glow-orb top-[1500px] right-20 w-[600px] h-[600px] bg-primary-fixed/35 blur-[160px]"></div>
        <div class="glow-orb top-[2800px] left-1/3 w-[720px] h-[720px] bg-secondary-container/30 blur-[180px]"></div>
    </div>

    <!-- Master Header Component -->
    <x-header />

    <!-- Main Content Area -->
    <main class="w-full pt-[120px] bg-transparent flex-grow">
        {{ $slot }}
    </main>

    <!-- Master Footer Component -->
    <x-footer />

    @isset($scripts)
        {{ $scripts }}
    @endisset
</body>
</html>
