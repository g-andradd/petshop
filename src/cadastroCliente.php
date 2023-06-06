<?php

require_once "../controllers/ClienteController.php";

use controller\ClienteController;

$clienteController = new ClienteController();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $clienteController->cadastrar();
}