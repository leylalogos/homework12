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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('register', 'AuthenticationController@registerForm');
Route::post('register', 'AuthenticationController@addUser')->name('register');

Route::get('login', 'AuthenticationController@loginForm')->name('login');
Route::post('login', 'AuthenticationController@doLogin')->name('dologin');

Route::view('homepage', 'homePage')->name('homePage');//->middleware('auth');

Route::get('logout', 'AuthenticationController@logout')->name('logout');