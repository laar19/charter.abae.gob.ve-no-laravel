<?php
    function usuario_autenticado() {
        if(!revisar_usuario()) {
            header("location: index.php");
            exit();
        }
    }

    function revisar_usuario() {
        return isset($_SESSION["user"]);
    }

    session_start();
    usuario_autenticado();
?>
