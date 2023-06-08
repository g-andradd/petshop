<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['indice'])) {
        $indice = $_POST['indice'];

        if (isset($_SESSION['carrinho'][$indice])) {
            array_splice($_SESSION['carrinho'], $indice, 1);
        }
    }
}

header("Location: /petshop/produtos");
exit();
