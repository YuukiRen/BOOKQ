<?php

namespace App\Http\Middleware;

use Closure;

class banned
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

        $user = \App\User::where('email', $request->email)->first();
        return $next($request);
    }
}
