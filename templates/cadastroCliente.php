<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="stylesheet" href="templates/css/index.css">
    <title>Petshop | Cadastro</title>
</head>

<body>
<section>
    <div class="form-box">
        <div class="form-value">
            <h2>Cadastro</h2>
            <form action="./src/cadastroCliente.php" method="POST">
                <div class="inputbox">
                    <input id="nome" name="nome" type="nome" required>
                    <ion-icon name="person-outline"></ion-icon>
                    <label for="nome">Nome</label>
                </div>
                <div class="inputbox">
                    <input id="email" name="email" type="email" required>
                    <ion-icon name="mail-outline"></ion-icon>
                    <label for="email">Email</label>
                </div>
                <div class="inputbox">
                    <input id="senha" name="senha" type="password" required>
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <label for="senha">Senha</label>
                </div>
                <div class="inputbox">
                    <input id="confirmaSenha" name="confirmaSenha" type="password" required>
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <label for="confirmaSenha">Confirmar Senha</label>
                </div>
                <button type="submit" class="confirm">Cadastrar</button>
                <div class="register">
                    <p>Já é cadastrado? <a href="/petshop/login">Faça login</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>