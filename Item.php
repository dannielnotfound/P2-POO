<?php

declare(strict_types=1);

class Item
{
    protected string $name;
    protected int $tamanho;
    protected string $classe;

    public function __construct($name, $tamanho, $classe) {
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getTamanho(): int
    {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void
    {
        $this->tamanho = $tamanho;
    }

    public function getClasse(): string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): void
    {
        $this->classe = $classe;
    }

}