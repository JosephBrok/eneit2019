<?php
include('../conexion.php');
session_start();
if(isset($_POST['registra'])){
    
$nombreAsig = $_POST['asignatura'];


	$query = "INSERT INTO materias (nombre_materia) VALUES ('$nombreAsig')";
	$result = mysqli_query($conexion,$query);
    if($result == false){
    echo '<script> alert("ERROR AL INSERTAR REGISTRO");</script>';
        echo '<script> window.location="../asignaturas.php"; </script>';
    } else {
    echo '<script> alert("ALTA DE ASIGNATURA EXITOSA");</script>';
        echo '<script> window.location="../asignaturas.php"; </script>';
    }
   } 
?>