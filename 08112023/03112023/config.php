<?php
define("KEY_TOKEN","FCW.xDLag55");
session_start();
$numero_carrito= 0;
if(isset($_SESSION['carrito']['producto'])) {
    $numero_carrito=count ($_SESSION['carrito']['producto']);
}
?>