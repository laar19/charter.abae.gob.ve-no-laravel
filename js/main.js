function mostrar_select(valor) {
    //if (valor =="1" || valor =="2") {
    if (valor == 1 || valor == 2) {
        /*alert(valor)*/
        /*document.getElementById("PAN").style.display = "block"; 
		document.getElementById("MSS").style.display = "block"; */
        $("#PAN").hide(800);
 		$("#PAN").show(1000);
 		
		/*$("#MSS").show(1000);*/
        
        $.ajax({
            type: "POST",
            /*url: "status="+valor,*/
            success: function(a) {
                $("#status").val(valor);
                $("#PAN").show(1000);
            }
        });
    }
    else {
        alert("Debe seleccionar una opción");
        $("#PAN").hide(1000);
    }
}

function Generar(status, id_xml) {
    $.ajax({
        type: "POST",
        url: "leer_crear_cos2_vrss1.php?operationalMode="+status+"&id_xml="+id_xml,
        /* data: $("#form").serialize(),*/
        data: $("#form").find("input , select").serialize(),
        success: function(a) {
            $("#mostrar").html(a);
            $("#PAN_BUTTON").disable;
            $("#boton").attr("disabled", true);
        }
    });
}


