<?php

require_once('../Modelo/Conexion.php');
require_once('../Modelo/ProductoModelo.php');

$producto = new ProductoModelo(); 

$cod = $_REQUEST['id'];
 
$resultado = $producto->EliminarProducto($cod);

if ($resultado)
	header ("location:../index.php");
else
	echo "error al eliminar producto";
?>