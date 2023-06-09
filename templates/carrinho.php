<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16"  href="./favicon-16.png">
  <title>PetShop</title>
  <link rel="stylesheet" href="css/styleca.css">
</head>
<body>
    <div class="wrapper">
         <div id="cart" class="sidecart">
          <span id="remove">></span>
            <h2>Cart</h2>
            <div class="products">
              <img src="imgs/ração.png" alt="">
              <div class="details">
                   <h3>Gravity Sucks</h3>
                   <input type="number" value="1" min="1">
                   <button><img src="./favicon-32x32.png" alt=""></button>
              </div>
            </div>
         </div>
    </div>

    <script>
      let cart = document.getElementById("cart")
      remove = document.getElementById("remove")

      // To open the cart on click
      add.addEventListene("click", ()=> cart.classList.add("active"))

      // To Close The cart
      remove.addEventListene("click", ()=> cart.classList.remove("active"))
    </script>
</body>