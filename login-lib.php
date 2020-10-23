<?php
    include "includes/conexion.php";

    if ($_POST["username"] == null || $_POST["pass"] == null) {
        header("location: sesion_incorrecta.php");
    }
    else {
        $username = $_POST["username"];
        $pass     = $_POST["pass"];
        
        $query = "SELECT username, pass, rol FROM charter.usuarios WHERE username = ?";
        $stmt = $conn->prepare($query);
        if ($stmt->execute([$username]) === false) {
            echo "ERROR";
        }
        $row = $stmt->fetch();
        $username  = $row["username"];
        $pass_hash = $row["pass"];
        $rol       = $row["rol"];
        
        if($row) {
            if(password_verify($pass, $pass_hash)) {
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["rol"] = $rol;
                    
                echo "<center><img src='img/cintillo-julio-2017.png' ></center><br><br><br><br><br><br><center><img src='img/Boton_correcto.png' > <br><br><h2>BIENVENIDO <br>".$_SESSION["username"]."<h2> <p>";
            
                echo "<script>
                        function redireccionar(){
                            window.location='index.php';
                        }
                        setTimeout ('redireccionar()', 2000);
                    </script></a></p></center>";
            }
            else {
                echo "<script>location.href = 'sesion_incorrecta.php'</script>";
            }
        }
        else {
            header("location: sesion_incorrecta.php");
        }
    }
?>
