<?php
 session_start();
 ob_start();
 session_destroy();
 echo '<script> window.location="../login.php";</script>';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Saliendo...</title>
</head>
<body>
	<script language="javascript">location.href="../login.php"</script>
</body>
</html>