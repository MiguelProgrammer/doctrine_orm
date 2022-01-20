<?php

use Estudos\Doctrine\Entity\Aluno;
use Estudos\Doctrine\Entity\Telefone;
use Estudos\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__. '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$aluno = new Aluno();
$aluno->setNome($argv[1]);

for ($i = 2; $i < $argc; $i++) {
    $numeroTelefone = $argv[$i];
    $telefone = new Telefone();
    $telefone->setAluno($numeroTelefone);

    $entityManager->persist($telefone);

    $aluno->addTelefone($telefone);
}

$entityManager->persist($aluno);
$entityManager->flush();