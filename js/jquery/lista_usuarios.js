// Lista los USUARIO cargados
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
        url       :"lista_usuarios-lib.php",
        data      : parametros,
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