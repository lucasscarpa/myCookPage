<?php

error_reporting(E_ALL ^ E_NOTICE);

use Illuminate\Http\Request;
use \Carbon\Carbon;

Route::get('/', function(){
	return redirect()->route('login.index');
});
