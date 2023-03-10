<?php 

class Girassol extends Flores{

    public function __construct($Nome, $Especie, $Aroma, $Tamanho,$Ambiente) {
        parent::__construct($Nome, $Especie, $Aroma, $Tamanho, $Ambiente);
    }

    public function cor() {
        echo "Suvinil <br>";
    }
}