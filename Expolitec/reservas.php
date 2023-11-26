<?php
session_start();
    if (!isset($_SESSION['loggedin'])) {

    header('Location: Login.html');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="reservas.css">
    <link rel="stylesheet" href="barra_nav_foot.css">
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
    <aside>
        
    </aside>
    <main>
        <article id="izquierda">
            <section class="FormIzq">
                <form action="reservas-save.php" method="post">
                    <input class=controles type="hidden" name="nombre" value="<?php echo  $_SESSION['name'] ?>">
                    <input class=controles type="hidden" name="correo" value="<?php echo $_SESSION['email'] ?>">
                    <div class="inputbox">
                        <input type="date" name="icioestan" id="icioestan" class="inp" placeholder=" " required><br>
                        <span class="text_input">Fecha de Entrada</span>
                    </div>
                    <div class="inputbox">
                        <input type="date" name="finestan" id="finestan" class="inp" placeholder=" " required><br>
                        <span class="text_input">Fecha de Salida</span>
                    </div>
                    <div class="inputboxSm">
                        <select name="habitaciones" class="inp">
                            <option value=""></option>
                            <option value="1">Opción 1</option>
                            <option value="2">Opción 2</option>
                            <option value="3">Opción 3</option>
                            <option value="4">Opción 4</option>
                            <option value="5">Opción 5</option>
                            <option value="6">Opción 6</option>
                            <option value="7">Opción 7</option>
                            <option value="8">Opción 8</option>
                            <option value="9">Opción 9</option>
                            <option value="10">Opción 10</option>
                        </select>
                        <span class="text_input">Habitaciones</span>
                    </div>
                    <div class="inputboxSm">
                    <select name="huspedes" class="inp">
                            <option value=""></option>
                            <option value="1">Opción 1</option>
                            <option value="2">Opción 2</option>
                            <option value="3">Opción 3</option>
                            <option value="4">Opción 4</option>
                            <option value="5">Opción 5</option>
                            <option value="6">Opción 6</option>
                            <option value="7">Opción 7</option>
                            <option value="8">Opción 8</option>
                            <option value="9">Opción 9</option>
                            <option value="10">Opción 10</option>
                        </select>
                        <span class="text_input">Huespedes</span>
                    </div>
                    <div class="inputbox">
                        <select name="ninos" class="inp">
                            <option value=""></option>
                            <option value="1">Opción 1</option>
                            <option value="2">Opción 2</option>
                            <option value="3">Opción 3</option>
                            <option value="4">Opción 4</option>
                            <option value="5">Opción 5</option>
                            <option value="6">Opción 6</option>
                            <option value="7">Opción 7</option>
                            <option value="8">Opción 8</option>
                            <option value="9">Opción 9</option>
                            <option value="10">Opción 10</option>
                        </select>
                        <span class="text_input">Niños</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="mascota" id="mascota" class="inp" placeholder=" " required><br>
                        <span class="text_input">Mascota</span>
                    </div>
                    <div class="inputbox">
                    <!-- hace consulta con la base de datos y trae las habitaciones -->
                        <select name="tipohab" id="tipohab" class="inp">
                            <option value=""></option>
                        <?php 
                            include('conexion.php');
                            $produc="SELECT * FROM habitaciones";
                            $resul=mysqli_query($Conexion,$produc);
                            while($valores= mysqli_fetch_array($resul)){
                            echo '<option value="'.$valores['idh'].'">'.$valores['nomh'].'</option>';
                            }
                        ?>
                        </select>
                        <span class="text_input">Tipo de habitacion</span>
                    </div>
                    <input id="bot" type="submit" name="reservar" id="reservar" value="Reservar">
                    <div class="tc">
                    <p class=p>Estoy de Acuerdo con los <a href="#">Terminos y Condiciones</a></p><br>
                    </div>
                </form> 
            </section>
        </article>
        <br>
        <section id="derecha">
                <!-- es la estructura del contenrdor de la habitacion -->
                <!-- llena los contendores con la informacion de las habotaciones y diseño ya es la maquetacion en codigo para que solo acomodes va -->
            <!-- little dog -->
            <?php	
            include('conexion.php');
            $produc="SELECT * FROM habitaciones";
            $resul=mysqli_query($Conexion,$produc);
            while($valores= mysqli_fetch_array($resul)){ ?> 

               <aside id="der">
                <br>
                        <section class="imgnpri">
                            <img src="<?php echo $valores['Imagen']; ?>" class="prinimg"> <!-- imagen de habitacion -->
                        </section>
                        <br>
                    
                    <h1 class="tituloHabitaciones"><?php echo $valores['nomh']; ?></h1>
                    <hr>
                    <section class="iconos">
                    <img src="persona.png" class="img"><p><?php echo $valores['pers']; ?></p> <!-- foto persona-->
                    </section>
                    <section class="iconos">
                    <img src="ducha.png"  class="img"><p><?php echo $valores['duch']; ?></p>  <!-- ducha-->
                    </section>
                    <section class="iconos">
                    <img src="cama.png" class="img"><p><?php echo $valores['cams']; ?></p>  <!-- camas  -->
                    </section>
                    <section class="iconos">
                    <p class="precios">$<?php echo $valores['precio']; ?></p>
                    </section>
                    <section class="descri">
                        <hr>
                    <p class="descrip">Esta habitacion Incluye: <?php echo $valores['descriph1']; ?></p>
                    <hr>
                    </section>
                    <section class="iconos">
                    <img src="persona.png" class="img"><p><?php echo $valores['pers2']; ?></p> <!-- foto persona  -->
                    </section>
                    <section class="iconos">
                    <img src="ducha.png" class="img"><p><?php echo $valores['duch2']; ?></p> <!-- ducha-->
                    </section>
                    <section class="iconos">
                    <img src="cama.png" class="img"><p><?php echo $valores['cams2']; ?></p> <!-- camas  -->
                    </section>
                    <section class="iconos">
                    <p class="precios">$<?php echo $valores['precio2']; ?></p>
                    </section class="iconos">
                     
                <section class="descri">
                    <hr>
                <p class="descrip">Esta Habitacion Incluye: <?php echo $valores['descriph2']; ?></p>
                </section>
            </aside>
            <?php }
            ?>
        </section>
    </main>
</body>
</html>