<?php

namespace DAO;

use factory\ConnectionFactory;
use model\Cliente;

class ClienteDAO {

    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function cadastrarCliente(Cliente $cliente) {
        try {
            $query = "INSERT INTO clientes (nome, email, senha) VALUES (?, ?, ?)";

            if (isset($this->conexao)) {
                $stmt = $this->conexao->prepare($query);
            }

            $stmt->bindParam(1, $cliente->getNome());
            $stmt->bindParam(2, $cliente->getEmail());
            $stmt->bindParam(3, $cliente->getSenha());

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
