<?php 

include "./pessoa.php";

class Estudante extends Person {
    public $serie;

    public function __construct($nome, $idade, $nacionalidade, $serie)
    {
        // From class Pessoa
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
        //
        $this->serie = $serie;
    }

    public function estudar() {
        echo "Estudou xD";
    }

    public function mostraNacionalidade() {
        echo $this->nacionalidade;
    }
}