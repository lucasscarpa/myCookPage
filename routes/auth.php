<?php

Route::prefix('login')->as('login.')->namespace('Auth')->group(function(){
	Route::get('/', 'LoginController@index')->name('index');
	Route::post('/autenticar', 'LoginController@autenticar')->name('autenticar');
	Route::get('/logout', 'LoginController@logout')->name('logout');
});