<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

// Route::get('/profile', function () {
//     return view('profile'); registerIdea
// });

Route::get('/profile','App\Http\Controllers\DashboardController@userinfo');

Route::get('/personCause','App\Http\Controllers\DashboardController@personCause');

Route::post('updateUser/{id}','App\Http\Controllers\DashboardController@updateUser');

Route::post('registerIdea','App\Http\Controllers\DashboardController@registerIdea');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
