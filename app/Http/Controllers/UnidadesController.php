<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadesController extends Controller
{
	public function __construct()
	{

	}

	public function index()
	{
		return view('administrativo.unidades.index');
	}

	public function destroy(Request $request)
	{
		dd($request->all());
		return view('administrativo.unidades.index');
	}

	public function create()
	{
		return view('administrativo.unidades.form');
	}

	public function edit($id)
	{
		dd($id);
		return view('administrativo.unidades.form');
	}
}
