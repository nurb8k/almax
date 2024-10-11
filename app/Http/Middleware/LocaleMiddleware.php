<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('applocale', config('app.locale'));
        App::setLocale($locale);
        return $next($request);
    }
}
