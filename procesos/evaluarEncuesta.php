<?php
	session_start();
	ob_start();
	include 'conexion.php';
	$user= $_SESSION['usuario'];
  	$idServicio = $_GET['a'];
  	$sql= mysql_query("SELECT * FROM preguntas where activo='si' and idServicio='$idServicio'");
  	$idUsuario = mysql_query("SELECT idUsuario FROM usuarios where usuario='$user'");
  	$row2 = mysql_fetch_array($idUsuario);
  	$user= $row2['idUsuario'];
	?>
	
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Alcaldia de San Salvador</title>
	</head>
	<body>
	<?php
	if (isset($_POST['evaluar'])){
		while($row = mysql_fetch_array($sql)){
			$idPregunta=$row['idPregunta'];
			$valor = $_POST[$idPregunta];
			$log= mysql_query("INSERT INTO encuesta (idUsuario, idPregunta, Valoracion) values ('$user','$idPregunta','$valor')");
		}
	}
		echo '<script> window.location="../index.php";</script>';
	?>
	</body>
	</html>