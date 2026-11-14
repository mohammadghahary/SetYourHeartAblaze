@php
    $currentLocale = app()->getLocale();
    $isRtl = in_array($currentLocale, ['fa', 'ar', 'he', 'ur']);
    $dir = $isRtl ? 'rtl' : 'ltr';
@endphp

<header x-data="{
    mobileMenuOpen: false,
    currency: 'USD',
    language: '{{ $currentLocale }}',
    isRtl: {{ $isRtl ? 'true' : 'false' }},
    scrolled: false,
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
}" x-init="if (darkMode) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}
document.documentElement.setAttribute('dir', isRtl ? 'rtl' : 'ltr');
document.documentElement.setAttribute('lang', language);" @scroll.window="scrolled = (window.pageYOffset > 20)"
    dir="{{ $dir }}"
    :class="{
        'shadow-[0_8px_30px_rgba(0,103,103,0.1)] dark:shadow-[0_8px_30px_rgba(0,0,0,0.5)]': scrolled
    }"
    class="fixed top-0 inset-x-0 z-50 bg-surface-container-lowest/90 dark:bg-surface-container-lowest/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,103,103,0.06)] dark:shadow-[0_1px_8px_rgba(0,0,0,0.3)] glass-header transition-all duration-300">

    <!-- TOP UTILITY BAR -->
    <div
        class="bg-surface-container-low/70 dark:bg-surface-container-low/80 backdrop-blur-md border-b border-white/40 dark:border-white/10 transition-colors">
        <div class="container mx-auto flex px-4 py-4 lg:px-12 items-center justify-between font-label-sm text-label-sm">
            <div class="flex items-center gap-space-md">
                <div class="flex items-center gap-1.5 text-primary font-medium">
                    <a class="text-primary hover:text-on-surface transition-colors font-semibold" dir="ltr"
                        href="tel:+982188880000">+98 21 8888 0000</a>
                </div>
                <span class="text-outline-variant hidden sm:inline">|</span>
                <div class="hidden md:flex items-center text-on-surface-variant">
                    <span>{{ __('header.services_bar_highlight') }}</span>
                </div>
            </div>

            <div class="flex items-center gap-2">

                <button type="button" @click="toggleTheme()"
                    class="w-9 h-9 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface flex items-center justify-center transition-colors focus:outline-none"
                    aria-label="{{ __('header.toggle_dark_mode') }}"
                    :title="darkMode ? 'Switch to Light Mode' : 'Switch to Dark Mode'">
                    <!-- Sun SVG (shows in dark mode) -->
                    <svg x-show="darkMode" class="w-4 h-4 fill-current text-primary" viewBox="0 0 20 20"
                        style="display: none;">
                        <path fill-rule="evenodd"
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            clip-rule="evenodd" />
                    </svg>
                    <!-- Moon SVG (shows in light mode) -->
                    <svg x-show="!darkMode" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                    </svg>
                </button>

                <!-- Currency Selector -->
                <div
                    class="flex items-center bg-surface-container/60 dark:bg-surface-container/80 px-2 py-0.5 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors">
                    <select x-model="currency"
                        class="bg-transparent text-on-surface font-label-sm text-label-sm focus:outline-none cursor-pointer text-start"
                        aria-label="{{ __('header.select_currency') }}">
                        @foreach ($currencies as $code => $label)
                            <option value="{{ $code }}">{{ $label }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Language Selector -->
                <div
                    class="flex items-center bg-surface-container/60 dark:bg-surface-container/80 px-2 py-0.5 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors">
                    <select x-model="language" @change="switchLanguage($event.target.value)"
                        class="bg-transparent text-on-surface font-label-sm text-label-sm focus:outline-none cursor-pointer text-start"
                        aria-label="{{ __('header.select_language') }}">
                        @foreach ($languages as $locale => $name)
                            <option value="{{ $locale }}"
                                {{ app()->getLocale() === $locale ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>
    </div>

    {{-- Main Header Bar --}}
    <div class="container mx-auto px-4 py-4 lg:px-12 flex items-center justify-between">

        {{-- Logo and Nav --}}
        <div class="flex items-center gap-space-md">
            <a class="flex items-center gap-3 group" href="{{ route('home') }}">
                <div
                    class="w-10 h-10 rounded-xl bg-primary-container/20 group-hover:bg-primary-container/30 flex items-center justify-center text-primary font-bold text-sm shadow-[0_2px_12px_rgba(0,103,103,0.15)] dark:shadow-[0_2px_12px_rgba(78,218,217,0.15)] transition-all">
                    PM
                </div>
                <div class="flex flex-col">
                    <span
                        class="font-headline-md text-headline-md font-bold tracking-tight text-primary leading-tight">{{ __('header.brand_name') }}</span>
                </div>
            </a>

            <!-- Desktop Nav Items -->
            <nav class="hidden xl:flex items-center gap-1 ps-4">
                @foreach ($navItems as $item)
                    <x-nav-link :href="$item['url']" :active="$item['active']" :highlight="$item['highlight']">
                        {{ $item['title'] }}
                    </x-nav-link>
                @endforeach
            </nav>
        </div>

        <!-- Action Area -->
        <div class="flex items-center gap-2 sm:gap-3">

            @auth
                <x-dropdown width="w-52" align="end">
                    <x-slot:trigger>
                        <button type="button"
                            class="border px-3 sm:px-4 py-1.5 text-primary hover:text-on-surface flex items-center gap-2 rounded-full font-label-md text-label-md transition-all focus:outline-none">
                            <div
                                class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-[11px]">
                                {{ mb_substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <span class="max-w-30 truncate hidden md:inline">{{ Auth::user()->name }}</span>
                            <span class="transition-transform duration-300 ease-in-out" :class="{ 'rotate-180': open }">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>

                            </span>
                        </button>
                    </x-slot:trigger>

                    <!-- هدر اطلاعات کاربر -->
                    <div class="px-4 py-2 text-start">
                        <p class="font-label-md text-label-md font-semibold text-primary truncate">{{ Auth::user()->name }}
                        </p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant truncate" dir="ltr">
                            {{ Auth::user()->email }}</p>
                    </div>

                    {{-- <x-dropdown.divider />

                    <x-dropdown.item href="{{ route('profile.edit') }}" icon="person">
                        پروفایل کاربری
                    </x-dropdown.item>

                    <x-dropdown.item href="{{ route('settings') }}" icon="settings">
                        تنظیمات
                    </x-dropdown.item>

                    <x-dropdown.divider /> --}}

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <x-dropdown.item type="submit" variant="danger" icon="logout">
                            {{ __('auth.logout') }}
                        </x-dropdown.item>
                    </form>
                </x-dropdown>
            @else
                <!-- Guest Login Link -->
                <a href="{{ route('login') }}"
                    class="border px-3 sm:px-4 py-1.5 text-primary hover:text-on-surface flex items-center gap-2 rounded-full font-label-md text-label-md transition-all focus:outline-none">
                    <span class="hidden sm:inline">{{ __('auth.login_now') }}</span>
                </a>
            @endauth

            <!-- Primary Action CTA -->
            <x-button href="#consultation" variant="primary" size="md" class="hidden! lg:inline-flex!">
                {{ __('header.start_consultation') }}
            </x-button>

            <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                class="xl:hidden w-10 h-10 rounded-xl bg-surface-container hover:bg-surface-container-high flex flex-col items-center justify-center gap-1.5 transition-colors focus:outline-none"
                aria-label="{{ __('header.toggle_menu') }}" :aria-expanded="mobileMenuOpen.toString()">
                <span class="w-5 h-0.5 bg-primary transition-all duration-300 origin-center"
                    :class="{ 'rotate-45 translate-y-2': mobileMenuOpen }"></span>
                <span class="w-5 h-0.5 bg-primary transition-all duration-200"
                    :class="{ 'opacity-0': mobileMenuOpen }"></span>
                <span class="w-5 h-0.5 bg-primary transition-all duration-300 origin-center"
                    :class="{ '-rotate-45 -translate-y-2': mobileMenuOpen }"></span>
            </button>
        </div>
    </div>

    <!-- MOBILE DRAWER -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-3" @click.outside="mobileMenuOpen = false"
        class="xl:hidden border-t border-white/60 dark:border-white/10 bg-surface-container-lowest/95 dark:bg-surface-container-lowest/98 backdrop-blur-2xl shadow-2xl px-gutter-mobile py-5 max-h-[calc(100vh-5rem)] overflow-y-auto flex flex-col gap-4 text-start"
        style="display: none;">

        <nav class="flex flex-col gap-1.5 text-start">
            @foreach ($navItems as $item)
                <x-nav-link :href="$item['url']" :active="$item['active']" :highlight="$item['highlight']" :mobile="true"
                    @click="mobileMenuOpen = false">
                    {{ $item['title'] }}
                </x-nav-link>
            @endforeach
        </nav>

        <div class="pt-4 border-t border-outline-variant/30 dark:border-outline-variant/40 flex flex-col gap-3">
            @auth
                <div class="flex items-center gap-3 px-2 py-1">
                    <div
                        class="w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-sm">
                        {{ mb_substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div class="flex flex-col text-start">
                        <span class="font-label-md text-label-md font-bold text-primary">{{ Auth::user()->name }}</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant"
                            dir="ltr">{{ Auth::user()->email }}</span>
                    </div>
                </div>

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit"
                        class="w-full py-2.5 px-4 rounded-xl bg-error-container/20 text-error font-semibold flex items-center justify-center gap-2 hover:bg-error-container/40 transition-colors"
                        @click="mobileMenuOpen = false">
                        <span class="material-symbols-outlined text-[18px]">logout</span>
                        <span>{{ __('auth.logout') }}</span>
                    </button>
                </form>
            @else
                <div class="grid grid-cols-2 gap-2">
                    <a href="{{ route('login') }}"
                        class="py-2.5 px-4 rounded-full glass-card text-center font-label-md text-label-md text-primary font-semibold hover:bg-white flex items-center justify-center gap-1.5"
                        @click="mobileMenuOpen = false">
                        <span class="material-symbols-outlined text-[18px]">login</span>
                        <span>{{ __('auth.login_now') }}</span>
                    </a>
                    <a href="{{ route('register') }}"
                        class="py-2.5 px-4 rounded-full bg-primary text-on-primary text-center font-label-md text-label-md font-semibold hover:bg-primary-container flex items-center justify-center gap-1.5"
                        @click="mobileMenuOpen = false">
                        <span class="material-symbols-outlined text-[18px]">person_add</span>
                        <span>{{ __('auth.register_now') }}</span>
                    </a>
                </div>
            @endauth

            <x-button href="#consultation" variant="primary" size="lg"
                class="w-full justify-center text-center" @click="mobileMenuOpen = false">
                {{ __('header.start_consultation') }}
            </x-button>

            <div class="flex items-center justify-center gap-1.5 text-primary font-label-sm text-label-sm pt-1">
                <span class="text-on-surface-variant">{{ __('header.vip_support') }}</span>
                <a href="tel:+982188880000" dir="ltr" class="font-semibold">+98 21 8888 0000</a>
            </div>
        </div>
    </div>
</header>
