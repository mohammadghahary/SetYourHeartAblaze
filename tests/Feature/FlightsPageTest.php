<?php

namespace Tests\Feature;

use Tests\TestCase;

class FlightsPageTest extends TestCase
{
    /**
     * Test that the flights page returns an HTTP 200 OK response.
     */
    public function test_flights_page_returns_successful_response(): void
    {
        $response = $this->get('/flights');

        $response->assertStatus(200);
        $response->assertViewIs('flights');
        $response->assertSee('رزرو پرواز اختصاصی درمانی');
    }

    /**
     * Test that the /flights-hotels legacy URL redirects to /flights.
     */
    public function test_flights_hotels_route_redirects_to_flights(): void
    {
        $response = $this->get('/flights-hotels');

        $response->assertRedirect(route('flights'));
    }

    /**
     * Test that international flight routes are rendered.
     */
    public function test_flights_page_renders_flight_routes(): void
    {
        $response = $this->get('/flights');

        $response->assertSee('دبی (DXB)');
        $response->assertSee('استانبول (IST)');
        $response->assertSee('دوحه (DOH)');
        $response->assertSee('مسقط (MCT)');
        $response->assertSee('باکو (GYD)');
        $response->assertSee('بغداد (BGW)');
    }

    /**
     * Test that medical-grade recovery hotels are rendered.
     */
    public function test_flights_page_renders_recovery_hotels(): void
    {
        $response = $this->get('/flights');

        $response->assertSee('هتل اسپیناس پالاس (سعادت‌آباد)');
        $response->assertSee('هتل پارسیان آزادی (تهران)');
        $response->assertSee('هتل فرودگاهی رکسان');
    }

    /**
     * Test that the two-step package builder and MEDIF FAQs are rendered.
     */
    public function test_flights_page_renders_package_builder_and_faq(): void
    {
        $response = $this->get('/flights');

        $response->assertSee('ترکیب هوشمند بلیط پرواز و هتل نقاهتگاه در ۲ گام ساده');
        $response->assertSee('محاسبه‌گر هزینه پرواز و هتل');
        $response->assertSee('فرم مجوز پزشکی پرواز (MEDIF) چگونه صادر می‌شود؟');
        $response->assertSee('+98 (21) 8800-4040');
    }
}
