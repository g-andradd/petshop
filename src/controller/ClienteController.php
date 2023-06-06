<?php

namespace App\Controller;

require_once __DIR__ . '/../model/Cliente.php';
require_once __DIR__ . '/../service/ClienteService.php';

use App\Model\Cliente;
use App\Service\ClienteService;

class ClienteController {
    private $clienteService;

    public function __construct() {
        $this->clienteService = new ClienteService();
    }

    public function cadastrar() {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmaSenha = $_POST["confirmaSenha"];

        if ($senha !== $confirmaSenha) {
            echo "As senhas não coincidem.";
            exit();
        }

        $cliente = new Cliente($nome, $email, $senha);

        if ($this->clienteService->cadastrarCliente($cliente)) {
            header("Location: /petshop/login?success=true");
            exit();
        } else {
            echo '<script>alert("Ocorreu um erro ao cadastrar.");</script>';
        }
    }
}

