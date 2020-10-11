<?php
include 'conexion.php';

$id=$_GET['id'];

$resultado = mysqli_query("SELECT id,nombre,ruta,fecha FROM xml where id='$id'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    exit;
}
$fila = mysqli_fetch_row($resultado);

$file = '/xampp/htdocs/charter.abae.gob.ve/'.$fila['2'].$fila['1'];

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
