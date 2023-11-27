<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="reservas_prueba.css">
    <script type="text/javascript" src="barr.js"></script>
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
    <main>
        <article id="process">
            <section class="select"> <p class="tit_process">Buscar habitacion</p></section>
            <section class="step"> <p class="tit_process">Reserva</p></section>
            <section class="step"><p class="tit_process">Paga</p></section>
        </article>
        <article id="left">
            <section id="container_filter">
                <p class="text">Busqueda <br><hr class="line"></p>
                <form action="#" method="post">
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
                        <span class="text_input">Adultos</span>
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
                        <span class="text_input">Niños</span>
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
                    <input id="bot" type="submit" name="reservar" id="reservar" value="Buscar">

                </form> 
            </section>
        </article>
        <article id="right">
            <br>
            <section class="container_room">
                <div class="c_image">
                    <img src="../Expolitec/rooms/room1.jpg"  class="img">
                </div>
                <div class="info_room">

                </div>
                <div class="c_reserve">
                    
                </div>
            </section>
            <section class="container_room">
                <div class="c_image">

                </div>
                <div class="info_room">

                </div>
                <div class="c_reserve">
                    
                </div>
            </section>
            <section class="container_room">
                <div class="c_image">

                </div>
                <div class="info_room">

                </div>
                <div class="c_reserve">
                    
                </div>
            </section>
        </article>
    </main>
</body>
</html>