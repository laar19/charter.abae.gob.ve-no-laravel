$(document).ready(function () {
    // Verifica que las contraseñas coincidan
    $("#crear_usuario").attr('disabled', true);
    
    $("#repetir_password").on("input", function() { // puede ser on blur también
        var pass = $("#pass").val();
        var repetir_password = $("#repetir_password").val();
        
        // $this se refiere a #repetir_password
        if($(this).val() == pass) {
            $("#resultado_password").text("Correcto");
            $("#crear_usuario").attr('disabled', false);
        }
        else {
            $("#resultado_password").text("Las contraseñas no coinciden");
            $("#crear_usuario").attr('disabled', true);
        }
    });
    
    $("#pass").on("blur", function() { // puede ser on blur también
        var pass = $("#pass").val();
        var repetir_password = $("#repetir_password").val();
        
        // $this se refiere a #pass
        if($(this).val() == repetir_password) {
            $("#resultado_password").text("Correcto");
            $("#crear_usuario").attr('disabled', false);
        }
        else {
            $("#resultado_password").text("Las contraseñas no coinciden");
            $("#crear_usuario").attr('disabled', true);
        }
    });
})