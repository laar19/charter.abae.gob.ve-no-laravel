<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vista del Admnistrador</title>

   <!-- Bootstrap Core CSS -->
    <link href="http://localhost/SAEGEC/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/SAEGEC/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/SAEGEC/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <br><br><br><br>
<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$ ( "#menu-close").click();>Estadisticas</a>
            </li>
            <li>
                <a href="#top" onclick=$ ( "#menu-close").click();>Gráficos</a>
            </li>
            <li>
                <a href="#about" onclick=$ ( "#menu-close").click();>Mapa del Cementerio</a>
            </li>
            
        </ul>
    </nav>
    
    <div class="container">
    <br><br>
     

        <!--inicio del menu ilustrativo del Administrador-->
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
               </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-2 col-sm-2 hero-feature">
                <div class="thumbnail">
                    <img src="http://localhost/SAEGEC/images/Logo Titular.JPG" alt="Titular">
                    <div class="caption">
                        <h3>Titulares</h3>
                        <p>
                            <a href="http://localhost/SAEGEC/administrador/titulares" class="btn btn-primary">Gestionar</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-2 hero-feature">
                <div class="thumbnail">
                    <img src="http://localhost/SAEGEC/images/Logo Propiedad.JPEG" alt="Titular" alt="">
                    <div class="caption">
                        <h3>Propiedad</h3>
                        <p>
                            <a href="http://localhost/SAEGEC/administrador/propiedad" class="btn btn-primary">Gestionar</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-2 hero-feature">
                <div class="thumbnail">
                    <img src="http://localhost/SAEGEC/images/LogoContrato.JPG" alt="">
                    <div class="caption">
                        <h3>Contratos</h3>
                        <p>
                            <a href="http://localhost/SAEGEC/administrador/contratos" class="btn btn-primary">Gestionar</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-2 hero-feature">
                <div class="thumbnail">
                    <img src="http://localhost/SAEGEC/images/Logo Servicio.JPG" alt="Servicios">
                    <div class="caption">
                        <h3>Servicios</h3>
                        <p>
                            <a href="http://localhost/SAEGEC/administrador/Servicios" class="btn btn-primary">Gestionar</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-2 hero-feature">
                <div class="thumbnail">
                    <img src="http://localhost/SAEGEC/images/Logo Difunto.PNG" alt="Servicios">
                    <div class="caption">
                        <h3>Difuntos</h3>
                        <p>
                            <a href="http://localhost/SAEGEC/administrador/difuntos" class="btn btn-primary">Gestionar</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-2 hero-feature">
                <div class="thumbnail">
                    <img src="http://localhost/SAEGEC/images/Logo Usuario.JPG" alt="Servicios">
                    <div class="caption">
                        <h3>Usuarios</h3>
                        <p>
                            <a href="http://localhost/SAEGEC/administrador/usuarios" class="btn btn-primary">Gestionar</a> 
                        </p>
                    </div>
                </div>
            </div>

            

        </div>
        <!-- /.row -->
        </div>
        

      <!-- jQuery -->
    <script src="http://localhost/SAEGEC/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/SAEGEC/js/bootstrap.min.js"></script>

      <!-- Custom Theme JavaScript -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    
    <br><br><br><br>
</body>

</html>

