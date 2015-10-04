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
	<script type="text/javascript" src="js/livevalidation_standalone.compressed.js"></script>
  <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>
<body>
	<!--Nav-->
	<nav>  
    <div class="container">
      <div class="rows">
        <div class="col-md-6">
          <a href="#"><img id="logo" src="images/logo.jpg" alt="Logo"></a>
        </div>
      </div>
    </div>  
  </nav>
	<!--Estructura de login-->
	<div class="container">
            <div class="col-md-4"></div><!-- Para centrar-->
            <div class="col-md-4" id="login"><!--Recuadro de login-->
                <form class="form-signin" method="post" action="procesos/login.php">
                    <!--Imagen Login-->
                    <div class="text-center">
                        <img id="avatar" src="images/defaultUser.png" alt="avatar">
                    </div>
                    <!--Para enviar mensajes al ususario despues de haber evaluado en validar.php-->
                    <?php 
                      if(isset($_GET['a'])){
                        if ($_GET['a']=="1") {
                          echo "<div class='text-center rojo'><p>Usuario y/o contraseña incorrectas</p></div>";
                        }
                        elseif ($_GET['a']=="2") {
                          echo "<div class='text-center blanco'><p>Registro sastifactorio</p></div>";
                        } 
                        elseif ($_GET['a']=="3") {
                          echo "<div class='text-center rojo'><p>Usuario ya existe</p></div>";
                        }
                        elseif ($_GET['a']=="4") {
                          echo "<div class='text-center rojo'><p>Correo ya existe</p></div>";
                        }
                        elseif ($_GET['a']=="5") {
                          echo "<div class='text-center rojo'><p>Usuario ha sido desactivado</p></div>";
                        }
                      }
                    ?>
                    <!--txtUsuario-->
                    <input type="text" class="form-control" placeholder="Usuario" name="txtUsuario" autocomplete="off" id="txtUsuario" >
                    <input type="password" class="form-control" placeholder="Contraseña" name="txtPass" autocomplete="off" id="txtPass">
                    <!--Para evaluar si ha olvidado su contraseña-->
                    <div id="passid">
                    	<a href="#" >Haz olvidado tu contraseña</a>

                    </div>
                    
                    <!--Boton de Iniciar Sesion-->
                    <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
                </form>
                 <!--Form de registro-->
                <form method="post" action="procesos/registrarUsuario.php">
                    <!--Boton para registrarse e iniciar el model-->
                    <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">Registrarse</button>
          					<!--Inicio de modal-->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          					  <div class="modal-dialog modal-lg">
          					    <div class="modal-content">
          					    	<div class="modal-header">
                  					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  					<h4 class="modal-title" id="exampleModalLabel">Registro de usuarios</h4>
                					</div>
                					<div class="modal-body">
                  					<div class="form-group">
                  						<label class="control-label">Nombres:</label>
                  						<input name="txtNombre" type="text" class="form-control" id="txtNombre">
                						</div>
        						       	<div class="form-group">
        						       		<label class="control-label">Apellidos: </label>
        						        	<input name="txtApellido" class="form-control" id="txtApellido">
       						        	</div>
       						         	<div class="form-group">
       						           	<label class="control-label">Usuario:</label>
       					            	<input name="txtUserR" class="form-control" id="txtUserR">
       					          	</div>
                            <div class="form-group">
                              <label class="control-label">Correo:</label>
                              <input name="txtCorreo" class="form-control" id="txtCorreo">
                            </div>
               							<div class="form-group">
                 							<label class="control-label">Contraseña:</label>
                 							<input name="txtPass1" type="password" class="form-control" id="txtPass1">
               							</div>
     						          	<div class="form-group">
       						           	<label class="control-label">Repetir contraseña:</label>
     						        	  	<input name="txtPass2" type="password" class="form-control" id="txtPass2">
       						        	</div>
       						         	<div class="form-group">
       					            	<label class="control-label">Fotografia:</label>
     					              	<input type="file" name="foto"/>
       					          	</div>
                            <button class="btn btn-default" type="reset">Reset</button>
              						</div>
        	      				  <div class="modal-footer">
        						        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        						        <button name="registrar" type="submit" id="btnValidar" class="btn btn-primary">Registrarse</button>
        	      					</div>
          					    </div>
          					  </div>
          					</div>
                </form>
            </div>
        <div class="col-md-4"></div>
    </div>
	
  
	<script src="js/bootstrap.min.js"></script> 
	<link type="text/css" rel="stylesheet" href="css/estilos.css">


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