<x-layouts.app title="پرشیا مدیس | رزرو پروازهای درمانی و هتل‌های نقاهتگاهی VIP">
    <div
        x-data="{
            activeHotelTab: 'all',
            flightRoute: 'doha',
            flightName: 'قطر ایرویز (DOH-THR)',
            flightPrice: 185,
            hotelOption: 'azadi',
            hotelName: 'هتل پارسیان آزادی (۵ شب)',
            hotelPrice: 450,
            get subtotal() {
                return this.flightPrice + this.hotelPrice;
            },
            get discount() {
                return Math.round(this.subtotal * 0.12);
            },
            get total() {
                return this.subtotal - this.discount;
            }
        }"
        class="flex flex-col w-full relative overflow-hidden"
    >
        <div class="max-w-[1360px] mx-auto px-gutter-mobile lg:px-margin pt-6 pb-space-xl flex flex-col gap-space-xl w-full">

            <!-- HERO & OVERVIEW BANNER (Luminous Light Mode Glassmorphism) -->
            <section class="relative w-full rounded-3xl bg-surface-container-lowest/80 backdrop-blur-2xl p-space-lg lg:p-space-xl shadow-xl overflow-hidden glass-panel border border-white/80">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <!-- Text & Headline Area -->
                    <div class="lg:col-span-7 flex flex-col items-start text-right space-y-5">
                        <x-badge variant="glass" icon="flight_takeoff" class="self-start text-primary">
                            مرکز تخصصی پروازهای مدیکال، پاویون CIP فرودگاهی و هتل‌های استریل نقاهت
                        </x-badge>

                        <div class="flex flex-col gap-2">
                            <h1 class="font-headline-xl text-headline-xl text-on-surface leading-tight font-bold">
                                رزرو پرواز اختصاصی درمانی، <br/>
                                <span class="text-primary">خدمات CIP فرودگاهی و اقامتگاه‌های استریل نقاهت</span>
                            </h1>

                            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed max-w-2xl mt-1">
                                سفر سلامت خود را با بالاترین استانداردهای ایمنی آغاز کنید. رزرو صندلی‌های ویژه پزشکی و برانکارد پرواز، دریافت مجوز مدیکال هوایی (MEDIF/FIT)، اسکورت ویژه تشریفات فرودگاه امام خمینی (ره) و اقامت در سوئیت‌های ۵ ستاره مجهز به تجهیزات بیمارستانی و مراقبت‌های پس از عمل.
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <x-button
                                href="#package-builder"
                                variant="primary"
                                size="lg"
                                icon="arrow_back"
                                iconPosition="left"
                            >
                                رزرو همزمان پرواز و هتل (با ۱۲٪ تخفیف)
                            </x-button>

                            <x-button
                                href="#flights-section"
                                variant="glass"
                                size="lg"
                                icon="search"
                                iconPosition="right"
                            >
                                جستجوی پروازهای پزشکی
                            </x-button>
                        </div>

                        <!-- Quick Stats Cards Row -->
                        <div class="grid grid-cols-3 gap-4 w-full pt-4">
                            <div class="p-4 rounded-2xl bg-surface-container-lowest/90 backdrop-blur-xl border border-white/80 shadow-sm flex flex-col items-start glass-card">
                                <span class="font-headline-lg text-headline-lg font-bold text-primary" dir="ltr">+۳,۸۰۰</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant mt-1">پرواز پزشکی و CIP موفق</span>
                            </div>

                            <div class="p-4 rounded-2xl bg-surface-container-lowest/90 backdrop-blur-xl border border-white/80 shadow-sm flex flex-col items-start glass-card">
                                <span class="font-headline-lg text-headline-lg font-bold text-secondary">۸ هتل تاپ</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant mt-1">دارای گواهی استریل بالینی</span>
                            </div>

                            <div class="p-4 rounded-2xl bg-surface-container-lowest/90 backdrop-blur-xl border border-white/80 shadow-sm flex flex-col items-start glass-card">
                                <span class="font-headline-lg text-headline-lg font-bold text-tertiary-container">۱۰۰٪ رایگان</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant mt-1">ترانسفر مستقیم آمبولانسی CIP</span>
                            </div>
                        </div>
                    </div>

                    <!-- Visual Hero Media Panel -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative w-full h-[400px] rounded-3xl overflow-hidden shadow-2xl border-2 border-white bg-surface-container-highest/60">
                            <img
                                alt="تیم پزشکی و تشریفات فرودگاهی پرشیا مدیس در سالن تشریفات CIP"
                                class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAP8GwEG5sG4XTeuxzTg9hQ4mmjooMqjQnkajNjdQ_JPvjkwFlfn_MkfYsfBS9x_MYRtGfRg4aqfoTAs7xvvZjBP10Xl7ztRwdPsQOsrDOc0r9qrTI_hVyL2EyRF2_lykXB_hN_y6KlfoVGmFi1BSEaOWDySzz13zSFbCkEH2puZa4Xar5zzFuPIVb57RtV5zFS8MZzXZT9a3eHwr6KYX-eq8jkxP1QaNA4LtW3iKE"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/85 via-inverse-surface/25 to-transparent"></div>

                            <div class="absolute bottom-5 right-5 left-5 p-4 rounded-2xl bg-surface-container-lowest/90 backdrop-blur-xl border border-white/90 shadow-xl flex items-center justify-between text-on-surface glass-panel">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-primary-container/20 border border-primary/30 flex items-center justify-center text-primary shadow-sm">
                                        <span class="material-symbols-outlined text-2xl">flight_land</span>
                                    </div>
                                    <div>
                                        <h4 class="font-label-md text-label-md font-bold text-on-surface">استقبال ویژه پای پلکان هواپیما</h4>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant">ترخیص گمرکی، تحویل چمدان و خودرو تا لابی هتل</p>
                                    </div>
                                </div>

                                <x-badge variant="teal-soft">CIP فعال</x-badge>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 1: FLIGHT SEARCH & 6 ROUTES GRID -->
            <section id="flights-section" class="flex flex-col gap-space-lg">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-xs">
                    <div>
                        <div class="flex items-center gap-2 text-primary font-label-md text-label-md mb-1">
                            <span class="material-symbols-outlined text-[18px]">flight</span>
                            <span>مسیرهای پروازی مستقیم بین‌المللی</span>
                        </div>
                        <h2 class="font-headline-xl text-headline-xl text-on-surface font-bold">
                            پروازهای پزشکی، تجهیزات برانکارد و هماهنگی مجوز MEDIF
                        </h2>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-md">
                        پذیرش اولویت‌دار بیماران، بار مجاز پزشکی اضافی و هماهنگی پزشک همراه پرواز با خطوط هوایی معتبر منطقه.
                    </p>
                </div>

                <!-- Flight Search Bar -->
                <div class="p-6 rounded-2xl bg-surface-container-lowest/85 backdrop-blur-xl border border-white/80 shadow-md glass-panel">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="flex flex-col gap-1 chat-box-input px-3.5 py-2.5 rounded-xl">
                            <label class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-primary">flight_takeoff</span>
                                مبدأ پرواز:
                            </label>
                            <select class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer pr-0.5">
                                <option value="DXB">دبی (Dubai - DXB)</option>
                                <option value="IST">استانبول (Istanbul - IST)</option>
                                <option value="DOH">دوحه (Doha - DOH)</option>
                                <option value="MCT">مسقط (Muscat - MCT)</option>
                                <option value="BGW">بغداد (Baghdad - BGW)</option>
                                <option value="GYD">باکو (Baku - GYD)</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-1 chat-box-input px-3.5 py-2.5 rounded-xl">
                            <label class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-secondary">flight_land</span>
                                مقصد درمانی:
                            </label>
                            <select class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer pr-0.5">
                                <option value="IKA">تهران - فرودگاه بین‌المللی امام خمینی (IKA)</option>
                                <option value="SYZ">شیراز - فرودگاه شهید دستغیب (SYZ)</option>
                                <option value="MHD">مشهد - فرودگاه شهید هاشمی‌نژاد (MHD)</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-1 chat-box-input px-3.5 py-2.5 rounded-xl">
                            <label class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-tertiary">airline_seat_flat</span>
                                کلاس پروازی و نیاز ویژه:
                            </label>
                            <select class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer pr-0.5">
                                <option value="eco">اکونومی ویژه بیمار (ویلچر فرودگاهی)</option>
                                <option value="biz">بیزینس کلاس (تخت‌خواب کامل و استراحت)</option>
                                <option value="stretcher">پرواز برانکارد مدیکال (همراه با پرستار)</option>
                            </select>
                        </div>

                        <div class="flex items-end">
                            <x-button href="#package-builder" variant="primary" size="lg" class="w-full !rounded-xl justify-center font-bold">
                                استعلام و فیلتر پرواز
                            </x-button>
                        </div>
                    </div>
                </div>

                <!-- Flight Cards Grid: 6 Routes -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Flight 1: Dubai -->
                    <x-flight-card
                        airlines="امارات / ماهان"
                        badge="پشتیبانی کامل CIP"
                        duration="۲ ساعت و ۱۰ دقیقه"
                        origin="دبی (DXB)"
                        destination="تهران (THR/IKA)"
                        baggage="بار مجاز ۴۰ کیلوگرم + حمل رایگان بار پزشکی و تجهیزات"
                        seatFeature="صندلی ریکاوری زاویه‌دار با بالش مدیکال گردن"
                        medicalPerk="امکان درخواست برانکارد داخل پرواز با هماهنگی قبلی"
                        price="60"
                        bookingHref="#package-builder"
                    />

                    <!-- Flight 2: Istanbul -->
                    <x-flight-card
                        airlines="ترکیش / قشم‌ایر"
                        badge="پرواز روزانه مستقیم"
                        duration="۳ ساعت و ۳۵ دقیقه"
                        origin="استانبول (IST)"
                        destination="تهران (THR/IKA)"
                        baggage="۴۵ کیلوگرم بار + پذیرش رایگان ویلچر برقی بیمار"
                        seatFeature="صندلی‌های عریض ردیف جلو با جای پای اضافی (Extra Legroom)"
                        medicalPerk="هماهنگی آمبولانس رمپ پرواز در هر دو فرودگاه"
                        price="10"
                        bookingHref="#package-builder"
                    />

                    <!-- Flight 3: Doha -->
                    <x-flight-card
                        airlines="قطر ایرویز"
                        badge="کابین ویژه پزشکی"
                        duration="۲ ساعت"
                        origin="دوحه (DOH)"
                        destination="تهران (THR/IKA)"
                        baggage="۳۵ کیلوگرم بار استاندارد + اسکورت ویژه Fast-Track"
                        seatFeature="کابین اختصاصی بیزینس با تخت خواب کاملاً افقی (Flatbed)"
                        medicalPerk="کپسول اکسیژن پروازی با تأیید پزشک پرواز (MEDIF)"
                        price="85"
                        bookingHref="#package-builder"
                    />

                    <!-- Flight 4: Muscat -->
                    <x-flight-card
                        airlines="سلام‌ایر / وارش"
                        badge="پرواز مستقیم و کوتاه"
                        duration="۲ ساعت و ۵ دقیقه"
                        origin="مسقط (MCT)"
                        destination="شیراز / تهران"
                        baggage="۳۰ کیلوگرم بار + اولویت در تحویل چمدان پزشکی"
                        seatFeature="صندلی‌های راحت و آرام جهت بیماران پس از جراحی"
                        medicalPerk="استقبال با صندلی چرخدار از سالن خروجی تا هتل"
                        price="70"
                        bookingHref="#package-builder"
                    />

                    <!-- Flight 5: Baku -->
                    <x-flight-card
                        airlines="آذربایجان ایرلاینز (AZAL)"
                        badge="فاصله کوتاه پروازی"
                        duration="۱ ساعت و ۱۵ دقیقه"
                        origin="باکو (GYD)"
                        destination="تهران (THR/IKA)"
                        baggage="۳۰ کیلوگرم بار + پذیرش سریع بدون معطلی"
                        seatFeature="پرواز آرام و کوتاه با حداقل تغییرات فشار هوا"
                        medicalPerk="پذیرش مدارک پزشکی زبان آذری توسط نماینده پرشیا مدیس"
                        price="45"
                        bookingHref="#package-builder"
                    />

                    <!-- Flight 6: Baghdad -->
                    <x-flight-card
                        airlines="فلای بغداد / العراقیه"
                        badge="پرواز اختصاصی بیماران"
                        duration="۱ ساعت و ۲۰ دقیقه"
                        origin="بغداد (BGW)"
                        destination="تهران / مشهد"
                        baggage="۴۰ کیلوگرم بار همراه + پذیرش رایگان ۲ چمدان دارو"
                        seatFeature="مترجم همراه از پای گیت خروجی فرودگاه بغداد"
                        medicalPerk="امکان صدور گواهی ویزای سلامت فوری در گیت پرواز"
                        price="30"
                        bookingHref="#package-builder"
                    />
                </div>
            </section>

            <!-- SECTION 2: MEDICAL-GRADE HOTELS & RECOVERY ACCOMMODATIONS -->
            <section class="flex flex-col gap-space-lg" id="hotels-section">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-xs">
                    <div>
                        <div class="flex items-center gap-2 text-primary font-label-md text-label-md mb-1">
                            <span class="material-symbols-outlined text-[18px]">hotel</span>
                            <span>اقامتگاه‌های استریل بالینی و هتل‌های ۵ ستاره</span>
                        </div>
                        <h2 class="font-headline-xl text-headline-xl text-on-surface font-bold">
                            هتل‌های برگزیده نقاهت، مجهز به پرستار مقیم و تجهیزات ارتوپدی
                        </h2>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-md">
                        تأییدیه بهداشت بالینی، تخت‌های ارتوپدی برقی، رژیم غذایی تجویزی جراح و نزدیکی به مراکز بیمارستانی طرف قرارداد.
                    </p>
                </div>

                <!-- Hotel Filter Tabs (Powered by Alpine.js) -->
                <div class="flex flex-wrap items-center gap-2">
                    <button
                        type="button"
                        @click="activeHotelTab = 'all'"
                        :class="activeHotelTab === 'all'
                            ? 'bg-primary text-on-primary shadow-sm'
                            : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                        class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                    >
                        <span>همه اقامتگاه‌ها</span>
                    </button>

                    <button
                        type="button"
                        @click="activeHotelTab = '5star'"
                        :class="activeHotelTab === '5star'
                            ? 'bg-primary text-on-primary shadow-sm'
                            : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                        class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                    >
                        <span>هتل‌های ۵ ستاره بیمارستانی</span>
                    </button>

                    <button
                        type="button"
                        @click="activeHotelTab = 'recovery'"
                        :class="activeHotelTab === 'recovery'
                            ? 'bg-primary text-on-primary shadow-sm'
                            : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                        class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                    >
                        <span>سوئیت‌های ریکاوری و نقاهت</span>
                    </button>

                    <button
                        type="button"
                        @click="activeHotelTab = 'airport'"
                        :class="activeHotelTab === 'airport'
                            ? 'bg-primary text-on-primary shadow-sm'
                            : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                        class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                    >
                        <span>هتل‌های فرودگاهی CIP</span>
                    </button>
                </div>

                <!-- Hotel Cards Grid: 6 Accommodations -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Hotel 1: Espinas Palace -->
                    <x-hotel-card
                        name="هتل اسپیناس پالاس (سعادت‌آباد)"
                        stars="۵ ستاره تاپ"
                        hospitalDistance="۸ دقیقه تا بیمارستان فوق‌تخصصی عرفان و بهمن"
                        description="محیطی فوق‌العاده آرام در شمال غرب تهران مخصوص جراحی‌های پیچیده با سوئیت‌های ایزوله و پرستاری مقیم در طبقه."
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuBhlpRlI3p0gqg1-maOxmwEhNcPCKEfCKZJFQrdlx_l03Me-0FncOXm6HpynPIk8Hpl4HM3r1xetGRaN-ONzjpSaiphlmXpQ9autn4MBrX7z5DsEKqPAMR4DCGNvNnSpi4PuOenP-z22SILTideehvtq7HA_ahyxePSw_o9ycsEGAhPNF7BKn4N2WBB-ZbapQWcXvwzr-YyIJKdy7xs-uH3Y5oCZMcwjKqAs6qMD4M"
                        :amenities="['تخت ارتوپدی برقی', 'رژیم غذایی بالینی تجویزی', 'فیلتراسیون هوای هپا (HEPA)', 'حمام بدون لبه و دستگیره کمکی']"
                        price="40"
                        category="5star"
                        bookingHref="#package-builder"
                    />

                    <!-- Hotel 2: Parsian Azadi -->
                    <x-hotel-card
                        name="هتل پارسیان آزادی (تهران)"
                        stars="۵ ستاره بین‌المللی"
                        hospitalDistance="۱۰ دقیقه تا بیمارستان پارس و تریتا"
                        description="دسترسی مستقیم به بزرگراه‌های اصلی تهران با طبقات ویژه آرامش، تشک‌های طبی ضد حساسیت و خدمات VIP پزشکی."
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuAr9i7m4x-ai4JhwKnGTKMbPgBgguIdv-rjDe_O5DIbVdUJwYiwqkCeW6mTGImYOoc0xOXRc0uY-Xeq2wy64uf4LJ05CW_8AZIPFA8J3iZ8T9FC-oYOiOvzTirvqaFBD0u6adPW44ykGr0Jx7hQswFr8ckzNAis_yr98QuOcPf3M5M8p5ahTGXwbQaqe8Nax3-Zm7ZhN1CU7TwYVZkze4bZAA9H3z2X58eHTKyRs5w"
                        :amenities="['سوئیت‌های متصل مخصوص همراهان', 'استریلیزاسیون روزانه با UV-C', 'منوی غذای ریکاوری و کم‌نمک', 'ویلچر و برانکارد مجهز هتل']"
                        price="0"
                        category="5star"
                        bookingHref="#package-builder"
                    />

                    <!-- Hotel 3: Wisteria Hotel -->
                    <x-hotel-card
                        name="هتل ویستریا (دربند)"
                        stars="۵ ستاره نوساز"
                        hospitalDistance="۱۵ دقیقه تا مرکز چشم‌پزشکی نور و تندیس"
                        description="هوای پاک کوهپایه‌ای تجریش با معماری آرامش‌بخش، مناسب برای دوره نقاهت جراحی‌های پلاستیک، زیبایی و چشم."
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuBhlpRlI3p0gqg1-maOxmwEhNcPCKEfCKZJFQrdlx_l03Me-0FncOXm6HpynPIk8Hpl4HM3r1xetGRaN-ONzjpSaiphlmXpQ9autn4MBrX7z5DsEKqPAMR4DCGNvNnSpi4PuOenP-z22SILTideehvtq7HA_ahyxePSw_o9ycsEGAhPNF7BKn4N2WBB-ZbapQWcXvwzr-YyIJKdy7xs-uH3Y5oCZMcwjKqAs6qMD4M"
                        :amenities="['پنجره‌های دوجداره عایق صوت ۱۰۰٪', 'کادر مسلط به زبان‌های عربی و انگلیسی', 'امکان حضور پرستار خصوصی در اتاق', 'سرویس چای گیاهی و آبمیوه طبیعی']"
                        price="15"
                        category="recovery"
                        bookingHref="#package-builder"
                    />

                    <!-- Hotel 4: Rexan Airport Hotel -->
                    <x-hotel-card
                        name="هتل فرودگاهی رکسان (نووتل سابق)"
                        stars="۵ ستاره فرودگاهی"
                        hospitalDistance="واقع در محوطه روبروی ترمینال ۱ فرودگاه امام"
                        description="بهترین گزینه برای توقف‌های کوتاه قبل و بعد از پرواز، بدون نیاز به ورود به ترافیک شهری با خدمات ترانسفر رایگان."
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuAr9i7m4x-ai4JhwKnGTKMbPgBgguIdv-rjDe_O5DIbVdUJwYiwqkCeW6mTGImYOoc0xOXRc0uY-Xeq2wy64uf4LJ05CW_8AZIPFA8J3iZ8T9FC-oYOiOvzTirvqaFBD0u6adPW44ykGr0Jx7hQswFr8ckzNAis_yr98QuOcPf3M5M8p5ahTGXwbQaqe8Nax3-Zm7ZhN1CU7TwYVZkze4bZAA9H3z2X58eHTKyRs5w"
                        :amenities="['ترانسفر شبانه‌روزی فرودگاهی (۵ دقیقه)', 'اتاق‌های ساعتی و روزانه استراحت', 'پذیرش سریع ۲۴ ساعته', 'سکوت مطلق با پنجره‌های آکوستیک']"
                        price="5"
                        category="airport"
                        bookingHref="#package-builder"
                    />

                    <!-- Hotel 5: Laleh International Hotel -->
                    <x-hotel-card
                        name="هتل بین‌المللی لاله (مرکز شهر)"
                        stars="۵ ستاره کلاسیک"
                        hospitalDistance="۵ دقیقه تا بیمارستان تخصصی قلب و مرکز طبی کودکان"
                        description="مجاورت با پارک بزرگ لاله و بزرگترین مراکز قلب و انکولوژی تهران با کادر مجرب تشریفات درمانی بین‌الملل."
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuBhlpRlI3p0gqg1-maOxmwEhNcPCKEfCKZJFQrdlx_l03Me-0FncOXm6HpynPIk8Hpl4HM3r1xetGRaN-ONzjpSaiphlmXpQ9autn4MBrX7z5DsEKqPAMR4DCGNvNnSpi4PuOenP-z22SILTideehvtq7HA_ahyxePSw_o9ycsEGAhPNF7BKn4N2WBB-ZbapQWcXvwzr-YyIJKdy7xs-uH3Y5oCZMcwjKqAs6qMD4M"
                        :amenities="['نزدیک‌ترین هتل به مراکز جراحی قلب', 'مترجم مقیم عربی‌زبان هتل', 'امکان سفارش رژیم‌های دیابتی و کلیوی', 'داروخانه شبانه‌روزی در مجاورت هتل']"
                        price="5"
                        category="5star"
                        bookingHref="#package-builder"
                    />

                    <!-- Hotel 6: Medical VIP Serviced Residence -->
                    <x-hotel-card
                        name="رزیدنس اختصاصی مدیکال کیان"
                        stars="آپارتمان هتل VIP"
                        hospitalDistance="۲ دقیقه تا کلینیک‌های جراحی ولیعصر"
                        description="واحدهای آپارتمانی مبله و مستقل با آشپزخانه مجهز و تخت‌های استاندارد درمانی، مخصوص اقامت‌های طولانی خانواده بیماران."
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuAr9i7m4x-ai4JhwKnGTKMbPgBgguIdv-rjDe_O5DIbVdUJwYiwqkCeW6mTGImYOoc0xOXRc0uY-Xeq2wy64uf4LJ05CW_8AZIPFA8J3iZ8T9FC-oYOiOvzTirvqaFBD0u6adPW44ykGr0Jx7hQswFr8ckzNAis_yr98QuOcPf3M5M8p5ahTGXwbQaqe8Nax3-Zm7ZhN1CU7TwYVZkze4bZAA9H3z2X58eHTKyRs5w"
                        :amenities="['فضای مستقل برای خانواده و فرزندان', 'آشپزخانه اختصاصی برای پخت رژیم غذایی', 'نگهبانی و حراست ۲۴ ساعته اختصاصی', 'نظافت استریل روزانه طبق پروتکل بیمارستان']"
                        price="10"
                        category="recovery"
                        bookingHref="#package-builder"
                    />
                </div>
            </section>

            <!-- SECTION 3: SMART TWO-STEP FLIGHT + HOTEL PACKAGE BUILDER & STICKY SUMMARY -->
            <section id="package-builder" class="flex flex-col gap-space-lg">
                <div class="mb-2">
                    <div class="inline-flex items-center gap-2 text-primary font-label-md text-label-md mb-2">
                        <span class="material-symbols-outlined text-lg">auto_fix_high</span>
                        <span>پکیج هوشمند اقامت و پرواز درمانی</span>
                    </div>
                    <h2 class="font-headline-xl text-headline-xl font-bold text-on-surface">
                        ترکیب هوشمند بلیط پرواز و هتل نقاهتگاه در ۲ گام ساده
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                        با رزرو همزمان پرواز رفت‌وبرگشت و هتل استریل، از ۱۲٪ تخفیف پکیج یکپارچه پرشیا مدیس همراه با ترانسفر فرودگاهی رایگان بهره‌مند شوید.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- Form Column: Two Steps Only (Spans 8 cols) -->
                    <div class="lg:col-span-8 space-y-6">
                        <!-- Step 1: Flight Selection -->
                        <div class="p-6 rounded-2xl bg-surface-container-lowest/85 backdrop-blur-xl border border-white/80 shadow-xl glass-panel">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <span class="w-8 h-8 rounded-xl bg-primary text-on-primary flex items-center justify-center font-bold text-sm shadow-sm">۱</span>
                                    <h3 class="font-headline-md text-headline-md font-bold text-on-surface">گام اول: انتخاب پرواز رفت و برگشت</h3>
                                </div>
                                <span class="text-primary font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-base">check_circle</span> انتخاب شده
                                </span>
                            </div>

                            <div class="space-y-3">
                                <!-- Route Option: Doha -->
                                <label
                                    @click="flightRoute = 'doha'; flightName = 'قطر ایرویز (DOH-THR)'; flightPrice = 185"
                                    :class="flightRoute === 'doha' ? 'border-primary ring-2 ring-primary/20 bg-surface-container-low/70' : 'border-outline-variant/30 hover:bg-surface-container-low/40'"
                                    class="p-4 rounded-xl cursor-pointer flex items-center justify-between transition-all border bg-surface-container-lowest/90 shadow-sm"
                                >
                                    <div class="flex items-center gap-3">
                                        <input
                                            type="radio"
                                            name="pkg_flight_opt"
                                            value="doha"
                                            x-model="flightRoute"
                                            class="text-primary focus:ring-primary w-4 h-4 cursor-pointer"
                                        />
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span class="font-label-md text-label-md font-bold text-on-surface">دوحه (DOH) ← تهران (THR/IKA)</span>
                                                <span class="px-2 py-0.5 rounded-lg bg-primary-container/20 text-primary text-xs font-semibold border border-primary/20">پرواز برگزیده</span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant block mt-0.5">قطر ایرویز • کلاس اکونومی پلاس مدیکال • شامل Fast-Track فرودگاهی</span>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <span class="font-headline-md text-headline-md font-bold text-primary" dir="ltr">85</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">دوطرفه</span>
                                    </div>
                                </label>

                                <!-- Route Option: Dubai -->
                                <label
                                    @click="flightRoute = 'dubai'; flightName = 'ماهان ایر (DXB-THR)'; flightPrice = 160"
                                    :class="flightRoute === 'dubai' ? 'border-primary ring-2 ring-primary/20 bg-surface-container-low/70' : 'border-outline-variant/30 hover:bg-surface-container-low/40'"
                                    class="p-4 rounded-xl cursor-pointer flex items-center justify-between transition-all border bg-surface-container-lowest/90 shadow-sm"
                                >
                                    <div class="flex items-center gap-3">
                                        <input
                                            type="radio"
                                            name="pkg_flight_opt"
                                            value="dubai"
                                            x-model="flightRoute"
                                            class="text-primary focus:ring-primary w-4 h-4 cursor-pointer"
                                        />
                                        <div>
                                            <span class="font-label-md text-label-md font-bold text-on-surface block">دبی (DXB) ← تهران (THR/IKA)</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">ماهان ایر • کلاس بیزینس مدیکال با تخت خواب کامل</span>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <span class="font-headline-md text-headline-md font-bold text-primary" dir="ltr">60</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">دوطرفه</span>
                                    </div>
                                </label>

                                <!-- Route Option: Istanbul -->
                                <label
                                    @click="flightRoute = 'istanbul'; flightName = 'ترکیش ایرلاینز (IST-THR)'; flightPrice = 210"
                                    :class="flightRoute === 'istanbul' ? 'border-primary ring-2 ring-primary/20 bg-surface-container-low/70' : 'border-outline-variant/30 hover:bg-surface-container-low/40'"
                                    class="p-4 rounded-xl cursor-pointer flex items-center justify-between transition-all border bg-surface-container-lowest/90 shadow-sm"
                                >
                                    <div class="flex items-center gap-3">
                                        <input
                                            type="radio"
                                            name="pkg_flight_opt"
                                            value="istanbul"
                                            x-model="flightRoute"
                                            class="text-primary focus:ring-primary w-4 h-4 cursor-pointer"
                                        />
                                        <div>
                                            <span class="font-label-md text-label-md font-bold text-on-surface block">استانبول (IST) ← تهران (THR/IKA)</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">ترکیش ایرلاینز • صندلی ردیف جلو با خدمات آمبولانس رمپ</span>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <span class="font-headline-md text-headline-md font-bold text-primary" dir="ltr">10</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">دوطرفه</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Step 2: Medical Hotel & Recovery Nights -->
                        <div class="p-6 rounded-2xl bg-surface-container-lowest/85 backdrop-blur-xl border border-white/80 shadow-xl glass-panel">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <span class="w-8 h-8 rounded-xl bg-primary text-on-primary flex items-center justify-center font-bold text-sm shadow-sm">۲</span>
                                    <h3 class="font-headline-md text-headline-md font-bold text-on-surface">گام دوم: انتخاب هتل و مدت اقامت نقاهت</h3>
                                </div>
                                <span class="text-primary font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-base">check_circle</span> انتخاب شده
                                </span>
                            </div>

                            <div class="space-y-3">
                                <!-- Hotel Option: Parsian Azadi -->
                                <label
                                    @click="hotelOption = 'azadi'; hotelName = 'هتل پارسیان آزادی (۵ شب)'; hotelPrice = 450"
                                    :class="hotelOption === 'azadi' ? 'border-primary ring-2 ring-primary/20 bg-surface-container-low/70' : 'border-outline-variant/30 hover:bg-surface-container-low/40'"
                                    class="p-4 rounded-xl cursor-pointer flex items-center justify-between transition-all border bg-surface-container-lowest/90 shadow-sm"
                                >
                                    <div class="flex items-center gap-3">
                                        <input
                                            type="radio"
                                            name="pkg_hotel_opt"
                                            value="azadi"
                                            x-model="hotelOption"
                                            class="text-primary focus:ring-primary w-4 h-4 cursor-pointer"
                                        />
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span class="font-label-md text-label-md font-bold text-on-surface">هتل پارسیان آزادی (سوئیت ریکاوری ویژه)</span>
                                                <span class="px-2 py-0.5 rounded-lg bg-primary-container/20 text-primary text-xs font-semibold border border-primary/20">پیشنهاد برتر</span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant block mt-0.5">۵ شب اقامت • صبحانه و رژیم بالینی تجویزی • تخت ارتوپدی و فیلتراسیون هوا</span>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <span class="font-headline-md text-headline-md font-bold text-primary" dir="ltr">50</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">(0 / هر شب)</span>
                                    </div>
                                </label>

                                <!-- Hotel Option: Espinas Palace -->
                                <label
                                    @click="hotelOption = 'espinas'; hotelName = 'هتل اسپیناس پالاس (۵ شب)'; hotelPrice = 650"
                                    :class="hotelOption === 'espinas' ? 'border-primary ring-2 ring-primary/20 bg-surface-container-low/70' : 'border-outline-variant/30 hover:bg-surface-container-low/40'"
                                    class="p-4 rounded-xl cursor-pointer flex items-center justify-between transition-all border bg-surface-container-lowest/90 shadow-sm"
                                >
                                    <div class="flex items-center gap-3">
                                        <input
                                            type="radio"
                                            name="pkg_hotel_opt"
                                            value="espinas"
                                            x-model="hotelOption"
                                            class="text-primary focus:ring-primary w-4 h-4 cursor-pointer"
                                        />
                                        <div>
                                            <span class="font-label-md text-label-md font-bold text-on-surface block">هتل اسپیناس پالاس زعفرانیه (سوئیت پرزیدنتال)</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">۵ شب اقامت لوکس • حضور شبانه‌روزی پرستار در طبقه • چشم‌انداز آرامش‌بخش کوهستان</span>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <span class="font-headline-md text-headline-md font-bold text-primary" dir="ltr">50</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">(30 / هر شب)</span>
                                    </div>
                                </label>

                                <!-- Hotel Option: Rexan Airport -->
                                <label
                                    @click="hotelOption = 'rexan'; hotelName = 'هتل فرودگاهی رکسان (۵ شب)'; hotelPrice = 425"
                                    :class="hotelOption === 'rexan' ? 'border-primary ring-2 ring-primary/20 bg-surface-container-low/70' : 'border-outline-variant/30 hover:bg-surface-container-low/40'"
                                    class="p-4 rounded-xl cursor-pointer flex items-center justify-between transition-all border bg-surface-container-lowest/90 shadow-sm"
                                >
                                    <div class="flex items-center gap-3">
                                        <input
                                            type="radio"
                                            name="pkg_hotel_opt"
                                            value="rexan"
                                            x-model="hotelOption"
                                            class="text-primary focus:ring-primary w-4 h-4 cursor-pointer"
                                        />
                                        <div>
                                            <span class="font-label-md text-label-md font-bold text-on-surface block">هتل فرودگاهی رکسان (۵ ستاره فرودگاه امام)</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">۵ شب اقامت • ترانسفر رایگان ۵ دقیقه‌ای پای پرواز • سکوت کامل با عایق صوتی</span>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <span class="font-headline-md text-headline-md font-bold text-primary" dir="ltr">25</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant block">(5 / هر شب)</span>
                                    </div>
                                </label>

                                <!-- Included Airport CIP Perk -->
                                <div class="p-4 rounded-xl bg-secondary-container/30 border border-secondary/20 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-secondary text-2xl">verified_user</span>
                                        <div>
                                            <span class="font-label-md text-label-md font-bold text-on-surface block">شامل رایگان: پاویون تشریفات CIP فرودگاه امام و ترانسفر به هتل</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">پذیرش چمدان، گذرنامه در سالن اختصاصی و انتقال با خودرو تشریفاتی</span>
                                        </div>
                                    </div>
                                    <span class="font-label-md text-label-md font-bold text-secondary">رایگان (هدیه پکیج)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sticky Summary Sidebar (4 cols) -->
                    <div class="lg:col-span-4 sticky top-28">
                        <div class="p-6 rounded-2xl bg-surface-container-lowest/95 backdrop-blur-2xl border border-white/90 shadow-2xl glass-panel">
                            <div class="flex items-center justify-between pb-4 mb-4 border-b border-outline-variant/30">
                                <div>
                                    <h3 class="font-headline-md text-headline-md font-bold text-on-surface">محاسبه‌گر هزینه پرواز و هتل</h3>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">فاکتور شفاف و بدون هزینه مخفی</span>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-primary-container/20 text-primary border border-primary/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-xl">calculate</span>
                                </div>
                            </div>

                            <!-- Price Breakdown Rows -->
                            <div class="space-y-3 pb-5 mb-5 border-b border-outline-variant/30 font-body-sm text-body-sm">
                                <div class="flex items-center justify-between text-on-surface">
                                    <span class="text-on-surface-variant" x-text="'پرواز دوطرفه (' + flightName + '):'"></span>
                                    <span class="font-semibold text-on-surface" dir="ltr" x-text="'$' + flightPrice"></span>
                                </div>

                                <div class="flex items-center justify-between text-on-surface">
                                    <span class="text-on-surface-variant" x-text="'هتل نقاهتگاه (' + hotelName + '):'"></span>
                                    <span class="font-semibold text-on-surface" dir="ltr" x-text="'$' + hotelPrice"></span>
                                </div>

                                <div class="flex items-center justify-between text-on-surface">
                                    <span class="text-on-surface-variant">تشریفات CIP و ترانسفر اختصاصی فرودگاه:</span>
                                    <span class="font-semibold text-secondary">رایگان</span>
                                </div>

                                <div class="flex items-center justify-between text-on-surface">
                                    <span class="text-on-surface-variant">بیمه درمانی مسافرتی پرشیا مدیس:</span>
                                    <span class="font-semibold text-secondary">رایگان</span>
                                </div>

                                <div class="flex items-center justify-between text-tertiary-container pt-2">
                                    <span class="font-semibold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base">local_offer</span>
                                        تخفیف پکیج رزرو همزمان پرواز و هتل:
                                    </span>
                                    <span class="font-bold" dir="ltr" x-text="'-$' + discount"></span>
                                </div>
                            </div>

                            <!-- Total Amount Due -->
                            <div class="p-4 rounded-xl bg-primary-container/15 border border-primary/20 mb-6 flex items-center justify-between">
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">مجموع قابل پرداخت پکیج:</span>
                                    <span class="font-label-sm text-label-sm text-primary font-semibold">شامل کلیه مالیات‌ها و عوارض</span>
                                </div>
                                <div class="text-left">
                                    <div class="font-headline-xl text-headline-xl font-bold text-primary" dir="ltr" x-text="'$' + total"></div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">دلار آمریکا</span>
                                </div>
                            </div>

                            <!-- Guarantee Badges -->
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-primary text-base">verified</span>
                                    <span>تضمین ۱۰۰٪ استرداد وجه بلیط و هتل تا ۷۲ ساعت قبل از پرواز</span>
                                </div>
                                <div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-primary text-base">credit_card</span>
                                    <span>پرداخت امن بین‌المللی ارزی (ویزا / مسترکارت / رمزارز / سوئیفت)</span>
                                </div>
                            </div>

                            <!-- Primary Checkout CTA Button -->
                            <x-button
                                href="#contact-section"
                                variant="primary"
                                size="lg"
                                class="w-full !rounded-xl justify-center font-bold shadow-lg"
                                icon="arrow_back"
                                iconPosition="left"
                            >
                                تأیید و ثبت پیش‌فاکتور پکیج
                            </x-button>

                            <p class="font-label-sm text-label-sm text-center text-on-surface-variant mt-2.5" dir="ltr">
                                Confirm &amp; Secure Flight &amp; Hotel Booking
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 4: FAQ & MEDICAL FLIGHT CLEARANCE (MEDIF) GUIDE -->
            <section class="w-full" id="faq-section">
                <div class="p-8 lg:p-10 rounded-3xl bg-surface-container-lowest/85 backdrop-blur-2xl border border-white/80 shadow-xl glass-panel">
                    <div class="text-right mb-8">
                        <x-badge variant="teal-soft">راهنمای بالینی و تشریفاتی سفر</x-badge>
                        <h2 class="font-headline-xl text-headline-xl font-bold text-on-surface mt-2">
                            پرسش‌های متداول در خصوص پرواز پزشکی و اقامت استریل
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                            پاسخ به سوالات کلیدی بیماران بین‌المللی درباره مجوزهای پزشکی پرواز و ایمنی هتل‌ها
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 rounded-2xl bg-surface-container-low/50 border border-white/80 shadow-sm flex flex-col justify-start glass-card">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-9 h-9 rounded-xl bg-primary-container/20 text-primary border border-primary/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-xl">assignment</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md font-bold text-on-surface">فرم مجوز پزشکی پرواز (MEDIF) چگونه صادر می‌شود؟</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                پزشکان معتمد پرشیا مدیس (PersiaMedis) مدارک پزشکی و خلاصه پرونده شما را به اداره پزشکی ایرلاین مربوطه ارسال و ظرف ۳ تا ۶ ساعت تأییدیه پرواز ایمن (Fit to Fly) را دریافت می‌کنند تا بدون هیچ معطلی سوار هواپیما شوید.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl bg-surface-container-low/50 border border-white/80 shadow-sm flex flex-col justify-start glass-card">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-9 h-9 rounded-xl bg-secondary-container/40 text-secondary border border-secondary/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-xl">sanitizer</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md font-bold text-on-surface">استانداردهای بهداشتی و استریل هتل‌های نقاهتگاه چیست؟</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                تمامی اتاق‌های پارتنر پرشیا مدیس دارای دستگاه‌های تصفیه هوای با فیلتر هپا (HEPA)، مواد ضدعفونی‌کننده گرید بیمارستانی برای سطوح و تشک‌های آنتی‌دکوبیتوس (ضد زخم بستر) هستند تا خطر هرگونه عفونت به صفر برسد.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl bg-surface-container-low/50 border border-white/80 shadow-sm flex flex-col justify-start glass-card">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-9 h-9 rounded-xl bg-primary-container/20 text-primary border border-primary/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-xl">accessible_forward</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md font-bold text-on-surface">آیا امکان انتقال مستقیم بیمار با آمبولانس از پای پرواز وجود دارد؟</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                بله، در فرودگاه بین‌المللی امام خمینی (ره)، آمبولانس‌های دارای مجوز تردد در محوطه پروازی (Airside) بیمار را مستقیماً از کنار پلکان هواپیما بدون گذر از سالن‌های عمومی به بیمارستان یا هتل انتقال می‌دهند.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl bg-surface-container-low/50 border border-white/80 shadow-sm flex flex-col justify-start glass-card">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-9 h-9 rounded-xl bg-tertiary-fixed/40 text-tertiary-container border border-tertiary/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-xl">change_circle</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md font-bold text-on-surface">در صورت تغییر تاریخ جراحی، آیا تاریخ بلیط و هتل قابل تغییر است؟</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                کلیه بلیط‌ها و رزروهای هتل در پکیج درمانی پرشیا مدیس دارای امکان تغییر تاریخ رایگان (Medical Flexible Booking) بر اساس گواهی پزشک معالج هستند.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 5: 24/7 MEDICAL DESK & CONTACT -->
            <section class="w-full" id="contact-section">
                <div class="p-8 rounded-3xl bg-surface-container-lowest/85 backdrop-blur-xl border border-white/80 shadow-xl flex flex-col md:flex-row items-center justify-between gap-6 glass-panel">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-primary-container/20 text-primary border border-primary/30 flex items-center justify-center flex-shrink-0 shadow-sm">
                            <span class="material-symbols-outlined text-3xl font-bold">flight_takeoff</span>
                        </div>
                        <div>
                            <h3 class="font-headline-md text-headline-md font-bold text-on-surface">نیاز به هماهنگی پرواز فوری یا ایر آمبولانس اختصاصی دارید؟</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">کانتر اختصاصی پروازهای اورژانس و رزرو هتل‌های درمانی پرشیا مدیس (PersiaMedis) ۲۴ ساعته پاسخگوی شماست.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 flex-shrink-0">
                        <a
                            class="px-5 py-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-outline-variant/30 text-primary font-label-lg text-label-lg font-bold transition-colors flex items-center gap-2 shadow-sm"
                            dir="ltr"
                            href="tel:+982188004040"
                        >
                            <span class="material-symbols-outlined text-xl">call</span>
                            <span>+98 (21) 8800-4040</span>
                        </a>

                        <a
                            href="https://wa.me/982188004040"
                            target="_blank"
                            class="px-5 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-label-lg text-label-lg font-bold transition-all flex items-center gap-2 shadow-md hover:-translate-y-0.5"
                        >
                            <span class="material-symbols-outlined text-xl font-bold">chat</span>
                            <span>پشتیبانی آنلاین واتس‌اپ</span>
                        </a>
                    </div>
                </div>
            </section>

        </div>
    </div>
</x-layouts.app>
