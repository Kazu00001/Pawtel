<?php
    require_once('conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista Empleados</title>
    <link rel="stylesheet" href="empleados.css">
    <link rel="stylesheet" href="inventario.css">
    <link rel="stylesheet" href="admin_bar_foot.css">
    <style>
        table {
    width: 80%;
    margin: 20px auto; 
    border-collapse: collapse;
    background-color: #333; 
    color: #fff; 
    border-radius: 12px; 
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

th, td {
    border: 1px solid #444; 
    padding: 12px;
    text-align: center;
}

th {
    background-color: #4a90e2;
    color: #fff;
}
tr:nth-child(even) {
    background-color: #2c2c2c; 
}
    </style>
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
                        <li><a href="empleados.php">Empleados</a></li>
                        <li><a href="inventario-mostr.php">Inventario</a></li>
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
                    <input type="text" name="searP" id="searP" onkeyup="getData()" placeholder="Buscar">
                </form>
                <form action="form_addEmp.html" method="post">
                    <input type="submit" value="Nuevo producto" id="addEmp">
                </form>
            </section>
            <section class="container_employees" id="content_invent2">
                <table>
                    <thead>
                    <th>id</th>
                    <th>Nombre del producto</th>
                    <th>Descripcion</th>
                    <th>Esxistencia el mes pasado</th>
                    <th>Stock</th>
                    </thead>
                    <tbody id="content_invent"></tbody>
                <script>
                document.addEventListener("DOMContentLoaded", getData);

                function getData() {
                    let input = document.getElementById("searP").value;
                    let content = document.getElementById("content_invent");
                    let url = "inventario-load.php";
                    let formData = new FormData();
                    formData.append('searP', input);

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