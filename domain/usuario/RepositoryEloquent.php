<?php

namespace domain\usuario;

class RepositoryEloquent implements RepositoryEloquentInterface
{
    protected $usuario;

    public function __construct(
        Usuario $usuario,
        Auth $auth
    ) {
        $this->auth = $auth;
        $this->usuario = $usuario;
    }

    public function autenticacao($input)
    {
        $filtro = [
            'email' => $input['email'],
            'collection' => true,
        ];

        $usuarios = $this->search($filtro, ['empresa.construtora', 'empresa.fornecedor', 'arquivo']);
        $totalUsuarios = $usuarios->count();

        if ( ! $totalUsuarios ) {
            return false;
        }

        if ( ! $this->verificarPassword( $input['senha'], $usuarios->first()->password) ) {
            return false;
        }

        if( $totalUsuarios > 1 ) {
            return $usuarios->toArray();
        }

        return $usuarios->toArray();
    }

        public function verificarPassword($senha, $hashSenha)
    {
        return \Hash::check($senha, $hashSenha);
    }

}
