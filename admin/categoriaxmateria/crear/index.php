<?php 
session_start();
if($_SESSION['rol']!='admin'){
    header("location: ../../../index.php");
    exit();
     
}
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/categoriaxmateria/CategoriaXMateriaCollector.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/php/categoriaxmateria/CategoriaXMateria.php'; 




 $coll = new CategoriaXMateriaCollector();

 if (isset($_POST["nombre"])) {
     $nombre=($_POST["nombre"]);
     if ($coll->createCategoriaxMateria($nombre)) {
         //var_dump($obj);
         header("Location: ../index.php");
         exit();
     } else {
         echo "Hubo un error al intentar crear la materia.";
     }
 } else {

 ?>
<html lang='es'>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="copyright" content="+Acceso">
        <!--Nombre de la compañia-->
        <meta name="organization" content="+Acceso"/>
        <!--Nombre de la Organizacion-->
        <meta name="generator" content="Notepad++">
        <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
        <meta name="name" content="Admin - Lugares">
        <meta name="description" content="Pagina de inicio de administración de lugares.">
        <meta name="author" content="Guillermo Bernal">
        <!-- http://getbootstrap.com/css/#overview-mobile -->
        <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no'>
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
        <title>+Acceso</title>
        <!-- http://getbootstrap.com/getting-started/ -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <link rel="stylesheet" href="/admin/css/sb-admin.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </head>

    <body>

        <div id="wrapper">

            
            <div id="page-wrapper">
                <div class="container-fluid">

                    <form action="index.php" method="post">

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
    
                        <button type="submit" class="btn btn-default">Crear</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

    </html>
<?php
} ?>
