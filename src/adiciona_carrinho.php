<?php

session_start();

if (isset($_POST['id'])) {
    $produtoId = $_POST['id'];

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    $_SESSION['carrinho'][] = $produtoId;
    $_SESSION['mostrarCarrinho'] = true;

    header("Location: /petshop/produtos");
    exit();
}
