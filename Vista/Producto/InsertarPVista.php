<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto</title>
</head>
<body>
<form action="GuardarPControlador.php" method="post">
    <center>
      <table width="200" border="1">        
        <tr>
          <td>Imagen</td>
          <td><label for="imagen"></label>
            <input type="file" name="imagen" id="nombre" /></td>
        </tr>
        <tr>
          <td>Código</td>
          <td><input name="codigo" type="number" id="precio" />&nbsp;</td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td><label for="nombre1"></label>
            <input type="text" name="nombre" id="nombre" /></td>
        </tr>
        <tr>
        <td>Categoria</td>
          <td><label for="categoria"></label>
            <select name="categoria" id="grupo">
              <option value="" selected="selected">Seleccione una categoría
                <?php
               
                foreach ($matrizcategoria as $fila)  {
                  echo "<option value='" . $fila['idcategoria'] . "'>" . $fila['nombre_categoria'];
                }
                ?>
            </select></td>
        <tr>
          <td>Stock</td>
          <td><label for="stock"></label>
            <input type="number" name="stock" id="nombre" /></td>
        </tr>
        <tr>
        </tr>
        <tr>
          <td>Fecha</td>
          <td><label for="fecha"></label>
            <input type="date" name="fecha" id="nombre" /></td>
  
        <tr>
          <td>&nbsp;</td>
          <td><input name="enviar" type="submit" id="enviar" value="Guardar" /></td>
        </tr>
      </table>
    </center>
  </form>
</body>
</html>