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

Route::get('/Marca', 'marcaController@index')->name('Marca');
Route::get('/Marca/buscar', 'marcaController@buscar');
Route::get('/Marca/create', 'marcaController@create');
Route::post('/Marca/store', 'marcaController@store');
Route::get('/Marca/{id}/edit', 'marcaController@edit');
Route::post('/Marca/{id}', 'marcaController@update');
Route::delete('/Marca/{id}', 'marcaController@destroy');

Route::get('/Rol', 'rolController@index')->name('Rol');
Route::get('/Rol/buscar', 'rolController@buscar');
Route::get('/Rol/create', 'rolController@create');
Route::post('/Rol/store', 'rolController@store');
Route::get('/Rol/{id}/edit', 'rolController@edit');
Route::post('/Rol/{id}', 'rolController@update');
Route::delete('/Rol/{id}', 'rolController@destroy');

Route::get('/Proveedor', 'proveedorController@index')->name('Proveedor');
Route::get('/Proveedor/buscar', 'proveedorController@buscar');
Route::get('/Proveedor/create', 'proveedorController@create');
Route::post('/Proveedor/store', 'proveedorController@store');
Route::get('/Proveedor/{id}/edit', 'proveedorController@edit');
Route::post('/Proveedor/{id}', 'proveedorController@update');
Route::delete('/Proveedor/{id}', 'proveedorController@destroy');

