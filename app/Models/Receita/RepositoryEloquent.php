<?php

namespace App\Models\Receita;

use App\Models\Receita\Interfaces\RepositoryEloquent as RepositoryEloquentInterface;
use library\Repositories\RepositoryInterface;
use Carbon\Carbon;

class RepositoryEloquent implements RepositoryInterface
{

    protected $receita;

    public function __construct(Receita $receita)
    {
        $this->receita = $receita;
    }


    public function all($columns = ['*'], $with = ['ingrediente', 'categoria', 'autor'])
    {
        return $this->receita->with($with)->get();
    }

    public function find($id, $columns = ['*'])
    {

    }

    public function findBy($field, $operation, $value, $columns = ['*'])
    {

    }

    public function create(array $data)
    {
        $this->receita->create($data);
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
