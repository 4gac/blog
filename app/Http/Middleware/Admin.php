<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
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
        if (Auth::check() && Auth::user()->role == 'referent') {
            return redirect()->route('referent');
        }        
        elseif (Auth::check() && Auth::user()->role == 'ucastnik') {
            return redirect()->route('ucastnik');
        }
        elseif (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request); 
        }
        else {
            return redirect()->route('login');
        }
    }
}