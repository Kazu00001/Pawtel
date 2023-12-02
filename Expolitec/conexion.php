<?php
// Establish a database connection
$hostname='localhost';
$username='u918373181_root';
$password='/HcXL~g1J';
$database='u918373181_pawtel';

// conexion a la base de datos :hh jjjj

$Conexion = mysqli_connect($hostname, $username, $password, $database);
$Conexion->set_charset("utf8");

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}
?>