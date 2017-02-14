<?php

namespace App\Http\Middleware;

use Closure;

class Kontributor
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
        if(\Auth::check() && \Auth::user()->sebagai == 'kontributor' ) {        
            return $next($request);
        }
        return response('Unauthorized', 401);
    }
}