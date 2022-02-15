<?php

namespace App\Http\Middleware;

use App\Support\Google2FAAuthenticator;
use Closure;
use http\Client\Curl\User;

class LoginSecurityMiddleware
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
        $admin=\App\Models\User::where('role','admin')->first();
        if($admin->authentication==1)
        {



        $authenticator = app(Google2FAAuthenticator::class)->boot($request);
   $get=\Session::get('enable2fac');

      if ($get==true)
     {

    if ($authenticator->isAuthenticated()) {
        return $next($request);
    }
    else{
        return $authenticator->makeRequestOneTimePasswordResponse();
    }
}
else{

    \Session::put('enable2fac',true);
    return $authenticator->makeRequestOneTimePasswordResponse();
}
        }
        else{

            return $next($request);
        }






    }
}
