<?php
error_reporting(0);
session_start();
$con = new mysqli("localhost", "root", "root", "charter");
if ($con->connect_errno)
{
  echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
  exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");
if ($_POST['username'] == null || $_POST['pass'] == null)
{
    echo '<script>location.href = "session_incorrecta.php"</script>';
     
}
else
{
    $user = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $consulta = mysqli_query($con, "SELECT username, pass FROM usuario WHERE username = '$user' AND pass = '$pass'");
    if (mysqli_num_rows($consulta) > 0)
    {
        $_SESSION["usuario"] = $user;
        echo '<center><img src="imagenes/Cintillo Julio 2017.PNG" ></center><br><br><br><br><br><br><center><img src="imagenes/boton_correcto.PNG" > <br><br><h2>BIENVENIDO <br>"'.$_SESSION['usuario'].'"<h2> <p>';
   echo '<script>
function redireccionar(){window.location="menu2.php";} 
setTimeout ("redireccionar()", 2000);
</script></a></p></center>';
    }
    else
    {
        echo '<script>location.href = "session_incorrecta.php"</script>';
    }
}
?>