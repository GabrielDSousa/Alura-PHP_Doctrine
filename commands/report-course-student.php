<?php

use GabsDSousa\Doctrine\Entity\Phone;
use GabsDSousa\Doctrine\Entity\Student;
use GabsDSousa\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$studentsRepository = $entityManager->getRepository(Student::class);

$studentClass = Student::class;
$dql = "SELECT s, p, c FROM $studentClass s JOIN s.phones p JOIN s.courses c";
$query = $entityManager->createQuery($dql);
/**@var Student[] $students */
$students = $query->getResult();

foreach ($students as $student) {
    $phones = $student
        ->getPhones()
        ->map(function (Phone $phone) {
            return $phone->getNumber();
        })
        ->toArray();
    echo "ID: {$student->getId()}\nName: {$student->getName()}\n";
    echo "Phones: ".implode(", ", $phones)."\n";

    $courses = $student->getCourses();

    echo "Courses: \n";
    foreach ($courses as $course) {
        echo "\tID Course: {$course->getId()} - ";
        echo "Course: {$course->getName()}";
        echo "\n";
    }
    echo "\n";
}
