<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Allowed language codes.
     */
    protected array $supportedLocales = ['fa', 'ar', 'en'];

    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale');

        // Check if the URL prefix locale is valid
        if (! in_array($locale, $this->supportedLocales)) {
            abort(404);
        }

        // Set application locale
        App::setLocale($locale);

        // Ensure named routes keep the current locale automatically
        URL::defaults(['locale' => $locale]);

        return $next($request);
    }
}
