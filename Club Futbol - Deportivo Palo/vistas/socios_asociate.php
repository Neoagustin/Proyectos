<?php
session_name('usuario');
session_start();
?>
<?php
$dia = date('j');
if ($dia == 1 or $dia == 2 or $dia == 3 or $dia == 4 or $dia == 5 or $dia == 6 or $dia == 7 or $dia == 8 or $dia == 9) {
    $dia = date('0' . 'j');
}
$mes = date('n');
if ($mes == 1 or $mes == 2 or $mes == 3 or $mes == 4 or $mes == 5 or $mes == 6 or $mes == 7 or $mes == 8 or $mes == 9) {
    $mes = date('0' . 'n');
}
$año = date('Y');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Asociate</title>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include('../inc/header.php'); ?>
    </header>

    <span id="ancla_asociate" class="ocultar">Asociate</span>
    <main class="main_asociate">
        <p class="titulo_asociate">NUEVA/O SOCIA/O TITULAR</p>
        <div class="mostrar_mensajes_asociate"></div>
        <form class="formulario_asociate_socios">
            <div class="contenedor_formulario_asociate">

                <!-- primera fila -->
                <div class="formulario_socios_1">
                    <input class="formulario_input" type="text" name="nombre_asociate_socios" pattern="[a-zA-Z]{3,15}" minlength="3" maxlength="15" required>
                    <label class="formulario_label">Nombre</label>
                </div>
                <div class="formulario_socios_2">
                    <input class="formulario_input" type="text" name="apellido_asociate_socios" pattern="[a-zA-Z]{3,15}" minlength="3" maxlength="15" required>
                    <label class="formulario_label">Apellido</label>
                </div>

                <!-- segunda fila -->
                <div class="formulario_socios_3">
                    <input class="formulario_input" type="date" name="fecha_nacimiento_asociate_socios" max="<?php echo "$año-$mes-$dia" ?>" min="1915-01-01">
                    <label class="formulario_label">Fecha de nacimiento</label>
                </div>
                <div class="formulario_socios_4 select">
                    <select class="formulario_input select" name="sexo_asociate_socios">
                        <option value="Vacio"></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="No Binario">No binario</option>
                    </select>
                    <label class="formulario_label">Sexo</label>
                </div>
                <div class="formulario_socios_5">
                    <input class="formulario_input documento" type="text" name="tipo_doc" value="DNI">
                    <label class="formulario_label">Documento</label>
                </div>
                <div class="formulario_socios_6">
                    <input class="formulario_input" type="text" name="num_doc_asociate_socios" minlength="7" required>
                    <label class="formulario_label">Número</label>
                </div>

                <!-- tercera fila -->
                <div class="formulario_socios_7">
                    <input class="formulario_input" type="email" name="email_asociate_socios" required>
                    <label class="formulario_label">Email</label>
                </div>
                <div class="formulario_socios_8">
                    <input class="formulario_input" type="email" name="cofirmar_email_asociate_socios" required>
                    <label class="formulario_label">Confirmar email</label>
                </div>

                <!-- cuarta fila -->
                <div class="formulario_socios_9">
                    <div class="contenedor_icono_ojo_formulario_clave">
                        <i id="icono_ojo_abierto_formulario_clave" class="icono_ojo_abierto_formulario_clave fa-solid fa-eye-slash"></i>
                    </div>
                    <input class="formulario_input input_clave" type="password" name="clave_asociate_socios" min="0" pattern="[a-zA-Z0-9@_-]{7,14}" minlength="7" maxlength="14" required>
                    <label class="formulario_label">Clave</label>
                </div>

                <div class="formulario_socios_10">
                    <div class="contenedor_icono_ojo_formulario_clave">
                        <i id="icono_ojo_abierto_formulario_confirmClave" class="icono_ojo_abierto_formulario_confirmClave fa-solid fa-eye-slash"></i>
                    </div>
                    <input class="formulario_input input_confirmarclave" type="password" name="confirmarClave_asociate_socios" min="0" pattern="[a-zA-Z0-9@_-]{7,14}" maxlength="14" required>
                    <label class="formulario_label">Confirmar clave</label>
                </div>

                <div class="formulario_socios_11">
                    <input class="formulario_input" type="text" name="cod_area_celular_asociate_socios" placeholder="011">
                    <label class="formulario_label">Cod. área</label>
                </div>

                <div class="formulario_socios_12">
                    <input class="formulario_input" type="text" name="numero_celular_asociate_socios" min="6" max="16" required>
                    <label class="formulario_label">Celular</label>
                </div>
            </div>
            <div class="contenedor_btn_formulario_asociate">
                <button type="submit" class="btn_formulario_asociate" name="btn_formulario_asociate_socios">
                    <span>Continuar</span>
                    <span><i class="fa-solid fa-check"></i></span>
                </button>
            </div>
        </form>


    </main>

    <footer>
        <?php include('../inc/footer.php'); ?>
    </footer>

    <!-- JS PRINCIPAL -->
    <script src="../js/formulario_asociate.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/modo_oscuro.js"></script>
    <script src="../js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</body>

</html>