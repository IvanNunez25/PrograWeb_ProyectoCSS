<?php 

$dbhost = "localhost";
$dbname = "tienda";
$dbuser = "root";
$dbpass = "123456";
$dbport = "3307";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport) or die ("Problemas con la conexión");

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "error de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

?>