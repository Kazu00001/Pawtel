<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid;
        }
        table {
            border-collapse: collapse;
            width: 80%;
        }
    </style>
</head>
<body>
    <h2>Tipo de habitaciones</h2>
    <form action="" method="post">
        <label for="campo">Buscar:</label>
        <input type="text" name="campo" id="campo" onkeyup="getData()">
    </form>
    <table>
        <thead>
            <th>idh</th>
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
</body>
</html>
