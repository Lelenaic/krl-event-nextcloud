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
Route::get('/paied/check', 'PaymentController@check')->name('check');
Route::get('/paied/card', 'PaymentController@card')->name('card');
Route::get('/paied/student', 'PaymentController@studentPaied')->name('studentPaied');

Route::post('/contact', 'AppController@contact')->name('contact');
Route::post('/isMember', 'AppController@isMember')->name('isMember');
Route::post('/prePay', 'PaymentController@prePay')->name('prePay');
Route::get('/pay/{id}', 'PaymentController@payForm')->name('pay');
Route::post('/pay/{id}', 'PaymentController@pay')->name('payPost');
Route::post('/student', 'PaymentController@student')->name('student');
Route::post('/isRegistered', 'PaymentController@isRegistered')->name('isRegistered');