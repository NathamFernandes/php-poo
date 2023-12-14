<?php 

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $nacionalidade;

    public function setNome($name) {
        $this->nome = $name;
    }

    public function getNome() {
        return $this->nome;
    }

    public function Dormir() {
        echo "Dormiu";
    }

    abstract public function mostraInfo();
}