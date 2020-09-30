<!DOCTYPE html>

<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Acceso a sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../imagenes/logoProfe.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body style="background-color:#e6e6e6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-info class">
                    <div class="panel-heading">
                        <div style="text-align: center;">
                            <h3 class="panel-title"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acceso al Sistema </h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div style="text-align: center;"><br>
                            <img src="../imagenes/logoProfe.jpeg" height="120px" width="107px">
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <p style="font-weight: bold"> Ingresa tus datos de acceso</p>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="validar.php">

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" style="text-align: center;" class="form-control" name="correo" id="correo" placeholder="   Correo" required="true">
                                    <i class="fa fa-user fa-fw"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" style="text-align: center;" class="form-control" name="password" placeholder="Contraseña" required="true">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <center>
                                <h5>Contacte al administrador para obtener sus credenciales de acceso</h5>
                            </center>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <center>
                                        <input type="submit" name="Submit" value="Entrar" class="btn btn-success">
                                        <a href="../index.php" class="btn btn-danger">Salir</a>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
