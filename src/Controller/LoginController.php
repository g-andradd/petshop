<?php

namespace App\Controller;

use App\Service\ClienteService;

require_once __DIR__ . '/../Service/ClienteService.php';

class LoginController
{
    public function verificarLogin() : void
    {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $clienteService = new ClienteService();

            $loginValido = $clienteService->verificarLogin($email, $senha);

            if ($loginValido) {
                $_SESSION['logged_in'] = true;
                header("Location: /petshop/produtos");
            } else {
                header("Location: /petshop/login");
            }
        } else {
            header("Location: /petshop/login");
        }
        exit();
    }

}
