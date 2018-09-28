<?php

namespace App\Models\Categoria;

use library\Repositories\RepositoryInterface;
use Carbon\Carbon;

class RepositoryEloquent implements RepositoryInterface
{

    protected $categoria;

    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }


    public function all($columns = ['*'], $with = [])
    {
        return $this->categoria->with($with)->get();
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

    }

    public function autenticacao($input)
    {

    }

}
