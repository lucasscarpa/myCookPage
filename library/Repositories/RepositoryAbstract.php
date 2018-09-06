<?php

namespace library\Repositories;

abstract class RepositoryAbstract implements RepositoryInterface
{
    protected $with;

    protected $entity;

    public function with($valor)
    {
        $this->entity = $this->entity->with($valor);

        return $this;
    }

    public function count()
    {
        return $this->entity->count();
    }

    public function toArray()
    {
        return $this->entity->toArray();
    }
}
