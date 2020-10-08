<?php
    require_once('Modelo/Conexion.php');
    require_once('Modelo/ClienteModelo.php');
       
        $cliente = new ClienteModelo();
        $matrizcliente = $cliente->ClienteConsulta();
  
    require_once('Vista/Cliente/ClienteVista.php');
?>