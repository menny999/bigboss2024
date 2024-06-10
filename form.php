<!doctype html>
<html lang="en">
<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/styles.css">
<style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
body{
	font-family: 'Poppins', sans-serif;
	font-weight: 300;
	line-height: 1.7;
	color: #ffffff;
	background-color: #c9c8c8;
}
a:hover {
	text-decoration: none;
}
.link {
  color: #ffffff;
}
.link:hover {
  color: #ffffff;
}
p {
  font-weight: 500;
  font-size: 14px;
}
h4 {
  font-weight: 600;
  color: #FFFFFF;

}
h6 span{
  padding: 0 20px;
  font-weight: 700;
  color: #000000;

}
.section{
  position: relative;
  width: 100%;
  display: block;
}
.full-height{
  min-height: 100vh;
}
[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
display: none;
}
.checkbox:checked + label,
.checkbox:not(:checked) + label{
  position: relative;
  display: block;
  text-align: center;
  width: 60px;
  height: 20px;
  border-radius: 40px;
  padding: 0;
  margin: 50px auto;
  cursor: pointer;
  background-color: #ff0000c0;
}
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before{
  position: absolute;
  display: block;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  color: #ff0000;
  background-color: #020305;
  font-family: 'unicons';
  content: '\eb4f';
  z-index: 20;
  top: -10px;
  left: -10px;
  line-height: 36px;
  text-align: center;
  font-size: 24px;
  transition: all 0.3s ease;
}
.checkbox:checked + label:before {
  transform: translateX(44px) rotate(-270deg);
}
.card-3d-wrap {
  position: relative;
  width: 500px;
  max-width: 100%;
  height: 500px;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  perspective: 800px;
  margin-top: 60px;
}
.card-3d-wrapper {
  width: 100%;
  height: 100%;
  position:absolute;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  transition: all 600ms ease-out; 
}
.card-front, .card-back {
  width: 100%;
  height: 100%;
  background-color: #000000;
  background-image: url('/img/pattern_japanese-pattern-2_1_2_0-0_0_1__ffffff00_000000.png');
  position: absolute;
  border-radius: 6px;
  -webkit-transform-style: preserve-3d;
}
.card-back {
  transform: rotateY(180deg);
}
.checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
  transform: rotateY(180deg);
}
.center-wrap{
  position: absolute;
  width: 100%;
  padding: 0 35px;
  top: 50%;
  left: 0;
  transform: translate3d(0, -50%, 35px) perspective(100px);
  z-index: 20;
  display: block;
}
.form-group{ 
  position: relative;
  display: block;
    margin: 0;
    padding: 0;
}
.form-style {
  padding: 13px 20px;
  padding-left: 55px;
  height: 48px;
  width: 100%;
  font-weight: 500;
  border-radius: 4px;
  font-size: 14px;
  line-height: 22px;
  letter-spacing: 0.5px;
  outline: none;
  color: #ffffff;
  background-color: #000000;
  border: none;
  -webkit-transition: all 200ms linear;
  transition: all 200ms linear;
  box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.303);
}
.form-style:focus,
.form-style:active {
  border: none;
  outline: none;
  box-shadow: 0 4px 10px 0 rgb(21, 21, 21);
}
.input-icon {
  position: absolute;
  top: 0;
  left: 18px;
  height: 48px;
  font-size: 24px;
  line-height: 48px;
  text-align: left;
  -webkit-transition: all 200ms linear;
   transition: all 200ms linear;
}
.btn{  
  border-radius: 4px;
  height: 44px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  -webkit-transition : all 200ms linear;
  transition: all 200ms linear;
  padding: 0 30px;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  align-items: center;
  background-color: #0022ff;
  color: #000000;
}
.btn:hover{  
  background-color: #ffffff;
  color: #000000;
  box-shadow: 0 8px 24px 0 rgb(0, 17, 72);
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
            margin: 20px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 12px;
            overflow: hidden;
            width: 250px;
            position: relative;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
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
        <div class="logo"></div>
        <ul class="main-menu clearfix">
            <li><a href="index.php">Inicio</a></li>
            <li>
      <div class="dropdown clearfix">
    </li>
    <li>
      <a href="form.php" class="input-group">Iniciar Sesión</a>
    </li>
  </ul>
</menu>
    <main>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Iniciar Sesión</span><span>Registrar</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Iniciar Sesión</h4>
											<div class="form-group">
												<input type="email" class="form-style" placeholder="Correo">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Contraseña">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<a href="#" class="btn mt-4">Iniciar Sesión</a>
                      <p class="mb-0 mt-4 text-center"><a href="#" class="link">¿Olvidaste tu contraseña?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3">Registrar</h4>
											<div class="form-group">
												<input type="text" class="form-style" placeholder="Nombre Completo">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="tel" class="form-style" placeholder="Numero de Telefono">
												<i class="input-icon uil uil-phone"></i>
											</div>	
                      <div class="form-group mt-2">
												<input type="email" class="form-style" placeholder="Correo">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Contraseña">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
                      
											<a href="#" class="btn mt-4">Registrarme</a>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div> 
</form>
</body>
</html>
