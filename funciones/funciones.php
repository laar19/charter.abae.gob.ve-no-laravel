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
       
        $ruta_destino_archivo = $carpeta."/".$date."-".$hash."-".$nombre;
        $upload = move_uploaded_file(strval($archivo["tmp_name"]), strval($ruta_destino_archivo));
        if(!$upload) {
            echo "<script>
                        alert('Error al subir la imágen');
                </script>";
        }
        
        return $ruta_destino_archivo;
    }
?>