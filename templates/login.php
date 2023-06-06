<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16.png">
    <link rel="stylesheet" href="css/index.css">
    <title>Petshop</title>
</head>
<body>
<section>
    <?php
    if (isset($_GET['success']) && $_GET['success'] == "true") {
        echo '<script>alert("Cadastro realizado com sucesso!");</script>';
    }
    ?>
    <div class="form-box">
        <form class="form-value" action="../src/login.php" method="POST">
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
                <a href="./verificarEmail.php">Esqueceu a Senha?</a>
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