<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MasterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth('admin')->check() and (auth('admin')->user() == null or auth('admin')->user()->role != 1)) {
            return redirect()->route('login')->with('error', 'You are not authorized to access this page.');
        }
        return $next($request);
    }
}
