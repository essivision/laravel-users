<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/auth/login', '\\PhpSoft\\Illuminate\\Users\\Controllers\\AuthController@login');
Route::get('/me', '\\PhpSoft\\Illuminate\\Users\\Controllers\\UserController@authenticatedUser');
