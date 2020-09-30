<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="imagenes/logoProfe.jpeg" type="image/x-icon">
</head>

<body>
    <?php 
include('includes/menuPublico.php') 
?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Imagenes -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('imagenes/wall8.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imagenes/wall9.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imagenes/wall3.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imagenes/wall4.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <!-- Indicadores Puntos -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Flechas Izquierda y Derecha -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Conetenido -->
    <div class="container">

        <!-- Seccion de iconos -->
        <div class="row">

            <div class="col-lg-12">
                <h2>Bienvenidos</h2>

                <hr>
                <p>
                    <br>
                    La plataforma es un medio para que ustedes padres, puedan usarla en cualquier momento y a cualquier hora. Los profesores por otro lado, es necesario que publiquen material didáctico respecto al tema visto en clase y tareas para que haya un seguimiento continuo.

                    <br><br>

                    Esperamos que la plataforma sea de tu agrado, y te permita a ti padre, estar más cerca del desarrollo escolar de tus hijos.
                </p>
                <hr>
            </div>


            <div class="row">
                <p class="text-center">
                    <strong>Inicia sesión</strong>
                </p>
                <div class="col-lg-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <img src="imagenes/libro.png" height="100px" width="100px">
                        </div>
                        <div class="panel-body">
                            <h4>Docentes</h4>
                            <p>En está sección los docentes podran subir material de las clases que se imparten en el aula, asi como notas adicionales respecto a su materia.</p>
                            <a href="log/login.php" class="btn btn-primary"><i class="glyphicon glyphicon-download-alt"></i> Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <img src="imagenes/lectura.png" height="100px" width="100px">
                        </div>
                        <div class="panel-body">
                            <h4>Padres</h4>
                            <p>En está sección solo padran accesar padres de familia registrados por la institución educativa y podran ver el material compartido especifico para cada asignatura.</p>
                            <a href="log/login.php" class="btn btn-primary"><i class="glyphicon glyphicon-download-alt"></i> Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <img src="imagenes/proyecto.png" height="100px" width="100px">
                        </div>
                        <div class="panel-body">
                            <h4>Administrador</h4>
                            <p>Este es el encargado de supervisar todas las actividades de todos los usuarios resgitrados asi como también altas y bajas.</p>
                            <a href="log/login.php" class="btn btn-primary"> <i class="glyphicon glyphicon-download-alt"></i> Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-12">
                <h2>¿Qué puedes hacer en esta plataforma?</h2>
            </div>
            <div class="col-md-12">
                <p>Puedes consultar, descargar o visualizar los archivos necesarios que faciliten el manejo del area academica.</p>

            </div>
        </div>
        <hr>
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000 //velocidad de cambio
        })

    </script>

    <?php
include('includes/footer.php');
 ?>

    <!--<div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<div>Icons made by <a href="https://www.flaticon.es/autores/popcorns-arts" title="Icon Pond">Icon Pond</a> from <a href="https://www.flaticon.es/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->

</body>

</html>
