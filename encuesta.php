<!--Aqui validamos si ya hay una session de usuario activa-->
<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    echo '<script> window.location="login.php";</script>';
  }
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
	
	<div class="container">
	<h4>1 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>2 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>3 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>4 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
<h4>5 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>

<h4>6 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>7- ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>8 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>9 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		 <h4>10 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>11 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
<h4>12 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno 
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>13 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>14 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
		<h4>15 - ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?</h4>
		<div class="rows">
			<div class="col-md-2">
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Malo
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Regular 
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Muy bueno
				</label>
			</div>
			<div class="col-md-2">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Excelente
				</label>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>