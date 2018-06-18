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

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return "foo";
});

Route::get('clientes','ClientesController@index');
Route::get('sucursales','SucursalesController@index');
Route::get('sucursales/create','SucursalesController@create');
Route::get('sucursales/{id}','SucursalesController@show');
Route::post('sucursales','SucursalesController@store');

