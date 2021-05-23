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
    return view('login');
});

Route::match(array('GET', 'POST'), 'login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::match(array('GET', 'POST'), 'dashboard', 'App\Http\Controllers\DashboardController@dashboard')->name('dashboard');
