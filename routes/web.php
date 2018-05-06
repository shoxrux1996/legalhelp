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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('client')->group(function (){
    Route::post('ask/question', 'ClientController@ask')->name('ask.question');
    Route::post('order/call','ClientController@call')->name('order.call');
    Route::post('order/document', 'ClientController@document')->name('order.document');
});
Route::prefix('lawyer')->group(function (){
    Route::post('answer/question','LawyerController@answer')->name('answer.question');
    Route::post('make/call','LawyerController@call')->name('make.call');
    Route::post('prepare/document', 'LawyerController@prepare')->name('prepare.call');
});
