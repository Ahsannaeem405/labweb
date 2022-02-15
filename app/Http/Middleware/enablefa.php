<?php

namespace App\Http\Middleware;

use Closure;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class enablefa
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
        $admin=\App\Models\User::where('role','admin')->first();
        if($admin->authentication==1)
        {
        $user = \Auth::user();
        $google2fa_url = "";
        $secret_key = "";

        if($user->loginSecurity()->exists()){
            return $next($request);
        }
        else{
          return  redirect('/2fa');
        }

    }
else{

return $next($request);
}

    }
}
