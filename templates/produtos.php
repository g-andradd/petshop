<?php
require_once "./src/Controller/ProdutoController.php";

use App\Controller\ProdutoController;

if (isset($_GET['success']) && $_GET['success'] == "true") {
    echo '<script>alert("Cadastro realizado com sucesso!");</script>';
}
?>
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
                    <a class="nav-link" href="./src/logout.php">Sair</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-underline ms-auto">
                <li class="nav-item">
                    <button class="nav-link btn btn-light" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasScrolling"
                            aria-controls="offcanvasScrolling">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-5">
    <h1 class="text-center mb-5">Lista de Produtos</h1>
    <section class="row Products">
        <?php
        $produtoController = new ProdutoController();
        $produtos = $produtoController->buscarProdutos();
        ?>
        <?php if (empty($produtos)): ?>
            <h3>Não há produtos cadastrados</h3>
        <?php else: ?>
            <?php foreach ($produtos as $produto): ?>
                <div class="col-md-4 mb-4">
                    <article class="card">
                        <div class="img"><img src="templates/imgs/<?= $produto->getImagem(); ?>"
                                              alt="<?= $produto->getImagem(); ?>"></div>
                        <div class="desc"><?= $produto->getTipo(); ?></div>
                        <div class="title"><?= $produto->getNome(); ?></div>
                        <div class="subtitle"><?= $produto->getDescricao(); ?></div>
                        <div class="box">
                            <div class="price"><?= 'R$' . number_format($produto->getPreco(), 2, ',', '.'); ?></div>
                            <form action="./src/adiciona_carrinho.php" method="POST">
                                <input type="hidden" name="id" value="<?= $produto->getId(); ?>">
                                <button class="btn" type="submit">Comprar</button>
                            </form>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</main>

<footer>
    <div class="container">
        <p>© 2023 Petshop. Todos os direitos reservados.</p>
    </div>
</footer>

<!-- Carrinho de Compras -->
<section class="offcanvas offcanvas-end <?php if (isset($_SESSION['mostrarCarrinho']) && $_SESSION['mostrarCarrinho']) echo 'show'; ?>"
     data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
     id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Carrinho de Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Conteúdo do carrinho de compras -->
        <div class="cart-items">
            <!-- Item do carrinho -->
            <?php
            if (isset($_SESSION['carrinho'])) {
                foreach ($_SESSION['carrinho'] as $indice => $produtoId) {
                    $produtoController = new ProdutoController();
                    $produto = $produtoController->buscarProdutoPorId($produtoId);
                    ?>
                    <div class="cart-item">
                        <div class="cart-item-image">
                            <img src="templates/imgs/<?= $produto->getImagem(); ?>" alt="Imagem do produto">
                        </div>
                        <div class="cart-item-details">
                            <h6 class="cart-item-title"><?= $produto->getNome(); ?></h6>
                            <p class="cart-item-desc"><?= $produto->getDescricao(); ?></p>
                            <div class="cart-item-price"><?= 'R$' . number_format($produto->getPreco(), 2, ',', '.'); ?></div>
                        </div>
                        <div class="cart-item-quantity">
                            <label for="quantity">Quantidade:</label>
                            <input type="number" id="quantity" value="1" min="1" max="10">
                        </div>
                        <form action="./src/remove_carrinho.php" method="POST" class="remove-form">
                            <input type="hidden" name="indice" value="<?= $indice ?>">
                            <button class="btn btn-remove" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="cart-summary">
            <div class="cart-summary-subtotal">
                <span class="subtotal-label">Subtotal:</span>
                <span class="subtotal-value">
                <?php
                $subtotal = 0.0;
                if (isset($_SESSION['carrinho'])) {
                    foreach ($_SESSION['carrinho'] as $produtoId) {
                        $produtoController = new ProdutoController();
                        $produto = $produtoController->buscarProdutoPorId($produtoId);
                        $subtotal += $produto->getPreco();
                    }
                }
                echo 'R$ ' . number_format($subtotal, 2, ',', '.');
                ?>
                </span>
            </div>
            <div class="cart-summary-actions row">
                <form class="col-6">
                    <button class="btn btn-primary">Finalizar Compra</button>
                </form>
                <form action="./src/limpar_carrinho.php" method="POST" class="col-6">
                    <button class="btn btn-secondary" type="submit">Limpar Carrinho</button>
                </form>
            </div>

        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>