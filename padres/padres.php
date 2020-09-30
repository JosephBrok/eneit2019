<?php
session_start();
include '../administrador/conexion.php';

if(isset($_SESSION['user'])) {
     if ($_SESSION["nivel"] == 3) {
            $user = $_SESSION['user'];
 
                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Padres</title>
    <link href="../administrador/css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../imagenes/logoProfe.jpeg" type="image/x-icon">
</head>

<body>
    <?php
include ('menu_inicio_estudiante.php');
 ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-md-3">
                    <img src="../imagenes/logoProfe.jpeg" width="90" height="90" class="img-responsive"> </div>
                <div class="col-md-6">
                    <img src="../imagenes/banerPadre.png" class="img-responsive">
                </div>
                <div class="col-md-3">
                    <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Estas en linea:</b> <?php echo $user ?></h5>
                </div>
            </div>
        </div>


        <br>


        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li class="active">Estudiantes</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <h3>Estimado padre de familia: </h3>
            <p>En esta seccion del sistema usted podra consultar los archivos de las materias correspondientes al grado de su hijo, ademas de ver y descargar los archivos de apoyo de las clases impartidas.</p>

            <br>

            <p>Quieres enviar alguna sugerencia ? Da clic aqui <a href="#"><kbd> SUGERENCIAS</kbd></a></p>
        </div>



        <div class="panel panel-info">
            <div class="panel-heading">
                <center>
                    <h4><b> <i class="glyphicon glyphicon-list-alt"></i> &nbsp; Materiales de Estudio</b></h4>
                </center>
            </div>
            <form action="" method="post">

                <div class="panel-body">
                    <div class="row">
                        <center>
                            <div class="col-md-4">
                                <h4>Buscar:</h4>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Escribe el codigo de la materia" required name="search"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                                <br><br>
                            </div>
                            <table class="table table-bordered">
                                <tr class="warning">
                                   
                                    <td>DESCRIPCIÓN</td>
                                    <td>CLAVE</td>
                                    <td>FECHA</td>
                                    <td>GRADO</td>
                                    <td>MATERIA</td>
                                    <td>NOMBRE ARCHIVO</td>
                                </tr>
                                <?php
         if(isset($_POST['search'])){
              $laBusqueda = $_POST['search'];
              $queryB = "SELECT * FROM materialdidactico WHERE clave LIKE '%$laBusqueda%' ";
              $RESULT = mysqli_query($conexion,$queryB);
                    
                    while (($fila = mysqli_fetch_array($RESULT,MYSQLI_ASSOC))==true) {   
                    echo "<tr> 
                         
                        <td>$fila[descripcion]</td> 
                        <td>$fila[clave]      </td>
                        <td>$fila[fecha_subida]</td>
                        <td>$fila[grado_escolar]</td>
                        <td>$fila[materia]</td>
  <td><a href='../padres/pdf/archivo.php?id=$fila[id_material]'> $fila[nombre_archivo] </a></td>
 </tr>";
       
                  }
            }
    ?>

                            </table>
                        </center>
                    </div>
                </div>
            </form>
        </div>

    </div> <!-- Fin container -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <?php
    include('../includes/footer.php');
 ?>
</body>

</html>

<?php
     }
     else{
        echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
         echo '<script> window.location="../login.php"; </script>';
     }
}else{
 echo '<script> window.location="../login.php"; </script>';
}
?>
