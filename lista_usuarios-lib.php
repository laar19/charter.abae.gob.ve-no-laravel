<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/main.css" rel="stylesheet">

<?php
    include "includes/conexion.php";

	$action = (isset($_REQUEST["action"])&& $_REQUEST["action"] !=NULL)?$_REQUEST["action"]:"";
	if($action == "ajax"){
		include "includes/pagination.php"; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST["page"]) && !empty($_REQUEST["page"]))?$_REQUEST["page"]:1;
		$per_page = 5; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
        $query = "SELECT count(*) AS numrows FROM usuarios";
        $stmt = $conn->prepare($query);
        if ($stmt->execute() === false) {
            echo "ERROR";
        }
        $row = $stmt->fetch();
        $numrows = $row["numrows"];
        
		$total_pages = ceil($numrows/$per_page);
		$reload = "lista_usuarios.php";
		//consulta principal para recuperar los datos
        $query = "SELECT * FROM usuarios ORDER BY id DESC OFFSET ? LIMIT ?";
        $stmt = $conn->prepare($query);
        if ($stmt->execute([$offset, $per_page]) === false) {
            echo "ERROR";
        }
		
		if ($numrows>0){
			?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre de usuario</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody class="buscar">
                    <?php
                        while ($row=$stmt->fetch()) {
                            $id        = $row["id"];
                            $username  = $row["username"];
                            $rol       = $row["rol"];
				    ?>

                    <tr>
                        <th><?php echo $username; ?></th>
                        <th><?php echo $rol; ?></th>
                        
                        <th>
                            <form action method="GET">
                                <a href="eliminar_usuario-lib.php?id=<?php echo $id;?>" class="fa fa-trash">
                                    Eliminar
                                </a>
                            </form>
                        </th>
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
