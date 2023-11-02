<?php
session_name('usuario');
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Marketing</title>
</head>

<body>
    <header>
        <?php include('../inc/header.php'); ?>
    </header>

    <main class="main_marketing">
        <span id="ancla_marketing" class="ocultar">Marketing</span>
        <h1>MARKETING</h1>
        <div class="main_marketing_contenedor">
            <div class="main_marketing_contenido almacen">
                <img src="../images/Imagen_Main_1.jpeg" alt="">
                <h3>ALMACEN EL CHELO</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident in atque minus quis ut saepe laboriosam id, blanditiis consequatur quia ad nostrum, sint at non facilis delectus nam assumenda reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, asperiores natus eligendi a minima quis neque nulla, cupiditate dignissimos laboriosam repellendus optio impedit ipsam perferendis voluptatibus reiciendis dolor vel et?</p>
            </div>
            <div class="main_marketing_contenido lns">
                <img src="../images/Imagen_Main_1.jpeg" alt="">
                <h3>LNS SPORT</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, numquam. Expedita laudantium corporis recusandae! Non, cupiditate perferendis culpa eligendi voluptatum ullam corrupti perspiciatis rerum saepe cumque nostrum ex a quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur odio omnis nisi ipsa facere? Culpa libero quos impedit pariatur doloribus cumque eius iste nemo numquam id, veritatis, molestiae perferendis delectus?</p>
            </div>
        </div>
        <div class="main_marketing_contacto">
            <h2 class="main_marketing_titulo">Contactate con Marketing</h2>
            <div class="contenedor_formulario">
                <form class="main_marketing_form" action="https://formspree.io/f/moqbgeka" method="POST">
                    <div class="contenedor_seccion_formulario_marketing">
                        <label for="nombre">Nombre y Apellido</label>
                        <input type="text" id="nombre" name="nombre" maxlength="32" required>
                    </div>
                    <div class="contenedor_seccion_formulario_marketing">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" maxlength="48" required>
                    </div>
                    <div class="contenedor_seccion_formulario_marketing">
                        <label for="telefono">Telefono</label>
                        <input type="text" id="telefono" name="telefono" maxlength="32" required>
                    </div>
                    <div class="contenedor_seccion_formulario_marketing">
                        <label for="mensaje">Mensaje:</label>
                        <textarea name="message" id="mensaje" maxlength="256" required></textarea>
                    </div>
                    <div class="contenedor_boton_formulario_marketing">
                        <button type="submit">
                            <span>Enviar</span>
                            <span>></span>
                        </button>
                    </div>
                </form>
            </div>
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