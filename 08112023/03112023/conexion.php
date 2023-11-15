<?php
//datos de la base de datos
/*$usuario="root";
$password="";
$servidor="localhost";
$basededatos="alumnos";
// creacion de la conexion a la base de datos con mysqli
$conexion=mysqli_connect($servidor,$usuario,"") or die ("no ha sido posible la conexion al servidor");
// seleccionando la base de datos a emplear
$selecbasededatos=mysqli_select_db($conexion,$basededatos) or die("No se ha conectado a la base de datos");
//Realizamos la consulta de la tabla respectiva
$consulta="SELECT *FROM alumno";
//almacenamos la consulta 
$resultado=mysqli_query($conexion,$consulta) or die ("algo salio mal en la consulta a la base de datos");*/

$conexion=mysqli_connect("localhost","root","","crud");

?>

<!-- 

<?php
/*function conectar(){
    $host = "localhost";
    $user = "root"; // Para propósitos educativos únicamente
    $clave = "root";
    $bd = "sentencias";
    $conexion = new mysqli($host, $user, $clave, $bd);
    if($conexion->connect_errno){
        exit("Fallo en la conexión al servidor");
    }
    return $conexion;
}
?> -->

*/