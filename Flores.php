<?php 

class Flores {
    private $nome;
    private $especie;
    private $aroma;
    private $tamanho;
    private $ambiente;

    public function __construct($nome, $especie, $aroma, $tamanho, $ambiente) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->aroma = $aroma;
        $this->tamanho = $tamanho;
        $this->ambiente = $ambiente;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEspecie() {
        return $this->especie;
    }

    public function getAroma() {
        return $this->aroma;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function getAmbiente() {
        return $this->ambiente;
    }

    public function cor() {
        echo "Rosa clara";
    }

}