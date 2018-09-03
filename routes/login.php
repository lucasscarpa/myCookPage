<?php

Route::group(['prefix' => 'login'], function(){

	Route::get('/',[
		'as'	=> 'login.index',
		'uses'	=> 'Auth\LoginController@index'
	]);

	Route::post('/validar',[
		'as'	=> 'login.validar',
		'uses'	=> 'Auth\LoginController@validar'
	]);

	Route::get('/logoff',[
		'as'	=> 'login.logoff',
		'uses'	=> 'Auth\LoginController@sair'
	]);

	Route::get('/esqueci-minha-senha',[
		'as'	=> 'login.password',
		'uses'	=> 'Auth\LoginController@password'
	]);

	Route::post('/reenviar-minha-senha',[
		'as'	=> 'reenviar.password',
		'uses'	=> 'Auth\LoginController@reenviarPassword'
	]);

	Route::get('/redefinicao-de-senha/{email}/{date}',[
		'as'	=> 'redefinicao.password',
		'uses'	=> 'Auth\LoginController@redefinicaoPassword'
	]);

	Route::post('/alterar-senha/{email}',[
		'as'	=> 'alterar.password',
		'uses'	=> 'Auth\LoginController@alterarPassword'
	]);

	Route::get('/logar-usuario-acesso-interno/{usuario}',[
		'as'	=> 'login.logar',
		'uses'	=> 'Auth\LoginController@logarUsuarioAcessoInterno'
	]);

	Route::get('/aviso',[
		'as'	=> 'login.aviso',
		'uses'	=> 'Auth\LoginController@aviso'
	]);
});
