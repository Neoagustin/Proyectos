<?php
session_name('usuario');
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Galeria</title>
</head>

<body>
    <header>
        <?php include('../inc/header.php'); ?>
    </header>

    <span class="ancla_galeria" class="ocultar">GALERIA</span>
    <main class="main_pagina_galeria">
        <h1>GALERIA</h1>
        <div class="main_pagina_galeria_contenedor">
            <img src="../images/Foto1.jpeg" alt="">
            <img src="../images/Foto2.jpeg" alt="">
            <img src="../images/Foto3.jpeg" alt="">
            <img src="../images/Foto4.jpeg" alt="">
            <img src="../images/Foto5.jpeg" alt="">
        </div>
        <div class="main_pagina_galeria_contenedor">
            <img src="../images/Foto6.jpeg" alt="">
            <img src="../images/Foto7.jpeg" alt="">
            <img src="../images/Foto8.jpeg" alt="">
            <img src="../images/Foto9.jpeg" alt="">
            <img src="../images/Foto10.jpeg" alt="">
        </div>
        <div class="main_pagina_galeria_contenedor">
            <img src="../images/Foto11.jpeg" alt="">
            <img src="../images/Foto12.jpeg" alt="">
            <img src="../images/Foto13.jpeg" alt="">
            <img src="../images/Foto14.jpeg" alt="">
        </div>
    </main>

    <footer>
        <?php include('../inc/footer.php'); ?>
    </footer>

    <!-- JS PRINCIPAL -->
    <script src="../js/header.js"></script>
</body>

</html>