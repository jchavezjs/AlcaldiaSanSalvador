<?php
	function subirFoto($user){
	$carpeta = "../images/";
	//Abrimos el directorio con el comnado OPENDIR, y le decimos dentro donde esta especificada la ruta.
	opendir($carpeta);
	//Creamos una variable destino que me va almacenar el nombre.
	$destino = $carpeta.$_FILES['foto']['name'];
	copy($_FILES['foto']['tmp_name'] , $destino);
	echo "Archivo subido exitosamente!!";
	//le cambiamos el nombre de la imagen por medio de la variable xD ...
	$ruta = "../images/".$user.".jpg";
	//cambiamos el nombre de la imagen por la ruta anterios y la tura nueva.
	rename("../".$destino, $ruta);
	return "exito";
	}
	
?>
