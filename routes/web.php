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

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

//messageルート/////////////////////////////////////////////////////////////////
Route::get('message','GroupController@show')->name('showGroup');
//message_roomsルート///////////////////////////////////////////////////////////{id?}は任意のパラメーター
Route::post('message_rooms','MessageController@create')->name('createMessage');
Route::get('message_rooms/{id}','MessageController@show')->name('showMessage');
Route::delete('message_rooms','MessageController@delete')->name('deleteMessage');
//Route::delete('message_rooms/{id?}','CreateRoomController@quitRoom')->name('deleteRoom');
//create_message_roomルート/////////////////////////////////////////////////////
Route::post('create_message_room','CreateRoomController@create')->name('createRoom');
Route::get('create_message_room','CreateRoomController@show')->name('showRoom');
//Route::post('create_message_room','CreateRoomController');

