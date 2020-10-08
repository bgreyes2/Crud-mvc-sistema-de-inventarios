<?php
require ('Configuracion.php');

class Conectar{

    public static function conexion(){
   

        try{
           
            $conexion = new mysqli(SERVIDOR,USUARIO,CLAVE,DBNOMBRE);

        }catch(Exception $e){
            die("error" . $e->getMessage());
            echo "Error en la línea: " . $e->getLine();
        }
        return $conexion;
    }    

    public static function ruta(){
        return "http://localhost/proyecto/";
    
    }
    
}


?>