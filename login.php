<?php
    include "funciones/conexion/conexion.php";

    error_reporting(0);
    session_start();

    if ($_POST["username"] == null || $_POST["pass"] == null) {
        echo "<script>location.href = 'sesion_incorrecta.php'</script>";

    }
    else {
        $user = $_POST["username"];
        $pass = $_POST["pass"];
        
        $query = "SELECT username, pass AS numrows FROM charter.usuario WHERE username = ? AND pass = ?";
        $stmt = $conn->prepare($query);
        if ($stmt->execute([$user, $pass]) === false) {
            echo "ERROR";
        }
        $row = $stmt->fetch();
        $numrows = $row["numrows"];
        
        if ($numrows > 0) {
            $_SESSION["usuario"] = $user;
            echo "<center><img src='img/cintillo-julio-2017.png' ></center><br><br><br><br><br><br><center><img src='img/Boton_correcto.png' > <br><br><h2>BIENVENIDO <br>'".$_SESSION["usuario"]."'<h2> <p>";
            
            echo "<script> 
                function redireccionar(){
                    window.location='menu2.php';
                }
                setTimeout ('redireccionar()', 2000);
                </script></a></p></center>";
        }
        else {
            echo "<script>location.href = 'sesion_incorrecta.php'</script>";
        }
    }
?>