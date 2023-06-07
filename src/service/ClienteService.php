<?php

namespace App\Service;

use App\DAO\ClienteDAO;
use App\Model\Cliente;


require_once __DIR__ . '/../DAO/ClienteDAO.php';
require_once __DIR__ . '/../model/Cliente.php';

class ClienteService
{
    private ClienteDAO $clienteDAO;

    public function __construct()
    {
        $this->clienteDAO = new ClienteDAO();
    }

    public function cadastrarCliente(Cliente $cliente) : bool
    {
        if ($this->clienteDAO->buscarClientePorEmail($cliente->getEmail())) {
            echo "Este email já está em uso.";
            return false;
        }

        if (!$this->clienteDAO->cadastrarCliente($cliente)) {
            echo "Erro ao cadastrar o cliente.";
            return false;
        }

        return false;
    }


    public function verificarLogin($email, $senha) : bool
    {
        return $this->clienteDAO->verificarLogin($email, $senha);
    }
}
