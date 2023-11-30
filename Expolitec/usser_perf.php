<?php 
session_start();
require_once('conexion.php');

if (!isset($_SESSION['loggedin'])) {

    header('Location: login.html');
    exit;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="usser_perf.css">
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<header>
            <article id="titfo">
                <section id="titC">
                    <br>
                    <a href="inicio.php"><h1 id="tit">PawTel</h1></a>
                </section>
                <section id="barNav">
                <nav class="nave">
                    <ul class="menu">
                        <li><a href="inicio.php">Inicio</a></li>
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
                <div id="pic"><a href="usser_perf.php"><img id="imag" src="<?php echo'imgs/' . $_SESSION['foto']  ?>" ></a></div>
                </section>
            </article>
        </header>
        <main>
            <article class="left">
                <section class="reser">
                    <section id="con1"><h1 class="text">Tus Reservas<br><hr class="line"></h1>
                        <section class="con2">
                            <section class="imgg"></section>
                            <section class="inf">
                                <section class="con3"><p class="textt">Habitacion:<br></p></section>
                                <section class="con3"><p class="textt">Fecha De Entrada:</p><br></section>
                                <section class="con3"><p class="textt">Fecha De Salida:</p><br></section>
                            </section>
                        </section>

                        <section class="con2">
                            <section class="imgg"></section>
                            <section class="inf">
                            <section class="con3"><p class="textt">Habitacion:<br></p></section>
                                <section class="con3"><p class="textt">Fecha De <span><?= $_SESSION['nombres']?></span></p><br></section>
                                <section class="con3"><p class="textt">Fecha De Salida:</p><br></section>
                            </section>
                        </section>

                        <section class="con2">
                            <section class="imgg"></section>
                            <section class="inf">
                            <section class="con3"><p class="textt">Habitacion:<br></p></section>
                                <section class="con3"><p class="textt">Fecha De Entrada:</p><br></section>
                                <section class="con3"><p class="textt">Fecha De Salida:</p><br></section>
                            </section>
                        </section>
                    </section>
                </section>
                    
            </article>
            <article id="perf">
                <section id="per">
                    <section>
                        <div id="content2">
                            <h2>Información del Usuario</h2>
                            <section id="pe">
                            <section class="photo"></section>
                            </section>
                            <br>

                            <table>
                                <tr>
                                    <td>Usuario:</td>
                                    <td><?= $_SESSION['nombres']?></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><?= $_SESSION['correo']?></td>
                                </tr>
                                <tr>
                                    <td>Fecha de nacimiento:</td>
                                    <td><?= $_SESSION['fech']?></td>
                                </tr>
                                <tr>
                                    <td>Telefono:</td>
                                    <td><?= $_SESSION['telefono']?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="Actualizar-perf.php" class="boten">
                                            <input type="submit" class="submit" value="Editar">
                                        </form>
                                    </td>
                                </tr>
                                <tr >
                                    <td class="tt">
                                        <a href="cerrar-sesion.php" style="color:white;" class="aa"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </section>
                </section>
            </article>
        </main>
</body>
</html>