<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// Redirect default root URL to default language (fa)
Route::get('/', function () {
    return redirect()->route('home', ['locale' => 'fa']);
});

// Top-level vanity redirects to default locale
Route::redirect('/login', '/fa/login');
Route::redirect('/register', '/fa/register');
Route::redirect('/forgot-password', '/fa/forgot-password');

Route::prefix('{locale}')
    ->whereIn('locale', ['fa', 'ar', 'en'])
    ->middleware(['web', 'setLocale'])
    ->group(function () {

        Route::get('/', function () {
            return view('welcome');
        })->name('home');

        Route::get('/services', function () {
            return view('services');
        })->name('services');

        Route::get('/agent', function () {
            return view('agent');
        })->name('agent');

        Route::get('/companion', function () {
            return redirect()->route('agent');
        });

        Route::get('/flights', function () {
            return view('flights');
        })->name('flights');

        Route::get('/flights-hotels', function () {
            return redirect()->route('flights');
        });

        // Authentication Guest Routes
        Route::middleware('guest')->group(function () {
            Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
            Route::post('/register', [RegisteredUserController::class, 'store']);

            Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
            Route::post('/login', [AuthenticatedSessionController::class, 'store']);

            Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
            Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

            Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
            Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.store');
        });

        // Authenticated User Routes
        Route::middleware('auth')->group(function () {
            Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
        });

        // Language switch endpoint (preserves current page when switching languages)
        Route::get('/switch-lang/{newLocale}', function (string $locale, string $newLocale) {
            if (! in_array($newLocale, ['fa', 'ar', 'en'])) {
                abort(400);
            }

            $previousUrl = url()->previous();
            $currentBaseUrl = url("/{$locale}");
            $newBaseUrl = url("/{$newLocale}");

            if (str_starts_with($previousUrl, $currentBaseUrl)) {
                $targetUrl = substr_replace($previousUrl, $newBaseUrl, 0, strlen($currentBaseUrl));

                return redirect()->to($targetUrl);
            }

            return redirect()->route('home', ['locale' => $newLocale]);
        })->name('lang.switch');
    });
