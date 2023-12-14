<?php
class Cachorro {
    private $nome;
    private $raca;
    private $idade;
    
    public function __construct($nome, $raca, $idade) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->setIdade($idade);
    }

    public function setIdade($dog_idade) {
        if (filter_var($dog_idade, FILTER_VALIDATE_INT) == false) {
            echo "Idade inválida!<br>";
        } else {
            $this->idade = $dog_idade;
        };
    }

    public function mostrarInfoDog() {
        var_dump($this);
        echo "<br>Nome: " . $this->nome . "<br>";
        echo "Raça: " . $this->raca . "<br>";
        echo "Idade: " . $this->idade . "<br>";
    }

    public function Latir() {
        $nome = $this->nome;
        echo $nome . ": AU AU!";
    }
}