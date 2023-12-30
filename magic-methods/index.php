<?php 

class Dog {
    private $nome;

    public function __set($nome, $valor) {
        $this->$nome = $valor;
    }

    public function __get($valor) {
        return $this->$valor;
    }

    public function __toString()
    {
        
    }
}

$cachorro = new Dog();
$cachorro->nome = "Diego";

echo $cachorro->nome;