@php
    $currentLocale = app()->getLocale();
    $isRtl = in_array($currentLocale, ['fa', 'ar', 'he', 'ur']);
    $dir = $isRtl ? 'rtl' : 'ltr';
@endphp
<!DOCTYPE html>
<html dir="{{ $dir }}" lang="{{ $currentLocale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? __('header.brand_name') }} | {{ __('header.patient_portal') }}</title>

    <!-- Google Fonts: Vazirmatn & Plus Jakarta Sans, Material Symbols Outlined -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background font-body-md text-on-surface antialiased min-h-screen flex flex-col relative selection:bg-primary selection:text-on-primary"
      x-data="{
          darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
          toggleTheme() {
              this.darkMode = !this.darkMode;
              localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
              if (this.darkMode) {
                  document.documentElement.classList.add('dark');
              } else {
                  document.documentElement.classList.remove('dark');
              }
          },
          switchLanguage(newLocale) {
              let currentLocale = '{{ $currentLocale }}';
              let path = window.location.pathname;
              let regex = new RegExp('^/' + currentLocale + '(?=/|$)');
              let newPath;

              if (regex.test(path)) {
                  newPath = path.replace(regex, '/' + newLocale);
              } else {
                  newPath = '/' + newLocale + (path === '/' ? '' : path);
              }

              window.location.href = newPath + window.location.search + window.location.hash;
          }
      }">

    <!-- Ambient Luminous Glow Orbs (Diffused Sanctuary Pearl Radiance) -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10" aria-hidden="true">
        <div class="glow-orb top-[-10%] right-[-5%] w-[600px] h-[600px] bg-gradient-to-br from-primary-fixed/80 to-secondary-fixed/70 opacity-70"></div>
        <div class="glow-orb bottom-[-15%] left-[-10%] w-[680px] h-[680px] bg-gradient-to-tr from-tertiary-fixed/60 to-secondary-fixed-dim/70 opacity-60"></div>
        <div class="glow-orb top-[40%] right-[30%] w-[450px] h-[450px] bg-primary-fixed/30 blur-[140px]"></div>
    </div>

    <!-- Header Utility Navigation -->
    <header class="w-full py-4 px-6 sm:px-12 flex items-center justify-between">
        <!-- Brand Link -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group focus:outline-none">
            <div class="w-10 h-10 rounded-xl bg-primary-container/20 group-hover:bg-primary-container/30 flex items-center justify-center text-primary font-bold text-sm shadow-[0_2px_12px_rgba(0,103,103,0.15)] dark:shadow-[0_2px_12px_rgba(78,218,217,0.15)] transition-all">
                PM
            </div>
            <div class="flex flex-col">
                <span class="font-headline-md text-headline-md font-bold tracking-tight text-primary leading-tight">
                    {{ __('header.brand_name') }}
                </span>
                <span class="font-label-sm text-label-sm text-on-surface-variant hidden sm:inline">
                    {{ __('header.patient_portal') }}
                </span>
            </div>
        </a>

        <!-- Controls: Theme & Language -->
        <div class="flex items-center gap-2 sm:gap-3">
            <!-- Theme Toggle -->
            <button type="button" @click="toggleTheme()"
                class="w-9 h-9 rounded-full bg-surface-container/70 hover:bg-surface-container-high text-on-surface flex items-center justify-center transition-colors focus:outline-none"
                aria-label="{{ __('header.toggle_dark_mode') }}"
                :title="darkMode ? 'Switch to Light Mode' : 'Switch to Dark Mode'">
                <svg x-show="darkMode" class="w-4 h-4 fill-current text-primary" viewBox="0 0 20 20" style="display: none;">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
                </svg>
                <svg x-show="!darkMode" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                </svg>
            </button>

            <!-- Language Dropdown -->
            <div class="flex items-center bg-surface-container/70 dark:bg-surface-container/80 px-2.5 py-1 rounded-xl text-on-surface-variant hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-[18px] text-primary me-1">translate</span>
                <select @change="switchLanguage($event.target.value)"
                    class="bg-transparent text-on-surface font-label-sm text-label-sm focus:outline-none cursor-pointer text-start"
                    aria-label="{{ __('header.select_language') }}">
                    <option value="fa" {{ $currentLocale === 'fa' ? 'selected' : '' }}>فارسی</option>
                    <option value="ar" {{ $currentLocale === 'ar' ? 'selected' : '' }}>العربية</option>
                    <option value="en" {{ $currentLocale === 'en' ? 'selected' : '' }}>English</option>
                </select>
            </div>
        </div>
    </header>

    <!-- Main Auth Card Container -->
    <main class="flex-grow flex items-center justify-center p-4 sm:p-6 my-auto">
        <div class="w-full max-w-md">
            {{ $slot }}
        </div>
    </main>

    <!-- Trust & Security Footer -->
    <footer class="w-full py-4 text-center font-label-sm text-label-sm text-on-surface-variant/80 flex items-center justify-center gap-2">
        <span class="material-symbols-outlined text-[16px] text-primary">lock</span>
        <span>{{ __('auth.secure_portal') }}</span>
    </footer>

</body>
</html>
