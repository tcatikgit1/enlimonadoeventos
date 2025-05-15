<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class NonceMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

    $nonce = rtrim(strtr(base64_encode(random_bytes(16)), '+/', '-_'), '=');
    $request->attributes->set('csp_nonce', $nonce);
    session(['csp_nonce' => $nonce]);

    view()->share('nonce', $nonce);

    $response = $next($request);

    $response->headers->set('Content-Security-Policy', "script-src 'self' 'nonce-{$nonce}';");

    return $response;
    }
}
