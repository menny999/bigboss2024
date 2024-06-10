<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Realizar Compra - Big Bos Boutique</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="STYLES/compra.css">
  
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <!-- Agrega más elementos li según el número de imágenes -->
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="IMG LOGOS/BANNER BIGBOSS.png" class="d-block w-100" alt="Banner 1">
            <!-- Ajusta el atributo alt con una descripción adecuada -->
          </div>
          <div class="carousel-item">
            <img src="IMG LOGOS/BANNER BIGBOSS.png" class="d-block w-100" alt="Banner 1">
          </div>
          <div class="carousel-item">
            <img src="IMG LOGOS/BANNER BIGBOSS.png" class="d-block w-100" alt="Banner 1">
          </div>
          <!-- Agrega más elementos div.carousel-item según el número de imágenes -->
        </div>
      </div>
  
  <div class="container">
    <div class="checkout">
      <h1>Realizar Compra</h1>

      <?php
          
if (isset($_GET['nombre']) && isset($_GET['precio']) && isset($_GET['imagen'])) {
    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $imagen = $_GET['imagen'];
    
    // Aquí puedes mostrar la información del producto y la imagen con el tamaño deseado
    echo '<h2>'.$nombre.'</h2>';
    echo '<img src="'.$imagen.'" alt="'.$nombre.'" style="width: 150px; height: auto;">';
        echo '<p>Precio: '.$precio.'</p>';

   
} else {
}
?>

<form action="gracias.php" method="post">

      <h3>Contacto</h3>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Correo Electrónico"   required>
        </div>

        <h3>Entrega</h3>
        
         <label for="pais">Pais/Region:</label> 
        <select name="pais">
          <option value="mex">Mexico</option>
          <option value="eua">Estados Unidos</option> 
          
        </select>

        
            <div class="form-group">
               <br>
                <input type="text" id="nombre" name="nombre"  placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <br>
                <input type="text" id="Apellidos" name="Apellidos"  placeholder="Apellidos" required>
            </div>
            <div class="form-group">
                <br>
                <input type="text" id="Colonia" name="Colonia"  placeholder="Colonia" required>
            </div>
            <div class="form-group">
                <br>
                <input type="text" id="Calle y numero de casa" name="Calle_y_numero_de_casa"  placeholder="Calle y numero de casa" required>
            </div>
            <div class="form-group">
                <br>
                <input type="text" id="Referencia" name="Referencia"  placeholder="Referencia (negocio, local, entre calles)" required>
            </div>
            <div class="form-group">
                <br>
                <input type="text" id="Codigo postal" name="Codigo_postal"  placeholder="Codigo Postal" required>
            </div>
            <div class="form-group">
                <br>
                <input type="text" id="Ciudad" name="Ciudad"  placeholder="Ciudad" required>
            </div>

            <label for="estados">Seleccione su estado:</label> 
            <select name="estado" id="estados">
                <option value="">Selecciona un estado</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="Ciudad de México">Ciudad de México</option>
                <option value="Coahuila">Coahuila</option>
                <option value="Colima">Colima</option>
                <option value="Durango">Durango</option>
                <option value="Estado de México">Estado de México</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Michoacán">Michoacán</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosí">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Yucatán">Yucatán</option>
                <option value="Zacatecas">Zacatecas</option>
            </select>

            <div class="form-group">
                <br>
                <input type="text" id="Telefono" name="Telefono" placeholder="Telefono" required>
            </div>
            <div class="form-group">
                <br>
                <input type="text" id="tarjeta" name="tarjeta" placeholder="Número de Tarjeta" required>
            </div>
        <div class="form-group">
            <br>
            <input type="text" id="caducidad" name="caducidad" placeholder="MM/AA" required>
        </div>
        <input type="hidden" name="nombre_producto" value="<?php echo htmlspecialchars($nombre); ?>">
<input type="hidden" name="precio_total" value="<?php echo htmlspecialchars($precio); ?>">

        <button type="submit" name="listo">Realizar Compra</button>
</form>
</div>
  </div>
  <header>
    <p>© 2024 Big Bos Boutique. Todos los derechos reservados.</p>
  </header>
</body>
</html>
