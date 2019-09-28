<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/login')->group(function(){
    route::any('login','Admin\LoginController@login');
    route::any('loginAdd','Admin\LoginController@loginAdd');
    route::any('arr','Admin\LoginController@arr');
    route::any('arrAdd','Admin\LoginController@arrAdd');
});