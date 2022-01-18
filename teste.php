<?php

use Estudos\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__. '/vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
try {
    $entityManager = $entityManagerFactory->getEntityManager();
} catch (\Doctrine\ORM\ORMException $e) {
}

var_dump($entityManager->getConfiguration());