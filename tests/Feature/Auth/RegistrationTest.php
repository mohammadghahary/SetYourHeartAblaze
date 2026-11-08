<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get(route('register', ['locale' => 'fa']));

        $response->assertStatus(200);
        $response->assertViewIs('auth.register');
        $response->assertSee('ایجاد حساب کاربری جدید');
    }

    public function test_new_users_can_register(): void
    {
        $response = $this->post(route('register', ['locale' => 'fa']), [
            'name' => 'Sara Ahmadi',
            'email' => 'sara@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'name' => 'Sara Ahmadi',
            'email' => 'sara@example.com',
        ]);
        $response->assertRedirect(route('home', ['locale' => 'fa']));
    }

    public function test_registration_fails_with_invalid_or_duplicate_email(): void
    {
        User::factory()->create([
            'email' => 'existing@example.com',
        ]);

        $response = $this->post(route('register', ['locale' => 'fa']), [
            'name' => 'New User',
            'email' => 'existing@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_registration_fails_when_passwords_do_not_match(): void
    {
        $response = $this->post(route('register', ['locale' => 'fa']), [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123',
            'password_confirmation' => 'different-password',
        ]);

        $response->assertSessionHasErrors('password');
        $this->assertGuest();
    }
}
