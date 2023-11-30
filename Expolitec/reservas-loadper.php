<?php
session_start();
require('conexion.php');
$user=$_SESSION['id'];
$columas = ['id_reserva','id_habitacion','id_usuario','fecha_inicio','fecha_fin','Nombres','Apellidos','Tipo_de_habitacion','email','telefono','mascota','Numero_mascotas','Nombre_propetario_target','Numero_de_targeta','Fecha_vencimiento_targeta'];
$table = "reservas";
$columas2 = ['fecha_inicio','fecha_fin','id_habitacion'];
$campo = isset($_POST['searRev']) ? $Conexion->real_escape_string($_POST['searRev']) : null;
$where = '';

if ($campo != null) {
    $where = "AND (";
    $cont = count($columas2);

    for ($i = 0; $i < $cont; $i++) {
        $where .= $columas2[$i] . " LIKE '%" . $campo . "%' OR ";
    }

    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$consult = "SELECT " . implode(",", $columas) . " FROM $table WHERE id_usuario='$user' $where";
$Conexion->set_charset("utf8");
header('Content-Type: text/html; charset=utf-8');
$result = $Conexion->query($consult);

if ($result === false) {
    die("Error in query: " . $Conexion->error);
}

$num_rows = $result->num_rows;

if ($num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<section class="con2">';
        echo '<section class="imgg"></section>';
        echo '<section class="inf">';
            echo '<section class="con3"><p class="textt">Habitacion: '. $row['id_habitacion'].'<br></p></section>';
            echo '<section class="con3"><p class="textt">Fecha De Entrada: '. $row['fecha_inicio'] .'</p><br></section>';
           echo '<section class="con3"><p class="textt">Fecha De Salida:'.$row['fecha_fin'] .'</p><br></section>';
        echo '</section>';
    echo '</section>';
    }
} else {
    echo '<tr>';
    echo '<td colspan="17">Sin resultados</td>';
    echo '</tr>';
}
?>
