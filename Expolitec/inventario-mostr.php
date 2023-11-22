<?php
    require_once('conexion.php');

  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista Empleados</title>
    <link rel="stylesheet" href="empleados.css">
    <link rel="stylesheet" href="admin_bar_foot.css">
    <style>
     /* Estilo para el encabezado */
body {
    background-color: #1f1f1f; /* Fondo oscuro para resaltar el diseño futurista */
    font-family: 'Roboto', sans-serif; /* Utilizando una fuente moderna */
}

table {
    width: 80%;
    margin: 20px auto; /* Centra la tabla en la página */
    border-collapse: collapse;
    background-color: #333; /* Fondo oscuro para el cuerpo de la tabla */
    color: #fff; /* Color de texto blanco para contrastar con el fondo oscuro */
    border-radius: 12px; /* Bordes redondeados para la tabla */
    overflow: hidden; /* Asegura que los bordes redondeados no se vean afectados por el contenido */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Sombra suave para un efecto flotante */
}

th, td {
    border: 1px solid #444; /* Bordes con un tono más claro que el fondo de la tabla */
    padding: 12px;
    text-align: center;
}

th {
    background-color: #4a90e2; /* Fondo azul claro para las celdas del encabezado */
    color: #fff; /* Texto blanco para el encabezado */
}

/* Estilo para celdas alternas, para mejorar la legibilidad */
tr:nth-child(even) {
    background-color: #2c2c2c; /* Fondo oscuro para filas pares */
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