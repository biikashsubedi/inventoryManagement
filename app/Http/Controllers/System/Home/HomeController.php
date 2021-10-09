<?php

namespace App\Http\Controllers\System\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('system.home.index');
    }
}
