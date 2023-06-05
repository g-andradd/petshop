<?php

namespace controller\ClienteController;

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
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar o cliente.";
        }
    }
}

