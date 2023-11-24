<?php
    require_once('conexion.php');

    $name=$_POST['name'];
    $birth=$_POST['date'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $workArea=$_POST['workArea'];
    $job=$_POST['job'];
    $schedule=$_POST['schedule'];
    $bank=$_POST['bank'];
    $salary=$_POST['salary'];
    $image=$_POST['image'];

    $add=mysqli_query($Conexion, "INSERT INTO employees(nameEmp, birthEmp, phoneEmp, emailEmp, workArea, jobEmp, scheduleEmp, bankEmp, salary, imageEmp)
    VALUES ('$name','$birth','$phone','$email','$workArea','$job','$schedule','$bank','$salary','$image')");

    if($add){
        header('location: empleados.php');
    }else{
        echo 'No jaló wey';
    }
?>