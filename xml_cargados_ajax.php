<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/main.css" rel="stylesheet">

<?php
    include 'connection/connection.php';

	// BORRAR
    # conectare la base de datos
    /*
    $con=@mysqli_connect('localhost', 'root', 'root', 'charter');
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
        $query = "SELECT count(*) AS numrows FROM charter.xml_original";
        $stmt = $conn->prepare($query);
        if ($stmt->execute() === false) {
            echo "ERROR";
        }
        $row = $stmt->fetch();
        $numrows = $row['numrows'];
        
        // BORRAR
        /*
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM archivo ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
        */
        
		$total_pages = ceil($numrows/$per_page);
		$reload = 'lista_xml_cargados.php';
		//consulta principal para recuperar los datos
        $query = "SELECT * FROM charter.xml_original ORDER BY id DESC OFFSET ? LIMIT ?";
        $stmt = $conn->prepare($query);
        if ($stmt->execute([$offset, $per_page]) === false) {
            echo "ERROR";
        }
        
		// $query = mysqli_query($con,"SELECT * FROM archivo  order by id desc LIMIT $offset,$per_page"); // BORRAR
		
		if ($numrows>0){
			?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>       
                        <th>Nombre del Archivo</th>
                        <th>Fecha de Carga</th>
                        <th>Nombre de la Carpeta</th>
                        <th>Descargar</th>
                        <th>Generar</th>
                    </tr>
                </thead>
                <tbody class="buscar">
                    <?php
                        while ($row = $stmt->fetch()) {
                            //while($row = mysqli_fetch_array($query)){ // BORRAR
                            $id_xml=$row['id'];
                            $ruta  = $row['ruta'];
                            $ruta_desglo = explode(" ", $ruta);
                            $resultados= substr($ruta_desglo[0] , 0 , 11 ) ;
				    ?>

                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['nombre'];?></td>
                        <td><?php echo $row['fecha'];?></td>
                        <td><?php echo $resultados;?></td>
                        <td width='150'>
                            <form action method='GET'>
                                <a href='descargar_xml_miranda.php?id=<?php echo $id_xml;?>' class='glyphicon glyphicon-floppy-save' > XML_VRSS1</a>
                            </form>
                        </td>
                        <td width='150'>
                            <form action method='GET'><a href='generar_xml.php?id=<?php echo $id_xml;?>&status=0' name=id class='glyphicon glyphicon-repeat' > XML_COS2</a>
                            </form>
                        </td>
                    </tr>
				    <?php } ?>
                </tbody>
            </table>
            <div class="table-pagination pull-right">
                <?php echo paginate($reload, $page, $total_pages, $adjacents); ?>
            </div>
            <?php
                }
                else {
			?>
			<div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
                }
            }
            ?>
