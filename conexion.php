<?php
/*
$host    = 'localhost'; //nombre del servidor local o tambien se puede usar 127.0.0.1
$user    = 'root';  //nombre de usuario
$db      = 'charter'; //nombre de la base de datos
$pass    = 'root'; //contraseña del usuario del motor de base de datos si hubiese

//realizamos la conexion y la consulta del servidor y del usuario
$conecta = mysqli_connect($host, $user, $pass, $db) or die ('error: no se logro conectarse con el servidor MySQL');
*/
?>

<?php
      $conn = new mysqli("localhost", "root", "root", "charter");

      /*
      echo "<pre>";
        var_dump($conn);
      echo "</pre>";
      */

      if($conn->connect_error){
          echo $conn->connect_error;
      }

      //para imprimir caracteres especiales
      $conn->set_charset("utf8");
?>
