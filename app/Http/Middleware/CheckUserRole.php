<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && $request->user()->role === 'staff') {
            return $next($request);
        } elseif ($request->user() && $request->user()->role === 'student') {
            return redirect()->route('profile.edit');
        } else {
            abort(403, 'Unauthorized');
        }
    }
}
