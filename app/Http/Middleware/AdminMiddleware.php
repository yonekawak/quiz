<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if(auth()->check()) {

            $role = auth()->user()->role;

            if(in_array($role, ['admin'])) {

                return $next($request);

            }

        }

        abort(403, '管理者権限がありません。');
    }
}
