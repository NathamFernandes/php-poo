<?php

class Invoice
{
    protected $item_numero;
    protected $item_descricao;
    protected $item_quantidade;
    protected $item_preco;

    public function __construct($numero, $descricao, $quantidade, $preco)
    {
        $this->item_numero = $numero;
        $this->item_descricao = $descricao;
        if ($quantidade < 0) {
            $this->item_quantidade = 0;
        } else {
            $this->item_quantidade = $quantidade;
        }
        if ($preco < 0) {
            $this->item_preco = 0.0;
        } else {
            $this->item_preco = $preco;
        }
    }

    public function setNumero($numero)
    {
        $this->item_numero = $numero;
    }

    public function setDescricao($descricao)
    {
        $this->item_descricao = $descricao;
    }

    public function setQuantidade($quantidade)
    {
        if ($quantidade < 0) {
            $this->item_quantidade = 0;
        } else {
            $this->item_quantidade = $quantidade;
        }
    }

    public function setPreco($preco)
    {
        if ($preco < 0) {
            $this->item_preco = 0;
        } else {
            $this->item_preco = $preco;
        }
    }

    public function getNumero()
    {
        return $this->item_numero;
    }

    public function getDescricao()
    {
        return $this->item_descricao;
    }

    public function getQuantidade()
    {
        return $this->item_quantidade;
    }

    public function getPreco()
    {
        return $this->item_preco;
    }

    public function getInvoiceAmount()
    {
        $total = $this->item_quantidade * $this->item_preco;
        return $total;
    }
}
