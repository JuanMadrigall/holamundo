<?php
include_once 'conexionPDO.php';
session_start();
if(!isset($_SESSION['rol']))
	{
		header('location: loginphp.php');
	}
else
	{
		if($_SESSION['rol'] !=4)
			{
				header('location: loginphp.php');
			}
	}
?>
<html><head></head>
<body>
hola soy invitado
	<form action="loginphp.php" method="POST">
		<input type="submit" name="cerrar_sesion" value="CERRAR SESION">
	</form>
</body>
</html>