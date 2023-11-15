<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $_SESSION['nombre'] = $_POST['nombre'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['clave'] = $_POST['clave'];

  if($_POST['tipo'] == 'usuario') {
    $_SESSION['tipo_numero'] = 1;
  } else if ($_POST['tipo'] == 'premium') {
    if($_POST['plan'] == 'plan1') {
      $_SESSION['tipo_numero'] = 2;
    } else if($_POST['plan'] == 'plan2') {
      $_SESSION['tipo_numero'] = 3; 
    } else if($_POST['plan'] == 'plan3') {
      $_SESSION['tipo_numero'] = 4;
    }
  }

  // Aquí puedes insertar en la BD

  header('Location: resumen.php');

}

?>


<form method="POST">

  Nombre: <input type="text" name="nombre">
  Email: <input type="email" name="email">
  Clave: <input type="password" name="clave">

  <input type="radio" name="tipo" value="usuario"> Usuario
  <input type="radio" name="tipo" value="premium"> Premium

  <select name="plan">
    <option value="plan1">Plan 1</option>
    <option value="plan2">Plan 2</option>
    <option value="plan3">Plan 3</option>
  </select>

  <input type="submit" value="Registrarse">

</form>