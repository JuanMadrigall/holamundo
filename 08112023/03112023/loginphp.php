<html>
	<head><title>Logeo</title> <link rel="stylesheet" href="css/logincss.css">
	</head>
	<body>
        <br><br><br><br>
	<div class="container"> 
        <br>
            <img src="imglogin/Sicompre.png" class="logo"> 
                <h1>Inicio de Sesión</h1> 
                <form method="POST" action="#"> 
                    <div class="form-group"> 
                        <label>Usuario</label> 
                        <input type="text" name="nombreusuario" placeholder="Nombre de usuario"> 
                    </div> 
                  <div class="form-group"> <label>Password</label> 
                    <input type="password" name="contrasena" placeholder="Ingrese su Clave" required> 
                  </div>
    <button type="submit">Ingresar</button> <a href="inicio.php"><button type="button">Cancelar</button></a>

    <p>¿No tienes cuenta? <a href="registro.php">Registrarse</a> </p> 
    </form> 
    <div class="social-icons"> <img src="imglogin/intagram.png"> <img src="imglogin/facebok.png"> <img src="whats.png"> 
    </div> 
    </div>
<?php
include_once 'conexionPDO.php';
session_start();
if(isset($_POST['cerrar_sesion']))
	{
		include_once 'cerrar.php';
		/*session_unset();
		session_destroy();*/
	}


if(isset($_SESSION['rol']))
	{
		switch ($_SESSION['rol']) 
		{
			case 1:
				header('Location: administrador.php');
				break;
			case 2:
				header('Location: usuario.php');
				break;
			case 3:
				header('Location: cliente.php');
				break;
			default:
				echo "Este rol no existe dentro de las opciones";
				break;
		}
	}
if (isset($_POST['nombreusuario']) && isset($_POST['contrasena']))
	{
		$username=$_POST['nombreusuario'];
		$password=$_POST['contrasena'];

		$db=new Database();
		$query=$db->connectar()->prepare('SELECT * FROM usuarios WHERE nomusuario=:nombreusuario AND clave=:contrasena');
		$query->execute(['nombreusuario'=>$username,'contrasena'=>$password]);
		$arreglofila=$query->fetch(PDO::FETCH_NUM);

		if ($arreglofila == true ) 
			{
				$rol=$arreglofila[3];
				$_SESSION['rol']=$rol;
				switch ($rol) 
					{
						case 1:
							header('Location: administrador.php');
							break;
						case 2:
							header('Location: inicio.php');
							break;
						case 3:
							header('Location: inicio.php');
							break;

						default:
							echo "Este rol no existe dentro de las opciones";
							break;
					}
				$usuario=$arreglofila[1];
				$_SESSION['nomusuario']=$usuario;
				
				$fotosesion=$arreglofila[5];
				$_SESSION['foto']=$fotosesion;
			}
			else
			{
				echo 'Nombre de usuario o contraseña incorrecto';
			}
	}
?>
	</body>
</html>	