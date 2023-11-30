<?php

require_once "Player.php";
require_once "Item.php";
require_once "Ataque.php";
require_once "Defesa.php";
require_once "Magia.php";

$item1 = new Item("Espada", 7, "Ataque");
$item2 = new Item("Escudo", 4, "Defesa");
$item3 = new Item("Varinha", 2, "Magia");

// var_dump($item2);
// die;

$tipoItens1 = new Ataque($item1->getName(), $item1->getTamanho(), $item1->getClasse());
$tipoItens2 = new Defesa($item2->getName(), $item2->getTamanho(), $item2->getClasse());
$tipoItens3 = new Magia($item3->getName(), $item3->getTamanho(), $item3->getClasse());

// Cria jogadores
$player1 = new Player("Eduardo");
$player2 = new Player("Daniel");



// // Simula inventário cheio
$player1->coletarItem($item1);
$player1->coletarItem($item2);
$player1->coletarItem($item3);

$player2->coletarItem($item1);
$player2->coletarItem($item2);
$player2->coletarItem($item3);

$player2->soltarItem($item1);

// Exibir inventários antes de subir de nível
echo "Inventário do Jogador 1 antes de subir de nível:<br>";
echo "<pre>";
print_r($player1->getInventario()->getItens());
echo "Capacidade máxima do inventário: " . $player1->getInventario()->getCapacidadeMaxima() . "\n\n";
echo "</pre>";

// Subir de nível

echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';
echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';
echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';
echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';
echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';
echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';
echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';
echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';
echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';
echo "<p>O jogador subiu de nível. Nível atual: " . ($player1->subirNivel()) . '. Tamanho do inventário: ' . $player1->getInventario()->getCapacidadeMaxima() .  '</p>';



// Exibir inventários após subir de nível
echo "Inventário do Jogador 1 após subir de nível:<br>";
echo "<pre>";
print_r($player1->getInventario()->getItens());
echo "Capacidade máxima do inventário: " . $player1->getInventario()->getCapacidadeMaxima() . "\n";
echo "</pre>";

