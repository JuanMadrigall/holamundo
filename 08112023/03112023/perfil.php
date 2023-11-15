<?php
session_start();
include_once 'conexionPDO.php';

$user=$_SESSION['nomusuario'];
$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
$sq1="SELECT* from  usuarios WHERE nomusuario ='$nomusuario'and password '$clave'"

$consulta="SELECT* from  usuarios WHERE nomusuario ='$nomusuario'and password '$clave'"
$sq1= 








$sql ="SELECT 1d, nombre, correo, telefono, usuario, password, FROM personal P WHERE usuarlon".,Suser."
    $resultado -$conexion->query($sq1);
    while(Sdata-Sresultado->fetch_assc
        $nonbre - Sdata| 'noebre'):
        Scorreo - Sdata| 'correo'):
        Stelefono - sdatal 'telefono*];
        Susuario - Sdata| `usuario'):
        Spassword - Sdata| 'password');
        $16_cargo - Sdata[ 'Id_cargo');
        $Cargo - Sdata 'Cargo'):
 ?>
<html lang="es">
<head>
    cmeta http-equiv-X-UA-Compatible* content-"LE-edge">
    ceeta name-"vleuport" content-"width-dev1ce-width, Initial-scale-1.e*>
    <link 180;0, 300;8,400:0, rol-*stylesher
    clink re)-*stylesheet" href-"../recursos/css/indexhone.cs
    <title>Venezuela Digital Home</title>
 </head>
<body>
<center» <div class-"Datos_usuario" > ch2 class-'titulo"satos del perfil</h2)
     (h3) Nombre: <7php echo Snorbreih </h3>
<br>
ch3alisuario: <7php echo
cbr>
ch3> Correo : «Zohp echo Scorreo: hohb
(br)
ch3>Cargo: <7php echo scargo; >> C/h3>
cbr>
ch3>Teléfono: ec7php echo Stelefono; h </h3>
/divs </centers





<?php
session_start();
include_once 'conexionPDO.php';
$nomusuario=$_POST['nomusuario'];
$clave=$_POST['clave'];
$_SESSION['nomusuario']=$nomusuario;

$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');


$consulta="SELECT* from  usuarios WHERE nomusuario ='$nomusuario'and password '$clave'"









$sql ="SELECT 1d, nombre, correo, telefono, usuario, password, FROM personal P WHERE usuarlon".,Suser."
    $resultado -$conexion->query($sq1);
    while(Sdata-Sresultado->fetch_assc
        $nonbre - Sdata| 'noebre'):
        Scorreo - Sdata| 'correo'):
        Stelefono - sdatal 'telefono*];
        Susuario - Sdata| `usuario'):
        Spassword - Sdata| 'password');
        $16_cargo - Sdata[ 'Id_cargo');
        $Cargo - Sdata 'Cargo'):
 ?>
<html lang="es">
<head>
    cmeta http-equiv-X-UA-Compatible* content-"LE-edge">
    ceeta name-"vleuport" content-"width-dev1ce-width, Initial-scale-1.e*>
    <link 180;0, 300;8,400:0, rol-*stylesher
    clink re)-*stylesheet" href-"../recursos/css/indexhone.cs
    <title>Venezuela Digital Home</title>
 </head>
<body>
<center» <div class-"Datos_usuario" > ch2 class-'titulo"satos del perfil</h2)
     (h3) Nombre: <7php echo Snorbreih </h3>
<br>
ch3alisuario: <7php echo
cbr>
ch3> Correo : «Zohp echo Scorreo: hohb
(br)
ch3>Cargo: <7php echo scargo; >> C/h3>
cbr>
ch3>Teléfono: ec7php echo Stelefono; h </h3>
/divs </centers





<li><a class="xd" href="perfil.php"><?php echo $_SESSION['$nomusuario'] ?></a>         
<ul>
<li> <a class="xd" href="loginphp.php">Ingresar</a></li>
<li> <a class="xd" href="cerrar.php">Cerrar sesion</a></li> 
</ul>
</li>	
<li><a class="xd" shref="compras.php">Tus compras</a></li>