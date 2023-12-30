<?php 

class Classe {
    public const PROTOCOLO = "11";
    public $nome;

    public function InserirNomeProtocolo($parameter_nome) {
        $this->nome = $parameter_nome;
        echo "Nome do protocolo " . self::PROTOCOLO . " trocado com sucesso!";
    }
}