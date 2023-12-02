<?php
session_start();

$hostname='localhost';
$username='u918373181_root';
$password='/HcXL~g1J';
$database='u918373181_pawtel';


$Conexion = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_error()) {
    exit('Fallo en la conexión de MySQL: ' . mysqli_connect_error());
}

// Verifica y filtra los datos de entrada
$nom = isset($_POST['namet']) ? $_POST['namet'] : '';
$numbertar = isset($_POST['numbertar']) ? $_POST['numbertar'] : '';
$fechex = isset($_POST['fechex']) ? $_POST['fechex'] : '';
$posion = isset($_SESSION['id']) ? (int)$_SESSION['id'] : 0; // Asegúrate de que sea un número entero

// Utiliza un UPDATE con sentencia preparada para intentar actualizar el registro
$sql_update = "UPDATE `reservas` SET `Nombre_propetario_target`=?, `Numero_de_targeta`=?, `Fecha_vencimiento_targeta`=? WHERE `id_usuario`=?";

if ($stmt = mysqli_prepare($Conexion, $sql_update)) {
    mysqli_stmt_bind_param($stmt, "sssi", $nom, $numbertar, $fechex, $posion);
    $resultado = mysqli_stmt_execute($stmt);

    if (!$resultado) {
        echo "Error en la consulta: " . mysqli_error($Conexion);
        echo "Consulta SQL: $sql_update";
        exit();
    } else {
        header('Location: usser_perf.php');
        exit();
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la sentencia de actualización: " . mysqli_error($Conexion);
}

// Cierra la conexión
mysqli_close($Conexion);
?>
