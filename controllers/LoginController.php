<?php

require_once "../service/ClienteService.php";

use service\ClienteService;

class LoginController {
    public function verificarLogin() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $clienteService = new ClienteService();

            $clienteService->verificarLogin($email, $senha);
        } else {
            header("Location: login.php");
            exit();
        }
    }
}
