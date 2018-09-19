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
Route::get('/', function() {
    return redirect()->route('categoria.index');
});

Route::prefix('categoria')->as('categoria.')->group(function () {
    Route::get('/', 'CategoriaController@index')->name('index');
});



Route::group(['middleware' => ['auth'], 'as' => 'dashboard.'], function () {


    Route::group(['prefix' => 'administrativo', 'as' => 'administrativo.'], function () {
         Route::group(['prefix' => 'receitas', 'as' => 'receitas.'], function () {
            Route::get('/',           ['as' => 'index',    'uses' => 'ReceitaController@index'], function () {
            	dd('oi');
            });

        });
    });
});