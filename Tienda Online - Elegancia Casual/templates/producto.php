<?php
session_start();
include('../config/database/database.php');
include('../includes/Tarjeta-producto.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener datos generales del producto desde la tabla productos
    $query = "SELECT * FROM productos WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado && $row = $resultado->fetch_array()) {
        $imagen = $row['imagen'];
        $precioAnterior = number_format($row['precioAnterior'], 0, ',', '.');
        $descuento = $row['descuento'];
        $precio = number_format($row['precio'], 0, ',', '.');
        $descripcion = $row['descripcion'];
        $tipo = $row['tipo'];
    } else {
        echo "No se encontraron datos para mostrar.";
        exit;
    }

    // Obtener la disponibilidad específica del producto desde la tabla productos_colores
    $sql_disponibles = "SELECT disponibles FROM productos_colores WHERE id_producto = $id";
    $resultado_disponibles = mysqli_query($conexion, $sql_disponibles);

    if ($resultado_disponibles && $row_disponibles = $resultado_disponibles->fetch_array()) {
        $disponibles = $row_disponibles['disponibles'];
    } else {
        $disponibles = 0;
    }
} else {
    echo "ID de producto no válido.";
    exit;
}

$sql_colores = "SELECT c.id_color, c.nombre_color, pc.disponibles
                FROM productos_colores pc
                JOIN colores c ON pc.id_color = c.id_color
                WHERE pc.id_producto = $id
                ORDER BY pc.id_producto_color ASC";

$resultado_colores = mysqli_query($conexion, $sql_colores);

if ($resultado_colores && mysqli_num_rows($resultado_colores) > 0) {
    $colores = array();
    while ($row_colores = mysqli_fetch_assoc($resultado_colores)) {
        $colores[] = array(
            "id_color" => $row_colores["id_color"],
            "nombre_color" => $row_colores["nombre_color"],
            "disponibles" => $row_colores["disponibles"]
        );
    }
} else {
    $colores = array();
}


if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {

    $usuario_id = $_SESSION['id_usuario'];
    $query = "SELECT unidades FROM carrito WHERE usuario_id = ?";

    $stmt = $conexion->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();

        if ($stmt->error) {
            die("Error de ejecución: " . $stmt->error);
        }

        $result_unidades = $stmt->get_result();

        $suma_unidades = 0;

        if ($result_unidades->num_rows > 0) {
            while ($row = $result_unidades->fetch_assoc()) {
                $row['unidades'];
                $suma_unidades += $row['unidades'];
            }
            $_SESSION['unidades_carrito'] = $suma_unidades;
        }

        if ($result_unidades->num_rows == 0) {
            $_SESSION['unidades_carrito'] = 0;
        }

        $stmt->close();
    } else {
        die("Error de preparación: " . $conexion->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('../includes/head.php'); ?>
<link rel="stylesheet" href="../assets/css/main/main-producto.css">
<link rel="stylesheet" href="../assets/css/responsive/main-responsive/producto-responsive.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4/bootstrap-4.css">
<title>Producto</title>

<body>
    <?php include('../includes/header.php'); ?>
    <main class="main-producto">
        <?php include('../includes/tarjeta-login.php'); ?>
        <p class="descripcion-superior-prducto"><a href="pagina.php">Inicio/</a> <?php echo $descripcion ?></p>
        <section class="seccion-galeria-producto">
            <div class="contenedor-izquierda-galeria-producto">
                <ul>
                    <li><a href="">Galeria</a></li>
                    <li><a href="">Especificaciones</a></li>
                    <li><a href="">Descripción</a></li>
                </ul>
                <div class="contenedor-imagenes-galeria-producto">
                    <div class="contenedor-imagenes-miniaturas">
                        <?php
                        $contador = 1;

                        foreach ($colores as $color) {
                            $nombre_imagen = $contador . ".png";
                            $imagen_path = $imagen . $nombre_imagen;

                            echo "<img class='color-selector' data-color='$contador' data-disponibles='{$color['disponibles']}' data-nombre-color='{$color['nombre_color']}' src='$imagen_path' alt='Remera {$color['nombre_color']}'>";

                            $contador++;
                        }
                        ?>
                    </div>
                    <div class="contenedor-imagen-principal-producto">
                        <img id="imagen-principal" data-imagen="<?php echo $imagen; ?>" src="<?php echo $imagen; ?>1.png" alt="Remera">
                    </div>
                </div>
            </div>
            <div class="contenedor-derecha-galeria-producto">
                <div class="contenedor-tarjeta-agregarCarrito">
                    <div class="contenedor-tarjeta-superior-agregarCarrito">
                        <p class="descripcion-producto"><?php echo $descripcion ?></p>
                        <p class="codigo-area-producto">COD: AA3482 |</p>
                        <div class="contenedor-oferta">
                            <p class="precio-anterior-producto"><?php echo isset($precioAnterior) && $precioAnterior != 0 ? $precioAnterior : ''; ?>
                            <p class="<?php echo $descuento > 0 ? 'descuento-producto' : ''; ?>">
                                <?php echo isset($descuento) ? $descuento : ''; ?>
                            </p>
                        </div>
                        <p class="precio-producto"><?php echo $precio ?></p>
                    </div>
                    <?php if (isset($_SESSION['id_usuario']) && isset($_SESSION['nombre_usuario'])) { ?>
                        <form id="formulario-producto" class="formulario-producto" action="./carrito.php" method="GET">
                        <?php } else { ?>
                            <form id="formulario-producto-deslogeado" class="formulario-producto" method="GET">
                            <?php } ?>
                            <div class="contenedor-caracteristica-producto">
                                <label for="seleccionar-color">Color:</label>
                                <div class="contenedor-select-producto">
                                    <?php
                                    $productoColor = '';
                                    ?>
                                    <select id="seleccionar-color" name="color">
                                        <?php $contador_2 = 1; ?>
                                        <?php foreach ($colores as $color) : ?>
                                            <option value="<?php echo $contador_2; ?>" <?php echo $color['nombre_color'] == $productoColor ? 'selected' : ''; ?>><?php echo $color['nombre_color']; ?></option>
                                            <?php $contador_2++; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>

                            <div class="contenedor-caracteristica-producto">
                                <label for="seleccionar-talle"><strong>Talle:</strong> Seleccioná una opción</label>
                                <div class="contenedor-select-producto">
                                    <select id="seleccionar-talle" name="talle">
                                        <option value="" disabled selected>Seleccioná una opción</option>
                                        <option value="talle-xs">XS</option>
                                        <option value="talle-s">S</option>
                                        <option value="talle-m">M</option>
                                        <option value="talle-l">L</option>
                                        <option value="talle-xl">XL</option>
                                        <option value="talle-xxl">XXL</option>
                                    </select>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>

                            <div class="contenedor-caracteristica-producto">
                                <label for="seleccionar-cantidad">Cantidad: </label>
                                <div class="contenedor-select-producto">
                                    <select id="seleccionar-cantidad" name="cantidad" onchange="updateAvailableQuantity()">
                                        <!-- Opciones de cantidad se generaran dinamicamente con JavaScript -->
                                    </select>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <h4 id="disponibles"><?php echo $colores[0]['disponibles'] ?> (disponibles)</h4>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="hidden" name="descripcion" value="<?php echo $descripcion ?>">
                            <input type="hidden" name="unidades" value="">
                            <input type="hidden" id="input-disponibles" name="disponibles" value="<?php echo $colores[0]['disponibles'] ?>">
                            <input type="hidden" name="precio" value="<?php echo str_replace('.', '', $precio); ?>">
                            <input type="hidden" name="imagen" value="<?php echo $imagen ?>">
                            <input type="hidden" name="id_color" value="<?php echo isset($_GET['color']) ? htmlspecialchars($_GET['color']) : ''; ?>">
                            <input type="hidden" name="nombre_color" value="">

                            <?php if (isset($_SESSION['id_usuario']) && isset($_SESSION['nombre_usuario'])) { ?>
                                <input class="btn-agregarCarrito" type="submit" name="btn-agregarCarrito" value="AGREGAR AL CARRITO">
                            <?php } else { ?>
                                <input class="btn-agregarCarrito" type="submit" name="btn-agregarCarrito" value="AGREGAR AL CARRITO">
                            <?php } ?>
                            </form>
                </div>
            </div>
        </section>

        <section class="seccion-especificaciones-producto">
            <h3>Espicificaciones generales</h3>
            <div class="contenedor-iconosDescripcion-producto">
                <div>
                    <i class="fa-solid fa-check"></i>
                    <p>Género: <strong>Indistinto</strong></p>
                </div>
                <div>
                    <i class="fa-solid fa-shirt"></i>
                    <p>Tipo de cuello: <strong>Redondo</strong></p>
                </div>
                <div>
                    <i class="fa-solid fa-shirt"></i>
                    <p>Tipo de manga: <strong>Corta</strong></p>
                </div>
                <div>
                    <i class="fa-solid fa-shirt"></i>
                    <p>Tipo de prenda: <strong>Remera</strong></p>
                </div>
                <div>
                    <i class="fa-solid fa-layer-group"></i>
                    <p>Material principal: <strong>Algodón</strong></p>
                </div>
            </div>
        </section>

        <section class="seccion-descripcion-producto">
            <h3>Descripción</h3>
            <p>
            <pre>
Medidas de la prenda:

XS = ANCHO:44 LARGO:64
S = ANCHO:47 LARGO:67
M = ANCHO:50 LARGO:70
L = ANCHO:53 LARGO:73
XL = ANCHO:56 LARGO:76
XXL = ANCHO:59 LARGO:80
3XL = ANCHO:62 LARGO:83 

El ancho se mide de axila a axila. Justo de la costura de debajo de una manga a la otra. El largo se toma desde el borde del cuello hasta el bajo de la camiseta, intentando mantener la regla/metro lo más recta posible. <br>

CAMBIOS:- Los productos deberán ser devueltos en perfectas condiciones, sin uso y en sus envases originales.- El cambio está sujeto a disponibilidad de stock y previo acuerdo con el centro de atención al cliente.
                </pre>
            </p>
        </section>
    </main>
    <section class="seccion-otrosProductos-producto">
        <div class="contenedor-padre-otrosProductos-producto">
            <h3>También te puede interesar</h3>
            <div class="contenedor-otrosProductos-producto">
                <?php
                $query = "SELECT * FROM productos";
                $resultado = mysqli_query($conexion, $query);

                if ($resultado && $resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_array()) {
                        $id = $row['id'];
                        $imagen = $row['imagen'];
                        $precioAnterior = number_format($row['precioAnterior'], 0, ',', '.');
                        $descuento = $row['descuento'];
                        $precio = number_format($row['precio'], 0, ',', '.');
                        $descripcion = $row['descripcion'];
                        $tipo = $row['tipo'];

                        $oferta = $descuento > 0 ? 'oferta' : '';

                        $url = 'href="producto.php?id=' . $id . '"';
                        tarjetaProducto($url, $oferta, $imagen . '1.png', $precioAnterior, $descuento, $precio, $descripcion, $tipo);
                    }
                } else {
                    echo "No hay productos en esta sección.";
                }
                ?>
            </div>
        </div>
    </section>

    <?php include('../includes/footer.php') ?>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>