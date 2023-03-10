<?php 

class Margarida extends Flores{

    public function __construct($nome, $especie, $aroma, $tamanho, $ambiente, $cor) {
        parent::__construct($nome, $especie, $aroma, $tamanho, $ambiente, $cor);
    }

    public function falar() {
        echo "ssssssssssss <br>";
    }

    public function andar() {
        echo "Rastejando devagar...";
    }

}