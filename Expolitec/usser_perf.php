<?php 
session_start();
require_once('conexion.php');

    if (!isset($_SESSION['loggedin'])) {

    header('Location: Login.html');
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
                    <a href="/"><h1 id="tit">PawTel</h1></a>
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
                                <li class="list"><a href="reservas_prueba2.php">Reserva Hotel</a></li>
                                <li class="list"><a href="Reserva-resta.php">Reserva Restaurante</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
                <section id="perfil">
                <a href="usser_perf.php"><div id="pic">
                    <?php
                         ?>
                            <img src="<?php echo'imgs/' . $_SESSION['foto']  ?>" id="imag" >
                
                        <?php 
                    ?>
                        </div>
                    </a>

                </section>
            </article>
        </header>
        <main>
            <article class="left">
            <form action="" method="post">
                    <input type="text" name="searRev" id="searRev" onkeyup="getData()" placeholder="Buscar">
                    </form>
                <section class="reser">
                    <section id="con1"><h1 class="text">Tus Reservas<br><hr class="line"></h1>
                    <section id="con2"><h1 class="text">Tus Reservas<br><hr class="line"></h1>
                    
                    <script>
                            document.addEventListener("DOMContentLoaded", getData);

                            function getData() {
                                let input = document.getElementById("searRev").value;
                                let content = document.getElementById("con2");
                                let url = "reservas-loadper.php";
                                let formData = new FormData();
                                formData.append('searRev', input);

                                    fetch(url, {
                                            method: "POST",
                                            body: formData
                                        }).then(response => response.text())
                                            .then(data => {
                                            console.log(data);
                                            content.innerHTML = data;
                                            }).catch(err => console.log(err));
                                        }
                        </script>
                    </section>
                </section>
                    
            </article>
            <article id="perf">
                <section id="per">
                    <section>
                        <div id="content2">
                            <h2>Información del Usuario</h2>
                            <section id="pe">
                            <section class="photo"><img src="<?php echo'imgs/' . $_SESSION['foto']  ?>" id="imag" ></section>
                            </section>
                            <br>

                            <table>
                                <tr>
                                    <td>Usuario:</td>
                                    <td><?php echo $_SESSION['name']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><?php echo $_SESSION['email']; ?></td>
                                </tr>
                                <tr>
                                    <td>Fecha de nacimiento:</td>
                                    <td><?php echo $_SESSION['fech']; ?></td>
                                </tr>
                                <tr>
                                    <td>Telefono:</td>
                                    <td><?php echo $_SESSION['telefono']; ?></td>
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