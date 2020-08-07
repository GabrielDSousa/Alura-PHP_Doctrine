<?php

use GabsDSousa\Doctrine\Entity\Student;
use GabsDSousa\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$classStudent = Student::class;
$dql = "SELECT COUNT(s) FROM $classStudent s";

$query = $entityManager->createQuery($dql);
$studentTotal= $query->getSingleScalarResult();


echo "Students total: " . $studentTotal[0];


