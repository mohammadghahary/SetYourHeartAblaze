<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'setLocale' => SetLocale::class,
        ]);

        $middleware->redirectGuestsTo(function (Request $request): string {
            $locale = $request->route('locale') ?? app()->getLocale();

            return route('login', ['locale' => $locale]);
        });

        $middleware->redirectUsersTo(function (Request $request): string {
            $locale = $request->route('locale') ?? app()->getLocale();

            return route('home', ['locale' => $locale]);
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();
