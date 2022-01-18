<?php

use Estudos\Doctrine\Entity\Aluno;
use Estudos\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__. '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];
$nome = $argv[2];

$repositorioAlunos = $entityManager->getRepository(Aluno::class,$id);

/** @var Aluno $aluno */
$aluno = $repositorioAlunos->find($id);
$aluno->setNome($nome);

$entityManager->flush();





