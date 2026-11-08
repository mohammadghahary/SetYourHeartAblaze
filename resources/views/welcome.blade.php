<x-layouts.app title="پرشیا مدیس | گردشگری سلامت، درمان فوق‌تخصصی و اقامت لوکس">

    <div class="flex flex-col w-full relative overflow-hidden">

        <section class="container w-full mx-auto px-4 lg:px-12 pt-8 pb-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
                <!-- Right Column (LTR: Left, RTL: Right) -->
                <div class="lg:col-span-7 flex flex-col gap-space-md">
                    
                    <!-- Quality Badges Pill -->
                    <div
                        class="inline-flex items-center gap-space-xs bg-surface-container-lowest/85 backdrop-blur-xl px-4 py-2 rounded-xl shadow-sm w-fit text-primary glass-pill">
                        <span class="font-label-md text-label-md text-on-surface">
                            {{ __('hero.badge_health_ministry') }}
                        </span>
                        <span class="text-outline-variant">•</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">
                            {{ __('hero.badge_jci') }}
                        </span>
                        <span class="text-outline-variant">•</span>
                        <span class="font-label-sm text-label-sm text-secondary font-semibold">
                            {{ __('hero.badge_price_guarantee') }}
                        </span>
                    </div>

                    <!-- Title & Description -->
                    <div class="flex flex-col gap-3">
                        <h1 class="font-display-lg text-display-lg text-primary tracking-tight leading-[1.25]">
                            {{ __('hero.title_main') }}
                            <span class="block text-tertiary-container mt-1">
                                {{ __('hero.title_sub') }}
                            </span>
                        </h1>
                        <p class="text-start font-body-lg text-body-lg text-on-surface-variant max-w-155 leading-relaxed">
                            {{ __('hero.description') }}
                        </p>
                    </div>

                    <!-- Frosted Glass Search Capsule Component -->
                    <div
                        class="bg-surface-container-lowest/90 backdrop-blur-2xl p-space-md rounded-xl shadow-xl flex flex-col gap-space-sm mt-2 glass-panel">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-sm">
                            <!-- Specialty Selector -->
                            <div class="flex flex-col gap-1 chat-box-input px-3.5 py-2.5 rounded-xl">
                                <label class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5" for="heroSpecialty">
                                    {{ __('hero.specialty_label') }}
                                </label>
                                <select
                                    class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer text-start"
                                    id="heroSpecialty">
                                    <option value="rhinoplasty">{{ __('hero.specialty_rhinoplasty') }}</option>
                                    <option value="dental">{{ __('hero.specialty_dental') }}</option>
                                    <option value="ivf">{{ __('hero.specialty_ivf') }}</option>
                                    <option value="lasik">{{ __('hero.specialty_lasik') }}</option>
                                    <option value="cardio">{{ __('hero.specialty_cardio') }}</option>
                                </select>
                            </div>

                            <!-- City Selector -->
                            <div class="flex flex-col gap-1 chat-box-input px-3.5 py-2.5 rounded-xl">
                                <label class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5" for="heroCity">
                                    {{ __('hero.city_label') }}
                                </label>
                                <select
                                    class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer text-start"
                                    id="heroCity">
                                    <option value="tehran">{{ __('hero.city_tehran') }}</option>
                                    <option value="shiraz">{{ __('hero.city_shiraz') }}</option>
                                    <option value="isfahan">{{ __('hero.city_isfahan') }}</option>
                                    <option value="istanbul">{{ __('hero.city_istanbul') }}</option>
                                </select>
                            </div>

                            <!-- Travel Time Selector -->
                            <div class="flex flex-col gap-1 chat-box-input px-3.5 py-2.5 rounded-xl">
                                <label class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5" for="heroTiming">
                                    {{ __('hero.timing_label') }}
                                </label>
                                <select
                                    class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer text-start"
                                    id="heroTiming">
                                    <option value="urgent">{{ __('hero.timing_urgent') }}</option>
                                    <option value="1_2_months">{{ __('hero.timing_1_2_months') }}</option>
                                    <option value="inquiry_only">{{ __('hero.timing_inquiry_only') }}</option>
                                </select>
                            </div>
                        </div>

                        <!-- Form Bottom Actions -->
                        <div class="flex flex-wrap items-center justify-between gap-space-sm pt-2">
                            <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                <span>{{ __('hero.consultation_note') }}</span>
                            </div>
                            
                            <button
                                type="button"
                                class="bg-tertiary-container hover:bg-tertiary text-on-tertiary font-label-md text-label-md px-6 py-3 rounded-xl shadow-lg transition-transform hover:-translate-y-0.5 flex items-center gap-2">
                                {{ __('hero.btn_quote') }}
                            </button>
                        </div>
                    </div>

                    <!-- Trust Stats Bento Bar -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm mt-3">
                        <div class="bg-surface-container-lowest/70 backdrop-blur-md p-3 rounded-lg text-center shadow-sm">
                            <span class="font-headline-lg text-headline-lg text-primary font-bold block" dir="ltr">+12,400</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">
                                {{ __('hero.stat_patients_label') }}
                            </span>
                        </div>
                        <div class="bg-surface-container-lowest/70 backdrop-blur-md p-3 rounded-lg text-center shadow-sm">
                            <span class="font-headline-lg text-headline-lg text-tertiary font-bold block" dir="ltr">70% - 80%</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">
                                {{ __('hero.stat_savings_label') }}
                            </span>
                        </div>
                        <div class="bg-surface-container-lowest/70 backdrop-blur-md p-3 rounded-lg text-center shadow-sm">
                            <span class="font-headline-lg text-headline-lg text-secondary font-bold block" dir="ltr">48h</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">
                                {{ __('hero.stat_visa_label') }}
                            </span>
                        </div>
                        <div class="bg-surface-container-lowest/70 backdrop-blur-md p-3 rounded-lg text-center shadow-sm">
                            <span class="font-headline-lg text-headline-lg text-primary-container font-bold block" dir="ltr">100%</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">
                                {{ __('hero.stat_privacy_label') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Left Column: Interactive Showcase Card (Cols 8-12) -->
                <div class="lg:col-span-5">
                    <div
                        class="bg-surface-container-lowest/80 backdrop-blur-2xl rounded-xl p-space-md shadow-2xl flex flex-col gap-space-md glass-panel">
                        
                        <!-- Doctor & Hospital Visual Header -->
                        <div class="relative rounded-lg overflow-hidden h-[240px]">
                            <img class="w-full h-full object-cover"
                                alt="{{ __('hero.doctor_name') }}"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBaAap9lvs55sNQoQWFlKK04pDtlaRS75MOysGVIJgbVC_dz2JdwsK0v5OEm0T0WlCPLn8oT86mc0BkPpcLtAVk-cdAydqZf0nk7NfPDQD9F7x7OyBsHwxLczNLreMAT23Qy1kkjl55prpZBZX0asSzsdoAt6b8L5VekeuMZDi-65JKG6nEa7PngzQlLPUxN5DbbvGYSc1oJvsW2tuqyqmJVA7hSwLXxNOaySCPgfc">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-inverse-surface/80 via-inverse-surface/20 to-transparent flex flex-col justify-end p-4 text-on-primary">
                                <div
                                    class="inline-flex items-center gap-1.5 bg-primary/80 backdrop-blur-md px-2.5 py-1 rounded-full text-label-sm font-label-sm w-fit mb-1">
                                    <span class="material-symbols-outlined text-[14px]">stars</span>
                                    <span>{{ __('hero.doctor_badge') }}</span>
                                </div>
                                <span class="font-headline-md text-headline-md font-bold">
                                    {{ __('hero.doctor_name') }}
                                </span>
                                <span class="font-body-sm text-body-sm text-inverse-on-surface">
                                    {{ __('hero.doctor_specialty') }}
                                </span>
                            </div>
                        </div>

                        <!-- VIP Hospitality Sub-Card -->
                        <div
                            class="bg-surface-container/70 rounded-lg p-3.5 flex items-center justify-between gap-3 glass-subtle">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-12 h-12 rounded-lg bg-surface-container-highest overflow-hidden flex-shrink-0">
                                    <img class="w-full h-full object-cover"
                                        alt="{{ __('hero.hotel_name') }}"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7eXpyvP2og74q6I2c5oE09gh0eHHmXfkJ7MmAPGOsucQlxRbG3wzFOp83uDE0Oo-IRyowwTAhYDaIZZlql3aQrxmXEG2pfQB1pdF3Yg55zH344zAImbO34fVgtPpX4mldzqrRSda9Y7l_lK64LzEMWDJM26AlmyBKBjOJKh5TkcCT9m5iUMKe7kjeXodfNWBanojRR0tsHueSWKXWa7MSNkQQh2yTntZwaBMI7jw">
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">
                                        {{ __('hero.hospitality_title') }}
                                    </span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">
                                        {{ __('hero.hotel_name') }}
                                    </span>
                                </div>
                            </div>
                            <span
                                class="bg-secondary-container text-on-secondary-container px-2.5 py-1 rounded-full font-label-sm text-label-sm font-semibold">
                                {{ __('hero.free_nights_badge') }}
                            </span>
                        </div>

                        <!-- Dual Currency & Estimate Pill Widget -->
                        <div
                            class="bg-surface-container-lowest/90 rounded-lg p-3.5 flex items-center justify-between shadow-sm glass-card">
                            <div class="flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">
                                    {{ __('hero.package_starts_from') }}
                                </span>
                                <div class="flex items-baseline gap-1.5 text-primary">
                                    <span class="font-headline-lg text-headline-lg font-bold" id="heroPriceUsd" dir="ltr">$1,450</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">
                                        {{ __('hero.aed_equivalent') }}
                                    </span>
                                </div>
                            </div>
                            <div class="flex gap-1 bg-surface-container p-1 rounded-xl">
                                <button type="button" class="px-2.5 py-1 rounded-lg text-label-sm font-label-sm bg-primary text-on-primary">USD</button>
                                <button type="button" class="px-2.5 py-1 rounded-lg text-label-sm font-label-sm text-on-surface-variant hover:text-on-surface">AED</button>
                                <button type="button" class="px-2.5 py-1 rounded-lg text-label-sm font-label-sm text-on-surface-variant hover:text-on-surface">OMR</button>
                            </div>
                        </div>

                        <!-- Feature Bullets Preview -->
                        <div class="grid grid-cols-2 gap-2 text-on-surface-variant font-label-sm text-label-sm">
                            <div class="flex items-center gap-1.5">
                                <span>{{ __('hero.feature_interpreter') }}</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span>{{ __('hero.feature_cip_transfer') }}</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span>{{ __('hero.feature_tourist_sim') }}</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span>{{ __('hero.feature_travel_insurance') }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        
        <section class="container w-full mx-auto px-gutter-mobile lg:px-margin py-space-xl">
            <div class="flex flex-col gap-space-lg">
                <div class="flex flex-col items-center text-center gap-2 max-w-[760px] mx-auto"><span
                        class="bg-surface-container-lowest px-4 py-1.5 rounded-xl font-label-md text-label-md text-primary font-bold shadow-sm">تخصص‌های
                        جامع درمانی</span>
                    <h2 class="font-headline-xl text-headline-xl text-primary font-bold">تمرکز چندتخصصی</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">پوشش کامل تمام نیازهای پزشکی؛ از کاشت مو و خدمات زیبایی تا پیوند قلب و اندام</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2a4 4 0 0 0-4 4c0 3 4 8 4 8s4-5 4-8a4 4 0 0 0-4-4z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M9 14l-4 6m10-6l4 6"></path>
                                    <circle cx="12" cy="6" r="2" fill="currentColor"></circle>
                                    <path d="M5 10c-1.5 1-2.5 3-2.5 5 0 3 3 5 6.5 5"></path>
                                    <path d="M19 10c1.5 1 2.5 3 2.5 5 0 3-3 5-6.5 5"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Oncology</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(انکولوژی و درمان سرطان)</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    درمان‌های پیشرفته سرطان با پروتکل‌های هدفمند
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Neurosurgery -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M12 4v16m0-16c-2.5 0-4.5 1.5-4.5 4 0 1.5.8 2.8 2 3.5-1.5.5-2.5 2-2.5 3.5 0 1.8 1.2 3.2 2.8 3.7-.3.4-.8 1.3-.8 1.3h4m-1-16c2.5 0 4.5 1.5 4.5 4 0 1.5-.8 2.8-2 3.5 1.5.5 2.5 2 2.5 3.5 0 1.8-1.2 3.2-2.8 3.7.3.4.8 1.3.8 1.3h-4">
                                    </path>
                                    <circle cx="9" cy="8" r="1" fill="currentColor"></circle>
                                    <circle cx="15" cy="8" r="1" fill="currentColor"></circle>
                                    <circle cx="9" cy="15" r="1" fill="currentColor"></circle>
                                    <circle cx="15" cy="15" r="1" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Neurosurgery</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(جراحی مغز و
                                        اعصاب)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    جراحی‌های تخصصی و میکروسکوپی مغز و نخاع</p>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Spine Surgery -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2v20"></path>
                                    <rect x="8" y="3" width="8" height="3" rx="1.5"
                                        fill="currentColor" fill-opacity="0.15"></rect>
                                    <rect x="7" y="8" width="10" height="3.5" rx="1.5"
                                        fill="currentColor" fill-opacity="0.15"></rect>
                                    <rect x="6.5" y="13.5" width="11" height="3.5" rx="1.5"
                                        fill="currentColor" fill-opacity="0.15"></rect>
                                    <rect x="8" y="19" width="8" height="3" rx="1.5"
                                        fill="currentColor" fill-opacity="0.15"></rect>
                                    <path d="M5 10c0 0 2-1 2 0m10 0c0 0 2-1 2 0"></path>
                                    <path d="M4.5 15.5c0 0 2-1 2 0m11 0c0 0 2-1 2 0"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Spine Surgery</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(جراحی ستون
                                        فقرات)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    جراحی‌های دقیق ستون فقرات برای بهبود حرکت</p>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Cardiology -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M12 6c-1.5-2.5-4-3-6-2-2.5 1.2-3.5 4.5-2 7.5 2 4 8 9.5 8 9.5s6-5.5 8-9.5c1.5-3 .5-6.3-2-7.5-2-1-4.5-.5-6 2z"
                                        fill="currentColor" fill-opacity="0.12"></path>
                                    <path d="M11 2v3m4-3v3m-7 0a4 4 0 0 1 8 0"></path>
                                    <path d="M3 13h4l2-3 3 6 2-4 2 2h4"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Cardiology</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(قلب و
                                        عروق)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    مراقبت‌های فوق‌تخصصی قلب، عروق و جراحی باز</p>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Orthopedics -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M7 4a2 2 0 1 0 0 4h1l2 6-4 4a2 2 0 1 0 3 3l4-4 2 1a2 2 0 1 0 4-1l-3-8h1a2 2 0 1 0 0-4H7z"
                                        fill="currentColor" fill-opacity="0.12"></path>
                                    <circle cx="14" cy="12" r="2.5" stroke-width="1.8"
                                        fill="currentColor" fill-opacity="0.2"></circle>
                                    <path d="M11 7l4 8"></path>
                                    <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Orthopedics</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(ارتوپدی و
                                        مفاصل)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    تعویض مفاصل و اصلاح ناهنجاری‌های استخوانی</p>
                            </div>
                        </div>
                    </div>

                    <!-- 6. IVF -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="9" stroke-dasharray="1 2"></circle>
                                    <circle cx="12" cy="12" r="6" fill="currentColor"
                                        fill-opacity="0.15"></circle>
                                    <circle cx="10" cy="10" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="13" r="1.5" fill="currentColor"></circle>
                                    <path d="M2 2l4 4m14-4l-4 4"></path>
                                    <path d="M4 6l3 3"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">IVF</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(ناباروری و
                                        ژنتیک)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    درمان‌های پیشرو ناباروری با بالاترین نرخ بارداری</p>
                            </div>
                        </div>
                    </div>

                    <!-- 7. Gynecology -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 12c-2.5 0-4-2-4-5 0-3 2-4 4-4s4 1 4 4c0 3-1.5 5-4 5z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M8 7c-3-1-5 1-5 3.5 0 2.5 2 3.5 3 2.5"></path>
                                    <path d="M16 7c3-1 5 1 5 3.5 0 2.5-2 3.5-3 2.5"></path>
                                    <path d="M12 12v9m-3-3h6"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Gynecology</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(زنان و
                                        زایمان)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    خدمات تخصصی لاپاراسکوپی و سلامت زنان</p>
                            </div>
                        </div>
                    </div>

                    <!-- 8. Cosmetic -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3c-4.5 0-8 3.5-8 8 0 5 4 10 8 10s8-5 8-10c0-4.5-3.5-8-8-8z"
                                        fill="currentColor" fill-opacity="0.1"></path>
                                    <path d="M9 10h.01M15 10h.01"></path>
                                    <path d="M12 11v3l1 .5"></path>
                                    <path d="M10 16.5c1 .8 3 .8 4 0"></path>
                                    <path d="M4 7c2-1 4-1 4-1m8 0c0 0 2 0 4 1"></path>
                                    <path d="M12 2v2m-6 3l1.5 1.5m10.5-1.5L16.5 8.5"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Cosmetic</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(جراحی پلاستیک و
                                        زیبایی)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    جراحی‌های زیبایی با نتایج طبیعی</p>
                            </div>
                        </div>
                    </div>

                    <!-- 9. Weight Loss -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 4h12l-2 7c-1 3.5-3 5-4 5s-3-1.5-4-5L6 4z" fill="currentColor"
                                        fill-opacity="0.15"></path>
                                    <path d="M4 11h16"></path>
                                    <path d="M7 11v-2m3 2v-1.5m4 1.5v-2m3 2v-1.5"></path>
                                    <path d="M8 19c2 1.5 6 1.5 8 0"></path>
                                    <circle cx="12" cy="16" r="0.5" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Weight Loss</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(جراحی چاقی و
                                        متابولیک)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    گزینه‌های تخصصی جراحی لاغری و اسلیو</p>
                            </div>
                        </div>
                    </div>

                    <!-- 10. Liver Transplant -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 7c3-2 11-2 14 3 2.5 4 1 8-2 9.5-4 2-9 1-12-3.5C3.5 13 3 10 5 7z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M13 8c1 2 0 4-2 5"></path>
                                    <circle cx="15" cy="14" r="1" fill="currentColor"></circle>
                                    <path d="M10 5l-2-2m6 16l2 2"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Liver Transplant</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(پیوند
                                        کبد)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    جراحی‌های پیوند کبد با کادر فوق‌تخصصی</p>
                            </div>
                        </div>
                    </div>

                    <!-- 11. Kidney Transplant -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 5c-3 0-5 3-5 7s2 7 5 7c2.5 0 3-2 3-4 0-3-1.5-4-1-6s1-2-2-4z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M16 5c3 0 5 3 5 7s-2 7-5 7c-2.5 0-3-2-3-4 0-3 1.5-4 1-6s-1-2 2-4z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M10 13c1 1 3 1 4 0"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Kidney Transplant</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(پیوند
                                        کلیه)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    مراقبت‌های کلیوی و پیوند با استانداردهای نوین</p>
                            </div>
                        </div>
                    </div>

                    <!-- 12. Bone Marrow -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3a4 4 0 0 0-4 6c0 3 4 8 4 8s4-5 4-8a4 4 0 0 0-4-6z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <circle cx="16" cy="16" r="4" stroke-width="1.8"></circle>
                                    <path d="M19 19l3 3"></path>
                                    <circle cx="16" cy="16" r="1.5" fill="currentColor"></circle>
                                    <circle cx="12" cy="7.5" r="1.5" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3
                                    class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">Bone Marrow</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">(پیوند مغز
                                        استخوان)</span>
                                </h3>
                                <p
                                    class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    گزینه‌های پیوند مغز استخوان از دهنده سازگار</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-space-md pt-2">
                        <button
                            class="bg-error hover:opacity-90 text-on-error font-label-md text-label-md px-6 py-3 rounded-xl shadow-md transition-transform hover:-translate-y-0.5 flex items-center gap-2">نیاز
                            به راهنمایی دارید؟
                        </button>
                        <a class="bg-secondary hover:bg-on-secondary-container text-on-secondary font-label-md text-label-md px-6 py-3 rounded-xl shadow-md transition-transform hover:-translate-y-0.5 flex items-center gap-2"
                            href="https://wa.me/982188880000" target="_blank"><span class="">گفتگوی
                            واتساپ</span>
                        </a>
                </div>
            </div>
        </section>

        <section class="container w-full mx-auto px-gutter-mobile lg:px-margin py-space-xl">
            <div class="flex flex-col gap-space-lg">
                
                <!-- Section Header -->
                <div class="flex flex-col items-center text-center gap-2 max-w-190 mx-auto">
                    <span class="bg-surface-container-lowest px-4 py-1.5 rounded-xl font-label-md text-label-md text-primary font-bold shadow-sm">
                        {{ __('specialties.badge') }}
                    </span>
                    <h2 class="font-headline-xl text-headline-xl text-primary font-bold">
                        {{ __('specialties.title') }}
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        {{ __('specialties.subtitle') }}
                    </p>
                </div>

                <!-- Specialties Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
                    
                    <!-- 1. Oncology -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2a4 4 0 0 0-4 4c0 3 4 8 4 8s4-5 4-8a4 4 0 0 0-4-4z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M9 14l-4 6m10-6l4 6"></path>
                                    <circle cx="12" cy="6" r="2" fill="currentColor"></circle>
                                    <path d="M5 10c-1.5 1-2.5 3-2.5 5 0 3 3 5 6.5 5"></path>
                                    <path d="M19 10c1.5 1 2.5 3 2.5 5 0 3-3 5-6.5 5"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.oncology_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.oncology_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.oncology_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Neurosurgery -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M12 4v16m0-16c-2.5 0-4.5 1.5-4.5 4 0 1.5.8 2.8 2 3.5-1.5.5-2.5 2-2.5 3.5 0 1.8 1.2 3.2 2.8 3.7-.3.4-.8 1.3-.8 1.3h4m-1-16c2.5 0 4.5 1.5 4.5 4 0 1.5-.8 2.8-2 3.5 1.5.5 2.5 2 2.5 3.5 0 1.8-1.2 3.2-2.8 3.7.3.4.8 1.3.8 1.3h-4">
                                    </path>
                                    <circle cx="9" cy="8" r="1" fill="currentColor"></circle>
                                    <circle cx="15" cy="8" r="1" fill="currentColor"></circle>
                                    <circle cx="9" cy="15" r="1" fill="currentColor"></circle>
                                    <circle cx="15" cy="15" r="1" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.neurosurgery_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.neurosurgery_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.neurosurgery_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Spine Surgery -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2v20"></path>
                                    <rect x="8" y="3" width="8" height="3" rx="1.5"
                                        fill="currentColor" fill-opacity="0.15"></rect>
                                    <rect x="7" y="8" width="10" height="3.5" rx="1.5"
                                        fill="currentColor" fill-opacity="0.15"></rect>
                                    <rect x="6.5" y="13.5" width="11" height="3.5" rx="1.5"
                                        fill="currentColor" fill-opacity="0.15"></rect>
                                    <rect x="8" y="19" width="8" height="3" rx="1.5"
                                        fill="currentColor" fill-opacity="0.15"></rect>
                                    <path d="M5 10c0 0 2-1 2 0m10 0c0 0 2-1 2 0"></path>
                                    <path d="M4.5 15.5c0 0 2-1 2 0m11 0c0 0 2-1 2 0"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.spine_surgery_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.spine_surgery_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.spine_surgery_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Cardiology -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M12 6c-1.5-2.5-4-3-6-2-2.5 1.2-3.5 4.5-2 7.5 2 4 8 9.5 8 9.5s6-5.5 8-9.5c1.5-3 .5-6.3-2-7.5-2-1-4.5-.5-6 2z"
                                        fill="currentColor" fill-opacity="0.12"></path>
                                    <path d="M11 2v3m4-3v3m-7 0a4 4 0 0 1 8 0"></path>
                                    <path d="M3 13h4l2-3 3 6 2-4 2 2h4"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.cardiology_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.cardiology_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.cardiology_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Orthopedics -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M7 4a2 2 0 1 0 0 4h1l2 6-4 4a2 2 0 1 0 3 3l4-4 2 1a2 2 0 1 0 4-1l-3-8h1a2 2 0 1 0 0-4H7z"
                                        fill="currentColor" fill-opacity="0.12"></path>
                                    <circle cx="14" cy="12" r="2.5" stroke-width="1.8"
                                        fill="currentColor" fill-opacity="0.2"></circle>
                                    <path d="M11 7l4 8"></path>
                                    <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.orthopedics_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.orthopedics_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.orthopedics_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 6. IVF -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="9" stroke-dasharray="1 2"></circle>
                                    <circle cx="12" cy="12" r="6" fill="currentColor"
                                        fill-opacity="0.15"></circle>
                                    <circle cx="10" cy="10" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="13" r="1.5" fill="currentColor"></circle>
                                    <path d="M2 2l4 4m14-4l-4 4"></path>
                                    <path d="M4 6l3 3"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.ivf_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.ivf_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.ivf_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 7. Gynecology -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 12c-2.5 0-4-2-4-5 0-3 2-4 4-4s4 1 4 4c0 3-1.5 5-4 5z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M8 7c-3-1-5 1-5 3.5 0 2.5 2 3.5 3 2.5"></path>
                                    <path d="M16 7c3-1 5 1 5 3.5 0 2.5-2 3.5-3 2.5"></path>
                                    <path d="M12 12v9m-3-3h6"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.gynecology_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.gynecology_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.gynecology_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 8. Cosmetic -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3c-4.5 0-8 3.5-8 8 0 5 4 10 8 10s8-5 8-10c0-4.5-3.5-8-8-8z"
                                        fill="currentColor" fill-opacity="0.1"></path>
                                    <path d="M9 10h.01M15 10h.01"></path>
                                    <path d="M12 11v3l1 .5"></path>
                                    <path d="M10 16.5c1 .8 3 .8 4 0"></path>
                                    <path d="M4 7c2-1 4-1 4-1m8 0c0 0 2 0 4 1"></path>
                                    <path d="M12 2v2m-6 3l1.5 1.5m10.5-1.5L16.5 8.5"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.cosmetic_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.cosmetic_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.cosmetic_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 9. Weight Loss -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 4h12l-2 7c-1 3.5-3 5-4 5s-3-1.5-4-5L6 4z" fill="currentColor"
                                        fill-opacity="0.15"></path>
                                    <path d="M4 11h16"></path>
                                    <path d="M7 11v-2m3 2v-1.5m4 1.5v-2m3 2v-1.5"></path>
                                    <path d="M8 19c2 1.5 6 1.5 8 0"></path>
                                    <circle cx="12" cy="16" r="0.5" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.weight_loss_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.weight_loss_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.weight_loss_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 10. Liver Transplant -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 7c3-2 11-2 14 3 2.5 4 1 8-2 9.5-4 2-9 1-12-3.5C3.5 13 3 10 5 7z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M13 8c1 2 0 4-2 5"></path>
                                    <circle cx="15" cy="14" r="1" fill="currentColor"></circle>
                                    <path d="M10 5l-2-2m6 16l2 2"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.liver_transplant_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.liver_transplant_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.liver_transplant_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 11. Kidney Transplant -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 5c-3 0-5 3-5 7s2 7 5 7c2.5 0 3-2 3-4 0-3-1.5-4-1-6s1-2-2-4z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M16 5c3 0 5 3 5 7s-2 7-5 7c-2.5 0-3-2-3-4 0-3 1.5-4 1-6s-1-2 2-4z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <path d="M10 13c1 1 3 1 4 0"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.kidney_transplant_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.kidney_transplant_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.kidney_transplant_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 12. Bone Marrow -->
                    <div
                        class="relative bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-2xl shadow-md border border-white/80 dark:border-white/10 hover:shadow-xl hover:-translate-y-0.5 transition-all glass-card flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4 flex-1">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed/30 border border-tertiary-container/30 flex items-center justify-center flex-shrink-0 text-tertiary shadow-sm">
                                <svg class="w-8 h-8 stroke-tertiary fill-none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3a4 4 0 0 0-4 6c0 3 4 8 4 8s4-5 4-8a4 4 0 0 0-4-6z"
                                        fill="currentColor" fill-opacity="0.15"></path>
                                    <circle cx="16" cy="16" r="4" stroke-width="1.8"></circle>
                                    <path d="M19 19l3 3"></path>
                                    <circle cx="16" cy="16" r="1.5" fill="currentColor"></circle>
                                    <circle cx="12" cy="7.5" r="1.5" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <h3 class="font-headline-md text-[17px] font-bold text-on-surface flex items-center gap-2 flex-wrap">
                                    <span class="text-tertiary font-bold">{{ __('specialties.bone_marrow_title') }}</span>
                                    <span class="text-[13px] font-normal text-on-surface-variant">{{ __('specialties.bone_marrow_sub') }}</span>
                                </h3>
                                <p class="font-body-sm text-[13px] text-on-surface-variant mt-1 leading-relaxed truncate">
                                    {{ __('specialties.bone_marrow_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Bottom Actions -->
                <div class="flex flex-wrap items-center justify-center gap-space-md pt-2">
                    <button
                        type="button"
                        class="bg-error hover:opacity-90 text-on-error font-label-md text-label-md px-6 py-3 rounded-xl shadow-md transition-transform hover:-translate-y-0.5 flex items-center gap-2">
                        {{ __('specialties.btn_need_help') }}
                    </button>
                    <a 
                        class="bg-secondary hover:bg-on-secondary-container text-on-secondary font-label-md text-label-md px-6 py-3 rounded-xl shadow-md transition-transform hover:-translate-y-0.5 flex items-center gap-2"
                        href="https://wa.me/982188880000" 
                        target="_blank" 
                        rel="noopener noreferrer">
                        <span>{{ __('specialties.btn_whatsapp') }}</span>
                    </a>
                </div>

            </div>
        </section>

        <section class="container w-full mx-auto px-gutter-mobile lg:px-margin py-space-xl">
            <div class="flex flex-col gap-space-lg">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
                    <div class="flex flex-col gap-2">
                        <span class="font-label-md text-label-md text-secondary font-bold">بسته‌های درمانی و
                            توریستی All-Inclusive</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary">پکیج‌های برگزیده؛ سفری بدون
                            استرس به سوی سلامتی</h2>
                    </div>
                    <div class="flex flex-wrap gap-2"><button
                            class="px-4 py-2 rounded-xl font-label-md text-label-md bg-primary text-on-primary transition-colors">همه
                            پکیج‌ها</button><button
                            class="px-4 py-2 rounded-xl font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface-variant transition-colors">جراحی
                            پلاستیک</button><button
                            class="px-4 py-2 rounded-xl font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface-variant transition-colors">ناباروری
                            و IVF</button><button
                            class="px-4 py-2 rounded-xl font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface-variant transition-colors">دندانپزشکی</button>
                    </div>
                </div>
                <!-- 3-Column Bento Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
                    <!-- Package Card 1 -->
                    <div
                        class="bg-surface-container-lowest/85 backdrop-blur-xl rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all flex flex-col glass-card">
                        <div class="relative h-[220px]">
                            <img class="w-full h-full object-cover"
                                data-alt="Close up aesthetic medical clinic portrait of a serene female patient post subtle cosmetic enhancement smiling softly, soft warm lighting, calm luxury medical spa clinic background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuArCivXdLqWk6Zcp-d4QZDH8ZY683II6cFO2FXNyW8YIBmV_bzHwxRbL6T-1n3Es0i__B1PzC8K5i_QhF6ZHjJy0BE4Pc0jFQstbXteiGHHxVVa52MOAwdUiD2tsQXPOrRR8eD7U3Q7XYHrQ5NCMPsnYSRYMTOJak7S3caOQdUBPbHXCmWnRHG-AIdc5_yuZ7YIpQGnytYjKgKLfDI5090UC9AkgMPhYJperY8roUs">
                            <div
                                class="absolute top-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1 rounded-full font-label-sm text-label-sm text-primary font-bold shadow-sm">
                                پکیج پرطرفدار تهران
                            </div>
                            <div
                                class="absolute bottom-3 left-3 bg-inverse-surface/80 backdrop-blur-md text-inverse-on-surface px-2.5 py-1 rounded-md font-label-sm text-label-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-[15px] text-tertiary-fixed">star</span>
                                <span class="">۴.۹ (۱۸۴ نظر مثبت)</span>
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
                            <div class="flex flex-col gap-space-sm">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-headline-md text-headline-md font-bold text-on-surface">
                                        رینوپلاستی طبیعی و گوشتی پریمیوم</h3>
                                    <span
                                        class="text-secondary font-label-sm text-label-sm bg-secondary-container/60 px-2 py-0.5 rounded-full font-semibold">بیمارستان
                                        پارس</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    عمل توسط جراح فوق‌تخصص پلاستیک و ترمیم زیبایی، آزمایش‌های پیش از عمل، اسپلینت
                                    تنفسی سیلیکونی بدون درد و تامپون.
                                </p>
                                <!-- Inclusions Checklist -->
                                <div
                                    class="bg-surface-container/40 p-3 rounded-lg flex flex-col gap-2 font-label-sm text-label-sm text-on-surface">
                                    <div class="flex items-center gap-2">
                                        <span class="">۷ شب اقامت در هتل ۵ ستاره با صبحانه و همراه</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="">ویزای درمان فوری T-Visa و بیمه درمان سامان</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="">مترجم اختصاصی عربی/انگلیسی در تمامی مراحل
                                            بالینی</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Price & Add Action -->
                            <div class="flex items-center justify-between pt-space-sm">
                                <div class="flex flex-col">
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">هزینه کامل
                                        پکیج:</span>
                                    <div class="flex items-baseline gap-1 text-primary">
                                        <span class="font-headline-lg text-headline-lg font-bold"
                                            dir="ltr">$1,650</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">/ ۶,۰۶۰
                                            درهم</span>
                                    </div>
                                </div>
                                <button
                                    class="bg-tertiary-container hover:bg-tertiary text-on-tertiary font-label-md text-label-md px-5 py-2.5 rounded-xl shadow-md transition-colors flex items-center gap-1.5"><span
                                        class="material-symbols-outlined text-[18px]">add_shopping_cart</span><span
                                        class="">افزودن به سبد درمان</span></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <section class="container w-full mx-auto bg-surface-container-high/40 py-space-xl">
            <div class="max-w-[1360px] mx-auto px-gutter-mobile lg:px-margin flex flex-col gap-space-lg">
                <div class="flex flex-col items-center text-center gap-2 max-w-[700px] mx-auto">
                    <span
                        class="bg-surface-container-lowest px-4 py-1.5 rounded-xl font-label-md text-label-md text-primary font-bold shadow-sm">مسیر
                        روشن و آسوده بیمار</span>
                    <h2 class="font-headline-xl text-headline-xl text-primary font-bold">
                        مراحل سفر درمانی شما از خانه تا بهبودی کامل
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        تمامی امور بوروکراتیک، هماهنگی‌های تخصصی بیمارستانی و اقامت به صورت کامل توسط تیم کنسیرژ
                        پزشکی پرشیا مدیس انجام می‌شود.
                    </p>
                </div>
                <!-- 4-Phase Desktop Horizontal Progression Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md relative mt-4">
                    <!-- Step 1 -->
                    <div
                        class="bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-xl shadow-md flex flex-col gap-3 relative">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-10 h-10 rounded-full bg-primary text-on-primary font-headline-md text-headline-md font-bold flex items-center justify-center">
                                ۱
                            </span>
                            <span class="material-symbols-outlined text-primary text-[26px]">upload_file</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md font-bold text-on-surface">مشاوره آنلاین و طرح
                            درمان</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            ارسال پرونده و مدارک پزشکی از طریق وب‌سایت یا واتساپ؛ ارزیابی دقیق توسط جراح ارشد و
                            ارائه پیش‌فاکتور مکتوب طی کمتر از ۱۲ ساعت.
                        </p>
                        <div
                            class="pt-2 font-label-sm text-label-sm text-secondary font-semibold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">task_alt</span>
                            <span class="">کاملاً رایگان و بدون تعهد مالی</span>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div
                        class="bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-xl shadow-md flex flex-col gap-3 relative">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-10 h-10 rounded-full bg-primary text-on-primary font-headline-md text-headline-md font-bold flex items-center justify-center">
                                ۲
                            </span>
                            <span class="material-symbols-outlined text-secondary text-[26px]">airplane_ticket</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md font-bold text-on-surface">ویزای T-Visa و رزرو
                            لوکس</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            اخذ تأییدیه رسمی ویزای درمانی ظرف ۴۸ ساعت کاری با معرفی‌نامه بیمارستان؛ رزرو هتل ۵ ستاره
                            و هماهنگی تاریخ جراحی قطعی.
                        </p>
                        <div
                            class="pt-2 font-label-sm text-label-sm text-secondary font-semibold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">task_alt</span>
                            <span class="">امکان ویزا برای همراه بیمار</span>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div
                        class="bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-xl shadow-md flex flex-col gap-3 relative">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-10 h-10 rounded-full bg-primary text-on-primary font-headline-md text-headline-md font-bold flex items-center justify-center">
                                ۳
                            </span>
                            <span class="material-symbols-outlined text-tertiary text-[26px]">local_hospital</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md font-bold text-on-surface">استقبال CIP و انجام
                            درمان</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            استقبال در سالن تشریفات اختصاصی فرودگاه، تحویل سیم‌کارت، انتقال با خودروی تشریفاتی،
                            همراهی مترجم مقیم و انجام عمل در بیمارستان.
                        </p>
                        <div
                            class="pt-2 font-label-sm text-label-sm text-secondary font-semibold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">task_alt</span>
                            <span class="">مترجم هم‌زبان در تمامی ساعات بستری</span>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div
                        class="bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-xl shadow-md flex flex-col gap-3 relative">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-10 h-10 rounded-full bg-primary text-on-primary font-headline-md text-headline-md font-bold flex items-center justify-center">
                                ۴
                            </span>
                            <span
                                class="material-symbols-outlined text-primary-container text-[26px]">health_and_safety</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md font-bold text-on-surface">نقاهت، گواهی پرواز
                            و پیگیری</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            ویزیت چک‌آپ نهایی، دریافت گواهی فیت تو فلای (Fit-to-Fly)، بسته‌های دارویی بازگشت و
                            پیگیری وضعیت بهبودی تا ۶ ماه به صورت دوره‌ای.
                        </p>
                        <div
                            class="pt-2 font-label-sm text-label-sm text-secondary font-semibold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">task_alt</span>
                            <span class="">پشتیبانی تله‌مدیسین پس از بازگشت</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container w-full mx-auto px-gutter-mobile lg:px-margin py-space-xl">
            <div
                class="bg-surface-container-lowest/90 backdrop-blur-2xl rounded-xl p-space-lg shadow-xl grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center glass-panel">
                <!-- Care Lead Portrait & Direct Verification -->
                <div class="lg:col-span-4 flex flex-col items-center text-center">
                    <div class="w-44 h-44 rounded-full overflow-hidden shadow-xl mb-4 bg-surface-container">
                        <img class="w-full h-full object-cover"
                            data-alt="Professional portrait of Dr. Maryam Saeedi, head patient care manager in warm medical attire smiling re-assuringly, white and serene pearl background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpzW8p8qkJzKC3tVCcj4mZDJpPovhjs6H2Y9kb_rSdf3H4lf1kagvWLOm6-V6kNlQ91Hmw8QV5mIRkhPIALJVaO25L_QJXpTQBqif6sg5DObkZxrNBNCq1DEx8dgMzovNdEZJkhjRCHax1oknEwek5Iftg72Kqo3tIdJUSmlf3eeqzJgVMvsLl_rv0JSL5SMcbkVCa6N23j9ANGOE5UCcQ_d5cAnNrGhuRfZDR6iQ">
                    </div>
                    <span class="font-headline-md text-headline-md font-bold text-on-surface">دکتر مریم
                        سعیدی</span>
                    <span class="font-body-sm text-body-sm text-primary font-semibold">سرپرست هماهنگی بیماران
                        بین‌الملل و کنسیرژ VIP</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">مسلط به زبان‌های عربی،
                        انگلیسی و فارسی</span>
                    <div
                        class="flex items-center gap-1 text-tertiary font-label-sm text-label-sm mt-3 bg-tertiary-fixed/30 px-3 py-1 rounded-full">
                        <span class="material-symbols-outlined text-[16px]">support_agent</span>
                        <span class="">پاسخگویی مستقیم کمتر از ۵ دقیقه</span>
                    </div>
                </div>
                <!-- Lead Details & Direct Chat Actions -->
                <div class="lg:col-span-8 flex flex-col gap-space-md">
                    <div class="flex flex-col gap-2">
                        <span class="font-label-md text-label-md text-secondary font-bold">پشتیبانی VIP در تمامی
                            لحظات</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary font-bold">
                            مشاور پزشکی شخصی شما؛ در کنار شما از اولین پیام تا بازگشت امن به خانه
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            نگرانی‌های زبانی یا دشواری‌های مربوط به اقامت را فراموش کنید. سرپرست پرونده شما شخصاً
                            کلیه ترتیبات بستری، رزرو اتاق اختصاصی بیمارستان، ترانسفر فرودگاهی و مترجم همراه را
                            مدیریت خواهد کرد.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                        <div class="bg-surface-container/60 p-3 rounded-lg flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary text-[22px] mt-0.5">chat</span>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md font-bold text-on-surface">مشاوره مستقیم
                                    واتساپ</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">ارسال عکس و مدارک
                                    برای تحلیل رایگان توسط پزشک</span>
                            </div>
                        </div>
                        <div class="bg-surface-container/60 p-3 rounded-lg flex items-start gap-3">
                            <span class="material-symbols-outlined text-secondary text-[22px] mt-0.5">translate</span>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md font-bold text-on-surface">مترجم مقیم
                                    بیمارستان</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">حضور فیزیکی در کلیه
                                    جلسات معاینه و اتاق بستری</span>
                            </div>
                        </div>
                    </div>
                    <!-- Direct CTA Buttons -->
                    <div class="flex flex-wrap items-center gap-space-sm pt-2"><a
                            class="bg-secondary hover:bg-on-secondary-container text-on-secondary font-label-md text-label-md px-6 py-3 rounded-xl shadow-md flex items-center gap-2 transition-transform hover:-translate-y-0.5"
                            href="https://wa.me/982188880000" target="_blank"><span
                                class="material-symbols-outlined text-[20px]">forum</span><span class="">گفتگوی
                                ۲۴ ساعته در واتساپ</span></a><button
                            class="bg-surface-container-high hover:bg-surface-variant text-on-surface font-label-md text-label-md px-6 py-3 rounded-xl shadow-sm flex items-center gap-2 transition-colors"><span
                                class="material-symbols-outlined text-[20px]">calendar_today</span><span
                                class="">رزرو تماس تصویری با پزشک معتمد</span></button></div>
                </div>
            </div>
        </section>

        <section class="container w-full mx-auto px-gutter-mobile lg:px-margin pb-space-xl">
            <div class="flex flex-col gap-space-lg">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
                    <div class="flex flex-col gap-2">
                        <span class="font-label-md text-label-md text-primary font-bold">تجربه مراجعین بین‌المللی
                            ما</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary font-bold">داستان‌های واقعی سلامت
                            و رضایت</h2>
                    </div>
                    <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-secondary text-[18px]">verified</span>
                        <span class="">تمام نظرات دارای کد رهگیری بیمارستانی و احراز هویت هستند</span>
                    </div>
                </div>
                <!-- Testimonial Cards Mosaic Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <!-- Review 1: UAE Patient -->
                    <div
                        class="bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-xl shadow-md flex flex-col justify-between gap-space-md glass-card">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-11 h-11 rounded-full bg-surface-container-highest overflow-hidden">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Portrait of an Arabic gentleman smiling wearing traditional white kandura attire with Dubai skyline background"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgGwUAC7WNJrSY2YVREtQSqFzp2L9PhJkyPs0oQPnWuDvBrTX4wdtq1vhE37WAPycwfiCkUm9ueEcO8tUQNBBWr6NIEQUxrioJynFbrc9CQ9bc9KWLEkXF2nLl9yY_kPGXmwXftsbGVzYWbPYtfZSJYLdfZbS2D8kycs-jvmknHyzXqccNZuW7w30nvPCXYZSNdtKvQNXAuJun4_WWw0SaL4SOVAWvechhL5h5Mn0">
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md font-bold text-on-surface">احمد
                                            المنصوری</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">دبی،
                                            امارات متحده عربی</span>
                                    </div>
                                </div>
                                <div class="flex text-tertiary">
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                </div>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                «برای عمل جراحی بینی به تهران آمدم. دقت پزشکان، امکانات بیمارستان پارس و هتل اسپیناس
                                فوق‌العاده بودند. نسبت به دبی بیش از ۷۰ درصد در هزینه‌ها صرفه‌جویی کردم در حالی که
                                کیفیت کار شگفت‌انگیز بود.»
                            </p>
                        </div>
                        <div
                            class="pt-3 bg-surface-container/30 px-3 py-2 rounded-lg flex items-center justify-between font-label-sm text-label-sm text-on-surface">
                            <span class="">نوع درمان: <strong>رینوپلاستی و انحراف تیغه</strong></span>
                            <span class="text-secondary font-semibold">پرونده: PM-9482</span>
                        </div>
                    </div>
                    <!-- Review 2: Oman Patient -->
                    <div
                        class="bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-xl shadow-md flex flex-col justify-between gap-space-md glass-card">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-11 h-11 rounded-full bg-surface-container-highest overflow-hidden">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Portrait of an Omani middle aged woman with elegant modern modest attire smiling warmly in a clinical consultation lounge"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLp47DboDs1sonkdFSCKHqNL0GTL_Z7FZR6pdHxFjEPgTmUYKDhyglZ5PUFJDXpi7iGCIXhPcppOtRSz9mrpYHPS24JAYthY98ZdUwFY550g_b5UAJC8bD-_7rD9MZd_eDOFXJjwhWM0KS1mvS-YIo_pZMIbI_KuK2vNElUYTWD5j709vl_gDjtkHzOhAdDbbBQJk96ez9YnWBZ7VMFM5M1aw6BrfYd0nftTg5VlQ">
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md font-bold text-on-surface">فاطمة
                                            البلوشی</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">مسقط،
                                            عمان</span>
                                    </div>
                                </div>
                                <div class="flex text-tertiary">
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                </div>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                «بعد از دو تلاش ناموفق در کشورهای دیگر، با راهنمایی تیم پرشیا مدیس به مرکز باروری
                                شیراز رفتیم. آرامش و مراقبت‌های ۲۴ ساعته خانم دکتر سعیدی باعث شد اکنون فرزندمان را
                                در آغوش داشته باشیم.»
                            </p>
                        </div>
                        <div
                            class="pt-3 bg-surface-container/30 px-3 py-2 rounded-lg flex items-center justify-between font-label-sm text-label-sm text-on-surface">
                            <span class="">نوع درمان: <strong>میکرواینجکشن IVF شیراز</strong></span>
                            <span class="text-secondary font-semibold">پرونده: PM-8120</span>
                        </div>
                    </div>
                    <!-- Review 3: Kuwait Patient -->
                    <div
                        class="bg-surface-container-lowest/80 backdrop-blur-xl p-space-md rounded-xl shadow-md flex flex-col justify-between gap-space-md glass-card">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-11 h-11 rounded-full bg-surface-container-highest overflow-hidden">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Portrait of a distinguished man from Kuwait wearing formal business suit outdoors with calm warm natural lighting"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9tHjZcpPThXCsbRIW50ctzgwVhrMg3ztDy9XRl4O5Ym35LxsI3tlcWStIA4ag60ROM2oFMrYXHgODrKmxXjGO5CmyZMZPtH0_io8ylmAe1XOtEIWvabpvtXJZfBLZqqjN64EDMdOfTH1qju2PF40sNAc39OHcXu1rK5lLW6wfiCPnto_qncKFYXKJlDbXybP2kEB7j97aW-q37yrc4cKa0fJP8tmAa9TnH0RBzq0">
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md font-bold text-on-surface">خالد
                                            الصباح</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">کویت</span>
                                    </div>
                                </div>
                                <div class="flex text-tertiary">
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                </div>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                «خدمات تشریفات فرودگاه CIP و همراهی بی‌نقص مترجم از بدو ورود تا ترخیص از بیمارستان
                                فوق‌العاده حرفه‌ای بود. کاشت دندان و طراحی لبخند در بالاترین سطح استاندارد جهانی به
                                پایان رسید.»
                            </p>
                        </div>
                        <div
                            class="pt-3 bg-surface-container/30 px-3 py-2 rounded-lg flex items-center justify-between font-label-sm text-label-sm text-on-surface">
                            <span class="">نوع درمان: <strong>ایمپلنت دیجیتال زیمر</strong></span>
                            <span class="text-secondary font-semibold">پرونده: PM-7734</span>
                        </div>
                    </div>
                </div>
                <!-- Quick Interactive Sticky Bottom Assessment Bar -->
                <div
                    class="bg-gradient-to-r from-primary via-primary-container to-secondary text-on-primary p-space-md rounded-xl shadow-xl flex flex-col md:flex-row items-center justify-between gap-space-md mt-4">
                    <div class="flex items-center gap-space-md">
                        <div
                            class="w-12 h-12 rounded-xl bg-on-primary/10 flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[28px]">clinical_notes</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-headline-md text-headline-md font-bold">آماده ارزیابی پرونده و دریافت
                                نوبت پزشک هستید؟</span>
                            <span class="font-body-sm text-body-sm text-inverse-on-surface">تنها در ۳ مرحله ساده،
                                مدارک پزشکی خود را بارگذاری و برنامه سفر درمانی را دریافت نمایید.</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-space-sm flex-shrink-0">
                        <button
                            class="bg-tertiary-container hover:bg-tertiary text-on-tertiary px-6 py-3 rounded-xl font-label-md text-label-md shadow-lg transition-transform hover:-translate-y-0.5">ثبت
                            پرونده و ویزای سلامت T-Visa</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-slot:scripts>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const specialtySelect = document.getElementById('heroSpecialty');
                const heroPriceUsd = document.getElementById('heroPriceUsd');

                const priceMap = {
                    'rhinoplasty': '$1,450',
                    'dental': '$1,350',
                    'ivf': '$2,800',
                    'lasik': '$850',
                    'cardio': '$4,900'
                };

                if (specialtySelect && heroPriceUsd) {
                    specialtySelect.addEventListener('change', (e) => {
                        const val = e.target.value;
                        if (priceMap[val]) {
                            heroPriceUsd.textContent = priceMap[val];
                        }
                    });
                }
            });
        </script>
    </x-slot:scripts>
    
</x-layouts.app>
