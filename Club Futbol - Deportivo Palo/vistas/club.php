<?php
session_name('usuario');
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Club</title>
</head>

<body>
    <header>
        <?php include('../inc/header.php'); ?>
    </header>

    <span id="ancla_datos" class="ocultar">Datos</span>
    <main class="main_club">
        <h1>DATOS</h1>
        <div class="main_club_datos_flex">
            <div class="main_club_datos">
                <h2>NOMBRE COMPLETO</h2>
                <h3>Club de Futbol Deportivo Palo</h3>
                <h2>FECHA DE FUNDACION</h2>
                <h3>27 de Abril de 2022</h3>
                <h2>TELEFONO</h2>
                <h3>+54 011 3269-2245</h3>
                <h2>NUMERO DE SOCIOS</h2>
                <h3>0</h3>
                <h2>CAMISETA OFICIAL</h2>
                <h3>Blanca con linea tricolor verde, blanca y roja.</h3>
                <h2>CAMISETA ALTERNATIVA</h2>
                <h3>Negra con linea tricolor verde, blanca y roja.</h3>
                <h2>PROVEEDOR DE INDUMENTARIA</h2>
                <h3>LNS SPORTS</h3>
                <h2>SPONSORS</h2>
                <h3>Almacen El Chelo</h3>
            </div>
            <div class="main_club_imagenes_datos">
                <img src="../images/Imagen_Main_1.jpeg" alt="">
                <img src="../images/Imagen_Main_2.jpeg" alt="">
                <img src="../images/Imagen_Main_3.jpeg" alt="">
            </div>
        </div>
        <span id="ancla_historia" class="ancla">Historia</span>
        <div class="contenedor_ancla"></div>
        <h1>HISTORIA</h1>
        <div class="main_club_historia_contenedor1">
            <img class="main_club_historia_imagen1" src="../images/Imagen_Main_3.jpeg" alt="">
            <p class="main_club_historia_parrafo"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis libero ipsa saepe, ullam amet, repellat necessitatibus consequuntur ratione reprehenderit itaque aut rerum optio quam tenetur voluptatibus explicabo laudantium quibusdam odit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni repellendus molestias, porro accusantium laborum harum provident aspernatur esse id facilis. Explicabo ipsa facilis in quasi eius nam tempora eos dolores. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate laborum ab mollitia quis quidem minima nulla non? Voluptatem facere temporibus sapiente corrupti quaerat saepe, in dolorum sed vero quisquam nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias est officia totam debitis itaque iusto perspiciatis ab fugit dolorum, consequuntur quibusdam hic impedit veritatis quod optio corrupti beatae repellendus dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore hic quam a rem ducimus eaque, facilis eveniet quisquam nam, nobis voluptate, sint illum vitae nostrum quod et! Deleniti, possimus animi.
            </p>
            <img class="main_club_imagen_ocultar" src="../images/Imagen_Main_1.jpeg" alt="">
        </div>
        <div class="main_club_historia_contenedor2">
            <img class="main_club_historia_imagen2" src="../images/Imagen_Main_2.jpeg" alt="">
            <p class="main_club_historia_parrafo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis libero ipsa saepe, ullam amet, repellat necessitatibus consequuntur ratione reprehenderit itaque aut rerum optio quam tenetur voluptatibus explicabo laudantium quibusdam odit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni repellendus molestias, porro accusantium laborum harum provident aspernatur esse id facilis. Explicabo ipsa facilis in quasi eius nam tempora eos dolores. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate laborum ab mollitia quis quidem minima nulla non? Voluptatem facere temporibus sapiente corrupti quaerat saepe, in dolorum sed vero quisquam nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias est officia totam debitis itaque iusto perspiciatis ab fugit dolorum, consequuntur quibusdam hic impedit veritatis quod optio corrupti beatae repellendus dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore hic quam a rem ducimus eaque, facilis eveniet quisquam nam, nobis voluptate, sint illum vitae nostrum quod et! Deleniti, possimus animi.
            </p>
            <img class="main_club_imagen_ocultar" src="../images/Imagen_Main_1.jpeg" alt="">
        </div>
    </main>

    <footer>
        <?php include('../inc/footer.php'); ?>
    </footer>

    <!-- JS PRINCIPAL -->
    <script src="../js/modo_oscuro.js"></script>
    <script src="../js/header.js"></script>
</body>

</html>