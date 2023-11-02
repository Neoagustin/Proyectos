<?php
session_name('usuario');
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Accede</title>
</head>

<body>
    <header>
        <?php include('../inc/header.php'); ?>
        <title>C.F. Deportivo Palo - Acceder</title>
        <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    </header>

    <main class="main_socios_acceso">
        <div class="contenedor_formulario_acceso_socio">
            <div class="contenedor_mostrar_mensaje_acceso"></div>
            <form class="formulario_acceso_socios">
                <div class="formulario_socios_acceso_1">
                    <i class="icono_sobre_acceso_socios fa-solid fa-envelope"></i>
                    <div>
                        <input type="text" class="formulario_input_acceso" name="email_acceso_socios" placeholder="EMAIL">
                        <label class="formulario_label_acceso">Email</label>
                    </div>
                </div>
                <div class="formulario_socios_acceso_2">
                    <i class="icono_huella_acceso_socios fa-solid fa-fingerprint"></i>
                    <div>
                        <input type="password" class="formulario_input_acceso" name="clave_acceso_socios" placeholder="CLAVE">
                        <label class="formulario_label_acceso">Constraseña</label>
                    </div>
                </div>
                <div class="contenedor_btn_acceso_socios">
                    <input type="submit" class="btn_acceso_socios" name="btn_acceso_socios" value="ENTRAR >">
                    <a href="./socios_asociate.php">Si no tenés usuario/a hacé clic aquí.</a>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <?php include('../inc/footer.php'); ?>
    </footer>

    <!-- JS PRINCIPAL -->
    <script src="../js/formulario_acceso.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/modo_oscuro.js"></script>
    <script src="../js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</body>

</html>