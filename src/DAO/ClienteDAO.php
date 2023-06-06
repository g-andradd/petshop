<?php

namespace App\DAO;

require_once __DIR__ . '/../factory/ConnectionFactory.php';
require_once __DIR__ . '/../model/Cliente.php';

use App\Factory\ConnectionFactory;
use App\Model\Cliente;
use PDO;
use PDOException;

class ClienteDAO {

    private $conexao;

    public function __construct() {
        $conexao = ConnectionFactory::getConnection();
        $this->conexao = $conexao;
    }

    public function cadastrarCliente(Cliente $cliente) {
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

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro ao cadastrar cliente: " . $e->getMessage();
            return false;
        }
    }

    public function verificarLogin($email, $senha) {

        $conexao = ConnectionFactory::getConnection();

        $query = "SELECT * FROM clientes WHERE email = :email AND senha = :senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado) {
            header("Location: ../templates/home.php");
        } else {
            header("Location: ../templates/login.php");
        }
        exit();
    }

    public function buscarClientePorEmail($email) {
        try {
            // Preparar a query SQL
            $query = "SELECT * FROM clientes WHERE email = ?";

            // Preparar a declaração
            $stmt = $this->conexao->prepare($query);

            // Bind do parâmetro
            $stmt->bindParam(1, $email);

            // Executar a declaração
            $stmt->execute();

            // Verificar se o cliente foi encontrado
            if ($stmt->rowCount() > 0) {
                // Retornar os dados do cliente como um objeto
                return $stmt->fetch(PDO::FETCH_OBJ);
            } else {
                return null; // Cliente não encontrado
            }
        } catch (PDOException $e) {
            // Tratar erros
            echo "Erro ao buscar cliente por email: " . $e->getMessage();
            return null;
        }
    }
}
