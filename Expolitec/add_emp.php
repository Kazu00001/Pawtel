<?php
    require_once('conexion.php');

    $name=$_POST['name'];
    $job=$_POST['job'];
    $salary=$_POST['salary'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $image=$_POST['image'];

    $add=mysqli_query($Conexion, "INSERT INTO allemployee(emplenom, categoriaemple, sueldo, antiguedadme, fotemple, telempl)
    VALUES ('$name','$job','$salary','','$image','$phone')");

    if($add){
        header('location: empleados.php');
    }else{
        echo 'No jaló wey';
    }
?>