<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Route::get('/login_page', function () {
    return view('auth/login');
});

Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');


Route::get('/register_page', 'RegisterController@registerPage');

Route::post('/register', 'RegisterController@register');


