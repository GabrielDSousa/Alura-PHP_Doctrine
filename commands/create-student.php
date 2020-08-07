<?php

use GabsDSousa\Doctrine\Entity\Phone;
use GabsDSousa\Doctrine\Entity\Student;
use GabsDSousa\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$student = new Student();
$student->setName($argv[1]);

for ($i = 2; $i < $argc; $i++){
    $phone= new Phone();
    $phone->setNumber($argv[$i]);
    $student->addPhone($phone);
}

$entityManager->persist($student);

$entityManager->flush();