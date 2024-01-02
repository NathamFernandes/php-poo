<?php 

namespace App\Model;

use \PDO;

class ProdutoDao {

    public function create(Produto $produto) {
        $sql = 'INSERT INTO produtos (nome, estoque, descricao) VALUES (?,?,?)';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getEstoque());
        $stmt->bindValue(3, $produto->getDescricao());

        $stmt->execute();

    }

    public function read() {
        $sql = 'SELECT * FROM produtos';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

    }

    public function update(Produto $produto) {
        $sql = 'UPDATE produtos SET nome = ?, estoque = ?, descricao = ? WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getEstoque());
        $stmt->bindValue(3, $produto->getDescricao());
        $stmt->bindValue(4, $produto->getId());

        $stmt->execute();

    }

    public function delete($id) {
        $sql = 'DELETE FROM `produtos` WHERE `produtos`.`id` = ?;';

        $stmt = Conexao::getConn()->prepare($sql);
        
        $stmt->bindValue(1, $id);

        $stmt->execute();

    }
}