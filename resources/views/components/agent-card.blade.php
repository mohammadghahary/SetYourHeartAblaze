@props([
    'name',
    'role',
    'languages',
    'experience',
    'hospitalPartners',
    'responseSpeed' => 'پاسخگویی کمتر از ۵ دقیقه',
    'image',
    'whatsappUrl' => 'https://wa.me/982188880000',
    'whatsappPhone' => '+98 21 8888 0000',
])

<div class="relative rounded-2xl bg-surface-container-lowest/85 backdrop-blur-xl p-space-md shadow-md hover:shadow-xl transition-all duration-300 border border-white/80 flex flex-col justify-between glass-card">
    <div class="flex flex-col items-center text-center">
        <!-- Agent Avatar with Online Status Indicator -->
        <div class="relative w-28 h-28 rounded-full overflow-hidden shadow-lg mb-3 bg-surface-container border-2 border-white">
            <img
                src="{{ $image }}"
                alt="{{ $name }}"
                class="w-full h-full object-cover object-center"
            >
            <div class="absolute bottom-1 right-1 w-4 h-4 rounded-full bg-emerald-500 border-2 border-white" title="هم‌اکنون آنلاین و در دسترس"></div>
        </div>

        <!-- Name & Primary Title -->
        <div class="flex items-center gap-1.5 justify-center">
            <h3 class="font-headline-md text-headline-md font-bold text-on-surface">{{ $name }}</h3>
            <span class="material-symbols-outlined text-secondary text-[18px]" title="هویت و مدارک تأیید شده">verified</span>
        </div>

        <span class="font-label-sm text-label-sm text-primary font-semibold mt-0.5">
            {{ $role }}
        </span>

        <!-- Response Speed Pill -->
        <div class="inline-flex items-center gap-1 text-tertiary font-label-sm text-label-sm mt-2.5 bg-tertiary-fixed/30 px-3 py-1 rounded-full">
            <span class="material-symbols-outlined text-[15px]">support_agent</span>
            <span>{{ $responseSpeed }}</span>
        </div>

        <!-- Language Capabilities -->
        <div class="w-full mt-4 pt-3 border-t border-outline-variant/30 flex flex-col gap-2 text-right">
            <div class="flex items-start gap-2 text-on-surface-variant font-label-sm text-label-sm">
                <span class="material-symbols-outlined text-secondary text-[16px] mt-0.5">translate</span>
                <div>
                    <span class="font-semibold text-on-surface">زبان‌ها:</span>
                    <span>{{ $languages }}</span>
                </div>
            </div>

            <div class="flex items-start gap-2 text-on-surface-variant font-label-sm text-label-sm">
                <span class="material-symbols-outlined text-primary text-[16px] mt-0.5">workspace_premium</span>
                <div>
                    <span class="font-semibold text-on-surface">سابقه بالینی:</span>
                    <span>{{ $experience }}</span>
                </div>
            </div>

            <div class="flex items-start gap-2 text-on-surface-variant font-label-sm text-label-sm">
                <span class="material-symbols-outlined text-primary text-[16px] mt-0.5">local_hospital</span>
                <div>
                    <span class="font-semibold text-on-surface">بیمارستان‌ها:</span>
                    <span>{{ $hospitalPartners }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="mt-space-md pt-3 border-t border-outline-variant/30 flex flex-col gap-2 w-full">
        <a
            href="{{ $whatsappUrl }}"
            target="_blank"
            class="w-full py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center justify-center gap-2 font-semibold hover:-translate-y-0.5"
        >
            <span class="material-symbols-outlined text-[18px]">forum</span>
            <span>گفتگوی مستقیم در واتساپ</span>
        </a>

        <x-button
            href="#request-agent"
            variant="glass"
            size="sm"
            class="w-full !rounded-xl justify-center font-medium"
        >
            انتخاب این سرپرست برای پرونده
        </x-button>
    </div>
</div>
