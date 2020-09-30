
<?php
include('../conexion.php');


$proceso = $_POST['pro'];
$nombre = $_POST['nombre'];
$pass = $_POST['contra'];
$level = $_POST['nivel'];
$codigo = $_POST['codigo'];
$correo = $_POST['email'];
$foto = $_POST['foto'];

switch($proceso){
	case 'Registro':  
        mysqli_query($conexion,"INSERT INTO usuarios (idUsuario, NombreUsuario, PassUsuario, NivelUsuario, Codigo, email, Foto) VALUES('$proceso','$nombre','$pass','$level','$codigo','$correo','$foto')");
        break;
    }
   
?>