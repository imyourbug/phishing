<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $activeLanguages = Cache::remember('active-languages', Carbon::now()->addHours(2), function () {
            return Language::where('status', 1)->pluck('id', 'code');
        });
        if (Session::has('locale')) {
            $locale = Session::get('locale');
            if (!isset($activeLanguages[$locale])) {
                $locale = 'en';
            }
            App::setLocale($locale);
        }
        session()->put('getIpInfoUrl', 'https://freeipapi.com/api/json/' . $request->ip());

        return $next($request);
    }
}
