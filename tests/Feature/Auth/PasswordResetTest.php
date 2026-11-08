<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_screen_can_be_rendered(): void
    {
        $response = $this->get(route('password.request', ['locale' => 'fa']));

        $response->assertStatus(200);
        $response->assertViewIs('auth.forgot-password');
        $response->assertSee('بازیابی رمز عبور');
    }

    public function test_reset_password_link_can_be_requested(): void
    {
        $user = User::factory()->create([
            'email' => 'reset@example.com',
        ]);

        $response = $this->post(route('password.email', ['locale' => 'fa']), [
            'email' => 'reset@example.com',
        ]);

        $response->assertSessionHas('status', trans('passwords.sent'));
    }

    public function test_reset_password_screen_can_be_rendered(): void
    {
        $response = $this->get(route('password.reset', [
            'locale' => 'fa',
            'token' => 'test-token',
            'email' => 'user@example.com',
        ]));

        $response->assertStatus(200);
        $response->assertViewIs('auth.reset-password');
        $response->assertSee('تنظیم رمز عبور جدید');
    }

    public function test_password_can_be_reset_with_valid_token(): void
    {
        Event::fake();

        $user = User::factory()->create([
            'email' => 'patient@example.com',
            'password' => 'old-password',
        ]);

        $token = Password::createToken($user);

        $response = $this->post(route('password.store', ['locale' => 'fa']), [
            'token' => $token,
            'email' => 'patient@example.com',
            'password' => 'new-secure-pass',
            'password_confirmation' => 'new-secure-pass',
        ]);

        $response->assertRedirect(route('login', ['locale' => 'fa']));
        $response->assertSessionHas('status', trans('passwords.reset'));

        $this->assertTrue(Hash::check('new-secure-pass', $user->fresh()->password));
        Event::assertDispatched(PasswordReset::class);
    }

    public function test_password_can_not_be_reset_with_invalid_token(): void
    {
        $user = User::factory()->create([
            'email' => 'patient@example.com',
            'password' => 'old-password',
        ]);

        $response = $this->post(route('password.store', ['locale' => 'fa']), [
            'token' => 'invalid-token',
            'email' => 'patient@example.com',
            'password' => 'new-secure-pass',
            'password_confirmation' => 'new-secure-pass',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertFalse(Hash::check('new-secure-pass', $user->fresh()->password));
    }
}
