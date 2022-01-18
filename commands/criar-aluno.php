<?php

use Estudos\Doctrine\Entity\Aluno;
use Estudos\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__. '/../vendor/autoload.php';

$aluno = new Aluno();
$aluno->setNome($argv[1]);

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($aluno);
$entityManager->flush();