<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listado de Xml Cargados</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        
        <link href="css/main.css" rel="stylesheet">
    </head>
  
    <?php include "menu.php"; ?>

    <body>
        <div class="container">
        
            <br>
  
            <center><img src="img/horizontal-fondo-blanco.png" ></center>
            <center><h2>Generar XML para COS2</h2></center> 

            <div class="input-group">
                <span class="input-group-addon">Buscar</span>
                <input id="filtrar" type="text" class="form-control" placeholder="Ingresar el parametro...">
            </div>
            
            <br>

            <div class="panel panel-primary">
                <div class="panel-heading">         
                    <h3 class="panel-title">Generar XML para COS2</h3>
                    <!-- BORRAR -->
                    <!--div id="loader" class="text-center"> <img src="loader.gif"></div-->
                    <div id="loader" class="text-center"></div>
                </div>
                
                <br>
                
                <div class="outer_div"></div>
            </div>
        </div>
    
        <!-- jQuery (necessary for Bootstrap"s JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <!-- BORRAR -->
        <!--script src="bootstrap-3.3.7/js/bootstrap.min.js"></script-->
        <script src="//cdn.jsdelivr.net/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
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
                    url:"xml_cargados_ajax.php",
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