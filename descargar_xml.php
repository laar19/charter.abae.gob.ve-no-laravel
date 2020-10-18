<?php
    include "funciones/datos.php";
    include "funciones/conexion.php";
    include "funciones/funciones.php";

    $id = $_GET["id"];

    if($_GET["descargar_xml"] == "original") {
        $query = "SELECT xml_original FROM charter.archivos WHERE id = ?";
        descargar_xml($conn, $query, $id, "xml_original");
    }

    if($_GET["descargar_xml"] == "charter") {
        $query = "SELECT xml_charter FROM charter.archivos WHERE id = ?";
        descargar_xml($conn, $query, $id, "xml_charter");
    }
?>