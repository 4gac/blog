<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Referent
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
            return $next($request); 
        }        
        elseif (Auth::check() && Auth::user()->role == 'ucastnik') {
            return redirect()->route('ucastnik');
        }
        elseif (Auth::check() && Auth::user()->role == 'admin') {
            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }
}