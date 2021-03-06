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
Route::post('/register', 'RegistrationController@register')->name('register');
Route::get('/done', 'RegistrationController@done')->name('done');
Route::post('/contact', 'AppController@contact')->name('contact');
