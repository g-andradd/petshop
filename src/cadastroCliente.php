<?php

require_once "./controller/ClienteController.php";

use App\controller\ClienteController;

$clienteController = new ClienteController();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $clienteController->cadastrar();
}