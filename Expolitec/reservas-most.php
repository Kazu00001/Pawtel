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
                <a href="#"><h1 id="tit">PawTel</h1></a>
            </section>
            <section id="barNav">
            <nav class="nave">
                <ul class="menu">
                <li><a href="#">Reservaciones</a>
                        <div class="topM"></div>
                        <ul class="menuv">
                            <li class="list"><a href="reservas-most.php">Mostrar Reservaciones</a></li>
                            <li class="list"><a href="Tipodehb.php">Mostrar Habitaciones</a></li>
                            <li class="list"><a href="most-revers-rest.php">Mostrar Reservaciones de Restaurante</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Empleados</a>
                        <div class="topM"></div>
                        <ul class="menuv">
                            <li class="list"><a href="empleados.php">Lista de Empleados</a></li>
                        </ul>
                    </li>
                    <li><a href="inventario-mostr.php">Inventario</a></li>
                </ul>

            </nav>
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
                    <th>id_reserva</th>
                    <th>id_habitacion</th>
                    <th>id_usuario</th>
                    <th>Inicio de estancia</th>
                    <th>Fin de estancia</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Tipo de habitacion</th>
                    <th>Email</th>
                    <th>Telfono</th>
                    <th>Mascota</th>
                    <th>No. M</th>
                    <th>Nombre propetario target</th>
                    <th>Numero de targeta</th>
                    <th>Fecha vencimiento targeta</th>
                    <th colspan="2">Otras</th>
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