<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Alcaldia de San Salvador</title>
	</head>
	<body>
		<?php
		include 'conexion.php';			
			if (isset($_POST['registrar'])) {
				$nombre= $_POST['txtNombre'];
				$apellido= $_POST['txtApellido'];
				$usuario= $_POST['txtUserR'];
				$correo= $_POST['txtCorreo'];
				$pass= $_POST['txtPass1'];
				$ruta = "images/".$usuario.".jpg";
				$valUsuario= mysql_query("SELECT * FROM usuarios where usuario='$usuario'");
				$valCorreo= mysql_query("SELECT * FROM usuarios where correo='$correo'");
				if(mysql_num_rows($valUsuario)>0){
					echo '<script> window.location="../login.php?a=3";</script>';
				}elseif(mysql_num_rows($valCorreo)>0){
					echo '<script> window.location="../login.php?a=4";</script>';
				}else{
					//$query= mysql_query("INSERT INTO usuarios (nombre, apellido, usuario, correo, clave, foto) values ('$nombre','$apellido','$usuario','$correo','$pass','$ruta')");
					//primero se especifica la ruta con una variable
					$carpeta = "../images/";
					//Abrimos el directorio con el comnado OPENDIR, y le decimos dentro donde esta especificada la ruta.
					opendir($carpeta);
					//creamos una variable destico que me va almacenar el nombre.
					$destino = $carpeta.$_FILES['foto']['name'];
					copy($_FILES['foto']['tmp_name'] , $destino);
					echo "Archivo subido exitosamente!!";

					//le cambiamos el nombre de la imagen por medio de la variable xD ...
					$nombre = $carpeta.$usuario.".jpg";
					//cambiamos el nombre de la imagen por la ruta anterios y la tura nueva.
					echo $destino;
					rename($destino, $gio);
					//echo '<script> window.location="../login.php?a=2";</script>';
				}
			}
		 ?>