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

Route::get('/', function(){
	return redirect()->route('login.index');
});


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth'], 'as' => 'dashboard.'], function () {
	 Route::group(['prefix' => 'categoria', 'as' => 'categoria.'], function () {
        Route::get('/',           ['as' => 'index',    'uses' => 'CategoriaController@index']);
    });
}

Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);




Route::get('/public', function () {
    return 'Olá, mundo!';
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teste', 'HomeController@teste')->name('teste');


Route::group(['prefix' => 'administrativo', 'as' => 'administrativo.'], function () {
    Route::group(['prefix' => 'usuario', 'as' => 'usuario.'], function () {
        Route::get('/',                 ['as' => 'index',       'uses' => 'Administrativo\UsuarioController@index']);
        Route::get('/editar/{id?}',     ['as' => 'editar',      'uses' => 'Administrativo\UsuarioController@edit']);
        Route::post('/cadastrar',       ['as' => 'cadastrar',   'uses' => 'Administrativo\UsuarioController@cadastrar']);
    });

});
