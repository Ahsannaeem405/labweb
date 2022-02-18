<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutoLogout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


        if (! session()->has('lastActivityTime')) {
            session(['lastActivityTime' => now()]);
        }

        if (now()->diffInMinutes(session('lastActivityTime')) >= (15) ) {  // also you can this value in your config file and use here
            if (\Auth::check()) {


                \Session::flush();
               \Auth::logout();

                return redirect('/login');
            }

        }
        else{
            session(['lastActivityTime' => now()]);
            return $next($request);
        }
    }
}
