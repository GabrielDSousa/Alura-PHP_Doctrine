<?php

use GabsDSousa\Doctrine\Entity\Course;
use GabsDSousa\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$course = new Course();
$course->setName($argv[1]);

$entityManager->persist($course);

$entityManager->flush();
