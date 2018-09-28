<?php

namespace App\Http\Controllers;

use App\Models\Categoria\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

    public function index()
    {
        $categorias = $this->categoria->all();

        return view('administrativo.categorias.index')
            ->with('categorias', $categorias);
    }

    public function form($id = null)
    {
        return view('administrativo.categorias.form')
            ->with('categoria', $this->categoria::findOrdNew($id));
    }
}
