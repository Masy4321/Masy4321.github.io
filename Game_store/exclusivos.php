<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/general_games.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <header>
            <img src="logo.jpeg" alt="" width="100" height="100">     
            <center><h1>&copy GAMEVARIETY STORE</h1></center>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="general_games.php">Juegos en general</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="exclusivos.php">Cosas exclusivas</a></li>
                        <li class="nav-item"><a class="nav-link" href="retro.php">Consolas retro</a></li>
                        <li class="nav-item"><a class="nav-link" href="componentes.php">Componentes</a></li>
                        <li class="nav-item"><a class="nav-link" href="perifericos.php">Periféricos</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="carrito.html">Carrito</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="card-group">
            <!-- Producto 1 -->
            <div class="card">
                <img src="imagenes/ps5_30_aniversario.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ps5 30 Aniversario <h2><strong>-Out of stock-</strong></h2></h5>
                    <p class="card-text">$12,399</p>
                    <button class="add-to-cart" data-product="Ps5 30 Aniversario" data-price="12399">Agregar al carrito</button>
                    <a href="https://www.amazon.com.mx/PlayStation-Digital-Anniversary-Limited-Bundle/dp/B0DHLM85Z6/ref=sr_1_14?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-14">
                        <button>Comprar</button>
                    </a>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="card">
                <img src="imagenes/xboxgow4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Xbox one s Gears Of War 4</h5>
                    <p class="card-text">$4,999</p>
                    <button class="add-to-cart" data-product="Xbox one s Gears Of War 4" data-price="4999">Agregar al carrito</button>
                    <a href="https://www.amazon.com.mx/Xbox-One-2TB-Console-Limited/dp/B01IOT5ZEE/ref=sr_1_10?sr=8-10">
                        <button>Comprar</button>
                    </a>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="card">
                <img src="imagenes/gameboy.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Game Boy Advance SP Tribal</h5>
                    <p class="card-text">$3,499</p>
                    <button class="add-to-cart" data-product="Game Boy Advance SP Tribal" data-price="3499">Agregar al carrito</button>
                    <a href="https://www.amazon.com.mx/Game-Boy-Advance-SP-Tribal/dp/B00023XUSE/ref=sr_1_4?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-4">
                        <button>Comprar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Función para agregar al carrito
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-product');
                const productPrice = parseFloat(this.getAttribute('data-price'));

                // Crear un objeto para el producto
                const product = {
                    name: productName,
                    price: productPrice
                };

                // Obtener el carrito del localStorage
                let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

                // Agregar el producto al carrito
                cartItems.push(product);

                // Guardar el carrito actualizado
                localStorage.setItem('cartItems', JSON.stringify(cartItems));

                // Mostrar un mensaje de confirmación
                alert(`${productName} ha sido agregado al carrito.`);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
