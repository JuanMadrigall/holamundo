
<?php
include_once 'conexionPDO.php';
session_start();
if(!isset($_SESSION['rol']))
	{
		header('location: loginphp.php');
	}
else
	{
		if($_SESSION['rol'] !=2)
			{
				header('location: loginphp.php');
			}
	}
?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="estilousuario.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <style>
        body {
            background-image: url('supermarket.jpg'); 
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            background-color: rgba(300, 300, 300, 0.9);
            padding: 20px;
            border-radius: 30px;
        }

        #search {
            text-align: center;
            margin-top: 20px;
        }

        #logoTable {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #logoTable td, #logoTable th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #logoTable th {
            background-color: #f2f2f2;
        }

        .add-to-cart-button {
            display: block;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .add-to-cart-button:hover {
            background-color: #45a049;
        }

        #cart {
            position: fixed;
            right: 10px;
            top: 10px;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 50%;
            text-align: center;
            width: 30px;
            height: 30px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form action="loginphp.php" method="POST">
		<input type="submit" name="cerrar_sesion" value="CERRAR SESION">
	</form>
    <div id="container">
        <h1>Bienvenid@ Usuario
            
        </h1>

        <div id="search">
            <input type="text" placeholder="Buscar producto">
            <button>Buscar</button>
        </div>

        <table id="logoTable">
        
            <tr>
                <td><img src="imgusuario/colsubsidio.jpg" alt="Logo 1" width="100"></td>
                <td><a href="24.html" class="add-to-cart-button">Ir a la tienda</a></td>

                <td><img src="imgusuario/metro.png" alt="Logo 2" width="100"></td>
                <td><a href="24.html" class="add-to-cart-button">Ir a la tienda</a></td>

                <td><img src="imgusuario/alkosto.png" alt="Logo 3" width="100"></td>
                <td><a href="24.html" class="add-to-cart-button">Ir a la tienda</a></td>

                </tr>
            

                <tr>
                 
                <td><img src="imgusuario/olimpica.png" alt="Logo 4" width="100"></td>
                <td><a href="24.html" class="add-to-cart-button">Ir a la tienda</a></td>

                <td><img src="imgusuario/jumbo.png" alt="Logo 5" width="100"></td>
                <td><a href="24.html" class="add-to-cart-button">Ir a la tienda</a></td>
                
                <td><img src="imgusuario/exito.png" alt="Logo 6" width="100"></td>
                <td><a href="24.html" class="add-to-cart-button">Ir a la tienda</a></td>
            </tr>
          
        </table>
    </div>

    <div id="cart">0</div>

    <script>
        // Contador de artículos en el carrito
        let cartCount = 0;
        const cartElement = document.getElementById("cart");

        // Función para agregar al carrito
        function addToCart()
        {
            cartCount++;
            cartElement.innerText = cartCount;
        }

        // Agrega un evento de clic a todos los botones "Agregar al carrito"
        const addToCartButtons = document.querySelectorAll(".add-to-cart-button");
        addToCartButtons.forEach(button => 
        {
            button.addEventListener("click", addToCart);
        });
    </script>
</body>
</html>
