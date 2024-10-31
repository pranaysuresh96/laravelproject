<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\LoginController@home');
Route::get('/login', 'App\Http\Controllers\LoginController@home');
Route::get('/users', 'App\Http\Controllers\LoginController@users');
Route::get('/adduser', 'App\Http\Controllers\LoginController@adduser');
Route::post('register', 'App\Http\Controllers\LoginController@register');
Route::post('login', 'App\Http\Controllers\LoginController@login');
Route::post('submituser', 'App\Http\Controllers\LoginController@submituser');