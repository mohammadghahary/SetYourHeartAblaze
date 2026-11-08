<x-layouts.auth :title="__('auth.forgot_password_title')">
    <div class="glass-card bg-surface-container-lowest/85 dark:bg-surface-container-lowest/90 backdrop-blur-2xl rounded-3xl p-6 sm:p-9 shadow-2xl border border-white/80 dark:border-white/10 transition-all">
        
        <!-- Header / Title -->
        <div class="flex flex-col items-center text-center mb-6">
            <div class="w-12 h-12 rounded-2xl bg-tertiary-container/20 flex items-center justify-center text-tertiary mb-3 shadow-[0_4px_16px_rgba(143,73,14,0.12)]">
                <span class="material-symbols-outlined text-[28px]">mark_email_read</span>
            </div>
            <h1 class="font-headline-md text-headline-md font-bold text-primary tracking-tight">
                {{ __('auth.forgot_password_title') }}
            </h1>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1.5 leading-relaxed">
                {{ __('auth.forgot_password_subtitle') }}
            </p>
        </div>

        <!-- Session Status Notice -->
        @if (session('status'))
            <div class="mb-5 p-4 rounded-2xl bg-secondary-container/40 border border-secondary/30 text-on-secondary-container text-body-sm flex items-center gap-2.5">
                <span class="material-symbols-outlined text-[22px] text-secondary flex-shrink-0">check_circle</span>
                <span>{{ session('status') }}</span>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-4.5">
            @csrf

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
                    autofocus
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

            <!-- Primary Action Button -->
            <button
                type="submit"
                class="w-full mt-2 bg-[#CC7A3D] hover:bg-[#C45335] active:bg-[#B34529] text-white font-semibold py-3 px-6 rounded-full shadow-[0_6px_18px_rgba(204,122,61,0.3)] hover:shadow-[0_8px_24px_rgba(196,83,53,0.35)] transition-all flex items-center justify-center gap-2 cursor-pointer"
            >
                <span class="material-symbols-outlined text-[20px]">send</span>
                <span>{{ __('auth.send_reset_link') }}</span>
            </button>
        </form>

        <!-- Card Divider & Back to Login Link -->
        <div class="mt-6 pt-5 border-t border-outline-variant/30 text-center">
            <a href="{{ route('login') }}" class="inline-flex items-center gap-1 text-primary hover:text-primary-container font-semibold transition-colors text-body-sm">
                <span class="material-symbols-outlined text-[18px] rtl:rotate-180">arrow_back</span>
                <span>{{ __('auth.back_to_login') }}</span>
            </a>
        </div>

    </div>
</x-layouts.auth>
