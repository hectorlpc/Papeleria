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

Route::get('/', 'HomeController@principal');
Route::get('/tipo/{id}', 'principalController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//paso 1 crear ruta
Route::get('/Categoria', 'CategoriaController@index')->name('Categoria');
Route::get('/Categoria/buscar', 'CategoriaController@buscar');
Route::get('/Categoria/create', 'CategoriaController@create');
Route::post('/Categoria/store', 'CategoriaController@store');
Route::get('/Categoria/{id}/edit', 'CategoriaController@edit');
Route::post('/Categoria/{id}', 'CategoriaController@update');
Route::delete('/Categoria/{id}', 'CategoriaController@destroy');

Route::get('/MetodoPago', 'metodopagoController@index')->name('Metodopago');
Route::get('/MetodoPago/buscar', 'metodopagoController@buscar');
Route::get('/MetodoPago/create', 'metodopagoController@create');
Route::post('/MetodoPago/store', 'metodopagoController@store');
Route::get('/MetodoPago/{id}/edit', 'metodopagoController@edit');
Route::post('/MetodoPago/{id}', 'metodopagoController@update');
Route::delete('/MetodoPago/{id}', 'metodopagoController@destroy');

Route::get('/Salon', 'salonController@index')->name('Salon');
Route::get('/Salon/buscar', 'salonController@buscar');
Route::get('/Salon/create', 'salonController@create');
Route::post('/Salon/store', 'salonController@store');
Route::get('/Salon/{id}/edit', 'salonController@edit');
Route::post('/Salon/{id}', 'salonController@update');
Route::delete('/Salon/{id}', 'salonController@destroy');

Route::get('/Privilegio', 'privilegioController@index')->name('Privilegio');
Route::get('/Privilegio/buscar', 'privilegioController@buscar');
Route::get('/Privilegio/create', 'privilegioController@create');
Route::post('/Privilegio/store', 'privilegioController@store');
Route::get('/Privilegio/{id}/edit', 'privilegioController@edit');
Route::post('/Privilegio/{id}', 'privilegioController@update');
Route::delete('/Privilegio/{id}', 'privilegioController@destroy');
