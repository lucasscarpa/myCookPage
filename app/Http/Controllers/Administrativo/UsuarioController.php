<?php

namespace App\Http\Controllers\Administrativo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest as UsuarioRequest;
use App\Models\Usuario\Interfaces\RepositoryEloquent as Usuario;

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

        $this->usuario->nome = $validation['nome'];
        $this->usuario->email = $validation['email'];
        $this->usuario->senha = Hash::make($validation['senha']);
        $this->usuario->endereco = $validation['endereco'];

        $this->usuario->save();

        return redirect()->route('administrativo.usuario.index')->with('success', 'Usuário cadastrado com sucesso!');
        
    }

}