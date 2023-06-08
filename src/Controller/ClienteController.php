<?php

namespace App\Controller;

require_once __DIR__ . '/../Model/Cliente.php';
require_once __DIR__ . '/../Service/ClienteService.php';

use App\Model\Cliente;
use App\Service\ClienteService;

class ClienteController
{
    private ClienteService $clienteService;

    public function __construct()
    {
        $this->clienteService = new ClienteService();
    }

    public function cadastrar() : void
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmaSenha = $_POST["confirmaSenha"];

        if ($senha !== $confirmaSenha) {
            echo '<script>alert("As senhas não coincidem.");</script>';

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

