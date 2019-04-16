<?php
    include '../admin/conexion.php';
     session_start();
if(isset($_SESSION['user'])) {
     if ($_SESSION["nivel"] == 2) {
            $user = $_SESSION["user"];  
     }  
?>
          
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscador</title>
    <link rel="shortcut icon" href="../imagenes/ittla.ico" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
   <?php
        include ('menu_inicio_docente.php');
            ?>
           <br>
        <div class="container">
            
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../imagenes/logittla.jpg" width="70" height="70" class="img-responsive"></div>
                       <div class="col-md-6">              
                          <img src="../imagenes/banerDoc.png" class="img-responsive">
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
                    <li><a href="docentes.php">Docentes</a></li>
                    <li class="active">Material Didactico</li>
                </ol>
            </div> 
        </div>
          
        
           
      <div class="col-md-12">     
      <div class="panel panel-primary">
        <div class="panel-heading">
            <center><h4><b>Administracion de Materiales Didacticos</b></h4></center>
        </div>
        <div class="panel-body">
            <div class="row">
		          <div class="col-md-1"><h4>Buscar:</h4></div>
                     <div class="col-md-5">
    <input type="text" name="s" id="bs-prod" class="form-control" placeholder="Clave de busqueda">
		               </div>
		               <div class="col-md-6">
                          <a href="material_didactico/subirMaterial.php">
                          <button class="btn btn-success">
                              <i class="glyphicon glyphicon-plus"></i> Crear Nuevo Material
                          </button>
                        </a>
		          </div>
            </div>
            
<div class="col-md-6">
		   <center>
		   <h4 style="font-weight: bold;"> 
    <?php
          include('../admin/conexion.php');
          $numeroRegistros = "SELECT COUNT (*) FROM materialdidacttico";
          $result = mysqli_query($conexion,$numeroRegistros);
          $row = mysqli_fetch_assoc($result);
          echo "Registros Totales: " . $row['idMat'];
          
        ?>
        </h4>
          </center>
      </div>
 

     
                    
        </div>
        <!-- Fin del Panel -->
      </div>
    
</div>
</div>
</div>
        <hr>
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
?>
