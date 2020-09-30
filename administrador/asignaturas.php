<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['user'])) {
     if ($_SESSION["nivel"] == 1) {
            $user = $_SESSION['user'];
            $level = $_SESSION["nivel"];

                                 
        ?>
           <?php 
         /* $consulta1="select IdCarrera, NombreCarrera from carreras";
          $carrera=mysqli_query($conexion,$consulta1);
           $consulta2="select idGrupo, NumeroGrupo from grupos";
          $grupos=mysqli_query($conexion,$consulta2);
           $consulta3="select idCuatrimestre, NombreCuatrimestre from cuatrimestres";
          $cuatrimestre=mysqli_query($conexion,$consulta3);*/
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materias</title>
    <link rel="shortcut icon" href="../imagenes/logoProfe.jpeg" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="asignaturas/myjava.js"></script>

</head>
<body>
           <?php
        include ('menuAdmin.php');
            ?>
       <br>
        <div class="container">
            <div class="row">
            
            <div class="col-lg-12">
            
            <div class="col-md-3">
                <img src="../imagenes/logoProfe.jpeg" width="90" height="90">
            </div>
            
            <div class="col-md-6">
            <img src="../imagenes/banerAdmin.png">           
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
                    <li><a href="admin.php">Administrador</a></li>
                    <li class="active">Materias</li>
                </ol>
            </div>
        </div>
            
<div class="row">
   <div class="col-md-9">
      <div class="container">
      <div class="panel panel-info">
       
        <div class="panel-heading">
        <center><h4><b>Administracion de Materias</b></h4></center>
        </div>
        
        <div class="panel-body">
        <form action="" method="post">
            <div class="row">
                       <div class="col-md-1"><h4>Buscar:</h4></div>
		               <div class="col-md-4">
		               <input type="text" class="form-control" placeholder="Escribe el nombre de la materia" required name="busqa">
		               </div>
		               <div class="col-sm-6">
		              <button type="submit" class="btn btn-success">Buscar</button>
		              <button class="btn btn-success" data-toggle="modal" data-target="#window"> <i class="glyphicon glyphicon-plus"></i> Crear nueva materia</button> 
		               </div>         
        </div>
<table class="table table-bordered">
      <tr class="warning">
          <td>NOMBRE MATERIA</td>
          
      </tr>
    <?php
        include 'conexion.php';
         if(isset($_POST['busqa'])){
              $laBusqueda = $_POST['busqa'];
              $queryB = "SELECT * FROM  materias WHERE nombre_materia LIKE '%$laBusqueda%' ";
              $RESULT = mysqli_query($conexion,$queryB);
                    while (($fila = mysqli_fetch_array($RESULT,MYSQLI_ASSOC))==true) {   
                    echo '<tr>
                            <td> ' . $fila ["nombre_materia"] . '</td>
                         </tr>'; 
                  }
            }
    ?>
                
                </table>
        </form>
        

<div class="row">
        <div class="col-md-11">
        <h4 style="text-align:right"> 
         <?php
         include('conexion.php');
         $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM materias"));
         echo "Registros Totales: $numeroRegistros";
         ?>
        </h4>
        </div>
</div>
   
  
    <!-- MODAL PARA EL REGISTRO-->
    <div class="modal fade" id="window"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background:#337ab7; text-align: center;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" style="color:white;" id="myModalLabel"><b>
              <i class='glyphicon glyphicon-tasks'></i>&nbsp;&nbsp;Materias</b></h4>
            </div>
            <form class="form-group" action="../administrador/asignaturas/agrega_asignatura.php" method="post">
            <div class="modal-body">
              
               <div class="form-group"> <label class="col-md-2 control-label">Nombre materia:</label>
				<div class="col-md-9">
               <input type="text" class="form-control" name="asignatura">
              </div>
			   </div>
                
                   <br><br>
             </div>         
            <div class="modal-footer">
                <button type="submit" name="registra" class="btn btn-success">Registrar</button>
                
          </div>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>           
 </div>
</div> <!-- final container -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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