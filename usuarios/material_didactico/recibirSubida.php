<?php
include_once '../../admin/conexion.php';
session_start();
 $usuario = $_SESSION['user'];


if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "pdf/archivos/" . $nombre;
    if ($nombre != "") {
         if ($tamanio < 1000 * 1024 ) { //validando que el archivo sea menor a 1 MB
                 if (($tipo == "application/pdf") || ($tipo == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($tipo == "application/msword")) {       //validando que el archivo sea de tipo PDF y WORD (.docx, .doc)          
                   if (copy($ruta, $destino)) {
                       echo "exito";
                    $descripcion= $_POST['descripcion'];
                    $materia= $_POST['materia'];
                    $fecha =date("Y-m-d");
                       
                       echo $fecha;
                       
                    $sql = "INSERT INTO materialdidactico (descripcion,nombreMateria,fechaSubida) VALUES('$descripcion','$materia','$fecha')";
                    $query = mysqli_query($conexion, $sql);
                        if($query == true){
                                echo '<script> alert("El Libro PDF se ha subido al servidor con Exito.");</script>';
                                echo '<script> window.location="subirMaterial.php"; </script>';
                          }
                } else {
                      echo '<script> alert("Error al subir el Libro.");</script>';
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