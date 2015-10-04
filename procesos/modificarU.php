<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Alcaldia de San Salvador</title>
	</head>
	<body>
		<?php
		session_start();
		$sesion = $_SESSION['usuario'];
		include 'conexion.php';			
			if (isset($_POST['modificar'])) {
				$nombre= $_POST['txtNombre'];
				$apellido= $_POST['txtApellido'];
				$usuario= $_POST['txtUserR'];
				$correo= $_POST['txtCorreo'];
				$pass= $_POST['txtPass1'];
				$valUsuario= mysql_query("SELECT * FROM usuarios where usuario='$usuario' and usuario<>'$sesion'");
				$valCorreo= mysql_query("SELECT * FROM usuarios where correo='$correo' and usuario<>'$sesion'");
				if(mysql_num_rows($valUsuario)>0){
					echo '<script> window.location="../perfil.php?a=1";</script>';
				}elseif(mysql_num_rows($valCorreo)>0){
					echo '<script> window.location="../perfil.php?a=2";</script>';
				}else{
					$query= mysql_query("UPDATE usuarios SET nombre = '$nombre' , apellido = '$apellido' , usuario ='$usuario' , correo = '$correo', clave = '$pass' WHERE usuario ='$sesion'");
					$_SESSION['usuario'] = $usuario;
					echo '<script> window.location="../index.php";</script>';

				}
			}
			else{
				echo '<script> window.location="../index.php";</script>';
			}
		 ?>