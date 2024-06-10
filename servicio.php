<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio al Cliente - Big Bos Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #000;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #000;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .container {
            flex-grow: 1;
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        h1, h2 {
            color: #000;
            text-align: center;
        }
        h1 {
            margin-bottom: 30px;
            color: #ffffff;

        }
        .faq-section {
            margin-bottom: 40px;
        }
        .faq-question {
            background-color: #000;
            color: #fff;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 5px;
        }
        .faq-question:hover {
            background-color: #ff0000;
        }
        .faq-answer {
            display: none;
            padding: 15px;
            border: 1px solid #000;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .contact-section {
            margin-bottom: 40px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 5px;
        }
        .form-group textarea {
            resize: vertical;
            height: 150px;
        }
        .btn-submit {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #ff0000;
        }
        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }
        footer a {
            color: #ffd700; /* Color dorado */
            text-decoration: none;
        }
        footer a:hover {
            color: #fff;
        }
        .logo {
            color: #fff;
            font-size: 2rem;
        }
        .logo img {
            max-width: 200px;
            height: auto;
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
    <div class="container">
        <h2>Servicio al Cliente</h2>
        <br>
        <div class="faq-section">
            <div class="faq-question">
                <h3>¿Cómo puedo realizar un pedido?</h3>
            </div>
            <div class="faq-answer">
                <p>Para realizar un pedido, simplemente navega por nuestra tienda en línea, añade los productos a tu carrito y sigue el proceso de pago.</p>
            </div>
            <div class="faq-question">
                <h3>¿Cuáles son los métodos de pago aceptados?</h3>
            </div>
            <div class="faq-answer">
                <p>Aceptamos tarjetas de crédito, débito y pagos a través de PayPal.</p>
            </div>
            <div class="faq-question">
                <h3>¿Hacen envíos internacionales?</h3>
            </div>
            <div class="faq-answer">
                <p>Sí, realizamos envíos a muchos países alrededor del mundo. Los costos y tiempos de envío pueden variar según la ubicación.</p>
            </div>
        </div>
        <div class="contact-section">
            <h2>Contacto</h2>
            <form action="mailto:tu_correo@example.com" method="post" enctype="text/plain">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Enviar</button>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy; Big Bos Boutique. Derechos reservados.</p>
    </footer>
    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', event => {
                const answer = item.nextElementSibling;
                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                } else {
                    answer.style.display = 'block';
                }
            });
        });
    </script>
</body>
</html>
