<div class="col-md-12" id="menu">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <li>
                            <center><img src="img/abae-charter3-otra.png"></center>
                        </li>
                    
                        <li>
                            <a class="navbar-brand" href="index.php"> CHARTER </a>
                        </li>
                        
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                                <span class="fa fa-upload"></span> Subir Archivos <span class="caret"></span>
                            </a>
                            
                            <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="cargar_datos.php"> Cargar datos </a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
                                <span class="fa fa-retweet"></span> Procesos <span class="caret"></span>
                            </a>
                            
                            <div class="collapse" id="toggleDemo1" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="lista_datos_cargados.php"> Visualizar datos </a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li>
                            <?php
                                if($_SESSION["rol"] == "admin") {
                                    echo '<a href="#" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
                                            <span class="fa fa-download"></span> Gestión de usuarios <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="toggleDemo3" style="height: 0px;">
                                            <ul class="nav nav-list">
                                                <li><a href="crear_usuario.php"> Crear nuevo usuario </a></li>
                                            </ul>
                                            <ul class="nav nav-list">
                                                <li><a href="lista_usuarios.php"> Eliminar usuario </a></li>
                                            </ul>
                                        </div>';
                                }
                            ?>
                        </li>
                    
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo4" data-parent="#sidenav01" class="collapsed">
                                <span class="fa fa-times-circle"></span> Salir<span class="caret"></span>
                            </a>
                            
                            <div class="collapse" id="toggleDemo4" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="logout.php?cerrar_sesion=true">Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
