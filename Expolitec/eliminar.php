<?php
    require_once('conexion.php');

    $eliminar=$_POST['eliminar'];
    $sql="DELETE FROM reserva WHERE numorder='$eliminar'";
    $add=mysqli_query($Conexion,$sql);

    if($add){
        header('location: reservas-most.php');
    }else{
        echo 'No jaló wey';
    }
?>