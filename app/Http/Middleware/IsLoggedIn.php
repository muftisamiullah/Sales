<?php

namespace App\Http\Middleware;

use Closure;

class IsLoggedIn
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
        if(!session()->has('access_token')){
            return redirect('admin');
        }
        // if(session()->has('user_access_token')){
        //     return redirect()->intended('admin/dashboard');
        // }
        return $next($request);
    }
}
