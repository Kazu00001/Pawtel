<?php
    require_once('conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista Empleados</title>
 
    <link rel="stylesheet" href="admin_bar_foot.css">
    <link rel="stylesheet" href="reservas-css.css">
    
    
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
        <article id="container">
            <section id="container_search">
                <form action="" method="post">
                    <input type="text" name="searRev" id="searRev" onkeyup="getData()" placeholder="Buscar">
                </form>
                <form action="form_addEmp.html" method="post">
                    <input type="submit" value="Nuevo producto" id="addEmp">
                </form>
            </section>
            <section id="content_invent2">
                <table>
                    <thead>
                    <th>Numero de orden</th>
                    <th>Nombre cliente</th>
                    <th>Correo</th>
                    <th>Inicio de estancia</th>
                    <th>Fin de estancia</th>
                    <th>Habitaciones</th>
                    <th>Huspedes</th>
                    <th>Niños</th>
                    <th>Nombre del paquete</th>
                    <th>Nombre targeta</th>
                    <th>Numero de targeta</th>
                    <th>Fecha vencimiento targeta</th>
                    </thead>
                    <tbody id="content_invent"></tbody>
                <script>
                document.addEventListener("DOMContentLoaded", getData);

                function getData() {
                    let input = document.getElementById("searRev").value;
                    let content = document.getElementById("content_invent");
                    let url = "reservas-load.php";
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
                </table>
            </section>

<!-------------------------------------------------------------------------->
        </article>
    </main>
</body>
</html>