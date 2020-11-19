<?php include "includes/sesion.php"; ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Listado de archivos cargados </title>

        <?php include "templates/head.php"; ?>
    </head>

    <body>
        <?php include "templates/header.php"; ?>
    
        <?php include "templates/menu.php"; ?>
        
        
        <div class="container">
            <center><h2>Descargar datos</h2></center> 

            <div class="input-group">
                <span class="input-group-addon">Buscar</span>
                <input id="filtrar" type="text" class="form-control" placeholder="Ingresar el parámetro...">
            </div>
            
            <br>

            <div class="panel panel-primary">
                <div class="panel-heading">         
                    <h3 class="panel-title">Lista de archivos cargados</h3>
                    <div id="loader" class="text-center"></div>
                </div>
                
                <br>
                
                <div class="outer_div"></div>
            </div>
        </div>
    
        <!-- jQuery -->
        <script src="js/jquery/jquery-3.2.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/jquery/lista_datos_cargados.js"></script>
    </body>
</html>
