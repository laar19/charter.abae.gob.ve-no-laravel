<?php
    include "includes/datos.php";
    include "includes/conexion.php";

    $username = (isset($_POST["username"])) ? $_POST["username"] : null;
    $pass     = (isset($_POST["pass"])) ? $_POST["pass"] : null;
    $rol      = (isset($_POST["rol"])) ? $_POST["rol"] : null;

    if($username and $pass and $rol) {
        $query = "SELECT username FROM usuarios WHERE username = ?";
        $stmt = $conn->prepare($query);
        if ($stmt->execute([$username]) === false) {
            echo "ERROR";
        }
        $row = $stmt->fetch();
        
        if(!$row) {
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

            $query = "INSERT INTO usuarios (username, pass, rol) VALUES (?, ?, ?)";
            $stmt  = $conn->prepare($query);
            if ($stmt->execute([$username, $pass_hash, $rol]) === false) {
                echo "ERROR";
            }
            else {
                echo "<script>
                        alert('Usuario registrado correctamente');
                        location.href = 'crear_usuario.php';
                    </script>";
            }
        }
        else {
            echo "<script>
                    alert('El nombre de usuario ya se encuentra registrado. Por favor elija uno diferente');
                    location.href = 'crear_usuario.php';
                </script>";
        }
    }
?>