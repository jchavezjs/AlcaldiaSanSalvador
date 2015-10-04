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
				<div class="col-md-2 col-sm-2 col-xs-2">
					<div class="dropdown">
						<img id="avatar"src=<?php 
											if ($_SESSION['ruta'] == ""){
												echo "'images/defaultUser.png'";
											}else{
												echo "'". $_SESSION['ruta']."'";
											}?>
						 alt="Avatar" class="img-circle ropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					  	<ul id="avataropc" class="dropdown-menu" aria-labelledby="dropdownMenu1">
					  		<li><a href="#"><?php echo $_SESSION['usuario']; ?></a></li>
					    	<li><a href="perfil.php">Perfil</a></li>
					    	<li><a href="procesos/logout.php">Cerrar Sesion</a></li>
					  	</ul>
					</div>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-10 text-right">
					<a href="index.php"><img id="logo" src="images/logo.jpg" alt="Logo"></a>
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
				<h1 class="titulo"><u>Seleccione una opcion:</u></h1>
			</div>
		</div>
		<div class="rows cont">
			<h3 class="container text-center"><small>Con este proyecto hemos querido ayudar a las personas a evaluar los servicios de una entidad publica como lo es la Alcaldia de San Salvador, y poder mostrar las graficas de como se desempeña cada area de ellos.</h3>
		</div>
	</section>
	<section  class="text-center">
			<div class="rows">
				<a href="perfil.php">
					<div id="op1"class="col-md-4 opc">
						<img src="images/perfil.png" alt="" class="img-op">
						<h3>Perfil</h3>
					</div>
				</a>
				<a href="servicios.php">
					<div id="op2"class="col-md-4 opc">
						<img src="images/encuesta.png" alt="" class="img-op">
						<h3>Encuestas</h3>
					</div>
				</a>
				<a href="estadisticas.php">
					<div id="op3"class="col-md-4 opc">
						<img src="images/estadistica.png" alt="" class="img-op">
						<h3>Estadisticas</h3>
					</div>
				</a>
				<?php 
					if (isset($_SESSION['usuario'])){
						if($_SESSION['privilegio']=="admin"){
							echo "<a href='adminE.php''><div id='op4'class='col-md-6 opc'><img src='images/administracionE.png' alt='Icon' class='img-op'><h3>Administracion Encuestas</h3></div></a>";
							echo "<a href='adminU.php''><div id='op5'class='col-md-6 opc'><img src='images/administracionU.png' alt='Icon' class='img-op'><h3>Administracion Usuarios</h3></div></a>";
						}
					}
				?>
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
	<section>
		<div class="container text-center">
			<div class="rows">
				<h1 class="titulo"><u>Integrantes:</u></h1>
			</div>
		</div>
		<div class="container">
			<div class="rows">
				<div class="col-md-6 text-center">
					<img class="img-circle integrantes" src="images/jonathanI.jpg" alt="Jonathan">
					<h2>Jonathan Alexander <br> <strong>Romero Jimenez</strong></h2>
					<h4>Diseñador, Frontend, Backend y director de proyecto</h4>
				</div>
				<div class="col-md-6 text-center">
					<img class="img-circle integrantes" src="images/jaimeI.jpg" alt="Jaime">
					<h2>Jaime Roberto <br> <strong>Chávez Lorenzana</strong></h2>
					<h4>Fontend y Backend</h4>
				</div>
			</div>
			<div class="rows">
				<div class="col-md-6 text-center">
					<img class="img-circle integrantes" src="images/luisI.jpg" alt="Jonathan">
					<h2>José Luis<br> <strong>Herrera Torres</strong></h2>
					<h4>Administrador de base de datos y Fronend</h4>
				</div>
				<div class="col-md-6 text-center">
					<img class="img-circle integrantes" src="images/jelmyI.jpg" alt="Jaime">
					<h2>Jelmy Josué<br> <strong>Hernández Melgar</strong></h2>
					<h4>Fontend y Backend</h4>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="rows">
				<div class="col-md-4">
					<h3>Proyecto Social de Programacion IV</h3>
					<p>Con este proyecto hemos querido ayudar a las personas a evaluar los servicios de una entidad publica como lo es la Alcaldia de San Salvador, y poder mostrar las graficas de como se desempeña cada area de ellos.</p>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h3>Nuestras redes sociales:</h3>
					<a href="https://www.facebook.com/AlcaldiaDeSanSalvador"><img class="socialn" src="images/facebook.png" alt="Facebook"></a>
					<a href="https://twitter.com/alcaldia_ss"><img class="socialn" src="images/twitter.png" alt="Twitter"></a>
					<a href="https://instagram.com/alcaldiadesansalvador/"><img class="socialn" src="images/instagram.png" alt="Instagram"></a>
				</div>
			</div>
			<div class="rows"><div class="col-md-12 text-center"><h6>Todos los derechos reservados 2015</h6></div></div>	
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>