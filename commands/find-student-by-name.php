<?php

use GabsDSousa\Doctrine\Entity\Student;
use GabsDSousa\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$studentRepository = $entityManager->getRepository(Student::class);

/**
 * @var Student $student
 */
$student = $studentRepository->findOneBy([
    'name'=> $argv[1]
]);

if (is_null($student)){
    echo "This student do not exist\n\n";
}else{
    echo "ID: {$student->getId()}\nName: {$student->getName()}\n\n";
}