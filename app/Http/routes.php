<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('songs', 'SongController@index');
Route::get('songs/create', 'SongController@create');
Route::post('songs', 'SongController@store');
Route::get('songs/{id}/edit', 'SongController@edit');
Route::put('songs/{id}', 'SongController@update');
Route::patch('songs/{id}', 'SongController@update');