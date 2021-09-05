<?php

namespace App\Http\Middleware;

use Closure;

class agecheck
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
        if($request->age && $request->age<18)
        {
            return redirect("noaccess");
        }
        return $next($request);
    }
}
