<?php
include 'conexion.php';
include 'pg_connection/pg_connection.php';

$archivo = (isset($_FILES['archivo'])) ? $_FILES['archivo'] : null;
if ($archivo) {
   $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
   $extension = strtolower($extension);
   $extension_correcta = ($extension == 'jpeg' or $extension == 'jpg');
     if ($extension_correcta) {
       $date  = date("d_m_y_h.i_");
       $nombre = "preview.jpg";
       $carpeta = '/xampp/htdocs/CHARTER V2.0/preview_' .$date.'/';
    if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
       }
       $ruta_destino_archivo = $carpeta .$nombre;
       $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
       $ruta = $ruta_destino_archivo;
       $fecha = time();
       $fecha2 = date("d/m/Y",$fecha);
            
  //Creamos nuestra consulta sql
   //$query="insert into imagen(nombre,ruta,fecha) value ('$nombre','$ruta','$fecha2')"; // BORRAR
    $query = "INSERT INTO charter.imagen (nombre, ruta, fecha) VALUES (?, ?, ?)";
    $stmt  = $conn->prepare($query);
    if ($stmt->execute([$nombre, $ruta, $fecha2]) === false) {
        echo "ERROR";
    }
   //Ejecutamos la consutla
   mysqli_query($query) or die('Error al procesar consulta: ' . mysqli_error());
    
    }

}

?>



 <!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Subir Imagen </title>
 <!-- Bootstrap Core CSS -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <!-- Custom Fonts -->
   <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">-->
</head>
<body>
  <header>
        <center><img src="imagenes/Cintillo de Gobierno 2016.JPG" ><br><td colspan="" align="right"> 
    <!--<span class="glyphicon glyphicon-log-out"></span><a href="logout.php?salir=cerrar">Salir</a></td>-->
    </center>
      </header>

  <br><br><br>
      <!--inicio del menu ilustrativo del Administrador-->
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
                  <a class="navbar-brand" href="menu.php">CHARTER</a>
                </div>

                
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                <li class="dropdown">
          <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-folder-open"></span> Reportes <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo1" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="lista_imagenes_cargadas.php">Imagenes Cargadas</a></li>
              <li><a href="lista_xml_cargados.php">Xml Cargados</a></li>
            </ul>
          </div>
        </li>
     

       <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-upload"></span> Subir Imagenes <span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo2" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="cargar_imagen_preview.php">Subir Preview</a></li>
              <li><a href="cargar_imagen_icon.php">Subir Icon</a></li>
              
            </ul>
          </div>
        </li>

         <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-upload"></span> XML<span class="caret"></span>
          </a>
          <div class="collapse" id="toggleDemo3" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="cargar_xml.php">Subir Xml</a></li>
              <li><a href="generaR_xml.php">Generar Xml</a></li>
              
            </ul>
          </div>
        </li>

        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo4" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-log-out"></span> Salir<span class="caret"></span>
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


    <center><img src="imagenes/abae logo.png" >
    <br><br><br>
   
   
    <div class="container">
    <div class="row">
    <div class="col-md-offset-4 col-md-5">
    <div class="form-login">
    <form method="post" action="menu_cam6.php" enctype="multipart/form-data">
    <img src="imagenes/flecha_ascenso2.jpg" alt="Archivos"><br><br>
    <label> Seleccione la imagen a Cargar </label><br><br>
    <input type="file" name="archivo" required="required" /><br><br>
    <input  class="btn btn-warning btn-md" type="submit" value="Subir Imagen Icon" />
    </form><br><br>
    <?php if (isset($archivo)): ?>
    <?php if (!$extension_correcta): ?>
    <span style="color: #f00;"> La extensión es incorrecta, el archivo debe ser jpeg o jpg. </span> 
    <?php elseif (!$archivo_ok): ?>
    <span style="color: #f00;"> Error al intentar subir la imagen. </span>
    <?php else: ?>
    <strong> La imagen ha sido subido correctamente. </strong>
    <script>
    function redireccionar(){window.location="menu_cam6.php";} 
setTimeout ("redireccionar()", 3000);
    </script>
     <br />
    <?php endif ?>
    <?php endif; ?>
    </body>
    </center>
    <div class="container">
    <div class="row">
    <div class="col-md-offset-4 col-md-5">
    <center><br><br><br>
    <a href="menu.php" class="btn btn-primary">Ir al Menu Principal</a>
    </center><br>
    </div>
    </div></div></div>
</div>
</div>
</div>
</center>

    <!-- jQuery -->
    <script src="jquery-3.2.1/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <!-- js -->
    <script src="js/main.js"></script>

</body>
</html>
