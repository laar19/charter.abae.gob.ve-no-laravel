<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Listado de archivos cargados </title>

        <link href="css/main.css" rel="stylesheet">
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <?php include "templates/header.php"; ?>
    
        <?php include "templates/menu.php"; ?>
        
        
        <div class="container">
            <center><h2>Descargar datos</h2></center> 

            <div class="input-group">
                <span class="input-group-addon">Buscar</span>
                <input id="filtrar" type="text" class="form-control" placeholder="Ingresar el parámetro...">
            </div>
            
            <br>

            <div class="panel panel-primary">
                <div class="panel-heading">         
                    <h3 class="panel-title">Lista de archivos cargados</h3>
                    <div id="loader" class="text-center"></div>
                </div>
                
                <br>
                
                <div class="outer_div"></div>
            </div>
        </div>
    
        <!-- jQuery -->
        <script src="js/jquery-3.2.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        
        <script>
            /*carga de la pagina*/
            $(document).ready(function() {
                load(1);
            });

            function load(page){
                var parametros = {
                    "action":"ajax","page":page
                };
                $("#loader").fadeIn("slow");
                $.ajax({
                    url:"lista_datos_cargados-lib.php",
                    data: parametros,
                    beforeSend: function(objeto) {
                        //$("#loader").html("<img src="loader.gif">");
                        $("#loader").html();
                    },
                    success:function(data){
                        $(".outer_div").html(data).fadeIn("slow");
                        $("#loader").html("");
                    }
                })
            }
        </script>

        <script>
            /*Buscador*/
            $(document).ready(function () {
                (function ($) {
                    $("#filtrar").keyup(function () {
                        var rex = new RegExp($(this).val(), "i");
                        $(".buscar tr").hide();
                        $(".buscar tr").filter(function () {
                            return rex.test($(this).text());
                        }).show();
                    })
                }(jQuery));
            }); 
        </script>
    </body>
</html>
