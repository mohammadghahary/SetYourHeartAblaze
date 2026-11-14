@props([
    'name',
    'stars' => '۵ ستاره تاپ',
    'hospitalDistance',
    'description',
    'image',
    'amenities' => [],
    'price',
    'category' => 'all',
    'bookingHref' => '#package-builder',
])

<div
    data-category="{{ $category }}"
    x-show="activeHotelTab === 'all' || activeHotelTab === '{{ $category }}'"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    class="hotel-card rounded-2xl bg-surface-container-lowest/85 backdrop-blur-xl border border-white/80 overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between group glass-card"
>
    <div>
        <div class="relative h-52 w-full overflow-hidden bg-surface-container">
            <img
                src="{{ $image }}"
                alt="{{ $name }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            >
            <div class="absolute top-3 right-3 px-2.5 py-1 rounded-xl bg-surface-container-lowest/90 backdrop-blur-md text-amber-500 font-label-sm text-label-sm font-bold flex items-center gap-1 border border-amber-500/20 shadow-md">
                <span>★★★★★</span>
                <span class="text-on-surface font-semibold">{{ $stars }}</span>
            </div>

            <div class="absolute bottom-3 right-3 left-3 px-3 py-1.5 rounded-xl bg-surface-container-lowest/90 backdrop-blur-md text-on-surface border border-white/90 font-label-sm text-label-sm flex items-center gap-1.5 shadow-sm">
                <span class="material-symbols-outlined text-[16px] text-primary">distance</span>
                <span>{{ $hospitalDistance }}</span>
            </div>
        </div>

        <div class="p-5">
            <h3 class="font-headline-md text-headline-md font-bold text-on-surface mb-2">{{ $name }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4 leading-relaxed">{{ $description }}</p>

            <!-- Medical Amenities Chips -->
            <div class="flex flex-wrap gap-1.5 mb-4">
                @foreach($amenities as $amenity)
                    <span class="px-2.5 py-1 rounded-xl bg-surface-container-low/70 text-primary border border-primary/20 font-label-sm text-label-sm font-medium">
                        {{ $amenity }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="p-5 pt-0 border-t border-outline-variant/30 mt-auto">
        <div class="flex items-center justify-between py-3">
            <div>
                <span class="font-label-sm text-label-sm text-on-surface-variant">هر شب اقامت از</span>
                <div class="font-headline-md text-headline-md font-bold text-primary" dir="ltr">
                    {{ $price }} <span class="font-body-sm text-body-sm text-on-surface-variant font-normal">/ شب</span>
                </div>
            </div>

            <x-button
                :href="$bookingHref"
                variant="primary"
                size="md"
                class="!rounded-xl font-bold shadow-sm"
            >
                رزرو اتاق نقاهت
            </x-button>
        </div>
    </div>
</div>
