<?php

namespace App\Models\Autor;

use library\Repositories\RepositoryInterface;
use Carbon\Carbon;

class RepositoryEloquent implements RepositoryInterface
{

    protected $autor;

    public function __construct(Autor $autor)
    {
        $this->autor = $autor;
    }


    public function all($columns = ['*'], $with = [])
    {
        return $this->autor->with($with)->get();
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
