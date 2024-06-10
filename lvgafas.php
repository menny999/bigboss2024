<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Louis Vuitton - Gafas</title>
      <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
-->
<script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="STYLES/general.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
body {
  background-color: #FFFFFF;
  color: #000000;
  margin: 0;
  padding: 0;
  font-family: 'Helvetica Neue', sans-serif;
}
header {
  background-color: #000000;
  color: #fff;
  text-align: center;
  padding: 20px;
  font-weight: bold;
}
h2 {
  text-align: center;
  padding: 20px;
  font-weight: bold;
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
  color: #666;
  font-size: 16px;
}
.producto button {
  background-color: #ddd;
  color: #333;
  border: none;
  padding: 5px 10px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
  font-weight: bold;
  margin: 5px;
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
  font-weight: bold;
}
footer p {
  margin: 5px;
  font-size: 14px;
}
.icon {
  font-size: 23px;
}
#carrito, #favoritos {
  color: gold;
  position: fixed;
  top: 64px;
  cursor: pointer;
  z-index: 1000;
}
#carrito {
  right: 20px;
}
#favoritos {
  right: 60px;
}
#carrito-items, #favoritos-items {
  display: none;
  position: absolute;
  top: 50px;
  right: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  width: 300px;
  color: black;
}
#carrito-items.visible, #favoritos-items.visible {
  display: block;
}
#carrito-items img, #favoritos-items img {
  max-width: 50px;
  max-height: 50px;
  margin-right: 10px;
}
#carrito-items h4, #favoritos-items h4 {
  color: black;
}
#carrito-items ul, #favoritos-items ul {
  list-style: none;
  padding: 0;
}
#carrito-items li, #favoritos-items li {
  margin-bottom: 10px;
  display: flex;
  align-items: center;
}
#carrito-items p, #favoritos-items p {
  margin: 0;
}
#carrito-items button, #favoritos-items button {
  font-size: 14px;
}
.menu-desplegable {
  position: relative;
  display: inline-block;
  cursor: pointer;
  margin-right: 110px;
}
.opciones {
  display: none;
  position: absolute;
  background-color: #ffffff;
  min-width: 160px;
  box-shadow: 0 8px 20px 0 rgb(116, 116, 116);
  z-index: 1;
}
.opcion {
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  color: #000000;
}
.opcion:hover {
  background-color: #c7c7c7;
  text-decoration: none;
  color: #000000;
}
.menu-container {
  white-space: nowrap;
              list-style-type: none;
              text-decoration: none;

}
.menu-desplegable a.inicio,
.menu-desplegable a.ubicacion,
.menu-desplegable a.servicio {
  color: rgb(0, 0, 0);
  display: block;
  text-decoration: none;
  padding: 12px 16px;
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

/* Nuevo CSS agregado */
.menu-desplegable:hover .opciones {
  display: block;
}

.opciones .opcion {
  font-size: 14px;
}
.boton {
  background-color: #b0b0b0;
    border: 1px solid #FFFFFF; /* Bordes */
    color: #000000; /* Texto negro */
    padding: 10px 30px; /* Ajuste del relleno */
    border-radius: 5px; /* Bordes redondeados */
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s; /* Transición suave */
}

.boton:hover {
    background-color: #FFFFFF; /* Cambia el color de fondo al pasar el ratón */
    color: #000000; /* Cambia el color del texto al pasar el ratón */
}

.boton {
    margin-right: 10px; /* Margen entre botones */
    margin-bottom: 10px; /* Margen inferior */
}
* {box-sizing:border-box;}
body {font-family:Arial, sans-serif; background-color:#f5f5f5;}
.clearfix {content:""; display:table;}
menu, ul, li, a {margin:0; padding:0;}
li {list-style:none;}
a {text-decoration:none; display:block; cursor:pointer;}

menu {width:100%; padding:0 30px; background-color:rgb(0, 0, 0); margin:0 auto;}
.logo {color:#fff; font-size:3.5rem;}
menu > ul {padding:0px; color:#fff; float:right; }
menu > ul > li {float:left; list-style:none; position:relative;  margin-right:20px;}
.main-menu > li > a {display:block; padding:20px; color:#fff; position:relative; z-index:10;}
.main-menu > li:hover > a {background-color:#fff;  color:#333;}
/*.main-menu > li:hover > a:after {top: 100%;
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(0, 0, 0, 0);
  border-top-color: #fff;
  border-width: 20px;
  margin-left: -20px;}*/

.search {padding:22px 0 18px 0; margin-right:0;}


.dropdown {background-color:#000000; position:absolute; right:-50px; top:58px;  /*width:550px;*/ display:flex; opacity:0; visibility:hidden; z-index:1; transition:all 0.25s ease 0s; box-shadow:0px 1px 10px rgb(181, 181, 181);}
.dropdown > ul {width:180px; flex:1; margin:20px 0 20px 5px; border-left:1px solid #ccc; padding-left:5px;}
.dropdown > ul:first-of-type {margin-left:10px; padding-left:0; border-left:0;}
.dropdown > ul:last-of-type {margin-right:10px;}
.dropdown > ul > li {padding:10px 20px;  }

.dropdown > ul > li:first-of-type {padding-bottom:5px; text-decoration:none; margin-bottom:5px; font-weight:bold; background-color:rgb(75, 75, 75);}
.dropdown > ul > li:first-of-type a {cursor:default; }
.dropdown > ul > li:first-of-type a:hover {color:#000000;}
.dropdown > ul > li > a {color:#ffffff;}
.dropdown a:hover {color:rgb(187, 255, 0);}

.main-menu > li:hover .dropdown {visibility:visible; opacity:1; transition-delay:0s;}

video {
    display: block; /* Asegura que el video sea un elemento de bloque */
    margin: 0 auto; /* Centra el video horizontalmente */
    max-width: 200%; /* Ajusta el ancho máximo del video al tamaño máximo de la ventana */
    height: auto; /* Permite que la altura se ajuste automáticamente para mantener la proporción del video */
    width: 850px; /* Ajusta el ancho del video según tus preferencias */
    max-height: 900px; /* Ajusta la altura máxima del video según tus preferencias */
}

    </style>
</head>
<body>

  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <!-- Agrega más elementos li según el número de imágenes -->
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
  <img src="IMG LOGOS/lvbanner.jpg" class="d-block w-100" alt="Banner 1">
      <!-- Ajusta el atributo alt con una descripción adecuada -->
    </div>
    <div class="carousel-item">
    <img src="IMG LOGOS/lvbanner.jpg" class="d-block w-100" alt="Banner 1">
    </div>
    <div class="carousel-item">
    <img src="IMG LOGOS/lvbanner.jpg" class="d-block w-100" alt="Banner 1">
    </div>
    <!-- Agrega más elementos div.carousel-item según el número de imágenes -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<menu class="clearfix">
  <div class=""></div>
  <ul class="main-menu clearfix">
  <li>
  <a href="lv.php" class="input-group">Inicio</a>
    </li>
    <li>
      <a href="#">Mas</a>
      <div class="dropdown clearfix">
        <ul>
          <li><a>Mas</a></li>
          <li><a href="lv.php">Prendas</a></li>
          <li><a href="lvcalzado.php">Calzado</a></li>
        </ul>
        <ul>
        <li><a>Accesorios</a></li>
          <li><a href="lvbolsos.php">Bolsos/Carteras</a></li>
          <li><a href="lvjoyeria.php">Joyeria</a></li>
          <li><a href="lvgafas.php">Gafas</a></li>
          <li><a href="lvcintos.php">Cintos</a></li>
        </ul>
    </li>
    
    <li>
      <a href="ubicacion.php" class="input-group">Ubicacion</a>
    </li>

    <li>
      <a href="servicio.php" class="input-group">Servicio al cliente</a>
    </li>
    
    <li>
      <a href="form.php" class="input-group">Iniciar Sesión</a>
    </li>
  </ul>
</menu>


<div class="container">
  <div class="productos">
    <?php
    $productos = array( 
      array("Gafas de sol LV Waimea", "MX $9,900", "LVGAFAS/Gafas de sol LV Waimea.png", array("LVGAFAS/Gafas de sol LV Waimea3.png", "LVGAFAS/Gafas de sol LV Waimea.avif"), array()),
      array("Lentes de esquí LV Snowfall", "MX $20,000", "LVGAFAS/Lentes de esquí LV Snowfall.avif", array("LVGAFAS/Lentes de esquí LV Snowfall.avif", "LVGAFAS/Lentes de esquí LV Snowfall3.avif", "LVGAFAS/Lentes de esquí LV Snowfall2.avif"), array()),
      array("Lentes de sol 1.1 Evidence", "MX $42,000", "LVGAFAS/Lentes de sol 1.1 Evidence.avif", array("LVGAFAS/Lentes de sol 1.1 Evidence.avif", "LVGAFAS/Lentes de sol 1.1 Evidence3.avif", "LVGAFAS/Lentes de sol 1.1 Evidence2.avif"), array()),
      array("Lentes de sol Cyclone Metal", "MX $42,000", "LVGAFAS/Lentes de sol Cyclone Metal.avif", array("LVGAFAS/Lentes de sol Cyclone Metal.avif", "LVGAFAS/Lentes de sol Cyclone Metal2.avif", "LVGAFAS/Lentes de sol Cyclone Metal3.avif"), array()),


    );
    

    foreach ($productos as $index => $producto) {
      $nombre = $producto[0];
      $precio = $producto[1];
      $imagenPrincipal = $producto[2];
      $imagenesSecundarias = $producto[3];
      $tallas = $producto[4];
      echo '<div class="producto">';
      echo '<div id="carouselExampleIndicators'.$index.'" class="carousel slide" data-ride="carousel">';
      echo '<ol class="carousel-indicators">';
      foreach ($imagenesSecundarias as $key => $imagen) {
        echo '<li data-target="#carouselExampleIndicators'.$index.'" data-slide-to="'.$key.'" '.($key == 0 ? 'class="active"' : '').'></li>';
      }
      echo '</ol>';
      echo '<div class="carousel-inner">';
      foreach ($imagenesSecundarias as $key => $imagen) {
        echo '<div class="carousel-item '.($key == 0 ? 'active' : '').'">';
        echo '<img src="'.$imagen.'" class="d-block w-100" alt="'.$nombre.'">';
        echo '</div>';
      }
      echo '</div>';
      echo '<a class="carousel-control-prev" href="#carouselExampleIndicators'.$index.'" role="button" data-slide="prev">';
      echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
      echo '<span class="sr-only">Previous</span>';
      echo '</a>';
      echo '<a class="carousel-control-next" href="#carouselExampleIndicators'.$index.'" role="button" data-slide="next">';
      echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
      echo '<span class="sr-only">Next</span>';
      echo '</a>';
      echo '</div>';
      echo '<p>'.$nombre.'</p>';
      echo '<p>'.$precio.'</p>';
      echo '<div class="tallas"><ul>';
      foreach ($tallas as $talla) {
        echo '<li>'.$talla.'</li>';
      }
      echo '</ul></div>';
      echo '<button class="boton" onclick="agregarAlCarrito(\''.htmlspecialchars($nombre).'\', \''.htmlspecialchars($precio).'\', \''.htmlspecialchars($imagenPrincipal).'\')">Agregar al carrito</button>';
      echo '<button class="boton" onclick="agregarAFavoritos(\''.htmlspecialchars($nombre).'\', \''.htmlspecialchars($precio).'\', \''.htmlspecialchars($imagenPrincipal).'\')"><i class="bi bi-heart-fill"></i></button>';
      echo '<button class="boton" onclick="window.location.href=\'comprar.php?nombre='.urlencode($nombre).'&precio='.urlencode($precio).'&imagen='.urlencode($imagenPrincipal).'\'">Comprar</button>';
      

      
      

      echo '</div>';
    }
    ?>
  </div>
</div>

<div id="favoritos">
  <i class="bi bi-heart-fill"></i>
</div>

<div id="favoritos-items">
  <h4>Lista de Favoritos</h4>
  <ul id="lista-favoritos"></ul>
  <button onclick="cerrarFavoritos()">Cerrar</button>
</div>
<div id="carrito">  
  <i class="bi bi-cart-fill"></i>
</div>

<div id="carrito-items">
  <h4>Carrito de Compras</h4>
  <ul id="lista-carrito"></ul>
  <h5 id="subtotal">Subtotal: MX $0</h5>
  <button onclick="cerrarCarrito()">Cerrar</button>
  <button id="btnComprar" onclick="comprar()">Comprar</button>
  </div>

<header>
<p>&copy; Louis Vuitton. Derechos reservados.</p>
</header>

<script>
function seleccionarTalla(talla) {
  alert('Has seleccionado la talla: ' + talla);
}

 function comprar() {
  let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
  let nombres = carrito.map(producto => encodeURIComponent(producto.nombre));
  let precios = carrito.map(producto => encodeURIComponent(producto.precio));
  let imagenes = carrito.map(producto => encodeURIComponent(producto.imagen));
  let subtotal = calcularSubtotal(carrito);
  let url = `comprar1.php?`;
  for (let i = 0; i < carrito.length; i++) {
    url += `nombre${i+1}=${nombres[i]}&precio${i+1}=${precios[i]}&imagen${i+1}=${imagenes[i]}&`;
  }
  url += `subtotal=${subtotal}`;
  window.location.href = url;
}


function calcularSubtotal(carrito) {
  return carrito.reduce((total, producto) => {
    return total + (parseFloat(producto.precio.replace('MX $', '').replace(',', '')) * producto.cantidad);
  }, 0).toFixed(2);
}

  
  function actualizarSubtotal() {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    let subtotal = carrito.reduce((total, producto) => {
      return total + (parseFloat(producto.precio.replace('MX $', '').replace(',', '')) * producto.cantidad);
    }, 0);
    document.getElementById('subtotal').innerText = `Subtotal: MX $${subtotal.toLocaleString()}`;
  }

  function agregarAlCarrito(nombre, precio, imagen) {
    const producto = { nombre, precio, imagen, cantidad: 1 };
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    let index = carrito.findIndex(item => item.nombre === nombre);
    if (index !== -1) {
      carrito[index].cantidad += 1;
    } else {
      carrito.push(producto);
    }
    localStorage.setItem('carrito', JSON.stringify(carrito));
    renderCarrito();
    abrirCarrito(); // Llama a la función para abrir el carrito
  }

  function abrirCarrito() {
    const carritoItems = document.getElementById('carrito-items');
    carritoItems.classList.add('visible');
    carritoItems.scrollIntoView({ behavior: 'smooth' });
  }
function agregarAFavoritos(nombre, precio, imagen) {
  const producto = { nombre, precio, imagen };
  let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];
  favoritos.push(producto);
  localStorage.setItem('favoritos', JSON.stringify(favoritos));
  renderFavoritos();
  abrirFavoritos(); // Llama a la función para abrir la sección de favoritos
}

  function renderCarrito() {
    const listaCarrito = document.getElementById('lista-carrito');
    listaCarrito.innerHTML = '';
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito.forEach((producto, index) => {
      const item = document.createElement('li');
      item.innerHTML = `
        <div class="carrito-item">
          <img src="${producto.imagen}" alt="${producto.nombre}">
          <p>${producto.nombre} - ${producto.precio}</p>
          <div class="cantidad-controles">
            <button onclick="cambiarCantidad(${index}, -1)">-</button>
            <span>${producto.cantidad}</span>
            <button onclick="cambiarCantidad(${index}, 1)">+</button>
          </div>
          <button onclick="eliminarDelCarrito(${index})">Eliminar</button>
        </div>
      `;
      listaCarrito.appendChild(item);
    });
    actualizarSubtotal();
  }

  function cambiarCantidad(index, cambio) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    if (carrito[index].cantidad + cambio > 0) {
      carrito[index].cantidad += cambio;
    } else {
      carrito.splice(index, 1);
    }
    localStorage.setItem('carrito', JSON.stringify(carrito));
    renderCarrito();
  }

  function eliminarDelCarrito(index) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito.splice(index, 1);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    renderCarrito();
  }

  function agregarAFavoritos(nombre, precio, imagen) {
  const producto = { nombre, precio, imagen };
  let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];
  favoritos.push(producto);
  localStorage.setItem('favoritos', JSON.stringify(favoritos));
  renderFavoritos();
  abrirFavoritos(); // Llama a la función para abrir la sección de favoritos
}
function abrirFavoritos() {
  const favoritosItems = document.getElementById('favoritos-items');
  favoritosItems.classList.add('visible');
  favoritosItems.scrollIntoView({ behavior: 'smooth' });
}


  function renderFavoritos() {
    const listaFavoritos = document.getElementById('lista-favoritos');
    listaFavoritos.innerHTML = '';
    let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];
    favoritos.forEach((producto, index) => {
      const item = document.createElement('li');
      item.innerHTML = `
        <div class="favoritos-item">
          <img src="${producto.imagen}" alt="${producto.nombre}">
          <p>${producto.nombre} - ${producto.precio}</p>
          <button onclick="eliminarDeFavoritos(${index})">Eliminar</button>
        </div>
      `;
      listaFavoritos.appendChild(item);
    });
  }

  function eliminarDeFavoritos(index) {
    let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];
    favoritos.splice(index, 1);
    localStorage.setItem('favoritos', JSON.stringify(favoritos));
    renderFavoritos();
  }

  document.getElementById('carrito').addEventListener('click', function() {
    const carritoItems = document.getElementById('carrito-items');
    const favoritosItems = document.getElementById('favoritos-items');
    carritoItems.classList.toggle('visible');
    favoritosItems.classList.remove('visible');
    if (carritoItems.classList.contains('visible')) {
      carritoItems.scrollIntoView({ behavior: 'smooth' });
    }
  });

  document.getElementById('favoritos').addEventListener('click', function() {
    const carritoItems = document.getElementById('carrito-items');
    const favoritosItems = document.getElementById('favoritos-items');
    favoritosItems.classList.toggle('visible');
    carritoItems.classList.remove('visible');
    if (favoritosItems.classList.contains('visible')) {
      favoritosItems.scrollIntoView({ behavior: 'smooth' });
    }
  });

  function cerrarCarrito() {
    document.getElementById('carrito-items').classList.remove('visible');
  }

  function cerrarFavoritos() {
    document.getElementById('favoritos-items').classList.remove('visible');
  }

  window.onload = function() {
    renderCarrito();
    renderFavoritos();
  };
</script>


</body>
</html>
