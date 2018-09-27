<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita\RepositoryEloquent as ReceitaRepository;
use App\Models\Categoria\RepositoryEloquent as CategoriaRepository;

class ReceitaController extends Controller
{
	public function __construct(ReceitaRepository $receita, CategoriaRepository $categoria)
	{
		$this->receita = $receita;
		$this->categoria = $categoria;
	}

	public function index()
	{
		$receitas = $this->receita->all();
		$categorias = $this->categoria->all();
		return view('administrativo.receitas.index')
			->with('categorias', $categorias)
			->with('receitas', $receitas);
	}

	public function filtrar(Request $request)
	{
		dd($request->all());

	}

	public function form()
	{
		return view('administrativo.receitas.form');
	}

	public function cadastrar(Request $request)
	{
		dd($request->all());
	}
}
