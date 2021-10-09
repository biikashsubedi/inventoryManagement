<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login.form'));
});

Route::get(PREFIX, function () {
    return redirect(route('login.form'));
});


Route::group(['namespace' => 'System', 'prefix' => PREFIX], function () {
Route::resource('/home', 'Home\HomeController')->only('index');
    Route::get('/login', 'Auth\LoginController@loginForm')->name('login.form');

    Route::group(['middleware' => ['auth']], function () {
    });
});
