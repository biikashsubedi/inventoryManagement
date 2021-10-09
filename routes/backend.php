<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login.form'));
});

Route::get(PREFIX, function () {
    return redirect(route('login.form'));
});


Route::group(['middleware' => ['language'], 'namespace' => 'System', 'prefix' => PREFIX], function () {
    //Login and Logout
    Route::get('/login', 'Auth\LoginController@loginForm')->name('login.form');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    //Language change
    Route::get('/languages/set-language/{lang}', 'language\LanguageController@setLanguage')->name('set.lang');


    Route::group(['middleware' => ['auth']], function () {
        Route::resource('/home', 'Home\HomeController')->only('index');
    });
});
