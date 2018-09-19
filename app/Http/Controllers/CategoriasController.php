<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('administrativo.categorias.index');
    }
}
