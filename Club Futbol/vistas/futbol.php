<?php
session_name('usuario');
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('../inc/head.php'); ?>
    <title>C.F. Deportivo Palo - Futbol</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <?php include('../inc/header.php'); ?>
    </header>

    <span id="ancla_fixture" class="ocultar">Fixture</span>
    <main class="main_futbol">
        <h1>FIXTURE</h1>

        <!-- Fixture Calendario -->
        <nav class="nav_fixture_izquierda">
            <p class="boton_fixture_encender">FIXTURE DEPORTIVO PALO</p>
            <p class="boton_calendario_apagar">CALENDARIO COMPLETO</p>
        </nav>
        <div class="contenedor_principal_main_calendario_ocultar">

            <div class="contenedor_jornada1 mostrar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1" id="jornada_seleccionada">JORNADA 1</li>
                        <li class="jornada2">JORNADA 2</li>
                        <li class="jornada3">JORNADA 3</li>
                        <li class="jornada4">JORNADA 4</li>
                        <li class="jornada5">JORNADA 5</li>
                        <li class="jornada6_mostrar">JORNADA 6</li>
                        <li class="jornada7_mostrar">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar">JORNADA 6</li>
                                <li class="jornada7_ocultar">JORNADA 7</li>
                                <li class="jornada8">JORNADA 8</li>
                                <li class="jornada9">JORNADA 9</li>
                                <li class="jornada10">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Real Sicariona</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>1 v 5</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Notingan Miedo FC</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Aramburu</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>8 v 4</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>Deportivo Palo</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>San Benito</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>5 v 4</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Ringo Samba</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_jornada2 ocultar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1">JORNADA 1</li>
                        <li class="jornada2" id="jornada_seleccionada">JORNADA 2</li>
                        <li class="jornada3">JORNADA 3</li>
                        <li class="jornada4">JORNADA 4</li>
                        <li class="jornada5">JORNADA 5</li>
                        <li class="jornada6_mostrar">JORNADA 6</li>
                        <li class="jornada7_mostrar">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar">JORNADA 6</li>
                                <li class="jornada7_ocultar">JORNADA 7</li>
                                <li class="jornada8">JORNADA 8</li>
                                <li class="jornada9">JORNADA 9</li>
                                <li class="jornada10">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Real Sicariona</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>7 v 0</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>Deportivo Palo</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Notingan Miedo FC</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>1 v 3</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Ringo Samba</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Aramburu</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>4 v 2</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>San Benito</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_jornada3 ocultar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1">JORNADA 1</li>
                        <li class="jornada2">JORNADA 2</li>
                        <li class="jornada3" id="jornada_seleccionada">JORNADA 3</li>
                        <li class="jornada4">JORNADA 4</li>
                        <li class="jornada5">JORNADA 5</li>
                        <li class="jornada6_mostrar">JORNADA 6</li>
                        <li class="jornada7_mostrar">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar">JORNADA 6</li>
                                <li class="jornada7_ocultar">JORNADA 7</li>
                                <li class="jornada8">JORNADA 8</li>
                                <li class="jornada9">JORNADA 9</li>
                                <li class="jornada10">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Real Sicariona</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Ringo Samba</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Deportivo Palo</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>San Benito</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Notingan Miedo FC</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Aramburu</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_jornada4 ocultar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1">JORNADA 1</li>
                        <li class="jornada2">JORNADA 2</li>
                        <li class="jornada3">JORNADA 3</li>
                        <li class="jornada4" id="jornada_seleccionada">JORNADA 4</li>
                        <li class="jornada5">JORNADA 5</li>
                        <li class="jornada6_mostrar">JORNADA 6</li>
                        <li class="jornada7_mostrar">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar">JORNADA 6</li>
                                <li class="jornada7_ocultar">JORNADA 7</li>
                                <li class="jornada8">JORNADA 8</li>
                                <li class="jornada9">JORNADA 9</li>
                                <li class="jornada10">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Real Sicariona</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>San Benito</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Ringo Samba</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Aramburu</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Deportivo Palo</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Notingan Miedo FC</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_jornada5 ocultar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1">JORNADA 1</li>
                        <li class="jornada2">JORNADA 2</li>
                        <li class="jornada3">JORNADA 3</li>
                        <li class="jornada4">JORNADA 4</li>
                        <li class="jornada5" id="jornada_seleccionada">JORNADA 5</li>
                        <li class="jornada6_mostrar">JORNADA 6</li>
                        <li class="jornada7_mostrar">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar">JORNADA 6</li>
                                <li class="jornada7_ocultar">JORNADA 7</li>
                                <li class="jornada8">JORNADA 8</li>
                                <li class="jornada9">JORNADA 9</li>
                                <li class="jornada10">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Real Sicariona</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Aramburu</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>San Benito</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Notingan Miedo FC</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Ringo Samba</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>Deportivo Palo</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_jornada6 ocultar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1">JORNADA 1</li>
                        <li class="jornada2">JORNADA 2</li>
                        <li class="jornada3">JORNADA 3</li>
                        <li class="jornada4">JORNADA 4</li>
                        <li class="jornada5">JORNADA 5</li>
                        <li class="jornada6_mostrar" id="jornada_seleccionada">JORNADA 6</li>
                        <li class="jornada7_mostrar">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar" id="jornada_seleccionada">JORNADA 6</li>
                                <li class="jornada7_ocultar">JORNADA 7</li>
                                <li class="jornada8">JORNADA 8</li>
                                <li class="jornada9">JORNADA 9</li>
                                <li class="jornada10">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Notingan Miedo FC</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Real Sicariona</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Deportivo Palo</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Aramburu</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Ringo Samba</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>San Benito</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_jornada7 ocultar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1">JORNADA 1</li>
                        <li class="jornada2">JORNADA 2</li>
                        <li class="jornada3">JORNADA 3</li>
                        <li class="jornada4">JORNADA 4</li>
                        <li class="jornada5">JORNADA 5</li>
                        <li class="jornada6_mostrar">JORNADA 6</li>
                        <li class="jornada7_mostrar" id="jornada_seleccionada">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar">JORNADA 6</li>
                                <li class="jornada7_ocultar" id="jornada_seleccionada">JORNADA 7</li>
                                <li class="jornada8">JORNADA 8</li>
                                <li class="jornada9">JORNADA 9</li>
                                <li class="jornada10">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Deportivo Palo</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Real Sicariona</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Ringo Samba</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Notingan Miedo FC</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>San Benito</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Aramburu</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_jornada8 ocultar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1">JORNADA 1</li>
                        <li class="jornada2">JORNADA 2</li>
                        <li class="jornada3">JORNADA 3</li>
                        <li class="jornada4">JORNADA 4</li>
                        <li class="jornada5">JORNADA 5</li>
                        <li class="jornada6_mostrar">JORNADA 6</li>
                        <li class="jornada7_mostrar">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar">JORNADA 6</li>
                                <li class="jornada7_ocultar">JORNADA 7</li>
                                <li class="jornada8" id="jornada_seleccionada">JORNADA 8</li>
                                <li class="jornada9">JORNADA 9</li>
                                <li class="jornada10">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Ringo Samba</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Real Sicariona</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>San Benito</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>Deportivo Palo</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Aramburu</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Notingan Miedo FC</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_jornada9 ocultar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1">JORNADA 1</li>
                        <li class="jornada2">JORNADA 2</li>
                        <li class="jornada3">JORNADA 3</li>
                        <li class="jornada4">JORNADA 4</li>
                        <li class="jornada5">JORNADA 5</li>
                        <li class="jornada6_mostrar">JORNADA 6</li>
                        <li class="jornada7_mostrar">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar">JORNADA 6</li>
                                <li class="jornada7_ocultar">JORNADA 7</li>
                                <li class="jornada8">JORNADA 8</li>
                                <li class="jornada9" id="jornada_seleccionada">JORNADA 9</li>
                                <li class="jornada10">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>San Benito</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Real Sicariona</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Aramburu</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Ringo Samba</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Notingan Miedo FC</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>Deportivo Palo</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_jornada10 ocultar_jornada">
                <div class="contenedor_izquierda_main_calendario">
                    <ul class="ul_jornadas">
                        <li class="jornada1">JORNADA 1</li>
                        <li class="jornada2">JORNADA 2</li>
                        <li class="jornada3">JORNADA 3</li>
                        <li class="jornada4">JORNADA 4</li>
                        <li class="jornada5">JORNADA 5</li>
                        <li class="jornada6_mostrar">JORNADA 6</li>
                        <li class="jornada7_mostrar">JORNADA 7</li>
                        <ul class="ul_jornadas_desplegables">
                            <li id="boton_lista_desplegable">•••</li>
                            <div class="contenedor_listas_desplegables_ocultar">
                                <li class="jornada6_ocultar">JORNADA 6</li>
                                <li class="jornada7_ocultar">JORNADA 7</li>
                                <li class="jornada8">JORNADA 8</li>
                                <li class="jornada9">JORNADA 9</li>
                                <li class="jornada10" id="jornada_seleccionada">JORNADA 10</li>
                            </div>
                        </ul>
                    </ul>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Aramburu</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Real Sicariona</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Notingan Miedo FC</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>San Benito</span>
                    </div>
                    <div class="tabla_calendario">
                        <abbr>ADN</abbr>
                        <span>Deportivo Palo</span>
                        <img src="../images/escudoPalo.png" alt="">
                        <span>- v -</span>
                        <img src="../images/escudoVisita.png" alt="">
                        <span>Ringo Samba</span>
                    </div>
                </div>
            </div>

            <div class="contenedor_derecha_main_fixture">
                <nav class="nav_fixture_derecha">
                    <div class="contenedor_derecha_informacion_futbol">
                        <div>
                            <button><span class="contenedor_derecha_informacion_plantel"><a href="./futbol_plantel.php#ancla_plantel">PLANTEL ></a></span></button>
                        </div>
                        <h4>FUTBOL</h4>
                        <ul>
                            <li><a href="./futbol.php#ancla_fixture">FIXTURE</a></li>
                            <li><a href="./futbol.php#ancla_torneo">TORNEO</a></li>
                            <li><a href="./futbol.php#ancla_titulos">TITULOS</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Fixture -->
        <div class="mostrar_fixture">
            <div class="contenedor_principal_main_fixture">
                <div class="contenedor_izquierda_main_fixture">
                    <h4>TORNEO ADN FUTBOL</h4>
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>Aramburu</p>
                            <img src="../images/escudoVisita.png" alt="">
                        </div>
                        <div>
                            <span>8 vs 4</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoPalo.png" alt="">
                            <p>Deportivo Palo</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p>1ª fecha / 12-03-2023 / 17:00hs.</p>
                    </div>
                </div>

                <div class="contenedor_derecha_main_fixture">
                    <nav class="nav_fixture_derecha">
                        <div class="contenedor_derecha_informacion_futbol">
                            <div>
                                <button><span class="contenedor_derecha_informacion_plantel"><a href="./futbol_plantel.php#ancla_plantel">PLANTEL ></a></span></button>
                            </div>
                            <h4>FUTBOL</h4>
                            <ul>
                                <li><a href="./futbol.php#ancla_fixture">FIXTURE</a></li>
                                <li><a href="./futbol.php#ancla_torneo">TORNEO</a></li>
                                <li><a href="./futbol.php#ancla_titulos">TITULOS</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="contenedor_principal_main_fixture2_mostrar">
                <div class="contenedor_izquierda_main_fixture">
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>Real Sicariona</p>
                            <img src="../images/escudoVisita.png" alt="">
                        </div>
                        <div>
                            <span>7 vs 0</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoPalo.png" alt="">
                            <p>Deportivo Palo</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p class="fecha_fixture">2ª fecha / 19-03-2023 / 18:00hs.</p>
                    </div>
                </div>
            </div>

            <div class="contenedor_principal_main_fixture2_mostrar">
                <div class="contenedor_izquierda_main_fixture">
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>Deportivo Palo</p>
                            <img src="../images/escudoPalo.png" alt="">
                        </div>
                        <div>
                            <span>- vs -</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoVisita.png" alt="">
                            <p>San Benito</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p class="fecha_fixture">3ª fecha / 26-03-2023 / -hs.</p>
                    </div>
                </div>
            </div>

            <div class="contenedor_principal_main_fixture2_mostrar">
                <div class="contenedor_izquierda_main_fixture">
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>Deportivo Palo</p>
                            <img src="../images/escudoPalo.png" alt="">
                        </div>
                        <div>
                            <span>- vs -</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoVisita.png" alt="">
                            <p>Notingan Miedo FC</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p class="fecha_fixture">4ª fecha / 02-04-2023 / -hs.</p>
                    </div>
                </div>
            </div>

            <div class="contenedor_principal_main_fixture2_mostrar">
                <div class="contenedor_izquierda_main_fixture">
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>Ringo Samba</p>
                            <img src="../images/escudoVisita.png" alt="">
                        </div>
                        <div>
                            <span>- vs -</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoPalo.png" alt="">
                            <p>Deportivo Palo</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p class="fecha_fixture">5ª fecha / 09-04-2023 / -hs.</p>
                    </div>
                </div>
            </div>

            <div class="contenedor_principal_main_fixture2_mostrar">
                <div class="contenedor_izquierda_main_fixture">
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>Deportivo Palo</p>
                            <img src="../images/escudoPalo.png" alt="">
                        </div>
                        <div>
                            <span>- vs -</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoVisita.png" alt="">
                            <p>Aramburu</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p class="fecha_fixture">6ª fecha / 16-04-2023 / -hs.</p>
                    </div>
                </div>
            </div>

            <div class="contenedor_principal_main_fixture2_mostrar">
                <div class="contenedor_izquierda_main_fixture">
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>Deportivo Palo</p>
                            <img src="../images/escudoPalo.png" alt="">
                        </div>
                        <div>
                            <span>- vs -</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoVisita.png" alt="">
                            <p>Real Sicariona</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p class="fecha_fixture">7ª fecha / 23-04-2023 / -hs.</p>
                    </div>
                </div>
            </div>

            <div class="contenedor_principal_main_fixture2_mostrar">
                <div class="contenedor_izquierda_main_fixture">
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>San Benito</p>
                            <img src="../images/escudoVisita.png" alt="">
                        </div>
                        <div>
                            <span>- vs -</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoPalo.png" alt="">
                            <p>Deportivo Palo</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p class="fecha_fixture">8ª fecha / 30-04-2023 / -hs.</p>
                    </div>
                </div>
            </div>

            <div class="contenedor_principal_main_fixture2_mostrar">
                <div class="contenedor_izquierda_main_fixture">
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>Notingan Miedo FC</p>
                            <img src="../images/escudoVisita.png" alt="">
                        </div>
                        <div>
                            <span>- vs -</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoPalo.png" alt="">
                            <p>Deportivo Palo</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p class="fecha_fixture">9ª fecha / 07-05-2023 / -hs.</p>
                    </div>
                </div>
            </div>

            <div class="contenedor_principal_main_fixture2_mostrar">
                <div class="contenedor_izquierda_main_fixture">
                    <div class="contenedor_tablero_fixture">
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <p>Deportivo Palo</p>
                            <img src="../images/escudoPalo.png" alt="">
                        </div>
                        <div>
                            <span>- vs -</span>
                        </div>
                        <div class="contenedor_nombreEquipo_tablero_fixture">
                            <img src="../images/escudoVisita.png" alt="">
                            <p>Ringo Samba</p>
                        </div>
                    </div>
                    <div class="contenedor_fecha_fixture">
                        <p class="fecha_fixture">10ª fecha / 14-05-2023 / -hs.</p>
                    </div>
                </div>
            </div>
        </div>

        <span id="ancla_torneo" class="ancla">Torneo</span>

        <div class="main_futbol_contenedor_principal_calendario">
            <div class="contenedor_torneo">
                <h1 class="main_futbol_torneo">TORNEO</h1>
                <h2>ESTADISTICAS DE DEPORTIVO PALO</h2>
                <div class="main_futbol_estadisticas">
                    <div class="main_futbol_pj">
                        <h3>2</h3>
                        <h4>PJ</h4>
                    </div>
                    <div class="main_futbol_pg">
                        <h3>0</h3>
                        <h4>PG</h4>
                    </div>
                    <div class="main_futbol_pe">
                        <h3>0</h3>
                        <h4>PE</h4>
                    </div>
                    <div class="main_futbol_pp">
                        <h3>2</h3>
                        <h4>PP</h4>
                    </div>
                    <div class="main_futbol_mp">
                        <h3>0%</h3>
                        <h4>Media</h4>
                    </div>
                    <div class="main_futbol_p">
                        <h3>6</h3>
                        <h4>Puesto</h4>
                    </div>
                </div>
                <div class="main_futbol_ranking">
                    <h2>RANKING DE JUGADORES</h2>
                    <div class="main_futbol_ranking_tabla_grid">
                        <div>
                            <span class="goles_contenedor">GOLES</span>
                        </div>
                        <div>
                            <span class="goles_encajados_contenedor">G. EN CONTRA</span>
                        </div>
                        <div>
                            <span class="tarjetas_amarillas_contenedor">T. AMARILLAS</span>
                        </div>
                        <div>
                            <span class="tarjetas_rojas_contenedor">T. ROJAS</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_primero goles id_goles_1">
                        <div>
                            <span>1</span>
                        </div>
                        <div>
                            <span>Lucas Ancona</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>2</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>4</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par goles id_goles_2">
                        <div>
                            <span>2</span>
                        </div>
                        <div>
                            <span>Lorenzo Bianco</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>2</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar goles id_goles_3">
                        <div>
                            <span>3</span>
                        </div>
                        <div>
                            <span>Facundo Villarreal</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>2</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par goles id_goles_4">
                        <div>
                            <span>4</span>
                        </div>
                        <div>
                            <span>Juan Rodriguez</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar goles id_goles_5">
                        <div>
                            <span>5</span>
                        </div>
                        <div>
                            <span>Gabriel Rosulfo</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par goles id_goles_6">
                        <div>
                            <span>6</span>
                        </div>
                        <div>
                            <span>Franco Romero</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar goles id_goles_7">
                        <div>
                            <span>7</span>
                        </div>
                        <div>
                            <span>Juan Pablo Iglesias</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par goles id_goles_8">
                        <div>
                            <span>8</span>
                        </div>
                        <div>
                            <span>Cristian Lara</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar goles id_goles_9">
                        <div>
                            <span>9</span>
                        </div>
                        <div>
                            <span>Manuel Ribeiro</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par goles id_goles_10">
                        <div>
                            <span>10</span>
                        </div>
                        <div>
                            <span>Lautaro Gando</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar goles id_goles_11">
                        <div>
                            <span>11</span>
                        </div>
                        <div>
                            <span>Nahuel Robledo</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par goles id_goles_12">
                        <div>
                            <span>12</span>
                        </div>
                        <div>
                            <span>Matias Vallarino</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar goles id_goles_13">
                        <div>
                            <span>13</span>
                        </div>
                        <div>
                            <span>Franco Guzman</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par goles id_goles_14">
                        <div>
                            <span>14</span>
                        </div>
                        <div>
                            <span>Lucas Sanagua</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar goles id_goles_15">
                        <div>
                            <span>15</span>
                        </div>
                        <div>
                            <span>Braian Gonzales</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par goles id_goles_16">
                        <div>
                            <span>16</span>
                        </div>
                        <div>
                            <span>Gonzalo Villarreal</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar goles id_goles_17">
                        <div>
                            <span>17</span>
                        </div>
                        <div>
                            <span>Fabricio Basso</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par goles id_goles_18">
                        <div>
                            <span>18</span>
                        </div>
                        <div>
                            <span>Sebastian Barrionuevo</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>Goles</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_primero goles_encajados id_goles_encajados_1">
                        <div>
                            <span>1</span>
                        </div>
                        <div>
                            <span>Braian Gonzales</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>G. Encajados</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar goles_encajados id_goles_encajados_2">
                        <div>
                            <span>2</span>
                        </div>
                        <div>
                            <span>Franco Guzman</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>G. Encajados</span>
                            <span>7</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_primero tarjetas_amarillas id_tarjetas_amarillas_1">
                        <div>
                            <span>1</span>
                        </div>
                        <div>
                            <span>Lucas Ancona</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>2</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_amarillas id_tarjetas_amarillas_2">
                        <div>
                            <span>2</span>
                        </div>
                        <div>
                            <span>Facundo Villarreal</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>2</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_amarillas id_tarjetas_amarillas_3">
                        <div>
                            <span>3</span>
                        </div>
                        <div>
                            <span>Lorenzo Bianco</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>2</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_amarillas id_tarjetas_amarillas_4">
                        <div>
                            <span>4</span>
                        </div>
                        <div>
                            <span>Juan Rodriguez</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_amarillas id_tarjetas_amarillas_5">
                        <div>
                            <span>5</span>
                        </div>
                        <div>
                            <span>Gabriel Rosulfo</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_amarillas id_tarjetas_amarillas_6">
                        <div>
                            <span>6</span>
                        </div>
                        <div>
                            <span>Franco Romero</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_amarillas id_tarjetas_amarillas_7">
                        <div>
                            <span>7</span>
                        </div>
                        <div>
                            <span>Juan Pablo Iglesias</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_amarillas id_tarjetas_amarillas_8">
                        <div>
                            <span>8</span>
                        </div>
                        <div>
                            <span>Cristian Lara</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_amarillas id_tarjetas_amarillas_9">
                        <div>
                            <span>9</span>
                        </div>
                        <div>
                            <span>Manuel Ribeiro</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_amarillas id_tarjetas_amarillas_10">
                        <div>
                            <span>10</span>
                        </div>
                        <div>
                            <span>Matias Vallarino</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_amarillas id_tarjetas_amarillas_11">
                        <div>
                            <span>11</span>
                        </div>
                        <div>
                            <span>Lautaro Gando</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_amarillas id_tarjetas_amarillas_12">
                        <div>
                            <span>12</span>
                        </div>
                        <div>
                            <span>Franco Guzman</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_amarillas id_tarjetas_amarillas_13">
                        <div>
                            <span>13</span>
                        </div>
                        <div>
                            <span>Nahuel Robledo</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_amarillas id_tarjetas_amarillas_14">
                        <div>
                            <span>14</span>
                        </div>
                        <div>
                            <span>Lucas Sanagua</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_amarillas id_tarjetas_amarillas_15">
                        <div>
                            <span>15</span>
                        </div>
                        <div>
                            <span>Braian Gonzales</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_amarillas id_tarjetas_amarillas_16">
                        <div>
                            <span>16</span>
                        </div>
                        <div>
                            <span>Gonzalo Villarreal</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_amarillas id_tarjetas_amarillas_17">
                        <div>
                            <span>17</span>
                        </div>
                        <div>
                            <span>Fabricio Basso</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_amarillas id_tarjetas_amarillas_18">
                        <div>
                            <span>18</span>
                        </div>
                        <div>
                            <span>Sebastian Barrionuevo</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Amarillas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_primero tarjetas_rojas id_tarjetas_rojas_1">
                        <div>
                            <span>1</span>
                        </div>
                        <div>
                            <span>Lucas Ancona</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>2</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_rojas id_tarjetas_rojas_2">
                        <div>
                            <span>2</span>
                        </div>
                        <div>
                            <span>Facundo Villarreal</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>2</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_rojas id_tarjetas_rojas_3">
                        <div>
                            <span>3</span>
                        </div>
                        <div>
                            <span>Lorenzo Bianco</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>2</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_rojas id_tarjetas_rojas_4">
                        <div>
                            <span>4</span>
                        </div>
                        <div>
                            <span>Juan Rodriguez</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_rojas id_tarjetas_rojas_5">
                        <div>
                            <span>5</span>
                        </div>
                        <div>
                            <span>Gabriel Rosulfo</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_rojas id_tarjetas_rojas_6">
                        <div>
                            <span>6</span>
                        </div>
                        <div>
                            <span>Franco Romero</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_rojas id_tarjetas_rojas_7">
                        <div>
                            <span>7</span>
                        </div>
                        <div>
                            <span>Juan Pablo Iglesias</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_rojas id_tarjetas_rojas_8">
                        <div>
                            <span>8</span>
                        </div>
                        <div>
                            <span>Cristian Lara</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_rojas id_tarjetas_rojas_9">
                        <div>
                            <span>9</span>
                        </div>
                        <div>
                            <span>Manuel Ribeiro</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_rojas id_tarjetas_rojas_10">
                        <div>
                            <span>10</span>
                        </div>
                        <div>
                            <span>Matias Vallarino</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_rojas id_tarjetas_rojas_11">
                        <div>
                            <span>11</span>
                        </div>
                        <div>
                            <span>Lautaro Gando</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_rojas id_tarjetas_rojas_12">
                        <div>
                            <span>12</span>
                        </div>
                        <div>
                            <span>Franco Guzman</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_rojas id_tarjetas_rojas_13">
                        <div>
                            <span>13</span>
                        </div>
                        <div>
                            <span>Nahuel Robledo</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>1</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_rojas id_tarjetas_rojas_14">
                        <div>
                            <span>14</span>
                        </div>
                        <div>
                            <span>Lucas Sanagua</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_rojas id_tarjetas_rojas_15">
                        <div>
                            <span>15</span>
                        </div>
                        <div>
                            <span>Braian Gonzales</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_rojas id_tarjetas_rojas_16">
                        <div>
                            <span>16</span>
                        </div>
                        <div>
                            <span>Gonzalo Villarreal</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_par tarjetas_rojas id_tarjetas_rojas_17">
                        <div>
                            <span>17</span>
                        </div>
                        <div>
                            <span>Fabricio Basso</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="main_futbol_ranking_jugador_grid main_futbol_ranking_jugador_impar tarjetas_rojas id_tarjetas_rojas_18">
                        <div>
                            <span>18</span>
                        </div>
                        <div>
                            <span>Sebastian Barrionuevo</span>
                        </div>
                        <div class="main_futbol_ranking_pj">
                            <span>PJ</span>
                            <span>0</span>
                        </div>
                        <div class="main_futbol_ranking_goles">
                            <span>T. Rojas</span>
                            <span>0</span>
                        </div>
                    </div>
                </div>
                <div class="main_futbol_tabla">
                    <h2>TABLA DE POSICIONES</h2>
                    <table>
                        <tr class="main_futbol_tabla_principal">
                            <td></td>
                            <td>Equipo</td>
                            <td>Pts</td>
                            <td>PJ</td>
                            <td class="main_futbol_tabla_ocultar">PG</td>
                            <td class="main_futbol_tabla_ocultar">PE</td>
                            <td class="main_futbol_tabla_ocultar">PP</td>
                            <td class="main_futbol_tabla_ocultar">GF</td>
                            <td class="main_futbol_tabla_ocultar">GC</td>
                            <td>Dif</td>
                        </tr>
                        <tr class="main_futbol_tabla_equipos">
                            <td>1°</td>
                            <td>ARAMBURU</td>
                            <td>6</td>
                            <td>2</td>
                            <td class="main_futbol_tabla_ocultar">2</td>
                            <td class="main_futbol_tabla_ocultar">0</td>
                            <td class="main_futbol_tabla_ocultar">0</td>
                            <td class="main_futbol_tabla_ocultar">12</td>
                            <td class="main_futbol_tabla_ocultar">6</td>
                            <td>+6</td>
                        </tr>
                        <tr class="main_futbol_tabla_equipos">
                            <td>2°</td>
                            <td>REAL SICARIONA</td>
                            <td>3</td>
                            <td>2</td>
                            <td class="main_futbol_tabla_ocultar">1</td>
                            <td class="main_futbol_tabla_ocultar">0</td>
                            <td class="main_futbol_tabla_ocultar">1</td>
                            <td class="main_futbol_tabla_ocultar">8</td>
                            <td class="main_futbol_tabla_ocultar">5</td>
                            <td>+3</td>
                        </tr>
                        <tr class="main_futbol_tabla_equipos">
                            <td>3°</td>
                            <td>NOTINGAN MIEDO FC</td>
                            <td>3</td>
                            <td>2</td>
                            <td class="main_futbol_tabla_ocultar">1</td>
                            <td class="main_futbol_tabla_ocultar">0</td>
                            <td class="main_futbol_tabla_ocultar">1</td>
                            <td class="main_futbol_tabla_ocultar">6</td>
                            <td class="main_futbol_tabla_ocultar">4</td>
                            <td>+2</td>
                        </tr>
                        <tr class="main_futbol_tabla_equipos">
                            <td>4°</td>
                            <td>RINGO SAMBA</td>
                            <td>3</td>
                            <td>2</td>
                            <td class="main_futbol_tabla_ocultar">1</td>
                            <td class="main_futbol_tabla_ocultar">0</td>
                            <td class="main_futbol_tabla_ocultar">1</td>
                            <td class="main_futbol_tabla_ocultar">7</td>
                            <td class="main_futbol_tabla_ocultar">6</td>
                            <td>+1</td>
                        </tr>
                        <tr class="main_futbol_tabla_equipos">
                            <td>5°</td>
                            <td>SAN BENITO</td>
                            <td>3</td>
                            <td>2</td>
                            <td class="main_futbol_tabla_ocultar">1</td>
                            <td class="main_futbol_tabla_ocultar">0</td>
                            <td class="main_futbol_tabla_ocultar">1</td>
                            <td class="main_futbol_tabla_ocultar">7</td>
                            <td class="main_futbol_tabla_ocultar">8</td>
                            <td>-1</td>
                        </tr>
                        <tr class="main_futbol_tabla_equipos cfdp">
                            <td>6°</td>
                            <td>DEPORTIVO PALO</td>
                            <td>0</td>
                            <td>2</td>
                            <td class="main_futbol_tabla_ocultar">0</td>
                            <td class="main_futbol_tabla_ocultar">0</td>
                            <td class="main_futbol_tabla_ocultar">2</td>
                            <td class="main_futbol_tabla_ocultar">4</td>
                            <td class="main_futbol_tabla_ocultar">15</td>
                            <td>-11</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <span id="ancla_titulos" class="ancla">Titulos</span>
        <h1 class="main_futbol_titulos">TITULOS</h1>
        <p class="main_futbol_titulos_campeonatos">Todavia no se encuentra ningun titulo.</p>
        <h2>FECHA DE LOS TITULOS CONSEGUIDOS</h2>
    </main>

    <!-- FOOTER -->
    <footer>
        <?php include('../inc/footer.php'); ?>
    </footer>

    <!-- JS PRINCIPAL -->
    <script src="../js/header.js"></script>
    <script src="../js/modo_oscuro.js"></script>
    <script src="../js/main_futbol.js"></script>
</body>

</html>