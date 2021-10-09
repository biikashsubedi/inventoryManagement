<?php

namespace App\Http\Middleware;


use App\Services\System\LanguageService;
use Closure;
use Cookie;
use Illuminate\Support\Facades\View;

class Language
{
    public function __construct(LanguageService $languageService)
    {
        $this->languageService = $languageService;
    }

    public function handle($request, Closure $next)
    {
        if (Cookie::get('lang') !== null) {
            $locale = Cookie::get('lang');
        } elseif (session()->get('lang') !== null) {
            $locale = session()->get('lang');
        } else {
            $locale = env('DEFAULT_LOCALE', 'en');
        }
        app()->setlocale($locale);
        View::share('globalLocale', $locale);

        return $next($request);
    }

}
