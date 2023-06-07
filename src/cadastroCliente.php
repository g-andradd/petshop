<?php

require_once "./Controller/ClienteController.php";

use App\Controller\ClienteController;

$clienteController = new ClienteController();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $clienteController->cadastrar();
}