<?php
    // include 'conexion.php'; // BORRAR
    include 'connection/connection.php';

    $id=$_GET['id'];

    $query = "SELECT id, nombre, ruta, fecha FROM charter.xml_generado WHERE id = ?";
    $stmt = $conn->prepare($query);
    if ($stmt->execute([$id]) === false) {
        echo "ERROR";
    }
    $fila = $stmt->fetch();
    //$file = '/xampp/htdocs/charter.abae.gob.ve/'.$fila['2'].$fila['1']; // OJO CON ESTO
    $file = '/xampp/htdocs/charter.abae.gob.ve/'.$fila[2].$fila[1]; // OJO CON ESTO

    // BORRAR
    /*
    $resultado = mysqli_query("SELECT id,nombre,ruta,fecha FROM xml where id='$id'");
    if (!$resultado) {
        echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
        exit;
    }
    $fila = mysqli_fetch_row($resultado);

    $file = '/xampp/htdocs/charter.abae.gob.ve/'.$fila['2'].$fila['1'];
    */

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/xml');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }

    echo $file;
?>
