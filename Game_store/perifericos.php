<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <!-- Producto 1 -->
                <div class="card">
                    <img src="imagenes/keyboard.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Razer BlackWidow V3 Tenkeyless - Teclado mecánico Compacto Chroma RGB Yellow Switch - US Layout</h5>
                        <p class="card-text"> $2,299</p>
                        <a href="https://www.amazon.com.mx/Razer-RazerTM-BlackWidow-Tenkeyless-StandardWindows/dp/B09698GFZJ/ref=sr_1_2?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=3A0AMD5A4GBS7&dib=eyJ2IjoiMSJ9.hiIbrR4XlhE0_h0SnWYFr4JHLMY0WhnpwDomCLVs4N0yWVlRHYwfW2EdVOsr5slplHsNSbaLBbA9fZ5folaXLPiqiw-TvSsEv20S7EP3XPXAhpJQ0zbq4jJQhHLe-S2Ypmg6KYSSfsTd8VOiyj-snp0SzvuwB-UqtkwiROFevzcd8mah5wsUVi27r5hmU979fMXDEUVcZqXvmNcyN0NiDSX2gsFyuHs59mTIw1-D1Kozbo368SbyPI-k0Z5ldbGkDXBbI21tIf8boiUEtAKO6Tncs9w3HXvRtjyRZPuf0Vc.paPk1gI3C0Gu2gARkfcx9_JpU5JKQ_ebxm86KO4NnxU&dib_tag=se&keywords=teclado%2Bmecanico%2Brazer%2Bswitch%2Bred&qid=1744607122&sprefix=teclado%2Bmecanico%2Brazer%2Bswitch%2Bred%2Caps%2C166&sr=8-2&ufe=app_do%3Aamzn1.fos.de93fa6a-174c-4df7-be7c-5bc8e9c5a71b&th=1">
                            <button>Comprar</button>
                        </a>
                        <button class="add-to-cart" data-product="Razer BlackWidow V3 Tenkeyless" data-price="2299">Agregar al carrito</button>
                    </div>
                </div>

                <!-- Producto 2 -->
                <div class="card">
                    <img src="imagenes/mouse.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Logitech G Pro X Superlight 2 Lightspeed Mouse Inalámbrico de Juegos</h5>
                        <p class="card-text">$2,999</p>
                        <a href="https://www.amazon.com.mx/Logitech-Superlight-Inal%C3%A1mbrico-Interruptor-Programables/dp/B0CJ9RGJ18/ref=sr_1_1?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-1">
                            <button>Comprar</button>
                        </a>
                        <button class="add-to-cart" data-product="Logitech G Pro X Superlight 2" data-price="2999">Agregar al carrito</button>
                    </div>
                </div>

                <!-- Producto 3 -->
                <div class="card">
                    <img src="imagenes/headset.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SteelSeries Arctis Nova Pro - Auriculares inalámbricos multiplataforma para Juegos</h5>
                        <p class="card-text"> $5,999.</p>
                        <a href="https://www.amazon.com.mx/SteelSeries-Arctis-Nova-Pro-multiplataforma/dp/B09ZWCYQTX/ref=sr_1_1?__mk_es_MX=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-1">
                            <button>Comprar</button>
                        </a>
                        <button class="add-to-cart" data-product="SteelSeries Arctis Nova Pro" data-price="5999">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Función para agregar el producto al carrito
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-product');
                const productPrice = parseFloat(this.getAttribute('data-price'));

                // Crear el objeto del producto
                const product = {
                    name: productName,
                    price: productPrice
                };

                // Obtener los productos guardados en localStorage
                const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                
                // Agregar el nuevo producto al carrito
                cartItems.push(product);
                
                // Guardar el carrito actualizado en localStorage
                localStorage.setItem('cartItems', JSON.stringify(cartItems));

                alert(`${productName} ha sido agregado al carrito.`);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

