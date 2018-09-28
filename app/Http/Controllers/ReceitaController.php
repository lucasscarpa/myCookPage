<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita\Receita;
use App\Models\Categoria\RepositoryEloquent as CategoriaRepository;
use App\Models\Autor\RepositoryEloquent as AutorRepository;

class ReceitaController extends Controller
{
	public function __construct(CategoriaRepository $categoria, AutorRepository $autor, Receita $receita)
	{
		$this->receita = $receita;
		$this->categoria = $categoria;
		$this->autor = $autor;
	}

	public function index(Request $request)
	{
		$filtros = $request->all();
		$receitas = $this->receita->all();
		$categorias = $this->categoria->all();

		return view('administrativo.receitas.index')
			->with('categorias', $categorias)
			->with('receitas', $receitas)
			->with('filtros', $filtros);
	}

	public function form($id = null)
	{
		$categorias = $this->categoria->all();
		$autores = $this->autor->all();
		
		return view('administrativo.receitas.form')
			->with('autores', $autores)
			->with('categorias', $categorias)
			->with('receita', $this->receita::findOrNew($id));
	}

	public function filtrar(Request $request)
	{
		dd($filtrar);
	}

	public function cadastrar(Request $request)
	{
		$request = $request->all();
		
		$receita = $this->receita->fill($request)->save();

		return redirect()->route('dashboard.administrativo.receita.index')
			->with('sucesso', ['Receita cadastrada']);
			

	}
}
