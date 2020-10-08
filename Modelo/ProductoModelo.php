<?php

class ProductoModelo
{

    private $db;

    private $productos; 

    public function ProductoModelo()
    {    
        $this->db = Conectar::conexion();
        $this->productos = array();
    }

    public function ProductoConsulta()
    {
        $consulta = $this->db->query("SELECT * FROM producto");
        while($filas = $consulta->fetch_assoc()){
            $this->productos[]=$filas;
        }
        $this->db->close();
        return $this->productos;
            
    }

    public function get_productoCod($codigo)
    {
        $consulta = $this->db->query("SELECT * FROM producto where cod_producto = '$codigo'");
        $filas = $consulta->fetch_assoc();
        $this->productos[] = $filas;        
        $this->db->close();
        return $this->productos;

    }

    public function InsertarProducto($imagen,$codigo,$nombre_producto,$idcategoria,$stock,$fecha)
    {
        $sql = "INSERT INTO producto (imagen,codigo,nombre_producto,idcategoria,
        stock,fecha) VALUES ('$imagen','$codigo','$nombre_producto','$idcategoria','$stock','$fecha')";        
        $resul = $this->db->query($sql);        
        $this->db->close();
        return $resul;
    }

    public function EliminarProducto($id){
        $sql= "DELETE FROM producto where idproducto = '$id'";
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