<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServicesPageTest extends TestCase
{
    /**
     * Test that the services page returns an HTTP 200 OK response.
     */
    public function test_services_page_returns_successful_response(): void
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
        $response->assertViewIs('services');
        $response->assertSee('خدمات درمانی و دپارتمان‌های فوق‌تخصصی پرشیا مدیس');
    }

    /**
     * Test that the clinical departments and category filters are rendered.
     */
    public function test_services_page_renders_clinical_departments(): void
    {
        $response = $this->get('/services');

        $response->assertSee('انکولوژی و سرطان‌شناسی');
        $response->assertSee('جراحی مغز و اعصاب');
        $response->assertSee('قلب و عروق اینترونشنال');
        $response->assertSee('مرکز ناباروری، IVF و ژنتیک');
        $response->assertSee('پیوند مغز استخوان (BMT)');
    }

    /**
     * Test that VIP packages and the medical assessment form are rendered.
     */
    public function test_services_page_renders_vip_packages_and_consultation_form(): void
    {
        $response = $this->get('/services');

        $response->assertSee('پکیج‌های درمانی جامع و VIP (All-Inclusive)');
        $response->assertSee('پکیج VIP رینوپلاستی');
        $response->assertSee('$1,650');
        $response->assertSee('ارزیابی رایگان پرونده پزشکی توسط سرتیم جراحان');
        $response->assertSee('فرم ارسال پرونده');
    }
}
