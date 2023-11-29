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

// Se valida si se ha enviado información, con la función isset()

if (!isset($_POST['correo'], $_POST['password'])) {

    // si no hay datos muestra error y re direccionar

    header('Location: Login.html');
}

// evitar inyección sql

if ($Result = $Conexion->prepare('SELECT id, cotra, correo, nombres,categorio,foto FROM usser WHERE correo = ?')) {
    // parámetros de enlace de la cadena s
    //s=string i=intenger 
    $Result->bind_param('s', $_POST['correo']);
    $Result->execute();
} else {
    // Si la preparación de la consulta falla, muestra el error
    die('Error en la preparación de la consulta: ' . mysqli_error($Conexion));
}

// acá se valida si lo ingresado coincide con la base de datos

$Result->store_result();
if ($Result->num_rows > 0) {
    $Result->bind_result($id, $hash_password,$email,$nombres,$categorio,$foto);
    $Result->fetch();
    if($categorio==1){
        if (password_verify($_POST['password'], $hash_password)) {

            // la conexion sería exitosa, se crea la sesión
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $nombres;
            $_SESSION['id'] = $id;
            $_SESSION['email']= $email;
            $_SESSION['foto']= $imagen;
            header('Location: inicio.php');
        } else {
            // contraseña incorrecta
            echo '<SCRIPT> alert("Tu contraseña es incorecta")</SCRIPT>';
            header('Location: Login.html');
            
        }
    }
    elseif($categorio==2){
        if (password_verify($_POST['password'], $hash_password)) {

            // la conexion sería exitosa, se crea la sesión
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $nombres;
            $_SESSION['id'] = $id;
            $_SESSION['email']= $email;
            $_SESSION['foto']= $imagen;
            header('Location: inicio-admin.php');
        } else {
            // contraseña incorrecta
            echo '<SCRIPT> alert("Tu contraseña es incorecta")</SCRIPT>';
            header('Location: Login.html');
            
        }
    }
    // se confirma que la cuenta existe ahora validamos la contraseña
} else {
    // usuario incorrecto
    header('Location: Login.html');
    echo '<SCRIPT> alert("Tu usuario es incorrecto") </SCRIPT>';
}

//vaciar el stock
$Result->close();
//cierrara base de datos :D
$Conexion->close();
?>
