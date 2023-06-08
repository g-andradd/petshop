<?php

session_start();

if (isset($_POST['id'])) {
    $produtoId = $_POST['id'];

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    $_SESSION['carrinho'][] = $produtoId;

    header("Location: /petshop/produtos");
    exit();
}
