<?php
//Array contendo os itens do menu e seus respectivos caminhos
$paginas = [
  "Home" => "./php/home.php",
  "Sobre" => "./php/sobre.php",
  "Cadastro" => "./php/contato.php",
  "Contatos" => "./php/listarContatos.php",
  "Login" => "./php/login.php"
];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="stylesheet" href="templates/css/index.css">
    <title>Petshop - Login</title>
</head>

<body>
    <section>
        <div class="form-box">
            <h2>Login</h2>
            <form  action="../src/login.php" method="POST">
                <div class="inputbox">
                    <input id="email" type="email" required>
                    <label for="email">Email</label>
                    <ion-icon name="mail-outline"></ion-icon>
                </div>
                <div class="inputbox">
                    <input id="senha" type="password" required>
                    <label for="senha">Senha</label>
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
                <div class="forget">
                    <a href="./verificarEmail.html">Esqueceu a Senha?</a>
                </div>
                <button type="submit" class="confirm">Entrar</button>
                <div class="register">
                    <p>Ainda não tem uma conta? <a href="./cadastroCliente.php">Cadastre-se</a></p>
                </div>
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
