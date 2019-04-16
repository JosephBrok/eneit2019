<?php
session_start();
include 'conexion.php';
                    
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.:ADMINISTRADOR:.</title>
     <link rel="shortcut icon" href="../imagenes/logoUNI.ico" type="image/x-icon">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="estudiantes/myjava.js"></script>
</head>
<body>
           <?php
        include ('menuAdmin.php');
            ?>
       <br>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3 text-center"><img src="../imagenes/logittla.jpg" width="70" height="70"></div>
             <div class="col-md-6">
             <img src="../imagenes/banerAdm.png" alt="">           
              </div>
               <div class="col-md-3">
                  
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Estas en linea: </b><?php echo $usP ?></h5>
               </div> 

            </div>
            <div class="col-lg-12">              
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a>
                    </li>
                    <li class="active">Administrador</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
<?php include('otros/menuAdministrador.php') ?>
    </div>
    <hr>
    <?php
    include('../includes/footer.php');
 ?>
</body>
</html>


