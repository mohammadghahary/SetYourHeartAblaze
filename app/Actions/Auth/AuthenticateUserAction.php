<?php

namespace App\Actions\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthenticateUserAction
{
    /**
     * Maximum allowed attempts before temporary lockout.
     */
    protected const int MAX_ATTEMPTS = 5;

    /**
     * Execute authentication attempt.
     *
     * @param  array{email: string, password: string, remember?: bool}  $credentials
     *
     * @throws ValidationException
     */
    public function execute(array $credentials, ?Request $request = null): bool
    {
        $throttleKey = $this->throttleKey($credentials['email'], $request?->ip());

        $this->ensureIsNotRateLimited($throttleKey, $request);

        $remember = (bool) ($credentials['remember'] ?? false);

        if (! Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']], $remember)) {
            RateLimiter::hit($throttleKey);

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($throttleKey);

        $request?->session()->regenerate();

        return true;
    }

    /**
     * Ensure the user is not rate-limited.
     *
     * @throws ValidationException
     */
    protected function ensureIsNotRateLimited(string $throttleKey, ?Request $request = null): void
    {
        if (! RateLimiter::tooManyAttempts($throttleKey, self::MAX_ATTEMPTS)) {
            return;
        }

        if ($request !== null) {
            event(new Lockout($request));
        }

        $seconds = RateLimiter::availableIn($throttleKey);

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => (int) ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Build the rate-limiting throttle key.
     */
    protected function throttleKey(string $email, ?string $ip): string
    {
        return Str::transliterate(Str::lower($email).'|'.($ip ?? '127.0.0.1'));
    }
}
