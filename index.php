<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="imagenes/ittla.ico" type="image/x-icon">  
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
                <div class="fill" style="background-image:url('imagenes/homebanner.png');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imagenes/certificacion.png');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imagenes/libre_humo.png');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('imagenes/certificacion.png');"></div>
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
                     El repositorio conserva y da acceso a publicaciones academicas e investigaciones del Instituto Tecnologico de Tlalnepantla. Se incluye textos completos de artículos, libros digitales, tesis de grado, documentos, materiales docentes, presentaciones, informes entre otros. 
                      
                      <br><br>
                      
                      Ademas sirve de apoyo a nuestros estudiantes como refuerzo de temas vistos en clase con material docente.
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
                        <img src="imagenes/profesores.png">
                    </div>
                    <div class="panel-body">
                        <h4>Docentes</h4>
                        <p>Esta seccion es para los docentes en investigadores podran subir material de las clases que se imparten en el aula e investigaciones.</p>
                        <a href="log/login.php" class="btn btn-primary"><i class="glyphicon glyphicon-download-alt"></i> Entrar</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img src="imagenes/estudiantes.png">
                    </div>
                    <div class="panel-body">
                        <h4>Estudiantes</h4>
                        <p>Esta seccion solo padran accesar alumnos registrados y podran ver el material compartido especifico para cada asignatura.</p>
                        <a href="log/login.php" class="btn btn-primary"><i class="glyphicon glyphicon-download-alt"></i> Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img src="imagenes/admin.png">
                    </div>
                    <div class="panel-body">
                        <h4>Administrador</h4>
                        <p>Esta seccion es solo para el administrador, este es el encargado de administrar y supervisar todas las actividades de todos los usuarios resgitrados.</p>
                        <a href="log/login.php" class="btn btn-primary"> <i class="glyphicon glyphicon-download-alt"></i> Entrar</a>
                    </div>
                </div>
            </div>          
        </div>
        </div>
        <!-- /.row -->
        <!-- Features Section -->
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

</body>
</html>