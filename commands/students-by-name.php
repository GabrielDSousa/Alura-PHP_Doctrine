<?php

use GabsDSousa\Doctrine\Entity\Student;
use GabsDSousa\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$studentRepository = $entityManager->getRepository(Student::class);

/**
 * @var Student[] $studentList
 */
$studentList = $studentRepository->findBy([
    'name'=> $argv[1]
]);

if (empty($studentList)){
    echo "This student do not exist\n\n";
}else{
    foreach ($studentList as $student) {
        $phones = $student
            ->getPhones()
            ->map(function (Phone $phone) {
                return $phone->getNumber();
            })
            ->toArray();
        echo "ID: {$student->getId()}\nName: {$student->getName()}\n";
        echo "Phones: ".implode(", ", $phones)."\n\n";
    }
}
