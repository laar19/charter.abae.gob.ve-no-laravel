<?php
    include 'connection/connection.php';

    error_reporting(0);
    session_start();

    // BORRAR
    /*
    $con = new mysqli("localhost", "root", "root", "charter");
    if ($con->connect_errno)
    {
      echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
      exit();
    }
    @mysqli_query($con, "SET NAMES 'utf8'");
    */

    if ($_POST['username'] == null || $_POST['pass'] == null) {
        echo '<script>location.href = "session_incorrecta.php"</script>';

    }
    else {
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        //$user = mysqli_real_escape_string($con, $_POST['username']); // BORRAR
        //$pass = mysqli_real_escape_string($con, $_POST['pass']); // BORRAR
        $stmt = $conn->prepare("SELECT username, pass AS numrows FROM charter.usuario WHERE username = ? AND pass = ?");
        if ($stmt->execute([$user, $pass]) === false) {
            echo "ERROR";
        }
        $row = $stmt->fetch();
        $numrows = $row['numrows'];

        //$consulta = mysqli_query($con, "SELECT username, pass FROM usuario WHERE username = '$user' AND pass = '$pass'"); // BORRAR
        // if (mysqli_num_rows($consulta) > 0) // BORRAR
        if ($numrows > 0) {
            $_SESSION["usuario"] = $user;
            echo '<center><img src="img/cintillo-julio-2017.png" ></center><br><br><br><br><br><br><center><img src="img/boton_correcto.PNG" > <br><br><h2>BIENVENIDO <br>"'.$_SESSION['usuario'].'"<h2> <p>';
            
            echo '<script> 
                function redireccionar(){
                    window.location="menu2.php";
                }
                setTimeout ("redireccionar()", 2000);
                </script></a></p></center>';
        }
        else {
            echo '<script>location.href = "session_incorrecta.php"</script>';
        }
    }
?>