<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (!Auth::check()) {
        //     return redirect('/'); // User is not logged in, redirect to homepage
        // }

        // if (Auth::user()->role == 'admin' && !$request->is('dashboard')) {
        //     return redirect('/dashboard'); // Only redirect if not already on dashboard
        // }


        return $next($request);
    }
}
