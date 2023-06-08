<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    unset($_SESSION['carrinho']);
}

header("Location: /petshop/produtos");
exit();
