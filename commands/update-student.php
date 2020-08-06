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
$student = $studentRepository->find($argv[1]);
if(!is_null($student)){
    echo "Student do not exist";
}else{
    $student->setName($argv[2]);

    $entityManager->flush();
}
