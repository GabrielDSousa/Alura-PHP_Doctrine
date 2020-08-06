<?php

use GabsDSousa\Doctrine\Entity\Student;
use GabsDSousa\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$student = $entityManager->find(Student::class, $argv[1]);
if (is_null($student)){
    echo "Student do not exist.";
}else{
    $entityManager->remove($student);
    $entityManager->flush();
}



