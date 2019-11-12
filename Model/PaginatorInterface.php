<?php

namespace Rareza\PaginatorBundle\Model;

interface PaginatorInterface
{
    public function paginate($target);
}
