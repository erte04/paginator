<?php

namespace Rareza\PaginatorBundle\Util;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;
use Rareza\PaginatorBundle\Type\ObjectRepositoryType;
use Rareza\PaginatorBundle\Type\StringType;

class Paginator
{

    public function __construct(ObjectManager $om)
    {
        $this->objectManager = $om;
    }

    public function paginate($target)
    {
        $type = gettype($target);
        if ($type === 'string') {
            $object = new StringType($this->objectManager);
        } elseif ($type === 'object') {
            if ($target instanceof ObjectRepository) {
                $object = new ObjectRepositoryType;
            }
        }

        return $object->paginate($target);
    }
}
