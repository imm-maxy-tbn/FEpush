<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HideFooter
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
        // Set the hideFooter variable in the request
        $request->merge(['hideFooter' => true]);
        return $next($request);
    }
}
