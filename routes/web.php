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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teste', 'HomeController@teste')->name('teste');

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'administrativo', 'as' => 'administrativo.'], function () {
    Route::group(['prefix' => 'usuario', 'as' => 'usuario.'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Administrativo\UsuarioController@index']);
    });
});

Route::group(['prefix' => 'fornecedor', 'as' => 'fornecedor.'], function () {
    Route::group(['prefix' => 'painel-gerencial', 'as' => 'painel-gerencial.'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Empresa\Fornecedor\PainelGerencialController@index']);
    });
});
