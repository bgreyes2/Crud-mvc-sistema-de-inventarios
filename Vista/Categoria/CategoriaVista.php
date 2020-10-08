<!DOCTYPE html>
   <html lang="es">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Catagorías</title>
       <style>
           td {
               border: 1px dotted blue;
           }
       </style>
   </head>

   <body>
       <a href="Controlador/ValidarproductosCon.php">Agregar categoria</a>
       <table width="1016" border="1">
           <tr>
               <th width="126" scope="col">Código</th>
               <th width="456" scope="col">Nombre</th>
               <th width="456" scope="col">Eliminar</th>
               <th width="456" scope="col">Modificar</th>
           </tr>
           <tr>
               <?php
                  foreach($matrizcategoria as $fila) {
                ?>
           <tr>
               <td><?php echo $fila['idcategoria']; ?></td>
               <td><?php echo $fila['nombre_categoria']; ?></td>
               <td><a href="Controlador/EliminarCControlador.php?id=<?php echo $fila['']; ?>">Eliminar</a></td>
               <td><a href="Controlador/ValidarProductosAct.php?cod_producto=<?php echo $fila['cod_producto']; ?>">Modificar</a></td>
           </tr>
       <?php
                }
        ?>
       </table>
   </body>

   </html>