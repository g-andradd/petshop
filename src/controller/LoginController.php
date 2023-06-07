<?php

namespace App\Controller;

use App\Service\ClienteService;

require_once __DIR__ . '/../service/ClienteService.php';

class LoginController
{
    public function verificarLogin() : void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $clienteService = new ClienteService();

            $loginValido = $clienteService->verificarLogin($email, $senha);

            if ($loginValido) {
                header("Location: /petshop/produtos");
            } else {
                header("Location: /petshop/login");
            }
            exit();
        } else {
            header("Location: /petshop/login");
            exit();
        }
    }

}
