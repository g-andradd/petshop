<head>
    <title>Petshop - Redefinir senha</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="/petshop/login" method="post">
                    <h2>Redefinir Senha</h2>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Nova senha</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Reptir senha</label>
                    </div>

                    <button type="submit" class="confirm">Cofirmar</button>
                    <a href="/petshop/login" class="cancel">Cancelar</a>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>