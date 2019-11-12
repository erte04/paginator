<?php

namespace Rareza\PaginatorBundle\Type;

use Rareza\PaginatorBundle\Model\PaginatorInterface;

class ObjectRepositoryType implements PaginatorInterface
{
    public function paginate($target)
    {
        return $target->findAll();
    }
}
