<?php
session_start();
include '../admin/conexion.php';

if(isset($_SESSION['user'])) {
     if ($_SESSION["nivel"] == 3) {
            $user = $_SESSION['user'];
            $nivel = $_SESSION["nivel"];

                $consulta=mysqli_query($conexion,"select nombreUser from usuarios where idNivel = '$nivel'");                  
                ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modulo Estudiantes</title>
    <link href="../admin/css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
</head>

<body>
<?php
include ('menu_inicio_estudiante.php');
 ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        
            
            <div class="row">
            <div class="col"></div>
            <div class="col-md-6">                      
                    <img src="../imagenes/banerEst.png" class="img-responsive">                    
                     </div>
               <div class="col-md-6">
              <h5>
              <i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i>
              <b> &nbsp; Estás en linea:</b> <?php echo $user ?>
              </h5>
               </div> 
                
            </div>
                

            <div class="row">
               <div class="col-lg-12">
                    <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li class="active">Estudiantes</li>
                </ol>
            </div> 
            </div>

    
            <!-- Sidebar Column -->
 <?php
include ('menu_estudiante.php');
 ?>
            <!-- Content Column -->
            <div class="col-md-9">
                <h3>Bienvenid@ : <b style="color:green;"><?php echo $user; ?></b></h3>
                <p>En esta seccion del sistema usted podra consultar los PDF'S de las asignaturas correspondientes a su semestre, ademas de ver y descargar los archivos de apoyo de las clases impartidas.</p>

            <div class="row">
             <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="../imagenes/docente1.png" class="img-responsive">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Material de Estudio</h4>
                        <a href="material_didactico.php" class="btn btn-primary"><i class="glyphicon glyphicon-download"></i> Entrar</a>
                    </div>
                </div>
            </div>
        </div>
            </div>
        
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      

    </div>
    <!-- /.container -->

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
