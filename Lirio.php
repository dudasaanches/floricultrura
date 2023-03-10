<?php 

class Lirio extends Flores{

    public function __construct($nome, $especie, $aroma, $tamanho, $ambiente) {
        parent::__construct($nome, $especie, $aroma, $tamanho, $ambiente);
    }
    public function cor() {
        echo "Branca <br>";
    }
}