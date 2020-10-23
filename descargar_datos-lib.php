<?php
    include "includes/datos.php";
    include "includes/conexion.php";

    function descargar_xml($conn, $query, $id, $xml_name) {        
        $stmt = $conn->prepare($query);
        if ($stmt->execute([$id]) === false) {
            echo "ERROR";
        }
        $row = $stmt->fetch();
        $xml_string = $row[$xml_name];
        
        $xml_file_name = $xml_name.".xml";
        $doc = new DOMDocument();
        $doc->loadXML($xml_string);        
        $doc->save($xml_file_name);

        header("Content-Description: File Transfer");
        header('Content-Type: application/xml');
        header("Content-Disposition: attachment; filename=$xml_file_name");
        header('Content-Length: ' . filesize($xml_file_name));
        readfile($xml_file_name);

        unlink($xml_file_name);
    }

    $id = $_GET["id"];

    if($_GET["descargar"]=="original") {
        $query = "SELECT xml_original FROM archivos WHERE id = ?";
        descargar_xml($conn, $query, $id, "xml_original");
    }

    if($_GET["descargar"]=="charter") {
        $query = "SELECT xml_charter FROM archivos WHERE id = ?";
        descargar_xml($conn, $query, $id, "xml_charter");
    }

    if($_GET["descargar"]=="todo") {
        $query = "SELECT nombre_carpeta, xml_charter FROM archivos WHERE id = ?";
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
        header('Content-Length: ' . filesize($zipname));
        readfile($zipname);

        unlink($zipname);
    }
?>