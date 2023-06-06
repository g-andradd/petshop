<?php

require_once __DIR__ . '/vendor/autoload.php';

$routes = array(
    'login' => 'login.php',
    'cadastro' => 'cadastroCliente.php',
    'redefinir_senha' => 'redefinirSenha.php',
    'verificar_email' => 'verificarEmail.php',
    'home' => 'home.php'
);

$uri = $_SERVER['REQUEST_URI'];
$uri_parts = explode('/', $uri);
$page = isset($uri_parts[2]) ? $uri_parts[2] : 'login';
$page = basename($page);

$template = isset($routes[$page]) ? $routes[$page] : 'login.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="stylesheet" href="templates/css/index.css">
</head>

<body>
<?php include 'templates/' . $template; ?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
