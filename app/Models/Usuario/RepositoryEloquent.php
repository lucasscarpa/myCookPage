<?php

namespace App\Models\Usuario;

use autodoc\Events\ColaboradorModificado;
use Illuminate\Auth\AuthManager as Auth;
use library\Repositories\RepositoryInterface;
use App\Models\Usuario\Usuario;
use Carbon\Carbon;

class RepositoryEloquent implements RepositoryInterface
{

    public function __construct(Usuario $usuario, Auth $auth)
    {
        $this->auth = $auth;
        $this->usuario = $usuario;
    }


    public function all($columns = ['*'])
    {
        return $this->usuario->all();

    }

    public function find($id, $columns = ['*'])
    {

    }

    public function findBy($field, $operation, $value, $columns = ['*'])
    {

    }

    public function create(array $data)
    {

    }

    public function update(array $data, $id)
    {

    }

    public function destroy($id)
    {

    }

    public function destroyIn(array $id)
    {

    }

    public function search(array $data, $with = null, $fields = [])
    {
        $query = $this->usuario->query();

        if ($with) {
            $query->with($with);
        }

        if( $data['email'] ) {
            $query->whereIn('email', is_array($data['email']) ? $data['email'] : [ $data['email'] ]);
        }

        return $query->get();

    }

    public function autenticacao($input)
    {
        $filtro = [
            'email' => $input['email'],
            'collection' => true
        ];

        $usuarios = $this->search($filtro);
        $totalUsuarios = $usuarios->count();

        if ( $totalUsuarios && ! $this->verificarPassword( $input['password'], $usuarios->first()->getAuthPassword()) ) {
            return false;
        }

        if( $totalUsuarios > 1 ) {
            return $usuarios->toArray();
        }

        return $usuarios->first();
    }

    public function verificarPassword($senha, $hashSenha)
    {
        return \Hash::check($senha, $hashSenha);
    }

    public function session($usuario, $request)
    {
        $request->session()->put('usuario', $usuario);
    }

}
