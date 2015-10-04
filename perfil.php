<!--Aqui validamos si ya hay una session de usuario activa-->
<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    echo '<script> window.location="login.php";</script>';
  }

  include 'procesos/conexion.php';
  $user = $_SESSION['usuario'];
  $sql= mysql_query("SELECT * FROM usuarios where usuario='$user'");
  $row = mysql_fetch_array($sql);
  $nombre = $row['nombre'];
  $apellido = $row['apellido'];
  $correo = $row['correo'];
  $clave = $row['clave'];
  $foto = $row['foto'];
?>
<!--Inciamos a modelar nuestro login-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Alcaldía de San Salvador</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script type="text/javascript" src="js/livevalidation_standalone.compressed.js"></script>
  <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
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
	<header id="plac">
		<div class="rows text-center">
			<h1><u>Perfil</u></h1>
		</div>
	</header>
	<section>
		<div class="container">
         	<div>
         		<form action="procesos/modificarU.php" method="post">
            <?php 
                      if(isset($_GET['a'])){
                        if ($_GET['a']=="1") {
                          echo "<div class='text-center rojo'><p>Usuario ya existe</p></div>";
                        }
                        elseif ($_GET['a']=="2") {
                          echo "<div class='text-center rojo'><p>Correo ya existe</p></div>";
                        } 
                        
                      }
                    ?>
         			<div class="form-group">
                  		<label class="control-label">Nombres:</label>
                  		<input name="txtNombre" type="text" class="form-control" id="txtNombre" value=<?php echo "'".$nombre."'"; ?>>
                	</div>
        			<div class="form-group">
        				<label class="control-label">Apellidos: </label>
        				<input name="txtApellido" class="form-control" id="txtApellido" value=<?php echo "'".$apellido."'"; ?>>
       				</div>
       				<div class="form-group">
       					<label class="control-label">Usuario:</label>
       					<input name="txtUserR" class="form-control" id="txtUserR" value=<?php echo "'".$user."'"; ?>>
       				</div>
       				<div class="form-group">
                        <label class="control-label">Correo:</label>
                        <input name="txtCorreo" class="form-control" id="txtCorreo" value=<?php echo "'".$correo."'"; ?>>
                    </div>
               		<div class="form-group">
                 		<label class="control-label">Contraseña:</label>
       					<input name="txtPass1" type="password" class="form-control" id="txtPass1" value=<?php echo "'".$clave."'"; ?>>
       				</div>
     				<div class="form-group">
       				   	<label class="control-label">Repetir contraseña:</label>
     					<input name="txtPass2" type="password" class="form-control" id="txtPass2" value=<?php echo "'".$clave."'"; ?>>
       				</div>
       				<div>
                    	<img src=<?php 
							if ($_SESSION['ruta'] == ""){
								echo "'images/defaultUser.png'";
							}else{
								echo "'". $_SESSION['ruta']."'";
						}?> alt="Perfil" id="imgreg">
                    </div>
       				<div class="form-group">
       					<label class="control-label">Fotografia:</label>
     					<input type="file" name="foto"/>
       				</div>
                    <button class="btn btn-default" type="reset">Reset</button>
                    
        	      	<div>
        				<button name="cancelar" type="submit" id="btnValidar" class="btn btn-danger">Cancelar</button>
        				<button name="modificar" type="submit" id="btnValidar" class="btn btn-primary">Modificar</button>
        	      	</div>
          					    
         		</form>
         	</div>
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
<script>
  $(document).ready(function(){

    //*****Validacion para login******
    //Para Usuario
    var txtUsuario = new LiveValidation('txtUsuario', { validMessage: "  " });
    txtUsuario.add( Validate.Presence, { failureMessage: "Por favor, ingrese un usuario." } );

    //Para Contraseña
    var txtPass = new LiveValidation('txtPass', { validMessage: "  " });
    txtPass.add( Validate.Presence, { failureMessage: "Por favor, ingrese contraseña." } );

    //*****Validacion para registro de usuarios******
    //Para Nombre
    var txtNombre = new LiveValidation('txtNombre', { validMessage: "  " });
    txtNombre.add( Validate.Presence, { failureMessage: "Por favor, ingrese nombre." } );
    txtNombre.add( Validate.Length, { maximum: 50, tooLongMessage:"El nombre debe contener un máximo de 50 caracteres." });

    //Para Apellidos
    var txtApellido = new LiveValidation('txtApellido', { validMessage: "  " });
    txtApellido.add( Validate.Presence, { failureMessage: "Por favor, ingrese apellido." } );
    txtApellido.add( Validate.Length, { maximum: 50, tooLongMessage:"El apellido debe contener un máximo de 50 caracteres." });
    
    //Para Usuario
    var txtUserR = new LiveValidation('txtUserR', { validMessage: " " });
    txtUserR.add( Validate.Presence, { failureMessage: "Por favor, ingrese usuario." } );
    txtUserR.add( Validate.Length, { maximum: 15, tooLongMessage:"El usuario debe contener un máximo de 15 caracteres." });

    //Para Correo
    var txtCorreo = new LiveValidation('txtCorreo', { validMessage: "  " });
    txtCorreo.add( Validate.Presence, { failureMessage: "Por favor, ingrese correo." } );
    txtCorreo.add( Validate.Length, { maximum: 50, tooLongMessage:"El correo debe contener un máximo de 50 caracteres." } );
    txtCorreo.add( Validate.Email, {failureMessage:"Escriba un formato de correo correcto"});

    //Para Contraseña
    var txtPass1 = new LiveValidation('txtPass1', { validMessage: "  " });
    txtPass1.add( Validate.Presence, { failureMessage: "Por favor, ingrese contraseña." } );
    txtPass1.add( Validate.Length, { maximum: 15, tooLongMessage:"La contraseña debe contener un máximo de 15 caracteres." } );
    txtPass1.add( Validate.Length, { minimum: 8, tooShortMessage:"La contraseña debe contener un minimo de 8 caracteres." } );
    txtPass1.add( Validate.Format, { pattern: /^(?=.*[A-Z])(?=.*[!@#$&*-_¡+?¿()])(?=.*[0-9])/, failureMessage: "Use un formato correcto para la contraseña. Debe contener al menos una mayuscula y un numero" } );

    //Para confirmacion contraseña
    var txtPass2 = new LiveValidation('txtPass2', { validMessage: "  " });
    txtPass2.add( Validate.Presence, { failureMessage: "Por favor, ingrese la confirmacion de la contraseña." } );
    txtPass2.add( Validate.Confirmation, { match: 'txtPass1', failureMessage: "Las contraseñas no coninciden."} );
  });
</script>