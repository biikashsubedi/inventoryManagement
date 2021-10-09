<?php

namespace App\Services\System;

use App\Models\User;
use App\Services\Service;
use Illuminate\Http\Request;

class LoginService extends Service
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function loginType(Request $request)
    {
        $login_type = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'username';

        $request->merge([
            $login_type => $request->input('email')
        ]);
        $user = array(
            $login_type => $request->get($login_type),
            'password' => $request->get('password'),
        );
        return $user;
    }
}
