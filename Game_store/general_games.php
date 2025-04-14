<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/general_games.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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

<div class="card-group">
    <div class="card">
        <img src="forza.webp" class="card-img-top" alt="..." height="1000">
        <div class="card-body">
            <h5 class="card-title"><center>Forza Motorsport</center></h5>
            <p class="card-text"><center>2199.99$</center></p>
            <center>
                <button class="add-to-cart" data-product="Forza Motorsport" data-price="2199.99">Agregar al carrito</button>
                <a href="https://www.xbox.com/es-MX/games/forza-motorsport?launchStore=9P8PGC771MLP#purchaseoptions">
                    <button>COMPRAR</button>
                </a>
            </center>
        </div>
        <div class="card-footer">
            <small class="text-muted"><center>Xbox series X|S</center></small>
        </div>
    </div>
  
    <div class="card">
        <img src="DMC5.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><center>Devil May Cry 5</center></h5>
            <p class="card-text"><center>662$</center></p>
            <center>
                <button class="add-to-cart" data-product="Devil May Cry 5" data-price="662">Agregar al carrito</button>
                <a href="https://www.xbox.com/es-MX/games/store/devil-may-cry-hd-collection/BVNRFF9XJ6KM">
                    <button>COMPRAR</button>
                </a>
            </center>
        </div>
        <div class="card-footer">
            <small class="text-muted"><center>Ps5</center></small>
        </div>
    </div>
  
    <div class="card">
        <img src="bayonetta.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><center>Bayonetta 3</center></h5>
            <p class="card-text"><center>1399.99$</center></p>
            <center>
                <button class="add-to-cart" data-product="Bayonetta 3" data-price="1399.99">Agregar al carrito</button>
                <a href="https://www.nintendo.com/es-mx/store/products/bayonetta-3-switch/">
                    <button>COMPRAR</button>
                </a>
            </center>
        </div>
        <div class="card-footer">
            <small class="text-muted"><center>Nintendo Switch</center></small>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productName = this.getAttribute('data-product');
            const productPrice = parseFloat(this.getAttribute('data-price'));

            const product = { name: productName, price: productPrice };
            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            cartItems.push(product);
            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            alert(`${productName} ha sido agregado al carrito`);
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
