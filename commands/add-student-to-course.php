<?php

use GabsDSousa\Doctrine\Entity\Course;
use GabsDSousa\Doctrine\Entity\Student;
use GabsDSousa\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

/**
 * @var Student $student
 */
$student = $entityManager->find(Student::class, $argv[1]);

/**
 * @var Course $course
 */
$course = $entityManager->find(Course::class, $argv[2]);

$course->addStudent($student);

$entityManager->flush();
