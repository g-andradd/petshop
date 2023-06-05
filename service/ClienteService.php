<?php

namespace service;

require_once "../factory/ConnectionFactory.php";

use DAO\ClienteDAO;
use factory\ConnectionFactory;
use model\Cliente;

class ClienteService {
    private $clienteDAO;

    public function __construct() {
        $conexao = ConnectionFactory::getConnection();
        $this->clienteDAO = new ClienteDAO($conexao);
    }

    public function cadastrarCliente(Cliente $cliente) {
        $clienteExistente = $this->clienteDAO->buscarClientePorEmail($cliente->getEmail());
        if ($clienteExistente) {
            echo "Este email já está em uso.";
            return false;
        }

        if ($this->clienteDAO->cadastrarCliente($cliente)) {
            return true;
        } else {
            echo "Erro ao cadastrar o cliente.";
            return false;
        }
    }


public function verificarLogin($email, $senha) {
        $this->clienteDAO->verificarLogin($email, $senha);
    }
}
