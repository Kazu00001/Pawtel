<?php
require('conexion.php');

$columas = ['id','nombreprod','descrip','existnafterm','stock'];
$table = "invenpodr";
$campo = isset($_POST['searP']) ? $Conexion->real_escape_string($_POST['searP']) : null;
$where = '';

if ($campo != null) {
    $where = "WHERE (";
    $cont = count($columas);

    for ($i = 0; $i < $cont; $i++) {
        $where .= $columas[$i] . " LIKE '%" . $campo . "%' OR ";
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
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['nombreprod'] . '</td>';
        echo '<td>' . $row['descrip'] . '</td>';
        echo '<td>' . $row['existnafterm'] . '</td>';
        echo '<td>' . $row['stock'] . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr>';
    echo '<td colspan="17">Sin resultados</td>';
    echo '</tr>';
}
?>
