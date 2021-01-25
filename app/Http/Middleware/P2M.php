<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class p2m
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
        if (!in_array(auth()->user()->role, ['tu', 'p2m'])) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
