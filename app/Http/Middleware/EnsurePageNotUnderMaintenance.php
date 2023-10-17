<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsurePageNotUnderMaintenance
{
    public const MAINTENANCE_PATH = 'maintenance';
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (env('UNDER_MAINTENANCE')) {
            if ($request->path() === EnsurePageNotUnderMaintenance::MAINTENANCE_PATH) {
                return $next($request);
            }
            return redirect('/maintenance');
        }
        // If not under maintenance but pointing to maintenance page.
        elseif ($request->path() === EnsurePageNotUnderMaintenance::MAINTENANCE_PATH) {
            return redirect('/');
        }

        return $next($request);
    }
}
