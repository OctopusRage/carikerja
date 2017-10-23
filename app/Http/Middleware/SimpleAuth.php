<?php

namespace App\Http\Middleware;

use Closure;

class SimpleAuth
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
        if(empty(session('simpleauth'))) {
            return redirect('home');
        }
        return $next($request);
    }
}
