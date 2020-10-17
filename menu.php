<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
     
        <link href="css/main.css" rel="stylesheet">
        
        <!-- Custom Fonts -->
        <!-- BORRAR -->
        <!--link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <center><img src="img/cintillo-julio-2017.png" ><br><td colspan="" align="right"></td></center>
        </header><br><br><br>
 
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
                        <a class="navbar-brand" href="menu2.php">CHARTER</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                                        <span class="fa fa-upload"></span> Subir Archivos <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                        <ul class="nav nav-list">
                                            <li><a href="subir_imagen.php">Subir Preview</a></li>
                                            <li><a href="cargar_imagen_icon.php">Subir Icon</a></li>
                                            <li><a href="cargar_datos.php">Subir Xml del VRSS1</a></li>
                                        </ul>
                                    </div>
                                </li>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
                                    <span class="fa fa-retweet"></span> Procesos <span class="caret"></span>
                                </a>
                                <div class="collapse" id="toggleDemo1" style="height: 0px;">
                                    <ul class="nav nav-list">
                                        <li><a href="lista_xml_cargados.php">Generar XML</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
                                    <span class="fa fa-download"></span> Desacargas <span class="caret"></span>
                                </a>
                                <div class="collapse" id="toggleDemo3" style="height: 0px;">
                                    <ul class="nav nav-list">
                                        <li><a href="lista_imagenes_cargadas.php">Imágenes Cargadas</a></li>
                                        <li><a href="lista_xml_generados.php">Descargar XML para COS2</a></li>
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

        <br><br><br><br><br><br><br><br><br>

        <!-- jQuery -->

        <!-- BORRAR -->
        <!--script src="js/jquery.js"></script-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->

        <!-- BORRAR -->
        <!--script src="bootstrap-3.3.7/js/bootstrap.min.js"></script-->
        <script src="//cdn.jsdelivr.net/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>