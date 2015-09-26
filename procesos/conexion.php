<?php	
$id_conexion= mysql_connect("localhost", "root", "") or die("no se encontro el servidor");
$db = mysql_select_db('alcaldia',$id_conexion) or die("no se encontro el servidor");
?>