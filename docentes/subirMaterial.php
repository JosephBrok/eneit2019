<?php
    include '../administrador/conexion.php';
    session_start();

    if(isset($_SESSION['user'])){
     if($_SESSION['nivel'] == 2){
           $user = $_SESSION['user'];
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subir</title>
    <link rel="shortcut icon" href="../imagenes/logoProfe.jpeg" type="image/x-icon">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../alertas/sweetalert.css">
    <script src="../alertas/sweetalert.min.js"></script>
</head>

<body>
    <br>

    <?php
include ('menu_inicio_docente.php');
 ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--Logo, banner, punto -->
                <div class="col-md-3">
                    <img src="../imagenes/logoProfe.jpeg" width="90" height="90" class="img-responsive">
                </div>
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
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="docentes.php">Docentes</a></li>
                    <li class="active">Subir Material</li>
                </ol>
            </div>
        </div>


        <div class="panel panel-primary">
            <div class="panel">
                <center>
                    <h4>SUBIR ARCHIVOS</h4>
                </center>
            </div>
            <div class="panel-body">
                <div class="row">

                    <form id="formulario" class="form-group" action="recibirSubida.php" method="post" enctype="multipart/form-data">

                        <div class="modal-body">

                            <div class="form-group">

                                <label class="col-md-3 control-label">Archivo:</label>
                                <div class="col-md-9"><input type="file" class="form-control" id="archivo" name="archivo" required="true"><br>
                                </div>

                                <label class="col-md-3 control-label">Nombre Materia:</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="materia" name="materia">
                                        <?php
       $query = mysqli_query($conexion,"SELECT * FROM materias ORDER BY nombre_materia ASC");
        while($row = mysqli_fetch_array($query)) {
        echo "<option>".$row['nombre_materia']."</option>";
        }
        ?>
                                    </select>
                                    <br>
                                </div>


                                <label class="col-md-3 control-label">Grado escolar:</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="grado" name="grado">
                                        <?php
       $query = mysqli_query($conexion,"SELECT * FROM grados ORDER BY grado_escolar ASC");
        while($row = mysqli_fetch_array($query)) {
        echo "<option>".$row['grado_escolar']."</option>";
        }
        ?>
                                    </select>
                                    <br>
                                </div>

                                <label class="col-md-3 control-label">Clave:</label>
                                <div class="col-md-9"><input type="text" class="form-control" id="clave" name="clave" required maxlength="8" placeholder="Solo ingrese 8 caracteres alfanumericos"><br></div>


                                <label class="col-md-3 control-label">Descripcion:</label>
                                <div class="col-md-9"><textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="3" required maxlength="200"></textarea><br></div>

                                <label class="col-md-3 control-label">Fecha:</label>
                                <div class="col-md-9"><input type="date" name="fecha" id="fecha"><br><br></div>

                                <div class="col" style="float:right">
                                    <center>
                                        <input type="submit" value="Publicar" name="subir" class="btn btn-info" id="subir" />
                                    </center>
                                </div>


                            </div>
                        </div>
                    </form>

                </div> <!-- final fila -->
            </div> <!-- final panel body -->
        </div> <!-- final panel primary -->

    </div> <!-- final container -->

    <div class="footerBottomSection" style="background-color: #990000;">
        <div class="container">
            <p class="text-center">© 2019, Todos los Derechos Reservados.</p>
        </div>
    </div>
</body>

</html>
<?php
  } else {
  echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
  echo '<script> window.location="../../login.php"; </script>';
 } 
?>
