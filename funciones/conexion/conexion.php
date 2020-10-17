<?php
    require_once "credenciales.php";
     
    $pg_credentials = "pgsql:host=$Pg_credentials->host;port=5432;dbname=$Pg_credentials->db;user=$Pg_credentials->username;password=$Pg_credentials->password";
     
    try {
        $conn = new PDO($pg_credentials); // create a PostgreSQL database connection
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
        // display a message if connected to the PostgreSQL successfully
        if($conn) {
            //echo "Connected to the <strong>$Pg_credentials->db</strong> database successfully!";
        }
    }
    catch (PDOException $e) {
        echo $e->getMessage(); // report error message
    }
?>
