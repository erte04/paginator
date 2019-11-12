<?php

namespace Rareza\PaginatorBundle\Type;

use App\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Rareza\PaginatorBundle\Model\PaginatorInterface;

class StringType implements PaginatorInterface
{
    private $objectManager;
    private $entityManager;

    public function __construct(ObjectManager $om)
    {
        $this->objectManager = $om;
    }

    public function paginate($target)
    {
        $entityManager = $this->objectManager->getRepository(User::class);
        return  $entityManager->findAll();
    }
}
