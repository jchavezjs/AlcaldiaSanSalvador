<!--Aqui validamos si ya hay una session de usuario activa-->
<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    echo '<script> window.location="login.php";</script>';
  }

  include 'procesos/conexion.php';
  $sql= mysql_query("SELECT * FROM servicio where activo='si'");
  $cantidad = mysql_num_rows($sql);
  $cantidad3 = $cantidad % 3;
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
						<p class="main-heading">Seleccione el servicio que quiere ver estadisticas:</p>
					</div>
				</div>
			</div>		
		</div>
	</header>
	<section id="ser">
		<div class="container">
			<?php 
				$r=0;
				$i=0;
				while($row = mysql_fetch_array($sql)){
					if ($cantidad3==0) {
						
						echo "<div class='col-md-4 serviciosdiv text-center'><h3>". $row['nombreServicio']."</h3><a href='graficar.php?a=".$row['idServicio']."' class='btn btn-success'>VER</a></div>";
						
					}
					elseif($cantidad3==2){
						
						if (($cantidad - $i)>2) {
							echo "<div class='col-md-4 serviciosdiv text-center'><h3>". $row['nombreServicio']."</h3><a href='graficar.php?a=".$row['idServicio']."' class='btn btn-success'>VER</a></div>";
						}
						else{
							echo "<div class='col-md-6 serviciosdiv text-center'><h3>". $row['nombreServicio']."</h3><a href='graficar.php?a=".$row['idServicio']."' class='btn btn-success'>VER</a></div>";
						}
					
					}
					elseif($cantidad3==1){
						if (($cantidad - $i)>1) {
							
							echo "<div class='col-md-4 serviciosdiv text-center fluid'><h3>". $row['nombreServicio']."</h3><a href='graficar.php?a=".$row['idServicio']."' class='btn btn-success'>VER</a></div>";
						
						}
						else{
							echo "<div class='col-md-12 serviciosdiv text-center fluid'><h3>". $row['nombreServicio']."</h3><a href='graficar.php?a=".$row['idServicio']."' class='btn btn-success'>VER</a></div>";
						}
					}
					$i++;
				}
			 ?>
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