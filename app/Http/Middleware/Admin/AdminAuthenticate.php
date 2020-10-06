<?php

namespace App\Http\Middleware\Admin;

use App\AuthToken;
use Closure;

class AdminAuthenticate
{

    public function __construct()
    {
        //
    }

    public function handle($request, Closure $next)
    {

        //only checks JWT and expiration and if valid

        //Step 1: Get request Header
        //Step 2: Check access token header and Refresh Token Header exist.
        //Step 3: Check if the token access token is expired
        //Step 4: 



        return $next($request);
    }
}
