<?php include "includes/sesion.php"; ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title> Cargar datos </title>
        
        <?php include "templates/head.php"; ?>
    </head>
    
    <body>
        <?php include "templates/header.php"; ?>
    
        <?php include "templates/menu.php"; ?>
        
        <center>            
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-5">
                        <div class="form-login">
                            <form method="post" action="cargar_datos-lib.php" enctype="multipart/form-data">
                                <table>
                                    <h3>Todos los campos son requeridos</h3>
                                    <br>
                                    <tr>
                                        <td>
                                            <label> Seleccione el archivo .XML </label>
                                            <input type="file" name="archivo_xml" required="required" accept=".xml"/><br>
                                            <!--
                                            <input type="file" name="archivo_xml[]" required="required" accept=".xml" multiple/><br><br>
                                            -->
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <label> Seleccione el icon </label>
                                            <input type="file" name="icon" required="required" accept=".jpg, .jpeg"/><br>
                                            <!--
                                            <input type="file" name="icons[]" required="required" accept=".jpg, .jpeg" multiple/><br><br>
                                            -->
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <label> Seleccione la imagen preview </label>
                                            <input type="file" name="imagen_preview" required="required" accept=".jpg, .jpeg"/><br>
                                            <!--
                                            <input type="file" name="imagen_preview[]" required="required" accept=".jpg, .jpeg" multiple/><br><br>
                                            -->
                                        </td>
                                    </tr>
                                </table>
                                <input  class="btn btn-info btn-md" type="submit" value="Subir Archivos"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        
        <!-- jQuery -->
        <script src="js/jquery/jquery-3.2.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>  
    </body>
</html>
