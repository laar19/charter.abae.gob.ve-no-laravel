<?php
    function valida_archivo($archivo_name, $extension_archivo) {
        $extension = pathinfo($archivo_name, PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        $extension_correcta = ($extension == $extension_archivo);
        
        return $extension_correcta;
    }

    function copia_archivo($carpeta, $hash, $date, $archivo, $nombre) {
        if (!file_exists($carpeta)) {
            //mkdir($carpeta, 0777, true); // default, widest possible access
            mkdir($carpeta, 0755, true); // Everything for owner, read and execute for others
        }
       
        $ruta_destino_archivo = $carpeta."/".$date."-".$hash."-".$nombre."-".$archivo["name"];
        $upload = move_uploaded_file(strval($archivo["tmp_name"]), strval($ruta_destino_archivo));
        if(!$upload) {
            echo "<script>
                        alert('Error al subir la imágen');
                </script>";
        }
    }

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
?>