<!DOCTYPE html>
   <html lang="es">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Productos</title>
       <style>
           td {
               border: 1px dotted blue;
           }
       </style>
   </head>

   <body>
       <a href="Controlador/ValidarproductosCon.php">Nuevo Producto</a>
       <table width="1016" border="1">
           <tr>
               <th width="126" scope="col">CODIGO</th>
               <th width="456" scope="col">NOMBRE</th>
               <th width="119" scope="col">PRECIO</th>
               <th width="145" scope="col">ELIMINAR</th>
               <th width="136" scope="col">MODIFICAR</th>
           </tr>
           <tr>
               <?php
                foreach ($matrizproducto as $fila) {
                ?>
           <tr>
               <td><?php echo $fila['cod_producto']; ?></td>
               <td><?php echo $fila['nombre_producto']; ?></td>
               <td><?php echo $fila['precio']; ?></td>
               <td><a href="Controlador/EliminarProducto.php?cod=<?php echo $fila['cod_producto']; ?>">Eliminar</a></td>
               <td><a href="Controlador/ValidarProductosAct.php?cod_producto=<?php echo $fila['cod_producto']; ?>">Modificar</a></td>
           </tr>
       <?php
                }
        ?>
       </table>
   </body>

   </html>