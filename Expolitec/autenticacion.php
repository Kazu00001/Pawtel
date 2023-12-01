<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pawtel';

$Conexion = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_error()) {
    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

if (!isset($_POST['correo'], $_POST['password'])) {
    header('Location: Login.html');
}

if ($Result = $Conexion->prepare('SELECT id, cotra, correo, nombres, categorio, foto, fech, telefono FROM usser WHERE correo = ?')) {
    $correo = mysqli_real_escape_string($Conexion, $_POST['correo']);
    $Result->bind_param('s', $correo);
    $Result->execute();
    $Result->store_result();

    if ($Result->num_rows > 0) {
        $Result->bind_result($id, $hash_password, $email, $nombres, $categorio, $foto, $fecha, $tel);
        $Result->fetch();

        if ($categorio == 1 || $categorio == 2) {
            if (password_verify($_POST['password'], $hash_password)) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $nombres;
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;
                $_SESSION['foto'] = $foto;
                $_SESSION['fech'] = $fecha;
                $_SESSION['telefono'] = $tel;

                if ($categorio == 1) {
                    header('Location: inicio.php');
                } elseif ($categorio == 2) {
                    header('Location: inicio-admin.php');
                }
            } else {
                echo '<script>alert("Tu contraseña es incorrecta");</script>';
                header('Location: Login.html');
            }
        } else {
            echo '<script>alert("Categoría de usuario no válida");</script>';
            header('Location: Login.html');
        }
    } else {
        echo '<script>alert("Usuario incorrecto");</script>';
        header('Location: Login.html');
    }

    $Result->close();
} else {
    echo 'Error en la preparación de la consulta: ' . $Conexion->error;
}

$Conexion->close();
?>
