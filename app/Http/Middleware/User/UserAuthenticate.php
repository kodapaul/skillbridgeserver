<?php

namespace App\Http\Middleware\User;

use Closure;

class UserAuthenticate
{

    public function __construct()
    {
        //
    }

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
