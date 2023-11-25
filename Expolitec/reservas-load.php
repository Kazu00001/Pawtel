<?php
require('conexion.php');

$columas = ['numorder','nombreclient','correo','iniestan','finestan','habitaciones','huspedes','ninos','Nombrpaq','Nombre_propetario_target','Numero_de_targeta','Fecha_vencimiento_targeta'];
$table = "reserva";
$columas2 = ['numorder','nombreclient'];
$campo = isset($_POST['searRev']) ? $Conexion->real_escape_string($_POST['searRev']) : null;
$where = '';

if ($campo != null) {
    $where = "WHERE (";
    $cont = count($columas2);

    for ($i = 0; $i < $cont; $i++) {
        $where .= $columas2[$i] . " LIKE '%" . $campo . "%' OR ";
    }

    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$consult = "SELECT " . implode(",", $columas) . " FROM $table $where";
$Conexion->set_charset("utf8");
header('Content-Type: text/html; charset=utf-8');
$result = $Conexion->query($consult);

if ($result === false) {
    die("Error in query: " . $Conexion->error);
}

$num_rows = $result->num_rows;

if ($num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['numorder'] . '</td>';
        echo '<td>' . $row['nombreclient'] . '</td>';
        echo '<td>' . $row['correo'] . '</td>';
        echo '<td>' . $row['iniestan'] . '</td>';
        echo '<td>' . $row['finestan'] . '</td>';
        echo '<td>' . $row['habitaciones'] . '</td>';
        echo '<td>' . $row['huspedes'] . '</td>';
        echo '<td>' . $row['ninos'] . '</td>';
        echo '<td>' . $row['Nombrpaq'] . '</td>';
        echo '<td>' . $row['Nombre_propetario_target'] . '</td>';
        echo '<td>' . $row['Numero_de_targeta'] . '</td>';
        echo '<td>' . $row['Fecha_vencimiento_targeta'] . '</td>';
        echo '<td> <a href="">Editar</a></td>';
        echo '<td> <a href="">Eliminar</a></td>';
        echo '</tr>';
    }
} else {
    echo '<tr>';
    echo '<td colspan="15">Sin resultados</td>';
    echo '</tr>';
}
?>
