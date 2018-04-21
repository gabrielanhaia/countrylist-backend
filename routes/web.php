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

Route::get('/paises', 'CountryController@index');
Route::get('/', 'CountryController@index');

Route::get('/paises/gerar_csv', 'CountryController@generateCsvFull');