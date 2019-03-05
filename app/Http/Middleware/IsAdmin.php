<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
class IsAdmin
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
        // $user= JWTAuth::parseToken()->authenticate();
        // return $user;
        // if(!session()->has('access_token')){
        //     return redirect('admin');
        // }
        return $next($request);
    }
}