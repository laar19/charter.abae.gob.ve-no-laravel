<html>
    <head>
        <title>Abae Charter</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="css/main.css" rel="stylesheet">
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <?php include "templates/header.php"; ?>

        <center><img src="img/horizontal-fondo-blanco.png" ></center>
        
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <div class="form-login">
                        <form method="POST" action="login_verify.php">
                            <center><h4>Ingresar al Sistema</h4></center>
                            <input name="username" type="text" id="user" class="form-control input-sm chat-input" placeholder="Nombre de Usuario" required/>
                                
                            <input name="pass" type="password" id="pass" class="form-control input-sm chat-input" placeholder="Contraseña" required />
                            
                            <br>
                                
                            <div class="wrapper">
                                <span class="group-btn">     
                                    <center><input name="submit" type="submit" value="Ingresar" class="btn btn-success btn-md"></center>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery-3.2.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
