<?php 

abstract class Exemplo {
	protected $nome;
	protected $codigo;

	public abstract function setNome($nome);
	public abstract function setCodigo(string $codigo);
	public abstract function getNome();
	public abstract function getCodigo();

}

class Real extends Exemplo {

	public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCodigo(string $codigo) {
        $this->codigo = $codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }
}

$objeto = new Real();
$objeto->setNome("Natham");
$objeto->setCodigo("40");
echo $objeto->getNome() . "<br>";
echo $objeto->getCodigo();