<?php

class Person {
    public $nome;
    public $idade;
    // protected $nacionalidade;
    public $nacionalidade;
    
    public function falarNome() {
        $nome = $this->nome;
        echo "Meu nome é" . $nome;
    }

    public function andar() {
        echo "ANDOU.";
    }

}