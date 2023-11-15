<?php
require 'config.php';
require 'conexionPDO.php';
$db =new Database();
$con = $db->connectar();
$id= isset($_GET['id'])? $_GET['id'] :'';
$token=isset($_GET['token'])? $_GET['token'] :'';
if ($id == '' || $id == '')
{
 echo 'Eror broder';
 exit;
}
else
{
 $token_tmp=hash_hmac('sha1',$id,KEY_TOKEN);
      if($token == $token_tmp)
      {
        $sql=$con->prepare("SELECT count(id) FROM productos WHERE id=? AND activo=1");
        $sql->execute([$id]);
        if($sql->fetchColumn() > 0)
        {
        $sql=$con->prepare("SELECT nombre, descripcion, descuento, precio FROM productos WHERE id=? AND activo=1 LIMIT 1");
        $sql->execute([$id]);
        $row =$sql->fetch(PDO::FETCH_ASSOC);
        $nombre=$row['nombre'];
        $descripcion=$row['descripcion'];
        $precio=$row['precio'];
        $descuento=$row['descuento'];
        $precio_des=$precio-(($precio*$descuento)/100);
        $imagen = "imginicio/productos/". $id ."/foto.png";
            
        if(!file_exists($imagen)){
            $imagen="imginicio/error.jpg";
            }

      
        // $principal_img= $fotos_img. 'foto.png';
         //  if(!file_exists($principal_img)){
          //  $imagen="imginicio/error.jpg";
          //  }
           // $imagenes =array();
          //  $dir=dir($fotos_img);
            //    while(($archivo =$dir ->read())!==false)
             //   {
               //   if($archivo = 'foto.png' &&(strpos ($archivo,'png') || strpos($archivo,'png')))
               //   {
              //    $imagenes[]=$fotos_img. $archivo;

              //    }
             //   }
            //  $dir->close();
        }
      } 
      else
      {
      echo 'Eror broder';
      exit;
      }
}

 
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
        <li><a class="xd" href="carrito.php" >Carrito<span id="numero_carrito">
        <?php echo $numero_carrito; ?></span> </a></li>
				<li><a class="xd" href="proximamente.html">Nosotros</a></li>
				<li><a class="xd" href="loginphp.php">Ingresar</a> 	</li>
				<li><a class="xd" shref="compras.php">Tus compras</a></li>
            </ul>
			</nav>
		</div>

<br><br><br><br>
<div>
      <div class="product">
      <img src= "<?php echo $imagen; ?> ">
      </div>
      <div>
      <b class="texto_izquierda"><?php echo $row['nombre'];?></b><br>
        <?php if ($descuento>0){?>  
        <p><del> <?php echo number_format($precio, 3, '.','.'); ?>  </del></p>
        <b>$<?php echo number_format($precio_des, 3, '.','.'); ?> </b>


        <?php } else { ?>
      <b>$<?php echo number_format($row['precio'], 3, '.','.'); ?> </b>

      <?php  }?>
      <p>
      <?php echo $descripcion;?>
      </p>
      </div>
            <div>
              <button type="Button">Compar</button>
              <button type="Button" onclick="addcarrito(<?php echo $id; ?>, '<?php echo $token_tmp; ?>')">
              agregar al carrito</button>
             
            </div>
   
</div>

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
      <script>
         function addcarrito(id,token)
         {
          
          let url = 'carrito.php'
          let formData = new FormData()
          formData.append('id',id)
          formData.append('token',token)

          fetch(url,{
             method: 'POST',
             body: formData,
             mode:'cors'
          }).then( response=> response.json())
          .the(data =>{ 
           if(data.ok){
            let elemento=document.getElementById("numero_carrito")
            elemento.innerHTML= data.numero
           }
          })
           
        }
  </body>
  </html>