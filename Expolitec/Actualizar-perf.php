<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="actu.css">
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Cabin+Sketch&display=swap" rel="stylesheet">
</head>
<body>
<header>
            <article id="titfo">
                <section id="titC">
                    <br>
                    <a href="#"><h1 id="tit">PawTel</h1></a>
                </section>
                <section id="barNav">
                <h1>Actualizar Perfil</h1>
            </article>
        </header>
    
    <main id="main2">
        <aside id="for2">
            <br><br>
            <form action="actu-datos.php" method="post" class="form">
                <h2 class="title" >Actualizacion de datos</h2>
                    <div class="flex">
                        <input type="hidden" name="ideup"  value="<?php echo $_SESSION['id'] ?>">
                    <label>
                        <input class="input" type="text" name="nombre" placeholder="" required="">
                        <span>Nombre(s)</span>
                    </label>
                </div>  
                <label>
                    <input class="input" type="email" name="correo" placeholder="" required="">
                    <span>Email</span>
                </label>
                    <label>
                        
                        <input class="input" type="date" name="fecha" placeholder="" required="">
                        <span>Fecha de nacimiento</span>
                    </label>
                    <label>
                        <input class="input" type="number" name="telefono" placeholder="" required="">
                        <span>Teléfono</span>
                    </label>

                    <input type="submit" value="Actualizar"  class="submit">
                    
            </form>
        </aside>
    </main>
</body>
</html>