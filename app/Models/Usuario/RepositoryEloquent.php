<?php

namespace App\Models\Usuario;

use autodoc\Events\ColaboradorModificado;
use Illuminate\Auth\AuthManager as Auth;
use App\Models\Usuario\Interfaces\RepositoryEloquent as RepositoryEloquentInterface;
use App\Models\Usuario\Usuario;
use Carbon\Carbon;

class RepositoryEloquent implements RepositoryEloquentInterface
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

    public function search(array $data)
    {

    }

}
