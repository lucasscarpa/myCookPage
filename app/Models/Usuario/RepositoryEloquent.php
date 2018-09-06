<?php

namespace App\Models\Usuario;

use autodoc\Events\ColaboradorModificado;
use App\Usuario\Models\Interfaces\RepositoryEloquent as RepositoryEloquentInterface;
use App\Models\Usuario\Usuario;
use Carbon\Carbon;

class RepositoryEloquent implements RepositoryEloquentInterface
{

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    
    public function all($columns = ['*'])
    {

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
