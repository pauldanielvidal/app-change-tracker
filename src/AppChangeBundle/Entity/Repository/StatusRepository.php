<?php

namespace AppChangeBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class StatusRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('sortOrder' => 'ASC'));
    }
}