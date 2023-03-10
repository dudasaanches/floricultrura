<?php 

class Girassol extends Flores{

    public function __construct($Nome, $Especie, $Aroma, $Tamanho,$Ambiente, $Cor) {
        parent::__construct($Nome, $Especie, $Aroma, $Tamanho, $Ambiente, $Cor);
    }

    public function cor() {
        echo "suvinil";
    }
}