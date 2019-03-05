<?php

namespace App\Http\Middleware;

use Closure;

class IsAgentLoggedIn
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
        if(!session()->has('agent_access_token')){
            return redirect('agentadmin');
        }
        return $next($request);
    }
}
