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
    Route::get('/', 'CategoriasController@index')->name('index');
});



Route::group(['middleware' => ['auth'], 'as' => 'dashboard.'], function () {


    Route::group(['prefix' => 'administrativo', 'as' => 'administrativo.'], function () {

        Route::group(['prefix' => 'unidades', 'as' => 'unidades.'], function () {
            Route::get('/',             ['as' => 'index',   'uses' => 'UnidadesController@index']);
            Route::get('/form',         ['as' => 'create',  'uses' => 'UnidadesController@create']);
            Route::get('/form/{id}',    ['as' => 'edit',    'uses' => 'UnidadesController@edit']);
            Route::get('/delete',       ['as' => 'delete',  'uses' => 'UnidadesController@destroy']);
        });

        Route::group(['prefix' => 'categorias', 'as' => 'categorias.'], function () {
            Route::get('/',             ['as' => 'index',       'uses' => 'CategoriasController@index']);
            Route::get('/form/{id?}',   ['as' => 'form',        'uses' => 'CategoriasController@form']);
            Route::get('/cadastrar',    ['as' => 'cadastrar',   'uses' => 'CategoriasController@cadastrar']);
            Route::get('/delete',       ['as' => 'delete',      'uses' => 'CategoriasController@destroy']);
        });

         Route::group(['prefix' => 'receita', 'as' => 'receita.'], function () {
            Route::get('/',             ['as' => 'index',    'uses' => 'ReceitaController@index']);
            Route::get('/filtrar',      ['as' => 'filtrar',      'uses' => 'ReceitaController@filtrar']);
            Route::get('/form/{id?}',   ['as' => 'form',         'uses' => 'ReceitaController@form']);
            Route::post('/cadastrar',   ['as' => 'cadastrar',    'uses' => 'ReceitaController@cadastrar']);
        });
    });
});