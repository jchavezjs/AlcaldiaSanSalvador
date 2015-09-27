<!--Aqui validamos si ya hay una session de usuario activa-->
<?php
  session_start();
  include 'procesos/conexion.php';
  if (isset($_SESSION['usuario'])){
    echo '<script> window.location="index.php";</script>';
  }
?>
<!--Inciamos a modelar nuestro login-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Alcaldía de San Salvador</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
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

	<!--Estructura de login-->
	<div class="container">
            <div class="col-md-4"></div><!-- Para centrar-->
            <div class="col-md-4" id="login"><!--Recuadro de login-->
                <form class="form-signin" method="post" action="procesos/validar.php">
                    <div class="text-center">
                        <img id="avatar" src="images/defaultUser.png" alt="avatar">
                    </div>
                    <!--Mensaje de acceso denegado-->
                    <?php 
                    	if(isset($_GET['a'])){
                    		echo "<div class='text-center'><p class='blanco'>Usuario y/o contraseña incorrectas</p></div>";
                    	}
                    ?>
                    <input type="text" class="form-control" placeholder="Usuario" name="txtUsuario" autocomplete="off" required>
                    <input type="password" class="form-control" placeholder="Contraseña" name="txtPass" autocomplete="off" required>
                    <div id="passid">
                    	<a href="#" >Haz olvidado tu contraseña</a>
                    </div>
                    <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
                    <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">Registrarse</button>
					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
					    	<div class="modal-header">
        						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        						<h4 class="modal-title" id="exampleModalLabel">Registro de usuarios</h4>
      						</div>
      						<form method="post" onSubmit="return validar()" action="registrarUsuario.php">
      							<div class="modal-body">
          							<div class="form-group">
            							<label for="recipient-name" class="control-label">Nombres:</label>
            							<input name="txtNombre"type="text" class="form-control" id="recipient-name">
          							</div>
						        	<div class="form-group">
						        		<label for="message-text" class="control-label">Apellidos: </label>
						            	<input name="txtApellido"class="form-control">
						          	</div>
						          	<div class="form-group">
						            	<label for="message-text" class="control-label">Correo:</label>
						            	<input name="txtCorreo" class="form-control">
						          	</div>
          							<div class="form-group">
            							<label for="message-text" class="control-label">Contraseña:</label>
            							<input name="txtPass1" type="password" class="form-control" >
          							</div>
						          	<div class="form-group">
						            	<label for="message-text" class="control-label">Repetir contraseña:</label>
						          	  	<input name="txtPass2" type="password" class="form-control" >
						          	</div>
						          	<div class="form-group">
						            	<label for="message-text" class="control-label">Fotografia:</label>
						              	<input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
						              	<button class="btn btn-default" type="reset">Reset</button>
						          	</div>
      							</div>
	      						<div class="modal-footer">
						        	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						        	<button type="submit" id="btnValidar" class="btn btn-primary">Registrarse</button>
	      						</div>
      						</form>
					    </div>
					  </div>
					</div>
                </form>
            </div>
        <div class="col-md-4"></div>
    </div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function validar(){
		    var pass1 = document.getElementById("txtPass1").value;
		    var pass2 = document.getElementById("txtPass2").value;

		    if (pass1 == pass2)
		       alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo");
		   return true;
		    else
		       alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo");
		   return false;
		}
	</script> 
	<link rel="stylesheet" href="css/estilos.css">
</body>
</html>


