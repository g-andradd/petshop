<?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    header("Location: /petshop/produtos");
    exit();
}

if (isset($_GET['success']) && $_GET['success'] == "true") {
    echo '<script>alert("Cadastro realizado com sucesso!");</script>';
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="stylesheet" href="templates/css/index.css">
    <title>Petshop | Login</title>
</head>
<body>
<section>
    <div class="form-box">
        <form class="form-value" action="./src/login.php" method="POST">
            <h2>Login</h2>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input id="email" name="email" type="email" required>
                <label for="email">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input id="senha" name="senha" type="password" required>
                <label for="senha">Senha</label>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Lembre-me!</label>
            </div>
            <div class="forget">
                <a href="/petshop/verificar_email">Esqueceu a Senha?</a>
            </div>
            <button type="submit" class="confirm">Entrar</button>
            <div class="register">
                <p>Ainda não tem uma conta? <a href="/petshop/cadastro">Cadastre-se</a></p>
            </div>
        </form>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>