<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" sizes="16x16"  href="./favicon-16.png">
    <link rel="stylesheet" href="templates/css/stylej.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Petshop | Home</title>
</head>
<body>

<nav class="navbar">
    <div class="logo"><h1>Petshop</h1></div>
    <ul class="menu">
        <li><a href="" class="active">Home</a></li>
        <li><a href="cadastroProd.php">Novo brinquedos</a></li>
        <li><a href="Login.html">Conta</a></li>
        <li><a href="carrinho.php"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
    <!-- for responsive button -->
    <div class="menu-btn">
        <i class="fa fa-bars"></i>
    </div>
</nav>

<!--<section class="content">
    <h1>New Arrivals For Men & Women</h1>
    <p>Get The Best Women Fashion Arrivals</p>
    <button>Shop Now</button>
</section>-->

<h1 class="pheading">Lista de Produtos</h1>

<section class="sec">
    <div class="Products">

        <!-- card start -->
        <div class="card">
            <div class="img"><img src="templates/imgs/ração.png" alt=""></div>
            <div class="desc">Ração</div>
            <div class="title">Pro Plan</div>
            <div class="box">
                <div class="price">R$80,00</div>
                <button class="btn">Compra</button>
            </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <div class="card">
            <div class="img"><img src="templates/imgs/ração02.png" alt=""></div>
            <div class="desc">Ração</div>
            <div class="title">Pedigree para adulto</div>
            <div class="box">
                <div class="price">R$109,00</div>
                <button class="btn">Compra</button>
            </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <div class="card">
            <div class="img"><img src="templates/imgs/gato-mix.png" alt=""></div>
            <div class="desc">Ração</div>
            <div class="title">Sandripet</div>
            <div class="box">
                <div class="price">R$15,99</div>
                <button class="btn">Compra</button>
            </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <div class="card">
            <div class="img"><img src="templates/imgs/briquedo01.png" alt=""></div>
            <div class="desc">Brinquedos</div>
            <div class="title">Grows fazenda cachorro com corda</div>
            <div class="box">
                <div class="price">R$5,00</div>
                <button class="btn">Compra</button>
            </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <div class="card">
            <div class="img"><img src="templates/imgs/brinquedos-pet.png" alt=""></div>
            <div class="desc">Brinquedos</div>
            <div class="title">Bola Cravinho mini para Cães - Cores Sortidas</div>
            <div class="box">
                <div class="price">R$10,00</div>
                <button class="btn">Compra</button>
            </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <div class="card">
            <div class="img"><img src="templates/imgs/briquedo02.png" alt=""></div>
            <div class="desc">Brinquedos</div>
            <div class="title">Bola Maciça Colorida 50mm, Corda de 2 Nos Furacão</div>
            <div class="box">
                <div class="price">R$11,00</div>
                <button class="btn">Compra</button>
            </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <div class="card">
            <div class="img"><img src="templates/imgs/roupa01.png" alt=""></div>
            <div class="desc">Roupas</div>
            <div class="title">Roupa Pet Duff Simpsons</div>
            <div class="box">
                <div class="price">R$50,00</div>
                <button class="btn">Compra</button>
            </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <div class="card">
            <div class="img"><img src="templates/imgs/roupafla.png" alt=""></div>
            <div class="desc">Roupas</div>
            <div class="title">Roupa Pet Fla.mengo Camisa Para Cachorro</div>
            <div class="box">
                <div class="price">R$55,00</div>
                <button class="btn">Compra</button>
            </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <div class="card">
            <div class="img"><img src="templates/imgs/naruto-fofo.png" alt=""></div>
            <div class="desc">Roupas</div>
            <div class="title">Roupa Pet Moletom Cachorro Akatsuki</div>
            <div class="box">
                <div class="price">R$25,00</div>
                <button class="btn">Compra</button>
            </div>
        </div>
        <!-- card end -->
    </div>
</section>

<footer>
    <p>Copyrights at <a href="indexj.htm">Petshop</a></p>
</footer>

<script>
    $(".menu-bnt").click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });
</script>

</body>