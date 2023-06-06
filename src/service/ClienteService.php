<?php

namespace App\Service;

use App\DAO\ClienteDAO;
use App\Model\Cliente;


require_once __DIR__ . '/../DAO/ClienteDAO.php';
require_once __DIR__ . '/../model/Cliente.php';

class ClienteService {
    private $clienteDAO;

    public function __construct() {
        $this->clienteDAO = new ClienteDAO();
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
