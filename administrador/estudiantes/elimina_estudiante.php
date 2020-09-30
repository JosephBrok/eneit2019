<?php
include('../conexion.php');

$id = $_POST['id'];

if (!mysqli_query($conexion,"DELETE FROM usuarios WHERE idUsuario = '$id'")) {
  echo '<script> alert("Este registro no se puede borrar porque esta siendo utilizado por el sistema.");</script>';
}

$registro = mysqli_query($conexion,"SELECT * FROM usuarios ORDER BY idUsuario ASC");

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
echo '</table>';
?>