<?php
require_once "./Controller/ProdutoController.php";

use App\Controller\ProdutoController;

$produtoController = new ProdutoController();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $produtoController->cadastrar();
}