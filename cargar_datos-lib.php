<?php
    include "includes/datos.php";
    include "includes/conexion.php";
    include "includes/generar_xml_charter.php";

    function copia_archivo($carpeta_subida, $nombre, $date, $archivo, $tipo) {
        if (!file_exists($carpeta_subida)) {
            //mkdir($carpeta, 0777, true); // default, widest possible access
            mkdir($carpeta_subida, 0755, true); // Everything for owner, read and execute for others
        }
       
        $ruta_destino_archivo = $carpeta_subida."/".$date."-".$nombre."-".$tipo."-".$archivo["name"];
        $upload = move_uploaded_file(strval($archivo["tmp_name"]), strval($ruta_destino_archivo));
        if(!$upload) {
            echo "<script>
                        alert('Error al subir la imágen');
                </script>";
        }
    }

    $archivo_xml    = (isset($_FILES["archivo_xml"])) ? $_FILES["archivo_xml"] : null;
    $imagen_icon    = (isset($_FILES["icon"])) ? $_FILES["icon"] : null;
    $imagen_preview = (isset($_FILES["imagen_preview"])) ? $_FILES["imagen_preview"] : null;

    if ($archivo_xml and $imagen_preview and $imagen_icon) {
        $myfile = fopen($archivo_xml["tmp_name"], "r") or die("Unable to open file!");
        $xml_original = fread($myfile, filesize($archivo_xml["tmp_name"]));        
        fclose($myfile);
        
        $xml_charter = generar_xml_charter($xml_original);
        
        $date           = date("d-m-y-h.i");
        $productId      = simplexml_load_file($archivo_xml["tmp_name"]) or die("Error: Cannot create object");
		$nombre         = $productId->productId;
        $carpeta_subida = $ruta.$date."-".$nombre;
        
        copia_archivo($carpeta_subida, $nombre, $date, $imagen_icon, "icon");
        copia_archivo($carpeta_subida, $nombre, $date, $imagen_preview, "preview");
            
        $query = "INSERT INTO archivos (nombre_carpeta, xml_original, xml_charter, fecha) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
        $stmt  = $conn->prepare($query);
        if ($stmt->execute([$date."-".$nombre, $xml_original, $xml_charter]) === false) {
            echo "ERROR";
        }
        else {
            echo "<script>
                    alert('Datos cargados correctamente');
                    location.href = 'cargar_datos.php';
                </script>";
        }
    }
?>
