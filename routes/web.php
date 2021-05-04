<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
//     return view('profile'); registerIdea offerSupport
// });

Route::get('/profile', 'App\Http\Controllers\DashboardController@userinfo');

Route::get('/allUsers', 'App\Http\Controllers\DashboardController@allUsers');

Route::get('/personCause', 'App\Http\Controllers\DashboardController@sector');

Route::post('updateUser/{id}', 'App\Http\Controllers\DashboardController@updateUser');

Route::post('registerIdea', 'App\Http\Controllers\DashboardController@registerIdea');

Route::post('offerSupport', 'App\Http\Controllers\DashboardController@offerSupport');

Route::get('/Investors', 'App\Http\Controllers\DashboardController@Investors');
Route::get('/Enterprenuer', 'App\Http\Controllers\DashboardController@Enterprenuer');
Route::get('/InvestoresRequest', 'App\Http\Controllers\DashboardController@InvestoresRequest');
Route::get('/EnterprenuerRequest', 'App\Http\Controllers\DashboardController@EnterprenuerRequest');
Route::get('/changingstutas/{id}', 'App\Http\Controllers\DashboardController@changingstutas');
Route::get('/Enterprenuerconnect/{id}', 'App\Http\Controllers\DashboardController@Enterprenuerconnect');
Route::post('/connectnow','App\Http\Controllers\DashboardController@connectnow');

// view()->composer(['*'], function($view) {


//  $view->with(compact('ProvinceRegion'));});


// app routes  InvestorSteps.blade enterSteps

Route::get('/contact', 'App\Http\Controllers\AppController@contact');

Route::get('/About', 'App\Http\Controllers\AppController@about');

Route::get('/investorSteps', 'App\Http\Controllers\AppController@investorSteps');
Route::post('/changingstatus', 'App\Http\Controllers\DashboardController@changingstatus');

Route::get('/enterSteps', 'App\Http\Controllers\AppController@enterSteps');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
