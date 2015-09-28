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


<body>
	<!--Header-->
	<header>	
		<div class="container header">
			<div class="rows">
				<div class="col-md-6">
					<a href="#"><img id="logo" src="images/logo.jpg" alt="Logo"></a>
				</div>
			</div>
		</div>	
	</header>

	<!--Estructura del index-->
	<div class="col-md-12"></div>
		<div class="container">
			<div class="rows">
				<a>
					<div class="col-md-4 ver" id="">
						<h1 class="cuadro">Perfil</h1>
					</div>
				</a>
				<a>
					<div class="col-md-4 ver" id="">
						<h1 class="cuadro">Encuestas</h1>
					</div>
				</a>
				<a>
					<div class="col-md-4 ver" id="">
						<h1 class="cuadro">Estadisticas</h1>
					</div>
				</a>
			</div>
		</div>
  

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>