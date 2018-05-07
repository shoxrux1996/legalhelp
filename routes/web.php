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

    $users = App\Client::all();
    dd($users[0]->user);
//    return view('welcome');
});

Route::prefix('user')->group(function () {
    Route::get('login', 'UserLoginController@showLogin')->name('user.login');
    Route::get('register', 'UserRegisterController@showRegister')->name('user.register');
    Route::get('questions', 'UserController@questions')->name('questions');
    Route::get('question/{email}/{title}', 'UserController@question')->name('show.question');
    Route::get('documents', 'UserController@documents')->name('documents');
    Route::get('document/{email}/{title}', 'UserController@document')->name('show.document');
    Route::get('calls', 'UserController@calls')->name('calls');
    Route::get('call/{email}/{title}', 'UserController@call')->name('show.call');
    Route::get('blog/{id}','UserController@blog')->name('show.blog');


    Route::post('register/submit', 'UserRegisterController@register')->name('user.register.submit');
    Route::post('login/submit', 'UserLoginController@login')->name('user.login.submit');
});
Route::prefix('client')->group(function () {
    Route::get('create/question', 'ClientController@createQuestion')->name('client.question.create');
    Route::get('make/call', 'ClientController@makeCall')->name('client.make.call');
    Route::get('make/document', 'ClientController@makeDocument')->name('client.make.document');


    Route::post('ask/question', 'ClientController@ask')->name('ask.question');
    Route::post('order/call', 'ClientController@call')->name('order.call');
    Route::post('order/document', 'ClientController@document')->name('order.document');
});
Route::prefix('lawyer')->group(function () {
    Route::get('create/blog','LawyerController@createBlog')->name('create.blog');
    Route::post('answer/question', 'LawyerController@answer')->name('answer.question');
    Route::post('make/call', 'LawyerController@call')->name('make.call');
    Route::post('prepare/document', 'LawyerController@prepare')->name('prepare.call');
});
