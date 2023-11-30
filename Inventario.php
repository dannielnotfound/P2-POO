<?php

declare(strict_types=1);

class Inventario
{
    private int $capacidadeMaxima;
    private array $itens;

    public function __construct(int $capacidadeMaxima)
    {
        $this->setCapacidadeMaxima($capacidadeMaxima);
        $this->itens = [];
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function setItens(array $itens): void
    {
        $this->itens = $itens;
    }

    public function getCapacidadeMaxima(): int
    {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void
    {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function adicionar(Item $item): bool
    {
        if ($this->capacidadeLivre() >= $item->getTamanho()) {
            $this->itens[] = $item;
            return true;
        }

        return false;
    }

    public function remover(Item $item): bool
    {
        foreach ($this->itens as $index => $currentItem) {
            if ($currentItem === $item) {
                unset($this->itens[$index]);
                return true;
            }
        }

        return false;
    }

    public function capacidadeLivre(): int
    {
        $ocupado = 0;

        foreach ($this->itens as $item) {
            $ocupado += $item->getTamanho();
        }

        return $this->capacidadeMaxima - $ocupado;
    }
}
