<?php
    require_once('Modelo/Conexion.php');
    require_once('Modelo/PasteleroModelo.php');
       
        $pas = new PasteleroModelo();
        $matrizpastelero = $pas->PasteleroConsulta();
  
    require_once('Vista/Pastelero/PasteleroVista.php');
?>