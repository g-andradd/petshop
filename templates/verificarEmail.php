<head>
    <title>Petshop - Verificação de E-mail</title>
</head>

<body>
<section>
    <div class="form-box">
        <div class="form-value">
            <form action="/petshop/redefinir_senha" method="post">
                <h2>Verificação de E-mail</h2>
                <div class="inputbox">
                    <input id="email" type="email" required>
                    <ion-icon name="mail-outline"></ion-icon>
                    <label for="email">E-mail</label>
                </div>
                <button type="submit" class="confirm">Verificar</button>
                <a href="/petshop/login" class="cancel">Cancelar</a>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
