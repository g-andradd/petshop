<?php

require_once "./src/controller/ClienteController.php";

use App\Controller\ClienteController;

$clienteController = new ClienteController();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $clienteController->cadastrar();
}