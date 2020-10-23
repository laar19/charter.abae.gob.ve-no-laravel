<?php
    include "includes/datos.php";
    include "includes/conexion.php";

    $id = $_GET["id"];

    $query = "DELETE FROM charter.usuarios WHERE id = ?";
    $stmt = $conn->prepare($query);
    if ($stmt->execute([$id]) === false) {
        echo "ERROR";
    }
    else {
        echo "<script>
                alert('Usuario eliminado');
                location.href = 'lista_usuarios.php';
            </script>";
    }
?>