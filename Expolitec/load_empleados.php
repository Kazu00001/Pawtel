<?php
require('conexion.php');
$pues=mysqli_query($Conexion, "SELECT DISTINCT categoriaemple FROM allemployee;");
$columas = ['idemp', 'emplenom', 'categoriaemple', 'sueldo', 'antiguedadme', 'fotemple', 'telempl'];
$table = "allemployee";
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
        while($puesto=mysqli_fetch_array($pues)) { 
                
                $selEmp=$puesto['categoriaemple'];
                $emp=mysqli_query($Conexion, "SELECT * FROM allemployee WHERE categoriaemple = '$selEmp';");
        }
               
                /*echo'<h1 class="tit"><?php echo $puesto['categoriaemple']?></h1>';*/
                echo'<?php while($empleado=mysqli_fetch_array($emp)) { ?>';
                echo '<button  class="emp" onclick="enviarFormulario()">';
                    echo'<div class="c_image">';
                        echo'<img src="emp/'.$row['fotemple'].'" class="image">';
                    echo'</div>';
                    echo'<div class="c_name">';
                        echo'<p class="nameEm">'.$row['emplenom'].'</p>';
                    echo'</div>';
                    echo '<p class="puesto">'.$row['categoriaemple'].'</p>';
                echo'</button>';
                echo'<script>';
                        echo 'function enviarFormulario() {';
                            echo"document.getElementById('form1').submit();";
                        echo'}';
                    echo'</script>';
                    echo'<?php } ?>';
    }
} else {
    echo '<tr>';
    echo '<td colspan="17">No hay empleados</td>';
    echo '</tr>';
}
?>
