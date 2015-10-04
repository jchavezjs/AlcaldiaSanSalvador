<!--Aqui validamos si ya hay una session de usuario activa-->
<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    echo '<script> window.location="login.php";</script>';
  }

  include 'procesos/conexion.php';
  $idServicio = $_GET['a'];
  $sql= mysql_query("SELECT * FROM preguntas where activo='si' and idServicio='$idServicio'");
  $nombreServicio = mysql_query("SELECT nombreServicio FROM servicio where idServicio='$idServicio'");
  $row = mysql_fetch_array($nombreServicio);
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
	<header class="intro" id = "intros">
		<div class="intro-body">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
						<p class="main-heading">Encuesta del departamento de <?php echo $row['nombreServicio']; ?></p>
					</div>
				</div>
			</div>		
		</div>
	</header>
	<section id="ser">
		<form action=<?php echo "'procesos/evaluarEncuesta.php?a=".$_GET['a']."'"; ?> method="post">
			<div class="container">
				<?php 
					while($row = mysql_fetch_array($sql)){
						echo "<h4>".$row['pregunta']."</h4><div class='rows'>
							<div class='col-md-2'><label class='radio-inline'><input type='radio' name='".$row['idPregunta']."' value='1'>Muy malo</label></div>
							<div class='col-md-2'><label class='radio-inline'><input type='radio' name='".$row['idPregunta']."' value='2'>Malo</label></div>
							<div class='col-md-2'><label class='radio-inline'><input type='radio' name='".$row['idPregunta']."' value='3'> Regular</label></div>
							<div class='col-md-2'><label class='radio-inline'><input type='radio' name='".$row['idPregunta']."' value='4'> Bueno</label></div>
							<div class='col-md-2'><label class='radio-inline'><input type='radio' name='".$row['idPregunta']."' value='5'> Muy bueno</label></div>
							<div class='col-md-2'><label class='radio-inline'><input type='radio' name='".$row['idPregunta']."' value='6'> Excelente</label></div>
						</div>";
					}
				 ?>
				 <div class="rows text-center">
				 	<button type="submit" name="cancelar" class="btn btn-lg btn-danger">Cancelar</button>
				 	<button type="submit" name="evaluar" class="btn btn-lg btn-primary">Evaluar</button>
				 </div>
			</div>
		</form>
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