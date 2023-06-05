<?php
require_once "../controllers/LoginController.php";

$clienteController = new ClienteController();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $clienteController->cadastrar();
}