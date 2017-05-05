<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfAdminAuthenticated
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
        if(Auth::guard()->check()) {
            return redirect('/admin/login');
        }

        if(Auth::guard('backend')->check()) {
            return redirect('/admin/modules');
        }

        return $next($request);
    }
}
