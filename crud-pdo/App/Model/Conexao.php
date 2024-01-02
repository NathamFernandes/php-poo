<?php 

namespace App\Model;

class Conexao {
    private static $variavel;

    public static function getConn() {
        if (!isset(self::$variavel)) {
            self::$variavel = new \PDO('mysql:host=localhost;dbname=pdo;charser=utf8', 'root', '');
        }    
        return self::$variavel;
    }
}