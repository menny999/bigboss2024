<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VERSACE</title>
  <link rel="stylesheet" href="STYLES/general.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    /* Estilos específicos de esta página */
    body {
      background-color: #FFFFFF;
      color: #000000;
      margin: 0;
      padding: 0;
      font-family: 'Helvetica Neue', sans-serif; /* Cambio de tipo de letra */
    }
    header {
      background-color: #000000;
      color: #fff;
      text-align: center;
      padding: 20px;
      font-weight: bold; /* Aumento de peso de la fuente */
    }
    h2{
      text-align: center;
      padding: 20px;
      font-weight: bold; /* Aumento de peso de la fuente */
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      padding: 20px;
    }
    .productos {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }
    .producto {
      margin: 25px;
      text-align: center;
      background-color: #fff;
      border-radius: 15px;
      overflow: hidden;
      width: 225px;
      position: relative;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .producto:hover {
      transform: translateY(-10px);
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
    }
    .producto img {
      width: 100%;
      height: auto;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      transition: transform 0.3s ease;
    }
    .producto:hover img {
      transform: scale(1.05);
    }
    .producto p {
      margin: 10px 0;
      color: #666; /* Cambio de color del texto */
      font-size: 16px; /* Aumento de tamaño de fuente */
    }
    .producto button {
      background-color: #ddd;
      color: #333;
      border: none;
      padding: 5px 10px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
      font-weight: bold; /* Aumento de peso de la fuente */
    }
    .producto button:hover {
      background-color: #555;
      color: white;
    }
    footer {
      background-color: #000;
      color: #fff;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
      font-weight: bold; /* Aumento de peso de la fuente */
    }
    footer p {
      margin: 5px;
      font-size: 14px; /* Reducción de tamaño de fuente */
    }
    /* Estilos para el carrito */
    /* Estilos para el icono del carrito */
.carrito-icon {
  font-size: 23px; /* Ajusta el tamaño del icono según tus preferencias */
}

    #carrito {
    color: gold; /* Cambia el color del carrito a dorado */
    position: fixed;
    top: 20px;
    right: 20px;
    cursor: pointer;
    z-index: 1000;
  }

  #carrito-items {
    display: none;
    position: absolute;
    top: 80px;
    right: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    width: 300px;
    color: black; /* Cambia el color del texto dentro del carrito a negro */
  }

  #carrito-items.visible {
    display: block;
  }

  #carrito-items img {
    max-width: 50px;
    max-height: 50px;
    margin-right: 10px;
  }

  #carrito-items h4 {
    color: black; /* Cambia el color del título del carrito a negro */
  }

  #carrito-items ul {
    list-style: none;
    padding: 0;
  }

  #carrito-items li {
    margin-bottom: 10px;
  }

  #carrito-items li img {
    vertical-align: middle;
    margin-right: 10px;
  }

  #carrito-items p {
    margin: 0;
  }

  #carrito-items button {
    font-size: 14px;
  }

    .tallas ul {
      list-style-type: none;
      padding: 0;
    }
    .tallas li {
      display: inline-block;
      margin-right: 5px;
      background-color: #ddd;
      padding: 2px 5px; /* Ajuste del relleno */
      border-radius: 5px;
      cursor: pointer;
      font-size: 12px; /* Reducción del tamaño de fuente */
    }
    .tallas li:hover {
      background-color: #555;
      color: white;
    }
    /* Estilos para la galería de imágenes adicionales */
    .galeria {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
    }
    .galeria img {
      width: 50px;
      height: 50px;
      margin: 0 5px;
      cursor: pointer;
    }
    .galeria img:hover {
      border: 2px solid #333;
      border-radius: 5px;
    }
     /* Estilos CSS para los menús */
     .menu-desplegable {
            position: relative;
            display: inline-block;
            cursor: pointer;
            margin-right: 110px; /* Espacio entre menús */
        }

        .opciones {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgb(116, 116, 116);
            z-index: 1;
        }

        .opcion {
    padding: 12px 16px;
    text-decoration: none; /* Elimina el subrayado */
    display: block;
    color: #000000; /* Cambia el color del texto a tu gusto */
}


        .opcion:hover {
          background-color: #c7c7c7;
    text-decoration: none; /* Elimina el subrayado */
    color: #000000; /* Establece el color del texto al mismo que el texto normal */

        }

        /* Ajuste para menús horizontales */
        .menu-container {
            white-space: nowrap; /* Evita que los menús se desplacen a la siguiente línea */
        }

        /* Estilos adicionales para la opción de "Inicio" */
        .menu-desplegable a.inicio {
            color: rgb(0, 0, 0); /* Cambia el color del texto a negro */
            display: block;
            text-decoration: none;
            padding: 12px 16px;
        }

        /* Estilos adicionales para la opción de "Inicio" */
        .menu-desplegable a.ubicacion {
            color: black; /* Cambia el color del texto a negro */
            display: block;
            text-decoration: none;
            padding: 12px 16px;
        }

        /* Estilos adicionales para la opción de "Inicio" */
        .menu-desplegable a.servicio {
            color: black; /* Cambia el color del texto a negro */
            display: block;
            text-decoration: none;
            padding: 12px 16px;
        }
       

    .menu-desplegable a.inicio,
    .menu-desplegable a.ubicacion,
    .menu-desplegable a.servicio {
      color: rgb(0, 0, 0);
      display: block;
      text-decoration: none;
      padding: 12px 16px;
    }
  </style>
</head>
<body>
<header>
  <div class="logo">
    <img src="IMG LOGOS/versace logo.png" alt="Logo de Versace">
  </div>
</header>

<div class="menu-container">
  <div class="menu-desplegable">
    <center>
      <a href="index.php" class="inicio"> <h2>Inicio</h2></a>
    </center>
  </div>
  <div class="menu-desplegable" onclick="mostrarOpciones('opciones1')">
    <center>
      <h2>Mas</h2>
      <div class="opciones" id="opciones1">
        <a href="New Era.html" class="opcion">Calzado</a>
        <a href="Dandy Hats.html" class="opcion">Perfumeria</a>
      </div>
    </center>
  </div>
  <div class="menu-desplegable" onclick="mostrarOpciones('opciones2')">
    <center>
      <h2>Accesorios</h2>
      <div class="opciones" id="opciones2">
        <a href="Kid De Limpieza.html" class="opcion">Gafas</a>
        <a href="Pines.html" class="opcion">Joyeria</a>
      </div>
    </center>
  </div>
  <div class="menu-desplegable">
    <center>
      <a href="ubicacion.php" class="ubicacion"> <h2>Ubicacion</h2></a>
    </center>
  </div>
</div>

<div class="container">
  <div class="productos">
    <?php
    $productos = array(
      array("CAMISA BARROCO DE SEDA MANGA LARGA", "MX $35,000", "versace IMG/CAMISA BARROCO DE SEDA2.avif", array("versace IMG/CAMISA BARROCO DE SEDA2.avif", "versace IMG/Camisa Barroco de seda3.avif"), array("S", "M", "L", "XL")),
      array("CAMISA BARROCO DE SEDA MANGA CORTA", "MX $31,300", "versace IMG/CAMISA BARROCO DE SEDA CORTA.avif", array("versace IMG/CAMISA BARROCO DE SEDA CORTA.avif", "versace IMG/CAMISA BARROCO DE SEDA4.avif"), array("S", "M", "L", "XL")),
      array("CAMISA BAROCCO DE SEDA", "MX $27,650", "versace IMG/CAMISA BAROCCO DE SEDAC.avif", array("versace IMG/CAMISA BAROCCO DE SEDAC.avif", "versace IMG/CAMISA BAROCCO DE SEDA AZUL.avif"), array("S", "M", "L", "XL")),
      array("CAMISA DE SEDA BAROCCO SEA", "MX $27,650", "versace IMG/CAMISA DE SEDA BAROCCO SEA.avif",  array("versace IMG/CAMISA DE SEDA BAROCCO SEA.avif", "versace IMG/CAMISA DE SEDA BAROCCO SEA2.avif", "versace IMG/CAMISA DE SEDA BAROCCO SEA3.avif"), array("S", "M", "L", "XL")),
      array("PANTALONES CORTOS DE SEDA BAROCCO SEA", "MX $24,200", "versace IMG/PANTALONES CORTOS DE SEDA BAROCCO SEA.avif", array("versace IMG/PANTALONES CORTOS DE SEDA BAROCCO SEA.avif", "versace IMG/PANTALONES CORTOS DE SEDA BAROCCO SEA2.avif"), array("S", "M", "L", "XL")),
      array("CAMISA DE SEDA BAROCCO SEA LARGA", "MX $29,000", "versace IMG/CAMISA DE SEDA BAROCCO SEA LARGA2.avif", array("versace IMG/CAMISA DE SEDA BAROCCO SEA LARGA2.avif", "versace IMG/CAMISA DE SEDA BAROCCO SEA LARGA.avif"), array("S", "M", "L", "XL")),
      array("CAMISETA BAROCCO SEA", "MX $16,400", "versace IMG/CAMISETA BAROCCO SEA2.avif", array("versace IMG/CAMISETA BAROCCO SEA2.avif", "versace IMG/CAMISETA BAROCCO SEA.avif"), array("S", "M", "L", "XL")),
      array("CAMISETA CON BORDADO MEDUSA MILANO", "MX $9,800", "versace IMG/CAMISETA CON BORDADO MEDUSA MILANO2.avif", array("versace IMG/CAMISETA CON BORDADO MEDUSA MILANO2.avif", "versace IMG/CAMISETA CON BORDADO MEDUSA MILANO.avif"), array("S", "M", "L", "XL")),
      array("CAMISETA STARFISH BLASON Y CRISTALES", "MX $8,500", "versace IMG/CAMISETA STARFISH BLASON Y CRISTALES.avif", array("versace IMG/CAMISETA STARFISH BLASON Y CRISTALES.avif", "versace IMG/CAMISETA STARFISH BLASON Y CRISTALES2.avif"), array("S", "M", "L", "XL")),
      array("CAMISETA MEDUSA", "MX $8,000", "versace IMG/CAMISETA MEDUSA.avif", array("versace IMG/CAMISETA MEDUSA.avif", "versace IMG/CAMISETA MEDUSA2.avif", "versace IMG/CAMISETA MEDUSA3.avif" , "versace IMG/CAMISETA MEDUSA4.avif", "versace IMG/CAMISETA MEDUSA5.avif"), array("S", "M", "L", "XL")),
      array("POLO DE MANGA CORTA DE TOALLA CON LOGOTIPO", "MX $29,000", "versace IMG/POLO DE MANGA CORTA DE TOALLA CON LOGOTIPO.avif", array("versace IMG/POLO DE MANGA CORTA DE TOALLA CON LOGOTIPO.avif", "versace IMG/POLO DE MANGA CORTA CON GRECA.avif", "versace IMG/POLO DE MANGA CORTA DE TOALLA CON LOGOTIPO2.avif"), array("S", "M", "L", "XL")),      
    );

    foreach ($productos as $producto) {
      echo '<div class="producto">';
      echo '<div id="carousel-' . str_replace(" ", "-", $producto[0]) . '" class="carousel slide" data-ride="carousel">';
      echo '<div class="carousel-inner">';
      foreach ($producto[3] as $index => $imagen) {
        echo '<div class="carousel-item' . ($index == 0 ? ' active' : '') . '">';
        echo '<img src="' . $imagen . '" class="d-block w-100" alt="' . $producto[0] . '">';
        echo '</div>';
      }
      echo '</div>';
      echo '<a class="carousel-control-prev" href="#carousel-' . str_replace(" ", "-", $producto[0]) . '" role="button" data-slide="prev">';
      echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
      echo '<span class="sr-only">Previous</span>';
      echo '</a>';
      echo '<a class="carousel-control-next" href="#carousel-' . str_replace(" ", "-", $producto[0]) . '" role="button" data-slide="next">';
      echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
      echo '<span class="sr-only">Next</span>';
      echo '</a>';
      echo '</div>';
      echo '<h3>' . $producto[0] . '</h3>';
      echo '<p><strong>Precio:</strong> ' . $producto[1] . '</p>';
      echo '<div class="tallas">';
      echo '<ul>';
      echo '<p>Tallas Disponibles:</p>';
      foreach ($producto[4] as $talla) {
        echo '<li onclick="seleccionarTalla(\'' . $talla . '\', \'' . $producto[0] . '\')">' . $talla . '</li>';
      }
      echo '</ul>';
      echo '</div>';
      echo '<button onclick="window.location.href=\'comprar.php?nombre=' . urlencode($producto[0]) . '&precio=' . urlencode($producto[1]) . '&imagen=' . urlencode($producto[2]) . '\'">Comprar</button>';
      echo '<button class="add-to-cart">Agregar al carrito</button>';
      echo '<button class="add-to-favorites">Agregar a favoritos</button>';
      echo '</div>';
    }
    ?>
  </div>
</div>

<i id="carrito" class="bi bi-cart3 icon" onclick="toggleCarrito()"></i>
<i id="favoritos" class="bi bi-heart icon" onclick="toggleFavoritos()"></i>

<div id="carrito-items">
  <h4>Carrito</h4>
  <ul id="carrito-list"></ul>
  <button onclick="closeCarrito()">Cerrar</button>
</div>

<div id="favoritos-items">
  <h4>Favoritos</h4>
  <ul id="favoritos-list"></ul>
  <button onclick="closeFavoritos()">Cerrar</button>
</div>

<footer>
  <p>&copy; 2023 Versace. Todos los derechos reservados.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    const addToFavoritesButtons = document.querySelectorAll(".add-to-favorites");

    addToCartButtons.forEach(button => {
      button.addEventListener("click", addToCart);
    });

    addToFavoritesButtons.forEach(button => {
      button.addEventListener("click", addToFavorites);
    });
  });

  function addToCart(event) {
    const product = event.target.closest(".producto");
    const productName = product.querySelector("h3").innerText;
    const productPrice = product.querySelector("p strong").innerText;
    const productImage = product.querySelector("img").src;

    const cartList = document.getElementById("carrito-list");
    const cartItem = document.createElement("li");
    cartItem.innerHTML = `<img src="${productImage}" alt="${productName}"> ${productName} - ${productPrice}`;
    cartList.appendChild(cartItem);
  }

  function addToFavorites(event) {
    const product = event.target.closest(".producto");
    const productName = product.querySelector("h3").innerText;
    const productPrice = product.querySelector("p strong").innerText;
    const productImage = product.querySelector("img").src;

    const favoritesList = document.getElementById("favoritos-list");
    const favoriteItem = document.createElement("li");
    favoriteItem.innerHTML = `<img src="${productImage}" alt="${productName}"> ${productName} - ${productPrice}`;
    favoritesList.appendChild(favoriteItem);
  }

  function toggleCarrito() {
    const carrito = document.getElementById("carrito-items");
    carrito.classList.toggle("visible");
  }

  function closeCarrito() {
    const carrito = document.getElementById("carrito-items");
    carrito.classList.remove("visible");
  }

  function toggleFavoritos() {
    const favoritos = document.getElementById("favoritos-items");
    favoritos.classList.toggle("visible");
  }

  function closeFavoritos() {
    const favoritos = document.getElementById("favoritos-items");
    favoritos.classList.remove("visible");
  }

  function mostrarOpciones(id) {
    document.getElementById(id).classList.toggle("show");
  }

  window.onclick = function(event) {
    if (!event.target.matches('.menu-desplegable')) {
      var opciones = document.getElementsByClassName("opciones");
      for (var i = 0; i < opciones.length; i++) {
        var openOption = opciones[i];
        if (openOption.classList.contains('show')) {
          openOption.classList.remove('show');
        }
      }
    }
  }
</script>
</body>
</html>
