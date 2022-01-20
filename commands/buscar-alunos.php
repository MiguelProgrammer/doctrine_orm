<?php

use Estudos\Doctrine\Entity\Aluno;
use Estudos\Doctrine\Entity\Telefone;
use Estudos\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__. '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$repositorioAlunos = $entityManager->getRepository(Aluno::class);
/** @var Aluno[] $listaAlunos */
$listaAlunos = $repositorioAlunos->findBy([],['nome' => 'ASC']);

foreach ($listaAlunos as $aluno){

    $telefones = $aluno
        ->getTelefones()
        ->map(
            function (Telefone $telefone)
            {
                return $telefone->getNumero();
            }
        )->toArray();

    echo "ID: {$aluno->getId()} - {$aluno->getNome()}
    Telefones '".implode(",", $telefones).PHP_EOL;
}

///** @var Aluno $miguel */
//$miguel = $repositorioAlunos->find(1);
//echo $miguel->getNome().PHP_EOL;
//
///** @var Aluno $miguel */
//$jessica = $repositorioAlunos->findOneBy([
//    "nome" => "Jéssica Pereira"
//]);
//echo $jessica->getNome().PHP_EOL;