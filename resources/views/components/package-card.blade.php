@props([
    'badge',
    'badgeClass' => 'bg-secondary-container text-on-secondary-container',
    'icon',
    'title',
    'description',
    'price',
    'features' => [],
    'ctaText' => 'رزرو و بررسی مدارک',
    'ctaHref' => '#upload-records',
])

<div class="relative rounded-2xl bg-surface-container-lowest/80 backdrop-blur-xl p-space-md shadow-md flex flex-col justify-between hover:shadow-xl transition-all duration-300 border border-white/80 glass-card">
    <div class="flex flex-col gap-space-sm">
        <div class="flex items-center justify-between">
            <span class="{{ $badgeClass }} px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold select-none shadow-sm">
                {{ $badge }}
            </span>
            <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[20px]">{{ $icon }}</span>
            </div>
        </div>

        <div class="flex flex-col mt-1">
            <h3 class="font-headline-md text-headline-md text-on-surface font-bold">{{ $title }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-relaxed">
                {{ $description }}
            </p>
        </div>

        <div class="my-2 p-3 bg-surface-container-low/70 rounded-xl flex items-baseline justify-between border border-white/60">
            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">هزینه کامل پکیج:</span>
            <span class="font-headline-lg text-headline-lg text-primary font-bold" dir="ltr">{{ $price }}</span>
        </div>

        <div class="flex flex-col gap-2 font-label-sm text-label-sm text-on-surface-variant">
            @foreach($features as $feature)
                <div class="flex items-center gap-2 text-on-surface">
                    <span class="material-symbols-outlined text-secondary text-[18px] flex-shrink-0">check_circle</span>
                    <span>{{ $feature }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <x-button
        :href="$ctaHref"
        variant="primary"
        size="md"
        class="mt-space-md w-full !rounded-xl justify-center font-bold"
        icon="arrow_forward"
        iconPosition="left"
    >
        {{ $ctaText }}
    </x-button>
</div>
