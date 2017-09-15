<?php
//$cu = new usuarioColector();
//$usuario = AutenticarClass::verUsuarioConectado($cu, $_SESSION);
session_start();
/*if($_SESSION["rol"]!="admin"){
    header("location: ../index.php");
    exit();
}*/


    ?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Educacion Online -User</title>
    <!--  CSS de Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../js/jquery-example.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/personalizado.css" rel="stylesheet">
    <link href="../css/starter-template.css" rel="stylesheet">

    <link rel="icon" type="../image/png" href="../assets/images/logo_navegador.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="../assets/css/style.css">
    

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="sitioweb/index.php">
                    <img src="../assets/images/logo.png" alt="Techro HTML5 template"></a>
            
    </div>
    <!-- Top Menu Items -->

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
                   <ul class="nav navbar-nav side-nav">
            
            <li >
                <a href="persona/index.php">
                    
                    Personas</a>
            </li>

            <li >
                <a href="usuario/index.php">
                    
                    Usuarios</a>
            </li>
            <li >
                <a href="alumno/index.php">
                    
                    Alumnos</a>
            </li>
            <li >
                <a href="contenido/index.php">
                   
                    Contenido</a>
            </li>
            <li >
                <a href="categoriaxmateria/index.php">
                    
                    Categoria Por Materias</a>
            </li>
            <li >
                <a href="ayudante/index.php">
                    
                    Ayudantes</a>
            </li>
                     <li >
                <a href="materia/index.php">
                   
                    Materias</a>
                          </li>
            <li >
                <a href="reconocimiento/index.php">
                    
                    Reconocimiento</a>
            </li>
            <li >
                <a href="contactenos/index.php">
                    
                    Contactenos</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<header id="head">
        <div class="container">
             <div class="heading-text">
                            <h1 class="animated flipInY delay1">Comienza Tu Educación En Línea</h1>
                            <p>Realiza tu voluntariado o capacitate con los mejores.</p>
                            <p> Tu oportunidad de ingresar a una universidad empieza ahora.</p>
                        </div>

                    <div class="fluid_container">
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="../assets/images/slides/thumbs/img1.jpg" data-src="../assets/images/slides/img1.jpg">
                            <h2>We develop.</h2>
                        </div>
                        <div data-thumb="../assets/images/slides/thumbs/img2.jpg" data-src="../assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="../assets/images/slides/thumbs/img3.jpg" data-src="../assets/images/slides/img3.jpg">
                        </div>
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
        </div>
    </header>



    </body>
    </html>
