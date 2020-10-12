<link href="css/estilo.css" rel="stylesheet">
<?php
    include 'pg_connection/pg_connection.php';

    // BORRAR
    /*
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'charter');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    */

	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		include 'pagination.php'; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 5; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
        $stmt = $conn->prepare("SELECT count(*) AS numrows FROM charter.imagen");
        if ($stmt->execute() === false) {
            echo "ERROR";
        }
        $row = $stmt->fetch());
        $numrows = $row['numrows'];
        
        // BORRAR
        /*
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM imagen ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
        */
        
		$total_pages = ceil($numrows/$per_page);
		$reload = 'lista_imagenes_cargadas.php';
		//consulta principal para recuperar los datos
        $stmt = $conn->prepare("SELECT * FROM charter.imagen ORDER BY id DESC LIMIT ?, ?");
        if ($stmt->execute([$offset, $per_page]) === false) {
            echo "ERROR";
        }
        
		//$query = mysqli_query($con,"SELECT * FROM imagen  order by id desc LIMIT $offset,$per_page"); // BORRAR
		
		if ($numrows>0){
			?>
		<table class="table table-hover">
			  <thead>
				<tr>
				<th>Id</th>       
                <th>Nombre de la Imagen</th>
                <th>Fecha de Carga</th>
                <th>Ubicacion del Archivo</th>
                <th>Descargar Archivo</th>
				</tr>
			</thead>
			<tbody class="buscar">
			<?php
            while ($row = $stmt->fetch()) {
			//while($row = mysqli_fetch_array($query)){ // BORRAR

			$id_img=$row['id'];
				?>

				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['fecha'];?></td>
					<td><?php echo $row['ruta'];?></td>
					<td width='150'><form action method='GET'><a href='descargar_imagenes.php?id=<?php echo $id_img;?>' class='glyphicon glyphicon-floppy-save' > Descargar</a></td>  
         </tr>  
				</tr>
				<?php
			}
			?>
			</tbody>

		</table>
		<div class="table-pagination pull-right">
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
		</div>
		
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}
	}
?>
