<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 1) {
            $user = $_SESSION['NombreUsuario'];
              $level = $_SESSION["NivelUsuario"];

              $consulta1=mysqli_query($conexion,"select NombreUsuario from usuarios where Nivel = '$level'");                  
                
        ?>
        <?php 
          $consulta="select IdGrupo, NumeroGrupo from grupos";
          $grupo=mysqli_query($conexion,$consulta);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.:Busqueda:.</title>
    <link rel="shortcut icon" href="../imagenes/ittla.ico" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="estudiantes/myjava.js"></script>

    <link href="css/sweetalert.css" rel="stylesheet">
    <script src="js/functions.js"></script>
    <script src="js/sweetalert.min.js"></script>
</head>
<body>
           <?php
        include ('menuAdmin.php');
            ?>
       <br>
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"></div>
             <div class="col-md-6">         
             </div>
               <div class="col-md-3">
              
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Estas en linea:</b> <?php echo $user ?></h5>
               </div> 

            </div>
           <div class="col-lg-12">
                    <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="admin.php">Administrador</a></li>
                    <li class="active">Estudiantes</li>
                </ol>
            </div>
        </div> 
        <!-- /.row -->
        <!-- Content Row -->
<?php //include('otros/menuAdministrador.php') ?>
        <div class="row">
            <!-- Content Column -->
            <div class="col-md-9">
                <div class="container">
      <div class="panel panel-success">
        <div class="panel-heading">
            <div class="btn-group pull-right">
            </div>
            <center><h4><b>Administracion de Estudiantes</b></h4></center>
        </div>
        <div class="panel-body">
            <div class="row">
		               <div class="col-md-1"><h4>Buscar:</h4></div>
		               <div class="col-md-5">
		               <input type="text" name="s" id="bs-prod" class="form-control" placeholder="Escribir el Nombre del Estudiante">
		               </div>
		               	<div class="col-md-6">
		                  <button id="nuevo-producto" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Nuevo Estudiante</button> 
		                  <a href="Reporte_PDF_Estudiantes.php"> <button class="btn btn-primary"><i class="fa fa-file-pdf-o"></i>  Exportar Listado a PDF</button> </a>
		               </div>
	              <br>
 <br>
    <div class="registros" style="width:100%;" id="agrega-registros"></div>
      <div class="col-md-6" style="text-align: left;">
		    <center>
		        <ul class="pagination" id="pagination"></ul>
		    </center>
      </div>
      <div class="col-md-6">
		   <center>
		   <h4 style="font-weight: bold;"> 
    <?php
include('conexion.php');
    $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM usuarios"));
    echo "Registros Totales: $numeroRegistros";
        ?>
        </h4>
          </center>
      </div>
   
  
    <!-- MODAL PARA EL REGISTRO-->
    <div class="modal fade" id="registra-datos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background:#337ab7; text-align: center;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" style="color:white;" id="myModalLabel"><b>
              <i class='glyphicon glyphicon-user'></i>&nbsp;&nbsp;Estudiantes</b></h4>
            </div>
            <form id="formulario" class="form-group" onsubmit="return agregarRegistro();">
            
            <div class="modal-body">
            <input type="text" class="form-control" required readonly id="id-registro" name="id-registro" readonly="readonly" style="visibility:hidden; height:6px;"/>

                 <div class="form-group"> <label for="codigo" class="col-md-2 control-label">Proceso:</label>
				<div class="col-md-10"><input type="text" class="form-control" required readonly id="pro" name="pro" hidden="true" /></div>
			   </div> <br>
			   <div class="form-group"> <label for="nombre" class="col-md-2 control-label">Nombre:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="nombre" name="nombre" required maxlength="50"></div>
			   </div><br>
			   <div class="form-group"> <label for="contra" class="col-md-2 control-label">Contraseña:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="contra" name="contra" required maxlength="50"></div>
			   </div><br>
			   <div class="form-group"> <label for="nivel" class="col-md-2 control-label"> Nivel:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="nivel" name="nivel" required maxlength="16"></div>
			   </div><br>
			   <div class="form-group"> <label for="codigo" class="col-md-2 control-label">Codigo:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="codigo" name="codigo" required maxlength="50"></div>
			   </div><br>
             <div class="form-group"> <label for="codigo" class="col-md-2 control-label">Correo:</label>
				<div class="col-md-10"><input type="email" class="form-control" id="email" name="email" required maxlength="50"></div>
			   </div>
              <div class="form-group"> <label for="foto" class="col-md-2 control-label">Foto:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="foto" name="foto" required maxlength="50"></div>
			   </div>          
             </div>         
            <div class="modal-footer">
                <input type="submit" value="Registrar" class="btn btn-success" id="reg"/>
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
        <!-- Fin del Panel -->
    </div>
</div>
       
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       
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
