@props([
    'category',
    'icon',
    'enTitle',
    'title',
    'subtitle',
    'description',
    'successRate',
    'hospitalStay',
    'partnerHospitals',
])

<div
    data-category="{{ $category }}"
    x-show="activeCategory === 'all' || activeCategory === '{{ $category }}'"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    class="dept-card group relative rounded-2xl bg-surface-container-lowest/80 backdrop-blur-lg p-space-md shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between border border-white/80 glass-card"
>
    <div class="flex flex-col gap-space-sm">
        <div class="flex items-center justify-between">
            <div class="w-12 h-12 rounded-xl bg-primary-container/15 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors shadow-sm">
                <span class="material-symbols-outlined text-[26px]">{{ $icon }}</span>
            </div>
            <span class="font-label-sm text-label-sm text-on-surface-variant tracking-wider uppercase font-semibold" dir="ltr">{{ $enTitle }}</span>
        </div>

        <div class="flex flex-col mt-1">
            <h3 class="font-headline-md text-headline-md text-on-surface font-bold">{{ $title }}</h3>
            <span class="font-label-sm text-label-sm text-primary font-medium mt-0.5">{{ $subtitle }}</span>
        </div>

        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
            {{ $description }}
        </p>
    </div>

    <div class="mt-space-md pt-space-sm flex flex-col gap-2 bg-surface-container-low/50 p-space-sm rounded-xl border border-white/60">
        <div class="flex justify-between items-center font-label-sm text-label-sm">
            <span class="text-on-surface-variant">نرخ موفقیت بالینی:</span>
            <span class="font-bold text-secondary">{{ $successRate }}</span>
        </div>
        <div class="flex justify-between items-center font-label-sm text-label-sm">
            <span class="text-on-surface-variant">میانگین اقامت / بستری:</span>
            <span class="font-semibold text-on-surface">{{ $hospitalStay }}</span>
        </div>
        <div class="flex justify-between items-center font-label-sm text-label-sm">
            <span class="text-on-surface-variant">بیمارستان همکار:</span>
            <span class="font-semibold text-on-surface">{{ $partnerHospitals }}</span>
        </div>
    </div>
</div>
