<?php    
    require_once("../Modelo/CategoriaModelo.php");
    require_once("../Modelo/ProductoModelo.php");
    $cate = new CategoriaModelo(); 
    $matrizgrupo = $grupo->ConsultaCategoria();
    $producto = new ProductoModelo();
    $matrizproducto = $producto->get_productoCod($_REQUEST['idproducto']);
    echo $matrizproducto[0]['precio'];
    require ('../Vista/Html/ActualizarProducto.php');
?>