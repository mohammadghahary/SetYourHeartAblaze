<x-layouts.app title="خدمات درمانی و دپارتمان‌های فوق‌تخصصی | پرشیا مدیس">
    <div x-data="{ activeCategory: 'all' }" class="flex flex-col w-full relative overflow-hidden">
        <div class="max-w-[1360px] mx-auto px-gutter-mobile lg:px-margin pt-6 pb-space-xl flex flex-col gap-space-xl w-full">

            <!-- 1. Header Banner & Filter Navigation -->
            <section class="relative w-full rounded-2xl bg-surface-container-lowest/80 backdrop-blur-2xl p-space-lg lg:p-space-xl shadow-xl overflow-hidden flex flex-col gap-space-lg glass-panel">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
                    <div class="flex flex-col gap-space-xs max-w-3xl">
                        <x-badge variant="glass" icon="verified" class="self-start text-primary">
                            اعتبار بین‌المللی JCI و نظارت مستقیم وزارت بهداشت
                        </x-badge>

                        <h1 class="font-display-lg text-display-lg-mobile lg:text-display-lg text-primary font-bold tracking-tight mt-1">
                            خدمات درمانی و دپارتمان‌های فوق‌تخصصی پرشیا مدیس
                        </h1>

                        <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed max-w-[700px]">
                            دسترسی مستقیم به معتبرترین بیمارستان‌ها و جراحان رتبه ۱ ایران، استانداردهای بین‌المللی JCI، همراه با پکیج‌های شفاف صفر تا صد (All-Inclusive) متناسب با نیاز بیماران و همراهان گرامی.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-2 gap-space-sm bg-surface-container-lowest/90 backdrop-blur-xl p-space-md rounded-2xl shadow-md min-w-[280px] glass-card border border-white/80">
                        <div class="flex flex-col">
                            <span class="font-headline-lg text-headline-lg text-primary font-bold block" dir="ltr">۹۸.۴٪</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">میانگین رضایت درمان</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-headline-lg text-headline-lg text-secondary font-bold block" dir="ltr">۲۴/۷</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">مترجم و همراه پزشکی</span>
                        </div>
                        <div class="flex flex-col col-span-2 sm:col-span-1 lg:col-span-2">
                            <span class="font-label-md text-label-md text-tertiary-container font-semibold">T-Visa سریع در ۴۸ ساعت</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">اخذ ویزای درمانی رسمی بیمار و همراه</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Medical Department Showcase Image -->
                <div class="relative w-full rounded-2xl overflow-hidden shadow-lg bg-surface-container-highest/50 h-[320px] md:h-[360px]">
                    <img
                        alt="تیم پزشکی متخصص و تجهیزات مدرن درمانی پرشیا مدیس"
                        class="w-full h-full object-cover object-center"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-9KTHwdSn5RrprfQu7dOzyORdabhyRxtKqAgVmtuaVxfKn4p0xQ0l6kH--Fa2enDEUS7e8xkCPEe7OHy9HsBHAYkJSb9h7KHYeqElvmm_aJ16fbW1L5CffHEPpK-z7dycjELuWAKJaD7OxOHwERgZehjJdyoBO-wwd1JxAoJ0LDOJvLB7uVgTUBQWJB_NLVXP0Wn4WQWwwS9YyighF4OqlZqNojpfl3REXQrnSGM"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/85 via-inverse-surface/25 to-transparent flex items-end p-space-md lg:p-space-lg">
                        <div class="flex flex-wrap items-center justify-between w-full gap-space-sm text-surface-container-lowest">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary-fixed text-[24px]">local_hospital</span>
                                <span class="font-headline-md text-headline-md font-bold">پوشش ۱۲ دپارتمان تخصصی و جراحی‌های پیشرفته بالینی</span>
                            </div>
                            <span class="font-label-md text-label-md bg-surface-container-lowest/30 backdrop-blur-md px-4 py-1.5 rounded-xl border border-white/20">
                                همکاری با بیمارستان‌های تریتا، نور، پارس و بوعلی‌سینا
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Category Filters (Powered by Alpine.js) -->
                <div class="flex flex-col gap-space-xs">
                    <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">فیلتر سریع حوزه‌های درمانی:</span>
                    <div class="flex flex-wrap items-center gap-2">
                        <button
                            type="button"
                            @click="activeCategory = 'all'"
                            :class="activeCategory === 'all'
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                            class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                        >
                            <span class="material-symbols-outlined text-[16px]">apps</span>
                            <span>همه دپارتمان‌ها</span>
                        </button>

                        <button
                            type="button"
                            @click="activeCategory = 'cosmetic'"
                            :class="activeCategory === 'cosmetic'
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                            class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                        >
                            <span>جراحی زیبایی</span>
                        </button>

                        <button
                            type="button"
                            @click="activeCategory = 'cardiology'"
                            :class="activeCategory === 'cardiology'
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                            class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                        >
                            <span>قلب و عروق</span>
                        </button>

                        <button
                            type="button"
                            @click="activeCategory = 'orthopedics'"
                            :class="activeCategory === 'orthopedics'
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                            class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                        >
                            <span>ارتوپدی و مفاصل</span>
                        </button>

                        <button
                            type="button"
                            @click="activeCategory = 'ivf'"
                            :class="activeCategory === 'ivf'
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                            class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                        >
                            <span>ناباروری و IVF</span>
                        </button>

                        <button
                            type="button"
                            @click="activeCategory = 'oncology'"
                            :class="activeCategory === 'oncology'
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                            class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                        >
                            <span>انکولوژی</span>
                        </button>

                        <button
                            type="button"
                            @click="activeCategory = 'neuro'"
                            :class="activeCategory === 'neuro'
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                            class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                        >
                            <span>مغز و اعصاب</span>
                        </button>

                        <button
                            type="button"
                            @click="activeCategory = 'transplant'"
                            :class="activeCategory === 'transplant'
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                            class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                        >
                            <span>پیوند اعضا</span>
                        </button>

                        <button
                            type="button"
                            @click="activeCategory = 'weightloss'"
                            :class="activeCategory === 'weightloss'
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant hover:text-primary hover:bg-surface-container-high border border-white/80'"
                            class="px-4 py-2 rounded-xl font-label-md text-label-md transition-all shadow-sm flex items-center gap-1.5 cursor-pointer"
                        >
                            <span>جراحی چاقی</span>
                        </button>
                    </div>
                </div>
            </section>

            <!-- 2. Twelve Comprehensive Clinical Departments Grid -->
            <section class="flex flex-col gap-space-lg">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-xs">
                    <div>
                        <div class="flex items-center gap-2 text-primary font-label-md text-label-md mb-1">
                            <span class="material-symbols-outlined text-[18px]">domain</span>
                            <span>مراکز درمانی برگزیده</span>
                        </div>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">
                            معرفی ۱۲ دپارتمان فوق‌تخصصی پرشیا مدیس
                        </h2>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-md">
                        بررسی شاخص‌های بالینی، مدت زمان استاندارد بستری و پوشش کامل ویزای سلامت همراه با جراحان برجسته هیئت علمی.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md" id="departmentsGrid">
                <x-department-card
                    category="oncology"
                    icon="vital_signs"
                    enTitle="Oncology"
                    title="انکولوژی و سرطان‌شناسی"
                    subtitle="تومورهای بدخیم و شیمی‌درمانی تارگت"
                    description="درمان‌های هدفمند شیمی‌درمانی، رادیوتراپی دقیق IMRT، پاتولوژی مولکولی پیشرفته و جراحی‌های حفظ بافت توسط اساتید برجسته."
                    successRate="۹۱٪ پروتکل‌های ترکیبی"
                    hospitalStay="۳ الی ۷ روز"
                    partnerHospitals="پارس تهران، پارس شیراز"
                />
                <x-department-card
                    category="neuro"
                    icon="neurology"
                    enTitle="Neurosurgery"
                    title="جراحی مغز و اعصاب"
                    subtitle="میکروسرجری و تومورهای پیچیده"
                    description="سامانه‌های پیشرفته نوروناویگیشن ۳ بعدی، جراحی تومورهای قاعده جمجمه، آنوریسم‌های مغزی و مداخلات عروقی اندوواسکولار."
                    successRate="۹۴.۲٪ جراحی‌های میکروسکوپیک"
                    hospitalStay="۴ الی ۶ روز"
                    partnerHospitals="بیمارستان تریتا تهران"
                />
                <x-department-card
                    category="neuro"
                    icon="accessibility_new"
                    enTitle="Spine Surgery"
                    title="جراحی ستون فقرات"
                    subtitle="درمان دیسک، فیوژن و اسکولیوز"
                    description="تعویض دیسک مصنوعی گردن و کمر، جراحی اصلاح انحراف اسکولیوز، روش‌های کم‌تهاجمی اندوسکوپیک با حداقل دوره نقاهت."
                    successRate="۹۶٪ بهبود دامنه حرکتی"
                    hospitalStay="۲ الی ۴ روز"
                    partnerHospitals="مرکز جراحی اروند، دنا شیراز"
                />
                <x-department-card
                    category="cardiology"
                    icon="cardiology"
                    enTitle="Cardiology"
                    title="قلب و عروق اینترونشنال"
                    subtitle="TAVI، بای‌پس و آنژیوپلاستی"
                    description="تعویض دریچه آئورت به روش TAVI بدون جراحی باز، عمل بای‌پس عروق کرونر (CABG) و ترمیم بیماری‌های مادرزادی قلبی."
                    successRate="۹۸.۱٪ اعمال بسته TAVI"
                    hospitalStay="۳ الی ۵ روز"
                    partnerHospitals="مرکز قلب شهید رجایی تهران"
                />
                <x-department-card
                    category="orthopedics"
                    icon="rheumatology"
                    enTitle="Orthopedics"
                    title="ارتوپدی و جراحی مفاصل"
                    subtitle="تعویض مفاصل زانو و ران (هیپ)"
                    description="آرتروپلاستی کامل با ایمپلنت‌های استاندارد آمریکایی و اروپایی، آرتروسکوپی رباط صلیبی و درمان آسیب‌های ورزشی."
                    successRate="۹۷.۵٪ دوام ایمپلنت بالای ۱۵ سال"
                    hospitalStay="۳ روز بستری + ۷ روز فیزیوتراپی"
                    partnerHospitals="بیمارستان اختر، اردیبهشت شیراز"
                />
                <x-department-card
                    category="ivf"
                    icon="child_care"
                    enTitle="Fertility &amp; IVF"
                    title="مرکز ناباروری، IVF و ژنتیک"
                    subtitle="PGD/PGS، تعیین جنسیت و ICSI"
                    description="آزمایش‌های پیشرفته ژنتیکی جنین با فناوری NGS، اهدای تخمک و جنین قانونی، رحم جایگزین با تاییدیه مراجع حقوقی."
                    successRate="۶۸٪ در سیکل اول (بالاتر از استاندارد منطقه)"
                    hospitalStay="۱۰ الی ۱۵ روز اقامت هتلی"
                    partnerHospitals="پژوهشگاه رویان، مرکز مام تهران"
                />
                <x-department-card
                    category="ivf"
                    icon="female"
                    enTitle="Gynecology"
                    title="زنان، زایمان و لاپاراسکوپی"
                    subtitle="اندومتریوز، فیبروم و جراحی ترمیمی"
                    description="درمان تخصصی اندومتریوز پیشرفته با روش‌های بسته لاپاراسکوپیک، میومکتومی دقیق، زایمان VIP در سوئیت‌های مجهز LDR."
                    successRate="۹۹.۲٪ بدون عوارض پس از عمل"
                    hospitalStay="۱ الی ۲ شب بستری"
                    partnerHospitals="بیمارستان صارم تهران"
                />
                <x-department-card
                    category="cosmetic"
                    icon="face"
                    enTitle="Cosmetic Surgery"
                    title="جراحی پلاستیک و زیبایی"
                    subtitle="رینوپلاستی، پیکرتراشی و لیفت"
                    description="رینوپلاستی طبیعی و فانتزی، لیپوساکشن Vaser، لیپوماتیک، ابدومینوپلاستی، ماموپلاستی و بلفاروپلاستی با برترین متخصصان."
                    successRate="۹۹.۵٪ نتایج طبیعی"
                    hospitalStay="۱ شب کلینیک + ۵ روز اقامت هتل"
                    partnerHospitals="کلینیک فوق‌تخصصی کیان تهران"
                />
                <x-department-card
                    category="weightloss"
                    icon="monitor_weight"
                    enTitle="Bariatric Surgery"
                    title="جراحی چاقی و متابولیک"
                    subtitle="اسلیو گاسترکتومی و بای‌پس معده"
                    description="انجام عمل به روش لاپاراسکوپی با کاترهای اتوماتیک آمریکایی، درمان قطعی دیابت نوع ۲ و برنامه تغذیه ۱۲ ماهه اختصاصی."
                    successRate="۸۰٪ کاهش وزن مازاد طی ۱ سال"
                    hospitalStay="۲ شب بستری + ۴ شب نقاهت"
                    partnerHospitals="بیمارستان آتیه و عرفان تهران"
                />
                <x-department-card
                    category="transplant"
                    icon="medical_information"
                    enTitle="Liver Transplant"
                    title="پیوند کبد و هپاتولوژی"
                    subtitle="قطب پیوند کبد خاورمیانه"
                    description="انجام عمل‌های پیوند کبد اطفال و بزرگسالان از اهداکننده زنده (اقوام درجه یک) در بزرگ‌ترین قطب پیوند خاورمیانه با پروتکل دقیق ایمونولوژی."
                    successRate="۹۵.۵٪ (مطابق برترین مراکز جهان)"
                    hospitalStay="۱۴ روز بستری + ۲۰ روز مانیتورینگ"
                    partnerHospitals="بیمارستان ابوعلی‌سینا شیراز"
                />
                <x-department-card
                    category="transplant"
                    icon="emergency"
                    enTitle="Kidney Transplant"
                    title="پیوند کلیه و اورولوژی"
                    subtitle="غربالگری HLA و مراقبت‌های ایزوله"
                    description="تست‌های فوق‌پیشرفته تطابق بافتی و ژنتیکی Crossmatch، پروتکل‌های ایمونوساپرسیو، برداشت لاپاراسکوپی کلیه اهداکننده."
                    successRate="۹۷٪ پذیرش بافت"
                    hospitalStay="۷ الی ۱۰ روز بستری"
                    partnerHospitals="بیمارستان سینا و لاله تهران"
                />
                <x-department-card
                    category="transplant"
                    icon="colorize"
                    enTitle="Bone Marrow"
                    title="پیوند مغز استخوان (BMT)"
                    subtitle="اتولوگ و آلوژن در Clean Room"
                    description="بخش‌های استریل با فیلتر هپا (HEPA Clean Rooms)، درمان تخصصی تالاسمی ماژور، لوسمی، لنفوم و بیماری‌های متابولیک خونی."
                    successRate="۸۹٪ بازتوانی کامل"
                    hospitalStay="۲۵ الی ۳۵ روز بخش ایزوله"
                    partnerHospitals="مرکز پیوند بیمارستان شریعتی تهران"
                />
                </div>
            </section>

            <!-- 3. All-Inclusive VIP Treatment Packages -->
            <section class="flex flex-col gap-space-lg" id="packages">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-xs">
                    <div>
                        <div class="flex items-center gap-2 text-tertiary-container font-label-md text-label-md mb-1">
                            <span class="material-symbols-outlined text-[18px]">hotel_class</span>
                            <span>شفافیت کامل بدون هیچ هزینه پنهان</span>
                        </div>
                        <h2 class="font-headline-xl text-headline-xl text-primary font-bold">
                            پکیج‌های درمانی جامع و VIP (All-Inclusive)
                        </h2>
                    </div>
                    <x-badge variant="glass" class="text-on-surface-variant">
                        شامل تمامی خدمات کلینیکی، اقامت ۵ ستاره، ترانسفر CIP و مترجم همراه
                    </x-badge>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-md">
                    <x-package-card
                        badge="پرفروش‌ترین پکیج زیبایی"
                        badgeClass="bg-secondary-container text-on-secondary-container"
                        icon="auto_fix_high"
                        title="پکیج VIP رینوپلاستی"
                        description="جراحی زیبایی بینی توسط جراح برتر فلوشیپ با طراحی ۳ بعدی قبل از عمل."
                        price="$1,650"
                        :features="[
                            'اقامت ۴ شب در هتل ۵ ستاره با صبحانه برای ۲ نفر',
                            'تشریفات فرودگاهی CIP و ترانسفر تمام اختصاصی',
                            'مترجم همزمان عربی/انگلیسی در تمامی مراجعات',
                            'کلیه آزمایشات خون، سی‌تی‌اسکن، داروها و چسب',
                            'پشتیبانی و ویزیت آنلاین ۱ ساله پس از جراحی'
                        ]"
                        ctaHref="#upload-records"
                    />

                    <x-package-card
                        badge="تضمین بالاترین نرخ بارداری"
                        badgeClass="bg-primary-fixed text-on-primary-fixed"
                        icon="favorite"
                        title="پکیج جامع درمان IVF"
                        description="سیکل کامل میکروانجکشن ICSI همراه با تست غربالگری ژنتیکی جنین PGD."
                        price="$2,950"
                        :features="[
                            'اقامت ۱۰ شب در سوئیت‌هتل ۵ ستاره لوکس',
                            'ترانسفر اختصاصی کلینیک و فرودگاه',
                            'مترجم تخصصی مقیم حوزه ناباروری و زنان',
                            'کلیه سونوگرافی‌ها، داروها و آزمایش‌های هورمونی',
                            'فریز جنین برای ۲ سال به صورت رایگان'
                        ]"
                        ctaHref="#upload-records"
                    />

                    <x-package-card
                        badge="ایمپلنت اورجینال Zimmer"
                        badgeClass="bg-secondary-container text-on-secondary-container"
                        icon="cloud_download"
                        title="تعویض کامل مفصل زانو"
                        description="جراحی آرتروپلاستی زانو با پروتز بیولوژیک و فیزیوتراپی فشرده توانبخشی."
                        price="$3,800"
                        :features="[
                            '۳ شب بستری در سوئیت VIP بیمارستان + ۵ شب هتل',
                            '۵ جلسه فیزیوتراپی اختصاصی در محل اقامت',
                            'ترانسفر با آمبولانس VIP یا خودرو تشریفاتی مجهز',
                            'شناسنامه اصالت پروتز با گارانتی معتبر بین‌المللی',
                            'ویزیت‌های فالوآپ و تهیه واکر طبی ارتوپدی'
                        ]"
                        ctaHref="#upload-records"
                    />

                    <x-package-card
                        badge="پشتیبانی یک‌ساله تغذیه"
                        badgeClass="bg-primary-fixed text-on-primary-fixed"
                        icon="fitness_center"
                        title="اسلیو معده لاپاراسکوپی"
                        description="عمل لاپاراسکوپی چاقی با استاپلرهای پیشرفته و اقامت ۵ ستاره نقاهت."
                        price="$2,400"
                        :features="[
                            '۲ شب بستری خصوصی بیمارستان + ۳ شب هتل ۵ ستاره',
                            'بررسی کامل فوق‌تخصصی قلب، ریه و آندوسکوپی',
                            'ترانسفر VIP رفت و برگشت فرودگاهی و بیمارستانی',
                            'برنامه جامع رژیم غذایی ۱۲ ماهه با مشاوره آنلاین',
                            'بسته‌های مکمل ویتامینی و دارویی مرحله اول نقاهت'
                        ]"
                        ctaHref="#upload-records"
                    />
                </div>
            </section>

            <!-- 4. Interactive Call to Action & Medical Document Upload -->
            <section id="upload-records" class="relative rounded-3xl bg-gradient-to-r from-primary via-primary-container to-secondary p-space-lg lg:p-space-xl text-on-primary shadow-2xl overflow-hidden">
                <div class="absolute -bottom-24 -left-24 w-80 h-80 rounded-full bg-secondary-fixed/20 blur-3xl pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center relative z-10">
                    <div class="lg:col-span-7 flex flex-col gap-space-sm">
                        <div class="inline-flex items-center gap-2 bg-on-primary/15 backdrop-blur-md px-4 py-1.5 rounded-xl text-on-primary font-label-sm text-label-sm self-start">
                            <span class="material-symbols-outlined text-[16px]">schedule</span>
                            <span>پاسخگویی سریع تیم پزشکی در کمتر از ۱۲ ساعت</span>
                        </div>

                        <h2 class="font-headline-xl text-headline-xl text-on-primary font-bold">
                            ارزیابی رایگان پرونده پزشکی توسط سرتیم جراحان
                        </h2>

                        <p class="font-body-md text-body-md text-inverse-on-surface leading-relaxed">
                            مدارک پزشکی، نتایج سونوگرافی، ام‌آر‌آی (MRI) یا گزارش پاتولوژی خود را بارگذاری نمایید. پزشکان معتمد پرشیا مدیس پس از بررسی دقیق، طرح درمان سفارشی، مدت زمان اقامت و پیش‌فاکتور شفاف را برای شما ارسال خواهند کرد.
                        </p>

                        <div class="flex flex-wrap items-center gap-space-md pt-2">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary-fixed text-[20px]">verified_user</span>
                                <span class="font-label-md text-label-md font-medium">حفظ ۱۰۰٪ محرمانگی اطلاعات</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary-fixed text-[20px]">support_agent</span>
                                <span class="font-label-md text-label-md font-medium">مشاوره به زبان عربی و انگلیسی</span>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-5 bg-surface-container-lowest/95 backdrop-blur-2xl text-on-surface rounded-2xl p-space-md shadow-2xl flex flex-col gap-space-sm border border-white glass-panel">
                        <div class="flex items-center justify-between">
                            <h3 class="font-headline-md text-headline-md font-bold text-on-surface">فرم ارسال پرونده</h3>
                            <span class="font-label-sm text-label-sm text-primary font-bold bg-primary/10 px-2.5 py-1 rounded-lg">مشاوره رایگان</span>
                        </div>

                        <form action="#" method="POST" class="flex flex-col gap-3">
                            @csrf
                            <div>
                                <label class="font-label-sm text-label-sm text-on-surface-variant block mb-1 font-medium">نام و نام خانوادگی بیمار</label>
                                <input class="w-full bg-surface-container-low/70 px-3.5 py-2.5 rounded-xl font-body-sm text-body-sm text-on-surface focus:outline-none focus:bg-surface-container-lowest shadow-inner border border-outline-variant/30" placeholder="مثال: علی الموسوی" type="text">
                            </div>

                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="font-label-sm text-label-sm text-on-surface-variant block mb-1 font-medium">کشور مبدأ</label>
                                    <select class="w-full bg-surface-container-low/70 px-3 py-2.5 rounded-xl font-body-sm text-body-sm text-on-surface focus:outline-none focus:bg-surface-container-lowest shadow-inner cursor-pointer border border-outline-variant/30">
                                        <option>عمان (Oman)</option>
                                        <option>عراق (Iraq)</option>
                                        <option>امارات (UAE)</option>
                                        <option>کویت (Kuwait)</option>
                                        <option>قطر (Qatar)</option>
                                        <option>سایر کشورها</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="font-label-sm text-label-sm text-on-surface-variant block mb-1 font-medium">شماره واتساپ</label>
                                    <input class="w-full bg-surface-container-low/70 px-3 py-2.5 rounded-xl font-body-sm text-body-sm text-on-surface focus:outline-none focus:bg-surface-container-lowest shadow-inner text-left border border-outline-variant/30" dir="ltr" placeholder="+968 9123 4567" type="tel">
                                </div>
                            </div>

                            <div>
                                <label class="font-label-sm text-label-sm text-on-surface-variant block mb-1 font-medium">دپارتمان مورد نظر</label>
                                <select class="w-full bg-surface-container-low/70 px-3 py-2.5 rounded-xl font-body-sm text-body-sm text-on-surface focus:outline-none focus:bg-surface-container-lowest shadow-inner cursor-pointer border border-outline-variant/30">
                                    <option>جراحی پلاستیک و زیبایی</option>
                                    <option>درمان ناباروری و IVF</option>
                                    <option>قلب و عروق اینترونشنال</option>
                                    <option>ارتوپدی و تعویض مفاصل</option>
                                    <option>انکولوژی و شیمی‌درمانی</option>
                                    <option>مغز، اعصاب و ستون فقرات</option>
                                    <option>پیوند اعضا (کبد، کلیه، BMT)</option>
                                    <option>جراحی چاقی و متابولیک</option>
                                </select>
                            </div>

                            <div class="border-dashed border-2 border-outline-variant/50 hover:border-primary/50 bg-surface-container-low/40 rounded-xl p-3 flex flex-col items-center justify-center text-center cursor-pointer transition-colors">
                                <span class="material-symbols-outlined text-primary text-[28px] mb-1">upload_file</span>
                                <span class="font-label-sm text-label-sm font-semibold text-on-surface">آپلود مدارک، تصاویر یا گزارش آزمایش</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant text-[10px]">فرمت‌های مجاز: PDF, JPG, DICOM (حداکثر ۲۰ مگابایت)</span>
                            </div>

                            <x-button
                                type="submit"
                                variant="primary"
                                size="lg"
                                class="w-full !rounded-xl justify-center font-bold mt-1 shadow-[0_4px_14px_rgba(173,97,38,0.25)]"
                            >
                                ثبت درخواست و برآورد هزینه (رایگان)
                            </x-button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
</x-layouts.app>
