<?php 

namespace App\Model;

class Produto {
    private $id;
    private $nome;
    private $estoque;
    private $descricao;

    public function __construct($nome, $estoque, $descricao)
    {
        $this->nome = $nome;
        $this->estoque = filter_var($estoque, FILTER_SANITIZE_NUMBER_INT);
        $this->descricao = $descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

}