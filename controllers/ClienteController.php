<?php

namespace controller;

require_once "../model/Cliente.php";
require_once "../service/ClienteService.php";

use model\Cliente;
use service\ClienteService;

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
            header("Location: ../templates/login.php?success=true");
            exit();
        } else {
            echo '<script>alert("Ocorreu um erro ao cadastrar.");</script>';
        }
    }
}

