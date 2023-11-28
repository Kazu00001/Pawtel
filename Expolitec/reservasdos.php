<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="reservasdos.css">
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
            <section class="select"> <p class="tit_process">Reserva</p></section>
            <section class="step"><p class="tit_process">Paga</p></section>
        </article>
        <article id="left">
            <section id="container_filter">
                <p class="text">Ingresa tus datos<br><hr class="line"></p>
                <p class="textt"> Datos de Contacto</p>
                <form action="#" method="post">
                    <input class=controles type="hidden" name="nombre" value="">
                    <input class=controles type="hidden" name="correo" value="">
                    
                    <div class="inputboxx">
                        <input type="text" name="nombre" id="mascota" class="inpt" placeholder=" " required><br>
                        <span class="text_input">Nombres</span>
                    </div>

                    <div class="inputboxx">
                        <input type="text" name="apellido" id="mascota" class="inpt" placeholder=" " required><br>
                        <span class="text_input">Apellidos</span>
                    </div>

                    <div class="inputboxxx">
                        <input type="email" name="email" id="mascota" class="inptt" placeholder=" " required><br>
                        <span class="text_input">Email</span>
                    </div>
                    <div class="inputboxxx">
                        <input type="tel" name="telefono" id="mascota" class="inptt" placeholder=" " required><br>
                        <span class="text_input">Telefono</span>
                    </div>

                    <div class="inputboxSm">
                        <select name="mascota" class="inp">
                            <option value=""></option>
                            <option value="1">Perro</option>
                            <option value="2">Gato</option>
                            <option value="3">Ambos</option>
                        </select>
                        <span class="text_input">Mascota</span>
                    </div>
                    <div class="inputboxSm">
                    <select name="huspedes" class="inp">
                            <option value=""></option>
                            <option value="1">Opción 1</option>
                            <option value="2">Opción 2</option>
                            <option value="3">Opción 3</option>
                            <option value="4">Opción 4</option>
                        </select>
                        <span class="text_input">Numero de Mascotas</span>
                    </div>  
                    <input id="bot" type="submit" name="reservar" id="reservar" value="Buscar">

                </form> 
            </section>

            <section id="container_tras">
                <p class="text">Servicion de Traslado<br><hr class="line"></p>
                <form action="#" method="post">
                    <input type="checkbox" name="tras" class="inp">
                    <span class="text_input">Sí, deseo contratar el servicio de traslados</span>
                </form> 
            </section>
        </article>
        <article id="right">
            <br>
            
        </article>
    </main>
</body>
</html>