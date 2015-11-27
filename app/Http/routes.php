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

Route::get('songs', 'TestController@index');
Route::get('songs/create', 'TestController@create');
Route::post('songs', 'TestController@store');
Route::get('songs/{id}/edit', 'TestController@edit');
Route::put('songs/{id}', 'TestController@update');
Route::patch('songs/{id}', 'TestController@update');