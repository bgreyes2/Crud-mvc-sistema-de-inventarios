    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar Producto</title>
    </head>
    <body>
    <form action="ActualizarProducto.php?cod_producto=<?php echo $_REQUEST['idProducto'] ; ?> " method="post">
      <center>
        <table width="200" border="1">
          <tr>
            <td width="58">Imagen</td>
            <td width="126"><label for="codigo"></label>
              <input name="Imagen" type="text" id="codigo" value="<?php echo $_REQUEST['imagen']  ?>" readonly/></td>
          </tr>
          <tr>
            <td>Código</td>
            <td><label for="nombre"></label>
              <input name="codigo" type="text" id="nombre" value="<?php echo $matrizproducto[0]['codigo'];?>" /></td>
          </tr>
          <tr>
            <td>Descripción</td>
            <td><input name="Descripcion" type="text" id="precio" value="<?php echo $matrizproducto[0]['descripcion'];?>" />&nbsp;</td>
          </tr>
          <tr>
          <td>Categoría</td>
            <td><label for="grupo"></label>
              <select name="Categoria" id="grupo">
              <option value="" selected="selected">[Seleccione una Categoría]
          </tr>
          <tr>
          <td>Stock</td>
            <td><input name="Stock" type="text" id="precio" value="<?php echo $matrizproducto[0]['stock'];?>" />&nbsp;</td>
          </tr>
          <tr>
          <td>Precio de compra</td>
            <td><input name="PrecioCompra" type="text" id="precio" value="<?php echo $matrizproducto[0]['precio_compra'];?>" />&nbsp;</td>
          </tr>
          <tr>
          <td>Precio de venta</td>
            <td><input name="PrecioVenta" type="text" id="precio" value="<?php echo $matrizproducto[0]['precio_venta'];?>" />&nbsp;</td>
          </tr>
          <tr>
          <td>Fecha</td>
            <td><input name="Fecha" type="text" id="precio" value="<?php echo $matrizproducto[0]['fecha'];?>" />&nbsp;</td>
          </tr>
          <tr>

            <?php
               
            foreach ($matrizgrupo as $fila)  {
            echo "<option value='" . $fila['cod_grupo'] . "'>" . $fila['nombre'];
            }
                ?> 
              </select>
            </td>
          </tr>
          <tr>
            <td height="33">&nbsp;</td>
            <td><input name="enviar" type="submit" id="enviar" value="Modificar" /></td>
          </tr>
        </table>
      </center>
    </form>
    </body>
    </html>