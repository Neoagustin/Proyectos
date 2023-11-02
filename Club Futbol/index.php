<?php
session_name('usuario');
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS ICONO WEB -->
    <link rel="icon" href="./images/escudoPalo.png">
    <!-- CSS ICONOS -->
    <!-- CSS PRINCIPAL -->
    <link rel="stylesheet" href="./css/index.css">

    <title>C.F. Deportivo Palo</title>
</head>


<body>
    <header>
        <div id="contenedor_contenido_header" class="contenedor_contenido_header">
            <div></div>
            <div class="contenedor_nav_header">
                <a href="index.php">
                    <img src="./images/escudoPalo.png" alt="" title="Escudo Deportivo Palo">
                </a>
                <nav class="header_nav">
                    <ul class="header_menu_horizontal">
                        <li class="header_verde">
                            <span class="header_verde">Club</span>
                            <ul class="header_menu_vertical">
                                <li><a href="./vistas/club.php#ancla_datos">Datos</a></li>
                                <li><a href="./vistas/club.php#ancla_historia">Historia</a></li>
                            </ul>
                        </li>
                        <li class="header_rojo">
                            <span class="header_rojo">Futbol</span>
                            <ul class="header_menu_vertical">
                                <li><a class="" href="./vistas/futbol_plantel.php">Plantel</a></li>
                                <li><a href="./vistas/futbol.php#ancla_fixture">Fixture</a></li>
                                <li><a href="./vistas/futbol.php#ancla_torneo">Torneo</a></li>
                                <li><a href="./vistas/futbol.php#ancla_titulos">Titulos</a></li>
                            </ul>
                        </li>
                        <li class="header_verde header_uno_verde">
                            <span class="header_verde">Deportivo</span>
                            <ul class="header_menu_vertical">
                                <li><a href="./vistas/deportivo.php">Noticias</a></li>
                            </ul>
                        </li>
                        <li class="header_rojo largo">
                            <span class="header_rojo largo cinco">Socios</span>
                            <ul class="header_menu_vertical">
                                <li><a href="./vistas/socios.php#ancla_informacion">Informacion</a></li>
                                <li><a href="./vistas/socios.php#ancla_valores">Valores</a></li>
                                <li><a href="./vistas/socios.php#ancla_preguntas">Preguntas</a></li>
                                <li><a id="hacete_socio" href="./vistas/socios_asociate.php">Hacete Socio</a></li>
                                <li><a id="acesso_socio" href="./vistas/socios_acceso.php">Acceso Socios</a></li>
                            </ul>
                        </li>
                        <li class="header_verde header_uno_verde">
                            <span class="header_verde">Marketing</span>
                            <ul class="header_menu_vertical">
                                <li><a href="./vistas/marketing.php">Marketing</a></li>
                            </ul>
                        </li>
                        <li class="header_rojo header_uno_rojo ult_li_header">
                            <span class="header_rojo" href="">Canticos</span>
                            <ul class="header_menu_vertical">
                                <li><a href="./vistas/canticos.php">Temas</a></li>
                            </ul>
                        </li>
                        <li class="lista_contenedor_iniciar_sesion">
                            <div class="contenedor_iniciar_sesion">
                                <div class="contenedor_contenido_iniciar_sesion">
                                    <div class="contenedor_imagen_iniciar_sesion">
                                        <button class="btn_inicio_usuario">
                                            <i class="icono_inicio_usuario fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                    <ul class="nav_btn_sesion">
                                        <a href="./vistas/perfil.php">
                                            <li>
                                                <i class="fa-solid fa-user"></i>
                                                <span>
                                                    <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?>
                                                </span>
                                            </li>
                                        </a>
                                        <a href="./php/cerrar_sesion.php">
                                            <li>
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                                <span>
                                                    Salir
                                                </span>
                                            </li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Responsive Header -->
                <div class="header_contenedor_iconos">
                    <i class="header_icono_cruz_ocultar header_icono fa-solid fa-xmark"></i>
                    <i class="header_icono_menu_mostrar header_icono fa-solid fa-bars"></i>
                </div>
                <nav class="header_nav_responsivo_ocultar">
                    <section class="header_nav_seccion_superior">
                        <div class="header_contenedor_seccion_responsivo">
                            <p class="header_verde_responsivo">Club</p>
                            <div class="header_contenedor_links">
                                <ul>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/club.php#ancla_datos">Datos</a></li>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/club.php#ancla_historia">Historia</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header_contenedor_seccion_responsivo">
                            <p class="header_verde_responsivo">Futbol</p>
                            <div class="header_contenedor_links">
                                <ul>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/futbol_plantel.php">Plantel</a></li>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/futbol.php#ancla_fixture">Fixture</a></li>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/futbol.php#ancla_torneo">Torneo</a></li>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/futbol.php#ancla_titulos">Titulos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header_contenedor_seccion_responsivo">
                            <p class="header_verde_responsivo">Deportivo</p>
                            <div class="header_contenedor_links">
                                <ul>
                                    <li><a class="header_cerrar_menu_responsive" href="deportivo.php">Noticias</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header_contenedor_seccion_responsivo">
                            <p class="header_rojo_responsivo">Socios</p>
                            <div class="header_contenedor_links">
                                <ul>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/socios.php#ancla_informacion">Informacion</a></li>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/socios.php#ancla_valores">Valores</a></li>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/socios.php#ancla_preguntas">Preguntas</a></li>
                                    <li><a id="hacete_socio" class="header_cerrar_menu_responsive" href="./vistas/socios_asociate.php">Hacete Socio</a></li>
                                    <li><a id="acceso_socio" class="header_cerrar_menu_responsive" href="./vistas/socios_acceso.php">Acceso Socios</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header_contenedor_seccion_responsivo">
                            <p class="header_rojo_responsivo">Marketing</p>
                            <div class="header_contenedor_links">
                                <ul>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/marketing.php">Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header_contenedor_seccion_responsivo">
                            <p class="header_rojo_responsivo">Canticos</p>
                            <div class="header_contenedor_links">
                                <ul>
                                    <li><a class="header_cerrar_menu_responsive" href="./vistas/canticos.php">Temas</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </nav>
            </div>

            <!-- BOTON MODO OSCURO -->
            <!-- USUARIO LOGEADO -->
            <?php if (!(empty($_SESSION['id']))) { ?>
                <style>
                    .contenedor_boton_modo_oscuro {}

                    .fondo_boton_modo_oscuro {
                        background-color: #84848453;
                        border: 1px solid gray;
                        border-radius: 20px;
                        box-shadow: inset 0px 0px 5px black;
                        height: 30px;
                        position: relative;
                        top: 12px;
                        width: 70px;
                        transition: all .9s;
                        transform: translate(0px, 7px);
                    }

                    #fondo_boton_modo_oscuro {
                        background-color: #212f3dc3;
                        transform: translate(0px, 7px);
                    }

                    .btn_modo_oscuro {
                        align-items: center;
                        background-color: #212f3dc3;
                        border-radius: 100%;
                        box-shadow: inset 0 0 3px black;
                        cursor: pointer;
                        display: flex;
                        height: 30px;
                        justify-content: center;
                        justify-items: center;
                        left: 0px;
                        position: absolute;
                        height: 29px;
                        width: 29px;
                        transition: all .9s;

                    }

                    .btn_modo_oscuro i {
                        font-size: 16px;
                        color: white;
                    }

                    #btn_modo_oscuro {
                        transform: translateX(133%);
                        background-color: white;
                        box-shadow: inset 1 1 0px black;
                    }

                    #btn_modo_oscuro i {
                        font-size: 17px;
                        color: #363636;
                    }

                    .btn_modo_claro {
                        background-color: #212f3dc3;
                        border-radius: 100%;
                        box-shadow: 0 0 0px lightgrey;
                        cursor: pointer;
                        display: none;
                        height: 30px;
                        position: absolute;
                        right: 0px;
                        width: 30px;
                    }

                    .contenedor_btn_socios_header {
                        display: none;
                        visibility: hidden;
                    }

                    .header_menu_horizontal .largo:hover .header_menu_vertical {
                        height: 7.7em;
                    }

                    #hacete_socio {
                        display: none;
                        visibility: hidden;
                    }

                    #acesso_socio {
                        display: none;
                        visibility: hidden;
                    }

                    #acceso_socio {
                        display: none;
                        visibility: hidden;
                    }

                    .contenedor_boton_modo_oscuro {
                        display: flex;
                        justify-content: right;
                        margin-right: 25px;
                    }

                    .contenedor_iniciar_sesion {
                        display: flex;
                        visibility: visible;
                    }

                    #contenedor_contenido_header {
                        grid-template-columns: 25% 53% 22%;
                    }

                    @media screen and (max-width: 1280px) {
                        .header_menu_horizontal>li>span {
                            font-size: 18px;
                            padding: 15px 13px;
                        }

                        .header_menu_vertical li a {
                            font-size: 14px;
                        }

                        .fondo_boton_modo_oscuro {
                            background-color: #84848400;
                            border: none;
                            border-radius: 0px;
                            box-shadow: inset 0px 0px 0px black;
                            width: 30px;
                        }

                        #fondo_boton_modo_oscuro {
                            background-color: #212f3d00;
                            border: none;
                            border-radius: 0px;
                            box-shadow: inset 0px 0px 0px black;
                        }

                        .btn_modo_oscuro {
                            height: 35px;
                            width: 35px;
                            transform: translate(-10px, -8px);
                        }

                        .btn_modo_oscuro i {
                            font-size: 20px;
                        }

                        #btn_modo_oscuro {
                            transform: translate(-10px, -8px);
                        }

                        #btn_modo_oscuro i {
                            font-size: 20px;
                        }
                    }

                    @media screen and (max-width: 960px) {
                        .header_menu_horizontal>li>span {
                            font-size: 15px;
                        }


                        .btn_modo_oscuro {
                            height: 30px;
                            width: 30px;
                            transform: translate(10px, -15px);
                        }

                        .btn_modo_oscuro i {
                            font-size: 17px;
                        }

                        #btn_modo_oscuro {
                            transform: translate(10px, -15px);
                        }

                        #btn_modo_oscuro i {
                            font-size: 17px;
                        }
                    }

                    @media screen and (max-width: 768px) {
                        .contenedor_boton_modo_oscuro {
                            position: absolute;
                            right: 0%;
                            margin-right: 0px;
                        }

                        .btn_modo_oscuro {
                            height: 35px;
                            width: 35px;
                            transform: translate(-15px, -12px);
                        }

                        .btn_modo_oscuro i {
                            font-size: 20px;
                        }

                        #btn_modo_oscuro {
                            transform: translate(-15px, -12px);
                        }

                        #btn_modo_oscuro i {
                            font-size: 20px;
                        }
                    }
                </style>
            <?php } else { ?>

                <!-- USUARIO NO LOGEADO -->
                <style>
                    .contenedor_boton_modo_oscuro {}

                    .fondo_boton_modo_oscuro {
                        background-color: #84848453;
                        border: 1px solid gray;
                        border-radius: 20px;
                        box-shadow: inset 0px 0px 5px black;
                        height: 30px;
                        position: relative;
                        top: 12px;
                        width: 70px;
                        transition: all .9s;
                        transform: translate(0px, 0px);
                    }

                    #fondo_boton_modo_oscuro {
                        background-color: #212f3dc3;
                        transform: translate(0px, 0px);
                    }

                    .btn_modo_oscuro {
                        align-items: center;
                        background-color: #212f3dc3;
                        border-radius: 100%;
                        box-shadow: inset 0 0 3px black;
                        cursor: pointer;
                        display: flex;
                        height: 30px;
                        justify-content: center;
                        justify-items: center;
                        left: 0px;
                        position: absolute;
                        height: 29px;
                        width: 29px;
                        transition: all .9s;

                    }

                    .btn_modo_oscuro i {
                        font-size: 16px;
                        color: white;
                    }

                    #btn_modo_oscuro {
                        transform: translateX(133%);
                        background-color: white;
                        box-shadow: inset 1 1 0px black;
                    }

                    #btn_modo_oscuro i {
                        font-size: 17px;
                        color: #363636;
                    }

                    .btn_modo_claro {
                        background-color: #212f3dc3;
                        border-radius: 100%;
                        box-shadow: 0 0 0px lightgrey;
                        cursor: pointer;
                        display: none;
                        height: 30px;
                        position: absolute;
                        right: 0px;
                        width: 30px;
                    }

                    #contenedor_contenido_header {
                        grid-template-columns: 20% 53% 20% 7%;
                        grid-template-rows: 1fr;
                    }

                    .contenedor_boton_modo_oscuro {
                        display: flex;
                        justify-content: right;
                        margin-right: 10px;
                    }

                    .contenedor_btn_socios_header {
                        display: flex;
                        visibility: visible;
                    }


                    .contenedor_iniciar_sesion {
                        display: none;
                        visibility: hidden;
                    }

                    @media screen and (max-width: 1440px) {
                        #contenedor_contenido_header {
                            grid-template-columns: 13% 53% 27% 7%;
                        }
                    }

                    @media screen and (max-width: 1280px) {
                        #contenedor_contenido_header {
                            grid-template-columns: 7% 61% 29% 3%;
                        }

                        .fondo_boton_modo_oscuro {
                            background-color: #84848400;
                            border: none;
                            border-radius: 0px;
                            box-shadow: inset 0px 0px 0px black;
                            width: 30px;
                        }

                        #fondo_boton_modo_oscuro {
                            background-color: #212f3d00;
                            border: none;
                            border-radius: 0px;
                            box-shadow: inset 0px 0px 0px black;
                        }

                        .btn_modo_oscuro {
                            transform: translate(-10px, -3px);
                        }

                        #btn_modo_oscuro {
                            transform: translate(-10px, -3px);
                        }
                    }

                    @media screen and (max-width: 960px) {
                        #contenedor_contenido_header {
                            grid-template-columns: 7% 61% 29% 3%;
                        }

                        .contenedor_boton_modo_oscuro {
                            margin: auto;
                        }

                        .btn_modo_oscuro {
                            height: 25px;
                            width: 25px;
                            transform: translate(-10px, -12px);
                        }

                        #btn_modo_oscuro {
                            transform: translate(-10px, -9px);
                        }
                    }

                    @media screen and (max-width: 768px) {
                        .contenedor_boton_modo_oscuro {
                            position: absolute;
                            right: 0%;
                            margin-right: 0px;
                        }

                        .btn_modo_oscuro {
                            transform: translate(-10px, -4px);
                            height: 30px;
                            width: 30px;
                        }

                        .btn_modo_oscuro i {
                            font-size: 18px;
                        }

                        #btn_modo_oscuro i {
                            font-size: 18px;
                        }

                        #btn_modo_oscuro {
                            transform: translate(-10px, -4px);
                        }
                    }

                    @media screen and (max-width: 380px) {}
                </style>
            <?php
            }
            ?>


            <!-- SESION CERRADA -->
            <div class="contenedor_btn_socios_header">
                <button class="btn_hacete_socio_header" title="Hacerse socio del club">HACETE SOCIO</button>
                <button class="btn_acceder_socios_header" title="Acceder a tu cuenta de socio">ACCESO SOCIOS</button>
            </div>

            <!-- SESION INICIADA -->
            <div class="contenedor_boton_modo_oscuro">
                <div class="fondo_boton_modo_oscuro">
                    <div class="btn_modo_oscuro check_light">
                        <i class="fa-solid fa-moon"></i>
                    </div>
                    <div class="btn_modo_claro check_dark">
                        <i class="fa-solid fa-sun"></i>
                    </div>
                </div>
            </div>

            <div id="contenedor_iniciar_sesion_responsive" class="contenedor_iniciar_sesion">
                <div class="contenedor_contenido_iniciar_sesion">
                    <div class="contenedor_imagen_iniciar_sesion">
                        <button class="btn_inicio_usuario">
                            <i id="icono_inicio_usuario" class="icono_inicio_usuario fa-solid fa-user"></i>
                        </button>
                    </div>
                    <ul class="nav_btn_sesion">
                        <a href="./vistas/perfil.php">
                            <li>
                                <i class="fa-solid fa-user"></i>
                                <span>
                                    <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?>
                                </span>
                            </li>
                        </a>
                        <a href="./php/cerrar_sesion.php">
                            <li>
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span>
                                    Salir
                                </span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>

    </header>


    <main class="main_index">
        <section class="main_seccion_superior">
            <div class="main_superior_izquierda">
                <article id="img_1" class="main_img1_mostrar"></article>
                <article id="img_2" class="main_img2_ocultar"></article>
                <article id="img_3" class="main_img3_ocultar"></article>
                <article id="img_4" class="main_img4_ocultar"></article>
                <article id="img_5" class="main_img5_ocultar"></article>
                <i class="main_icono_img_anterior fa-solid fa-less-than"></i>
                <i class="main_icono_img_siguiente fa-solid fa-greater-than"></i>
                <div class="main_contenedor_puntos">
                    <i id="mostrar" class="main_punto1 fa-solid fa-circle"></i>
                    <i id="ocultar" class="main_punto2 fa-solid fa-circle"></i>
                    <i id="ocultar" class="main_punto3 fa-solid fa-circle"></i>
                    <i id="ocultar" class="main_punto4 fa-solid fa-circle"></i>
                    <i id="ocultar" class="main_punto5 fa-solid fa-circle"></i>
                </div>
            </div>
            <div class="main_superior_derecha">
                <h2>SIGUIENTE PARTIDO ></h2>
                <div class="main_partido">
                    <div class="main_local">
                        <img src="./images/escudoPalo.png" alt="">
                        <h3>C.F. DEPORTIVO PALO</h3>
                    </div>
                    <div>
                        <h4><span class="main_resultado">0</span> <span class="main_vs">VS.</span> <span class="main_resultado">7</span></h4>
                    </div>
                    <div class="main_visita">
                        <img src="./images/escudoVisita.png" alt="">
                        <h3>REAL SICARIONA</h3>
                    </div>
                </div>
                <h4 style="text-align: center; font-size: 16px; font-family: Graduate; font-weight: 400; color: white;">
                    19/03/2023 18:00HS AV. DIRECTORIO 4147</h4>
                <div class="main_videos">
                    <a href="./vistas/videos.php">VIDEOS ></a>
                    <div class="main_video_principal">
                        <video src="" controls></video>
                    </div>
                </div>
            </div>
        </section>
        <section class="main_seccion_inferior">
            <div class="main_inferior">
                <a href="./vistas/galeria.php"><span class="main_letra_verde">VER</span> <span class="main_letra_blanca">GAL</span><span class="main_letra_roja">ERIA</span></a>
            </div>
        </section>
        <div class="main_videos_xxs">
            <a href="./vistas/videos.php">VIDEOS ></a>
        </div>
        <div class="main_galeria_xxs">
            <a href="./vistas/galeria.php">GALERIA ></a>
        </div>
    </main>

    <footer>
        <div class="footer_escudo">
            <img src="./images/escudoPalo.png" alt="">
        </div>
        <div class="footer_info">
            <h2>DEPORTIVO PALO</h2>
            <h3>EL PRIMERO EN SER UN GRAN BARRIO</h3>
            <p class="footer_copyright">&copy; COPYRIGHT DEPORTIVO PALO 2023</p>
        </div>
        <div class="footer_redes">
            <div>
                <a class="footer_links" target="_blank" href="https://www.instagram.com/cfdeportivopalo/"><i class="icono_footer fa-brands fa-instagram"></i></a>
            </div>
            <div>
                <a class="footer_links" target="_blank" href="https://www.tiktok.com/@cfdeportivopalo"><i class="icono_footer fa-brands fa-tiktok"></i></a>
            </div>
            <div>
                <a class="footer_links" target="_blank" href="https://twitter.com/CFDeportivoPalo"><i class="icono_footer fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </footer>

    <!-- JS PRINCIPAL -->
    <script src="./js/modo_oscuro.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/header.js"></script>
</body>

</html>