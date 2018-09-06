<?php

namespace App\Http\Controllers\Administrativo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest as UsuarioRequest;
use App\Models\Usuario\Usuario as Usuario;

class UsuarioController extends Controller
{
    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }
    
    public function index()
    {
        $usuarios = $this->usuario->all();

        return view('administrativo.usuario.index')
            ->with('usuarios', $usuarios);
    }

    public function edit()
    {
        return view('administrativo.usuario.form');
    }

    public function cadastrar(UsuarioRequest $request)
    {
        $validation = $request->validated();
        dump($validation);
    }

}