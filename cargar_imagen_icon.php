<?php
    //include "conexion.php"; // BORRAR
    include "funciones/conexion/conexion.php";

    $archivo = (isset($_FILES["archivo"])) ? $_FILES["archivo"] : null;
    
    if ($archivo) {
        $extension = pathinfo($archivo["name"], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        $extension_correcta = ($extension == "jpeg" or $extension == "jpg");
        
        if ($extension_correcta) {
            $date  = date("d_m_y_h.i/");
            $nombre = "icon.jpg";
            //$carpeta = "/xampp/htdocs/charter.abae.gob.ve/img_icon/icon".$date; // BORRAR
            $carpeta = "img_icon/icon".$date;
            
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true);
            }
       
            $ruta_destino_archivo = $carpeta .$nombre;
            $archivo_ok = move_uploaded_file($archivo["tmp_name"], $ruta_destino_archivo);
            $ruta = "img_icon/icon".$date.$nombre;
            $fecha = time();
            $fecha2 = date("d/m/Y",$fecha);
         
            $query = "INSERT INTO charter.imagen (nombre, ruta, fecha) VALUES (?, ?, ?)";
            $stmt  = $conn->prepare($query);
            if ($stmt->execute([$nombre, $ruta, $fecha2]) === false) {
                echo "ERROR";
            }
         
            // BORRAR
            /*
            //Creamos nuestra consulta sql
            $query="insert into imagen(nombre,ruta,fecha) value ("$nombre","$ruta","$fecha2")";
            //Ejecutamos la consutla
            mysqli_query($query) or die("Error al procesar consulta: " . mysqli_error());
            */
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title> Subir Imagen </title>
 
        <!-- BORRAR -->
        <!--link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet"-->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/main.css" rel="stylesheet">
    </head>
    
    <?php include "menu.php"; ?>
    
    <body>
        <center>
            <img src="img/horizontal-fondo-blanco.png">
        
            <br><br><br>

            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-5">
                        <div class="form-login">
                            <form method="post" action="cargar_imagen_icon.php" enctype="multipart/form-data">
                                <img src="img/flecha_ascenso2.jpg" alt="Archivos">
                                
                                <br><br>
                                
                                <label> Seleccione la imagen a Cargar </label>
                                
                                <br><br>
                                
                                <input type="file" name="archivo" required="required" />
                                
                                <br><br>
                                
                                <input  class="btn btn-info btn-md" type="submit" value="Subir Imagen Icon" />
                            </form>
                            
                            <br><br>

                            <?php if (isset($archivo)): ?>
                                <?php if (!$extension_correcta): ?>

                                <span style="color: #f00;"> La extensión es incorrecta, el archivo debe ser jpeg o jpg. </span> 

                                <?php elseif (!$archivo_ok): ?>

                                    <span style="color: #f00;"> Error al intentar subir la imagen. </span>

                                <?php else: ?>

                                    <strong> La imagen ha sido subido correctamente. </strong>

                                    <script>
                                        function redireccionar(){
                                            window.location="cargar_imagen_icon.php";
                                        } 
                                        setTimeout ("redireccionar()", 3000);
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
