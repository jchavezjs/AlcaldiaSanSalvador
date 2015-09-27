<?php
	session_start();
	ob_start();
	?>
	
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Alcaldia de San Salvador</title>
	</head>
	<body>
	<?php
		include 'conexion.php';
			if (isset($_POST['login'])){
				$user= $_POST['txtUsuario'];
				$pw= $_POST['txtPass'];	
				$log= mysql_query("SELECT * FROM usuarios where usuario='$user' and clave='$pw'");
				if(mysql_num_rows($log)>0){
					$row = mysql_fetch_array($log);
					$_SESSION["usuario"] = $row['usuario'];	
					echo '<script> window.location="../index.php";</script>';
				}else{
					echo '<script> window.location="../login.php?a=1";</script>';
				}

			}
			elseif (isset($_POST['registrar'])) {
				$nombre= $_POST['txtNombre'];
		$apellido= $_POST['txtApellido'];
		$correo= $_POST['txtCorreo'];
		$pass= $_POST['txtPass1'];
		$ruta = "Ruta";
		$log= mysql_query("SELECT * FROM usuarios where correo='$correo'");
		if(mysql_num_rows($log)>0){
			echo '<script> window.location="../index.php?a=3";</script>';
		}else{
			$query= mysql_query("INSERT INTO usuarios (nombre, apellido, usuario, correo, clave, foto) values ('$nombre','$apellido','$nombre','$correo','$pass','$ruta')");
			echo '<script> window.location="../login.php?a=2";</script>';
		}
			}

	?>
	</body>
	</html>