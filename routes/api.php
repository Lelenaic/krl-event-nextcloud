<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->middleware('cors')->group(function (){
    Route::get('ticket/all', 'TicketController@index');
    Route::post('ticket/validate', 'TicketController@validateTicket');
});
