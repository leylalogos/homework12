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

Route::view('homepage', 'homePage')->name('homePage'); //->middleware('auth');

Route::get('logout', 'AuthenticationController@logout')->name('logout');

Route::get('userdashboard', 'UserDashboardController@index')->name('user.dashboard')->middleware('auth');

Route::get('usermanage', 'UserManagementController@index')->name('user.index')->middleware('auth');
Route::post('usermanage/status', 'UserManagementController@changeStatus')->name('user.changestatus')->middleware('auth');
Route::post('usermanage/role', 'UserManagementController@changeRole')->name('user.changeRole')->middleware('auth');

Route::get('uploaduser/index','UploadFileController@userindex')->name('upload.userindex');
Route::post('uploaduser/user','UploadFileController@uploadByUser')->name('upload.uploadbyuser');
Route::get('uploaduser','UploadFileController@guestindex')->name('upload.guestindex');
Route::post('uploaduser/guest','UploadFileController@uploadByGuest')->name('upload.uploadbyguest');

Route::get('filedetailes','FileDetailesController@index')->name('show.index')->middleware('auth');

Route::get('allfiles','FileManagementController@index')->name('files.index')->middleware('auth');
Route::delete('destroyfile','FileManagementController@destroy')->name('files.destroy')->middleware('auth');
Route::post('approvefiles','FileManagementController@approve')->name('files.approve')->middleware('auth');