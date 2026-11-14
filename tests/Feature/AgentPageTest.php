<?php

namespace Tests\Feature;

use Tests\TestCase;

class AgentPageTest extends TestCase
{
    /**
     * Test that the agent page returns an HTTP 200 OK response.
     */
    public function test_agent_page_returns_successful_response(): void
    {
        $response = $this->get('/agent');

        $response->assertStatus(200);
        $response->assertViewIs('agent');
        $response->assertSee('همراه و پشتیبان اختصاصی بیمار');
    }

    /**
     * Test that the /companion legacy URL redirects to /agent.
     */
    public function test_companion_route_redirects_to_agent(): void
    {
        $response = $this->get('/companion');

        $response->assertRedirect(route('agent'));
    }

    /**
     * Test that care pillars and concierge lead profiles are rendered.
     */
    public function test_agent_page_renders_care_pillars_and_concierge_leads(): void
    {
        $response = $this->get('/agent');

        $response->assertSee('ستون‌های ۴گانه خدمات همراه (Hamrah Concierge)');
        $response->assertSee('تشریفات فرودگاهی CIP');
        $response->assertSee('مترجم همزمان پزشکی');
        $response->assertSee('دکتر مریم سعیدی');
        $response->assertSee('احمد التمیمی');
        $response->assertSee('سارا المرادی');
    }

    /**
     * Test that the VIP companion booking form is rendered.
     */
    public function test_agent_page_renders_booking_form(): void
    {
        $response = $this->get('/agent');

        $response->assertSee('درخواست سرپرست و همراه بالینی (Hamrah VIP)');
        $response->assertSee('فرم ثبت درخواست همراه');
        $response->assertSee('ثبت درخواست و دریافت مشاوره فوری');
    }
}
