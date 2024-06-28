<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckCompanyRegistration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if (!$user) {
            // Jika pengguna tidak terautentikasi, arahkan ke halaman login
            return redirect()->route('login');
        }

        if (!$user->companies) {
            // Jika pengguna tidak memiliki perusahaan, arahkan ke halaman verifikasi diri
            return redirect()->route('verifikasidiri');
        }

        // Jika pengguna memiliki perusahaan, lanjutkan ke rute yang diminta
        return $next($request);
    }
}
