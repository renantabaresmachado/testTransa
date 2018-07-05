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

Route::get('/edit/{id}', 'UserOperacoesController@edit')->name('editUser');
Route::get('/delete/{id}', 'UserOperacoesController@delete')->name('del');
Route::post('/editar', 'UserOperacoesController@editar')->name('editar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
