<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;

class RedirectIfNotSubmitted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the request is a POST request (form submission)
        if ($request->isMethod('post')) {
            return $next($request);
        }

        // Check if the user is already on the GPA route
        if (Route::currentRouteName() === 'gpa') {
            return $next($request);
        }

        // Redirect to the GPA route if not a POST request or on the GPA page
        return redirect()->route('gpa');
    }
}
