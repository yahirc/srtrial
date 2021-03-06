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


Route::get('/','ClientesController@index')->name('home');

Route::get('sucursales','SucursalesController@index');
Route::get('sucursales/create','SucursalesController@create');
Route::get('sucursales/{id}','SucursalesController@show');
Route::post('sucursales','SucursalesController@store');

Route::get('clientes','ClientesController@index');
Route::get('clientes/create','ClientesController@create');
Route::get('clientes/edit/{id}','ClientesController@edit');
Route::get('clientes/{id}','ClientesController@show');
Route::post('clientes','ClientesController@store');
Route::post('clientes/update/{id}','ClientesController@update');

Route::get('ordenes','OrdenesController@index');
Route::get('ordenes/create','OrdenesController@create');
Route::get('ordenes/{id}','OrdenesController@show');
Route::post('ordenes','OrdenesController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');;
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');


