<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    unset($_SESSION['carrinho']);
    $_SESSION['mostrarCarrinho'] = true;
}

header("Location: /petshop/produtos");
exit();
