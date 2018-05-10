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
Route::get('/Categoria/create', 'CategoriaController@create');
Route::post('/Categoria/store', 'CategoriaController@store');
Route::get('/Categoria/{id}/edit', 'CategoriaController@edit');
Route::post('/Categoria/{id}', 'CategoriaController@update');
Route::delete('/Categoria/{id}', 'CategoriaController@destroy');
