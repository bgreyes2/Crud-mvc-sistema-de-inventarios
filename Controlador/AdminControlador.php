<?php
    require_once('Modelo/Conexion.php');
    require_once('Modelo/AdminModelo.php');
       
        $administra = new ModeloAdmin();
        $matrizadmin = $administra->AdminConsulta();
  
    require_once('Vista/Admin/AdminVista.php');
?>