 <!DOCTYPE html>
<html>
 <head>
 <title>Menu</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap Core CSS -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<body>
<header>
    <center><img src="imagenes/Cintillo Julio 2017.png" ><br><td colspan="" align="right">
 </header><br><br><br>
 
 <div class="col-md-12" id='menu'>

        <nav class="navbar navbar-default">
              <div class="container-fluid">
                
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">CHARTER</a>
                </div>

                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                <li class="dropdown">
          <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-upload"></span> Subir Archivos <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo2" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="subir_imagen.php">Subir Img-Preview</a></li>
              <li><a href="cargar_imagen_icon.php">Subir Img-Icon</a></li>
              <li><a href="cargar_xml.php">Subir Xml del VRSS-1</a></li>
              
            </ul>
          </div>
        </li>


          <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-refresh"></span> Procesos <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo1" style="height: 0px;">
            <ul class="nav nav-list">
             <li><a href="lista_xml_cargados.php">Generar XML</a></li>
            </ul>
          </div>
        </li>
     

      

         <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-download-alt"></span> Descargas <span class="caret"></span>
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
          <span class="glyphicon glyphicon-log-out"></span> Salir <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo4" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="logout.php?salir=cerrar"> <span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
            </ul>
          </div>
        </li>
             
                </div>
              </div>
        </nav>
    </div>

 <br><br><br>
    <center><img src="imagenes/ABAE-CHARTER3.png" ></center>


</head>
<!-- jQuery -->
    <script src="jquery-3.2.1/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>