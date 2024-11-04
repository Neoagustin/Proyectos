<?php
session_name('usuario');
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Socios</title>
</head>

<body>
    <header>
        <?php include('../inc/header.php'); ?>
    </header>

    <span id="ancla_informacion" class="ocultar">informacion</span>
    <main class="main_socios">
        <h1>INFORMACION</h1>
        <div class="contenedor_principal_socios">
            <div class="contenedor_izquierda_socios">
                <div class="contenedor_izquierda_informacion">
                    <h2>BENEFICIOS</h2>
                    <ul>
                        <li>La posibilidad de ganarte la remera original de Deportivo Palo.</li>
                        <li>La posibilidad de ganarte descuentos en el Almacen El Chelo.</li>
                        <li>La posibilidad de participar de sorteos.</li>
                    </ul>

                    <div>

                        <h3>PARA MAYOR INFORMACION:</h3>
                        <p><a href=""><span><i class="icono_informacion fa-brands fa-whatsapp"></i></span> 54 9 11 3269-2245</a></p>
                        <p><a href=""><span><i class="icono_informacion fa-solid fa-envelope"></i></span> lauticapo1910cavs@gmail.com</a></p>
                    </div>
                    <span id="ancla_valores" class="ancla">valores</span>
                    <div class="contenedor_ancla"></div>
                    <h1>VALORES</h1>
                    <table class="main_socios_tabla">
                        <tr>
                            <td class="main_socios_tabla_none"></td>
                            <td class="main_socios_tabla_titulo main_socios_tabla_titulo_izq">PAGO</td>
                            <td class="main_socios_tabla_titulo">PLENO</td>
                            <td class="main_socios_tabla_titulo main_socios_tabla_titulo_der">SEMIPLENO</td>
                        </tr>
                        <tr>
                            <td class="main_socios_tabla_edad main_socios_tabla_edad_arriba">+18 <br> <span class="main_socios_tabla_estado">ACTIVO</span></td>
                            <td class="main_socios_tabla_pago">MENSUAL</td>
                            <td class="main_socios_tabla_precio">$ 600</td>
                            <td class="main_socios_tabla_precio main_socios_tabla_precio_derecha">$ 400</td>
                        </tr>
                        <tr>
                            <td class="main_socios_tabla_edad">10-17 <br> <span class="main_socios_tabla_estado">CADETE</span></td>
                            <td class="main_socios_tabla_pago">MENSUAL</td>
                            <td class="main_socios_tabla_precio">$ 500</td>
                            <td class="main_socios_tabla_precio main_socios_tabla_precio_derecha">$ 300</td>
                        </tr>
                        <tr>
                            <td class="main_socios_tabla_edad">4-9 <br> <span class="main_socios_tabla_estado">PRE-INFANTIL</span></td>
                            <td class="main_socios_tabla_pago">MENSUAL</td>
                            <td class="main_socios_tabla_precio">$ 400</td>
                            <td class="main_socios_tabla_precio main_socios_tabla_precio_derecha">$ 200</td>
                        </tr>
                        <tr>
                            <td class="main_socios_tabla_edad main_socios_tabla_edad_abajo">0-3 <br> <span class="main_socios_tabla_estado">INFANTIL</span></td>
                            <td class="main_socios_tabla_pago">MENSUAL</td>
                            <td class="main_socios_tabla_precio main_socios_tabla_precio_abajo">$ 300</td>
                            <td class="main_socios_tabla_precio main_socios_tabla_precio_abajo main_socios_tabla_precio_derecha main_socios_tabla_precio_derecha_abajo">$ 100</td>
                        </tr>
                    </table>
                    <span id="ancla_preguntas" class="ancla">pregunta</span>
                    <div class="contenedor_ancla"></div>
                    <h1>PREGUNTAS</h1>
                    <h2>¿Cómo me asocio?</h2>
                    <p class="main_socios_preguntas_parrafo">Podés hacerlo de manera online ingresando a la seccion 'Asociate'.</p>
                    <h2>¿Cuál es el valor de la cuota social?</h2>
                    <p class="main_socios_preguntas_parrafo">Conocé todos los valores de la cuota social en la seccion 'Valores'.</p>
                    <h2>¿Qué diferencia hay entre Socio Pleno y Socio Semipleno?</h2>
                    <p class="main_socios_preguntas_parrafo"><strong style="color: red;">Socio Pleno:</strong> Incluye la posibilidad de ganarte la remera original de Deportivo Palo, ganarte descuentos en el Almacen El Chelo (Av. Juan B. Justo 9100, Liniers, 1408) y la posibilidad de participar de sorteos. <br> <br>
                        <strong style="color: red;">Socio Semipleno:</strong> Incluye la posibilidad de ganarte descuentos en el Almacen El Chelo (Av. Juan B. Justo 9100, Liniers, 1408) y la posibilidad de participar de sorteos.
                    </p>
                </div>
            </div>
            <div class="contenedor_derecha_informacion">
                <div>
                    <button><span class="contenedor_derecha_informacion_asociate"><a href="./socios_asociate.php#ancla_asociate">HACETE SOCIO ></a></span></button>
                </div>
                <h4>SOCIOS</h4>
                <ul>
                    <li><a href="./socios.php#ancla_informacion">INFORMACION</a></li>
                    <li><a href="./socios.php#ancla_valores">VALORES</a></li>
                    <li><a href="./socios.php#ancla_preguntas">PREGUNTAS</a></li>
                </ul>
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