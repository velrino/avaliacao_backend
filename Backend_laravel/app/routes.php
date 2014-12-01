<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/* Definir Rotas */

Route::post('/users/store','userController@store');
Route::post('/users/update/{id}','userController@update');
Route::get('/users/destroy/{id}','userController@destroy');

Route::controller('users','userController');