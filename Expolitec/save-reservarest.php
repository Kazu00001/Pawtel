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
        
       
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $hora=$_POST['hora'];
    $personas=$_POST['personas'];
    $telefono=$_POST['telefono'];
    $celebracion=$_POST['celebracion'];

// hacer la sentencia de envio 
$sql="INSERT INTO reserva(nombreclient,correo,iniestan,finestan,habitaciones,huspedes,ninos,Nombrpaq) value('$nom','$correo','$icioestan','$finestan','$habitaciones','$huspedes','$ninos','$mascota','$tipohab')";
//mandar la sentancia de envio
$envio= mysqli_query($Conexion,$sql);
// si hay un problema con el envio le damos un mensaje de que no se pudo 
if(!$envio){
    echo '<SCRIPT> alert("tu regristro no se puedo regristar")</SCRIPT>';
    echo ' Error de MySQL:'.mysqli_error($Conexion);
} else {
    echo'Parece que todo va bien';
    header('Location: Login.html');
}
// cerramos la conecxion de la base de datos 
mysqli_close($Conexion);
?>