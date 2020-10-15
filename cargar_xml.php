<?php
    include 'connection/connection.php';

    $archivo = (isset($_FILES['archivo'])) ? $_FILES['archivo'] : null;
    
    if ($archivo) {
        $myfile = fopen($archivo['tmp_name'], "r") or die("Unable to open file!");
        $contenido_xml = fread($myfile, filesize($archivo['tmp_name']));
        fclose($myfile);
        
        $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        $extension_correcta = ($extension == 'xml');
     
        if ($extension_correcta) {
            $nombre = $archivo['name'];
            
            $query = "INSERT INTO charter.xml_original (nombre, fecha, contenido_xml) VALUES (?, CURRENT_TIMESTAMP, ?)";
            $stmt  = $conn->prepare($query);
            if ($stmt->execute([$nombre, $contenido_xml]) === false) {
                echo "ERROR 1";
            }
            
            $lastId = $conn->lastInsertId();
            echo "LAST ID = " . $lastId;
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
 
    <?php include 'menu.php'; ?>
    
    <body>
        <center>
            <img src="img/horizontal-fondo-blanco.png" >
            
            <br><br><br>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-5">
                        <div class="form-login">
                            <form method="post" action="cargar_xml.php" enctype="multipart/form-data">
                                <img src="img/flecha_ascenso2.jpg" alt="Archivos">
                                
                                <br><br>

                                <label> Seleccione el Archivo a Cargar </label>
                                
                                <br><br>
                                
                                <input type="file" name="archivo" required="required" />
                                
                                <br><br>
                                
                                <input  class="btn btn-info btn-md" type="submit" value="Subir Archivo" />
                            </form>
                            
                            <br><br>
                            
                            <?php if (isset($archivo)): ?>
                                <?php if (!$extension_correcta): ?>
                                    
                                    <span style="color: #f00;"> La extensión es incorrecta, el archivo debe ser xml . </span>
                            
                                <?php else: ?>
                                    
                                    <strong> El archivo ha sido subido correctamente. </strong>
         
                                    <script>
                                        function redireccionar(){
                                            window.location="cargar_xml.php";
                                        }
                                        setTimeout ("redireccionar()", 5000);
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
