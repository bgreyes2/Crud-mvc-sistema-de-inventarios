<!DOCTYPE html>
   <html lang="es">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Productos</title>
       <link rel="stylesheet" href="assets/css/estilos.css">

    </head>

   <body>
       <a href="Controlador/ConsultaCateP.php">Agregar administrador</a>
       <table width="1016" border="1">
           <tr>
               <th width="126" scope="col">Número</th>
               <th width="456" scope="col">Imagen</th>
               <th width="119" scope="col">Código</th>
               <th width="136" scope="col">Categoría</th>
               <th width="136" scope="col">Nombre</th>
               <th width="136" scope="col">Stock</th>
               <th width="136" scope="col">Fecha</th>
               <th width="136" scope="col">Eliminar</th>
               <th width="136" scope="col">Modificar</th>

           </tr>
      
               <?php
                    foreach($matrizadmin as $fila) {
                ?>
           <tr>
               <td><?php echo $fila['idAdmin']; ?></td>
               <td><?php echo $fila['documento_administrador']; ?></td>
               <td><?php echo $fila['telefono_administrador']; ?></td>
               <td><?php echo $fila['direccion_administrador']; ?></td>
               <td><?php echo $fila['email']; ?></td>
              
               <td><a href="Controlador/EliminarPControlador.php?id=<?php echo $fila['idproducto']; ?>">Eliminar</a></td>
               <td><a href="Controlador/ActualizarPModificar.php?idproducto=<?php echo $fila['idproducto']; ?>">Modificar</a></td>
           </tr>
       <?php
            }
        ?>
       </table>
   </body>

   </html>