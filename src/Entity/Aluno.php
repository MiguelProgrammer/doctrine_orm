<?php

namespace Estudos\Doctrine\Entity;

use Doctrine\ORM\Mapping\Entity;

/**
 * @Entity
 */
class Aluno
{
    /**
     * @id
     * @GeneratedValue
     * @Coloumn(
     */
    private $id;
    private $nome;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(String $nome): self
    {
        $this->nome = $nome;
    }



}