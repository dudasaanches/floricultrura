<?php 

class Flores {
    private $nome;
    private $especie;
    private $aroma;
    private $tamanho;

    public function __construct($nome, $especie, $aroma, $tamanho, $ambiente, $cor) {
        $this->nome = $nome;
        $this->raca = $especie;
        $this->idade = $idade;
        $this->cor = $cor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getCor() {
        return $this->cor;
    }

    public function andar() {
        echo "Andando...";
    }
}