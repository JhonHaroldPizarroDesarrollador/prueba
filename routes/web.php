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

Route::get('home', function () {
    return view('welcome');
})->name('home');

Route::resource('form','FormController');

Route::get('listado', 'FormController@index')->name('listado');

Route::get('editar/{id}', 'FormController@edit');

Route::PUT('update', 'FormController@update')->name('update');
