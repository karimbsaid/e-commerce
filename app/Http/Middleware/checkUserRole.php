<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , ...$roles): Response
    {   if(auth()->check())
        {
            $userRole = $request->user()->roles;
            if (!in_array($userRole, $roles)) {
                return redirect()->route('dashboard');
            }
        }

        return $next($request);
    }
}
