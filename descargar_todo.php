<?php
    include "funciones/datos.php";
    include "funciones/conexion.php";

    $id = $_GET["id"];

    $query = "SELECT nombre_carpeta, xml_charter FROM charter.archivos WHERE id = ?";
    $stmt = $conn->prepare($query);
    if ($stmt->execute([$id]) === false) {
        echo "ERROR";
    }
    $row = $stmt->fetch();
    $carpeta = $row["nombre_carpeta"];
    $xml_charter = $row["xml_charter"];

    $zipname = "charter.zip";
    $zip = new ZipArchive;
    $res = $zip->open($zipname, ZipArchive::CREATE);
    if ($res === TRUE) {
        $ruta_completa = $ruta.$carpeta."/";
        if($handle = opendir($ruta_completa)) {
            while(false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $zip->addFile($ruta_completa.$entry);
                }
            }
            $zip->addFromString($ruta_completa."metadata.xml", $xml_charter);
            $zip->close();
            closedir($handle);
        }
    }
    else {
        echo "ERROR AL CREAR EL ARCHIVO ZIP";
    }

    header("Content-Description: File Transfer");
    header('Content-Type: application/zip');
    header("Content-Disposition: attachment; filename=$zipname");
    header("Expires: 0");
    header("Cache-Control: must-revalidate");
    header("Pragma: public");
    header('Content-Length: ' . filesize($zipname));
    readfile($zipname);

    unlink($zipname);
?>