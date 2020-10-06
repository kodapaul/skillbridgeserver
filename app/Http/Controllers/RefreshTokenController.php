<?php

namespace App\Http\Controllers;

use App\Admin;
use App\AuthToken;
use Carbon\Carbon;

class RefreshTokenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function refreshAdmin()
    {
        //
    }

    public function refreshUser()
    {
        //
    }

    public function refreshPartner()
    {
        //
    }

    public function refresh($user_type)
    {

        $refresh = '';
        $access = '';

        $model = AuthToken::where([
            ['access_token', $access],
            ['refresh_token', $refresh],
            ['user_type', $user_type]
        ])->first();

        //check if expired
        if ($model != null) {
            if (Carbon::parse($model->expiration) < Carbon::now()) {

                //generate new token

                switch ($user_type) {
                    case "admin":
                        break;
                    case "partner":
                        echo "Your favorite color is blue!";
                        break;
                    case "user":
                        echo "Your favorite color is green!";
                        break;
                    default:
                        return response('unauthorized', 402);
                }
            } else {
                //not yet expired
            }
        } else {
            //return back to login
            return response('You have to login', 403);
        }
    }

    //
}
