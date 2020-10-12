<?php


 $status=$_REQUEST['status'];

	

// include 'conexion.php'; // BORRAR
include 'connection/connection.php';
$id=$_GET['id'];

$stmt = $conn->prepare("SELECT id, nombre, ruta, fecha FROM charter.archivo WHERE id = ?");
if ($stmt->execute([$id]) === false) {
    echo "ERROR";
}
$fila = $stmt->fetch();
$file = $fila[2];

// $query="SELECT id,nombre,ruta,fecha FROM archivo where id='$id'"; // BORRAR
   //$db      = 'charter';
   //Ejecutamos la consutla
   //mysqli_query($query,$conn) or die('Error al procesar consulta: ' . mysqli_error());

// BORRAR
/*
   if (mysqli_query($conn, $query)) {
      echo "New record created successfully";
    } else {
	  echo "Error: " . $query . "<br>" . mysqli_error($conn);
	  echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    }
*/

/*$resultado = mysqli_query("SELECT id,nombre,ruta,fecha FROM archivo where id='$id'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    exit;
}*/
//$fila = mysqli_fetch_row($resultado);

// BORAR
/*
$fila = mysqli_fetch_row($query);

$file = $fila['2'];
*/

?>
 <!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title> Generar XML </title>
 <!-- Bootstrap Core CSS -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
   <?php
  include 'menu.php';
  ?>
	 
	 <!-- Navigation -->

	 <div class="container">
     <div class="row text-center">
				<div id="form" name="form" class="col-md-4">
				<center>
					<select id="Instrument_shortName" name="Instrument_shortName" class="form-control" onchange="mostrar_select(value)"  >
					<OPTION VALUE="1">Archived</OPTION>
					<OPTION VALUE="2">Realtime</OPTION>
					<OPTION VALUE="0" SELECTED>Seleccionar...</OPTION>
					</select>
				</center>
				 	<input type="hidden" name="status"  id="status"  value="<?php echo $status; ?>"/>
				</div>
				<br><br><br>
			    <div id="PAN" class="col-md-6 col-sm-2 hero-feature" style='display:none;'>
				<div class="form-login">
				    <img src="imagenes/vrss1_ xml.png" alt="status">
				    <div class="caption">
				       
				         <p>
				            <!--<a href="leer_crear_cos2_vrss1.php?operationalMode=PAN&status=<?php echo $status; ?>" class="btn btn-success" id="Generar"  >Generar</a> -->

					<br><br><a class="btn btn-success" id="PAN_BUTTON" onclick="Generar('<?php echo $status; ?>','<?php echo $id; ?>')" >Generar</a> 
				        </p>
				    </div>
				</div>
			    </div> 			                     
		   </div>
	<br><br><br>
	</div>

<div id="mostrar">
</div>


    <!-- jQuery -->
    <script src="jquery-3.2.1/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <!-- js -->
    <script src="js/main.js"></script>

</body>
</html>
