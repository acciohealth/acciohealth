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

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/tests', 'TestController@index');
Route::get('/test/{name}', 'TestController@showTest');
Route::post('/test/1', 'TestController@dass21');

Route::get('/records/{id}', 'RecordController@showRecord');

