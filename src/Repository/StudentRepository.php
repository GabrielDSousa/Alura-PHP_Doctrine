<?php

namespace GabsDSousa\Doctrine\Repository;


use Doctrine\ORM\EntityRepository;
use GabsDSousa\Doctrine\Entity\Student;

class StudentRepository extends EntityRepository
{
    public function coursesPerStudent()
    {
        $query = $this->createQueryBuilder('s')
            ->join('s.phones', 'p')
            ->join('s.courses','c')
            ->addSelect('p')
            ->addSelect('c')
            ->getQuery();

        return $query->getResult();
    }
}