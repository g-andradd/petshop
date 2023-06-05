<?php

namespace factory;

class ConnectionFactory {
    private static $conexao;

    public static function getConnection() {
        if (!isset(self::$conexao)) {
            $host = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "petshop";

            try {
                self::$conexao = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Falha na conexão com o banco de dados: " . $e->getMessage());
            }
        }

        return self::$conexao;
    }
}