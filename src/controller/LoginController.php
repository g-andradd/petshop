<?php

namespace App\Controller;

use App\Service\ClienteService;

require_once __DIR__ . '/../service/ClienteService.php';

class LoginController
{
    public function verificarLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $clienteService = new ClienteService();

            $clienteService->verificarLogin($email, $senha);
        } else {
            header("Location: /petshop/login");
            exit();
        }
    }
}
