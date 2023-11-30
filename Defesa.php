<?php

require_once "Item.php";

class Defesa extends Item
{

    public function __construct($name, $tamanho, $classe)
    {
        parent::__construct($name, $tamanho, $classe);
    }
}