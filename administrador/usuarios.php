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
    <title>Usuarios</title>
    <link rel="shortcut icon" href="../imagenes/logoProfe.jpeg" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="css/sweetalert.css" rel="stylesheet">
    <script src="js/sweetalert.min.js"></script>
</head>

<body>
    <?php
        include ('menuAdmin.php');
            ?>

    <br>
    <div class="container">


        <div class="row">
            <div class="col-md-3"><img src="../imagenes/logoProfe.jpeg" width="90" height="90" class="img-responsive">
            </div>

            <div class="col-md-6">
                <img src="../imagenes/banerAdmin.png" class="img-responsive">
            </div>

            <div class="col-md-3">
                <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Estas en linea:</b> <?php echo $user ?></h5>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="admin.php">Administrador</a></li>
                    <li class="active">Usuarios</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="container">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <center>
                                <h4><b>Administracion de Usuarios del Sistema</b></h4>
                            </center>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col">
                                    <h4>Altas y bajas:</h4>
                                </div>
                                <div class="col">
                                    <form action="../administrador/usuarios/elimina_usuario.php" method="post">
                                        <input type="text" name="eliminar" class="form-control" placeholder="Escribe el nombre del usuario para borrarlo">
                                        <br>
                                        <button type="submit" class="btn btn-success" style="float:inherit">Borrar</button>
                                    </form>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#window" style="float:inherit"> <i class="glyphicon glyphicon-plus"></i> Nuevo Usuario</button>
                                </div>
                            </div>

                            <br>
                            <!-- resultados -->
                            <table class="table">
                                <tr class="warning">
                                    <td>NUM.REGISTRO</td>
                                    <td>NOMBRE</td>
                                    <td>APELLIDO</td>
                                    <td>PASSWORD</td>
                                    <td>NIVEL USUARIO</td>
                                    <td>GRADO</td>
                                    <td>CORREO</td>
                                </tr>

                                <?php
            
               $query = mysqli_query($conexion,"SELECT * FROM usuarios");
               while($row = mysqli_fetch_array($query)) {
               echo '<tr>
                            <td> ' . $row["id_user"] . '</td>
                            <td> ' . $row ["name_user"] . '</td>
                            <td> ' . $row ["apellido_user"] . '</td>
                            <td> ' . $row ["pass_user"] . '</td>
                            <td> ' . $row ["nivel_user"] . '</td>
                            <td> ' . $row ["id_grado"] . '</td>
                            <td> ' . $row ["email_user"] . '</td>
                         </tr>'; 
               }
               ?>
                            </table>

                            <!-- MODAL PARA EL REGISTRO-->
                            <div class="modal fade" id="window" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background:#337ab7; text-align: center;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" style="color:white;" id="myModalLabel"><b>
                                                    <i class='glyphicon glyphicon-lock'></i>&nbsp;&nbsp;Usuarios</b></h4>
                                        </div>
                                        <form class="form-group" action="../administrador/usuarios/agrega_usuario.php" method="post">
                                            <div class="modal-body">



                                                <div class="form-group"> <label for="nombre" class="col-md-2 control-label">Nombre:</label>
                                                    <div class="col-md-10"><input type="text" class="form-control" id="nombre" name="nombre" required maxlength="50"></div>
                                                </div><br>

                                                <div class="form-group"> <label for="nombre" class="col-md-2 control-label">Apellido:</label>
                                                    <div class="col-md-10"><input type="text" class="form-control" id="apellido" name="apellido" required maxlength="50"></div>
                                                </div><br>

                                                <div class="form-group"> <label for="pass" class="col-md-2 control-label">Password:</label>
                                                    <div class="col-md-10"><input type="Password" class="form-control" id="pass" name="pass" required maxlength="50"></div>
                                                </div><br>
                                                <div class="form-group"> <label for="nivel" class="col-md-2 control-label">Nivel:</label>
                                                    <div class="col-md-10">
                                                        <select name="nivel" class="form-control">
                                                            <option value="1">Administrador</option>
                                                            <option value="2">Docente</option>
                                                            <option value="3">Padre</option>
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="form-group"> <label for="grado" class="col-md-2 control-label">Grado:</label>
                                                    <div class="col-md-10"><input type="text" class="form-control" id="grado" name="grado" required maxlength="50"></div>
                                                </div><br>
                                                <div class="form-group"> <label for="correo" class="col-md-2 control-label">Correo:</label>
                                                    <div class="col-md-10"><input type="email" class="form-control" id="correo" name="correo" required></div>
                                                </div><br>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" value="Registrar" name="registrar" class="btn btn-success" />
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
    </div>
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
