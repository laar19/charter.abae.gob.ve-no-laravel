<?php
include 'conexion.php';

$id=$_GET['id'];

$resultado = mysqli_query("SELECT id,nombre,ruta,fecha FROM archivo where id='$id'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    exit;
}
$fila = mysqli_fetch_row($resultado);

$file = $fila['2'];

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
