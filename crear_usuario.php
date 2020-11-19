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
                            <form method="post" action="crear_usuario-lib.php">
                                <table>
                                    <div class="form-group">
                                        <tr>
                                            <td>
                                                <label> Nombre de usuario </label>
                                            </td>
                                            <td>
                                                <input type="text" name="username" required/>
                                            </td>
                                        </tr>
                                    </div>

                                    <div class="form-group">
                                        <tr>
                                            <td>
                                                <label> Contraseña </label>
                                            </td>
                                            <td>
                                                <input type="password" id="pass" name="pass" required/>
                                            </td>
                                        </tr>
                                    </div>

                                    <div class="form-group">
                                        <tr>
                                            <td>
                                                <label> Confirme la contraseña </label>
                                            </td>
                                            <td>
                                                <input type="password" id="repetir_password" required/>

                                                <!-- class="help-block" es una clase de bootstrap -->
                                                <span id="resultado_password" class="help-block"></span>
                                            </td>
                                        </tr>
                                    </div>

                                    <div class="form-group">
                                        <tr>
                                            <td>
                                                <label for="rol"> Rol </label>
                                            </td>
                                            <td>
                                                <select id="rol" name="rol" required>
                                                    <option value="usuario" selected>Usuario</option>
                                                    <option value="admin">Administrador</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </div>
                                </table><br>
                                <input class="btn btn-info btn-md" id="crear_usuario" type="submit" value="Aceptar"/>
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
        
        <script src="js/jquery/verify_password.js"></script>
    </body>
</html>
