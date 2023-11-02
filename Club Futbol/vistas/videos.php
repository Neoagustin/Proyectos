<?php
session_name('usuario');
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Videos</title>
</head>

<body>
    <header>
        <?php include('../inc/header.php'); ?>
    </header>

    <span class="ancla_videos" class="ocultar">VIDEOS</span>
    <main class="main_pagina_videos">
        <h1>VIDEOS</h1>
        <div class="main_pagina_videos_contenedor">
            <div class="main_pagina_videos_contenido">
                <video src="" controls></video>
            </div>
            <div class="main_pagina_videos_contenido">
                <video src="" controls></video>
            </div>
            <div class="main_pagina_videos_contenido">
                <video src="" controls></video>
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