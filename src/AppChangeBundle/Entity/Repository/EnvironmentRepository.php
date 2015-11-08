<?php

namespace AppChangeBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class EnvironmentRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('sortOrder' => 'ASC'));
    }
}