<?php
// Credenciales de acceso a la base de datos
$hostname='localhost';
$username='u918373181_root';
$password='/HcXL~g1J';
$database='u918373181_pawtel';


// Conexión a la base de datos
$Conexion = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_error()) {
    // Si hay un error en la conexión
    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

// Obtener el correo del formulario
$correo = $_POST['correo'];

// Comprobación si el correo ya existe en la base de datos
$comprobacion = "SELECT correo FROM usser WHERE correo='$correo'";
$resultadoComprobacion = mysqli_query($Conexion, $comprobacion);

if (!$resultadoComprobacion) {
    // Manejo de error en la consulta de comprobación
    echo 'Error de MySQL: ' . mysqli_error($Conexion);
} else {
    // Si el correo ya existe, mostrar un mensaje y redireccionar
    if (mysqli_num_rows($resultadoComprobacion) > 0) {
        echo '<script>alert("El correo ya está registrado. Utiliza otro correo.");</script>';
        header('Location: registropaw.html');
    } else {
        // Si el correo no existe, proceder con el registro
        $Nom = $_POST['nombre'];
        $fecha = $_POST['fecha'];
        $telefono = $_POST['telefono'];
        $cat = '1';
        $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT, ['cost' => 15]);

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            $image = basename($_FILES["image"]["name"]);
            $targetDirectory = "usser/"; // Ajusta la ruta al directorio correcto (puede ser relativa o absoluta)
            $targetFile = $targetDirectory . $image; // Ruta completa del archivo

            $esImagen = getimagesize($_FILES["image"]["tmp_name"]);
            if ($esImagen !== false) {
                // Mueve el archivo a la ubicación deseada
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    echo "El archivo $image ha sido subido correctamente.";
                } else {
                    echo "Hubo un error al subir el archivo.";
                }
            } else {
                echo "El archivo no es una imagen válida.";
            }
        } else {
            echo "No se ha seleccionado ningún archivo.";
        }

        // Hacer la sentencia de envío
        $sql = "INSERT INTO usser(nombres, correo, fech, telefono, cotra, categorio, foto) VALUES ('$Nom','$correo','$fecha','$telefono','$hash','$cat','$image')";

        // Mandar la sentencia de envío
        $envio = mysqli_query($Conexion, $sql);

        // Si hay un problema con el envío, mostrar un mensaje de error
        if (!$envio) {
            echo '<script>alert("Tu registro no se pudo registrar. Error de MySQL: ' . mysqli_error($Conexion) . '");</script>';
            header('Location: registropaw.html');
        } else {
            echo 'Parece que todo va bien';
            header('Location: Login.html');
        }
    }
}

// Cerrar la conexión de la base de datos
mysqli_close($Conexion);
?>
