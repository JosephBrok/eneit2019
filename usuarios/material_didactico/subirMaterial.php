<?php
session_start();
include '../../admin/conexion.php';

if(isset($_SESSION['user'])){
if(($_SESSION['nivel']) == 2){

 $user = $_SESSION['user'];

 }

        ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.:SUBIR:.</title>
     <link rel="shortcut icon" href="../imagenes/ittla.ico" type="image/x-icon">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../alertas/sweetalert.css">
  <script src="../alertas/sweetalert.min.js"></script>
</head>
<body>
       
        <?php
       include ('../menu_inicio_docente.php');
        ?>
   
       <br>
       <br>
       <br>
       
        <div class="container-fluid">
            
            <div class="row">
            
            <div class="col-lg-12"> <!--Logo, banner, punto -->
                <div class="col-md-3">
                    <img src="../../imagenes/logittla.jpg" width="80" height="80" class="img-responsive">
                    </div>
                     <div class="col-md-6">         
                        <img src="../../imagenes/banerDoc.png" class="img-responsive">       
                         </div>
                   <div class="col-md-3">
                    <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Estas en linea:</b> <?php echo $user ?></h5>
                   </div> 
            </div>
            
             <div class="col-md-12"> <!-- SEGUNDA FILA -->
                    <ol class="breadcrumb">
                    <li><a href="../../index.php">Inicio</a></li>
                    <li><a href="../docentes.php">Docentes</a></li>
                    <li><a href="../material_didactico.php">Material Didactico</a></li>
                    <li class="active">Subir Material</li>
                </ol>
            </div>
        </div> <!-- final fila -->
        
     <div class="col-md-12"> <!-- Inicia contenido nueva columna -->
        <div class="container">
         
          <div class="panel panel-success">
            <div class="panel-heading"> <center><h4>SUBIR ARCHIVOS</h4></center> </div>
                    <div class="panel-body">
                        <div class="row">
                            
        <form id="formulario" class="form-group" action="recibirSubida.php" method="post" enctype="multipart/form-data">
           
        <div class="modal-body">  
          
        <div class="form-group"> 
        
        <label class="col-md-3 control-label">Archivo:</label>
        <div class="col-md-9"><input type="file" class="form-control" id="archivo" name="archivo" required="true"><br>
         </div> 

        <label  class="col-md-3 control-label">Nombre Materia:</label>
        <div class="col-md-9"><input type="text" class="form-control" id="materia" name="materia" required maxlength="50"><br></div>
         
         
        <label class="col-md-3 control-label">Descripcion:</label>
        <div class="col-md-9"><textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="3"></textarea><br></div>
        
        <label class="col-md-3 control-label">Fecha:</label>
        <div class="col-md-9"><input type="date" name="fecha" id="fecha"><br></div>
        
              <center>
                  <input type="submit" value="Publicar" name="subir" class="btn btn-success" id="subir"/>
              </center>
               
             </div>         
        </div>
   </form>
              <div class="col-md-3">
                <a href="../material_didactico.php"> <button class="btn btn-success"><i class="fa fa-arrow-left"></i> Regresar</button> </a>  
              </div>                 
                                    
            </div> <!-- final fila --> 
      </div> <!-- final panel body -->
    </div> <!-- final panel success -->
  </div> <!-- final container -->
 </div> <!-- final columna -->
</div> <!-- final container -->
        <br>
        <br>
        <?php
           include('../../includes/footer.php');
             ?>
</body>
</html>
<?php
  } else {
  echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
  echo '<script> window.location="../../login.php"; </script>';
 } 
?>
