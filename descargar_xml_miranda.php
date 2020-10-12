<?php
include 'conexion.php';
include 'pg_connection/pg_connection.php';

$id=$_GET['id'];

$stmt = $conn->prepare("SELECT id, nombre, ruta, fecha FROM charter.archivo WHERE id = ?");
if ($stmt->execute([$id]) === false) {
    echo "ERROR";
}
$fila = $stmt->fetch();
$file = $fila[2];

// BORRAR
/*
$resultado = mysqli_query("SELECT id,nombre,ruta,fecha FROM archivo where id='$id'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    exit;
}
$fila = mysqli_fetch_row($resultado);

$file = $fila['2'];
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
