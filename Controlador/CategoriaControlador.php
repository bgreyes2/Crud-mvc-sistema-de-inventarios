<?php
    require_once('Modelo/Conexion.php');
    require_once('Modelo/CategoriaModelo.php');
       
        $categoria = new CategoriaModelo();
        $matrizcategoria = $categoria->CategoriaConsulta();
  
    require("Vista/Categoria/CategoriaVista.php");
?>


