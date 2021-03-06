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

Route::get('/','TestController@home')
-> name('home');

Route::get('/locations','TestController@locations')
-> name('locations');

Route::get('/employees','TestController@employees')
-> name('employees');
