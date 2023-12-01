<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_bar_foot.css">
    <link rel="stylesheet" href="Tipodehb.css">
    <title>Habitaciones</title>
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
        <article id="title">
            <h2>Tipo de habitaciones</h2>
        </article>
        <section class="busq">
            <form action="" method="post" class="busqe">
                <label for="campo" class="texto">Buscar:</label>
                <input type="text" name="campo" id="campo" class="texto" onkeyup="getData()" placeholder="Habitaciones">
            </form>
        </section>
        <section id=container>
        <table>
            <thead>
                <th>id</th>
                <th>Imagen</th>
                <th>Nombre habitacion</th>
                <th>Personas</th>
                <th>Duchas</th>
                <th>Camas</th>
                <th>Precio</th>
                <th>Descrpt 1</th>
                <th>Personas 2</th>
                <th>Duchas 2</th>
                <th>Camas 2</th>
                <th>Precio 2</th>
                <th>Descrpt 2</th>
                <th>No. habitacion</th>
                <th>No. habitacion disponibles</th>
                <th>Extras</th>
                <th></th>
                <th></th>
            </thead>
            <tbody id="content"></tbody>
            <script>
                document.addEventListener("DOMContentLoaded", getData);

                function getData() {
                    let input = document.getElementById("campo").value;
                    let content = document.getElementById("content");
                    let url = "load.php";
                    let formData = new FormData();
                    formData.append('campo', input);

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
    </main>
</body>
</html>
