<?php include_once "funciones/sesion.php"; ?>

<html>
    <head>
        <title>Menu</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <link href="css/main.css" rel="stylesheet">
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <center><img src="img/cintillo-julio-2017.png"></center>
        </header>
        
        <br><br><br>
 
        <div class="col-md-12" id="menu">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <li>
                                    <table>
                                        <td>
                                            <center><img src="img/abae-charter3-otra.png"></center>
                                        </td>
                                        <td>
                                            <a class="navbar-brand" href="menu.php">CHARTER</a>
                                        </td>
                                    </table>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                                        <span class="fa fa-upload"></span> Subir Archivos <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                        <ul class="nav nav-list">
                                            <li><a href="cargar_datos.php">Cargar datos</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
                                        <span class="fa fa-retweet"></span> Procesos <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="toggleDemo1" style="height: 0px;">
                                        <ul class="nav nav-list">
                                            <li><a href="lista_datos_cargados.php">Datos cargados</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
                                        <span class="fa fa-download"></span> Gestión de usuarios <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="toggleDemo3" style="height: 0px;">
                                        <ul class="nav nav-list">
                                            <li><a href="gestionar_usuarios.php">Gstionar usuarios</a></li>
                                        </ul>
                                    </div>
                                </li>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#toggleDemo4" data-parent="#sidenav01" class="collapsed">
                                    <span class="fa fa-times-circle"></span> Salir<span class="caret"></span>
                                </a>
                                <div class="collapse" id="toggleDemo4" style="height: 0px;">
                                    <ul class="nav nav-list">
                                        <li><a href="logout.php?salir=cerrar">Log out</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <!-- jQuery -->
        <script src="js/jquery-3.2.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>