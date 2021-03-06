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


Route::get('/products', 'ProductControllr@index')->name('product.index');
Route::post('/products', 'ProductControllr@store')->name('product.store');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
