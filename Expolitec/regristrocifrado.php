<?php 
//credenciales de acceso a la base datos

$hostname='localhost';
$username='root';
$password='';
$database='pawtel';

// conexion a la base de datos

$Conexion = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

$Nom= $_POST['nombre'];
$correo= $_POST['correo'];
$fecha= $_POST['fecha'];
$telefono= $_POST['telefono'];
$hash=password_hash($_POST['pass'], PASSWORD_DEFAULT, ['cost'=> 15]);

if (!isset($_POST['nombre'], $_POST['correo'],$_POST['fecha'],$_POST['telefono'],$_POST['pass'])) {

    // si no hay datos muestra error y re direccionar

    header('Location: registropaw.html');// form_user.html redicionamiento del sito si hay un error
}
// hacer la sentencia de envio 
$sql="INSERT INTO usser(nombres,correo,fech,telefono,cotra) value('$Nom','$correo','$fecha','$telefono','$hash')";
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
