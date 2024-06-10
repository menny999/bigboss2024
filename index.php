<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <title>BIG BOS BOUTIQUE</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #000;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Roboto', sans-serif;
        }
        header, footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        header {
            font-size: 2rem;
            font-weight: bold;
        }
        .logo img {
            max-width: 200px;
            height: auto;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-nav .nav-link {
            color: #000;
            margin-right: 15px;
            font-weight: bold;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        main {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .producto {
            margin: 30px;
            text-align: center;
            background-color: #000;
            border-radius: 15px;
            overflow: hidden;
            width: 250px;
            position: relative;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.4s ease;
        }
        .producto:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
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
        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        footer a:hover {
            color: #ccc;
        }
        .redes-sociales ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .redes-sociales li {
            margin: 0 10px;
        }
        .redes-sociales a {
            color: gold;
            font-size: 20px;
            text-decoration: none;
        }
        .redes-sociales a:hover {
            color: #ccc;
        }
        .login-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }
        .login-form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .login-form-box {
            background-color: #000;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-form h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: #000;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .additional-links {
            margin-top: 15px;
        }
        .additional-links a {
            display: block;
            margin-bottom: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .additional-links a:hover {
            text-decoration: underline;
        }
        menu {
            width: 100%;
            padding: 0 30px;
            background-color: #000;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            color: #fff;
            font-size: 2rem;
        }
        menu > ul {
            padding: 0;
            color: #fff;
            display: flex;
            list-style: none;
        }
        menu > ul > li {
            margin-right: 20px;
            position: relative;
        }
        .main-menu > li > a {
            display: block;
            padding: 20px;
            color: #fff;
            font-weight: bold;
        }
        .main-menu > li > a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .dropdown {
            background-color: #fff;
            position: absolute;
            top: 60px;
            opacity: 0;
            visibility: hidden;
            z-index: 1;
            transition: all 0.25s ease;
            box-shadow: 0px 1px 10px rgba(0,0,0,0.25);
            border-radius: 0 0 8px 8px;
        }
        .dropdown > ul {
            padding: 20px;
            margin: 0;
            list-style: none;
        }
        .dropdown > ul > li {
            padding: 10px 0;
        }
        .dropdown > ul > li > a {
            color: #333;
        }
        .dropdown > ul > li > a:hover {
            color: #007bff;
        }
        .main-menu > li:hover .dropdown {
            visibility: visible;
            opacity: 1;
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


.dropdown {background-color:#fff; position:absolute; right:-50px; top:58px;  /*width:550px;*/ display:flex; opacity:0; visibility:hidden; z-index:1; transition:all 0.25s ease 0s; box-shadow:0px 1px 10px rgba(0,0,0,0.25);}
.dropdown > ul {width:180px; flex:1; margin:20px 0 20px 5px; border-left:1px solid #ccc; padding-left:5px;}
.dropdown > ul:first-of-type {margin-left:10px; padding-left:0; border-left:0;}
.dropdown > ul:last-of-type {margin-right:10px;}
.dropdown > ul > li {padding:10px 20px;  }

.dropdown > ul > li:first-of-type {padding-bottom:5px; margin-bottom:5px; font-weight:bold; font-size:1.1rem; background-color:rgba(70, 130, 180, 0.25);}
.dropdown > ul > li:first-of-type a {cursor:default; }
.dropdown > ul > li:first-of-type a:hover {color:#333;}
.dropdown > ul > li > a {color:#333;}
.dropdown a:hover {color:tomato;}

.main-menu > li:hover .dropdown {visibility:visible; opacity:1; transition-delay:0s;}
    </style>
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
    
    <menu class="clearfix">
  <div class=""></div>
  <ul class="main-menu clearfix">
  <li>
      <a href="index.php" class="input-group">Inicio</a>
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


<main>
    <div class="producto">
        <a href="versace.php">
            <img src="IMG LOGOS/versacelogo.png" alt="Versace Logo">
        </a>
    </div>
    <div class="producto">
        <a href="lv.php">
            <img src="IMG LOGOS/lvlogo.png" alt="Louis Vuitton Logo">
        </a>
    </div>
    <div class="producto">
        <a href="gucci.php">
            <img src="IMG LOGOS/gucci logo blanco.png" alt="Gucci">
        </a>
    </div>
    <div class="producto">
        <a href="boss.php">
            <img src="IMG LOGOS/logo boss2.png" alt="Versace Logo">
        </a>
    </div>
    <div class="producto">
        <a href="#">
            <img src="IMG LOGOS/ch logo.png" alt="Carolina Herrera Logo">
        </a>
    </div>
    <div class="producto">
    <a href="#">
    <img src="IMG LOGOS/prada logo.png" alt="Louis Vuitton Logo">
        </a>
    </div>

    <div class="producto">
    <a href="#">
    <img src="BLANCOS/DIOR LOGO BLANCO.png" alt="Hugo Boss Logo">
        </a>
    </div>
    <div class="producto">
    <a href="#">
    <img src="IMG LOGOS/KENZO LOGO BLANCO.png" alt="Carolina Herrera Logo">
        </a>
    </div>
</main>


    <footer>
        <div>&copy;Big Bos Boutique. Derechos reservados.</div>
        <div class="redes-sociales">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/_bigboss_boutique?igsh=MW5hMDllb3ptb2l5ZA%3D%3D&utm_source=qr"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div>


        </div>
    </footer>

    <div class="login-overlay" id="loginOverlay">
        <div class="login-form-container">
            <div class="login-form-box">
                <form class="login-form">
                    <h2>Inicio de Sesión</h2>
                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Ingresar</button>
                    <div class="additional-links">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                        <a href="#">Registrarse</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Muestra el formulario de inicio de sesión
        function showLogin() {
            document.getElementById('loginOverlay').style.display = 'flex';
        }

        // Cierra el formulario de inicio de sesión
        function closeLogin() {
            document.getElementById('loginOverlay').style.display = 'none';
        }

        // Cierra el formulario de inicio de sesión al hacer clic fuera de él
        window.onclick = function(event) {
            const overlay = document.getElementById('loginOverlay');
            if (event.target == overlay) {
                closeLogin();
            }
        }
    </script>
</body>
</html>
