<?php

namespace App\Http\Controllers\System\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm()
    {
        if (\Auth::check()) {
            return redirect()->to(route('home'));
        }
        return view('system.auth.login');
    }
}
