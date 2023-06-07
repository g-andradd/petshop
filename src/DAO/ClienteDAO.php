<?php

namespace App\DAO;

require_once __DIR__ . '/../factory/ConnectionFactory.php';
require_once __DIR__ . '/../model/Cliente.php';

use App\Factory\ConnectionFactory;
use App\Model\Cliente;
use PDO;
use PDOException;

class ClienteDAO
{

    private ?PDO $conexao;

    public function __construct()
    {
        $conexao = ConnectionFactory::getConnection();
        $this->conexao = $conexao;
    }

    public function cadastrarCliente(Cliente $cliente): bool
    {
        try {
            $query = "INSERT INTO clientes (nome, email, senha) VALUES (?, ?, ?)";

            if (isset($this->conexao)) {
                $stmt = $this->conexao->prepare($query);
            }

            $nome = $cliente->getNome();
            $stmt->bindParam(1, $nome);
            $email = $cliente->getEmail();
            $stmt->bindParam(2, $email);
            $senha = $cliente->getSenha();
            $stmt->bindParam(3, $senha);

            $stmt->execute();

            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo "Erro ao cadastrar cliente: " . $e->getMessage();
            return false;
        }
    }


    public function verificarLogin($email, $senha): bool
    {
        $conexao = ConnectionFactory::getConnection();

        $query = "SELECT * FROM clientes WHERE email = :email AND senha = :senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado !== false;
    }



    public function buscarClientePorEmail($email) : bool
    {
        try {
            $query = "SELECT * FROM clientes WHERE email = ?";

            $stmt = $this->conexao->prepare($query);
            $stmt->bindParam(1, $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_OBJ);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro ao buscar cliente por email: " . $e->getMessage();
            return false;
        }
    }
}
