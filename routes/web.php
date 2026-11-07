<?php

use Illuminate\Support\Facades\Route;

// Redirect default root URL to default language (fa)
Route::get('/', function () {
    return redirect()->route('home', ['locale' => 'fa']);
});

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
