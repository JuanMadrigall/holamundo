<?php
include_once 'conexionPDO.php';
session_start();
if (!isset($_SESSION['rol']))
	{
		header('location: loginphp.php');
		die(); exit();
	}
else
	{
		if($_SESSION['rol'] !=1)
			{
				header('location: loginphp.php');
				die(); exit();
			}
	}
?>
<html><head></head>
<body bgcolor="#DD5590">
<div align="center">
	<?php
		$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
		$usuario = $_SESSION['nomusuario'];
		$fotosesion = $_SESSION['foto'];	//echo $fotosesion;
	
			echo "<font face= impact size= 6> Bienvenid@ <br>Administrador  <br>".$usuario."</font><br>";
			
	?>
</div >
<table border="6" align="center">
	<tr  >
		<td>	
		<div align="center">
			<form method="POST" action="#">
				NOMBRE <input type="text"     name="usuario" required=""  placeholder="Ingrese Nombre" pattern="[a-z]{4,8}"><br>
				CLAVE  <input type="password" name="clave"   required="" placeholder="Ingrese Contraseña"><br>
				IDROL  <input type="number"   name="idrol"   required="" placeholder="Ingrese Rol" min="1" max="3"><br>
				EMAIL  <input type="email"    name="email"   required="" placeholder="Ingrese Email"><br>
				ENVIAR <input type="submit"   name="insertar" value="Insertar Datos">
				
			</form>
		</div>
		<?php
		//include_once 'conexionPDO.php';
		//session_start();
		if(isset($_POST['insertar']))
			{
			$usuario = $_POST['usuario'];
			$clave   = $_POST['clave'];
			$idrol   = $_POST['idrol'];
			$email   = $_POST['email'];

			$insertar = "INSERT INTO usuarios(nomusuario,clave,idrol,email) VALUES ('$usuario','$clave','$idrol','$email')";
			$ejecutar=mysqli_query($conexion,$insertar);
			if ($ejecutar)
				{
					//header("location: administrador.php");
					 echo "<script> window.open('administrador.php')  </script> ";
				}
			}
				unset($_POST['insertar']);//La función unset() destruye las variables especificadas.
		?>


		</td>
		<td>
			<?php
			echo "<div align='center'><img src='imagenes/$fotosesion ?>' width='200' height='160' ></div>";	
			?>
		</td>
	</tr>



</table>


<td><a href="administrador.php? editar= <?php echo $id; ?>">Editar</a></td>

<table border="3" align="center">
	<tr>	
			<th>ID</th>
			<th>NOMBRE</th>
			<th>PASSWORD</th>
			<th>IDROL</th>
			<th>EMAIL</th>
	 		<th>FOTO</th>
			<th>EDITAR</th>
			<th>BORRAR</th>
	</tr>
	<?php
$observar = "SELECT * FROM usuarios";
$ejecutar=mysqli_query($conexion,$observar);
	$contador = 0;
	while ($filas=mysqli_fetch_array($ejecutar)) 
	{
		$id =       $filas['id'];
		$usuario =  $filas['nomusuario'];
		$password = $filas['clave'];
		$idrol =    $filas['idrol'];
		$email =    $filas['email'];
		$fotografia=$filas['foto'];
		$contador++;
	?>
	<tr align="center">	
			<td><?php echo $id ?></td>
			<td><?php echo $usuario ?></td>
			<td><?php echo $password ?></td>
			<td><?php echo $idrol ?></td>
			<td><?php echo $email ?></td>
			<td><img src="imagenes/<?php echo $fotografia ?>" width="50" height="40" ></td>

			<td><a href="administrador.php? editar= <?php echo $id; ?>">Editar</a></td>
			<td><button style="background-color: orange"><a href="administrador.php? borrar= <?php echo $id; ?>">Borrar</a></button></td>
	</tr>
	<?php
	}
	?>
</table>
<?php
if(isset($_GET['editar']))
	{
	$editar_id = $_GET['editar'];
	$consulta = "SELECT * FROM usuarios WHERE id = '$editar_id'";
	$ejecutar=mysqli_query($conexion,$consulta);
	$filas=mysqli_fetch_array($ejecutar);
		$id         =$filas['id'];
		$usuario    =$filas['nomusuario'];
		$password   =$filas['clave'];
		$idrol      =$filas['idrol'];
		$email      =$filas['email'];
		$fotoeditor =$filas['foto'];

?>
<table border="6" align="center">
	<tr>
		<td>
<div align="center">
	<form method="POST" action="#" enctype="multipart/form-data">
		NOMBRE <input type="text"     name="usuario" value="<?php echo $usuario  ?>"> <br>
		CLAVE  <input type="password" name="clave"   value="<?php echo $password ?>"><br>
		IDROL  <input type="number"   name="idrol"   value="<?php echo $idrol    ?>"><br>
		EMAIL  <input type="email"    name="email"   value="<?php echo $email    ?>"><br>
		FOTO   <input type="text"     name="foto"    value="<?php echo $fotoeditor ?>"><br>
			   <input type="file" 	  name="imagenasubir" ><br>
			   <input type="submit"   name="actualizame" value="Actualizar Datos" style="cursor: pointer;"><br>
	</form>
</div>
		</td>
		<td>
			<?php
			echo "<div align='center'><img src='imagenes/$fotoeditor ?>' width='200' height='160' ></div>";	
			?>
		</td>
	</tr>
</table>
<?php
unset($_POST['editar']);
  }
?>
<?php
if(isset($_POST['actualizame']))
	{
	$actualizausuario = $_POST['usuario'];
	$actualizaclave   = $_POST['clave'];
	$actualizaidrol   = $_POST['idrol'];
	$actualizaemail   = $_POST['email'];
	$actualizafoto    = $_POST['foto'];

	$ruta = "	/".basename($_FILES['imagenasubir']['name']);
		if (move_uploaded_file($_FILES['imagenasubir']['tmp_name'],$ruta)) 
			{
			echo "<div align='center'><font face='impact' size='3'><b> 
			El archivo ".basename($_FILES['imagenasubir']['name'])." ha sido subido satisfactoriamente</b></font></div>";
			}
		else
			{
				echo "el archivo de imagen no se cambio";
			}

	$update = "UPDATE usuarios SET nomusuario = '$actualizausuario',clave = ('$actualizaclave'),idrol = '$actualizaidrol',email = '$actualizaemail',foto ='$actualizafoto'  WHERE id = '$editar_id'";
	$ejecutar=mysqli_query($conexion,$update);
	if ($ejecutar)
		{
			//header("Location: administrador.php");
			echo "<script>
					window.open('administrador.php')
				 </script> ";
		}
	else
		{
			echo "<script>
					alert ('no se pudo EDITAR')
				</script> ";
		}
	}
	unset($_POST['actualizame']);
?>
<?php
if(isset($_GET['borrar']))
	{
	$borrar_id = $_GET['borrar'];
	$borrar = "DELETE FROM usuarios WHERE id = '$borrar_id'";
	$ejecutar=mysqli_query($conexion,$borrar);
	if($ejecutar)
		{
			//header("Location: administrador.php");
			echo "<script>
						window.open('administrador.php')
					 </script> ";
		}
	else
		{
			echo "<script>
						alert ('no se logro eliminar')
					 </script> ";
		}
    }
    	unset($_POST['borrar']);
?>
<div align="center">
	<form action="loginphp.php" method="POST">
		<button style = "background: red; height:40px; width: 150px" >
			<font face="arial" size="6px"> 
				<b>
		<input type="submit" name="cerrar_sesion" value="CERRAR SESION">
				</b>
			</font>
		</button>
<!-- 
		<input type="submit" name="cerrar_sesion" value="Cerrar Sesion"> -->
	</form>


	
</div>
</body>
</html>