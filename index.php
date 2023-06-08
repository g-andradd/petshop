<?php

require_once __DIR__ . '/vendor/autoload.php';

session_start();

$routes = array(
    'login' => 'login.php',
    'cadastro' => 'cadastroCliente.php',
    'redefinir_senha' => 'redefinirSenha.php',
    'verificar_email' => 'verificarEmail.php',
    'produtos' => 'produtos.php',
    'cadastro_produto' => 'cadastroProduto.php'
);

$page = $_GET['page'] ?? '';

if (!isset($_SESSION['logged_in']) && ($page === 'produtos' || $page === 'cadastro_produto')) {
    $page = 'login';
}

if (array_key_exists($page, $routes)) {
    $template = $routes[$page];

    ob_start();
    include 'templates/' . $template;
    $templateContent = ob_get_clean();

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <?php include 'templates/' . $template; ?>
    </html>
    <?php
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<h1>Página não encontrada</h1>
</html>
<?php
exit();
?>
