<script src="../js/jquery.js"></script>
<?php
include('../conexion.php');

$elimina = $_POST['eliminar'];

$sql = "DELETE FROM usuarios WHERE name_user = '$elimina'";
$result = mysqli_query($conexion,$sql);


if($result == true){
    echo '<script> alert("Registro eliminado con exito");</script>';
     echo '<script> window.location="../usuarios.php"; </script>';
} else {
    echo '<script> alert("Error a ejecutar consulta");</script>';
    echo '<script> window.location="../usuarios.php"; </script>';
}
?>