<?php

namespace App\Http\Middleware;

use App\Models\SettingWeb;
use Closure;
use Illuminate\Http\Request;

class isAktif
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $web = SettingWeb::first();
        if ($web && $web->is_aktif == true) {
            return $next($request);
        }
        return redirect('maintenace');
    }
}
