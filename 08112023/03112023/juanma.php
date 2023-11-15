<?php
require 'config.php';
require 'conexionPDO.php';
$db =new Database();
$con = $db->connectar();
$sql = $con ->prepare("SELECT id,nombre,precio FROM productos WHERE activo=1");
$sql -> execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
//include_once 'conexionPDO.php';  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/body.css">
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1 style="color: aliceblue;",\t>$Sicompre</h1>
			</div> 
			<nav class="menu">
               <ul>
				<li><a class="xd" href="#" class="active">Inicio</a></li>
        <li><a class="xd" href="carrito.php" >Carrito<span id="numero_carrito">2</span> </a></li>
				<li><a class="xd" href="proximamente.html">Nosotros</a></li>
				<li><a class="xd" href="loginphp.php">Ingresar</a> 	</li>
				<li><a class="xd" shref="compras.php">Tus compras</a></li>
            </ul>
			</nav>
		</div>
<br><br><br>

        <h1>Top Productos Del Dia</h1>
        <p>
          <span>&#139;</span>
          <span>&#155;</span>
        </p>
      </header>
      <section>
    <?php foreach($resultado as $row) { ?>
        <div class="product">
          <picture>
            <?php 
            $id = $row['id'];
            $imagen = "imginicio/productos/". $id ."/foto.png";
            
            if(!file_exists($imagen)){
                $imagen="imginicio/error.jpg";
                }

            ?> 
            <img src= "<?php echo $imagen; ?> ">
          </picture>
          <div class="detail">
            <p>
              <b><?php echo $row['nombre'];?></b><br>
              <small>Nuevos provedores</small>
            </p>
            <samp><?php echo number_format($row['precio'], 3, '.','.'); ?></samp>
          </div>
          <div class="button">
            <p class="star">
              <strong>&star;</strong>
              <strong>&star;</strong>
              <strong>&star;</strong>
              <strong>&star;</strong>
              <strong>&star;</strong>
            </p>
            
            <button class="btn-carrito">🛒 <br>Añadir al Carrito</button>


            <a href="informacion.php?id=<?php echo $row['id']; ?>&token=<?php echo hash_hmac('sha1',$row['id'], KEY_TOKEN);?>" class="xd">Comprar</a>
            
          </div>
        </div>
        <?php  } ?>
        
        
      </section>
    </main>
  </header>
  <br><br><br>
  <h3 align="center">Quienes Somos</h3><br><br>
  <img class="imagen" src="image/carrito6.jpg">
<a class="infografia"> Somos una plataforma enfocada en brindar transparencia e 
    información imparcial sobre precios de productos, ayudando a los consumidores a maximizar 
    el valor de sus compras.
</a>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


  <input type="checkbox" id="btn-menu">
  <div class="container-menu">
    <div class="cont-menu">
      <nav>
        <a class="f" href="#">Tu mercado</a>
        <a class="f" href="#">Servicios</a>
        <a class="f" href="#">Suscribirse</a>
        <a class="f" href="#">Facebook</a>
        <a class="f" href="#">Youtube</a>
        <a class="f" href="#">Instagram</a>
      </nav>
      <label for="btn-menu">✖️</label>
    </div>
  </div>
  <header>



    <footer>
        <p align="center">Copyright &copy; 2023 Supermercado</p>
      </footer>
  </body>
  </html>
  <script type="text/javascript" src="js/js.js"></script>

