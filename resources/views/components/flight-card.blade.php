@props([
    'airlines',
    'badge' => 'پشتیبانی کامل CIP',
    'duration',
    'origin',
    'destination' => 'تهران (THR/IKA)',
    'baggage',
    'seatFeature',
    'medicalPerk',
    'price',
    'bookingHref' => '#package-builder',
])

<div class="group p-6 rounded-2xl bg-surface-container-lowest/85 backdrop-blur-xl border border-white/80 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between glass-card">
    <div>
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <span class="px-2.5 py-1 rounded-xl bg-surface-container text-primary border border-primary/20 font-label-sm text-label-sm font-bold shadow-sm">
                    {{ $airlines }}
                </span>
                <span class="px-2 py-0.5 rounded-lg bg-secondary-container/40 text-secondary font-label-sm text-label-sm font-semibold border border-secondary/20">
                    {{ $badge }}
                </span>
            </div>

            <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
                <span class="material-symbols-outlined text-[15px] text-primary">schedule</span>
                <span>{{ $duration }}</span>
            </span>
        </div>

        <div class="my-4">
            <div class="flex items-center justify-between font-headline-md text-headline-md font-bold text-on-surface">
                <span>{{ $origin }}</span>
                <span class="text-primary">{{ $destination }}</span>
            </div>

            <!-- SVG Flight Path Arc (RTL Origin on right, Destination on left) -->
            <div class="relative py-3">
                <svg class="w-full h-8 overflow-visible" fill="none" viewBox="0 0 200 30">
                    <path class="text-outline-variant/60" d="M 190 20 Q 100 -5 10 20" stroke="currentColor" stroke-dasharray="4 4" stroke-width="2"></path>
                    <circle class="fill-secondary" cx="190" cy="20" r="4"></circle>
                    <circle class="fill-primary" cx="10" cy="20" r="4"></circle>
                    <g class="transform -translate-y-2 group-hover:translate-x-2 transition-transform">
                        <circle class="fill-white stroke-primary/30" cx="100" cy="8" r="9" filter="drop-shadow(0 2px 4px rgba(0,103,103,0.15))"></circle>
                        <path class="text-primary" d="M 97 8 L 103 8 M 100 5 L 100 11" stroke="currentColor" stroke-width="1.5"></path>
                    </g>
                </svg>
            </div>
        </div>

        <div class="space-y-2 py-2 text-on-surface-variant font-label-sm text-label-sm">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px] text-primary flex-shrink-0">luggage</span>
                <span>{{ $baggage }}</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px] text-primary flex-shrink-0">airline_seat_recline_extra</span>
                <span>{{ $seatFeature }}</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px] text-primary flex-shrink-0">verified</span>
                <span>{{ $medicalPerk }}</span>
            </div>
        </div>
    </div>

    <div class="pt-4 mt-4 flex items-center justify-between border-t border-outline-variant/30">
        <div>
            <span class="font-label-sm text-label-sm text-on-surface-variant block">شروع نرخ رفت و برگشت</span>
            <div class="font-headline-md text-headline-md font-bold text-primary" dir="ltr">{{ $price }}</div>
        </div>

        <x-button
            :href="$bookingHref"
            variant="secondary"
            size="md"
            class="!rounded-xl font-bold shadow-sm"
        >
            رزرو پرواز
        </x-button>
    </div>
</div>
