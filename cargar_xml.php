<?php

//echo $status=$_REQUEST['status'];

?>

<?php

//include 'conexion.php';
include 'connection/connection.php';

$archivo = (isset($_FILES['archivo'])) ? $_FILES['archivo'] : null;
if ($archivo) {
   $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
   $extension = strtolower($extension);
   $extension_correcta = ($extension == 'xml');
     if ($extension_correcta) {
       $date  = date("d_m_y_h.i/");
       $nombre = $archivo['name'];
       //$carpeta = '/xampp/htdocs/charter.abae.gob.ve/XML_Miranda/'.$date;
       $carpeta = 'XML_Miranda/'.$date;
    if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
       }
       $ruta_destino_archivo = $carpeta .$nombre;
       $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
       $ruta = 'XML_Miranda/'.$date.$nombre;
       $fecha = time();
       $fecha2 = date("d/m/Y",$fecha);
                    
  //mysqli_select_db('charter') or die('No pudo selecionar la BD');
  //Creamos nuestra consulta sql
   //$query="insert into archivo(nombre,ruta,fecha) value ('$nombre','$ruta','$fecha2')"; // BORRAR
   //$db      = 'charter';
   //Ejecutamos la consutla
   //mysqli_query($query,$conn) or die('Error al procesar consulta: ' . mysqli_error());
         
    $query = "INSERT INTO charter.archivo (nombre, ruta, fecha) VALUES (?, ?, ?)";
    $stmt  = $conn->prepare($query);
    if ($stmt->execute([$nombre, $ruta, $fecha2]) === false) {
        echo "ERROR";
    }

    // BORRAR
    /*
   if (mysqli_query($conn, $query)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    */
    
    }
    
}


?>
 <!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Subir XML </title>
 <!-- Bootstrap Core CSS -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
 <?php
    include 'menu.php';
?>

    <center><img src="imagenes/Horizontal Fondo Blanco.png" >
    <br><br><br>


	 <div class="container">
    <div class="row">
    <div class="col-md-offset-4 col-md-5">
    <div class="form-login">
    <form method="post" action="cargar_xml.php" enctype="multipart/form-data">
    <img src="imagenes/flecha_ascenso2.jpg" alt="Archivos"><br><br>
      <label> Seleccione el Archivo a Cargar </label><br><br>
      <input type="file" name="archivo" required="required" /><br><br>
      <input  class="btn btn-info btn-md" type="submit" value="Subir Archivo" />
     </form><br><br>
        <?php if (isset($archivo)): ?>
       <?php if (!$extension_correcta): ?>
         <span style="color: #f00;"> La extensión es incorrecta, el archivo debe ser xml . </span> 
       <?php elseif (!$archivo_ok): ?>
         <span style="color: #f00;"> Error al intentar subir el archivo. </span>
      <?php else: ?>
         <strong> El archivo ha sido subido correctamente. </strong>
         <script>
function redireccionar(){window.location="cargar_xml.php";} 
setTimeout ("redireccionar()", 5000);
</script>
         <br />
         <?php endif ?>
   <?php endif; ?>
     </body>
    </center>
 </div>


    <!-- jQuery -->
    <script src="jquery-3.2.1/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <!-- js -->
    <script src="js/main.js"></script>

</body>
</html>
