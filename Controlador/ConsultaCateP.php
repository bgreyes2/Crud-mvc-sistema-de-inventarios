<?php
    require_once('../Modelo/Conexion.php');
    require_once("../Modelo/CategoriaModelo.php");
       
    $cate = new CategoriaModelo();
    $matrizcategoria = $cate->CategoriaConsulta();

    require_once("../Vista/Productos/InsertarPVista.php");

?>