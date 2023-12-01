<?php
    require_once('conexion.php');
    $name=$_POST['name'];
    $descrip=$_POST['descrip'];
    $exist=$_POST['exist'];
    $stock=$_POST['stock'];

    $agregar=mysqli_query($Conexion,"INSERT INTO invenpodr(nombreprod, descrip, existnafterm, stock) VALUES ('$name','$descrip','$exist','$stock')");
    if ($agregar) {
        header('location:inventario-mostr.php');
    }else {
        echo 'no jalo compa';
    }

?>