<?php

class CategoriaModelo
{

    private $db;

    private $categorias; 

    public function CategoriaModelo()
    {    
        $this->db = Conectar::conexion();
        $this->categorias = array();
    }

    public function CategoriaConsulta()
    {
        $consulta2 = $this->db->query("SELECT * FROM categoria ORDER BY nombre_categoria");
        while($filas = $consulta2->fetch_assoc()){
            $this->categorias[]=$filas;
        }
        $this->db->close();
        return $this->categorias;
            
    }

    public function get_productoCod($codigo)
    {
        $consulta = $this->db->query("SELECT * FROM producto where cod_producto = '$codigo'");
        $filas = $consulta->fetch_assoc();
        $this->productos[] = $filas;        
        $this->db->close();
        return $this->productos;

    }

    public function insertarProducto($imagen,$codigo,$descripcion,$idCategoria,$stock,$precio_compra,   
    $precio_venta, $fecha)
    {
        $sql = "INSERT INTO producto (imagen,codigo,descripcion,idCategoria,
        stock,precio_compra,precio_venta,fecha) VALUES ('$imagen','$codigo','$descripcion','$idCategoria','$stock','$precio_compra',
        '$precio_venta','$fecha')";        
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function eliminarProducto($cod){
        $sql= "DELETE FROM producto where cod_producto = '$cod'";
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function actualizarProducto($cod, $nombre, $precio, $grupo){
        $sql = "UPDATE producto set nombre_producto = '$nombre', precio = '$precio', cod_grupo = '$grupo' WHERE cod_producto = '$cod'";
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;

    }

}

?>