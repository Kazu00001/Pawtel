<?php
    $id= $_POST['id'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $id;?></title>
    <link rel="stylesheet" href="barra_nav_foot.css">
    <link rel="stylesheet" href="cafeteria_cat.css">
</head>
<body>
    <header>
            <article id="titfo">
                <section id="titC">
                    <br>
                    <h1 id="tit">PawTel</h1>
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
                        <li>Inicio</li>
                        <li>Paquetes</li>
                        <li>Servicios</li>
                        <li>Reservaciones</li>
                    </ul>

                </nav>
            </section>
    </header>
    <main>
      <br><br><br>
        <h1 class="titCat"><?php echo $id?></h1><br>
        
        <article id="container-dr">
            <h1 class="titCate">Americano</h1><br>
            <section class="drink"></section>
            <section class="drink"></section>
            <section class="drink"></section>
            <section class="drink"></section>
            <h1 class="titCate">Expresso Tradicional</h1><br>
            <section class="drink"></section>
            <section class="drink"></section>
            <section class="drink"></section>
            <section class="drink"></section>
            <section class="drink"></section>
            <section class="drink"></section>
            <section class="drink"></section>
            <section class="drink"></section>
        </article> 
    </main>
    <footer></footer>
</body>
</html>