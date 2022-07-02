<?php

namespace App\Http\Middleware;

use Closure;
use App\Providers\RouteServiceProvider;

class Auth
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
        if (session('auth')) {
            return $next($request);
        } else {
            session()->flash('status', 'Для начала введите пароль!');
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
