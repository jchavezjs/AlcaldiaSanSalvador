<?php
 session_start();
 ob_start();
 session_destroy();
 echo 'Cerraste sesion';
 echo '<script> window.location="../login.php";</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saliendo...</title>
</head>
<body>
	<script language="javascript">location.href="../login.php"</script>
</body>
</html>