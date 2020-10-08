<?php
    require_once('Modelo/Conexion.php');
    require_once('Modelo/ProductoModelo.php');
       
        $producto = new ProductoModelo();
        $matrizproducto = $producto->ProductoConsulta();
  
    require_once('Vista/Producto/ProductoVista.php');
?>