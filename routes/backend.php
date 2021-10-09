<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login.form'));
});

Route::get(PREFIX, function () {
    return redirect(route('login.form'));
});


Route::group(['middleware' => ['language'], 'namespace' => 'System', 'prefix' => PREFIX], function () {
    Route::get('/login', 'Auth\LoginController@loginForm')->name('login.form');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


    Route::group(['middleware' => ['auth']], function () {
        Route::resource('/home', 'Home\HomeController')->only('index');
    });
});
