<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Educacion Online -User</title>
    <!--  CSS de Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../../js/jquery-example.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <link href="..//../css/personalizado.css" rel="stylesheet">
    <link href="../../css/starter-template.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="../../assets/images/logo_navegador.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <!-- Customyles for our template -->
    <link rel="stylesheet" href="../../assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="../../assets/css/style.css">
    </head>

        <body>
<!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="../index.php">
                    <img src="../../assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                     <ul class="nav navbar-nav side-nav">
            <li >
                <a href="../persona/index.php">
                    
                    Personas</a>
            </li>

            <li >
                <a href="../usuario/index.php">
                    
                    Usuarios</a>
            </li>
            <li >
                <a href="../alumno/index.php">
                    
                    Alumnos</a>
            </li>
            <li >
                <a href="../contenido/index.php">
                   
                    Contenido</a>
            </li>
            <li >
                <a href="../categoriaxmateria/index.php">
                    
                    Categoria Por Materias</a>
            </li>
            <li >
                <a href="../ayudante/index.php">
                    
                    Ayudantes</a>
            </li>
                     <li >
                <a href="../materia/index.php">
                   
                    Materias</a>
                          </li>
            <li >
                <a href="reconocimiento/index.php">
                    
                    Reconocimiento</a>
            </li>
            <li >
                <a href="../contactenos/index.php">
                    
                    Contactenos</a>
            </li>
        </ul>
            </div>
        <!--/.nav-collapse -->
         <div class="row">    
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>RECONOCIMIENTO</span>
       </strong>
         <a href="../index.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="insertar.php" class="btn btn-info">AGREGAR RECONOCIMIENTO</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>
                <th>DESCRIPCION</th>
            </tr>
        </thead>
        <?php

            include_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/reconocimiento/Reconocimiento.php';
            include_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/reconocimiento/ReconocimientoCollector.php';

            $cole= new ReconocimientoCollector();


            foreach($cole->showReconocimientos() as $datos)
            {
                ?>

           <tr>
         <td class=""><?php echo "".$datos->getIdreconocimiento(); ?></td>
         <td class=""><?php echo "".$datos->getDescripcion(); ?></td>

        <td><a class="link" href="editar.php?id=<?php echo $datos->getIdreconocimiento(); ?>">Editar</a></td>
        <td><a class="link" href="eliminar.php?id=<?php echo $datos->getIdreconocimiento(); ?>">Eliminar</a></td><br>
</tr>
            
<?php
}

?>
    </table>
    </div>
    </div>
  </div>
</div>


        </div>
    </div>
              
    </body>
    