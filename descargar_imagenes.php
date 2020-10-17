<?php
    include "funciones/conexion/conexion.php";

    $id=$_GET["id"];

    $query = "SELECT id, nombre, ruta, fecha FROM charter.imagen WHERE id = ?";
    $stmt = $conn->prepare($query);
    if ($stmt->execute([$id]) === false) {
        echo "ERROR";
    }
    $fila = $stmt->fetch();
    $file = $fila[2];

    // BORRAR
    /*
    $resultado = mysqli_query("SELECT id,nombre,ruta,fecha FROM imagen where id="$id"");
    if (!$resultado) {
        echo "No se pudo ejecutar la consulta: " . mysqli_error();
        exit;
    }
    $fila = mysqli_fetch_row($resultado);
    /*
    echo $fila[0]; // 42
    echo $fila[2]; // el valor de email
    */
    $file = "/xampp/htdocs/charter.abae.gob.ve/".$fila[2]; // OJO CON ESTO

    if (file_exists($file)) {
        header("Content-Description: File Transfer");
        header("Content-Type: image/octet-stream");
        header("Content-Disposition: attachment; filename="".basename($file).""");
        header("Expires: 0");
        header("Cache-Control: must-revalidate");
        header("Pragma: public");
        header("Content-Length: " . filesize($file));
        readfile($file);
        exit;
    }

    echo $file;
?>
