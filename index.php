<!--Aqui validamos si ya hay una session de usuario activa-->
<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    echo '<script> window.location="login.php";</script>';
  }
?>
<!--Inciamos a modelar nuestro login-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alcaldía de San Salvador</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>


<body id="index">
	<!--Header-->
	<nav>	
		<div class="container header">
			<div class="rows">
				<div class="col-md-6">
					<a href="#"><img id="logo" src="images/logo.jpg" alt="Logo"></a>
				</div>
			</div>
		</div>	
	</nav>

	<!--Estructura del index-->
	<header class="intro">
		<div class="intro-body">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
						<p class="main-heading">Alcaldia de <br>¡San Salvador!</p>
						<p class="sub-heading">Bienvenido a nuestro sistema de evaluacion a nuestros servicios.</p>
					</div>
				</div>
			</div>		
		</div>
	</header>
	<section>
		<div class="container text-center">
			<div class="rows">
				<h1 class="titulo"><u>Selecciona una opcion:</u></h1>
			</div>
		</div>
		<div class="rows cont">
			<h3 class="container text-center"><small>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam et dolores voluptatem porro tempore temporibus ducimus ipsam, placeat amet, suscipit. Excepturi, dolore! Beatae rem laudantium fugit quibusdam natus veritatis.</h3>
		</div>
	</section>
	<section  class="text-center">
			<div class="rows">
				<a href="#">
					<div id="op1"class="col-md-4 opc">
						<img src="images/perfil.png" alt="" class="img-op">
						<h3>Perfil</h3>
					</div>
				</a>
				<a href="#">
					<div id="op2"class="col-md-4 opc">
						<img src="images/encuesta.png" alt="" class="img-op">
						<h3>Encuestas</h3>
					</div>
				</a>
				<a href="#">
					<div id="op3"class="col-md-4 opc">
						<img src="images/estadistica.png" alt="" class="img-op">
						<h3>Estadisticas</h3>
					</div>
				</a>
			</div>
	</section>
  	<section>
		<div class="container text-center">
			<div class="rows">
				<h1 class="titulo"><u>Encuentranos:</u></h1>
			</div>
		</div>
		<div class="rows">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10651.504334949916!2d-89.19003975283404!3d13.704876037106061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xc19525e8959f8339!2sAlcaldia+de+San+Salvador!5e0!3m2!1ses!2ssv!4v1443467818698" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>