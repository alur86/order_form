<?php

namespace App\Http\Middleware;

use Closure;

class Form
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $response = $next($request);

        $response->headers->set('KoSiteKey:', 'KoSiteKey="test198"', 'Access-Control-Allow-Methods : POST');
    
 
        return $next($request);
    }
}
