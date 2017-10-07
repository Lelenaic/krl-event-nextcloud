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

Route::get('/', 'AppController@index');

Route::post('/contact', 'AppController@contact')->name('contact');
Route::post('/isMember', 'AppController@isMember')->name('isMember');
Route::post('/prePay', 'PaymentController@prePay')->name('prePay');
Route::get('/pay', 'PaymentController@payForm')->name('pay');