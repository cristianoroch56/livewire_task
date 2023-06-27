<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role): Response
    {
        // Check if the user is authenticated and has the specified role
        if (!auth()->check() || !auth()->user()->hasRole($role)) {
            abort(403, 'Unauthorized action.'); // Return a 403 Forbidden response if not authorized
        }

        return $next($request);
    }
}
