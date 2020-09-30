
<?php
include('../conexion.php');

if(isset($_POST['registrar'])){
    
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pass = $_POST['pass'];
$nivel = $_POST['nivel'];
$grado = $_POST['grado'];
$correo = $_POST['correo'];
    
    
     $sql = "INSERT INTO usuarios (name_user, apellido_user, pass_user, nivel_user, id_grado, email_user)  VALUES ('$nombre', '$apellido', '$pass', '$nivel', '$grado', '$correo')";
                $result = mysqli_query($conexion,$sql);
    
                if($result==false){
                       echo '<script> alert("Error al insertar datos.");</script>';
                       echo '<script> window.location="../usuarios.php"; </script>';
                       
                   } else {
                       echo '<script> alert("Datos registrados con exito.");</script>';
                       echo '<script> window.location="../usuarios.php"; </script>';
                   }
    
}

?>