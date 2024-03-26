<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Chauffeur
{
   
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('chauffeur')->check()) {
            abort(401);
        }
        return $next($request);
    }
}