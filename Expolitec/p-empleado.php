<?php
    require_once('conexion.php');
    $id=$_POST['idEmp'];

    $idEmp=mysqli_query($Conexion, "SELECT * FROM employees WHERE idEmp = '$id'");
    $emp=mysqli_fetch_array($idEmp);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Perfil Empleado</title>
    <link rel="stylesheet" href="p-empleado.css">
    <link rel="stylesheet" href="admin_bar_foot.css">
</head>
<body>
<header>
            <article id="titfo">
                <section id="titC">
                    <br>
                    <a href="/"><h1 id="tit">PawTel</h1></a>
                </section>
                <section id="barNav">
                <nav class="nave">
                    <ul class="menu">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="#">Paquetes</a></li>
                        <li><a href="#">Servicios</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="cafeteria.php">Cafeteria</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Reservaciones</a>
                            <div class="topM"></div>
                            <ul class="menuv">
                                <li class="list"><a href="reservas.php">Reserva Hotel</a></li>
                                <li class="list"><a href="Reserva-resta.php">Reserva Restaurante</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
                </section>
                <section id="perfil">
                    <div id="pic"></div>
                </section>
            </article>
        </header>
    <main>
        <article class="emp">
            <section class="perf">
            <section id="fotop">
                <div id="pict">
                    <img src="emp/<?php echo $emp['imageEmp']?>" class="image">
                </div>
                </section>
                <section class="nome"><h1 id="name"><?php echo $emp['nameEmp']?></h1></section>
            </section>
            <section class="data">
                <section class="data2">
                    <section class="detail">
                        <h1 id="Detal">Detalles del Empleado</h1><br>
                        <p class="dat">Estado de Empleado: <span class="gray">Activo</span></p>
                        <p class="dat">Fecha de Nacimiento: <span class="gray"><?php echo $emp['birthEmp']?></span></p>
                        <p class="dat">Email:  <span class="gray"><?php echo $emp['emailEmp']?></span></p>
                        <p class="dat">Numero Telefonico:  <span class="gray"><?php echo $emp['phoneEmp']?></span></p>
                    </section>
                    <section class="detaile">
                        <p class="dat">Area de Trabajo:  <span class="gray"><?php echo $emp['workArea']?></span></p>
                        <p class="dat">Horario de Trabajo:  <span class="gray"><?php echo $emp['scheduleEmp']?></span></p>
                        <p class="dat">Puesto de Trabajo:  <span class="gray"><?php echo $emp['jobEmp']?></span></p>
                        <p class="dat">Cuenta Bancaria:  <span class="gray"><?php echo $emp['bankEmp']?></span></p>
                        <p class="dat">Salario Mensual:  <span class="gray"><?php echo $emp['salary']?></span></p>
                    </section>
                </section>
            </section>
        </article>
    </main>
</body>
</html>