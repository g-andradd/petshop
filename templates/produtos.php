<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop | Home</title>
    <link rel="icon" type="img/png" sizes="16x16" href="./favicon-16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="templates/css/stylej.css">
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            Petshop
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-underline ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastro_produto">Cadastrar Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.html">Sair</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-underline ms-auto">
                <li class="nav-item">
                    <button class="nav-link btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                       aria-controls="offcanvasScrolling">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Carrinho de Compras -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Carrinho de Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Conteúdo do carrinho de compras -->
        <div class="cart-items">
            <!-- Item do carrinho -->
            <div class="cart-item">
                <div class="cart-item-image">
                    <img src="templates/imgs/ração.png" alt="Imagem do produto">
                </div>
                <div class="cart-item-details">
                    <h6 class="cart-item-title">Pro Plan</h6>
                    <p class="cart-item-desc">Ração</p>
                    <div class="cart-item-price">R$ 80,00</div>
                </div>
                <div class="cart-item-quantity">
                    <label for="quantity">Quantidade:</label>
                    <input type="number" id="quantity" value="1" min="1" max="10">
                </div>
                <button class="btn btn-remove"><i class="fa-solid fa-trash"></i></button>
            </div>
            <!-- Outros itens do carrinho... -->
        </div>
        <div class="cart-summary">
            <div class="cart-summary-subtotal">
                <span class="subtotal-label">Subtotal:</span>
                <span class="subtotal-value">R$ XX,XX</span>
            </div>
            <div class="cart-summary-actions">
                <button class="btn btn-primary">Finalizar Compra</button>
                <button class="btn btn-secondary">Limpar Carrinho</button>
            </div>
        </div>
    </div>
</div>



<div class="container py-5">
    <h1 class="text-center mb-5">Lista de Produtos</h1>
    <div class="row Products">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="img"><img src="templates/imgs/ração.png" alt=""></div>
                <div class="desc">Ração</div>
                <div class="title">Pro Plan</div>
                <div class="box">
                    <div class="price">R$80,00</div>
                    <button class="btn">Compra</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="img"><img src="templates/imgs/ração02.png" alt=""></div>
                <div class="desc">Ração</div>
                <div class="title">Pedigree para adulto</div>
                <div class="box">
                    <div class="price">R$109,00</div>
                    <button class="btn">Compra</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="img"><img src="templates/imgs/gato-mix.png" alt=""></div>
                <div class="desc">Ração</div>
                <div class="title">Sandripet</div>
                <div class="box">
                    <div class="price">R$15,99</div>
                    <button class="btn">Compra</button>
                </div>
            </div>
        </div>

        <!-- Adicione mais cards aqui -->
    </div>
</div>

<footer>
    <div class="container">
        <p>© 2023 Petshop. Todos os direitos reservados.</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>