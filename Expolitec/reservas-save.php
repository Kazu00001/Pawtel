<?php
session_start();

//credenciales de acceso a la base datos 

$hostname='localhost';
$username='root';
$password='';
$database='pawtel';

// conexion a la base de datos :hh jjjj

$Conexion = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}
$nom=$_POST['nombre'];
$correo=$_POST['correo'];
$icioestan=$_POST['icioestan'];
$finestan=$_POST['finestan'];
$habitaciones=$_POST['habitaciones'];
$huspedes=$_POST['huspedes'];
$ninos=$_POST['ninos'];
$mascota=$_POST['mascota'];
$mascota=$_POST['mascota'];

?>