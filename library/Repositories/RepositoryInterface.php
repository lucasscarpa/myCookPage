<?php

namespace library\Repositories;

interface RepositoryInterface
{
    public function all($columns = ['*']);

    public function find($id, $columns = ['*']);

    public function findBy($field, $operation, $value, $columns = ['*']);

    public function create(array $data);

    public function update(array $data, $id);

    public function destroy($id);

    public function destroyIn(array $id);

    public function search(array $data);
}
