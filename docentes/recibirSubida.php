<?php
include_once '../administrador/conexion.php';
session_start();
 $usuario = $_SESSION['user'];


if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../padres/pdf/archivos/" . $nombre;
    if ($nombre != "") {
         if ($tamanio < 1000 * 1024 ) { //validando que el archivo sea menor a 1 MB
                 if (($tipo == "application/pdf") || ($tipo == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($tipo == "application/msword")) {       //validando que el archivo sea de tipo PDF y WORD (.docx, .doc)          
                   if (copy($ruta, $destino)) {
                    $descripcion= $_POST['descripcion'];
                    $clave= $_POST['clave'];
                    $fecha =date("Y-m-d"); 
                    $grado= $_POST['grado'];
                    $materia= $_POST['materia'];
                    $sql = "INSERT INTO materialdidactico (descripcion,clave,fecha_subida,grado_escolar,materia,nombre_archivo) VALUES('$descripcion','$clave','$fecha','$grado','$materia','$nombre')";
                    $query = mysqli_query($conexion, $sql);
                        if($query == true){
                                echo '<script> alert("El archivo se ha subido al servidor con Exito.");</script>';
                                echo '<script> window.location="subirMaterial.php"; </script>';
                          }
                } else {
                      echo '<script> alert("Error al subir el archivo.");</script>';
                }

            }
           else{
             echo '<script> alert("Solo se permiten archivos PDF.");</script>';
             echo '<script> window.location="subirMaterial.php"; </script>';
           }  
         }
         else{
            echo '<script> alert("El Archivo es muy Grande.");</script>';
            echo '<script> window.location="subirMaterial.php"; </script>';
         }
    }
}

?>
