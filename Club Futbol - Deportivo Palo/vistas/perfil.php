<?php
session_name('usuario');
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Perfil</title>
</head>

<body>
    <header>
        <?php include('../inc/header.php'); ?>
    </header>

    <main class="main_perfil">
        <div class="main_perfil_contenedor">
            <div class="main_perfil_info">
                <div class="main_perfil_datos">
                    <img src="../images/user_none.png" alt="">
                    <p><strong>Email:</strong> <?php echo $_SESSION['email']?></p>
                    <p><strong>DNI:</strong> <?php echo $_SESSION['numero_documento']?></p>
                    <p><strong>Tel:</strong> <?php echo $_SESSION['area_celular']." ".$_SESSION['numero_celular']?></p>
                    <button class="btn_cambiar_clave">CAMBIAR CONTRASEÑA</button>
                </div>
            </div>
            <div class="main_perfil_carnet">
                <div class="main_perfil_diseno_carnet">
                    <img src="" alt="">
                    <div class="main_perfil_nombre_socio">
                        <div class="main_perfil_nombre_apellido">
                            <p> <?php echo $_SESSION['nombre']." ". $_SESSION['apellido']?> </p>
                        </div>
                        <div class="main_perfil_nro_socio">
                            <p>#000001</p>
                        </div>
                    </div>
                    <div class="main_perfil_tipo_socio">
                        <p><strong>Socio:</strong> Pleno</p>
                    </div>
                    <div class="main_perfil_linea_verde"></div>
                    <div class="main_perfil_linea_roja"></div>
                </div>
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