<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', 'ShopController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mycart', 'ShopController@mycart')->name('cart')->middleware('auth');
Route::post('/mycart', 'ShopController@addMycart');

Route::post('/cartdelete', 'ShopController@deleteCart');