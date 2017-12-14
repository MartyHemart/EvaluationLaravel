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


Route::get('/create', 'PersoController@create');
Route::post('perso/insert', 'PersoController@insertOne');

Route::get('/', 'BaseController@index');
Route::get('/perso/delete/{id}', 'PersoController@deleteOne');

Route::get('/perso/update/{id}', 'PersoController@updateOne');
Route::post('/perso/update', 'PersoController@updateOneAction');
