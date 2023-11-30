<?php

declare(strict_types=1);

require_once "Inventario.php";

class Player
{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname) {
        $this->setName($nickname);
        $this->setNivel(1);
        $this->setInventario();
    }

    public function setName(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    public function setNivel(int $nivel): void
    {
        $this->nivel = $nivel;
    }

    public function getName(): string
    {
        return $this->nickname;
    }

    public function getNivel(): int
    {
        return $this->nivel;
    }

    public function getInventario(): Inventario
    {
        return $this->inventario;
    }

    public function setInventario(): void
    {
        $capacidadeMaximaInicial = $this->calculaCapacidadeMaxima();
        $this->inventario = new Inventario($capacidadeMaximaInicial);
    }

    private function calculaCapacidadeMaxima(): int
    {     
        if($this->nivel === 1){
            return 20;
        }
        return 20 + ($this->nivel * 3);
    }

    public function coletarItem(Item $item): bool
    {
        return $this->inventario->adicionar($item);
    }

    public function soltarItem(Item $item): bool
    {
        return $this->inventario->remover($item);
    }

    public function subirNivel(): int
    {
        $this->setNivel($this->nivel + 1);
        $this->inventario->setCapacidadeMaxima($this->calculaCapacidadeMaxima());

        return $this->getNivel();
    }
}
