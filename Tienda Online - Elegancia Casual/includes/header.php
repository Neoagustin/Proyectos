<header>
    <ul class="ul-header">
        <li><a href="./pagina.php"><img class="logo-header" src="../assets/img/Iconos/logo.png" alt="inicio"></a></li>
        <li><a href="./pagina.php">Inicio</a></li>
        <li><a href="./pagina.php#nuevosModelos">Nuevos Modelos</a></li>
        <li><a href="./pagina.php#ofertas">Ofertas</a></li>
    </ul>

    <ul class="ul-header-responsive">
        <li class="boton-menu" id="botonMenu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </li>
        <li class="desktop"><a href="./pagina.php"><img class="logo-header" src="../assets/img/Iconos/logo.png" alt="inicio"></a></li>
    </ul>

    <div class="contenedor-buscador desktop">
        <input type="text" class="buscador-input" placeholder="ESTOY BUSCANDO...">
        <i class="fas fa-search search-icon"></i>
    </div>
    <div class="contenedor-padre-iconos-header">
        <?php if (isset($_SESSION['id_usuario']) && isset($_SESSION['nombre_usuario'])) { ?>
            <div id="contenedor-icono-miCuenta" class="contenedor-icono-miCuenta">
                <i class="fa-solid fa-user"></i>
                <p><?php echo $_SESSION['nombre_usuario'] ?></p>
                <div id="barraDesplegable" class="barra-desplegable">
                    <p><i class="fas fa-user-circle"></i>Mi Cuenta</p>
                    <p class="btn_cerrar_sesion"><a><i class="fas fa-sign-out-alt"></i>Salir</a></p>
                </div>
            </div>
        <?php } else { ?>
            <div class="contenedor-icono-miCuenta" id="miCuentaBtn">
                <i class="fa-solid fa-user"></i>
                <p>MI CUENTA</p>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['id_usuario']) && isset($_SESSION['nombre_usuario'])) { ?>
            <a href="./carrito.php" class="contenedor-icono-carrito">
                <i class="fa-solid fa-cart-shopping">
                <span class="contenedor-numero-carrito"><?php echo isset($suma_unidades) ? $suma_unidades : '0'; ?></span>
                </i>
                <p>MI CARRITO</p>
            </a>
        <?php } else { ?>
            <a class="contenedor-icono-carrito carrito-deslogeado">
                <i class="fa-solid fa-cart-shopping">
                <span class="contenedor-numero-carrito"><?php echo isset($_SESSION['unidades_carrito']) ? $_SESSION['unidades_carrito'] : '0'; ?></span>
                </i>
                <p>MI CARRITO</p>
            </a>
        <?php } ?>
    </div>

</header>

<!-- Responsive -->
<div class="contenedor-padre-buscador buscador-mobile">
    <a href="./pagina.php"><img class="logo-header" src="../assets/img/Iconos/logo.png" alt="inicio"></a>
    <div class="contenedor-buscador buscador-mobile">
        <input type="text" class="buscador-input" placeholder="ESTOY BUSCANDO...">
        <i class="fas fa-search search-icon"></i>
    </div>
</div>
<div class="contenedor-listaDesplegable-header">
    <ul>
        <li><a href="./pagina.php">Inicio</a></li>
        <li><a href="./pagina.php#nuevosModelos">Nuevos Modelos</a></li>
        <li><a href="./pagina.php#ofertas">Ofertas</a></li>
    </ul>
</div>