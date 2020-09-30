<?php
    include '../administrador/conexion.php';
        session_start();
            if(isset($_SESSION["user"])){
                if($_SESSION["nivel"] == 2){ 
                    $user = $_SESSION["user"];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Docentes</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="../imagenes/logoProfe.jpeg" type="image/x-icon">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
include ('menu_inicio_docente.php');
 ?>
    <br>
    <!-- Contenido Pagina -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="col-md-3">
                    <img src="../imagenes/logoProfe.jpeg" width="90" height="90" class="img-responsive"> </div>
                <div class="col-md-6">
                    <img src="../imagenes/banerDoce.png" class="img-responsive">
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
                    <li class="active">Docentes</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <h3>Estimado docente: </h3>
            <p>En esta sección de la plataforma usted podra subir los archivos que necesite compartir los padres de los alumnos podran consultar todo el material que usted publique.</p>
        </div>







        <div class="panel panel-primary">
            <div class="panel-heading">
                <center>
                    <h4><b>Administracion de Materiales Didacticos</b></h4>
                </center>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-1">
                        <h4>Buscar:</h4>
                    </div>
                    <form action="" method="post">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Clave de busqueda" name="buscar" required>
                        </div>
                        <button type="submit" class="btn btn-info">Buscar</button>

                        <table class="table table-bordered">
                            <tr class="warning">
                                <td>DESCRIPCIÓN</td>
                                <td>CLAVE</td>
                                <td>FECHA</td>
                                <td>GRADO</td>
                                <td>MATERIA</td>
                            </tr>
                            <?php
         if(isset($_POST['buscar'])){
              $laBusqueda = $_POST['buscar'];
              $queryB = "SELECT * FROM  materialdidactico WHERE clave LIKE '%$laBusqueda%' ";
              $RESULT = mysqli_query($conexion,$queryB);
                    
                    while (($fila = mysqli_fetch_array($RESULT,MYSQLI_ASSOC))==true) {   
                    echo '<tr>
                            <td> ' . $fila ["descripcion"] . '</td>
                            <td> ' . $fila ["clave"] . ' </td>
                            <td> ' . $fila ["fecha_subida"].  ' </td>
                            <td> ' . $fila ["grado_escolar"].  ' </td>
                            <td> ' . $fila ["materia"].  ' </td>
                         </tr>'; 
                  }
            }
    ?>

                        </table>
                    </form>
                </div>

                <div class="col-md-6" style="float:right">
                    <center>
                        <h4 style="font-weight: bold;">
                            <?php
             include('../administrador/conexion.php');
              $result = mysqli_query($conexion,"SELECT * FROM materialdidactico");
               $row_cnt = mysqli_num_rows($result);
              echo "Registros Totales: " . $row_cnt; 
            ?>
                        </h4>
                        <a href="subirMaterial.php">
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-plus"></i> Crear Nuevo Material
                            </button>
                        </a>

                    </center>
                </div>

            </div> <!-- Fin panel body -->
        </div> <!-- Fin panel primary -->
    </div> <!-- Fin container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/back-to-top.js"></script>

    <br>
    <br>
    <?php
    include('../includes/footer.php');
   ?>
</body>

</html>
<?php
     }
   } else {   
        echo '<script> alert("No Tienes los permisos para ascceder a esta pagina.");</script>';
        echo '<script> window.location="../log/login.php"; </script>';
     }   
?>
