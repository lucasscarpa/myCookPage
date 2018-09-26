<?php

error_reporting(E_ALL ^ E_NOTICE);

use Illuminate\Http\Request;
use \Carbon\Carbon;

Route::get('/', function(){
	return redirect()->route('login');
});

Route::get('/teste', function(){
	dd(session()->get('usuario'));
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth'], 'as' => 'dashboard.'], function () {

    Route::group(['prefix' => 'categoria', 'as' => 'categoria.'], function () {
        Route::get('/',           ['as' => 'index',    'uses' => 'CategoriaController@index']);
    });

    Route::group(['prefix' => 'administrativo', 'as' => 'administrativo.'], function () {

         Route::group(['prefix' => 'receitas', 'as' => 'receitas.'], function () {
            Route::get('/',           ['as' => 'index',    'uses' => 'ReceitaController@index'], function () {
            	dd('oi');
            });
        });
    });
});