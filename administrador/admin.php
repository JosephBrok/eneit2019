<?php
session_start();
include 'conexion.php';


if(isset($_SESSION['user'])) {
     if ($_SESSION["nivel"] == 1) {
            $user = $_SESSION['user'];          
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
    <link rel="shortcut icon" href="../imagenes/logoProfe.jpeg" type="image/x-icon">
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
    <div class="container">
     <div class="row">
         <div class="col-lg-12">
     
            <div class="col-md-3 text-center">
            <img src="../imagenes/logoProfe.jpeg" width="90" height="90">
            </div>
            
            <div class="col-md-6">
            <img src="../imagenes/banerAdmin.png">           
            </div>
            
            <div class="col-md-3">
            <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Estas en linea: </b><?php echo $user ?></h5>
            </div> 
            
            </div>
     </div>
            <div class="row">
                <div class="col-lg-12">              
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a>
                    </li>
                    <li class="active">Administrador</li>
                </ol>
            </div>
            </div>
            
            <div class="row">
               <?php include('otros/menuAdministrador.php') ?> 
            </div>
            
            
          <br>
</div>
    <?php
    include('../includes/footer.php');
    ?>
</body>
</html>

<?php
  } else {
        echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
        echo '<script> window.location="../login.php"; </script>';
 }
}else{
 echo '<script> window.location="../login.php"; </script>';
}         
?>


