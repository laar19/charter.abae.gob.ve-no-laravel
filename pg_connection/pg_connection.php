<?php
    require_once "pg_credentials.php";
     
    $credentials = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
     
    try {
        $conn = new PDO($credentials); // create a PostgreSQL database connection
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
        // display a message if connected to the PostgreSQL successfully
        if($conn) {
            echo "Connected to the <strong>$db</strong> database successfully!";
        }
    }
    catch (PDOException $e) {
        echo $e->getMessage(); // report error message
    }
    
    $stmt = $conn->prepare("SELECT id, nombre, ruta, fecha FROM charter.archivo WHERE id = ?");
    $stmt->execute([$id]); 
    $fila = $stmt->fetch();
    
    $file = $fila['2'];
    echo $file;

    /*
    $resultado = mysqli_query("SELECT id,nombre,ruta,fecha FROM archivo where id='$id'");
    if (!$resultado) {
        echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
        exit;
    }
    $fila = mysqli_fetch_row($resultado);

    $file = $fila['2'];
    */
?>
