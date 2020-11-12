<?php
    class Pg_credentials {
        // Properties
        public $host     = "localhost";
        public $db       = "charter";
        public $username = "postgres";
        public $password = "root";
    }
    $Pg_credentials = new Pg_credentials();
    
    $ruta = "IMAGENES_SUBIDAS/";    
    if (!file_exists($ruta)) {
        //mkdir($carpeta, 0777, true); // default, widest possible access
        mkdir($ruta, 0755, true); // Everything for owner, read and execute for others
    }
?>
