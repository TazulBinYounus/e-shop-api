<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CorsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Set CORS headers
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        $response->headers->set('Access-Control-Allow-Headers', 'x-allowed-header, x-other-allowed-header');
        $response->headers->set('Access-Control-Allow-Methods', 'DELETE, GET, POST, PUT');
        $response->headers->set('Access-Control-Allow-Credentials', 'true');

        return $response;
    }
}
