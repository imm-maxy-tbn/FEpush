<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        \Log::info('CheckCompanyRegistration middleware executed.');
        if ($user && $user->companies()->exists()) {
            \Log::info('User has a company, redirecting to /homepage.');
            return redirect('/homepage');
        }
        \Log::info('User does not have a company, proceeding to /imm.');

        return $next($request);
    }
}
