<?php

namespace App\Http\Middleware\Tenant;

use Closure;

class ConfigMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        config()->set('app.name', $request->getTenant()->name);
        return $next($request);
    }
}
