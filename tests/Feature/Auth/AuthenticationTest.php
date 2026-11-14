<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get(route('login', ['locale' => 'fa']));

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
        $response->assertSee('ورود به سامانه پرشیا مدیس');
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->create([
            'email' => 'ali@example.com',
            'password' => 'secret123',
        ]);

        $response = $this->post(route('login', ['locale' => 'fa']), [
            'email' => 'ali@example.com',
            'password' => 'secret123',
        ]);

        $this->assertAuthenticatedAs($user);
        $response->assertRedirect(route('home', ['locale' => 'fa']));
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create([
            'email' => 'ali@example.com',
            'password' => 'secret123',
        ]);

        $response = $this->post(route('login', ['locale' => 'fa']), [
            'email' => 'ali@example.com',
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
        $response->assertSessionHasErrors('email');
    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('logout', ['locale' => 'fa']));

        $this->assertGuest();
        $response->assertRedirect(route('home', ['locale' => 'fa']));
    }

    public function test_users_are_rate_limited_after_too_many_failed_attempts(): void
    {
        $user = User::factory()->create([
            'email' => 'test-throttle@example.com',
            'password' => 'valid-pass',
        ]);

        for ($i = 0; $i < 5; $i++) {
            $this->post(route('login', ['locale' => 'fa']), [
                'email' => 'test-throttle@example.com',
                'password' => 'wrong-pass',
            ]);
        }

        $response = $this->post(route('login', ['locale' => 'fa']), [
            'email' => 'test-throttle@example.com',
            'password' => 'wrong-pass',
        ]);

        $response->assertSessionHasErrors('email');
        $errors = session('errors')->get('email');
        $this->assertStringContainsString('بیش از حد مجاز', $errors[0]);
    }
}
