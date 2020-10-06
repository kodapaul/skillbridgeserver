<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthToken extends Model
{
    protected $table = 'auth_tokens';


    public function generateToken(AuthToken $model)
    {

        //Delete current JWT of the user

        $secret = env('JWT_SECRET');

        $header = $this->base64url_encode(
            json_encode([
                'typ' => 'JWT',
                'alg' => 'HS256',
            ])
        );

        $payload = $this->base64url_encode(
            json_encode([
                'id' => '',
                'username' => '',
                'email' => '',
                'user_type' => '',
                'expiration' => ''
            ])
        );

        $signature = base64url_encode(hash_hmac('sha256', $header.".".$payload. $secret, true));

        $jwt = $header.".".$payload.".".$signature;

        return $jwt;
    }

    public function base64url_encode($data)
    {
        $b64 = base64_encode($data);

        $url = strtr($b64, '+/', '-_');

        return rtrim($url, '=');
    }

    public function base64url_decode($data, $strict = false)
    {
        $b64 = strtr($data, '-_', '+/');

        return base64_decode($b64, $strict);
    }
}
