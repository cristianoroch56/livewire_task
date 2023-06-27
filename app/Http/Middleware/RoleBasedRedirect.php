<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleBasedRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = $request->user();

        if ($user && $user->hasAnyRole($roles)) {
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard'); // Redirect admin to the admin dashboard
            } elseif ($user->hasRole('user')) {
                return redirect()->route('user.dashboard'); // Redirect user to the user dashboard
            }
        }

        return $next($request);
    }
}
