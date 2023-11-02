<div id="contenedor_contenido_header" class="contenedor_contenido_header">
    <div></div>
    <div class="contenedor_nav_header">
        <a href="../index.php">
            <img src="../images/escudoPalo.png" alt="" title="Escudo Deportivo Palo">
        </a>
        <nav class="header_nav">
            <ul class="header_menu_horizontal">
                <li class="header_verde">
                    <span class="header_verde">Club</span>
                    <ul class="header_menu_vertical">
                        <li><a href="club.php#ancla_datos">Datos</a></li>
                        <li><a href="club.php#ancla_historia">Historia</a></li>
                    </ul>
                </li>
                <li class="header_rojo">
                    <span class="header_rojo">Futbol</span>
                    <ul class="header_menu_vertical">
                        <li><a href="futbol_plantel.php">Plantel</a></li>
                        <li><a href="futbol.php#ancla_fixture">Fixture</a></li>
                        <li><a href="futbol.php#ancla_torneo">Torneo</a></li>
                        <li><a href="futbol.php#ancla_titulos">Titulos</a></li>
                    </ul>
                </li>
                <li class="header_verde header_uno_verde">
                    <span class="header_verde">Deportivo</span>
                    <ul class="header_menu_vertical">
                        <li><a href="deportivo.php">Noticias</a></li>
                    </ul>
                </li>
                <li class="header_rojo largo">
                    <span class="header_rojo largo cinco">Socios</span>
                    <ul class="header_menu_vertical">
                        <li><a href="socios.php#ancla_informacion">Informacion</a></li>
                        <li><a href="socios.php#ancla_valores">Valores</a></li>
                        <li><a href="socios.php#ancla_preguntas">Preguntas</a></li>
                        <li><a id="hacete_socio" href="socios_asociate.php">Hacete Socio</a></li>
                        <li><a id="acesso_socio" href="socios_acceso.php">Acceso Socios</a></li>
                    </ul>
                </li>
                <li class="header_verde header_uno_verde">
                    <span class="header_verde">Marketing</span>
                    <ul class="header_menu_vertical">
                        <li><a href="marketing.php">Marketing</a></li>
                    </ul>
                </li>
                <li class="header_rojo header_uno_rojo ult_li_header">
                    <span class="header_rojo" href="">Canticos</span>
                    <ul class="header_menu_vertical">
                        <li><a href="canticos.php">Temas</a></li>
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
                                <a href="perfil.php">
                                    <li>
                                        <i class="fa-solid fa-user"></i>
                                        <span>
                                            <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?>
                                        </span>
                                    </li>
                                </a>
                                <a href="../php/cerrar_sesion.php">
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
                            <li><a class="header_cerrar_menu_responsive" href="club.php#ancla_datos">Datos</a></li>
                            <li><a class="header_cerrar_menu_responsive" href="club.php#ancla_historia">Historia</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header_contenedor_seccion_responsivo">
                    <p class="header_verde_responsivo">Futbol</p>
                    <div class="header_contenedor_links">
                        <ul>
                            <li><a class="header_cerrar_menu_responsive" href="futbol_plantel.php">Plantel</a></li>
                            <li><a class="header_cerrar_menu_responsive" href="futbol.php#ancla_fixture">Fixture</a></li>
                            <li><a class="header_cerrar_menu_responsive" href="futbol.php#ancla_torneo">Torneo</a></li>
                            <li><a class="header_cerrar_menu_responsive" href="futbol.php#ancla_titulos">Titulos</a></li>
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
                            <li><a class="header_cerrar_menu_responsive" href="socios.php#ancla_informacion">Informacion</a></li>
                            <li><a class="header_cerrar_menu_responsive" href="socios.php#ancla_valores">Valores</a></li>
                            <li><a class="header_cerrar_menu_responsive" href="socios.php#ancla_preguntas">Preguntas</a></li>
                            <li><a id="hacete_socio" class="header_cerrar_menu_responsive" href="socios_asociate.php">Hacete Socio</a></li>
                            <li><a id="acceso_socio" class="header_cerrar_menu_responsive" href="socios_acceso.php">Acceso Socios</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header_contenedor_seccion_responsivo">
                    <p class="header_rojo_responsivo">Marketing</p>
                    <div class="header_contenedor_links">
                        <ul>
                            <li><a class="header_cerrar_menu_responsive" href="marketing.php">Marketing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header_contenedor_seccion_responsivo">
                    <p class="header_rojo_responsivo">Canticos</p>
                    <div class="header_contenedor_links">
                        <ul>
                            <li><a class="header_cerrar_menu_responsive" href="canticos.php">Temas</a></li>
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
                    <i class="icono_inicio_usuario fa-solid fa-user"></i>
                </button>
            </div>
            <ul class="nav_btn_sesion">
                <a href="perfil.php">
                    <li>
                        <i class="fa-solid fa-user"></i>
                        <span>
                            <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?>
                        </span>
                    </li>
                </a>
                <a href="../php/cerrar_sesion.php">
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