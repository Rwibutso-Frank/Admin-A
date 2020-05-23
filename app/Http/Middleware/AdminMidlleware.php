<?php

namespace App\Http\Middleware;
use Illuminate\Support\Fecades\Auth;
use Closure;

class AdminMidlleware
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
       if(Auth::user()->user_type == 'admin'){
        return $next($request);
         }
       else
       {

        return redirect('/home')->with('status','You are not allowed to modify some bcz you are not an adminstrator');
       }
    }
}
