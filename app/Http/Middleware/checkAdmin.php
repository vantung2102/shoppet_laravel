<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('admin.login');
        }
    }
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}