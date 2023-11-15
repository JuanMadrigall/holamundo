<html>
	<head><title>Logeo</title> <link rel="stylesheet" href="css/p1registro.css">
	</head>
	<body>
    <?php
		$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
    ?>
        <br><br><br><br>
	<div class="container"> 
        <br>
            <img src="imglogin/Sicompre.png" class="logo"> 
                <h1>Registrarse</h1>
                <?php
include_once 'conexionPDO.php';            
    if(!empty($_POST["insertar"]))
    {
        if(empty($_POST["usuario"]) or empty($_POST["clave"]) or empty($_POST["idrol"]) or empty($_POST["email"]) )
        {
            echo '<div class="dos"> algunos de los campos esta vacío</div>';
        }
        else
        {
            $usuario = $_POST["usuario"];
            $clave   = $_POST["clave"];
            $idrol   = $_POST["idrol"];
            $email   = $_POST["email"];
            $sql = "INSERT INTO usuarios(nomusuario,clave,idrol,email) VALUES ('$usuario','$clave','$idrol','$email')";
            $ejecutar=mysqli_query($conexion,$sql);
                if ($ejecutar)
                    {
                    header('Location: loginphp.php'); 
                    exit();
                    }
        }
    }
?>
                <form method="POST" action="#"> 
                    <div class="form-group"> 
                        <label>Usuario</label> 
                        <input type="text" name="usuario" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group"> 
                        <label >Contraseña</label> 
                        <input type="text" name="clave" placeholder="Ingrese su Clave">
                    </div>
                    <div class="form-group"> 
                        <label>Email</label> 
                        <input type="text" name="email" placeholder="Ingrese su email">
                    </div>
                    <div class="form-group">
                    <label>Tipo de plan</label><br>
                <laber for="gratis">
                <input type="radio" name="idrol" id="gratis" value="2">Gratis</laber>
                <laber for="premium">
                <input type="radio" name="idrol" id="premium" value="3" disabled>Premium</laber>    
<!-- el disabled es para que la persona no pueda seleccionar pero si lo quitamos la persona lo puede activar -->
                    </div>
<script>

const gratisRadio = document.getElementById('gratis');
const premiumRadio = document.getElementById('premium');

const idrolInput = document.getElementById('idrol'); 

gratisRadio.addEventListener('change', () => {
  idrolInput.value = 2; 
});

premiumRadio.addEventListener('change', () => {
  idrolInput.value = 3;
});

</script>
<div >
    <input class="fff" type="submit" class="form-control" name="insertar" value="Enviar">
    <a href="inicio.php"><button type="button">Volver al inicio</button></a>

    <p>¿Ya tienes una cuenta? <a href="loginphp.php">Login</a> </p> </div>
    </form> 
    <div align="center" class="social-icons"> <img src="imglogin/intagram.png"> <img src="imglogin/facebok.png"> <img src="whats.png"> 
    </div> 
    </div>

	</body>
</html>	