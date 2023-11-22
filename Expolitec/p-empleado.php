<?php
    require_once('conexion.php');
    $id=$_POST['idEmp'];

    $idEmp=mysqli_query($Conexion, "SELECT * FROM allemployee WHERE idemp = '$id'");
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
                    <a href="inicio.php"><h1 id="tit">PawTel</h1></a>
                </section>
                <section id="search">
                    <br><br><br>
                    <input type="search" id="sear">
                </section>
                <section id="perfil">
                    <div id="pic"></div>
                </section>
            </article>
            <section id="bnav">
                <nav class="nave">
                    <ul class="menu">
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="#">Paquetes</a></li>
                        <li><a href="#">Servicios</a>
                            <ul class="menuv">
                                <li class="list"><a href="cafeteria.php">Cafeteria</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Reservaciones</a>
                            <ul class="menuv">
                                <li class="list"><a href="reservas.php">Reserva Hotel</a></li>
                                <li class="list"><a href="Reserva-resta.php">Reserva Restaurante</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
            </section>
            
        </header>
    <main>
        <article class="emp">
            <section class="perf">
            <section id="fotop">
                <div id="pict">
                    <img src="emp/<?php echo $emp['fotemple']?>" class="image">
                </div>
                </section>
                <section class="nome"><h1 id="name"><?php echo $emp['emplenom']?></h1></section>
            </section>
            <section class="data">
                <section class="data2">
                    <section class="detail">
                        <h1 id="Detal">Detalles del Empleado</h1><br>
                        <p class="dat">Estado de Empleado:</p>
                        <p class="dat">Fecha de Nacimiento:</p>
                        <p class="dat">Email:</p>
                        <p class="dat">Numero Telefonico:</p>
                    </section>
                    <section class="detaile">
                        <p class="dat">Area de Trabajo:</p>
                        <p class="dat">Horario de Trabajo:</p>
                        <p class="dat">Puesto de Trabajo:</p>
                        <p class="dat">Cuenta Bancaria:</p>
                        <p class="dat">Salario Mensual:</p>
                    </section>
                </section>
            </section>
        </article>
    </main>
</body>
</html>