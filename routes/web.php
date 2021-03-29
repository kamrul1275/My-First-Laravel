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



Route::get('/', 'SiteController@ShowHome');
Route::get('/About', 'SiteController@ShowAbout');
Route::get('/Services', 'SiteController@ShowServices');
Route::get('/Portfolio', 'SiteController@ShowPortfolio');