<?php
	
$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
include_once 'conexionPDO.php';
?>
<?php
session_start();

$nombre = $_SESSION['usuario']; 
$email = $_SESSION['email'];
$clave = $_SESSION['clave'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $_SESSION['plan'] = $_POST['plan_elegido'];
  
  header('Location: resumen.php');
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
    <link rel="stylesheet" href="pagos.css">
</head>
<?php
		$conexion=mysqli_connect('localhost','root','','crud') or die ('problems en la conexion');
    ?>
    <body>
        <h1  align="center"> Tipos de planes</button></h1>
                                    </div>
                                    
                                    </div>
                               
        <div id="membresias" >
        <div class="card_1">
            <div class="content">
            <div class="back">
                
                <div class="back-content">
                    <canvas id="lineal" width="400" height="550"></canvas> 
                        <svg stroke="#ffffff" >
                            

                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
        
                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
        
                <g id="SVGRepo_iconCarrier">
        
                </g>
        
            </svg>
            
         
            <strong>FREE</strong>
                
                </div>
            </div>
            <div class="front">
                
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
                        <strong> Gratuita </strong>
                    </p>
                    <svg fill-rule="nonzero" height="40px" width="0px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997"><g transform="scale(8,8)"><path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path></g></g></svg>

                    </div>
                    <p class="card-footer">
                    30 Dias &nbsp; | &nbsp; Unica prueba 
                    </p>
                    <div class="container">
                        <a href="membresia10.php"><button type="button" class="btn"> COMPRAR</button></a>
                    </div>
                    
                </div>
                </div>
            </div>
            </div>
        </div>

                <!------------------------------------------------------------> 
    
                <div class="card_2">
                    <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <canvas id="circular" width="400" height="550"></canvas>
                            <svg stroke="#ffffff" viewBox="0 0 50 50" xmlns="http://www.w3.org/1999/xlink" image href="../img/audifonos.jpg" x="0" y="0" height="100px" width="100px" fill="#ffffff" >
                                <image href="../img/edicion-limitada.png" x="0" y="0" height="50" width="50" stroke="#ffffff" fill="#ffffff"/>
                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                
                        <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                
                        <g id="SVGRepo_iconCarrier">
                
                
                        </g>
                
                        </svg>
                        <strong>6 MESES</strong>
                        </div>
                    </div>
                    <div class="front">
                        
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
                            <p class="precio">210000$</p> 
                        </div>
                        <div class="description">
                            <div class="title">
                            <p class="title">
                                <strong> 6 Meses</strong>
                            </p>
                            <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997"><g transform="scale(8,8)"><path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path></g></g></svg>
                            </div>
                            <p class="card-footer">
                            6 Meses &nbsp; | &nbsp; 1 compra por año
                            </p>
                            <div class="container">
                                <a href="29.php"><button type="button" class="btn"> COMPRAR</button></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                

                        
                <div class="card_3">
                    <div class="content">
                        <div class="back">
                             <div class="back-content">
                                <canvas id="circular1" width="400" height="550"></canvas>
                                 <svg stroke="#ffffff" viewBox="0 0 50 50" xmlns="http://www.w3.org/1999/xlink" image href="../img/audifonos.jpg" x="0" y="0" height="100px" width="100px" fill="#ffffff" >
                                    <image href="../img/alta-calidad.png" x="0" y="0" height="50" width="50" stroke="#ffffff" fill="#ffffff"/>

                                    <g stroke-width="0" id="SVGRepo_bgCarrier"></g>

                                    <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>

                                    <g id="SVGRepo_iconCarrier">


                                    </g>

                                    </svg>
                                    <strong>PREMIUM</strong>
                                </div>
                                </div>
                                <div class="front">
                                
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
                                    <p class="precio">380000$</p> 
                                    <div class="description">
                                    <div class="title">
                                        <p class="title">
                                        <strong> 1 Año</strong>
                                        </p>
                                        <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997"><g transform="scale(8,8)"><path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path></g></g></svg>
                                    </div>
                                    <p class="card-footer">
                                        12 Meses &nbsp; | &nbsp; compra ilimitada
                                    </p>
                                    <div class="container">
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="planesjs.js"></script>
    </body>
</html>