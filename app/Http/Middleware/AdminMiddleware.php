<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
//        dd($request);
<<<<<<< HEAD
        if (auth()->user()->role !== 'Admin') {

            return redirect()->route('home');


=======
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home');
>>>>>>> origin/main
        }
        return $next($request);
    }
}
