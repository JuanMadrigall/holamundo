<?php
include_once 'conexionPDO.php';
?>
<?php 

session_start();

$usuario = $_SESSION['nombre'];
$email = $_SESSION['email']; 
$clave = $_SESSION['clave'];
$idrol = $_SESSION['plan'];




echo "Nombre: $nombre <br>"; 
echo "Email: $email <br>";
echo "Rol que es: $idrol";
echo "clave: $clave";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title img src="logo.jpg" alt="">SICOMPRE</title>
    <link rel="stylesheet" href="css/cliente.css">
</head>
<body>
    <div id="membresias" >  <div class="card_1">
        <div class="content">
            <div class="back">
                 <div class="back-content">
                    <div class="img">
                        <div class="circle">
                        </div>
                        <div class="circle" id="right">
                        </div>
                        <div class="circle" id="bottom">
                        </div>
                    </div>

                    <div class="front-content">
                        <small class="badge">Membresia</small>
                        <div id="mem_caracteristicas">
                            <p class="precio">45000$</p> 
                        </div>
                        <div class="description">
                        <div class="title">
                            <p class="title">
                            <strong> Gratuita</strong>
                            </p>
                            <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997"><g transform="scale(8,8)"><path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path></g></g></svg>
                        </div>
                        <p class="card-footer">
                            30 Dias &nbsp; | &nbsp; Unica prueba
                        </p>
                        <div style="text-align: center;" >
                            <br><button width="100" height="700" id="miBoton">¡COMPRAR!</button>
                        </div>
                    
                        <script>
                            document.getElementById("miBoton").addEventListener("click", function() {
                                var resultado = confirm("¿Estás seguro de que deseas continuar?");
                            
                                if (resultado === true) {
                                    alert("Pago aprobado");
                                } else {
                                    alert("Pago rechazado");
                                }
                            });
                        </script>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>