<?php 
require "./pessoa.php";

class Estudante extends Pessoa {
    public $periodo;
    
    public function __construct($nome, $idade, $nacionalidade, $periodo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
        $this->periodo = $periodo;
    }

    public function mostraInfo() {
        echo "<h3> Informações do estudante</h3>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Nacionalidade: " . $this->nacionalidade . "<br>";
        echo "Período: " . $this->periodo . "<br>";
    }

}

class Estagiario extends Pessoa {
    public $periodo;
    public $funcao;
    
    public function __construct($nome, $idade, $nacionalidade, $periodo, $funcao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
        $this->periodo = $periodo;
        $this->funcao = $funcao;
    }

    public function mostraInfo() {
        echo "<h3> Informações do estagiário</h3>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Nacionalidade: " . $this->nacionalidade . "<br>";
        echo "Período: " . $this->periodo . "<br>";
        echo "Função: " . $this->funcao . "<br>";
    }

}


class Funcionario extends Pessoa {
    public $funcao;
    
    public function __construct($nome, $idade, $nacionalidade, $funcao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
        $this->funcao = $funcao;
    }

    public function mostraInfo() {
        echo "<h3> Informações do funcionário</h3>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Nacionalidade: " . $this->nacionalidade . "<br>";
        echo "Função: " . $this->funcao . "<br>";
    }

}