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


Route::group(array('prefix' => 'chatApi'), function () 
{
    Route::resource('chat', 'ChatController');
    Route::resource('participante', 'ParticipanteController');
    Route::get('/user/all', 'UserController@index');        
    Route::post('/chat/create', 'ChatController@store');

    Route::get('/mensagens', 'ChatController@fetchMessages');
    Route::post('/mensagens', 'ChatController@sendMessage');
});

Auth::routes();

Route::get('/', function() {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chat', 'ChatController@index');

