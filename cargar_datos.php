<?php
    include "funciones/conexion/conexion.php";
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
     
        if ($flag == 1) {
            $ruta    = "IMAGENE_SUBIDAS/";
            $date    = date("d-m-y-h.i");
            $hash    = hash("md5", $archivo_xml["name"]);
            $carpeta = $ruta.$date."-".$hash;
            
            $ruta_icon       = copia_archivo($carpeta, $hash, $date, $imagen_icon, "icon.jpg");
            $ruta_preview    = copia_archivo($carpeta, $hash, $date, $imagen_preview, "preview.jpg");
            
            $query = "INSERT INTO charter.archivo (nombre_carpeta, xml_original, xml_charter, ruta_icon, ruta_preview, fecha) VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP)";
            $stmt  = $conn->prepare($query);
            if ($stmt->execute([$carpeta, $xml_original, $xml_charter, $ruta_icon, $ruta_preview]) === false) {
                echo "ERROR";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title> Subir XML </title>
 
        <!-- Bootstrap Core CSS -->
        <!-- BORRAR -->
        <!--link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <link href="css/main.css" rel="stylesheet">
    </head>
 
    <?php include "menu.php"; ?>
    
    <body>
        <center>
            <!--img src="img/horizontal-fondo-blanco.png" -->
            
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-5">
                        <div class="form-login">
                            <form method="post" action="cargar_datos.php" enctype="multipart/form-data">
                                <!--img src="img/flecha_ascenso2.jpg" alt="Archivos"-->
                                <label> Seleccione el archivo .XML </label>
                                <input type="file" name="archivo_xml" required="required" /> <br><br>
                                
                                <label> Seleccione la imagen preview </label>
                                <input type="file" name="imagen_preview" required="required" /><br><br>
                                
                                <label> Seleccione el icon </label>
                                <input type="file" name="icon" required="required" /><br><br>
                                
                                <br><br>
                                
                                <input  class="btn btn-info btn-md" type="submit" value="Subir Archivo" />
                            </form>
                            
                            <br><br>
                            
                            <?php if(isset($archivo_xml) and isset($imagen_preview) and isset($imagen_icon)): ?>
                                <?php if(!valida_archivo($archivo_xml["name"], "xml")): ?>
                                    <?php if(!valida_archivo($imagen_icon["name"], "jpg") or valida_archivo($imagen_icon["name"], "jpeg")): ?>
                                        <?php if(!valida_archivo($imagen_preview["name"], "jpg") or valida_archivo($imagen_preview["name"], "jpeg")): ?>
                                            <?php $flag = 0; echo $flag; ?>
                                            <span style="color: #f00;"> ERROR. El archivo XML debe tener extesión .xml y las imágenes deben tener extensión .jpg o .jpeg </span>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php else: ?>
                                    <strong> Los archivos se han subido correctamente. </strong>
                                    <script>
                                        /*
                                        function redireccionar() {
                                            window.location="cargar_datos.php";
                                        }
                                        setTimeout ("redireccionar()", 3000);
                                        */
                                    </script>
                                <?php endif ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        
        <!-- jQuery -->
        <!-- BORRAR -->
        <!--script src="jquery-3.2.1/jquery-3.2.1.min.js"></script-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <!-- BORRAR -->
        <!--script src="bootstrap-3.3.7/js/bootstrap.min.js"></script-->
        <script src="//cdn.jsdelivr.net/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- js -->
        <script src="js/main.js"></script>        
    </body>
</html>
