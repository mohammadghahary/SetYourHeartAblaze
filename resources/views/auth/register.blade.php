<x-layouts.auth :title="__('auth.register_title')">
    <div class="glass-card bg-surface-container-lowest/85 dark:bg-surface-container-lowest/90 backdrop-blur-2xl rounded-3xl p-6 sm:p-9 shadow-2xl border border-white/80 dark:border-white/10 transition-all">
        
        <!-- Header / Title -->
        <div class="flex flex-col items-center text-center mb-6">
            <div class="w-12 h-12 rounded-2xl bg-secondary-container/30 flex items-center justify-center text-secondary mb-3 shadow-[0_4px_16px_rgba(53,104,85,0.12)]">
                <span class="material-symbols-outlined text-[28px]">person_add</span>
            </div>
            <h1 class="font-headline-md text-headline-md font-bold text-primary tracking-tight">
                {{ __('auth.register_title') }}
            </h1>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 max-w-xs">
                {{ __('auth.register_subtitle') }}
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4" x-data="{ showPassword: false }">
            @csrf

            <!-- Full Name Input -->
            <div class="flex flex-col gap-1.5 text-start">
                <label for="name" class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px] text-primary">badge</span>
                    <span>{{ __('auth.name') }}</span>
                </label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="{{ __('auth.name_placeholder') }}"
                    class="w-full bg-white/90 dark:bg-surface-container/70 border @error('name') border-error @else border-secondary/30 @enderror rounded-2xl px-4 py-3 text-on-surface placeholder:text-outline/70 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all text-body-md"
                >
                @error('name')
                    <p class="text-error font-body-sm text-body-sm flex items-center gap-1 mt-0.5">
                        <span class="material-symbols-outlined text-[16px]">error</span>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <!-- Email Input -->
            <div class="flex flex-col gap-1.5 text-start">
                <label for="email" class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px] text-primary">mail</span>
                    <span>{{ __('auth.email') }}</span>
                </label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                    placeholder="{{ __('auth.email_placeholder') }}"
                    class="w-full bg-white/90 dark:bg-surface-container/70 border @error('email') border-error @else border-secondary/30 @enderror rounded-2xl px-4 py-3 text-on-surface placeholder:text-outline/70 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all text-body-md"
                    dir="ltr"
                >
                @error('email')
                    <p class="text-error font-body-sm text-body-sm flex items-center gap-1 mt-0.5">
                        <span class="material-symbols-outlined text-[16px]">error</span>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="flex flex-col gap-1.5 text-start">
                <label for="password" class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px] text-primary">key</span>
                    <span>{{ __('auth.password') }}</span>
                </label>
                <div class="relative">
                    <input
                        id="password"
                        :type="showPassword ? 'text' : 'password'"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="{{ __('auth.password_placeholder') }}"
                        class="w-full bg-white/90 dark:bg-surface-container/70 border @error('password') border-error @else border-secondary/30 @enderror rounded-2xl px-4 py-3 pe-11 text-on-surface placeholder:text-outline/70 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all text-body-md"
                        dir="ltr"
                    >
                    <button
                        type="button"
                        @click="showPassword = !showPassword"
                        class="absolute inset-y-0 end-0 pe-3.5 flex items-center text-outline hover:text-primary transition-colors focus:outline-none"
                        tabindex="-1"
                        aria-label="Toggle password visibility"
                    >
                        <span class="material-symbols-outlined text-[20px]" x-text="showPassword ? 'visibility_off' : 'visibility'"></span>
                    </button>
                </div>
                @error('password')
                    <p class="text-error font-body-sm text-body-sm flex items-center gap-1 mt-0.5">
                        <span class="material-symbols-outlined text-[16px]">error</span>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <!-- Password Confirmation Input -->
            <div class="flex flex-col gap-1.5 text-start">
                <label for="password_confirmation" class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px] text-primary">lock_reset</span>
                    <span>{{ __('auth.password_confirmation') }}</span>
                </label>
                <input
                    id="password_confirmation"
                    :type="showPassword ? 'text' : 'password'"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="{{ __('auth.password_placeholder') }}"
                    class="w-full bg-white/90 dark:bg-surface-container/70 border @error('password_confirmation') border-error @else border-secondary/30 @enderror rounded-2xl px-4 py-3 text-on-surface placeholder:text-outline/70 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all text-body-md"
                    dir="ltr"
                >
                @error('password_confirmation')
                    <p class="text-error font-body-sm text-body-sm flex items-center gap-1 mt-0.5">
                        <span class="material-symbols-outlined text-[16px]">error</span>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <!-- Primary Action Button -->
            <button
                type="submit"
                class="w-full mt-2 bg-[#CC7A3D] hover:bg-[#C45335] active:bg-[#B34529] text-white font-semibold py-3 px-6 rounded-full shadow-[0_6px_18px_rgba(204,122,61,0.3)] hover:shadow-[0_8px_24px_rgba(196,83,53,0.35)] transition-all flex items-center justify-center gap-2 cursor-pointer"
            >
                <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                <span>{{ __('auth.register_button') }}</span>
            </button>
        </form>

        <!-- Card Divider & Login Link -->
        <div class="mt-6 pt-5 border-t border-outline-variant/30 text-center">
            <p class="font-body-sm text-body-sm text-on-surface-variant">
                {{ __('auth.already_have_account') }}
                <a href="{{ route('login') }}" class="text-primary hover:text-primary-container font-bold ms-1 transition-colors">
                    {{ __('auth.login_now') }}
                </a>
            </p>
        </div>

    </div>
</x-layouts.auth>
