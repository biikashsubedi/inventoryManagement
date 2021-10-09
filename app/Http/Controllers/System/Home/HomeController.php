<?php

namespace App\Http\Controllers\System\Home;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $languages = Language::where('group', 'backend')->pluck('name','language_code')->toArray();
        return view('system.home.index', compact('languages'));
    }
}
