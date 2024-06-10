<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ubicación - Jimmy Hats</title>
<link rel="icon" href="IMG/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
   /* ESTILOS EN GENERAL */
   body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    header {
        background-color: #000000;
        color: #ffffff;
        text-align: center;
        padding: 20px 0;
    }
    main {
        padding: 20px;
    }
    footer {
        background-color: #000000;
        color: #ffffff;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    /* ESTILOS PARA LA UBICACION */
    .ubicacion {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        margin: 20px 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .mapa {
        width: 100%;
        height: 400px;
        margin-top: 20px;
        border: none;
        border-radius: 10px;
    }
    .boton-regresar {
        background-color: #ffffff;
        color: #ff0000;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        border: 2px solid #ff0000;
        cursor: pointer;
        display: block;
        margin: 20px auto;
        width: 200px;
        text-align: center;
    }
    .boton-regresar:hover {
        background-color: #ff0000;
        color: #ffffff;
    }
    .horario-header {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        margin: 10px 0;
    }
    .horario-header:hover {
        color: #770000;
    }
    .horario-header:after {
        content: '\25BC'; /* Flecha hacia abajo */
        margin-left: 10px;
    }
    .horario-content {
        display: none;
        margin-top: 10px;
    }
</style>
<script>
    $(document).ready(function(){
        $(".horario-header").click(function(){
            $(this).next(".horario-content").slideToggle();
            $(this).toggleClass("open");
            if ($(this).hasClass("open")) {
                $(this).find("::after").css("content", "'\\25B2'"); // Flecha hacia arriba
            } else {
                $(this).find("::after").css("content", "'\\25BC'"); // Flecha hacia abajo
            }
        });
    });
</script>
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


<main>
    <section class="ubicacion">
    <h2>Plaza Cuatro Ríos</h2>
        <p>Dirección: Blvrd Enrique Sánchez Alonso 2079, Desarrollo Urbano Tres Ríos, 80020 Culiacán Rosales, Sin.</p>
        <p>Teléfono: 6673197747</p>
        <div class="horario-header">
        Horario: 
        </div>
        <div class="horario-content">
            <ul class="list-group">
                <li class="list-group-item">Lunes: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Martes: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Miércoles: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Jueves: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Viernes: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Sábado: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Domingo: 11:00 AM - 8:00 PM.</li>
            </ul>
        </div>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.2034850123064!2d-107.40562621996747!3d24.822713921109653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcdbbc39ddf7a1%3A0x48230631604cf1c9!2sCuatro%20R%C3%ADos!5e0!3m2!1ses!2smx!4v1715912437326!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>

    <section class="ubicacion">
    <h2>Plaza Ventura</h2>
        <p>Dirección: Plaza Ventura, Blvrd Alfonso Zaragoza Maytorena 1364, Desarrollo Urbano Tres Ríos, 80020 Culiacán Rosales, Sin.</p>
        <p>Teléfono: 5551234567</p>
        <div class="horario-header">
            Horario: 
        </div>
        <div class="horario-content">
            <ul class="list-group">
                 <li class="list-group-item">Lunes: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Martes: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Miércoles: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Jueves: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Viernes: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Sábado: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Domingo: 11:00 AM - 8:00 PM.</li>
            </ul>
        </div>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.468281039723!2d-107.40861039999999!3d24.813654499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcda755360facb%3A0x9025b99bfd57e140!2sPlaza%20Ventura!5e0!3m2!1ses!2smx!4v1715912713276!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
    
    <section class="ubicacion">
    <h2>Plaza Bombay</h2>
        <p>Dirección: Blvrd Enrique Sánchez Alonso 1989, Desarrollo Urbano Tres Ríos, 80020 Culiacán Rosales, Sin.</p>
        <p>Teléfono: 8181234567</p>
        <div class="horario-header">
        Horario: 
        </div>
        <div class="horario-content">
            <ul class="list-group">
            <li class="list-group-item">Lunes: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Martes: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Miércoles: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Jueves: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Viernes: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Sábado: 11:00 AM - 8:00 PM.</li>
                <li class="list-group-item">Domingo: 11:00 AM - 8:00 PM.</li>
            </ul>
        </div>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.062680582455!2d-107.40276962484909!3d24.827529977950814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcda11b6f09b2f%3A0x4773466ff47d6ff1!2sBombay%20Plazza!5e0!3m2!1ses!2smx!4v1715912759851!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
</main>

<button class="boton-regresar" onclick="goBack()">Volver</button> 

<script>
function goBack() {
    window.history.back();
}
</script>

<header>
    <p>© Big Boss. Derechos reservados.</p>
</header>

</body>
</html>
