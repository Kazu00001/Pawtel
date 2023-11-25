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
    <link rel="stylesheet" href="pagos.css">

</head>
<body>
    <header>
        <br><br>
        <h1>Metodo de pago!</h1>
    </header>
    <main>
      <section id="Central">
        <section id="bar1">
            <section id="icon"><img id="can" src="icons/candado.png" alt=""></section>
        </section>
        <section id="cont">
            <form action="pagos-save.php" method="post">
                <label for="Tipo_de_targeta">Targeta de credito (Visa o Mastercard)</label>
                <input type="radio" name="Tipo_de_targeta" value="Visa o Mastercard">
                
                <label for="Tipo_de_targeta">Paypal</label>
                <input type="radio" name="Tipo_de_targeta" value="Paypal">

                <label for="">Numero de la targeta</label>
                <input type="number" name="" placeholder="16 digitos de tu targeta">
                <label for="">Fecha de expiracion</label>
                <input type="date" name="">
                <label for="">CVV2/CVC2</label>
                <input type="number">
                <label for="">Nombre completo</label>
                <input type="text">
            </form>
        </section>
      </section>
    </main>
</body>
</html>