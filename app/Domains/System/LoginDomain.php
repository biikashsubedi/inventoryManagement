<?php

namespace App\Domains\System;

use Illuminate\Support\Str;

class LoginDomain
{
    public function login($request)
    {
        return [
            'email' => $request['account'],
            'password' => $request['password'],
        ];
    }
}
