<!--Aqui validamos si ya hay una session de usuario activa-->
<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    echo '<script> window.location="login.php";</script>';
  }

  include 'procesos/conexion.php';
  $idServicio = $_GET['a'];
  $sqltotal= mysql_query("SELECT Valoracion FROM encuesta where idServicio='$idServicio'");
  $sqlexelente= mysql_query("SELECT Valoracion FROM encuesta where idServicio='$idServicio' and Valoracion='6'");
  $sqlmuybueno= mysql_query("SELECT Valoracion FROM encuesta where idServicio='$idServicio' and Valoracion='5'");
  $sqlbueno= mysql_query("SELECT Valoracion FROM encuesta where idServicio='$idServicio' and Valoracion='4'");
  $sqlregular= mysql_query("SELECT Valoracion FROM encuesta where idServicio='$idServicio' and Valoracion='3'");
  $sqlmalo= mysql_query("SELECT Valoracion FROM encuesta where idServicio='$idServicio' and Valoracion='2'");
  $sqlmuymalo= mysql_query("SELECT Valoracion FROM encuesta where idServicio='$idServicio' and Valoracion='1'");
  $nombreServicio = mysql_query("SELECT nombreServicio FROM servicio where idServicio='$idServicio'");
  $total = 0;
  $exelente = 0;
  $muybueno = 0;
  $bueno = 0;
  $regular = 0;
  $malo = 0;
  $muymalo = 0;
  while($rowtotal = mysql_fetch_array($sqltotal)){ $total = $total + $rowtotal['Valoracion']; }
  while($rowexelente = mysql_fetch_array($sqlexelente)){ $exelente = $exelente + $rowexelente['Valoracion']; }
  while($rowmuybueno = mysql_fetch_array($sqlmuybueno)){ $muybueno = $muybueno + $rowmuybueno['Valoracion']; }
  while($rowbueno = mysql_fetch_array($sqlbueno)){ $bueno = $bueno + $rowbueno['Valoracion']; }
  while($rowregular = mysql_fetch_array($sqlregular)){ $regular = $regular + $rowregular['Valoracion']; }
  while($rowmalo = mysql_fetch_array($sqlmalo)){ $malo = $malo + $rowmalo['Valoracion']; }
  while($rowmuymalo = mysql_fetch_array($sqlmuymalo)){ $muymalo = $muymalo + $rowmuymalo['Valoracion']; }
  $exelente = number_format((($exelente/$total) * 100), '2');
  $muybueno = number_format((($muybueno/$total) * 100), '2');
  $bueno = number_format((($bueno/$total) * 100), '2');
  $regular = number_format((($regular/$total) * 100), '2');
  $malo = number_format((($malo/$total) * 100), '2');
  $muymalo = number_format((($muymalo/$total) * 100), '2');

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
						<p class="main-heading"><?php echo $row['nombreServicio']; ?></p>
					</div>
				</div>
			</div>		
		</div>
	</header>
	<section id="ser">
		<form action=<?php echo "'procesos/evaluarEncuesta.php?a=".$_GET['a']."'"; ?> method="post">
			<div class="container">
				<div class="rows">
					<h4>Exelente - <?php echo $exelente."%"; ?></h4>
				</div>
				<div class="progress">
				  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow=<?php echo "'".$exelente."'"; ?> aria-valuemin="0" aria-valuemax="100" style=<?php echo "'width:".$exelente."%'"; ?>>
				    <span class="sr-only"><?php echo $exelente; ?> Complete</span>
				  </div>
				</div>
				<div class="rows">
					<h4>Muy Bueno - <?php echo $muybueno."%"; ?></h4>
				</div>
				<div class="progress">
				  <div class="progress-bar progress-bar- progress-bar-striped active" role="progressbar" aria-valuenow=<?php echo "'".$muybueno."'"; ?> aria-valuemin="0" aria-valuemax="100" style=<?php echo "'width:".$muybueno."%'"; ?>>
				    <span class="sr-only"><?php echo $muybueno; ?> Complete</span>
				  </div>
				</div>
				<div class="rows">
					<h4>Bueno - <?php echo $bueno."%"; ?></h4>
				</div>
				<div class="progress">
				  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow=<?php echo "'".$bueno."'"; ?> aria-valuemin="0" aria-valuemax="100" style=<?php echo "'width:".$bueno."%'"; ?>>
				    <span class="sr-only"><?php echo $bueno; ?> Complete</span>
				  </div>
				</div>
				<div class="rows">
					<h4>Regular - <?php echo $regular."%"; ?></h4>
				</div>
				<div class="progress">
				  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow=<?php echo "'".$regular."'"; ?> aria-valuemin="0" aria-valuemax="100" style=<?php echo "'width:".$regular."%'"; ?>>
				    <span class="sr-only"><?php echo $regular; ?> Complete</span>
				  </div>
				</div>
				<div class="rows">
					<h4>Malo - <?php echo $malo."%"; ?></h4>
				</div>
				<div class="progress">
				  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow=<?php echo "'".$malo."'"; ?> aria-valuemin="0" aria-valuemax="100" style=<?php echo "'width:".$malo."%'"; ?>>
				    <span class="sr-only"><?php echo $malo; ?> Complete</span>
				  </div>
				</div>
				<div class="rows">
					<h4>Muy Malo - <?php echo $muymalo."%"; ?></h4>
				</div>
				<div class="progress">
				  <div class="progress-bar progress-bar-default2 progress-bar-striped active" role="progressbar" aria-valuenow=<?php echo "'".$muymalo."'"; ?> aria-valuemin="0" aria-valuemax="100" style=<?php echo "'width:".$muymalo."%'"; ?>>
				    <span class="sr-only"><?php echo $muymalo; ?> Complete</span>
				  </div>
				</div>
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