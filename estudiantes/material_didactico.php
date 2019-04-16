<?php
session_start();
include '../admin/conexion.php';

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 3) {
            $user = $_SESSION['NombreUsuario'];
            $level = $_SESSION["NivelUsuario"];

              $consulta=mysqli_query($conexion,"select NombreEstudiante from estudiantes where idEstudiante = $level");                     
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.:Archivos:.</title>
     <link rel="shortcut icon" href="../imagenes/favicon.ico" type="image/x-icon">
    <link href="../admin/css/bootstrap.css" rel="stylesheet">
    <link href="../../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="../js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="material_didactico/myjava.js"></script>

</head>
<body>
           <?php
        include ('menu_inicio_estudiante.php');
            ?>
       <br>
        <div class="container">
            <div class="row">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"></div>
                       <div class="col-md-6">              
                          <img src="../imagenes/banerEst.png" class="img-responsive">
                       </div>
               <div class="col-md-3">
                  
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Estas en linea:</b> <?php echo $user ?></h5>
               </div> 
            </div>
            <div class="col-lg-12">              
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="estudiantes.php">Estudiantes</a></li>
                    <li class="active">Materiales de Estudio</li>
                </ol>
            </div>
        </div> 
        <!-- /.row -->
            <!-- Content Column -->
              <?php
    include('menu_estudiante.php');
 ?>

            <div class="col-md-9">
                <div class="container-fluid">
      <div class="panel panel-success">
        <div class="panel-heading">
            <center><h4><b> <i class="glyphicon glyphicon-list-alt"></i> &nbsp; Materiales de Estudio</b></h4></center>
        </div>
        <div class="panel-body">
            <div class="row">
                  <!--Fin del Segundo Row !-->
                   <center>
		               <div class="col-md-4"><h4>Buscar Material de Estudio:</h4></div>
		               
                   <div class="col-md-5">
		                  <input type="text" name="s" id="bs-prod" class="form-control" placeholder="Escribe el nombre de la materia">
		                  <br>
		                  <br>
		                  <br>
		                  <br>
		                  <br>
		                  <br>
		                  <br>
		                  <br>
		               </div>
                  </center> 
      </div>                   
        </div>
        <!-- Fin del Panel -->
      </div>
    </div>
</div>
</div>
</div>
          <hr>
          <hr>
          <hr>
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