<?php
    include "funciones/datos.php";
    include "funciones/conexion.php";
    include "funciones/funciones.php";
    include "funciones/generar_xml_charter.php";

    $flag = 1;

    $archivo_xml    = (isset($_FILES["archivo_xml"])) ? $_FILES["archivo_xml"] : null;
    $imagen_preview = (isset($_FILES["imagen_preview"])) ? $_FILES["imagen_preview"] : null;
    $imagen_icon    = (isset($_FILES["icon"])) ? $_FILES["icon"] : null;

    if ($archivo_xml and $imagen_preview and $imagen_icon) {
        $myfile = fopen($archivo_xml["tmp_name"], "r") or die("Unable to open file!");
        $xml_original = fread($myfile, filesize($archivo_xml["tmp_name"]));
        fclose($myfile);
        
        $xml_charter = generar_xml_charter($xml_original);
     
        if ($flag==1) {
            $date    = date("d-m-y-h.i");
            $hash    = hash("md5", $archivo_xml["name"]);
            $carpeta = $date."-".$hash;
            $carpeta_subida = $ruta.$date."-".$hash;
            
            copia_archivo($carpeta_subida, $hash, $date, $imagen_icon, "icon");
            copia_archivo($carpeta_subida, $hash, $date, $imagen_preview, "preview");
            
            $query = "INSERT INTO charter.archivos (nombre_carpeta, xml_original, xml_charter, fecha) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
            $stmt  = $conn->prepare($query);
            if ($stmt->execute([$carpeta, $xml_original, $xml_charter]) === false) {
                echo "ERROR";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title> Cargar datos </title>
        
        <link href="css/main.css" rel="stylesheet">
 
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <?php include "templates/header.php"; ?>
    
        <?php include "templates/menu.php"; ?>
        
        <center>            
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-5">
                        <div class="form-login">
                            <form method="post" action="cargar_datos.php" enctype="multipart/form-data">
                                <label> Seleccione el archivo .XML </label>
                                <input type="file" name="archivo_xml" required="required"/> <br><br>
                                
                                <label> Seleccione el icon </label>
                                <input type="file" name="icon" required="required"/><br><br>
                                
                                <label> Seleccione la imagen preview </label>
                                <input type="file" name="imagen_preview" required="required"/><br><br>
                                
                                <input  class="btn btn-info btn-md" type="submit" value="Subir Archivos"/>
                            </form>
                            
                            <?php if(isset($archivo_xml) and isset($imagen_preview) and isset($imagen_icon)): ?>
                                <?php if(!valida_archivo($archivo_xml["name"], "xml")): ?>
                                    <?php if(!valida_archivo($imagen_icon["name"], "jpg") or valida_archivo($imagen_icon["name"], "jpeg")): ?>
                                        <?php if(!valida_archivo($imagen_preview["name"], "jpg") or valida_archivo($imagen_preview["name"], "jpeg")): ?>
                                            <?php $flag = 0; echo $flag; ?>
                                            <span style="color: #f00;"> ERROR. El archivo XML debe tener extesión .xml y las imágenes deben tener extensión .jpg o .jpeg </span>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php else: ?>
                                    <script>
                                        alert("Los archivos se han subido correctamente");
                                    </script>
                                <?php endif ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        
        <!-- jQuery -->
        <script src="js/jquery-3.2.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>  
    </body>
</html>
