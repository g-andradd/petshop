<?php

require_once __DIR__ . '/vendor/autoload.php';

$routes = array(
    'login' => 'login.php',
    'cadastro' => 'cadastroCliente.html',
    'redefinir_senha' => 'redefinirSenha.html',
    'verificar_email' => 'verificarEmail.html',
    'produtos' => 'produtos.php'
);

$uri = $_SERVER['REQUEST_URI'];
$uri_parts = explode('/', $uri);
$page = $uri_parts[2] ?? 'login';
$page = basename($page);

$template = $routes[$page] ?? 'login.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php include 'templates/' . $template; ?>

</html>
