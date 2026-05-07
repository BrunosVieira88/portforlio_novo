<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('locale')) {
            $request->session()->put('locale', 'en');
        }

        app()->setLocale(session('locale', 'en'));

        return $next($request);
    }
}
