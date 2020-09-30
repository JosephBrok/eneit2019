<?php
include('../conexion.php');
$dato = $_POST['dato'];
$registro = mysqli_query($conexion,"SELECT * FROM usuarios WHERE NombreUsuario LIKE '%$dato%' ORDER BY idUsuario ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                       <th width="10%">IdUsuario</th>
                         <th width="10%">Usuario</th>
                         <th width="10%">Contraseña</th>
                         <th width="10%">Nivel</th>
                         <th width="10%">Codigo</th>
                         <th width="10%">Foto</th>             
                        <th width="10%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
				  <td>'.$registro2['idUsuario'].'</td>
                  <td>'.$registro2['NombreUsuario'].'</td>
                  <td>'.$registro2['PassUsuario'].'</td>
                  <td>'.$registro2['NivelUsuario'].'</td>
                   <td>'.$registro2['Codigo'].'</td>
                  <td>'.$registro2['Foto'].'</td>
                  <td> <a href="javascript:editarRegistro('.$registro2['idUsuario'].');">
                  <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                  <a href="javascript:eliminarRegistro('.$registro2['idUsuario'].');">
                  <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                  </td>
			        	</tr>';
      	}
      }else{
      	echo '<tr>
      				<td colspan="10">No se encontraron resultados</td>
      			</tr>';
      }
      echo '</table>';
?>