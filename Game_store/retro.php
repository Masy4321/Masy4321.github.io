<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/retro.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <header>
            <img src="logo.jpeg" alt="" width="100" height="100">
            <center><h1> &copy GAMEVARIETY STORE</h1></center>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="general_games.php">Juegos en general</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="exclusivos.php">Cosas exclusivas/coleccionable</a></li>
                        <li class="nav-item"><a class="nav-link" href="retro.php">Consolas retro</a></li>
                        <li class="nav-item"><a class="nav-link" href="componentes.php">Componentes para pc gamer</a></li>
                        <li class="nav-item"><a class="nav-link" href="perifericos.php">Perifericos</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="carrito.html">Carrito</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="disscounts">
            <div class="card-group">
                <div class="card">
                    <img src="imagenes/atari.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Atari Video Computer System</h5>
                        <p class="card-text"> $3,299 </p>
                        <button class="add-to-cart" data-product="Atari Video Computer System" data-price="3299">Agregar al carrito</button>
                        <a href="https://www.amazon.com.mx/Deep-Silver-1124554-Atari-Hardware/dp/B0CG7LMFKY/ref=sr_1_1?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-1">
                            <button>Comprar</button>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <img src="imagenes/gamecube.webp" class="card-img-top" alt="..." height="">
                    <div class="card-body">
                        <h5 class="card-title">Nintendo GameCube</h5>
                        <p class="card-text"> 4,499$ </p>
                        <button class="add-to-cart" data-product="Nintendo GameCube" data-price="4499">Agregar al carrito</button>
                        <a href="https://www.amazon.com.mx/Consola-oficial-sistema-Indigo-Gamecube/dp/B09SBPMNXP/ref=sr_1_17?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-17">
                            <button>Comprar</button>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <img src="imagenes/nes.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nintendo Entertainment System</h5>
                        <p class="card-text">2,999$</p>
                        <button class="add-to-cart" data-product="Nintendo Entertainment System" data-price="2999">Agregar al carrito</button>
                        <a href="https://www.amazon.com.mx/Nintendo-Entertainment-System-Classic-Renewed/dp/B07H9H3TQ9/ref=sr_1_3?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-3">
                            <button>Comprar</button>
                        </a>
                    </div>
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

                // Guardar el carrito en el localStorage
                localStorage.setItem('cartItems', JSON.stringify(cartItems));

                alert(`${productName} ha sido agregado al carrito`);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
