<?php
    require_once('../Modelo/Conexion.php');
    require_once('../Modelo/ProductoModelo.php');
    $producto = new ProductoModelo(); 

$resultado = $producto->InsertarProducto($_REQUEST['imagen'],$_REQUEST['codigo'],$_REQUEST['nombre'], $_REQUEST['categoria'],$_REQUEST['stock'],$_REQUEST['fecha']);
if ($resultado)
	header ("location:../index.php");
else
	echo "error";
?>